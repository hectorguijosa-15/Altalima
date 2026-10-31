<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Compra;

use App\Http\Resources\CompraCollection;
use App\Http\Resources\CompraResource;
use App\Http\Requests\StoreCompraRequest;
use App\Http\Requests\UpdateCompraRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompraController extends Controller
{
     public function index()
    {
         return new CompraCollection(Compra::all());
    }

    public function show(Compra $compra)
    {
        $compra = $compra->load('proovedor', 'detalles');
        return new CompraResource($compra);
    }

    public function store(StoreCompraRequest $request)
    {
        $compra = Compra::create($request->validated());
        return response()->json(new CompraResource($compra), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateCompraRequest $request, Compra $compra)
    {
        $compra->update($request->validated());
        return response()->json(new CompraResource($compra), Response::HTTP_OK); // 200
    }

    public function destroy(Compra $compra)
    {
        $compra->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
