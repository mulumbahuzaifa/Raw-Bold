<?php

namespace App\Http\Controllers;

use App\Shoes;
use Illuminate\Http\Request;

class shoeController extends Controller
{
    public function index()
    {
        $shoes = Shoes::inRandomOrder()->limit(20)->get();

        return view('shoes' , ['shoes'=>$shoes] );
    }
}
