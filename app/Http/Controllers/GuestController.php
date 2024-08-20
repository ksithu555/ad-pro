<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function home() {
        $headers = TopHeader::all();
        return view('home', compact('headers'));
    }
    public function onePage() {
        return view('home-one-page');
    }

    public function advertisements() {
        return view('advertisement-list');
    }

    public function news() {
        $limit = 9;
        $news = News::paginate($limit);
        $ttl = $news->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('news', compact('news', 'ttl', 'ttlpage'));
    }

    public function showNews($id) {
        $new = News::find($id);
        $recentNews = News::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(3)->get();
        return view('news-detail', compact('new', 'recentNews'));
    }

    public function faqs() {
        return view('faqs');
    }

    public function contact() {
        return view('contact');
    }
}
