<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->name(),
            'usuario' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt(123456789),
            'observaciones' => $this->faker->text(200),
        ];
    }
}
