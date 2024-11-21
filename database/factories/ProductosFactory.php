<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Productos::class;

    public function definition(): array
    {
        return [
            'codigo_catalogo' => $this->faker->unique()->numerify('CAT-####'),
            'nombre' => $this->faker->word(),
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'estado' => $this->faker->randomElement(['Nuevo', 'Modificado', 'Nuevo Precio']),
        ];
    }
}
