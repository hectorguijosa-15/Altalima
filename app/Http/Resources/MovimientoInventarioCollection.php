<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MovimientoInventarioCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($movimiento) {
            return [
                'id' => $movimiento->id_movimiento,
                'tipo' => 'movimiento_inventario',
                'atributos' => [
                    'id_producto' => $movimiento->id_producto,
                    'id_material' => $movimiento->id_material,
                    'tipo_movimiento' => $movimiento->tipo_movimiento,
                    'cantidad' => $movimiento->cantidad,
                    'fecha_movimiento' => $movimiento->fecha_movimiento,
                    'motivo' => $movimiento->motivo,
                ],
            ];
        })->toArray();
    }
}
