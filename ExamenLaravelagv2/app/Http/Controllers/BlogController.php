<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'comments'])->get();

        return view('blog.index', compact('posts'));
    }
}
