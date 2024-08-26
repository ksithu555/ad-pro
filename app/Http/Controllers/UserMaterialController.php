<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMaterialController extends Controller
{
    public function getMaterials() {
        return view('users.materials.materials');
    }
}
