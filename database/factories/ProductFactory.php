<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_pro' => $this->faker->name,
            'kind_pro' =>  $this->faker->name,
            'qty_pro' => $this->faker->name,
            'price' => $this->faker->name,
        ];
    }
}
