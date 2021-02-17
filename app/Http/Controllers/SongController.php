<?php

namespace App\Http\Controllers;

use App\Song;
use App\Traits\SongHelperTrait;
use Illuminate\Http\Request;

class SongController extends Controller
{
    use SongHelperTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::paginate(15);

        return view('songs.list', ['songs' => $songs]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Song::create($this->prepareStoreParameters($request->all()));
        return redirect('songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  Song $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Song $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Song $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        tap($song)->update($this->prepareUpdateParameters($request->all()));
        return redirect('songs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Song $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect('songs');
    }
}
