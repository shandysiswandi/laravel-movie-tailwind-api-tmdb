@extends('layouts.main')

@section('content')
<section id="movie-info" class="movie-info border-b border-gray-800 py-16">
    <div class="flex flex-col md:flex-row">
        <img class="hover:opacity-75 transition ease-in-out duration-150"
            src="{{ show_image(300,$movie['poster_path']) }}" alt="movie cover">

        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold inline-block border-b">{{ $movie['title'] }}</h2>
            <div class="lg:flex items-center text-gray-400 text-sm mt-1">
                <div class="lg:mr-5">
                    <span class="mr-1"><i class="fa fa-star text-yellow-500"></i></span>
                    <span>{{ $movie['vote_average']*10 }}%</span>
                </div>
                <div class="lg:mr-5">
                    <span class="mr-1"><i class="far fa-calendar-alt text-yellow-500"></i></span>
                    <span>{{ date('M d, Y', strtotime($movie['release_date'])) }}</span>
                </div>
                <div>
                    <span class="mr-1"><i class="fas fa-film text-yellow-500"></i></span>
                    @foreach ($movie['genres'] as $genre)
                    <span class="mr-1">
                        {{ $genre['name'] }}
                        @if (!$loop->last),@endif
                    </span>
                    @endforeach
                </div>
            </div>

            <p class="mt-8 text-gray-300 text-justify">
                {{ $movie['overview'] }}
            </p>

            <div class="mt-12 justify-evenly">
                <h4 class="text-white font-semibold w-auto inline-block border-b border-gray-800 pb-1">
                    Feature Cast
                </h4>
                <div class="mt-4 flex justify-between">
                    @foreach ($movieCreditsCast as $cast)
                    @if ($loop->index < 3) <div class="mr-2">
                        <div>{{ $cast['name'] }}</div>
                        <div class="text-sm text-gray-400 pt-2">{{ $cast['character'] }}</div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="mt-12">
            <a href="{{ $movieVideo }}" target="_blank"
                class="inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-300 transition ease-in-out duration-150">
                <i class="far fa-lg fa-play-circle mr-2"></i>
                <span class="text-lg">Play trailer</span>
            </a>
        </div>
    </div>
    </div>
</section>

<section id="movie-cast" class="movie-cast border-b border-gray-800 py-8">
    <h2 class="text-3xl font-semibold">Cast</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 ">
        @foreach ($movieCreditsCast as $cast)
        @if ($loop->index < 5) <div class="mt-8">
            <a href="#">
                <img class="hover:opacity-75 transition ease-in-out duration-150"
                    src="{{ show_image(300,$cast['profile_path']) }}" alt="movie cover">
            </a>
            <div class="mt-2">
                <h6 class="text-lg mt-2">{{ $cast['name'] }}</h6>
                <span class="text-gray-400 text-sm mt-1">{{ $cast['character'] }}</span>
            </div>
    </div>
    @endif
    @endforeach
    </div>
</section>

<section id="movie-images" class="movie-images pt-8">
    <h2 class="text-3xl font-semibold mb-8">Images</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-2">
        @foreach ($movieImages as $image)
        @if ($loop->index < 10) <div class="mt-2">
            <img class="hover:opacity-75 transition ease-in-out duration-150"
                src="{{ show_image(300,$image['file_path']) }}" alt="movie cover">
    </div>
    @endif
    @endforeach
    </div>
</section>
@endsection
