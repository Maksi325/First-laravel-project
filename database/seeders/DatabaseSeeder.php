<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::factory(5)->create();


        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $Work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $Hobby =  Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'Hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My first Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p> Lorem ipsum dollar sit amet. </p>',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nihil laudantium perferendis voluptates minus quos consequuntur consectetur architecto, et voluptate veniam? Atque numquam non enim quidem sunt veritatis deserunt hic. </p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $Work->id,
        //     'title' => 'My second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p> Lorem ipsum dollar sit amet. </p>',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nihil laudantium perferendis voluptates minus quos consequuntur consectetur architecto, et voluptate veniam? Atque numquam non enim quidem sunt veritatis deserunt hic. </p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $Hobby->id,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => '<p> Lorem ipsum dollar sit amet. </p>',
        //     'body' => '<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nihil laudantium perferendis voluptates minus quos consequuntur consectetur architecto, et voluptate veniam? Atque numquam non enim quidem sunt veritatis deserunt hic. </p>'
        // ]);
    }
}
