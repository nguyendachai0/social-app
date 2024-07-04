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
            'sender_id' => 3,
            'receiver_id' => ProfileUser::factory(),
            'status' => $this->faker->randomElement(['pending','rejected', 'accepted']),
            'sent_at' => now(),
            'responded_at' => null,
        ];
    }
}
