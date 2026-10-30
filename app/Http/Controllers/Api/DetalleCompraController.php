<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleCompra;
use App\Http\Resources\DetalleCompraCollection;
use App\Http\Resources\DetalleCompraResource;
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
}
