<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Models\TopFooter;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
        $advertisements = Advertisement::with('user')->where('status', 1)->get();
        return view('advertisement-list', compact('advertisements'));
    }

    public function news() {
        $limit = 9;
        $news = News::orderBy('created_at', 'desc')->paginate($limit);
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

    public function sendContact(Request $request) {
        $contact = Contact::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($contact));

        Session::flash('success', 'お問い合わせは正常に送信されました');
        return redirect()->route('guest.contact');
    }

    public function showOnePageAdvertisement($param) {
        $advertisement = Advertisement::where('param_name', $param)->first();
        if (!$advertisement) {
            return view('404-error');
        }
        if ($advertisement->status == 1) {
            return view('one-page-advertisement', compact('advertisement'));
        } else {
            return view('maintenance');
        }
    }
}
