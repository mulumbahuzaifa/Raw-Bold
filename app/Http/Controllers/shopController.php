<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Product1;
use App\Product2;
use App\Size;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class shopController extends Controller
{
    public function index()
    {
//        $categories = Category::all();
            $categories = Category::with('children')->where('p_id', 0)->get();

        if (request()->category){
            $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        }else{
            $products = Product::take(9);
            $categoryName = 'Featured';

        }
        //Brand
        if (request()->brand){
            $products = $products->with('brands')->whereHas('brands', function ($query){
                $query->where('slug', request()->brand);
            });
            $brands = Brand::all();
            $categoryName = optional($brands->where('slug', request()->brand)->first())->name;
        }else{
            $brands = Brand::all();
        }
        //Size
        if (request()->size){
            $products = Product::with('sizes')->whereHas('sizes', function ($query){
                $query->where('slug', request()->size);
            });
            $sizes = Size::all();
            $categoryName = optional($sizes->where('slug', request()->size)->first())->name;
        }else{
            $sizes = Size::all();
        }


        //Price increase Or decrease
        if (request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(9);
        }elseif (request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(9);
        }else{
            $products = $products->paginate(9);
        }





        return view('shop' , [
            'products'=>$products,
            'categories'=>$categories,
            'categoryName'=>$categoryName,
            'brands'=>$brands,
            'sizes'=>$sizes
        ] );
    }
    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrfail();

        $categories = Category::with('children')->where('p_id', 0)->get();
        $stockLevel = getStockLevel($product->quantity);

//        $product1 = Product1::where('slug', $slug)->firstOrfail();
//        $product2 = Product2::where('slug', $slug)->firstOrfail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->inRandomOrder()->take(8)->get();
        return view('product',
            [
            'product'=>$product,
                'categories'=>$categories,
//            'product1'=>$product1,
//            'product2'=>$product2,
            'mightAlsoLike'=>$mightAlsoLike,
                'stockLevel'=>$stockLevel
        ]
        );
    }
}
