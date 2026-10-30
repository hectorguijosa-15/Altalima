<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProovedorCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
   public function toArray(Request $request): array
    {
        return $this->collection->map(function ($proovedor) {
            return [
                'id' => $proovedor->id_proovedor,
                'tipo' => 'proovedor',
                'atributos' => [
                    'nombre' => $proovedor->nombre,
                    'telefono' => $proovedor->telefono,
                    'direccion' => $proovedor->direccion,
                ],
            ];
        })->toArray();
    }
}
