<?php

namespace Database\Factories;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subcategories>
 */
class SubcategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => Str::slug($this->faker->unique()->word),
            'category_id' => Category::factory(), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
