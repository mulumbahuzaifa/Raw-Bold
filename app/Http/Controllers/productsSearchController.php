<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class productsSearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::with('children')->where('p_id', 0)->get();
        $mightAlsoLike = Product::inRandomOrder()->take(8)->get();

        $request->validate([
           'query' => 'required|min:3',
        ]);
        $query= $request->input('query');
//        $products = Product::where('name','like',"%$query%")
//                            ->orwhere('details','like',"%$query%")
//                            ->orwhere('description','like',"%$query%")
//                            ->paginate(12);
        $products = Product::search($query)->paginate(12);

        return view('search-result',['categories'=>$categories, 'mightAlsoLike'=>$mightAlsoLike, 'products'=> $products]);
    }

    public function searchAlgolia(Request $request)
    {
        $categories = Category::with('children')->where('p_id', 0)->get();
        $mightAlsoLike = Product::inRandomOrder()->take(8)->get();



        return view('search-result-algolia',['categories'=>$categories, 'mightAlsoLike'=>$mightAlsoLike]);
    }
}
