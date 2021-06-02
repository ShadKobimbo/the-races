@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Race Location ID</strong> - {{$location->id}}</h1>
        </div>

        <div class="card-body">
            <p><strong>Race Location</strong> - {{$location->race_location}}</p>
           
        </div>
        
        <div class="card-footer">
            <small>Created on {{$location->created_at}}</small>
            @if(!Auth::guest())
                <a href="/locations/{{$location->id}}/edit" class="btn btn-primary" style="float: right">Edit</a>
                {!! Form::open(['action' => ['App\Http\Controllers\LocationsController@destroy', $location->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        </div>
    </div>    
    <hr>
    <a href="/races" class="btn btn-primary">Go Back</a>
@endsection