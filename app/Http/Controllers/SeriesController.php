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

        $genersArr = Http::withTOken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/list')
        ->json()['genres'];

        // dump($genersArr);
        return view('index',[
            'popularMovie' => $popularMovie
        ]);
    }
}