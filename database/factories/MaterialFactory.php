<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'unidad_medida' => $this->faker->randomElement(['Cm', 'Pulgadas', 'Metros']),
            'stock_actual' => $this->faker->randomFloat(2, 10, 500),
            'stock_minimo' => $this->faker->randomFloat(2, 5, 100),
            'costo_unitario' => $this->faker->randomFloat(2, 5, 200),
        ];
    }
}
