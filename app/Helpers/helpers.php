<?php

if (!function_exists('check_connection')) {
    function check_connection()
    {
        $connected = @fsockopen("www.google.com", 80);

        if ($connected) {
            fclose($connected);
            return true;
        } else return false;
    }
}

if (!function_exists('show_image')) {
    function show_image(int $width = 100, string $source = '')
    {
        $connection = check_connection();

        if ($connection) return "https://image.tmdb.org/t/p/w$width/$source";
        else {
            return asset('img/poster.jpg');
        }
    }
}
