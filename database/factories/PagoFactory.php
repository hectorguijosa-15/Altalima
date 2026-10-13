<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pago>
 */
class PagoFactory extends Factory
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
            'fecha_pago' => $this->faker->date(),
            'monto' => $this->faker->randomFloat(2, 10, 5000),
            'metodo_pago' => $this->faker->randomElement(['efectivo', 'tarjeta', 'transferencia']),
            'estado' => $this->faker->randomElement(['pendiente', 'pagado']),
        ];
    }
}
