<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Barbosa\EasyBlog\Http\Controllers\PostController;

Route::get('posts', [PostController::class, 'index'])
    ->name('posts.index')
    ->middleware(['web', 'auth']);