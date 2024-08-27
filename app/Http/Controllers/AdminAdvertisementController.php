<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdminAdvertisementController extends Controller
{
    public function getAdvertisements() {
        $limit = 10;
        $advertisements = Advertisement::paginate($limit);
        $ttl = $advertisements->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.advertisements.advertisements', compact('advertisements', 'ttl', 'ttlpage'));
    }
}
