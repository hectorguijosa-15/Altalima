<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_cliente' => Cliente::factory(),
            'fecha_pedido' => $this->faker->date(),
            'fecha_entrega' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'completado']),
            'total_pedido' => $this->faker->randomFloat(2, 10, 5000),
        ];
    }
}
