<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users with 'editor' role
        $editors = User::where('role', 'editor')->get();

        // Create some published articles
        Article::factory()->count(30)
            ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
            ->create();

        // Create some unpublished articles
        Article::factory()->count(10)
            ->unpublished()
            ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
            ->create();

        // Create some featured articles
        Article::factory()->count(5)
            ->featured()
            ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
            ->create();
    }
}
