<?php

use App\Jewelry;
use Illuminate\Database\Seeder;

class JewelriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Jewelry
        for ($i = 1; $i < 18; $i++){
            Jewelry::create([
                'name' => 'jewelry '. $i,
                'slug' => 'jewelry-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'new',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ]);
        }
//        jewelry::create([
//            'name' => 'Red Pant',
//            'slug' => 'Red-Pant',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'Stripped-Shirt',
//            'slug' => 'Stripped-Shirt',
//            'details' => 'Yellow,Small,Yeezy',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'T-shirt',
//            'slug' => 'T-shirt',
//            'details' => 'Blue,Small,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'Hoody',
//            'slug' => 'Hoody',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds2',
//            'slug' => 'pds2',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds9',
//            'slug' => 'pds9',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds26',
//            'slug' => 'pds26',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds42',
//            'slug' => 'pds42',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds43',
//            'slug' => 'pds43',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pds46',
//            'slug' => 'pds46',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pgs_1',
//            'slug' => 'pgs_1',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        jewelry::create([
//            'name' => 'pgs_3',
//            'slug' => 'pgs_3',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);

    }
}
