<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

class mainController extends Controller
{
    function entrance(){
        // ! converter needed
        $examples = examples::all();
        return view('main', ['examples'=> $examples]);
    }
}
