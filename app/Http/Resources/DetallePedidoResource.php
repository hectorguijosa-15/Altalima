<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetallePedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_detalle_pedido,
            'tipo' => 'detalle_pedido',
            'atributos' => [
                'id_pedido' => $this->id_pedido,
                'id_producto' => $this->id_producto,
                'cantidad' => $this->cantidad,
                'precio_unitario' => $this->precio_unitario,
                'especificaciones' => $this->especificaciones,
            ],
            'relaciones' => [
                'pedido' => $this->pedido,
                'producto' => $this->producto,
            ],
        ];
    }
}
