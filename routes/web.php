<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Muhammad Arindra K S']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'slug' => 'artikel-pertama',
            'title' => 'Artikel Pertama',
            'author' => 'Muhammad Arindra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor incidunt voluptates aspernatur! Dolor consectetur repellendus ad numquam recusandae consequatur quia eveniet iusto aliquam est ducimus commodi, assumenda provident iure?'
        ],
        [
            'slug' => 'artikel-kedua',
            'title' => 'Artikel Kedua',
            'author' => 'Khoiru Syawal',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus vitae, facilis, ad id architecto soluta nostrum eligendi fugiat corrupti iure a iste. Qui blanditiis eius dolorem iusto, reprehenderit voluptates dolores.'
        ],
    ]]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'slug' => 'artikel-pertama',
            'title' => 'Artikel Pertama',
            'author' => 'Muhammad Arindra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor incidunt voluptates aspernatur! Dolor consectetur repellendus ad numquam recusandae consequatur quia eveniet iusto aliquam est ducimus commodi, assumenda provident iure?'
        ],
        [
            'slug' => 'artikel-kedua',
            'title' => 'Artikel Kedua',
            'author' => 'Khoiru Syawal',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus vitae, facilis, ad id architecto soluta nostrum eligendi fugiat corrupti iure a iste. Qui blanditiis eius dolorem iusto, reprehenderit voluptates dolores.'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
