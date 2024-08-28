<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMemberController extends Controller
{

    public function getMembers() {
        $limit = 10;
        $users = User::paginate($limit);
        $ttl = $users->total();
        $ttlpage = ceil($ttl/$limit);
        return view('admins.members.members', compact('users', 'ttl', 'ttlpage'));
    }

    public function updateMemberStatus(Request $request) {
        $user = User::find($request->id);
        if ($user) {
            $user->status = $request->status;
            $user->save();
            Session::flash('success', '会員のステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '会員ステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
