@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            <h1>Horses</h1>
        </div>
        <div class="col-sm-8">
            @if(!Auth::guest())
                <p><a class="btn btn-primary"  style="float: right" href="/horses/create" role="button">Add a New Horse</a></p>
            @endif
        </div>
    </div>
    
    @if (count($horses) > 0)
        @foreach ($horses as $horse)
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title"><strong>Name - </strong><a href="/horses/{{$horse->id}}">{{$horse->horse_name}}</a></h4>
                    <small class="card-text">Created on {{$horse->created_at}}</small>
                </div>
            </div>
            <br>
        @endforeach
        {{$horses->links()}}
    @else
        <p>No Horses Found At This Time!
    @endif  
@endsection