<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PagoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
   public function toArray(Request $request): array
    {
        return $this->collection->map(function ($pago) {
            return [
                'id' => $pago->id_pago,
                'tipo' => 'pago',
                'atributos' => [
                    'id_pedido' => $pago->id_pedido,
                    'fecha_pago' => $pago->fecha_pago,
                    'monto' => $pago->monto,
                    'metodo_pago' => $pago->metodo_pago,
                    'estado' => $pago->estado,
                ],
            ];
        })->toArray();
    }
}
