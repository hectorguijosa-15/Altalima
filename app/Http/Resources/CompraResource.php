<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_compra,
            'tipo' => 'compra',
            'atributos' => [
                'id_proovedor' => $this->id_proovedor,
                'fecha_compra' => $this->fecha_compra,
                'total_compra' => $this->total_compra,
                'estado_pago' => $this->estado_pago,
            ],
            'relaciones' => [
                'proovedor' => $this->proovedor,
                'detalles' => $this->detalles,
            ],
        ];
    }
}
