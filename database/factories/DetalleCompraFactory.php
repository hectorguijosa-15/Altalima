<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Material;
use App\Models\DetalleCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DetalleCompra>
 */
class DetalleCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_compra' => Compra::factory(),
            'id_material' => Material::factory(),
            'cantidad' => fake()->randomFloat(2, 1, 50),
            'costo_unitario' => fake()->randomFloat(2, 5, 200),
        ];
    }
}
