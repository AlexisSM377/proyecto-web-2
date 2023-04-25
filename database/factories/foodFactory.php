<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\food>
 */
class foodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->randomElement(['Comidac 1','Comida 2','Comida 3']),
            'diet_id' =>fake()->numberBetween(1, 10),
            'product_id' =>fake()->numberBetween(1, 10),
        ];
    }
}
