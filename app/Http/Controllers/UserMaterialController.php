<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Admin;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Mail\NewMaterialUploadEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\PaidUserDownloadLimitation;
use App\Models\PaidMaterialDownloadHistory;

class UserMaterialController extends Controller
{
    public function getMaterials() {
        $materials = Material::where('status', 1)->orderBy('created_at', 'desc')->get();
        $types = $materials->pluck('type')->unique();
        return view('users.materials.materials', compact('materials', 'types'));
    }

    public function getMaterialIcons() {
        $icons = Icon::where('status', 1)->get();
        return view('users.materials.material-icons', compact('icons'));
    }

    public function downloadMaterial($id) {
        $material = Material::findOrFail($id);

        if ($material->required_plan != 0 && $material->user_id != Auth::user()->id) {
            $paidUserDownloadLimitation = PaidUserDownloadLimitation::where('user_id', Auth::user()->id)
            ->where('plan_start', Auth::user()->plan_start)->where('plan_end', Auth::user()->plan_end)->first();

            if ($paidUserDownloadLimitation) {
                if ($paidUserDownloadLimitation->count == 0) {
                    Session::flash('warning', 'ダウンロード制限に達しました');
                    return redirect()->route('user.get.materials');
                } else {
                    $paidUserDownloadLimitation->count = $paidUserDownloadLimitation->count - 1;
                    $paidUserDownloadLimitation->save();
                }
            } else {
                PaidUserDownloadLimitation::create([
                    'user_id' => Auth::user()->id,
                    'plan_start' => Auth::user()->plan_start,
                    'plan_end' => Auth::user()->plan_end,
                    'count' => 2
                ]);
            }

            $paidMaterialDownloadHistory = PaidMaterialDownloadHistory::create([
                'user_id' => Auth::user()->id,
                'material_id' => $material->id,
                'paid' => 0
            ]);
        }
    
        $filePath = public_path('assets/images/all/' . $material->image);
    
        // return response()->download($filePath);
        // Add headers to prevent caching
        $headers = [
            'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ];

        // Return the file download response with the headers
        $cleanFileName = preg_replace('/_\d{10}/', '', $material->image);
        return response()->download($filePath, $cleanFileName, $headers);
    }

    public function showMaterials(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $materialsQuery = Material::with('user')->where('user_id', Auth::user()->id);

        if ($search) {
            $materialsQuery->where(function($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                      ->orWhere('name', 'like', "%{$search}%");
            });
        }

        $materials = $materialsQuery->paginate($limit);
        $ttl = $materials->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.materials.show-materials', compact('materials', 'ttl', 'ttlpage'));
    }

    public function showSaleHistories(Request $request) {
        $limit = 10;
        $search = $request->input('search');

        $materialsQuery = Material::with('paidMaterialDownloadHistories')->where('user_id', Auth::user()->id)->where('required_plan', 1);

        if ($search) {
            $materialsQuery->where(function($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                      ->orWhere('name', 'like', "%{$search}%");
            });
        }

        $materials = $materialsQuery->paginate($limit);
        $ttl = $materials->total();
        $ttlpage = ceil($ttl / $limit);
        return view('users.materials.show-sale-histories', compact('materials', 'ttl', 'ttlpage'));
    }

    public function addMaterial() {
        return view('users.materials.add-material');
    }

    public function storeMaterial(Request $request) {
        if (!empty($request->image)) {
            $originalName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $originalName . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/all'), $imageName);
        } else {
            $imageName = '';
        }        

        $material = Material::create([
            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'name' => $request->name,
            'image' => $imageName,
            'required_plan' => $request->requiredPlan,
            'status' => 0
        ]);

        $admins = Admin::all();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NewMaterialUploadEmail($material));
        }

        Session::flash('success', '素材が正常に追加されました');
        return redirect()->route('user.show.materials');
    }

    public function editMaterial($id) {
        $material = Material::find($id);
        return view('users.materials.edit-material', compact('material'));
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
        return redirect()->route('user.show.materials');
    }

    public function deleteMaterial($id) {
        Material::where('id', $id)->delete();
        Session::flash('success', '素材が正常に削除されました');
        return redirect()->route('user.show.materials');
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
}
