<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'email' =>fake()->email(),
            'city' => fake()->city(),
            'address' => fake()->address(),
            'age' => fake()->numberBetween(15,20),
            'phone' => fake()->phoneNumber(),
            'password'=>fake()->password(),


        ];
    }
}
