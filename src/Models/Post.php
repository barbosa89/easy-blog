<?php

declare(strict_types=1);

namespace Barbosa\EasyBlog\Models;

use Illuminate\Database\Eloquent\Model;
use Barbosa\EasyBlog\Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }
}
