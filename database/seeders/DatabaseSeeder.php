<?php

namespace Database\Seeders;

use App\Models\Amount;
use App\Models\Bid;
use App\Models\Property;
use App\Models\User;
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
         User::factory(2)->create();
         Property::factory(2)->create();
         Bid::factory(50)->create();
         Amount::factory(50)->create();
    }
}
