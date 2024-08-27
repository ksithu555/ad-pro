<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class UserMaterialController extends Controller
{
    public function getMaterials() {
        $materials = Material::where('status', 1)->get();
        $types = $materials->pluck('type')->unique();
        return view('users.materials.materials', compact('materials', 'types'));
    }
}
