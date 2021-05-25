@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <h1>Welcome To The Races!</h1>
        <p>
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
        </p>
        <p><a class="btn btn-primary btn-lg" href="/horses" role="button">View Horses</a> <a class="btn btn-success btn-lg" href="/races" role="button">View Races</a></p>
    </div>
</div>
@endsection
