<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alarm;
use App\Models\Notice;
use App\Models\Message;
use App\Mail\VerifyEmail;
use App\Models\Advertisement;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showLogin() {
        return view('auth.user-login');
    }

    public function storeLogin(Request $request) {
        $loginAdmin = User::where('email', $request->email)->first();
    
        if (!$loginAdmin) {
            Session::flash('error', 'Email is Incorrect');
            return redirect()->back();
        }
    
        if (!Hash::check($request->password, $loginAdmin->password)) {
            Session::flash('error', 'Email or Password is Incorrect');
            return redirect()->back();
        }
    
        Auth::login($loginAdmin);
        $request->session()->regenerate();
    
        return redirect()->route('user.get.alarms');
    }

    public function showRegister() {
        return view('auth.user-register');
    }

    public function storeRegister(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'company_name' => $request->companyName,
            'status' => 1,
        ]);
        
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );
    
        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));
    
        return view('auth.user-register-verify-email', ['user' => $user]);
    }

    public function getAlarms() {
        $alarms = Alarm::where('to_email', Auth::user()->email)->where('status', 0)->get();
        $checkedAlarms = Alarm::where('to_email', Auth::user()->email)->where('status', 1)->get();
        $users = User::all();
        return view('users.alarms', compact('alarms', 'checkedAlarms', 'users'));
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

    public function getMembers() {
        $limit = 10;
        $users = User::where('id', '!=', Auth::user()->id)->paginate($limit);
        $ttl = $users->total();
        $ttlpage = ceil($ttl/$limit);
        return view('users.members', compact('users', 'ttl', 'ttlpage'));
    }

    public function getAdvertisements() {
        $advertisements = Advertisement::all();
        return view('users.advertisements', compact('advertisements'));
    }

    public function showAdvertisement() {
        $advertisement = Advertisement::where('user_id', Auth::user()->id)->first();
        return view('users.show-advertisement', compact('advertisement'));
    }

    public function storeAdvertisement(Request $request) {
        dd($request->all());
    }

    public function getAnnouncements() {
        $announcements = Announcement::where('created_by', '!=', Auth::user()->id)->get();
        $users = User::all();
        return view('users.announcements', compact('announcements', 'users'));
    }

    public function showAnnouncements() {
        $limit = 10;
        $announcements = Announcement::where('created_by', Auth::user()->id)->paginate($limit);
        $ttl = $announcements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.show-announcements', compact('announcements', 'ttl', 'ttlpage'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::find($id);
        return view('users.show-announcement', compact('announcement'));
    }

    public function addAnnouncement() {
        return view('users.add-announcement');
    }

    public function storeAnnouncement(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        Announcement::create([
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'date_time' => $request->dateTime,
            'location' => $request->location,
            'created_by' => Auth::user()->id,
        ]);

        Session::flash('success', 'ビズ公示が正常に追加されました');
        return redirect()->route('user.show.announcements');
    }

    public function editAnnouncement($id) {
        $announcement = Announcement::find($id);
        return view('users.edit-announcement', compact('announcement'));
    }

    public function updateAnnouncement(Request $request) {
        $updateData = [
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'date_time' => $request->dateTime,
            'location' => $request->location,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        Announcement::where('id', $request->id)->update($updateData);
        Session::flash('success', 'ビズ公示が正常に更新されました');
        return redirect()->route('user.show.announcements');
    }

    public function deleteAnnouncement($id) {
        Announcement::where('id', $id)->delete();
        Session::flash('success', 'ビズ公示が正常に削除されました');
        return redirect()->route('user.show.announcements');
    }

    public function getMessages() {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $messages = Message::where('from_email', Auth::user()->email)->orWhere('to_email', Auth::user()->email)->get();
        return view('users.messages', compact('users', 'messages'));
    }

    public function sendMessage(Request $request) {
        $message = Message::create([
            'from_email' => Auth::user()->email,
            'to_email' => $request->toEmail,
            'message' => $request->message
        ]);

        $alarm = Alarm::where('from_email', Auth::user()->email)
                  ->where('to_email', $request->toEmail)
                  ->first();

        if ($alarm) {
            // Update the existing alarm
            $alarm->related_id = $message->id;
            $alarm->status = 0;
            $alarm->save();
        } else {
            // Create a new alarm
            Alarm::create([
                'type' => 'メッセージ',
                'alarm' => 'メッセージがあります',
                'from_email' => Auth::user()->email,
                'to_email' => $request->toEmail,
                'related_id' => $message->id,
                'status' => 0,
            ]);
        }

        return redirect()->route('user.get.messages');
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
