<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\CommentLike;
use App\Models\PostComment;
use App\Models\ProfileUser;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentLikeTest extends TestCase
{
    use RefreshDatabase;
    private $commentLike;
    protected function setUp(): void
    {
        parent::setUp();
        $this->commentLike = CommentLike::factory()->create();
    }
    public function testItBelongsToProfileUser()
    {
        $this->assertInstanceOf(ProfileUser::class, $this->commentLike->profile);
    }

    public function testItBelongsToPostComment()
    {
        $postComment = PostComment::find($this->commentLike->comment_id);

        $this->assertInstanceOf(PostComment::class, $postComment);
        $this->assertEquals($postComment->id, $this->commentLike->comment->id);
    }
}
