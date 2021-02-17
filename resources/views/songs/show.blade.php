@extends('layouts.dashboard')

@section('content')
    <h1 class="mt-4">Lyrics List</h1>
    <div class="card mb-4 d-flex justify-content-center">
        <div class="container">
            <h5 class="card-title">{{$song->title}} </h5>
            <h6>by {{$song->artist}}</h6>
            <p class="card-text">{{$song->lyrics}}</p>
        </div>
    </div>
@endsection