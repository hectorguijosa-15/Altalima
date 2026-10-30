<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClienteCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
   public function toArray(Request $request): array
    {
        return $this->collection->map(function ($cliente) {
            return [
                'id' => $cliente->id_cliente,
                'tipo' => 'cliente',
                'atributos' => [
                    'nombre' => $cliente->nombre,
                    'telefono' => $cliente->telefono,
                    'direccion' => $cliente->direccion,
                ],
            ];
        })->toArray();
    }
}
