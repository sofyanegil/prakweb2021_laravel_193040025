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

        User::create([
            'name' => "Sofyan Egi",
            'username' => 'sofyanegi',
            'is_admin' => true,
            'email' => "sofyanegil@gmail.com",
            'password' => bcrypt('adminadmin')
        ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'UI / UX',
            'slug' => 'ui-ux'
        ]);

        Post::factory(25)->create();
    }
}
