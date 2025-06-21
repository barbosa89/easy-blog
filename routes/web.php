<?php

declare(strict_types=1);

use Barbosa\EasyBlog\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index'])
    ->name('posts.index')
    ->middleware(['web', 'auth']);
