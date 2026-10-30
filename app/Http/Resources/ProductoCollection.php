<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($producto) {
            return [
                'id' => $producto->id_producto,
                'tipo' => 'producto',
                'atributos' => [
                    'nombre' => $producto->nombre,
                    'modelo' => $producto->modelo,
                    'medidas' => $producto->medidas,
                    'descripcion' => $producto->descripcion,
                    'precio_venta' => $producto->precio_venta,
                    'stock_actual' => $producto->stock_actual,
                    'stock_minimo' => $producto->stock_minimo,
                ],
            ];
        })->toArray();
    }
}
