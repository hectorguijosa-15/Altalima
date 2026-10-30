<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Http\Resources\MaterialCollection;
use App\Http\Resources\MaterialResource;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
     public function index()
    {
        return new MaterialCollection(Material::all());
    }

    public function show(Material $material)
    {
        $material = $material->load('detallesCompra', 'movimientos');
        return new MaterialResource($material);
    }
}
