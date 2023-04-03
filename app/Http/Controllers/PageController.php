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

        // "title" => "required|string|min:1|max:50",
        // "album" => "required|string|min:1|max:50",
        // "author" => "required|string|min:1|max:50",
        // "editor" => "required|string|min:1|max:50",
        // "length" => "required|string|min:1|max:10",
        // "poster" => "required"

        $request->validate([
            "title" => "required",
            "album" => "required",
            "author" => "required",
            "editor" => "required",
            "length" => "required",
            "poster" => "required"
        ], [
            "title.required" => "You need to insert the title.",
            "album.required" => "You need to insert the album's title.",
            "author.required" => "You need to insert the author.",
            "editor.required" => "You need to insert the editor.",
            "length.required" => "You need to insert the length.",
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
