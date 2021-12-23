<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MoviesController extends Controller
{
    
    //index
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->get('http://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.token'))
        ->get('http://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });


        return view('index', ['popularMovies' => $popularMovies, 'genres' => $genres] );
    }

    public function show()
    {
        return view('show');
    }
}
