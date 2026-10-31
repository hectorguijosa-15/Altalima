<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClienteCollection;
use App\Http\Resources\ClienteResource;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return new ClienteCollection(Cliente::all());
    }

    public function show(Cliente $cliente)
    {
        $cliente = $cliente->load('pedidos');
        return new ClienteResource($cliente);
    }
    
    public function store(StoreClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());
        return response()->json(new ClienteResource($cliente), Response::HTTP_CREATED); // 201
    }

    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return response()->json(new ClienteResource($cliente), Response::HTTP_OK); // 200
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT); // 204
    }
}
