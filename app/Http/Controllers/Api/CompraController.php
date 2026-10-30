<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
     public function index()
    {
        return Compra::all();
    }

    public function show(Compra $compra)
    {
        return $compra;
    }
}
