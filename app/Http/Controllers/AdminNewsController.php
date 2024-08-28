<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
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
        if (!empty($request->authorImage)) {
            $authorImageName = time() . '.' . $request->authorImage->extension();
            $request->authorImage->move(public_path('assets/images/all'), $authorImageName);
        } else {
            $authorImageName = '';
        }
        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName,
            'author_name' => $request->authorName,
            'author_image' => $authorImageName,
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
            'author_name' => $request->authorName,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        if (!empty($request->authorImage)) {
            $authorImageName = time() . '.' . $request->authorImage->extension();
            $request->authorImage->move(public_path('assets/images/all'), $authorImageName);
            $updateData['author_image'] = $authorImageName;
        }

        News::where('id', $request->id)->update($updateData);
        Session::flash('success', '新着情報が正常に更新されました');
        return redirect()->route('admin.get.news');
    }

    public function deleteNews($id) {
        News::where('id', $id)->delete();
        Session::flash('success', '新着情報が正常に削除されました');
        return redirect()->route('admin.get.news');
    }
}
