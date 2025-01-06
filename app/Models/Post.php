<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
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
    }

    public static function find($slug) : array {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post){
            abort(404);
        }

        return $post;
    }
};
