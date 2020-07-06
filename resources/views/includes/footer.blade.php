<footer class="mt-16 border-t border-gray-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center p-6">
            <div class="flex flex-wrap mb-4 w-full">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 ">
                    <h3 class="text-3xl py-4">About Us</h3>
                    <p class="text-justify">
                        Movies move us like nothing else can, whether they’re scary, funny, dramatic, romantic or
                        anywhere
                        in-between. So many titles, so much to experience. Tailwind is a gives you responsive components
                        with huge CSS class collections. Previously, we made a login form and team section using
                        Tailwind
                        CSS.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 pl-0 sm:pl-8">
                    <h3 class="text-3xl py-4">Links</h3>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV Shows</a></li>
                        <li><a href="#">Actors</a></li>
                    </ul>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <h3 class="text-3xl py-4">Subscribe</h3>
                    <form action="#" onsubmit="e.prevendDefault()">
                        <div class="mb-4">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-name" type="text" placeholder="Email">
                        </div>
                        <button class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded"
                            type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-5 border-gray-800 border-t">
        <p class="bottom">© Copyright {{ date('Y') }} - SHANDY SISWANDI</p>
    </div>
</footer>
