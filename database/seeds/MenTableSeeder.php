<?php

use App\Men;
use Illuminate\Database\Seeder;

class MenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Men
        for ($i = 1; $i < 20; $i++){
            Men::create([
                'name' => 'Men '. $i,
                'slug' => 'Men-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '.['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .'color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'men',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ]);
        }
//        Men::create([
//            'name' => 'pds5',
//            'slug' => 'pds5',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds6',
//            'slug' => 'pds6',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds7',
//            'slug' => 'pds7',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds8',
//            'slug' => 'pds8',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds9',
//            'slug' => 'pds9',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds11',
//            'slug' => 'pds11',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds15',
//            'slug' => 'pds15',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds16',
//            'slug' => 'pds16',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds17',
//            'slug' => 'pds17',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds19',
//            'slug' => 'pds19',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds20',
//            'slug' => 'pds20',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds22',
//            'slug' => 'pds22',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds23',
//            'slug' => 'pds23',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Men::create([
//            'name' => 'pds29',
//            'slug' => 'pds29',
//            'details' => 'black,Large,Nike',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
    }
}
