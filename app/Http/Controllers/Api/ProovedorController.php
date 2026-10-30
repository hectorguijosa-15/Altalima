<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proovedor;
use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    public function index()
    {
        return Proovedor::all();
    }

    public function show(Proovedor $proovedor)
    {
        return $proovedor;
    }
}
