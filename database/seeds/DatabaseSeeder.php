<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoryTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
//         $this->call(Products1TableSeeder::class);
         $this->call(Products2TableSeeder::class);
         $this->call(CouponsTableSeeder::class);
//         $this->call(BugsTableSeeder::class);
//         $this->call(JewelriesTableSeeder::class);
//         $this->call(MenTableSeeder::class);
//         $this->call(WomenTableSeeder::class);
//         $this->call(ShoesTableSeeder::class);
//         $this->call(welcomeTableSeeder::class);
    }
}
