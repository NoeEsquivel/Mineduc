<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CatedraticoFactory extends Factory
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
            'codigoid'=> $this->faker->numberBetween(1, 100),
            'cui'=> $this->faker->randomNumber(),
            'email'=> $this->faker->email,
            'direccion'=> $this->faker->address,
            'telefono'=> $this->faker->phoneNumber(),
            'grado'=> $this->faker->company,
            'departamento'=> $this->faker->address
        ];
    }
}
