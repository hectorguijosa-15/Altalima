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


Route::apiResource('clientes', ClienteController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('materiales', MaterialController::class)
    ->parameters(['materiales' => 'material']);
Route::apiResource('proovedores', ProovedorController::class)
    ->parameters(['proovedores' => 'proovedor']);
Route::apiResource('pedidos', PedidoController::class);
Route::apiResource('compras', CompraController::class);
Route::apiResource('detalle-pedidos', DetallePedidoController::class);
Route::apiResource('detalle-compras', DetalleCompraController::class);
Route::apiResource('pagos', PagoController::class);
Route::apiResource('movimientos', MovimientoInventarioController::class);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');