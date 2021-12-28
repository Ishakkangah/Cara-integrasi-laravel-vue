<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nim' => $this->faker->randomNumber(),
            'email' => $this->faker->email(),
            'jurusan' => $this->faker->text(),
        ];
    }
}
