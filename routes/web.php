<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tienda', function () {
    return view('store');
});

Route::get('/nosotros', function () {
    return view('us');
});
