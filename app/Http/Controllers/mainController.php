<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

class mainController extends Controller
{
    function entrance(){
        $examples = examples::all();
        foreach ($examples as $ex) {
            $ex->img = examples::parseImgs($ex->img);
        }
        return view('main', ['examples'=> $examples]);
    }
}
