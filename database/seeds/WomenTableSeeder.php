<?php

use App\Women;
use Illuminate\Database\Seeder;

class WomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Women
        for ($i = 1; $i < 30; $i++){
            Women::create([
                'name' => 'women '. $i,
                'slug' => 'women-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'women',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ]);
        }
//        Women::create([
//            'name' => 'pds1',
//            'slug' => 'pds1',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds21',
//            'slug' => 'pds21',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds24',
//            'slug' => 'pds24',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds25',
//            'slug' => 'pds25',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds26',
//            'slug' => 'pds26',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds27',
//            'slug' => 'pds27',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds28',
//            'slug' => 'pds28',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds30',
//            'slug' => 'pds30',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds31',
//            'slug' => 'pds31',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds32',
//            'slug' => 'pds32',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds33',
//            'slug' => 'pds33',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds35',
//            'slug' => 'pds35',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds36',
//            'slug' => 'pds36',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds37',
//            'slug' => 'pds37',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds40',
//            'slug' => 'pds40',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds42',
//            'slug' => 'pds42',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds44',
//            'slug' => 'pds44',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds45',
//            'slug' => 'pds45',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds48',
//            'slug' => 'pds48',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds49',
//            'slug' => 'pds49',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds50',
//            'slug' => 'pds50',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds51',
//            'slug' => 'pds51',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds52',
//            'slug' => 'pds52',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds53',
//            'slug' => 'pds53',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds54',
//            'slug' => 'pds54',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds55',
//            'slug' => 'pds55',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Women::create([
//            'name' => 'pds56',
//            'slug' => 'pds56',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' => 300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
    }
}
