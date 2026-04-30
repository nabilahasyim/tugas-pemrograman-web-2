<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->numerify('2024######'),
            'jurusan' => fake()->randomElement([
                'Informatika',
                'Sistem Informasi',
                'Teknik Komputer'
            ]),
            'semester' => fake()->numberBetween(1, 8),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}