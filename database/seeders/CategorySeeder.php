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
        $categories = [
            ['name' => 'Health', 'description' => 'Health'],
            ['name' => 'Medicine', 'description' => 'Medicine'],
            ['name' => 'Education', 'description' => 'Education'],
            ['name' => 'Food', 'description' => 'Food'],
            ['name' => 'Water Delivery', 'description' => 'Water Delivery']
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
