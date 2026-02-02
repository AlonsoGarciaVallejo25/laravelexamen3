<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 5 usuarios
        User::factory()
            ->count(5)
            ->create()
            ->each(function ($user) {

                // Cada usuario tiene 3 posts
                Post::factory()
                    ->count(3)
                    ->create([
                        'user_id' => $user->id
                    ])
                    ->each(function ($post) {

                        // Cada post tiene entre 1 y 5 comentarios
                        Comment::factory()
                            ->count(rand(1, 5))
                            ->create([
                                'post_id' => $post->id
                            ]);
                    });
            });
    }
}
