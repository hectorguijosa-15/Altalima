<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetallePedido;
use App\Http\Resources\DetallePedidoCollection;
use App\Http\Resources\DetallePedidoResource;
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
}
