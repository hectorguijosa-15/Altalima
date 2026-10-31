<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;

use App\Http\Resources\ProductoCollection;
use App\Http\Resources\ProductoResource;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use Symfony\Component\HttpFoundation\Response;
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

     public function store(StoreProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
        return response()->json(new ProductoResource($producto), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->validated());
        return response()->json(new ProductoResource($producto), Response::HTTP_OK); // 200
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
