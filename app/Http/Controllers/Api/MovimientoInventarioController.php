<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MovimientoInventario;
use App\Http\Resources\MovimientoInventarioCollection;
use App\Http\Resources\MovimientoInventarioResource;
use App\Http\Requests\StoreMovimientoInventarioRequest;
use App\Http\Requests\UpdateMovimientoInventarioRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class MovimientoInventarioController extends Controller
{
    public function index()
    {
        return new MovimientoInventarioCollection(MovimientoInventario::all());
    }

    public function show(MovimientoInventario $movimiento)
    {
        $movimiento = $movimiento->load('producto', 'material');
        return new MovimientoInventarioResource($movimiento);
    }

     public function store(StoreMovimientoInventarioRequest $request)
    {
        $movimiento = MovimientoInventario::create($request->validated());
        return response()->json(new MovimientoInventarioResource($movimiento), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateMovimientoInventarioRequest $request, MovimientoInventario $movimiento)
    {
        $movimiento->update($request->validated());
        return response()->json(new MovimientoInventarioResource($movimiento), Response::HTTP_OK); // 200
    }

    public function destroy(MovimientoInventario $movimiento)
    {
        $movimiento->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
