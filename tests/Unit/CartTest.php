<?php


use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ProductTest extends TestCase
{
//    use RefreshDatabase;

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
//        dd($subCategory->toArray());
        $this->seed(ProductSeeder::class);
        dd(Product::with('category','subCategory')->get()->toArray());
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
