<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product1;
use App\Product2;
use Illuminate\Http\Request;

class newController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(20)->get();

        return view('new' , ['products'=>$products] );
    }
}
