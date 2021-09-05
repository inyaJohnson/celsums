<?php

namespace Database\Seeders;

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
        $products = [
            ['name' =>'bronze', 'amount'=>300, 'description'=>'An investment plan with 50% Profits Monthly.', 'profit'=>50, 'duration' => '1 month', 'commission' => 20, 'guarantee' => 40,'type' => 'mini'],
            ['name' =>'silver', 'amount'=>1000, 'description'=>'An investment plan with 50% Profits Monthly.', 'profit'=>50, 'duration' => '1 month', 'commission' => 20, 'guarantee' => 40, 'type' => 'mini'],
            ['name' =>'gold', 'amount'=>5000, 'description'=>'An investment plan with 70% Profits Monthly.', 'profit'=>70, 'duration' => '1 month', 'commission' => 20, 'guarantee' => 65, 'type' => 'mini'],
            ['name' =>'diamond', 'amount'=>10000, 'description'=>'An investment plan with 80% Profits Monthly.', 'profit'=>80, 'duration' => '1 month', 'commission' => 20, 'guarantee' => 100, 'type' => 'mega'],
            ['name' =>'platinum', 'amount'=>20000, 'description'=>'An investment plan with 100% Profits Monthly.', 'profit'=>100, 'duration' => '1 month', 'commission' => 12, 'guarantee' => 100, 'type' => 'mega'],
            ['name' =>'special', 'amount'=>50000, 'description'=>'An investment plan with 100% Profits Monthly.', 'profit'=>100, 'duration' => '1 month', 'commission' => 12, 'guarantee' => 100, 'type' => 'mega'],
        ];

        foreach ($products as $product){
            Product::create($product);
        }
    }
}
