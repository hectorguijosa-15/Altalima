<?php

use App\Http\Controllers\Api\DetalleCompraController;
use App\Http\Controllers\Api\DetallePedidoController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\CompraController;
use App\Http\Controllers\Api\MaterialController;
use App\Http\Controllers\Api\MovimientoInventarioController;
use App\Http\Controllers\Api\PagoController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\ProovedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('detalle-compras', DetalleCompraController::class)->only(['index', 'show']);
Route::apiResource('detalle-pedidos', DetallePedidoController::class)->only(['index', 'show']);
Route::apiResource('clientes', ClienteController::class)->only(['index', 'show']);
Route::apiResource('productos', ProductoController::class)->only(['index', 'show']);
Route::apiResource('materiales', MaterialController::class)->only(['index', 'show'])
    ->parameters(['materiales' => 'material']);
Route::apiResource('proovedores', ProovedorController::class)->only(['index', 'show'])
    ->parameters(['proovedores' => 'proovedor']);
Route::apiResource('pedidos', PedidoController::class)->only(['index', 'show']);
Route::apiResource('compras', CompraController::class)->only(['index', 'show']);
Route::apiResource('pagos', PagoController::class)->only(['index', 'show']);
Route::apiResource('movimientos', MovimientoInventarioController::class)->only(['index', 'show']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');