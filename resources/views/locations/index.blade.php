@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <h1>Locations</h1>
        </div>
        <div class="col-sm-8">
            @if(!Auth::guest())
                <p><a class="btn btn-primary"  style="float: right" href="/locations/create" role="button">Add a New Location</a></p>
            @endif
        </div>
    </div>

    @if(count($locations) > 0)
        @foreach ($locations as $location)
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title"><a href="/locations/{{$location->id}}">{{$location->race_location}}</a></h4>
                    <small class="card-text">Created on {{$location->created_at}}</small>
                </div>
            </div>
            <br>
        @endforeach
        {{$locations->links()}}
    @else
        <p>No Locations Found At This Time!
    @endif  
@endsection