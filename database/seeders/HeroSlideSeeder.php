<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run()
    {
        HeroSlide::factory()->count(5)->create();

        // Buat satu slide yang pasti aktif
        HeroSlide::factory()->create([
            'is_active' => true,
            'order' => 1,
        ]);
    }
}
