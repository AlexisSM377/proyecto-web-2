<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\spec>
 */
class specFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'water' => 20,
        'ilumise'=>fake()->numberBetween(62, 70), 
        'ph' =>fake()->numberBetween(5, 8),
        ];
    }
}
