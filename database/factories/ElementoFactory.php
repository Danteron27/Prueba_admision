<?php

namespace Database\Factories;

use App\Models\Elemento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ElementoFactory extends Factory
{
    protected $model = Elemento::class;

    public function definition(): array
    {
        return [
            'Id_categorias' => $this->faker->randomElement([1,2,3,4,5]),
            'Referencias' => $this->faker->word,
            'Nombres' => $this->faker->sentence,
            'Cantidad' => $this->faker->numberBetween(1, 50),
            'Valor' => $this->faker->randomFloat(2, 5000, 25000),
            'Estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
            'Lugar' => $this->faker->city,
            'Fecha_reg' => $this->faker->date,
            'Hora_reg' => $this->faker->time,
            'Observaciones' => $this->faker->paragraph,
        ];
    }
}
