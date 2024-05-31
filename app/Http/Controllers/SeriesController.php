<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{
    public function index()
    {
        $popularMovie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $genersArr = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/list')
        ->json()['genres'];

        $genres = collect($genersArr)->mapWithKeys(function($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $popularSeries = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular')
        ->json()['results'];
        
        // dump($genres);
        return view('index',[
            'popularMovie' => $popularMovie,
            'popularSeries' => $popularSeries
        ]);
    }                                                                                                                   
}