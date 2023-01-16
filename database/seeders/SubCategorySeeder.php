<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::factory(['name'=>'Dell'])->create();
        SubCategory::factory(['name'=>'Apple'])->create();
        SubCategory::factory(['name'=>'Microsoft'])->create();
        SubCategory::factory(['name'=>'NEC'])->create();
    }
}
