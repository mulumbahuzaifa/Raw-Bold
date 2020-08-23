<?php

use App\Bugs;
use Illuminate\Database\Seeder;

class BugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bag
        for ($i = 1; $i < 14; $i++){
            Bugs::create([
                'name' => 'bag '. $i,
                'slug' => 'bag-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'bag',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ]);
        }
//        Bugs::create([
//            'name' => 'image 4',
//            'slug' => 'image_4',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'image 5',
//            'slug' => 'image_5',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'image 8',
//            'slug' => 'image_8',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'image 9',
//            'slug' => 'image_9',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'pgs_2',
//            'slug' => 'pgs_2',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'pgs_4',
//            'slug' => 'pgs_4',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'pds11',
//            'slug' => 'pds11',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'pds26',
//            'slug' => 'pds26',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'pds42',
//            'slug' => 'pds42',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'product 4',
//            'slug' => 'product_4',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'product 6',
//            'slug' => 'product_6',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'product 11',
//            'slug' => 'product_11',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'product 15',
//            'slug' => 'product_15',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Bugs::create([
//            'name' => 'product 17',
//            'slug' => 'product_17',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
    }
}
