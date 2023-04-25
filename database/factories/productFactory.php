<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['hojuelas para peces','bolitas nutritivas','alimento proteico']),
            'description'=>fake()->text($maxNbChars = 20),
            'price'=>fake()->numberBetween(500, 2000),
            'existence'=>fake()->numberBetween(20, 100),
        ];
    }
}
