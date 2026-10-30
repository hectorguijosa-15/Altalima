<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pago;

use App\Http\Resources\PagoCollection;
use App\Http\Resources\PagoResource;
use Illuminate\Http\Request;

class PagoController extends Controller
{
     public function index()
    {
        return new PagoCollection(Pago::all());
    }

    public function show(Pago $pago)
    {
        $pago = $pago->load('pedido');
        return new PagoResource($pago);
    }
}
