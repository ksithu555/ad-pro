<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMaterialController extends Controller
{
    public function getMaterials() {
        $materials = Material::where('required_plan', '<=', Auth::user()->plan_status)->where('status', 1)->get();
        $types = $materials->pluck('type')->unique();
        return view('users.materials.materials', compact('materials', 'types'));
    }

    public function getMaterialIcons() {
        $icons = Icon::where('status', 1)->get();
        return view('users.materials.material-icons', compact('icons'));
    }
}
