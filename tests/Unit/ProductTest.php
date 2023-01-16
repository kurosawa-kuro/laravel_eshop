<?php


use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SubCategoryTest extends TestCase
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
//        dd(Category::all()->toArray());
        $this->seed(SubCategorySeeder::class);
        $subCategory = SubCategory::with('category')->get();
        dd($subCategory->toArray());

//        dd(SubCategory::create([
//            'id' => 1,
//            'category_id' => 1,
//            'name' => 'Dell'
//        ])->toArray());
//        Category::factory(2)->create();
//        $category = Category::all();
//        dd($category ->toArray());
        $this->assertTrue(true);
    }


}
