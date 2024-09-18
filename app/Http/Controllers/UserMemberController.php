<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Prefecture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMemberController extends Controller
{
    public function getMembers(Request $request) {
        $limit = 10;
        $search = $request->input('search');
        
        $usersQuery = User::where('id', '!=', Auth::user()->id)
            ->where('status', 1)
            ->orderBy('created_at', 'desc');

        if ($search) {
            $usersQuery->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('company_name', 'like', "%{$search}%");
            });
        }
    
        $users = $usersQuery->paginate($limit);
        $ttl = $users->total();
        $ttlpage = ceil($ttl/$limit);
        
        return view('users.members.members', compact('users', 'ttl', 'ttlpage', 'search'));
    }    

    public function showMemberDetail($id) {
        $user = User::with('company')->where('id', $id)->first();
        $company = Company::with('prefecture')->where('user_id', $user->id)->first();
        $prefectures = Prefecture::all();

        return view('users.members.member-detail', compact('user', 'company', 'prefectures'));
    }
}
