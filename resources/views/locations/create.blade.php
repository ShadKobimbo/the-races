@extends('layouts.app')

@section('content')
    <h1>Create New Location</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\LocationsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('race_location', 'Location Name')}}
            {{Form::text('race_location', '', ['class' => 'form-control', 'placeholder' => 'Location Name'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection