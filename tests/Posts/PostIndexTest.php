<?php

declare(strict_types=1);

use Barbosa\EasyBlog\Models\Post;
use function Pest\Laravel\actingAs;

use Barbosa\EasyBlog\Tests\Models\User;
use Illuminate\Database\Eloquent\Collection;

it('can access the posts index', function (): void {
    $user = User::factory()->create();

    $post = Post::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = actingAs($user)
        ->get(route('posts.index'));

    $response->assertOk()
        ->assertViewIs('easyblog::posts.index')
        ->assertViewHas('posts', function (Collection $posts) use ($post): bool {
            return $posts->contains($post);
        })
        ->assertSeeText($post->title);
});