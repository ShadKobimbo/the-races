<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Horse;

class RacesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $races = Race::all();
        $races = Race::orderBy('created_at', 'desc')->paginate(5);
        return view('races.index')->with('races', $races);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'winner' => 'required',
            'second_runner' => 'required',
            'third_runner' => 'required'
            // 'fourth_runner' => 'required',
            // 'fifth_runner' => 'required',
            // 'sixth_runner' => 'required'

        ]);

        $count_date = Race::where('race_date', $request->input('race_date'))->count();
        $count_location = Race::where('race_location', $request->input('race_location'))->count();

        // if($count_date > 0 && $count_location >0) {
        //     $race = Race::where('race_date', $request->input('race_date'))->where('race_location', $request->input('race_location'))->first();
                
        //     $winning_horse = Horse::where('id', '=', $race->winner)->first();
        //     $second_horse = Horse::where('id', '=', $race->second_runner)->first();
        //     $third_horse = Horse::where('id', '=', $race->third_runner)->first();
                
        //     return view('races.show')->with('race', $race)->with('winning_horse', $winning_horse)->with('second_horse', $second_horse)->with('third_horse', $third_horse)->with('error', 'Race Already Exists');


        // } else {
            //Create Race
            $race = new Race;
            $race->race_date = $request->input('race_date');
            $race->race_location = $request->input('race_location');
            $race->winner = $request->input('winner');
            $race->second_runner = $request->input('second_runner');
            $race->third_runner = $request->input('third_runner');
            $race->fourth_runner = $request->input('fourth_runner');
            $race->fifth_runner = $request->input('fifth_runner');
            $race->sixth_runner = $request->input('sixth_runner');

            $race->save();

            return redirect('/races')->with('success', 'New Race Created');
        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $race = Race::find($id);

        $winning_horse = Horse::where('id', '=', $race->winner)->first();
        $second_horse = Horse::where('id', '=', $race->second_runner)->first();
        $third_horse = Horse::where('id', '=', $race->third_runner)->first();

        return view('races.show')->with('race', $race)->with('winning_horse', $winning_horse)->with('second_horse', $second_horse)->with('third_horse', $third_horse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        return view('races.edit')->with('race', $race);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'winner' => 'required',
            'second_runner' => 'required',
            'third_runner' => 'required'
            // 'fourth_runner' => 'required',
            // 'fifth_runner' => 'required',
            // 'sixth_runner' => 'required'
        ]);

        //Update Race
        $race = Race::find($id);
        $race->race_date = $request->input('race_date');
        $race->race_location = $request->input('race_location');
        $race->winner = $request->input('winner');
        $race->second_runner = $request->input('second_runner');
        $race->third_runner = $request->input('third_runner');
        $race->fourth_runner = $request->input('fourth_runner');
        $race->fifth_runner = $request->input('fifth_runner');
        $race->sixth_runner = $request->input('sixth_runner');
        $race->save();

        return redirect('/races')->with('success', 'Race Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Race
        $race = Race::find($id);
        $race->delete();
        return redirect('/races')->with('success', 'Race Removed');

    }
}
