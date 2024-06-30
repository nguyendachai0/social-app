<?php

namespace Database\Factories;

use App\Models\FriendRequest;
use App\Models\ProfileUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class FriendRequestFactory extends Factory
{
    protected $model = FriendRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sender_id' => ProfileUser::factory(),
            'receiver_id' => ProfileUser::factory(),
            'status' => 'pending',
            'sent_at' => now(),
            'responded_at' => null,
        ];
    }
}
