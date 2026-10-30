<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_cliente,
            'tipo' => 'cliente',
            'atributos' => [
                'nombre' => $this->nombre,
                'telefono' => $this->telefono,
                'direccion' => $this->direccion,
            ],
            'relaciones' => [
                'pedidos' => $this->pedidos,
            ],
        ];
    }
}
