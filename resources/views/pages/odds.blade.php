@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')
    <div class="card bg-light">
        <div class="card-header">
            <h3><strong>Welcome to Race Odds</strong></h3>
        </div>
        <div class="card-body">
            <h5 style="text-align:center"><strong>Select Horses Below</strong></h5>
            {!! Form::open(['action' => 'App\Http\Controllers\OddsController@checker', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('option_one', 'Option One')}}
                    {{Form::select('option_one', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Option One'])}}
                
                </div>
                <div class="form-group">
                    {{Form::label('option_two', 'Option Two')}}
                    {{Form::select('option_two', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Option Two'])}}
                
                </div>
                <div class="form-group">
                    {{Form::label('option_three', 'Option Three')}}
                    {{Form::select('option_three', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Option Three'])}}
        
                </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
        <div class="card-footer">
            <p>Option One - {{$counter_one ?? ''}} Wins</p>
            <p>Option Two - {{$counter_two ?? ''}} Wins</p>
            <p>Option Three - {{$counter_three ?? ''}} Wins</p>
        </div>
    </div>    
    <hr>
@endsection