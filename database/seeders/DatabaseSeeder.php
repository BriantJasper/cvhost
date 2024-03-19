<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        Product::create([
            'name' => 'CCTV 1',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 1,
            'image' => '/images/products/1.png',
        ]);

        Product::create([
            'name' => 'CCTV 2',
            'price' => 1300000,
            'wholesale_price' => 1000000,
            'list_price' => 1750000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 2,
            'image' => '/images/products/2.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 2,
            'image' => '/images/products/3.png',
        ]);
        
        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 2,
            'image' => '/images/products/4.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 3,
            'image' => '/images/products/5.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 3,
            'image' => '/images/products/6.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 4,
            'image' => '/images/products/7.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 5,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 6,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 7,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 2,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 2,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 1,
            'image' => '/images/products/8.png',
        ]);

        Product::create([
            'name' => 'CCTV 3',
            'price' => 750000,
            'wholesale_price' => 500000,
            'list_price' => 1000000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, quisquam laborum. Labore cum doloremque iste, consectetur temporibus eos officiis, minus perferendis placeat rem quae distinctio, quia alias neque. Nostrum, reiciendis.',
            'category_id' => 1,
            'image' => '/images/products/8.png',
        ]);

        Category::create([
            'name' => 'CCTV Indoor',
            'slug' => 'cctv-indoor',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'CCTV Outdoor',
            'slug' => 'cctv-outdoor',
            'image' => 'images/category/cctv-outdoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'Category 3',
            'slug' => 'category-3',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'Category 4',
            'slug' => 'category-4',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'Category 5',
            'slug' => 'category-5',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'Category 6',
            'slug' => 'category-6',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
        Category::create([
            'name' => 'Category 7',
            'slug' => 'category-7',
            'image' => 'images/category/cctv-indoor.png',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
    }   
}
