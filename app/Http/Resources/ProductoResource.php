<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_producto,
            'tipo' => 'producto',
            'atributos' => [
                'nombre' => $this->nombre,
                'modelo' => $this->modelo,
                'medidas' => $this->medidas,
                'descripcion' => $this->descripcion,
                'precio_venta' => $this->precio_venta,
                'stock_actual' => $this->stock_actual,
                'stock_minimo' => $this->stock_minimo,
            ],
            'relaciones' => [
                'detalles_pedido' => $this->detallesPedido,
                'movimientos' => $this->movimientos,
            ],
        ];
    }
}
