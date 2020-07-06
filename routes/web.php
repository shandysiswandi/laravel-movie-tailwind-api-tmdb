<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$data = [
    [],
    [],
    [],
    [],
    [],
    [],
    [],
    [],
    [],
    [],
];

Route::get('/', 'MovieController@index')->name('index');
Route::get('/{id}', 'MovieController@show')->name('show');

Route::view('/movies', 'index', ['data' => $data]);

Route::view('/tvs', 'index', ['data' => $data]);

Route::view('/actors', 'index', ['data' => $data]);
