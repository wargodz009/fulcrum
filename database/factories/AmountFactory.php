<?php

namespace Database\Factories;

use App\Models\Bid;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(100,5000),
            'status' => $this->faker->numberBetween(0,3),
            'bid_id' => $this->faker->unique()->numberBetween(1, Bid::count())
        ];
    }
}
