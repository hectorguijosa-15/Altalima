<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DetalleCompraCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($detalleCompra) {
            return [
                'id' => $detalleCompra->id_detalle_compra,
                'tipo' => 'detalle_compra',
                'atributos' => [
                    'id_compra' => $detalleCompra->id_compra,
                    'id_material' => $detalleCompra->id_material,
                    'cantidad' => $detalleCompra->cantidad,
                    'costo_unitario' => $detalleCompra->costo_unitario,
                ],
            ];
        })->toArray();
    }
}
