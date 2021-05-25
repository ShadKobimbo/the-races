<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Horse;

class OddsController extends Controller
{
    public function index()
    {
        return view('pages.odds');
    }

    public function checker(Request $request)
    {
        $this->validate($request,[
            'option_one' => 'required',
            'option_two' => 'required',
            'option_three' => 'required'
        ]);

        $counter_one = count(Race::where('winner', $request->input('option_one'))->get());
        $counter_two = count(Race::where('winner', $request->input('option_two'))->get());
        $counter_three = count(Race::where('winner', $request->input('option_three'))->get());

        return view('pages.odds')->with('counter_one', $counter_one)->with('counter_two', $counter_two)->with('counter_three', $counter_three);
    }
    
}
