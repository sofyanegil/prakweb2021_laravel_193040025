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
        "name" => "Sofyan Egi Lesmana",
        "email" => "contact.sofyanegi@gmail.com",
        "image" => "pp.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sofyan Egi Lesmana",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas,,"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Andrea Bimo",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas.."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sofyan Egi Lesmana",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas, consectetur vitae tenetur corporis deleniti assumenda rerum numquam quisquam nesciunt provident consequuntur, voluptate autem animi, sapiente eum odio dolore veniam exercitationem magni illo. Ex itaque quaerat blanditiis non eius possimus expedita! Cum officia quia cumque, obcaecati vel quo voluptas odio ipsum error nesciunt illo necessitatibus deleniti voluptatibus maiores assumenda deserunt beatae tenetur ab reiciendis quas ex qui! Tempora sequi officiis doloremque odio incidunt iste?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Andrea Bimo",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus omnis aspernatur adipisci pariatur magni? Reiciendis quas, consectetur vitae tenetur corporis deleniti assumenda rerum numquam quisquam nesciunt provident consequuntur, voluptate autem animi, sapiente eum odio dolore veniam exercitationem magni illo. Ex itaque quaerat blanditiis non eius possimus expedita! Cum officia quia cumque, obcaecati vel quo voluptas odio ipsum error nesciunt illo necessitatibus deleniti voluptatibus maiores assumenda deserunt beatae tenetur ab reiciendis quas ex qui! Tempora sequi officiis doloremque odio incidunt iste? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ad aspernatur nam quod illum, ducimus facilis eveniet enim omnis beatae asperiores dolor, libero fugit quibusdam deleniti. Amet, aliquam nemo. Necessitatibus earum voluptates minus exercitationem sit cum nulla! Placeat nulla fugit assumenda quidem repudiandae? Modi tenetur itaque consectetur aut voluptatum veritatis harum quia deserunt cupiditate, architecto quaerat iste recusandae veniam! Doloremque aliquam corrupti, enim eos quasi saepe rerum non? Repellendus distinctio modi, dicta beatae nihil illum itaque ex eius deleniti neque, voluptates, voluptatem perspiciatis. Architecto ad distinctio perferendis labore quidem! Atque eligendi voluptatem mollitia autem placeat natus reiciendis, ratione quisquam veniam?"
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
