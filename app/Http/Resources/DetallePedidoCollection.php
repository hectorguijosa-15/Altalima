<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DetallePedidoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
   public function toArray(Request $request): array
    {
        return $this->collection->map(function ($detallePedido) {
            return [
                'id' => $detallePedido->id_detalle_pedido,
                'tipo' => 'detalle_pedido',
                'atributos' => [
                    'id_pedido' => $detallePedido->id_pedido,
                    'id_producto' => $detallePedido->id_producto,
                    'cantidad' => $detallePedido->cantidad,
                    'precio_unitario' => $detallePedido->precio_unitario,
                    'especificaciones' => $detallePedido->especificaciones,
                ],
            ];
        })->toArray();
    }
}
