<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use App\Models\Article;
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
//       User::factory(30)->create();
//       Profile::factory(10)->create();
//       Product::factory(20)->create();
//       Order::factory(50)->create()->each(function($article){
//            $ids = range(1, 20);
//            shuffle($ids);//trộn
//            $sliced = array_slice($ids, 1, 10);
//            $article->products()->attach($sliced);
//        });;
//        Order::factory(10)->create();
       Order_Detail::factory(30)->create();
    }
}
