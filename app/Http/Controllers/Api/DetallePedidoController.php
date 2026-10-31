<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetallePedido;
use App\Http\Resources\DetallePedidoCollection;
use App\Http\Resources\DetallePedidoResource;
use App\Http\Requests\StoreDetallePedidoRequest;
use App\Http\Requests\UpdateDetallePedidoRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        return new DetallePedidoCollection(DetallePedido::all());
    }

    public function show(DetallePedido $detallePedido)
    {
       $detallePedido = $detallePedido->load('pedido', 'producto');
        return new DetallePedidoResource($detallePedido);
    }

    public function store(StoreDetallePedidoRequest $request)
    {
        $detallePedido = DetallePedido::create($request->validated());
        return response()->json(new DetallePedidoResource($detallePedido), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateDetallePedidoRequest $request, DetallePedido $detallePedido)
    {
        $detallePedido->update($request->validated());
        return response()->json(new DetallePedidoResource($detallePedido), Response::HTTP_OK); // 200
    }

    public function destroy(DetallePedido $detallePedido)
    {
        $detallePedido->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
