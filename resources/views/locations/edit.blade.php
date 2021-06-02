@extends('layouts.app')

@section('content')
    <h1>Edit Location</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\LocationsController@store', $location->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('location_name', 'Location Name')}}
            {{Form::text('location_name', $location->race_location, ['class' => 'form-control', 'placeholder' => 'Location Name'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection