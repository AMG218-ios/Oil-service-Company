<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/drilling-rigs', function () {
    return view('drilling-rigs');
});

Route::get('/wireline', function () {
    return view('wireline');
});

Route::get('/pressure-pumping', function () {
    return view('pressure-pumping');
});

Route::get('/contact', function () {
    return view('contact');
});
