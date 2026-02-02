<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        // A cada post le metemos entre 0 y 5 comentarios
        Post::all()->each(function ($post) {
            Comment::factory()
                ->count(rand(0, 5))
                ->create([
                    'post_id' => $post->id
                ]);
        });
    }
}
