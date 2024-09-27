<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alarm;
use App\Models\Notice;
use App\Models\Company;
use App\Mail\VerifyEmail;
use App\Models\Prefecture;
use App\Models\BankAccount;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use App\Models\RegisterSelector;
use Illuminate\Support\Facades\URL;
use App\Mail\BankTransferAlertEmail;
use App\Mail\CompleteTransferAlertEmail;
use App\Mail\NewMemberRegisterEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestBankTransferEmail;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    public function showLogin() {
        return view('auth.user-login');
    }

    public function storeLogin(Request $request) {
        $loginUser = User::where('email', $request->email)->first();
    
        if (!$loginUser) {
            Session::flash('error', '正しいメールアドレスとパスワードを入力してください');
            return redirect()->back()->withInput();
        }
    
        if (!Hash::check($request->password, $loginUser->password)) {
            Session::flash('error', '正しいメールアドレスとパスワードを入力してください');
            return redirect()->back()->withInput();
        }
    
        if ($loginUser->status == 0) {
            Session::flash('error', 'アカウントは無効になりました');
            return redirect()->back()->withInput();
        }
    
        Auth::login($loginUser);
        $request->session()->regenerate();
    
        return redirect()->route('user.get.alarms');
    }

    public function showRegister() {
        $cutoff = \Carbon\Carbon::create(2024, 9, 30, 11, 0, 0);
        $now = \Carbon\Carbon::create(2024, 9, 30, 11, 0, 0);
    
        // Check if the current time is after the cutoff time
        if ($now->greaterThanOrEqualTo($cutoff)) {
            $registerSelectors = RegisterSelector::all();
            $prefectures = Prefecture::all();
            return view('auth.user-register', compact('registerSelectors', 'prefectures'));
        } else {
            return view('coming-soon');
        }
    }

    public function storeRegister(Request $request) {
        $user = User::create([
            'name' => $request->nameKanji,
            'name_furigana' => $request->nameFurigana,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_name' => $request->companyName,
            'image' => 'default-profile.webp',
            'plan_status' => 0,
            'status' => 1,
        ]);

        Company::create([
            'user_id' => $user->id,
            'name' => $request->companyName,
            'business' => $request->businessType,
            'purpose' => $request->purposeOfUse,
            'industry' => $request->industry,
            'position' => $request->position,
            'phone' => $request->companyPhone,
            'postal_code' => $request->companyPostalCode,
            'prefecture_id' => $request->companyPrefecture,
            'address' => $request->companyAddress,
            'website' => $request->companyWebsite
        ]);
        
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );
    
        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));

        $admins = Admin::all();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NewMemberRegisterEmail($user));
        }
    
        return view('auth.user-register-verify-email', ['user' => $user]);
    }

    public function forgotPassword() {
        return view('auth.user-forgot-password');
    }

    public function resetPasswordLink(Request $request) {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        $lastResend = session('last_resend_' . $request->email);

        if ($lastResend && now()->diffInSeconds($lastResend) < 300) { // 300 seconds = 5 minutes
            Session::flash('warning', 'パスワードリセットメールを再送信するには5分待つ必要があります');
            return redirect()->back();
        }

        // Update the last resend time
        session(['last_resend_' . $request->email => now()]);

        Session::flash('success', 'パスワードリセットメールが正常に送信されました。メールをご確認ください');
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('auth.user-reset-password', ['token' => $token]);
    }

    // Method to handle password update
    public function updateForgotPassword(Request $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );
        
        if ($status === Password::PASSWORD_RESET) {
            Session::flash('success', 'パスワードをリセットしました');
            return redirect()->route('user.show.login');
        } else {
            Session::flash('error', '正しいメールアドレスを入力してください');
            return redirect()->back();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function changePassword() {
        return view('users.change-password');
    }

    public function updatePassword(Request $request) {
        $user = User::find(Auth::user()->id);

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
        return redirect()->route('user.show.login');
    }

    public function showProfile() {
        $user = Auth::user();
        $company = Company::with('prefecture')->where('user_id', $user->id)->first();
        $prefectures = Prefecture::all();
        $registerSelectors = RegisterSelector::all();
        return view('users.profile', compact('user', 'company', 'prefectures', 'registerSelectors'));
    }

    public function updateProfile(Request $request) {
        $updateData = [
            'name' => $request->nameKanji,
            'name_furigana' => $request->nameFurigana,
            'email' => $request->email,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        User::where('id', Auth::user()->id)->update($updateData);

        Session::flash('success', 'ユーザー情報が正常に更新されました');
        return redirect()->route('user.show.profile');
    }

    public function updateCompany(Request $request) {
        $updateData = [
            'name' => $request->companyName,
            'business' => $request->businessType,
            'purpose' => $request->purposeOfUse,
            'industry' => $request->industry,
            'position' => $request->position,
            'phone' => $request->companyPhone,
            'postal_code' => $request->companyPostalCode,
            'prefecture_id' => $request->companyPrefecture,
            'address' => $request->companyAddress,
            'website' => $request->companyWebsite,
            'overview' => $request->companyOverview,
        ];

        Company::where('user_id', Auth::user()->id)->update($updateData);
        User::where('id', Auth::user()->id)->update(['company_name' => $request->companyName]);

        Session::flash('success', '会社情報が正常に更新されました');
        return redirect()->route('user.show.profile');
    }

    public function getAlarms() {
        $alarms = Alarm::with('sender')->where('to_user_id', Auth::user()->id)->where('status', 0)
        ->orderBy('updated_at', 'desc')->get();
        $checkedAlarms = Alarm::with('sender')->where('to_user_id', Auth::user()->id)->where('status', 1)
        ->orderBy('updated_at', 'desc')->get();
        return view('users.alarms', compact('alarms', 'checkedAlarms'));
    }

    public function checkAlarm($id) {
        $alarm = Alarm::find($id);
        if($alarm) {
            $alarm->status = 1;
            $alarm->save();
        }
        Session::flash('success', 'アラームをチェックしました');
        return redirect()->route('user.get.alarms');
    }

    public function deleteAlarm($id) {
        Alarm::where('id', $id)->delete();
        Session::flash('success', 'チェックしたアラームを削除しました');
        return redirect()->route('user.get.alarms');
    }

    public function getNotices(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $noticesQuery = Notice::orderBy('created_at', 'desc');

        if ($search) {
            $noticesQuery->where(function($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhere('body', 'like', "%{$search}%");
            });
        }

        $notices = $noticesQuery->paginate($limit);
        $ttl = $notices->total();
        $ttlpage = ceil($ttl/$limit);
        return view('users.notices.notices', compact('notices', 'ttl', 'ttlpage'));
    }

    public function getPlans() {
        $gotoplan = request()->query('upgrade') === 'yes';
        if ($gotoplan) {
            Session::flash('warning', 'この資料をダウンロードするには、プランをアップグレードしてください');
        }
        return view('users.plans');
    }

    public function purchasePlan($id) {
        $bankAccounts = BankAccount::all();
        $requestedPlan = $id;
        return view('users.purchase-plan', compact('bankAccounts', 'requestedPlan'));
    }

    public function bankTransferPayment(Request $request) {
        $userPaymentId = UserPayment::create([
            'user_id' => Auth::user()->id,
            'bank_account_id' => $request->bankAccountId,
            'transfer_name' => $request->transferName,
            'transfer_at' => $request->transferAt,
            'requested_plan' => $request->requestedPlan,
            'amount' => $request->finalAmount,
            'paid' => 0,
            'status' => 0
        ]);

        $userPayment = UserPayment::with('user')->with('bankAccount')->where('id', $userPaymentId->id)->first();

        Mail::to(Auth::user()->email)->send(new RequestBankTransferEmail($userPayment));

        $admins = Admin::all();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new BankTransferAlertEmail($userPayment));
        }
        
        Session::flash('warning', 'プランのアップグレード申請を承りました。ご入金の確認後、弊社担当者より承認させていただきます。');
        return redirect()->route('user.show.profile');
    }

    public function completePayment(Request $request) {
        UserPayment::where('user_id', Auth::user()->id)->where('status', 1)->update(['status' => 0]);

        $today = now()->startOfDay(); // Get the start of today (00:00:00)
        $nextMonthEnd = now()->addMonth()->endOfDay(); // Get the end of the day next month (23:59:59)

        $userPayment = UserPayment::create([
            'user_id' => Auth::user()->id,
            'bank_account_id' => 0,
            'transfer_name' => Auth::user()->name,
            'transfer_at' => now(),
            'requested_plan' => $request->requestedPlan,
            'plan_start' => $today,
            'plan_end' => $nextMonthEnd,
            'amount' => $request->finalAmount,
            'paid' => 1,
            'status' => 1
        ]);

        $user = User::find(Auth::user()->id);
        $user->plan_status = $userPayment->requested_plan;
        $user->plan_start = $today;
        $user->plan_end = $nextMonthEnd;
        $user->save();

        Alarm::create([
            'type' => 'アップグレード',
            'alarm' => 'プランのアップグレードに成功しました',
            'from_user_id' => 0,
            'to_user_id' => $user->id,
            'related_id' => $userPayment->id,
            'model' => 'UserPayment',
            'status' => 0,
        ]);

        $admins = Admin::all();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new CompleteTransferAlertEmail($userPayment));
        }

        Session::flash('success', 'プランのアップグレードに成功しました');
        return response()->json(['success' => true]);
    }
}
