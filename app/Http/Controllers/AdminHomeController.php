<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\TopBoxBlock;
use App\Models\TopFooter;
use App\Models\TopHeader;
use App\Models\TopSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminHomeController extends Controller
{
    public function getHome() {
        $headers = TopHeader::all();
        $footers = TopFooter::all();
        $sections = TopSection::orderBy('order')->get();
        return view('admins.homes.home', compact('headers', 'footers', 'sections'));
    }

    public function addHeader() {
        return view('admins.homes.add-header');
    }

    public function storeHeader(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }
        TopHeader::create([
            'title' => $request->title,
            'image' => $imageName
        ]);

        Session::flash('success', 'ヘッダが正常に追加されました');
        return redirect()->route('admin.get.home');
    }

    public function editHeaders() {
        $limit = 10;
        $headers = TopHeader::paginate($limit);
        $ttl = $headers->total();
        $ttlpage = (ceil($ttl / $limit));
        return view('admins.homes.edit-headers', compact('headers', 'ttl', 'ttlpage'));
    }

    public function editHeader($id) {
        $header = TopHeader::where('id', $id)->first();
        return view('admins.homes.edit-header', compact('header'));
    }

    public function updateHeader(Request $request) {
        $updateData = [
            'title' => $request->title,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        TopHeader::where('id', $request->id)->update($updateData);
        Session::flash('success', 'ヘッダが正常に更新されました');
        return redirect()->route('admin.get.home');
    }

    public function deleteHeader($id) {
        TopHeader::where('id', $id)->delete();
        Session::flash('success', 'ヘッダが正常に削除されました');
        return redirect()->route('admin.edit.headers');
    }

    public function editFooters() {
        $limit = 10;
        $footers = TopFooter::paginate($limit);
        $ttl = $footers->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.homes.edit-footers', compact('footers', 'ttl', 'ttlpage'));
    }

    public function addFooter() {
        $footers = TopFooter::all();
        return view('admins.homes.add-footer', compact('footers'));
    }

    public function storeFooter(Request $request) {
        $name = null;
        $text = null;
        if ($request->type == "useful") {
            $name = $request->nameUseful;
        } elseif ($request->type == "social") {
            $name = $request->nameSocial;
        } elseif ($request->type == "text") {
            $text = $request->text;
        } elseif ($request->type == "contact") {
            $text = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $text = $request->copyRight;
        } elseif ($request->type == "logo") {
            if (!empty($request->logo)) {
                $logoName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('assets/images/all'), $logoName);
            } else {
                $logoName = '';
            }
            $text = $logoName;
        }

        TopFooter::create([
            'type' => $request->type,
            'name' => $name,
            'url' => $request->url,
            'text' => $text,
        ]);

        Session::flash('success', 'ヘッダが正常に追加されました');
        return redirect()->route('admin.get.home');
    }

    public function editFooter($id) {
        $footer = TopFooter::where('id', $id)->first();
        return view('admins.homes.edit-footer', compact('footer'));
    }

    public function updateFooter(Request $request) {
        $updateData = [
            'type' => $request->type,
            'url' => $request->url
        ];

        if ($request->type == "useful") {
            $updateData['name'] = $request->nameUseful;
        } elseif ($request->type == "social") {
            $updateData['name'] = $request->nameSocial;
        } elseif ($request->type == "text") {
            $updateData['text'] = $request->text;
        } elseif ($request->type == "contact") {
            $updateData['text'] = $request->address . '|' . $request->phone . '|' . $request->email;
        } elseif ($request->type == "copyRight") {
            $updateData['text'] = $request->copyRight;
        }

        TopFooter::where('id', $request->id)->update($updateData);
        Session::flash('success', 'ヘッダが正常に更新されました');
        return redirect()->route('admin.edit.footers');
    }

    public function deleteFooter($id) {
        TopFooter::where('id', $id)->delete();
        Session::flash('success', 'ヘッダが正常に削除されました');
        return redirect()->route('admin.edit.footers');
    }

    public function addTopSection() {
        return view('admins.homes.add-top-section');
    }

    public function storeTopSection(Request $request) {
        $maxOrder = TopSection::max('order');
        $order = $maxOrder ? $maxOrder + 1 : 1;

        TopSection::create([
            'type' => $request->type,
            'title' => $request->title,
            'body' => $request->body,
            'order' => $order,
            'status' => 0
        ]);

        Session::flash('success', 'セクションが正常に追加されました');
        return redirect()->route('admin.get.home');
    }

    public function editTopSections() {
        $limit = 10;
        $sections = TopSection::orderBy('order')->paginate($limit);
        $ttl = $sections->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.homes.edit-top-sections', compact('sections', 'ttl', 'ttlpage'));
    }

    public function editTopSection($id) {
        $section = TopSection::find($id);
        return view('admins.homes.edit-top-section', compact('section'));
    }

    public function updateTopSection(Request $request) {
        $updateData = [
            'type' => $request->type,
            'title' => $request->title,
            'body' => $request->body
        ];

        TopSection::where('id', $request->id)->update($updateData);

        Session::flash('success', 'セクションが正常に更新されました');
        return redirect()->route('admin.edit.top.sections');
    }

    public function deleteTopSection($id) {
        TopSection::where('id', $id)->delete();
        Session::flash('success', 'セクションが正常に削除されました');
        return redirect()->route('admin.edit.top.sections');
    }

    public function orderUpTopSection($id)
    {
        $currentSection = TopSection::findOrFail($id);
        $previousSection = TopSection::where('order', '<', $currentSection->order)
                                            ->orderBy('order', 'desc')
                                            ->first();

        if ($previousSection) {
            // Swap the order values
            $tempOrder = $currentSection->order;
            $currentSection->order = $previousSection->order;
            $previousSection->order = $tempOrder;

            $currentSection->save();
            $previousSection->save();

            Session::flash('success', 'セクションの順番が正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションの順番が正常に変更に失敗しました');
        return response()->json(['success' => true]);
    }

    public function orderDownTopSection($id)
    {
        $currentSection = TopSection::findOrFail($id);
        $nextSection = TopSection::where('order', '>', $currentSection->order)
                                        ->orderBy('order')
                                        ->first();

        if ($nextSection) {
            // Swap the order values
            $tempOrder = $currentSection->order;
            $currentSection->order = $nextSection->order;
            $nextSection->order = $tempOrder;

            $currentSection->save();
            $nextSection->save();
            Session::flash('success', 'セクションの順番が正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションの順番が正常に変更に失敗しました');
        return response()->json(['success' => true]);
    }

    public function addTopBlock($id) {
        $section = TopSection::find($id);
        $icons = Icon::where('status', 1)->get();
        return view('admins.homes.add-top-block', compact('section', 'icons'));
    }

    public function storeTopBlock(Request $request) {
        $section = TopSection::find($request->id);
        if ($section->type == 'Box01' || $section->type == 'Box02' || $section->type == 'Box03') {
            TopBoxBlock::create([
                'top_section_id' => $request->id,
                'title' => $request->title,
                'body' => $request->body,
                'icon' => $request->icon,
                'status' => 0
            ]);

            Session::flash('success', 'ブロックが正常に追加されました');
            return redirect()->route('admin.get.home');
        }

        Session::flash('error', 'ブロックが正常に追加できません');
        return redirect()->route('admin.get.home');
    }

    public function editTopBlocks($id) {
        $section = TopSection::find($id);
        $limit = 10;
        if ($section->type == 'Box01' || $section->type == 'Box02' || $section->type == 'Box03') {
            $blocks = TopBoxBlock::where('top_section_id', $id)->paginate($limit);
            $ttl = $blocks->total();
            $ttlpage = ceil($ttl / $limit);

            return view('admins.homes.edit-top-blocks', compact('blocks', 'ttl', 'ttlpage'));
        }
    }

    public function editTopBlock($sid, $id) {
        $section = TopSection::find($sid);
        $icons = Icon::where('status', 1)->get();
        if ($section->type == 'Box01' || $section->type == 'Box02' || $section->type == 'Box03') {
            $block = TopBoxBlock::with('topSection')->find($id);
        }

        return view('admins.homes.edit-top-block', compact('block', 'icons'));
    }

    public function updateTopBlock(Request $request) {
        $section = TopSection::find($request->sid);
        $updateData = [
            'title' => $request->title,
            'body' => $request->body,
            'icon' => $request->icon
        ];
        if ($section->type == 'Box01' || $section->type == 'Box02' || $section->type == 'Box03') {
            TopBoxBlock::where('id', $request->id)->update($updateData);
        }


        Session::flash('success', 'ブロックが正常に更新されました');
        return redirect()->route('admin.edit.top.section.top.blocks', $section->id);
    }
}
