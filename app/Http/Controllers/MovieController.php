<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
        $movies = Movie::orderBy('id')->get();

        return view('home', compact('movies'));
    }

    public function index(Request $request)
    {
        $genre = $request->query('genre');
        $genres = Movie::select('genre')->distinct()->orderBy('genre')->pluck('genre');

        $movies = Movie::when($genre, fn ($q) => $q->where('genre', $genre))
            ->orderBy('id')
            ->get();

        return view('movies.index', compact('movies', 'genres', 'genre'));
    }

    public function show(Movie $movie)
    {
        $others = Movie::where('id', '!=', $movie->id)->inRandomOrder()->take(4)->get();

        return view('movies.show', compact('movie', 'others'));
    }

    public function about()
    {
        return view('about');
    }
}