<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Likes;
use App\Models\Post;
use App\Models\Tag;
use App\Models\tagLikes;
use App\Models\WhoLikes;
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

        $whoLikes = WhoLikes::factory(20)->create();
        $tagsLikes = tagLikes::factory(10)->create();
        $likes = Likes::factory(50)->create();

        foreach ($likes as $like) {
            $tagLikesId = $tagsLikes->random(2)->pluck('id');
            $like->tagLikes()->attach($tagLikesId);
        }

        $tags = Tag::factory(10)->create();
        $category = Category::factory(10)->create();
        $posts = Post::factory(20)->create();

        foreach($posts as $post) {
            $tagsId = $tags->random(4)->pluck('id');
            $post->tags()->attach($tagsId);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
