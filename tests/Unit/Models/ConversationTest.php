<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Conversation;
use App\Models\Participant;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConversationTest extends TestCase
{
    use RefreshDatabase;

    public function testItHasManyParticipants()
    {
        $conversation = Conversation::factory()->create();

        // Assuming you want to create 3 participants for this conversation
        Participant::factory()->count(3)->create([
            'conversation_id' => $conversation->id,
        ]);

        $participants = $conversation->participants;

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $participants);
        $this->assertCount(3, $participants);
        $this->assertInstanceOf(Participant::class, $participants->random());
    }
}
