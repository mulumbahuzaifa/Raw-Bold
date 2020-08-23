<?php

namespace App\Http\Controllers;

use App\Jewelry;
use Illuminate\Http\Request;

class jewelryController extends Controller
{
    public function index()
    {
        $jewelry = Jewelry::inRandomOrder()->limit(20)->get();

        return view('jewelry' , ['jewelry'=>$jewelry] );
    }
}
