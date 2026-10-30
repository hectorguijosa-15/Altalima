<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Compra;

use App\Http\Resources\CompraCollection;
use App\Http\Resources\CompraResource;
use Illuminate\Http\Request;

class CompraController extends Controller
{
     public function index()
    {
         return new CompraCollection(Compra::all());
    }

    public function show(Compra $compra)
    {
        $compra = $compra->load('proovedor', 'detalles');
        return new CompraResource($compra);
    }
}
