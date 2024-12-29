<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create(
            [
                'name' => 'Rambo Rockstar',
                ]
        );
        
        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);
        // $user= User::factory()->create();
                
        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>lorem ipsum dolor sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perferendis alias ipsam ea nobis ratione eum temporibus in eaque repudiandae voluptas laboriosam quam blanditiis sunt sapiente veritatis, cumque ducimus ipsa.</p>',
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>lorem ipsum dolor sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perferendis alias ipsam ea nobis ratione eum temporibus in eaque repudiandae voluptas laboriosam quam blanditiis sunt sapiente veritatis, cumque ducimus ipsa.</p>',
        // ]);
    }
}
