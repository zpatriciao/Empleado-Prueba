<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'edad' => $this->faker->numberBetween(18, 65),
            'cedula' => $this->faker->unique()->randomNumber(),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'telefono' => $this->faker->phoneNumber,
            'cargo' => $this->faker->jobTitle,
            'avatar' => 'default-avatar.jpg',
        ];
    }
}
