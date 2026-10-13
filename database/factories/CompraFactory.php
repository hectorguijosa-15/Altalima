<?php

namespace Database\Factories;

use App\Models\Proovedor;
use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_proovedor' => Proovedor::factory(),
            'fecha_compra' => $this->faker->date(),
            'total_compra' => $this->faker->randomFloat(2, 10, 5000),
            'estado_pago' => $this->faker->randomElement(['pendiente', 'pagado']),
        ];
    }
}
