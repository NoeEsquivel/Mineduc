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
            'no_carnet'=> $this->faker->name,
            'cui'=> $this->faker->name,
            'fecha_nacimiento'=> $this->faker->date,
            'grado'=> $this->faker->name,
        ];
    }
}
