<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel Movie Tailwind</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>

<body class="font-sans bg-gray-900 text-white">
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- content --}}
    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    {{-- footer --}}
    @include('includes.footer')
</body>

</html>
