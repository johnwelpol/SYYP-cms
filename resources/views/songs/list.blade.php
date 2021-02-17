@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Lyrics List</h1>

    <div class="card mb-4">
        <div class="card-header flex">
            <i class="fas fa-table mr-1"></i>
            <a class="btn btn-primary"> ADD </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Lyrics</th>
                            <th>Actions</th>
                        </tr>
                        <tbody>
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{$song->title}}</td>
                                    <td>{{$song->artist}}</td>
                                    <td>{{$song->lyrics}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{url('songs/'.$song->id.'/edit')}}">EDIT</a>
                                        <form action="/songs/{{$song->id}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection