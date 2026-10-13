<?php

namespace Database\Factories;

use App\Models\Proovedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proovedor>
 */
class ProovedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
        ];
    }
}
