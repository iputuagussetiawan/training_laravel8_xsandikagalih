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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'I Putu Agus Setiawan',
            'email' => 'agussetiawaniputu@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Dewi',
            'email' => 'dewi@gmail.com',
            'password' => bcrypt('123456')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'test',
            'body' => 'Lorem',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'body' => 'Lorem',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'body' => 'Lorem',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
