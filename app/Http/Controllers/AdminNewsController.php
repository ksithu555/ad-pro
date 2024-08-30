<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminNewsController extends Controller
{

    public function getNews() {
        $limit = 10;
        $news = News::paginate($limit);
        $ttl = $news->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.news.news', compact('news', 'ttl', 'ttlpage'));
    }

    public function addNews() {
        return view('admins.news.add-news');
    }

    public function storeNews(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'created_by' => Auth::guard('admin')->user()->id,
        ]);
        Session::flash('success', '新着情報が正常に追加されました');
        return redirect()->route('admin.get.news');
    }

    public function editNews($id) {
        $new = News::find($id);
        return view('admins.news.edit-news', compact('new'));
    }

    public function updateNews(Request $request) {
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        News::where('id', $request->id)->update($updateData);
        Session::flash('success', '新着情報が正常に更新されました');
        return redirect()->route('admin.get.news');
    }

    public function deleteNews($id) {
        $news = News::find($id);
    
        if ($news) {
            if (!empty($news->image)) {
                $imagePath = public_path('assets/images/all/' . $news->image);
    
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            $news->delete();
    
            Session::flash('success', '新着情報が正常に削除されました');
        } else {
            Session::flash('error', '新着情報が見つかりません');
        }
        
        return redirect()->route('admin.get.news');
    }    
}
