<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            EventSeeder::class,
            ArticleSeeder::class,
            ServiceSeeder::class,
            HeroSlideSeeder::class,
            GallerySeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
            ClientSeeder::class,
        ]);
    }
}
