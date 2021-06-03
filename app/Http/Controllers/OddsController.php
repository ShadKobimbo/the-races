<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

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
            'option_three' => 'required',
            'option_four' => 'required',
            'option_five' => 'required',
            'option_six' => 'required'
        ]);

        $counter_one = count(Race::where('winner', $request->input('option_one'))->get());
        $counter_two = count(Race::where('winner', $request->input('option_two'))->get());
        $counter_three = count(Race::where('winner', $request->input('option_three'))->get());
        $counter_four = count(Race::where('winner', $request->input('option_four'))->get());
        $counter_five = count(Race::where('winner', $request->input('option_five'))->get());
        $counter_six = count(Race::where('winner', $request->input('option_six'))->get());
        
        // $collection = collect(['option_one' => $counter_one, 'option_two' => $counter_two, 'option_three' => $counter_three, 'option_four' => $counter_four, 'option_five' => $counter_five, 'option_six' => $counter_six]);
        $collection = collect([$request->input('option_one') => $counter_one, $request->input('option_two') => $counter_two, $request->input('option_three') => $counter_three, $request->input('option_four') => $counter_four, $request->input('option_five') => $counter_five, $request->input('option_six') => $counter_six]);

        $sorted = $collection->sort();

        $keys = $sorted->keys();

        $keys->all();

        $winner = Horse::where('id', '=', $keys[5])->first();
        $second_horse = Horse::where('id', '=', $keys[4])->first();
        $third = Horse::where('id', '=', $keys[3])->first();

        return view('pages.odds')->with('winner', $winner)->with('second_horse', $second_horse)->with('third', $third);

    }
    
}
