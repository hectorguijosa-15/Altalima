<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClienteCollection;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
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
}
