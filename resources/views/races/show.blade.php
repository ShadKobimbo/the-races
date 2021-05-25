@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Race ID</strong> - {{$race->id}}</h1>
        </div>

        <div class="card-body">
            <p><strong>Race Winner</strong> - {{$winning_horse->horse_name}}</p>
            <p><strong>Second Runner Up</strong> - {{$second_horse->horse_name}}</p>
            <p><strong>Third Runner Up</strong> - {{$third_horse->horse_name}}</p>
        </div>
        
        <div class="card-footer">
            <small>Created on {{$race->created_at}}</small>
            @if(!Auth::guest())
                <a href="/races/{{$race->id}}/edit" class="btn btn-primary" style="float: right">Edit</a>
                {!! Form::open(['action' => ['App\Http\Controllers\RacesController@destroy', $race->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        </div>
    </div>    
    <hr>
    <a href="/races" class="btn btn-primary">Go Back</a>
@endsection