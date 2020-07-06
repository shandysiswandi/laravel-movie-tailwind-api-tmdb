<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $genresArray = Http::withToken(config('services.tmdb.token4'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $topMovies = Http::withToken(config('services.tmdb.token4'))
            ->get('https://api.themoviedb.org/3/movie/top_rated')
            ->json()['results'];

        $popularMovies = Http::withToken(config('services.tmdb.token4'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $nowPlayingMovie = Http::withToken(config('services.tmdb.token4'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        $upcomingMovie = Http::withToken(config('services.tmdb.token4'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        return view('index')
            ->with('topMovies', $topMovies)
            ->with('popularMovies', $popularMovies)
            ->with('nowPlayingMovies', $nowPlayingMovie)
            ->with('upcomingMovies', $upcomingMovie)
            ->with('genres', $genres);
    }

    public function show(Request $request, $id)
    {
        $movie = Http::withToken(config('services.tmdb.token4'))
            ->get("https://api.themoviedb.org/3/movie/$id?append_to_response=credits,videos,images");

        if ($movie->failed()) abort(404);

        $movieVideo = ($movie->json()['videos']['results'] > 0)
            ? "https://youtube.com/watch?v=" . $movie->json()['videos']['results'][0]['key']
            : "#";

        $movieImages = $movie->json()['images']['posters'];
        $movieCreditsCast = $movie->json()['credits']['cast'];

        return view('detail_movie')
            ->with('movieVideo', $movieVideo)
            ->with('movieImages', $movieImages)
            ->with('movieCreditsCast', $movieCreditsCast)
            ->with('movie', $movie->json());
    }
}
