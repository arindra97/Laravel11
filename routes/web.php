<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Muhammad Arindra K S']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'publisher_1' => 'Riko', 'publisher_2' => 'Gamma']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
