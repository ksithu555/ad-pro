<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alarm;
use App\Models\Notice;
use App\Models\Message;
use App\Models\Section;
use App\Mail\VerifyEmail;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\AdvertisementSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\AdvertisementFooterBlock;
use App\Models\AdvertisementHeaderBlock;
use App\Models\Company;
use App\Models\Prefecture;
use App\Models\RegisterSelector;

class UserController extends Controller
{
    public function showLogin() {
        return view('auth.user-login');
    }

    public function storeLogin(Request $request) {
        $loginUser = User::where('email', $request->email)->first();
    
        if (!$loginUser) {
            Session::flash('error', 'Email is Incorrect');
            return redirect()->back()->withInput();
        }
    
        if (!Hash::check($request->password, $loginUser->password)) {
            Session::flash('error', 'Email or Password is Incorrect');
            return redirect()->back()->withInput();
        }
    
        Auth::login($loginUser);
        $request->session()->regenerate();
    
        return redirect()->route('user.get.alarms');
    }

    public function showRegister() {
        $registerSelectors = RegisterSelector::all();
        $prefectures = Prefecture::all();
        return view('auth.user-register', compact('registerSelectors', 'prefectures'));
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
    
        return view('auth.user-register-verify-email', ['user' => $user]);
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

        Session::flash('success', '会社情報が正常に更新されました');
        return redirect()->route('user.show.profile');
    }

    public function getAlarms() {
        $alarms = Alarm::with('sender')->where('to_user_id', Auth::user()->id)->where('status', 0)->get();
        $checkedAlarms = Alarm::with('sender')->where('to_user_id', Auth::user()->id)->where('status', 1)->get();
        return view('users.alarms', compact('alarms', 'checkedAlarms'));
    }

    public function checkAlarm($id) {
        $alarm = Alarm::find($id);
        if($alarm) {
            $alarm->status = 1;
            $alarm->save();
        }
        Session::flash('success', 'アラームチェック終わりました');
        return redirect()->route('user.get.alarms');
    }

    public function deleteAlarm($id) {
        Alarm::where('id', $id)->delete();
        Session::flash('success', 'チェックしたアラームを削除しました');
        return redirect()->route('user.get.alarms');
    }

    public function getNotices() {
        $limit = 10;
        $notices = Notice::paginate($limit);
        $ttl = $notices->total();
        $ttlpage = ceil($ttl/$limit);
        return view('users.notices', compact('notices', 'ttl', 'ttlpage'));
    }

    public function getPlans() {
        return view('users.plans');
    }
}
