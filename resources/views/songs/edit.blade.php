@extends('layouts.dashboard')

@section('content')
    <h1 class="mt-4">Lyrics List</h1>
    <div class="card mb-4">
        <div class="card-header flex">
            <i class="fas fa-table mr-1"></i>
            <a class="float right fas fa-plus"></a>
        </div>
        <div class="container">
            <form action="/songs/{{$song->id}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$song->title}}">
                </div>
                <div class="mb-3">
                    <label for="artist" class="form-label">Artist</label>
                    <input type="text" class="form-control" id="artist" name="artist" value="{{$song->artist}}">
                </div>
                <div class="mb-3">
                    <label for="lyrics" class="form-label">Lyrics</label>
                    <textarea class="form-control" id="lyrics" rows="3" name="lyrics">{{$song->lyrics}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection