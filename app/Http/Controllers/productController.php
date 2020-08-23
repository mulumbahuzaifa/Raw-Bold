<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->where('p_id', 0)->get();
        return view('product',['categories'=>$categories]);
    }
}
