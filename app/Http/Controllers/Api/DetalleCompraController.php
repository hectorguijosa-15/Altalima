<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
     public function index()
    {
        return DetalleCompra::all();
    }

    public function show(DetalleCompra $detalleCompra)
    {
        return $detalleCompra;
    }
}
