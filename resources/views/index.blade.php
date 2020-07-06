@extends('layouts.main')

@section('content')
{{-- top --}}
<section id="popular-movies" class="mt-16">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold border-b border-gray-700 pb-2">
        Top Rated Movies
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($topMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
        @endforeach
    </div>

    @include('includes.paginate')
</section>

{{-- popular movies --}}
<section id="popular-movies" class="mt-16">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold border-b border-gray-700 pb-2">
        Popular Movies
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($popularMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
        @endforeach
    </div>

    @include('includes.paginate')
</section>

{{-- now playing --}}
<section id="now-playing" class="mt-16">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold border-b border-gray-700 pb-2">
        Now Playing Movies
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($nowPlayingMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
        @endforeach
    </div>

    @include('includes.paginate')
</section>

{{-- upcomming --}}
<section id="now-playing" class="mt-16">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold border-b border-gray-700 pb-2">
        Upcomming Movies
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($upcomingMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
        @endforeach
    </div>

    @include('includes.paginate')
</section>
@endsection
