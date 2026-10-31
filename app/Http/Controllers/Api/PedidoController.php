<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Http\Resources\PedidoCollection;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Http\Resources\PedidoResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
      public function index()
    {
        return new PedidoCollection(Pedido::all());
    }

    public function show(Pedido $pedido)
    {
        $pedido = $pedido->load('cliente', 'detalles', 'pagos');
        return new PedidoResource($pedido);
    }

     public function store(StorePedidoRequest $request)
    {
        $pedido = Pedido::create($request->validated());
        return response()->json(new PedidoResource($pedido), Response::HTTP_CREATED); // 201
    }

    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->validated());
        return response()->json(new PedidoResource($pedido), Response::HTTP_OK); // 200
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
