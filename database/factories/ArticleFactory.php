<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => $this->faker->sentence(), // Random article title
            'body' => $this->faker->paragraphs(3, true), // Random body text
            'category_id' => Category::factory(), // Creates a related category
            'author_id' => Author::factory(), // Creates a related author
            'featured_image' => $this->faker->imageUrl(), // Fake image URL
            'read_time' => $this->faker->dateTime(), // Random read time
            'published_at' => $this->faker->dateTime(), // Random publish time
            'views' => $this->faker->numberBetween(0, 1000), // Random views
            'likes' => $this->faker->numberBetween(0, 500), // Random likes
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
