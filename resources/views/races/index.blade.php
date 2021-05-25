@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <h1>Races</h1>
        </div>
        <div class="col-sm-8">
            @if(!Auth::guest())
                <p><a class="btn btn-primary"  style="float: right" href="/races/create" role="button">Add a New Race</a></p>
            @endif
        </div>
    </div>

    @if(count($races) > 0)
        @foreach ($races as $race)
            <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title"><a href="/races/{{$race->id}}">{{$race->race_date}}</a></h4>
                    <small class="card-text">Created on {{$race->created_at}}</small>
                </div>
            </div>
            <br>
        @endforeach
        {{$races->links()}}
    @else
        <p>No Races Found At This Time!
    @endif  
@endsection