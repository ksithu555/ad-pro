<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alarm;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AnnouncementParticipant;
use Illuminate\Support\Facades\Session;

class UserAnnouncementController extends Controller
{

    public function getAnnouncements(Request $request) {
        $now = now();
        $limit = 10;
        $search = $request->input('search');

        $announcementsQuery = Announcement::with('user')->where('created_by', '!=', Auth::user()->id)
        ->where('start_at', '<', $now)
        ->where('end_at', '>', $now)
        ->orderBy('created_at', 'desc');

        if ($search) {
            $announcementsQuery->where(function($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                      ->orWhere('title', 'like', "%{$search}%")
                      ->orWhereHas('user', function($query) use ($search) {
                          $query->where('company_name', 'like', "%{$search}%");
                      });
            });
        }

        $announcements = $announcementsQuery->paginate($limit);
        $ttl = $announcements->total();
        $ttlpage = ceil($ttl/$limit);

        return view('users.announcements.announcements', compact('announcements', 'ttl', 'ttlpage'));
    }

    public function showAnnouncements(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $announcementsQuery = Announcement::where('created_by', Auth::user()->id);

        if ($search) {
            $announcementsQuery->where(function($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                      ->orWhere('title', 'like', "%{$search}%");
            });
        }

        $announcements = $announcementsQuery->paginate($limit);
        $ttl = $announcements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.announcements.show-announcements', compact('announcements', 'ttl', 'ttlpage'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::with('user')->with('user.company')->with('announcementParticipants')
        ->where('id', $id)->first();
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
        AnnouncementParticipant::where('announcement_id', $id)->delete();
        Session::flash('success', '情報広場が正常に削除されました');
        return redirect()->route('user.show.announcements');
    }

    public function requestAnnouncement($id) {
        $announcementParticipant = AnnouncementParticipant::create([
            'announcement_id' => $id,
            'user_id' => Auth::user()->id,
            'status' => 0
        ]);

        $alarm = Alarm::where('from_user_id', Auth::user()->id)
                  ->where('to_user_id', $announcementParticipant->announcement->user->id)
                  ->where('type', '情報広場')
                  ->first();
        
        if ($alarm) {
            // Update the existing alarm
            $alarm->related_id = $announcementParticipant->id;
            $alarm->status = 0;
            $alarm->save();
        } else {
            // Create a new alarm
            Alarm::create([
                'type' => '情報広場',
                'alarm' => '参加者があります',
                'from_user_id' => Auth::user()->id,
                'to_user_id' => $announcementParticipant->announcement->user->id,
                'related_id' => $announcementParticipant->announcement->id,
                'model' => 'Announcement',
                'status' => 0,
            ]);
        }

        Session::flash('success', 'この情報に申し込みしました');
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

        if ($status == 1) {
            $alarmMessage = '申請は承認されました';
            $checkAlarmMessage = '申請は拒否されました';
        } else {
            $alarmMessage = '申請は拒否されました';
            $checkAlarmMessage = '申請は承認されました';
        }

        $alarm = Alarm::where('from_user_id', Auth::user()->id)
                  ->where('to_user_id', $announcementParticipant->user_id)
                  ->where('type', '情報広場')
                  ->where('alarm', $checkAlarmMessage)
                  ->first();

        if ($alarm) {
            // Update the existing alarm
            $alarm->related_id = $announcementParticipant->id;
            $alarm->alarm = $alarmMessage;
            $alarm->status = 0;
            $alarm->save();
        } else {
            // Create a new alarm
            Alarm::create([
                'type' => '情報広場',
                'alarm' => $alarmMessage,
                'from_user_id' => Auth::user()->id,
                'to_user_id' => $announcementParticipant->user_id,
                'related_id' => $announcementParticipant->announcement->id,
                'model' => 'Announcement',
                'status' => 0,
            ]);
        }

        Session::flash('success', '参加者のステータスが正常に更新されました');
        return redirect()->route('user.show.announcement.participants', $announcementParticipant->announcement_id);
    }
}
