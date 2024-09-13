<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMaterialController extends Controller
{
    public function getMaterials() {
        $limit = 10;
        $materials = Material::with('user')->paginate($limit);
        $ttl = $materials->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.materials.materials', compact('materials', 'ttl', 'ttlpage'));
    }

    public function addMaterial() {
        return view('admins.materials.add-material');
    }

    public function storeMaterial(Request $request) {
        if (!empty($request->image)) {
            $originalName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $originalName . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }        

        Material::create([
            'user_id' => 0,
            'type' => $request->type,
            'name' => $request->name,
            'image' => $imageName,
            'required_plan' => $request->requiredPlan,
            'status' => 0
        ]);
        Session::flash('success', '素材が正常に追加されました');
        return redirect()->route('admin.get.materials');
    }

    public function editMaterial($id) {
        $material = Material::find($id);
        return view('admins.materials.edit-material', compact('material'));
    }

    public function updateMaterial(Request $request) {
        $updateData = [
            'type' => $request->type,
            'name' => $request->name,
            'required_plan' => $request->requiredPlan,
        ];

        if (!empty($request->image)) {
            $originalName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $originalName . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
            $updateData['image'] = $imageName;
        }

        Material::where('id', $request->id)->update($updateData);
        Session::flash('success', '素材が正常に更新されました');
        return redirect()->route('admin.get.materials');
    }

    public function deleteMaterial($id) {
        Material::where('id', $id)->delete();
        Session::flash('success', '素材が正常に削除されました');
        return redirect()->route('admin.get.materials');
    }

    public function updateMaterialStatus(Request $request) {
        $material = Material::find($request->id);
        if ($material) {
            $material->status = $request->status;
            $material->save();
            Session::flash('success', '素材のステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '素材ステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }

    public function getMaterialIcons() {
        $icons = Icon::where('status', 1)->get();
        return view('admins.materials.material-icons', compact('icons'));
    }
}
