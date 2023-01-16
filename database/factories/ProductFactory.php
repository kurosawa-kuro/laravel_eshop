<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $table->integer('category_id');
//        $table->integer('subcategory_id')->nullable();
//        $table->string('name');
//        $table->string('image');
//        $table->integer('price');
        return [
            'category_id' => 1,
            'subcategory_id' => 1,
            'name' => $this->faker->name(),
            'image' => 'dummy',
            'price' => 1,
        ];
    }
}
