<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminSubAdminController extends Controller
{
    public function getSubAdmins() {
        $limit = 10;
        $subAdmins = Admin::where('role', 'sub-admin')->paginate($limit);
        $ttl = $subAdmins->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admins.sub-admins.sub-admins', compact('subAdmins', 'ttl', 'ttlpage'));
    }

    public function addSubAdmin() {
        return view('admins.sub-admins.add-sub-admin');
    }

    public function storeSubAdmin(Request $request) {
        Admin::create([
            'role' => 'sub-admin',
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0
        ]);

        Session::flash('success', '管理者が正常に追加されました');
        return redirect()->route('admin.get.sub.admins');
    }

    public function editSubAdmin($id) {
        $subAdmin = Admin::find($id);
        return view('admins.sub-admins.edit-sub-admin', compact('subAdmin'));
    }

    public function updateSubAdmin(Request $request) {
        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        Admin::where('id', $request->id)->update($updateData);
        Session::flash('success', '管理者が正常に更新されました');
        return redirect()->route('admin.get.sub.admins');
    }

    public function deleteSubAdmin($id) {
        Admin::where('id', $id)->delete();
        Session::flash('success', '管理者が正常に削除されました');
        return redirect()->route('admin.get.sub.admins');
    }

    public function updateSubAdminStatus(Request $request) {
        $subAdmin = Admin::find($request->id);
        if ($subAdmin) {
            $subAdmin->status = $request->status;
            $subAdmin->save();
            Session::flash('success', '管理者のステータスが正常に更新されました');
            return response()->json(['success' => true]);
        }
        Session::flash('error', '管理者ステータスの変更に失敗しました');
        return response()->json(['success' => false]);
    }
}
