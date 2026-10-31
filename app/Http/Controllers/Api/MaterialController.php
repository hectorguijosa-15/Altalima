<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Http\Resources\MaterialCollection;
use App\Http\Resources\MaterialResource;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use Symfony\Component\HttpFoundation\Response;
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

    public function store(StoreMaterialRequest $request)
    {
        $material = Material::create($request->validated());
        return response()->json(new MaterialResource($material), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateMaterialRequest $request, Material $material)
    {
        $material->update($request->validated());
        return response()->json(new MaterialResource($material), Response::HTTP_OK); // 200
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
