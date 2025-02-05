<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('navbar');
});

Route::get('login', function () {
    return view('equipo');
})->name('login');

Route::get('/register', function () {
    return view('navbar');
});


