<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
     public function index()
    {
        return Material::all();
    }

    public function show(Material $material)
    {
        return $material;
    }
}
