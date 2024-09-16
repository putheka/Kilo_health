<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Random author name
            'bio' => $this->faker->paragraph(), // Random bio
            'profile_image' => $this->faker->imageUrl(), // Fake profile image URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
