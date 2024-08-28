<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminNoticeController extends Controller
{

    public function getNotices() {
        $limit = 10;
        $notices = Notice::paginate($limit);
        $ttl = $notices->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.notices.notices', compact('notices', 'ttl', 'ttlpage'));
    }

    public function addNotice() {
        return view('admins.notices.add-notice');
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
        return view('admins.notices.edit-notice', compact('notice'));
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
