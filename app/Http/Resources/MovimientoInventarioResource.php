<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovimientoInventarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_movimiento,
            'tipo' => 'movimiento_inventario',
            'atributos' => [
                'id_producto' => $this->id_producto,
                'id_material' => $this->id_material,
                'tipo_movimiento' => $this->tipo_movimiento,
                'cantidad' => $this->cantidad,
                'fecha_movimiento' => $this->fecha_movimiento,
                'motivo' => $this->motivo,
            ],
            'relaciones' => [
                'producto' => $this->producto,
                'material' => $this->material,
            ],
        ];
    }
}
