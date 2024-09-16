<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use App\Models\Author;
use App\Models\Article;
use App\Models\Tag;
use App\Models\ArticleTag;
use App\Models\UploadMedia;
use App\Models\SiteSetting;
use App\Models\subcategories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creating a specific test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), 
        ]); 

        // Creating multiple users
        User::factory(10)->create();

        // Creating roles
        Role::factory(5)->create();

        // Seed 10 categories, and for each category, seed 3 subcategories
        Category::factory(10)->create()->each(function ($category) {
            subcategories::factory(3)->create(['category_id' => $category->id]);
        });

        // Creating authors
        Author::factory(10)->create();
   
        // Creating articles
        Article::factory(20)->create();

        // Creating tags
        Tag::factory(10)->create();

        // Creating many-to-many relationships between articles and tags
        ArticleTag::factory(30)->create();

        // Creating upload media entries
        UploadMedia::factory(10)->create();

        // Creating site settings
        SiteSetting::factory(5)->create();


    }   

}
