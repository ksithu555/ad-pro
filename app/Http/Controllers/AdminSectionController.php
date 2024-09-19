<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminSectionController extends Controller
{

    public function getSections(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $sectionsQuery = Section::query();

        if ($search) {
            $sectionsQuery->where(function($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                      ->orWhere('name', 'like', "%{$search}%");
            });
        }

        $sections = $sectionsQuery->paginate($limit);
        $ttl = $sections->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.sections.sections', compact('sections', 'ttl', 'ttlpage'));
    }

    public function addSection() {
        return view('admins.sections.add-section');
    }

    public function storeSection(Request $request) {
        Section::create([
            'type' => $request->type,
            'name' => $request->name,
            'note' => $request->note,
            'required_plan' => $request->requiredPlan,
            'status' => 0
        ]);

        Session::flash('success', 'セクションが正常に追加されました');
        return redirect()->route('admin.get.sections');
    }

    public function previewSection($id) {
        $section = Section::where('id', $id)->first();
        return view('sections.' . $section->name);
    }

    public function editSection($id) {
        $section = Section::where('id', $id)->first();
        return view('admins.sections.edit-section', compact('section'));
    }

    public function updateSection(Request $request) {
        $updateData = [
            'name' => $request->name,
            'note' => $request->note,
            'required_plan' => $request->requiredPlan,
        ];

        Section::where('id', $request->id)->update($updateData);
        Session::flash('success', 'セクションが正常に更新されました');
        return redirect()->route('admin.get.sections');
    }

    public function deleteSection($id) {
        Section::where('id', $id)->delete();
        Session::flash('success', 'セクションが正常に削除されました');
        return redirect()->route('admin.get.sections');
    }

    public function updateSectionStatus(Request $request) {
        $section = Section::find($request->id);
        if ($section) {
            $section->status = $request->status;
            $section->save();
            Session::flash('success', 'セクションのステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', 'セクションステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
