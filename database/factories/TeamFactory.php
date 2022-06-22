<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

        'position'=>  $this->faker->numberBetween($min = 1, $max = 20),
        'point'=>  $this->faker->numberBetween($min = 1, $max = 20),
        'win'=>  $this->faker->numberBetween($min = 1, $max = 20),
        'draw'=>  $this->faker->numberBetween($min = 1, $max = 20),
        'lose'=>  $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}


