<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use App\Models\AnnouncementParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAnnouncementController extends Controller
{

    public function getAnnouncements() {
        $now = now();
        $announcements = Announcement::with('user')->where('created_by', '!=', Auth::user()->id)
        ->where('start_at', '>', $now)
        ->get();
        return view('users.announcements.announcements', compact('announcements'));
    }

    public function showAnnouncements() {
        $limit = 10;
        $announcements = Announcement::where('created_by', Auth::user()->id)->paginate($limit);
        $ttl = $announcements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.announcements.show-announcements', compact('announcements', 'ttl', 'ttlpage'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::with('user')->with('announcementParticipants')->where('id', $id)->first();
        return view('users.announcements.show-announcement', compact('announcement'));
    }

    public function addAnnouncement() {
        return view('users.announcements.add-announcement');
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
            'start_at' => $request->startAt,
            'end_at' => $request->endAt,
            'location' => $request->location,
            'created_by' => Auth::user()->id,
        ]);

        Session::flash('success', '情報広場が正常に追加されました');
        return redirect()->route('user.show.announcements');
    }

    public function editAnnouncement($id) {
        $announcement = Announcement::find($id);
        return view('users.announcements.edit-announcement', compact('announcement'));
    }

    public function updateAnnouncement(Request $request) {
        $updateData = [
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'start_at' => $request->startAt,
            'end_at' => $request->endAt,
            'location' => $request->location,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        Announcement::where('id', $request->id)->update($updateData);
        Session::flash('success', '情報広場が正常に更新されました');
        return redirect()->route('user.show.announcements');
    }

    public function deleteAnnouncement($id) {
        Announcement::where('id', $id)->delete();
        Session::flash('success', '情報広場が正常に削除されました');
        return redirect()->route('user.show.announcements');
    }

    public function requestAnnouncement($id) {
        AnnouncementParticipant::create([
            'announcement_id' => $id,
            'user_id' => Auth::user()->id,
            'status' => 0
        ]);

        Session::flash('success', 'この情報広場に参加しました');
        return redirect()->route('user.show.announcement', $id);
    }

    public function showAnnouncementParticipants($id) {
        $limit = 10;
        $participants = AnnouncementParticipant::with('announcement')->with('user')->where('announcement_id', $id)
        ->paginate($limit);
        $ttl = $participants->total();
        $ttlpage = ceil($ttl / $limit);

        return view('users.announcements.show-announcement-participants', compact('participants', 'ttl', 'ttlpage'));
    }

    public function updateParticipantStatus($id, $status, $reason) {
        $updateData = [
            'status' => $status,
            'reason' => $reason
        ];

        $announcementParticipant = AnnouncementParticipant::find($id);
        $announcementParticipant->update($updateData);

        Session::flash('success', '参加者のステータスが正常に更新されました');
        return redirect()->route('user.show.announcement.participants', $announcementParticipant->announcement_id);
    }
}
