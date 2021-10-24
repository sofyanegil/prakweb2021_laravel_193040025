<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedAdmin();
        $this->seedCategory();
        $this->seedUser(9);
        $this->seedPost(50);
    }

    public function seedAdmin()
    {
        User::create([
            'name' => "Sofyan Egi Lesmana",
            'username' => 'sofyanegi',
            'is_admin' => true,
            'email' => "sofyanegil@gmail.com",
            'password' => bcrypt('adminadmin')
        ]);
    }

    public function seedCategory()
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    }

    public function seedUser($qty)
    {
        User::factory($qty)->create();
    }

    public function seedPost($qty)
    {
        Post::factory($qty)->create();
    }
}
