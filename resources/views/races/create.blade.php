@extends('layouts.app')

@php
    use App\Models\Horse;
    use App\Models\Location;
@endphp

@section('content')

    <h1>Create Race</h1>

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            {!! Form::open(['action' => 'App\Http\Controllers\RacesController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('race_date', 'Race Date')}}
                {{Form::date('race_date', '', ['class' => 'form-control'])}}
    
            </div>
            <div class="form-group">
                {{Form::label('race_location', 'Race Location')}}
                {{Form::select('race_location', $locations = Location::pluck('race_location', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Race Location'])}}
                {{-- {{Form::text('race_location', '', ['class' => 'form-control', 'placeholder' => 'Race Location'])}} --}}
    
            </div>
            <div class="form-group">
                {{Form::label('winner', 'Race Winner')}}
                {{Form::select('winner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Race Winner'])}}
            
            </div>
            <div class="form-group">
                {{Form::label('second_runner', 'Second Runner Up')}}
                {{Form::select('second_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Second Runner Up'])}}
            
            </div>
            <div class="form-group">
                {{Form::label('third_runner', 'Third Runner Up')}}
                {{Form::select('third_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Third Runner Up'])}}
    
            </div>
            <div class="form-group">
                {{Form::label('fourth_runner', 'Fourth Runner Up')}}
                {{Form::select('fourth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Fourth Runner Up'])}}
    
            </div>
            <div class="form-group">
                {{Form::label('fifth_runner', 'Fifth Runner Up')}}
                {{Form::select('fifth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Fifth Runner Up'])}}
    
            </div>
            <div class="form-group">
                {{Form::label('sixth_runner', 'Sixth Runner Up')}}
                {{Form::select('sixth_runner', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Sixth Runner Up'])}}
    
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
@endsection