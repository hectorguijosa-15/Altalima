<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MaterialCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($material) {
            return [
                'id' => $material->id_material,
                'tipo' => 'material',
                'atributos' => [
                    'nombre' => $material->nombre,
                    'unidad_medida' => $material->unidad_medida,
                    'stock_actual' => $material->stock_actual,
                    'stock_minimo' => $material->stock_minimo,
                    'costo_unitario' => $material->costo_unitario,
                ],
            ];
        })->toArray();
    }
}
