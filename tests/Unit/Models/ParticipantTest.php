<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Participant;
use App\Models\Conversation;
use App\Models\ProfileUser;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipantTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_belongs_to_a_conversation()
    {
        $participant = Participant::factory()->create();
        $this->assertInstanceOf(Conversation::class, $participant->conversation);
    }

    public function test_it_belongs_to_a_user()
    {
        $participant = Participant::factory()->create();
        $this->assertInstanceOf(ProfileUser::class, $participant->user);
    }
}
