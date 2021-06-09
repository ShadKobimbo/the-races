<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request,[
            'option_one' => 'required',
            'option_two' => 'required',
            'option_three' => 'required',
            'option_four' => 'required',
            'option_five' => 'required',
            'option_six' => 'required'
        ]);

        $option_one = $request->input('option_one');
        $option_two = $request->input('option_two');
        $option_three = $request->input('option_three');
        $option_four = $request->input('option_four');
        $option_five = $request->input('option_five');
        $option_six = $request->input('option_six');

        // $races = DB::table('races')
        //                     ->whereIn($option_one,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->orWhereIn($option_two,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->orWhereIn($option_three,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->orWhereIn($option_four,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->orWhereIn($option_five,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->orWhereIn($option_six,['winner','second_runner','third_runner','fourth_runner','fifth_runner','sixth_runner'])
        //                     ->get();

        $races = Race::whereIn('winner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('second_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('third_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('fourth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('fifth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->whereIn('sixth_runner',[$option_one, $option_two, $option_three, $option_four, $option_five, $option_six])
                    ->get();

        if($races != null){
            return view('pages.search')->with('races', $races);

        } else {
            return view('pages.search')->with('error', 'Race not available in the system');
        }
    }
}
