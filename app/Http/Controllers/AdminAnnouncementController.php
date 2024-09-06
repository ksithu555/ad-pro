<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementParticipant;
use Illuminate\Support\Facades\Session;

class AdminAnnouncementController extends Controller
{

    public function getAnnouncements() {
        $limit = 10;
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate($limit);
        $ttl = $announcements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.announcements.announcements', compact('announcements', 'ttl', 'ttlpage'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::with('user')->with('user.company')->with('announcementParticipants')
        ->where('id', $id)->first();
        return view('admins.announcements.show-announcement', compact('announcement'));
    }

    public function showAnnouncementParticipants($id) {
        $limit = 10;
        $participants = AnnouncementParticipant::with('announcement')->with('user')->where('announcement_id', $id)
        ->paginate($limit);
        $ttl = $participants->total();
        $ttlpage = ceil($ttl / $limit);

        return view('admins.announcements.show-announcement-participants', compact('participants', 'ttl', 'ttlpage'));
    }

    public function deleteAnnouncement($id) {
        Announcement::where('id', $id)->delete();
        AnnouncementParticipant::where('announcement_id', $id)->delete();
        Session::flash('success', '情報広場が正常に削除されました');
        return redirect()->route('user.show.announcements');
    }
}
