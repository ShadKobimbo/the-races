@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')
    <h1>Create Race</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\RacesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('race_date', 'Race Date')}}
            {{Form::date('race_date', '', ['class' => 'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::label('winner', 'Race Winner')}}
            {{Form::select('winner', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Race Winner'])}}
        
        </div>
        <div class="form-group">
            {{Form::label('second_runner', 'Second Runner Up')}}
            {{Form::select('second_runner', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Second Runner Up'])}}
        
        </div>
        <div class="form-group">
            {{Form::label('third_runner', 'Third Runner Up')}}
            {{Form::select('third_runner', $horses = Horse::pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Third Runner Up'])}}

        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection