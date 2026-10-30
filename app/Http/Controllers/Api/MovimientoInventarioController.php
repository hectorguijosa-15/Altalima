<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MovimientoInventario;
use App\Http\Resources\MovimientoInventarioCollection;
use App\Http\Resources\MovimientoInventarioResource;
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
}
