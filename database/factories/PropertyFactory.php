<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),
            'win_bid' => $this->faker->numberBetween(20000,50000),
            'last_bid_diff' => $this->faker->numberBetween(1000,5000),
        ];
    }
}
