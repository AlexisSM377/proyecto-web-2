<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\register>
 */
class registerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'fishbowl_id'=>fake()->numberBetween(1, 10),
        'temp' =>fake()->numberBetween(22, 28),
        'ilumise'=>fake()->numberBetween(62, 70), 
        'ph' =>fake()->numberBetween(5, 8),
        ];
    }
}
