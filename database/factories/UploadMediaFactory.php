<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UploadMedia>
 */
class UploadMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_path' => $this->faker->filePath(), // Random file path
            'file_name' => $this->faker->word() . '.jpg', // Random file name
            'mime_type' => 'image/jpeg', // Set mime type
            'article_id' => Article::factory(), // Related article
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
