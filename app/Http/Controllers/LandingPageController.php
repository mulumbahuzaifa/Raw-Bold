<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Product1;
use App\Product2;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->where('p_id', 0)->get();

        $products = Product::inRandomOrder()->limit(8)->get();
        $products1 = Product::where('new', true)->limit(8)->inRandomOrder()->get();
        $products2 = Product2::inRandomOrder()->limit(4)->get();

        return view('landing-page' , ['products'=>$products , 'products1'=>$products1  ,'categories'=>$categories,'product2s'=>$products2]);
    }
}
