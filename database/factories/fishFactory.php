<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fish>
 */
class fishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->randomElement(['Pablo','Diego']),
            'size'=> fake()->randomElement(['Chico','Mediano','Grande']),
            'sex_id' =>fake()->numberBetween(1, 10),
            'fishbowl_id' =>fake()->numberBetween(1, 10),
            'kind_id'=>fake()->numberBetween(1, 10),
            'food_id'=>fake()->numberBetween(1, 10),
        ];
    }
}
