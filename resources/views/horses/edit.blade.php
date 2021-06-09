@extends('layouts.app')

@section('content')
    <h1>Edit Horse</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\HorsesController@update', $horse->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('horse_name', 'Horse Name')}}
            {{Form::text('horse_name', $horse->horse_name, ['class' => 'form-control', 'placeholder' => 'Horse Name'])}}

        </div>
        {{-- <div class="form-group">
            {{Form::label('jockey_name', 'Jockey Name')}}
            {{Form::text('jockey_name', $horse->jockey_name, ['class' => 'form-control', 'placeholder' => 'Jockey Name'])}}
        
        </div> --}}
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection