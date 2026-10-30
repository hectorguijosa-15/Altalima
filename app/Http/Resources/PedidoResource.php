<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_pedido,
            'tipo' => 'pedido',
            'atributos' => [
                'id_cliente' => $this->id_cliente,
                'fecha_pedido' => $this->fecha_pedido,
                'fecha_entrega' => $this->fecha_entrega,
                'estado' => $this->estado,
                'total_pedido' => $this->total_pedido,
            ],
            'relaciones' => [
                'cliente' => $this->cliente,
                'detalles' => $this->detalles,
                'pagos' => $this->pagos,
            ],
        ];
    }
}
