<?php

namespace Database\Factories;

use App\Models\MovimientoInventario;
use App\Models\Producto;    // Asegúrate de tener estas importaciones
use App\Models\Material;    // para evitar errores de clases no encontradas
use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoInventarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $esProducto = $this->faker->boolean();

        return [
            'id_producto' => $esProducto ? Producto::factory() : null,
            'id_material' => !$esProducto ? Material::factory() : null,
            'tipo_movimiento' => $this->faker->randomElement(['entrada', 'salida']),
            'cantidad' => $this->faker->randomFloat(2, 1, 100),
            'fecha_movimiento' => $this->faker->date(),
            'motivo' => $this->faker->sentence(),
        ];
    }
}