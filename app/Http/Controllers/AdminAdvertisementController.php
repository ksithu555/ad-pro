<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Session;

class AdminAdvertisementController extends Controller
{
    public function getAdvertisements(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $advertisementsQuery = Advertisement::query();

        if ($search) {
            $advertisementsQuery->where('name', 'like', "%{$search}%");
        }

        $advertisements = $advertisementsQuery->orderBy('created_at', 'desc')->paginate($limit);
        $ttl = $advertisements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.advertisements.advertisements', compact('advertisements', 'ttl', 'ttlpage'));
    }

    public function updateAdvertisementStatus(Request $request) {
        $advertisement = Advertisement::find($request->id);
        if ($advertisement) {
            $advertisement->status = $request->status;
            $advertisement->save();
            Session::flash('success', '広告のステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '広告ステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
