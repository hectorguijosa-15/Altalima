<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompraCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($compra) {
            return [
                'id' => $compra->id_compra,
                'tipo' => 'compra',
                'atributos' => [
                    'id_proovedor' => $compra->id_proovedor,
                    'fecha_compra' => $compra->fecha_compra,
                    'total_compra' => $compra->total_compra,
                    'estado_pago' => $compra->estado_pago,
                ],
            ];
        })->toArray();
    }
}
