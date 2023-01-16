<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(['name'=>'PC'])->create();
        Category::factory(['name'=>'Camera'])->create();
        Category::factory(['name'=>'Smart Phone'])->create();
        Category::factory(20)->create();
    }
}
