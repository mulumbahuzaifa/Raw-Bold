<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            Product::create([
                'name' => 'Men '. $i,
                'slug' => 'Men-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '.['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .'color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'men',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(1);
        }
        //Women
        for ($i = 1; $i < 30; $i++){
            Product::create([
                'name' => 'women '. $i,
                'slug' => 'women-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'women',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(2);
        }
        //new
        for ($i = 1; $i < 15; $i++){
            Product::create([
                'name' => 'new '. $i,
                'slug' => 'new-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'new',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(3);
        }
        //Shoe
        for ($i = 1; $i < 20; $i++){
            Product::create([
                'name' => 'shoe '. $i,
                'slug' => 'shoe-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'stock',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(4);
        }
        //Bag
        for ($i = 1; $i < 14; $i++){
            Product::create([
                'name' => 'bag '. $i,
                'slug' => 'bag-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'bag',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(5);
        }
        //Jewelry
        for ($i = 1; $i < 18; $i++){
            Product::create([
                'name' => 'jewelry '. $i,
                'slug' => 'jewelry-'. $i,
                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
                'price' => rand(1000, 30000),
                'prevPrice' =>rand(1000, 30000),
                'stock'=> 'new',
                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
            ])->categories()->attach(6);
        }
        $product = Product::find(1);
        $product->categories()->attach(3);


//        //new
//        for ($i = 1; $i < 15; $i++){
//            Product::create([
//                'name' => 'new '. $i,
//                'slug' => 'new-'. $i,
//                'details' => ['XS','S','M','L','XL','XXL'][array_rand(['XS','S','M','L','XL','XXL'])] . ' size, ' .['Zara','Nike','Addidas','Asos'][array_rand(['Zara','Nike','Addidas','Asos'])] .' brand, '. ['Blue','Green','Red','Black'][array_rand(['Blue','Green','Red','Black'])] .' color',
//                'price' => rand(1000, 30000),
//                'prevPrice' =>rand(1000, 30000),
//                'stock'=> 'new',
//                'description' => 'Lorem '.$i . ' dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//            ]);
//        }
//        Product::create([
//            'name' => 'image 1',
//            'slug' => 'image_1',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 3',
//            'slug' => 'image_3',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 4',
//            'slug' => 'image_4',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 5',
//            'slug' => 'image_5',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 6',
//            'slug' => 'image_6',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 7',
//            'slug' => 'image_7',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 8',
//            'slug' => 'image_8',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 9',
//            'slug' => 'image_9',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 10',
//            'slug' => 'image_10',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 11',
//            'slug' => 'image_11',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);
//        Product::create([
//            'name' => 'image 12',
//            'slug' => 'image_12',
//            'details' => 'Black,Medium,V&A',
//            'price' => 200,
//            'prevPrice' =>300,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.'
//        ]);

    }
}
