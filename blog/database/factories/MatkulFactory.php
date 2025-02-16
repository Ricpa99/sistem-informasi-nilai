<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matkul>
 */
class MatkulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matkul_id' => '',
            'kode' => 'kode' . rand(00,10),
            'matkul' => $this->faker->sentence(mt_rand(2,4)),
            'sks' => mt_rand(1,4),
        ];
    }
}
