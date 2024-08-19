<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\News;
use App\Models\Notice;
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
            return redirect()->back();
        }
    
        if (!Hash::check($request->password, $loginAdmin->password)) {
            Session::flash('error', 'Email or Password is Incorrect');
            return redirect()->back();
        }
    
        Auth::login($loginAdmin);
        $request->session()->regenerate();
    
        return redirect()->route('admin.get.advertisements');
    }

    public function getAdvertisements() {
        return view('admins.advertisements');
    }

    public function getNews() {
        $limit = 10;
        $news = News::paginate($limit);
        $ttl = $news->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.news', compact('news', 'ttl', 'ttlpage'));
    }

    public function addNews() {
        return view('admins.add-news');
    }

    public function storeNews(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        if (!empty($request->authorImage)) {
            $authorImageName = time() . '.' . $request->authorImage->extension();
            $request->authorImage->move(public_path('assets/images/all'), $authorImageName);
        } else {
            $authorImageName = '';
        }
        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'author_name' => $request->authorName,
            'author_image' => $authorImageName,
        ]);
        Session::flash('success', '新着情報が正常に追加されました');
        return redirect()->route('admin.get.news');
    }

    public function editNews($id) {
        $new = News::find($id);
        return view('admins.edit-news', compact('new'));
    }

    public function updateNews(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
            'author_name' => $request->authorName,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        if (!empty($request->authorImage)) {
            $authorImageName = time() . '.' . $request->authorImage->extension();
            $request->authorImage->move(public_path('assets/images/all'), $authorImageName);
            $updateData['author_image'] = $authorImageName;
        }

        News::where('id', $request->id)->update($updateData);
        Session::flash('success', '新着情報が正常に更新されました');
        return redirect()->route('admin.get.news');
    }

    public function deleteNews($id) {
        News::where('id', $id)->delete();
        Session::flash('success', '新着情報が正常に削除されました');
        return redirect()->route('admin.get.news');
    }

    public function getNotices() {
        $limit = 10;
        $notices = Notice::paginate($limit);
        $ttl = $notices->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.notices', compact('notices', 'ttl', 'ttlpage'));
    }

    public function addNotice() {
        return view('admins.add-notice');
    }

    public function storeNotice(Request $request) {
        Notice::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        Session::flash('success', 'お知らせが正常に追加されました');
        return redirect()->route('admin.get.notices');
    }

    public function editNotice($id) {
        $notice = Notice::find($id);
        return view('admins.edit-notice', compact('notice'));
    }

    public function updateNotice(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        Notice::where('id', $request->id)->update($updateData);
        Session::flash('success', 'お知らせが正常に更新されました');
        return redirect()->route('admin.get.notices');
    }

    public function deleteNotice($id) {
        Notice::where('id', $id)->delete();
        Session::flash('success', 'お知らせが正常に削除されました');
        return redirect()->route('admin.get.notices');
    }
}
