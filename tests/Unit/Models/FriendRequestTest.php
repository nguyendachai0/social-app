<?php

namespace Tests\Unit\Models;

use App\Models\FriendRequest;
use App\Models\ProfileUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FriendRequestTest extends TestCase
{
    use RefreshDatabase;

    private $friendRequest;

    protected function setUp(): void
    {
        parent::setUp();
        $this->friendRequest = FriendRequest::factory()->create();
    }

    public function testItCanCreateFriendRequest()
    {
        $this->assertDatabaseHas('friend_requests', ['id' => $this->friendRequest->id]);
    }

    public function testItCanUpdateFriendRequestStatus()
    {
        $newStatus = 'accepted';
        $this->friendRequest->update(['status' => $newStatus]);
        $this->assertEquals($newStatus, $this->friendRequest->fresh()->status);
    }

    public function testItCanDeleteFriendRequest()
    {
        $this->friendRequest->delete();
        $this->assertModelMissing($this->friendRequest);
    }
}
