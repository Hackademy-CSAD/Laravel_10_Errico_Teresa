<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Requests\SongEditRequest;
use App\Http\Requests\SongCreateRequest;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact("songs"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('songs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SongCreateRequest $request)
    {
        Song::create([
            "name" => $request->name,
            "year" => $request->year,
            "img" => $request->file('img')->store('public/img'),
            "category_id"=>$request->category_id,
        ]);
        return redirect(route('songs.create'))->with('success', 'Hai inserito correttamente il nome della tua canzone preferita!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $categories = Category::all();

        return view('songs.edit', compact('song','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SongEditRequest $request, Song $song)
    {
        $song->update([
            "name"=>$request->name,
            "year"=>$request->year,
            "img"=>$request->img ? $request->file('img')->store('public/img') :$song->img, 
            "category_id"=>$request->category_id,
        ]);
        return redirect(route('songs.edit', compact('song')))->with('success', 'Hai aggiornato correttamente i dati relativi alla tua canzone!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect(route('songs.create'))->with('success', 'Canzone eliminata con successo!');
    }

}


