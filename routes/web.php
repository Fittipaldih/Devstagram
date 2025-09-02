<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/create-account', [RegisterController::class, 'index'])->name('register');
Route::post('/create-account', [RegisterController::class, 'store']);
