<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        //Check all feilds were filled
        $this->validate($request,[
            'option_one' => 'required',
            'option_two' => 'required',
            'option_three' => 'required',
            'option_four' => 'required',
            'option_five' => 'required',
            'option_six' => 'required'
        ]);

        //pass form inputs to variables
        $option_one = $request->input('option_one');
        $option_two = $request->input('option_two');
        $option_three = $request->input('option_three');
        $option_four = $request->input('option_four');
        $option_five = $request->input('option_five');
        $option_six = $request->input('option_six');

        // $races = Race::whereIn('winner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->whereIn('second_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->whereIn('third_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->whereIn('fourth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->whereIn('fifth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->whereIn('sixth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
        //             ->get();


        $races = Race::whereIn('winner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('second_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('third_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->get();

        // $races = Race::whereIn('winner',[$option_one, $option_two, $option_three])
        //             ->whereIn('second_runner',[$option_one, $option_two, $option_three])
        //             ->whereIn('third_runner',[$option_one, $option_two, $option_three])
        //             ->orWhereIn('fourth_runner',[$option_one, $option_two, $option_three])
        //             ->orWhereIn('fifth_runner',[$option_one, $option_two, $option_three])
        //             ->orWhereIn('sixth_runner',[$option_one, $option_two, $option_three])
        //             ->distinct()
        //             ->get();

        //returning initial values to re-populate the form
        $primary_options = array(
            'option_one' =>  $option_one,
            'option_two' =>  $option_two,
            'option_three' =>  $option_three,
            'option_four' =>  $option_four,
            'option_five' =>  $option_five,
            'option_six' =>  $option_six

        );

        if(count($races) > 0){
            return view('pages.search')->with('races', $races)->with('primary_options', $primary_options)->with('success', 'Here are similar races available in the system......');

        } else {
            return view('pages.search')->with('error', 'No similar races are available in the system...')->with('primary_options', $primary_options);
        }
    }
}
