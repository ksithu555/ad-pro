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

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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

    public function getMembers() {
        $limit = 10;
        $users = User::paginate($limit);
        $ttl = $users->total();
        $ttlpage = ceil($ttl/$limit);
        return view('admins.members', compact('users', 'ttl', 'ttlpage'));
    }

    public function getSections() {
        $limit = 10;
        $sections = Section::paginate($limit);
        $ttl = $sections->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.sections', compact('sections', 'ttl', 'ttlpage'));
    }

    public function addSection() {
        return view('admins.add-section');
    }

    public function storeSection(Request $request) {
        Section::create([
            'type' => $request->type,
            'name' => $request->name,
            'note' => $request->note,
            'status' => 0
        ]);

        Session::flash('success', 'セクションが正常に追加されました');
        return redirect()->route('admin.get.sections');
    }

    public function previewSection($id) {
        $section = Section::where('id', $id)->first();
        return view('sections.' . $section->name);
    }

    public function editSection($id) {
        $section = Section::where('id', $id)->first();
        return view('admins.edit-section', compact('section'));
    }

    public function updateSection(Request $request) {
        $updateData = [
            'name' => $request->name,
            'note' => $request->note
        ];

        Section::where('id', $request->id)->update($updateData);
        Session::flash('success', 'セクションが正常に更新されました。');
        return redirect()->route('admin.get.sections');
    }

    public function deleteSection($id) {
        Section::where('id', $id)->delete();
        Session::flash('success', 'セクションが正常に削除されました。');
        return redirect()->route('admin.get.sections');
    }

    public function updateSectionStatus(Request $request) {
        $section = Section::find($request->id);
        if ($section) {
            $section->status = $request->status;
            $section->save();
            Session::flash('success', 'セクションのステータスが正常に更新されました。');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションステータスの変更に失敗しました。');
        return response()->json(['success' => false]);
    }

    public function getAnnouncements() {
        $announcements = Announcement::all();
        $users = User::all();
        return view('admins.announcements', compact('announcements', 'users'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::find($id);
        return view('admins.show-announcement', compact('announcement'));
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
        Session::flash('success', '新着情報が正常に追加されました。');
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
        Session::flash('success', '新着情報が正常に更新されました。');
        return redirect()->route('admin.get.news');
    }

    public function deleteNews($id) {
        News::where('id', $id)->delete();
        Session::flash('success', '新着情報が正常に削除されました。');
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
