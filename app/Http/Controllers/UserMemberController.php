<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMemberController extends Controller
{
    public function getMembers() {
        $limit = 10;
        $users = User::where('id', '!=', Auth::user()->id)->paginate($limit);
        $ttl = $users->total();
        $ttlpage = ceil($ttl/$limit);
        return view('users.members.members', compact('users', 'ttl', 'ttlpage'));
    }

    public function showMemberDetail($id) {
        $user = User::with('company')->where('id', $id)->first();dd($user);
    }
}
