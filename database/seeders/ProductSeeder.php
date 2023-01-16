<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory([
            'category_id' => 1,
            'subcategory_id' => 1,
            'name' => 'dummy name',
            'image' => 'dummy image',
            'price' => 1,
        ])->create();
        Product::factory([
            'category_id' => 2,
            'subcategory_id' => 2,
            'name' => 'dummy name 2',
            'image' => 'dummy image 2',
            'price' => 1,
        ])->create();
    }
}
