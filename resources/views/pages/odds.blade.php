@extends('layouts.app')

@php
    use App\Models\Horse;
@endphp

@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-header">
                <h3><strong>Welcome to Race Odds</strong></h3>
            </div>
            <div class="card-body">

                <h5 style="text-align:center"><strong>Select Horses Below</strong></h5>
                {!! Form::open(['action' => 'App\Http\Controllers\OddsController@checker', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('option_one', 'Option One')}}
                        {{Form::select('option_one', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_one'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option One'])}}
                    
                    </div>
                    <div class="form-group">
                        {{Form::label('option_two', 'Option Two')}}
                        {{Form::select('option_two', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_two'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Two'])}}
                    
                    </div>
                    <div class="form-group">
                        {{Form::label('option_three', 'Option Three')}}
                        {{Form::select('option_three', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_three'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Three'])}}
            
                    </div>
                    <div class="form-group">
                        {{Form::label('option_four', 'Option Four')}}
                        {{Form::select('option_four', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_four'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Four'])}}
            
                    </div><div class="form-group">
                        {{Form::label('option_five', 'Option Five')}}
                        {{Form::select('option_five', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_five'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Five'])}}
            
                    </div><div class="form-group">
                        {{Form::label('option_six', 'Option Six')}}
                        {{Form::select('option_six', $horses = Horse::orderBy('horse_name','asc')->pluck('horse_name', 'id'), $primary_options['option_six'] ?? '', ['class' => 'form-control', 'placeholder' => 'Option Six'])}}
            
                    </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
            <div class="card-footer">
                <p>Possible outcome will be shown on the right....</p>
                {{-- <p>Option One - {{$counter_one ?? ''}} Wins</p> --}}
            </div>
        </div> 
    </div>
    <hr>
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-header">
                <h3><strong>Possible Outcomes</strong></h3>
            </div>
            <div class="card-body">
                <h3> Winner - {{$winner->horse_name ?? ''}}</h3>
                <h4> Second - {{$second_horse->horse_name ?? ''}}</h4>
                <h5> Third - {{$third->horse_name ?? ''}}</h5>
            </div>
        </div>
    </div>
</div>   
    
@endsection