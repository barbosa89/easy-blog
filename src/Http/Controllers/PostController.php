<?php

declare(strict_types=1);

namespace Barbosa\EasyBlog\Http\Controllers;

use Barbosa\EasyBlog\Models\Post;
use Illuminate\Contracts\View\View;

class PostController
{
    public function index(): View
    {
        $posts = Post::all();

        return view('easyblog::posts.index', [
            'posts' => $posts,
        ]);
    }
}
