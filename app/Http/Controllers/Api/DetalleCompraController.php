<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleCompra;
use App\Http\Resources\DetalleCompraCollection;
use App\Http\Resources\DetalleCompraResource;
use App\Http\Requests\StoreDetalleCompraRequest;
use App\Http\Requests\UpdateDetalleCompraRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
     public function index()
    {
       return new DetalleCompraCollection(DetalleCompra::all());
    }

    public function show(DetalleCompra $detalleCompra)
    {
       $detalleCompra = $detalleCompra->load('compra', 'material');
        return new DetalleCompraResource($detalleCompra);
    }

    public function store(StoreDetalleCompraRequest $request)
    {
        $detalleCompra = DetalleCompra::create($request->validated());
        return response()->json(new DetalleCompraResource($detalleCompra), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateDetalleCompraRequest $request, DetalleCompra $detalleCompra)
    {
        $detalleCompra->update($request->validated());
        return response()->json(new DetalleCompraResource($detalleCompra), Response::HTTP_OK); // 200
    }

    public function destroy(DetalleCompra $detalleCompra)
    {
        $detalleCompra->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
