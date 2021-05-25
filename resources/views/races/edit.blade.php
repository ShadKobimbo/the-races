@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')
    <h1>Edit Race</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\RacesController@update', $race->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('race_date', 'Race Date')}}
            {{Form::date('race_date', $race->race_date, ['class' => 'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::label('winner', 'Race Winner')}}
            {{Form::select('winner', $horses = Horse::pluck('horse_name', 'id'), $race->winner, ['class' => 'form-control', 'placeholder' => 'Race Winner'])}}
        
        </div>
        <div class="form-group">
            {{Form::label('second_runner', 'Second Runner Up')}}
            {{Form::select('second_runner', $horses = Horse::pluck('horse_name', 'id'), $race->second_runner, ['class' => 'form-control', 'placeholder' => 'Second Runner Up'])}}
        
        </div>
        <div class="form-group">
            {{Form::label('third_runner', 'Third Runner Up')}}
            {{Form::select('third_runner', $horses = Horse::pluck('horse_name', 'id'), $race->third_runner, ['class' => 'form-control', 'placeholder' => 'Third Runner Up'])}}

        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection