<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'conversation_id' => $this->faker->numberBetween(1, 150),
            'sender_id' => $this->faker->numberBetween(1,150),
            'message_content'=>  $this->faker->sentence,
            'media_url' => $this->faker->imageUrl(),
            'read_at' => now()
        ];
    }
}
