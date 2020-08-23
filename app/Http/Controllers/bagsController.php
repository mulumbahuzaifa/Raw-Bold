<?php

namespace App\Http\Controllers;

use App\Bugs;
use Illuminate\Http\Request;

class bagsController extends Controller
{
    public function index()
    {
        $bags = Bugs::inRandomOrder()->limit(20)->get();

        return view('bags' , ['bags'=>$bags] );
    }
}
