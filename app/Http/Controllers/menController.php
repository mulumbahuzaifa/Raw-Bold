<?php

namespace App\Http\Controllers;

use App\Men;
use Illuminate\Http\Request;

class menController extends Controller
{
    public function index()
    {
        $men = Men::inRandomOrder()->limit(20)->get();

        return view('men' , ['men'=>$men] );
    }
}
