<?php

namespace App\Http\Controllers;

use App\Women;
use Illuminate\Http\Request;

class womenController extends Controller
{
    public function index()
    {
        $women = Women::inRandomOrder()->limit(20)->get();

        return view('women' , ['women'=>$women] );
    }
}
