<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
                'typeuser_id' =>fake()->numberBetween(1, 10),
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => fake()->randomElement(['12345678','87654321']), // password
                'state_id' =>fake()->numberBetween(1, 5),
                'township_id' =>fake()->numberBetween(1, 5),
                'address' => fake()->randomElement(['mi casa','mi otra casa']), // password

                
        ];
    }
}
