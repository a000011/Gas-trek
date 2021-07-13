<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

class exampleController extends Controller
{
    function showSelected($id){
        $data = examples::where('id', $id)->first();
        $data->img = examples::parseImgs($data->img);
        return view('selectedExample', ['data'=> $data]);
    }
    function show(){
        $data = examples::all();
        foreach ($data as $_data) {
            $_data->img = examples::parseImgs($_data->img);
        }

        return view('example', ['examples'=> $data]);
    }
}
