<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory(1)->create();
    }
}
