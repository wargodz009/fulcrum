<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_id' => Property::all()->random()->id,
            'status' => $this->faker->numberBetween(0,3),
            'user_id' => User::all()->random()->id
        ];
    }
}
