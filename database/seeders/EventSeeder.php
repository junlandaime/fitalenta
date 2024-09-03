<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (Category::count() == 0) {
            $this->call(CategorySeeder::class);
        }
        // Create some regular events
        Event::factory()->count(20)->create();

        // Create some featured events
        Event::factory()->count(5)->featured()->create();

        // Create a specific upcoming event
        Event::create([
            'title' => 'FITALENTA Annual Conference',
            'description' => 'Join us for our annual conference discussing the latest trends in talent management and business consulting.',
            'event_date' => now()->addMonths(2),
            'location' => 'Jakarta Convention Center',
            'category_id' => 1,
            'is_featured' => true,
            'max_participants' => 500,
        ]);
    }
}
