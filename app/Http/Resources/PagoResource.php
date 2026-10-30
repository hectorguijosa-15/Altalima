<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PagoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_pago,
            'tipo' => 'pago',
            'atributos' => [
                'id_pedido' => $this->id_pedido,
                'fecha_pago' => $this->fecha_pago,
                'monto' => $this->monto,
                'metodo_pago' => $this->metodo_pago,
                'estado' => $this->estado,
            ],
            'relaciones' => [
                'pedido' => $this->pedido,
            ],
        ];
    }
}
