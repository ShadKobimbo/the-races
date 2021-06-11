@extends('layouts.app')

@php
    use App\Models\Horse;
    use App\Models\Location;
@endphp

@section('content')
    <h1>Edit Race</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\RacesController@update', $race->id], 'method' => 'POST']) !!}
        {{-- <div class="form-group">
            {{Form::label('race_date', 'Race Date')}}
            {{Form::date('race_date', $race->race_date, ['class' => 'form-control'])}}

        </div> --}}
        {{-- <div class="form-group">
            {{Form::label('race_location', 'Race Location')}}
            {{Form::select('race_location', $locations = Location::pluck('race_location', 'id'), $race->race_location, ['class' => 'form-control', 'placeholder' => 'Race Location'])}}

        </div> --}}
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
        <div class="form-group">
            {{Form::label('fourth_runner', 'Fourth Runner Up')}}
            {{Form::select('fourth_runner', $horses = Horse::pluck('horse_name', 'id'), $race->fourth_runner, ['class' => 'form-control', 'placeholder' => 'Fourth Runner Up'])}}

        </div>
        <div class="form-group">
            {{Form::label('fifth_runner', 'Fifth Runner Up')}}
            {{Form::select('fifth_runner', $horses = Horse::pluck('horse_name', 'id'), $race->fifth_runner, ['class' => 'form-control', 'placeholder' => 'Fifth Runner Up'])}}

        </div>
        <div class="form-group">
            {{Form::label('sixth_runner', 'Sixth Runner Up')}}
            {{Form::select('sixth_runner', $horses = Horse::pluck('horse_name', 'id'), $race->sixth_runner, ['class' => 'form-control', 'placeholder' => 'Sixth Runner Up'])}}

        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection