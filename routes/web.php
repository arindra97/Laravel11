<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhammad Arindra K S']);
});

Route::get('/blog', function () {
    return view('blog', ['publisher_1' => 'Riko', 'publisher_2' => 'Gamma']);
});

Route::get('/contact', function () {
    return view('contact');
});
