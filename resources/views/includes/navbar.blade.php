<nav class="border-b border-gray-800">
    <div class="container mx-auto flex items-center flex-wrap p-5">
        {{-- logo --}}
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a class="" href="{{ route('index') }}">
                <img class="inline w-10 h-10" src="{{ asset('img/lo.png') }}" alt="logo">

                <span class="inline text-xl font-bold hover:text-gray-600">Movie Time</span>
            </a>
        </div>

        {{-- content nav --}}
        <div class="w-full block flex-grow md:flex md:items-center md:w-auto">
            <div class="text-lg md:flex-grow">
                <a href="{{ route('index') }}" class="block mt-4 md:inline-block md:mt-0 hover:text-gray-600 mr-4">
                    Movies
                </a>
                <a href="{{ url('/tvs') }}" class="block mt-4 md:inline-block md:mt-0 hover:text-gray-600 mr-4">
                    TV Shows
                </a>
                <a href="{{ url('/actors') }}" class="block mt-4 md:inline-block md:mt-0 hover:text-gray-600">
                    Actors
                </a>
            </div>

            <div class="flex flex-col md:flex-row items-stretch py-3">
                <div class="relative">
                    <input type="text" name="search"
                        class="min-w-64 bg-gray-800 rounded-full pl-8 py-2 focus:outline-none focus:shadow-outline"
                        placeholder="Search..." autocomplete="off">

                    <div class="absolute top-0">
                        <i class="fa fa-search mt-3 ml-3"></i>
                    </div>
                </div>

                <div class="md:ml-4 mt-2 md:mt-0">
                    <a href="#">
                        <img src="{{ asset('img/avatar.png') }}" alt="avatar" class="rounded-full w-10 h-10">
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
