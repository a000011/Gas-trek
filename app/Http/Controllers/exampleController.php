<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

class exampleController extends Controller
{
    function show($id){
        $data = examples::where('id', $id)->first();

        $data->img = examples::parseImgs($data->img);

        return view('example', ['data'=> $data]);
    }
}
