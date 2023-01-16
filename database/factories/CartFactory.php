<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_json' => '[
                {"product_id":1,"product_name":"Dell PC","product_price":200000,"product_qty":2},
                {"product_id":2,"product_name":"Apple iPhone13","product_price":100000,"product_qty":3}
            ]'
        ];
    }
}
