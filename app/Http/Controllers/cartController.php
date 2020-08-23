<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Product1;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Overtrue\LaravelShoppingCart\Facade;

class cartController extends Controller
{

    public function index()
    {
//        $categories = Category::with('children')->where('p_id', 0)->get();
        $mightAlsoLike = Product::inRandomOrder()->take(8)->get();
        return view('cart',[
            'mightAlsoLike'=>$mightAlsoLike,
//            'categories'=>$categories
            ]
        );
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name,1, $request->price)
            ->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Item has been successfully added to cart!');
    }
}
