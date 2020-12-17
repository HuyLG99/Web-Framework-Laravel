<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Profile;
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
       User::factory(10)->create();
       Profile::factory(10)->create();
       Product::factory(10)->create();
       Order::factory(10)->create();
       Order_Detail::factory(10)->create();
    }
}
