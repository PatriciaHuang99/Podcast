<?php

namespace Database\Factories;

use App\Models\Creator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $listeningCount = fake()->numberBetween(0, 5000);
        $listeningCount = 0;

        return [
            'creator_id' => Creator::factory(),
            'title' => fake()->catchPhrase(),
            'description' => fake()->randomElement(['Technology', 'Art', 'News']),
            'audio_file_path' => fake()->url(),
            'episode' => (string) fake()->numberBetween(1, 100),
            'listening_count_more_than_1000' => false,
        ];
    }
}
