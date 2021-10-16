<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->onEachSide(0)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
