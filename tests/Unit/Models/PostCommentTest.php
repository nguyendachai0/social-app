<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\PostComment;
use App\Models\UserPost;
use App\Models\ProfileUser;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostCommentTest extends TestCase
{
    use RefreshDatabase;

    public function testItBelongsToUsePost()
    {
        $postComment = PostComment::factory()->create();
        $this->assertInstanceOf(UserPost::class, $postComment->userPost);
    }

    public function testItBeLongsToProfileUser()
    {
        $postComment = PostComment::factory()->create();
        $this->assertInstanceOf(ProfileUser::class, $postComment->profileUser);
    }
}
