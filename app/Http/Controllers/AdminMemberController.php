<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Message;
use App\Models\Prefecture;
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

    public function showMemberDetail($id) {
        $user = User::with('company')->where('id', $id)->first();
        $company = Company::with('prefecture')->where('user_id', $user->id)->first();
        $prefectures = Prefecture::all();

        return view('admins.members.member-detail', compact('user', 'company', 'prefectures'));
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

    public function checkMemberMessage($id) {
        $userId = $id;
        $foucsMember = User::find($id);
        $users = User::with('company')->with('company.businessType')->with('company.purposeType')->with('company.industryType')
        ->with('company.positionType')->with('company.prefecture')->where('id', '!=', $userId)
        ->where(function ($query) use ($userId) {
            $query->whereHas('sentMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            })
            ->orWhereHas('receivedMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            });
        })
        ->with(['sentMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }, 'receivedMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }])
        ->get()
        ->sortByDesc(function ($user) {
            return $user->sentMessages->merge($user->receivedMessages)->max('created_at');
        });
        $messages = Message::where('from_user_id', $userId)->orWhere('to_user_id', $userId)->get();
        return view('admins.members.member-messages', compact('users', 'messages', 'foucsMember'));
    }
}
