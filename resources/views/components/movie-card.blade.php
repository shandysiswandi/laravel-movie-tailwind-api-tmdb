<div class="mt-8">
    <a href="{{ route('show',['id'=>$movie['id']]) }}">
        <img class="hover:opacity-75 transition ease-in-out duration-150"
            src="{{ show_image(500, $movie['poster_path']) }}" alt="movie cover">
    </a>
    <div class="mt-2">
        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <i class="fa fa-star text-yellow-500"></i>
            <span class="ml-1">{{ $movie['vote_average']*10 }}%</span>
            <span class="mx-2">|</span>
            <span>{{ date('M d, Y', strtotime($movie['release_date'])) }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
            <span class="mr-1">
                {{ $genres->get($genre) }}
                @if (!$loop->last),@endif
            </span>
            @endforeach
        </div>
    </div>
</div>
