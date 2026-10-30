<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;

use App\Http\Resources\ProductoCollection;
use App\Http\Resources\ProductoResource;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return new ProductoCollection(Producto::all());
    }

    public function show(Producto $producto)
    {
         $producto = $producto->load('detallesPedido', 'movimientos');
        return new ProductoResource($producto);
    }
}
