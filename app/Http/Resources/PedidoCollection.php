<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PedidoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
     public function toArray(Request $request): array
    {
        return $this->collection->map(function ($pedido) {
            return [
                'id' => $pedido->id_pedido,
                'tipo' => 'pedido',
                'atributos' => [
                    'id_cliente' => $pedido->id_cliente,
                    'fecha_pedido' => $pedido->fecha_pedido,
                    'fecha_entrega' => $pedido->fecha_entrega,
                    'estado' => $pedido->estado,
                    'total_pedido' => $pedido->total_pedido,
                ],
            ];
        })->toArray();
    }
}
