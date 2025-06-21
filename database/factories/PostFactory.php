<?php

declare(strict_types=1);

namespace Barbosa\EasyBlog\Database\Factories;

use Barbosa\EasyBlog\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
