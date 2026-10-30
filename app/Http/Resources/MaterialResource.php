<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
  public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_material,
            'tipo' => 'material',
            'atributos' => [
                'nombre' => $this->nombre,
                'unidad_medida' => $this->unidad_medida,
                'stock_actual' => $this->stock_actual,
                'stock_minimo' => $this->stock_minimo,
                'costo_unitario' => $this->costo_unitario,
            ],
            'relaciones' => [
                'detalles_compra' => $this->detallesCompra,
                'movimientos' => $this->movimientos,
            ],
        ];
    }
}
