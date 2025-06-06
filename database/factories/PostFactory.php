<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(4),
             'body' => fake()->paragraph(1, true),
             'image' => fake()->imageUrl(640, 480, 'cats', true, 'Faker'),
        ];
    }
}
