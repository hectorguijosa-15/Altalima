<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Producto;
use App\Models\DetallePedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DetallePedido>
 */
class DetallePedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pedido' => Pedido::factory(),
            'id_producto' => Producto::factory(),
            'cantidad' => fake()->numberBetween(1, 10),
            'precio_unitario' => fake()->randomFloat(2, 10, 200),
            'especificaciones' => fake()->sentence(),
        ];
    }
}
