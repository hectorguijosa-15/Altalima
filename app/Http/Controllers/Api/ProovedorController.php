<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proovedor;

use App\Http\Resources\ProovedorCollection;
use App\Http\Resources\ProovedorResource;
use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    public function index()
    {
       return new ProovedorCollection(Proovedor::all());
    }

    public function show(Proovedor $proovedor)
    {
         $proovedor = $proovedor->load('compras');
        return new ProovedorResource($proovedor);
    }
}
