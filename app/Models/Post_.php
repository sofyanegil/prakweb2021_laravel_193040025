<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    // use HasFactory;
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sofyan Egi Lesmana",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, ducimus corrupti. Itaque, ab cupiditate minus ullam vero eligendi saepe quisquam illo eum! At voluptatem asperiores quod in nemo quisquam nihil!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Andrea Bimo",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas.."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
