<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Admin;
use App\Models\Notice;
use App\Models\Section;
use App\Models\TopFooter;
use App\Models\TopHeader;
use App\Models\TopSection;
use App\Models\BankAccount;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    public function showLogin() {
        return view('auth.admin-login');
    }

    public function storeLogin(Request $request) {
        $loginAdmin = Admin::where('email', $request->email)->first();
    
        if (!$loginAdmin) {
            Session::flash('error', '正しいメールアドレスとパスワードを入力してください');
            return redirect()->back()->withInput();
        }
    
        if (!Hash::check($request->password, $loginAdmin->password)) {
            Session::flash('error', '正しいメールアドレスとパスワードを入力してください');
            return redirect()->back()->withInput();
        }
    
        if ($loginAdmin->status == 0) {
            Session::flash('error', 'アカウントは無効になりました');
            return redirect()->back()->withInput();
        }
    
        Auth::guard('admin')->login($loginAdmin);
        $request->session()->regenerate();
    
        return redirect()->route('admin.get.home');
    }

    public function forgotPassword() {
        return view('auth.admin-forgot-password');
    }

    public function resetPasswordLink(Request $request) {
        $status = Password::broker('admins')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('auth.admin-reset-password', ['token' => $token]);
    }

    // Method to handle password update
    public function updateForgotPassword(Request $request)
    {
        $status = Password::broker('admins')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($admin, $password) {
                $admin->password = Hash::make($password);
                $admin->save();
            }
        );
    
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.show.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function changePassword() {
        return view('admins.change-password');
    }

    public function updatePassword(Request $request) {
        $user = Admin::find(Auth::guard('admin')->user()->id);

        if (!Hash::check($request->currentPassword, $user->password)) {
            Session::flash('error', '現在のパスワードが正しくありません');
            return redirect()->back()->withInput();
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();
        
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flash('success', 'パスワードが正常に更新されました');
        return redirect()->route('admin.show.login');
    }

    public function getBankAccounts(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $bankAccountsQuery = BankAccount::query();

        if ($search) {
            $bankAccountsQuery->where(function($query) use ($search) {
                $query->where('bank_name', 'like', "%{$search}%")
                    ->orWhere('branch_name', 'like', "%{$search}%")
                    ->orWhere('account_type', 'like', "%{$search}%")
                    ->orWhere('account_number', 'like', "%{$search}%")
                    ->orWhere('account_name', 'like', "%{$search}%");
            });
        }

        $bankAccounts = $bankAccountsQuery->orderBy('created_at', 'desc')->paginate($limit);
        $ttl = $bankAccounts->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.bank-accounts', compact('bankAccounts', 'ttl', 'ttlpage'));
    }

    public function addBankAccount() {
        return view('admins.add-bank-account');
    }

    public function storeBankAccount(Request $request) {
        BankAccount::create([
            'bank_name' => $request->bankName,
            'branch_name' => $request->branchName,
            'account_type' => $request->accountType,
            'account_number' => $request->accountNumber,
            'account_name' => $request->accountName,
            'status' => 1
        ]);

        Session::flash('success', '銀行口座が正常に追加されました');
        return redirect()->route('admin.get.bank.accounts');
    }

    public function editBankAccount($id) {
        $bankAccount = BankAccount::where('id', $id)->first();
        return view('admins.edit-bank-account', compact('bankAccount'));
    }

    public function updateBankAccount(Request $request) {
        $updateData = [
            'bank_name' => $request->bankName,
            'branch_name' => $request->branchName,
            'account_type' => $request->accountType,
            'account_number' => $request->accountNumber,
            'account_name' => $request->accountName,
        ];

        BankAccount::where('id', $request->id)->update($updateData);
        Session::flash('success', '銀行口座が正常に更新されました');
        return redirect()->route('admin.get.bank.accounts');
    }

    public function deleteBankAccount($id) {
        BankAccount::where('id', $id)->delete();
        Session::flash('success', '銀行口座が正常に削除されました');
        return redirect()->route('admin.get.bank.accounts');
    }

    public function updateBankAccountStatus(Request $request) {
        $bankAccount = BankAccount::find($request->id);
        if ($bankAccount) {
            $bankAccount->status = $request->status;
            $bankAccount->save();
            Session::flash('success', '銀行口座のステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '銀行口座ステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
