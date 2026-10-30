<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
      public function index()
    {
        return Pedido::all();
    }

    public function show(Pedido $pedido)
    {
        return $pedido;
    }
}
