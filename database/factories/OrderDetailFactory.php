<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'=> Order::all()->random()->id,
            'product_id'=> Product::all()->random()->id,
            'qty_order' => $this->faker->numberBetween(0,100),
            'total_price' => $this->faker->numberBetween(1000,100000)


        ];
    }
}
