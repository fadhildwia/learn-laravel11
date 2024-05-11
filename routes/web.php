<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Fadhil Dwi A']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fadhil Dwi A',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa omnis quam totam
            provident accusamus
            voluptatum aspernatur odio ea repellendus amet numquam iure saepe similique vel accusantium quod non, magni
            animi!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fadhil Dwi A',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa omnis quam totam
            provident accusamus
            voluptatum aspernatur odio ea repellendus amet numquam iure saepe similique vel accusantium quod non, magni
            animi!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fadhil Dwi A',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa omnis quam totam
            provident accusamus
            voluptatum aspernatur odio ea repellendus amet numquam iure saepe similique vel accusantium quod non, magni
            animi!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fadhil Dwi A',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa omnis quam totam
            provident accusamus
            voluptatum aspernatur odio ea repellendus amet numquam iure saepe similique vel accusantium quod non, magni
            animi!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
