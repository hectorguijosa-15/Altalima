<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
Use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::all();
    }

    public function show(Producto $producto)
    {
        return $producto;
    }
}
