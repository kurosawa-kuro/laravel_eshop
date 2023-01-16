<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\UserSeeder;
use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed(CategorySeeder::class);
        dd(Category::all()->toArray());
//        Category::factory(2)->create();
//        $category = Category::all();
//        dd($category ->toArray());
        $this->assertTrue(true);
    }




}
