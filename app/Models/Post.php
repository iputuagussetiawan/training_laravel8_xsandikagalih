<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{

    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
