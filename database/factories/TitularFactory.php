<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TitularFactory extends Factory
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
            'cui'=> $this->faker->userName(1, 100),
            'telefono'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->email,
            'direccion'=> $this->faker->address,
            'municipio'=> $this->faker->address,
            'departamento'=> $this->faker->address,
        ];
    }
}
