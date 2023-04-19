<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $catalog = Catalog::create(['title'  =>  '1 - каталог']);

        $category1 = Category::create(['title'  =>  '1 - категория']);
        $category2 = Category::create(['title'  =>  '2 - категория']);

        $product1 = Product::create(['title'  =>  '1 - продукт']);
        $product2 = Product::create(['title'  =>  '2 - продукт']);
        $product3 = Product::create(['title'  =>  '3 - продукт']);

        $catalog->categories()->sync([1,2]);

        $category1->products()->sync([1,2]);
        $category2->products()->attach(3);

    }
}
