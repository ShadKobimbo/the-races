<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horse;


class HorsesController extends Controller
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
        $horses = Horse::orderBy('horse_name', 'desc')->paginate(5);
        return view('horses.index')->with('horses', $horses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create');

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
            'horse_name' => 'required',
            // 'jockey_name' => 'required',
        
        ]);

        $count_horse = Horse::where('horse_name', $request->input('horse_name'))->count();

        if($count_horse <= 0){
            //Create Horse
            $horse = new Horse;
            $horse->horse_name = $request->input('horse_name');
            $horse->jockey_name = $request->input('jockey_name');
            $horse->save();

            return redirect('/horses')->with('success', 'New Horse Created');
        } else {
            return redirect('/horses')->with('error', 'Horse Name Already Exists');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horse = Horse::find($id);
        return view('horses.show')->with('horse', $horse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horse = Horse::find($id);
        return view('horses.edit')->with('horse', $horse);
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
            'horse_name' => 'required',
            // 'jockey_name' => 'required',
        
        ]);

        //Update Horse
        $horse = Horse::find($id);
        $horse->horse_name = $request->input('horse_name');
        $horse->jockey_name = $request->input('jockey_name');
        $horse->save();

        return redirect('/horses')->with('success', 'Horse Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Horse
        $horse = Horse::find($id);
        $horse->delete();
        return redirect('/horses')->with('success', 'Horse Removed');
    }
}
