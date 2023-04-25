<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fishbowl>
 */
class fishbowlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'user_id' =>fake()->numberBetween(1, 10),
            'spec_id' =>fake()->numberBetween(1, 10),
            'temp_act' =>fake()->numberBetween(5, 8),
            'ilumise_act' =>fake()->numberBetween(62, 70),
            'ph_act' =>fake()->numberBetween(5, 8),
        ];
    }
}
