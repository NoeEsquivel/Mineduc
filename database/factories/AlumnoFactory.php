<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'apellido'=> $this->faker->name,
            'no_carnet'=> $this->faker->numberBetween(1, 100),
            'cui'=> $this->faker->numberBetween(1, 100),
            'fecha_nacimiento'=> $this->faker->date,
            'grado'=> $this->faker->numberBetween(1, 9),
        ];
    }
}
