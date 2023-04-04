<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs =  Song::paginate(10);
        return view("songs.index", compact("songs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("songs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|max:50",
            "album" => "required|string|max:50",
            "author" => "required|string|max:50",
            "editor" => "required|string|max:50",
            "length" => "required|string|max:10",
            "poster" => "required"
        ], [
            "title.required" => "You must insert the title.",
            "title.string" => "You must insert a string.",
            "title.max" => "The string must not have more than 50 characters.",

            "album.required" => "You must insert the album's title.",
            "album.string" => "You must insert a string.",
            "album.max" => "The string must not have more than 50 characters.",

            "author.required" => "You need to insert the author.",
            "author.string" => "You must insert a string.",
            "author.max" => "The string must not have more than 50 characters.",

            "editor.required" => "You need to insert the editor.",
            "editor.string" => "You must insert a string.",
            "editor.max" => "The string must not have more than 50 characters.",

            "length.required" => "You need to insert the length.",
            "length.string" => "You must insert a string.",
            "length.max" => "The string must not have more than 10 characters.",

            "poster.required" => "You need to insert the link to the poster."
        ]);

        $data = $request->all();

        $song = new Song;
        $song->fill($data);
        $song->save();

        return redirect()->route("songs.show", $song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id);
        return view("songs.show", compact("song"));
    }

    //potevo anche fare così e tra le graffe mettere direttamente il return!
    // public function show(Song $song)
    // { vedi screen SHOW ALTRO MODO }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view("songs.edit", compact("song"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            "title" => "required|string|max:50",
            "album" => "required|string|max:50",
            "author" => "required|string|max:50",
            "editor" => "required|string|max:50",
            "length" => "required|string|max:10",
            "poster" => "required"
        ], [
            "title.required" => "You must insert the title.",
            "title.string" => "You must insert a string.",
            "title.max" => "The string must not have more than 50 characters.",

            "album.required" => "You must insert the album's title.",
            "album.string" => "You must insert a string.",
            "album.max" => "The string must not have more than 50 characters.",

            "author.required" => "You need to insert the author.",
            "author.string" => "You must insert a string.",
            "author.max" => "The string must not have more than 50 characters.",

            "editor.required" => "You need to insert the editor.",
            "editor.string" => "You must insert a string.",
            "editor.max" => "The string must not have more than 50 characters.",

            "length.required" => "You need to insert the length.",
            "length.string" => "You must insert a string.",
            "length.max" => "The string must not have more than 10 characters.",

            "poster.required" => "You need to insert the link to the poster."
        ]);

        $data = $request->all();
        $song->update($data);
        return redirect()->route("songs.show", $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::findOrFail($id);
        $song->delete();
        return redirect()->route("songs.index");
    }
}
