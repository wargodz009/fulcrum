<?php

namespace Database\Seeders;

use Database\Factories\BidFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Property::factory(10)->create();
         \App\Models\Bid::factory(10)->create();
         \App\Models\Amount::factory(10)->create();
    }
}
