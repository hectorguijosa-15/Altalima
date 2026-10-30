<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Http\Resources\PedidoCollection;
use App\Http\Resources\PedidoResource;
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
}
