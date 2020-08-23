<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name'=>'Men', 'slug'=>'Men','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'women', 'slug'=>'women','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'new', 'slug'=>'new','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'shoe', 'slug'=>'shoe','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'bag', 'slug'=>'bag','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'jewelry', 'slug'=>'jewelry','p_id'=>0, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'jeans', 'slug'=>'jeans','p_id'=>1, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'shirt', 'slug'=>'shirt','p_id'=>1, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Sweater', 'slug'=>'Sweater','p_id'=>1, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'suits', 'slug'=>'suits','p_id'=>1, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'skirts', 'slug'=>'skirts','p_id'=>2, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'min-dresses', 'slug'=>'min-dresses','p_id'=>2, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'prom-dresses', 'slug'=>'prom-dresses','p_id'=>2, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'dresses', 'slug'=>'dresses','p_id'=>2, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'men-wear', 'slug'=>'men-wear','p_id'=>3, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'women-wear', 'slug'=>'women-wear','p_id'=>3, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'shoes', 'slug'=>'shoes','p_id'=>3, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'bags', 'slug'=>'bags','p_id'=>3, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'jewelries', 'slug'=>'jewelries','p_id'=>3, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Sneakers', 'slug'=>'Sneakers','p_id'=>4, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Sandals', 'slug'=>'Sandals','p_id'=>4, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Formal Shoes', 'slug'=>'Formal-Shoes','p_id'=>4, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Boots', 'slug'=>'Boots','p_id'=>4, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Hand Bags', 'slug'=>'Hand-Bags','p_id'=>5, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Purses', 'slug'=>'Purses','p_id'=>5, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Laptop Bags', 'slug'=>'Laptop-Bags','p_id'=>5, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Watches', 'slug'=>'Watches','p_id'=>6, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'glasses', 'slug'=>'glasses','p_id'=>6, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'neckleces', 'slug'=>'neckleces','p_id'=>6, 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'ankleleces', 'slug'=>'ankleleces','p_id'=>6, 'created_at'=> $now, 'updated_at'=> $now],
        ]);

    }
}
