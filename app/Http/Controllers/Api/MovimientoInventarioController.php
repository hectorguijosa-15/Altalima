<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MovimientoInventario;
use Illuminate\Http\Request;

class MovimientoInventarioController extends Controller
{
    public function index()
    {
        return MovimientoInventario::all();
    }

    public function show(MovimientoInventario $movimiento)
    {
        return $movimiento;
    }
}
