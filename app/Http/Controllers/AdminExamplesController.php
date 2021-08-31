<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\examples;

class AdminExamplesController extends Controller
{
    public function showExamples(Request $request)
    {
        $method = $request->method();
        $action = null;
        if ($method == 'POST') {
            if ($request->action === 'Update') {
                $example = examples::find($request->id);
                $example->car_name = $request->car_name;
                $example->price = $request->price;
                $example->save();
            } elseif ($request->action === 'Delete') {
                $example = examples::find($request->id);
                $example->delete();
            }
        }
        $examples = examples::all();
        return view('admin.adminExamples', ['examples' => $examples, 'action' => $action]);
    }
}
