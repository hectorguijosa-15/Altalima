<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proovedor;

use App\Http\Resources\ProovedorCollection;
use App\Http\Resources\ProovedorResource;
use App\Http\Requests\StoreProovedorRequest;
use App\Http\Requests\UpdateProovedorRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    public function index()
    {
       return new ProovedorCollection(Proovedor::all());
    }

    public function show(Proovedor $proovedor)
    {
         $proovedor = $proovedor->load('compras');
        return new ProovedorResource($proovedor);
    }

     public function store(StoreProovedorRequest $request)
    {
        $proovedor = Proovedor::create($request->validated());
        return response()->json(new ProovedorResource($proovedor), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateProovedorRequest $request, Proovedor $proovedor)
    {
        $proovedor->update($request->validated());
        return response()->json(new ProovedorResource($proovedor), Response::HTTP_OK); // 200
    }

    public function destroy(Proovedor $proovedor)
    {
        $proovedor->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
