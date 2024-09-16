<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteSetting>
 */
class SiteSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'setting_name' => $this->faker->word(), // Random setting name
            'setting_value' => $this->faker->paragraph(), // Random setting value
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
