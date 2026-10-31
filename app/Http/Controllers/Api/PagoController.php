<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pago;
use App\Http\Requests\StorePagoRequest;
use App\Http\Requests\UpdatePagoRequest;
use App\Http\Resources\PagoCollection;
use App\Http\Resources\PagoResource;
use Symfony\Component\HttpFoundation\Response;
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

     public function store(StorePagoRequest $request)
    {
        $pago = Pago::create($request->validated());
        return response()->json(new PagoResource($pago), Response::HTTP_CREATED); // 201
    }

    public function update(UpdatePagoRequest $request, Pago $pago)
    {
        $pago->update($request->validated());
        return response()->json(new PagoResource($pago), Response::HTTP_OK); // 200
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
