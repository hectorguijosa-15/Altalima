<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        return DetallePedido::all();
    }

    public function show(DetallePedido $detallePedido)
    {
        return $detallePedido;
    }
}
