<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "I Putu Agus Setiawan",
        "email" => "iputuagussetiawan@gmail.com",
        "image" => "people-2.jpg"
    ]);
});



Route::get('/blogs', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vitae repudiandae tempora illum, minima, explicabo, aspernatur libero mollitia blanditiis eveniet doloribus voluptatibus. Eius cum ullam magni laboriosam sit suscipit repellendus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vitae repudiandae tempora illum, minima, explicabo, aspernatur libero mollitia blanditiis eveniet doloribus voluptatibus. Eius cum ullam magni laboriosam sit suscipit repellendus!"
        ],
    ];

    return view('posts', [
        "title" => "News",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vitae repudiandae tempora illum, minima, explicabo, aspernatur libero mollitia blanditiis eveniet doloribus voluptatibus. Eius cum ullam magni laboriosam sit suscipit repellendus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vitae repudiandae tempora illum, minima, explicabo, aspernatur libero mollitia blanditiis eveniet doloribus voluptatibus. Eius cum ullam magni laboriosam sit suscipit repellendus!"
        ],
    ];

    $new_posts = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_posts = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" =>  $new_posts,
    ]);
});
