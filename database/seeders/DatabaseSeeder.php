<?php

namespace Database\Seeders;

use \App\Models\Customer;
use \App\Models\CustomerStatus;
use \App\Models\Order;
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

        Customer::factory()
            ->times(10)
            ->has(Order::factory()->count(30))
            ->create();
    }
}
