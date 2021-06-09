@extends('layouts.app')

@section('content')
    <h1>Create Horse</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\HorsesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('horse_name', 'Horse Name')}}
            {{Form::text('horse_name', '', ['class' => 'form-control', 'placeholder' => 'Horse Name'])}}

        </div>
        {{-- <div class="form-group">
            {{Form::label('jockey_name', 'Jockey Name')}}
            {{Form::text('jockey_name', '', ['class' => 'form-control', 'placeholder' => 'Jockey Name'])}}
        
        </div> --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection