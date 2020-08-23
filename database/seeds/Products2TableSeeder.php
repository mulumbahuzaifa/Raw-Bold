<?php

use App\Product2;
use Illuminate\Database\Seeder;

class Products2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //welcome
        for ($i = 1; $i < 18; $i++){
            Product2::create([
                'name' => 'welcome '. $i,
                'slug' => 'welcome-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'Featured',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ]);
        }
//        Product2::create([
//            'name' => 'bg',
//            'slug' => 'bg',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg-1',
//            'slug' => 'bg-1',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg-2',
//            'slug' => 'bg-2',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg-3',
//            'slug' => 'bg-3',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg-5',
//            'slug' => 'bg-5',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg-6',
//            'slug' => 'bg-6',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg_1',
//            'slug' => 'bg_1',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'bg_3',
//            'slug' => 'bg_3',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'pds1',
//            'slug' => 'pds1',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'pds3',
//            'slug' => 'pds3',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'pds34',
//            'slug' => 'pds34',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'pds39',
//            'slug' => 'pds39',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product2::create([
//            'name' => 'pds41',
//            'slug' => 'pds41',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);

//        Product2::create([
//            'name' => 'pds60',
//            'slug' => 'pds60',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);

    }
}
