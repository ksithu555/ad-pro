<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class UserMaterialController extends Controller
{
    public function getMaterials() {
        $materials = Material::all();
        return view('users.materials.materials', compact('materials'));
    }
}
