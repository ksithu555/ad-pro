<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AdminAnnouncementController extends Controller
{

    public function getAnnouncements() {
        $announcements = Announcement::all();
        $users = User::all();
        return view('admins.announcements.announcements', compact('announcements', 'users'));
    }

    public function showAnnouncement($id) {
        $announcement = Announcement::find($id);
        return view('admins.announcements.show-announcement', compact('announcement'));
    }
}
