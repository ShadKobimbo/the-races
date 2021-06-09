@extends('layouts.app')

@section('content')

    <div class="card bg-light">
        <div class="card-header">
            <h1><strong>Horse Name</strong> - {{$horse->horse_name}}</h1>
        </div>

        {{-- <div class="card-body">
            <p><strong>Jockey Name</strong> - {{$horse->jockey_name}}</p>
           
        </div> --}}
        
        <div class="card-footer">
            <small>Created on {{$horse->created_at}}</small>
            @if(!Auth::guest())
                <a href="/horses/{{$horse->id}}/edit" class="btn btn-primary" style="float: right">Edit</a>
                {!! Form::open(['action' => ['App\Http\Controllers\HorsesController@destroy', $horse->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        </div>
    </div>    
    <hr>
    <a href="/horses" class="btn btn-primary">Go Back</a>
@endsection