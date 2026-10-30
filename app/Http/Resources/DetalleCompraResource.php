<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetalleCompraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_detalle_compra,
            'tipo' => 'detalle_compra',
            'atributos' => [
                'id_compra' => $this->id_compra,
                'id_material' => $this->id_material,
                'cantidad' => $this->cantidad,
                'costo_unitario' => $this->costo_unitario,
            ],
            'relaciones' => [
                'compra' => $this->compra,
                'material' => $this->material,
            ],
        ];
    }
}
