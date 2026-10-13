<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
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
            'modelo' => $this->faker->word(),
            'medidas' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio_venta' => $this->faker->randomFloat(2, 10, 500),
            'stock_actual' => $this->faker->randomFloat(2, 10, 500),
            'stock_minimo' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
