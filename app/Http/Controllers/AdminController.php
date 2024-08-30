<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Notice;
use App\Models\Section;
use App\Models\TopFooter;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLogin() {
        return view('auth.admin-login');
    }

    public function storeLogin(Request $request) {
        $loginAdmin = Admin::where('email', $request->email)->first();
    
        if (!$loginAdmin) {
            Session::flash('error', 'Email is Incorrect');
            return redirect()->back()->withInput();
        }
    
        if (!Hash::check($request->password, $loginAdmin->password)) {
            Session::flash('error', 'Email or Password is Incorrect');
            return redirect()->back()->withInput();
        }
    
        Auth::guard('admin')->login($loginAdmin);
        $request->session()->regenerate();
    
        return redirect()->route('admin.get.home');
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

    public function getHome() {
        $headers = TopHeader::all();
        $footers = TopFooter::all();
        return view('admins.home', compact('headers', 'footers'));
    }

    public function addHeader() {
        return view('admins.add-header');
    }

    public function storeHeader(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        TopHeader::create([
            'title' => $request->title,
            'image' => $imageName
        ]);

        Session::flash('success', 'ヘッダが正常に追加されました');
        return redirect()->route('admin.get.home');
    }

    public function editHeaders() {
        $limit = 10;
        $headers = TopHeader::paginate($limit);
        $ttl = $headers->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.edit-headers', compact('headers', 'ttl', 'ttlpage'));
    }

    public function editHeader($id) {
        $header = TopHeader::where('id', $id)->first();
        return view('admins.edit-header', compact('header'));
    }

    public function updateHeader(Request $request) {
        $updateData = [
            'title' => $request->title,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        TopHeader::where('id', $request->id)->update($updateData);
        Session::flash('success', 'ヘッダが正常に更新されました');
        return redirect()->route('admin.get.home');
    }

    public function deleteHeader($id) {
        TopHeader::where('id', $id)->delete();
        Session::flash('success', 'ヘッダが正常に削除されました');
        return redirect()->route('admin.edit.headers');
    }

    public function editFooters() {
        $limit = 10;
        $footers = TopFooter::paginate($limit);
        $ttl = $footers->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.edit-footers', compact('footers', 'ttl', 'ttlpage'));
    }

    public function addFooter() {
        $footers = TopFooter::all();
        return view('admins.add-footer', compact('footers'));
    }

    public function storeFooter(Request $request) {
        $name = null;
        $text = null;
        if ($request->type == "useful") {
            $name = $request->nameUseful;
        } elseif ($request->type == "social") {
            $name = $request->nameSocial;
        } elseif ($request->type == "text") {
            $text = $request->text;
        } elseif ($request->type == "contact") {
            $text = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $text = $request->copyRight;
        } elseif ($request->type == "logo") {
            if (!empty($request->logo)) {
                $logoName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('assets/images/all'), $logoName);
            } else {
                $logoName = '';
            }
            $text = $logoName;
        }

        TopFooter::create([
            'type' => $request->type,
            'name' => $name,
            'url' => $request->url,
            'text' => $text,
        ]);

        Session::flash('success', 'ヘッダが正常に追加されました');
        return redirect()->route('admin.get.home');
    }

    public function editFooter($id) {
        $footer = TopFooter::where('id', $id)->first();
        return view('admins.edit-footer', compact('footer'));
    }

    public function updateFooter(Request $request) {
        $updateData = [
            'type' => $request->type,
            'url' => $request->url
        ];

        if ($request->type == "useful") {
            $updateData['name'] = $request->nameUseful;
        } elseif ($request->type == "social") {
            $updateData['name'] = $request->nameSocial;
        } elseif ($request->type == "text") {
            $updateData['text'] = $request->text;
        } elseif ($request->type == "contact") {
            $updateData['text'] = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $updateData['text'] = $request->copyRight;
        }

        TopFooter::where('id', $request->id)->update($updateData);
        Session::flash('success', 'ヘッダが正常に更新されました');
        return redirect()->route('admin.edit.footers');
    }

    public function deleteFooter($id) {
        TopFooter::where('id', $id)->delete();
        Session::flash('success', 'ヘッダが正常に削除されました');
        return redirect()->route('admin.edit.footers');
    }
}
