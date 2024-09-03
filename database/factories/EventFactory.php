<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(3, true),
            'category_id' => Category::inRandomOrder()->first()->id,
            'event_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->address(),
            'is_featured' => $this->faker->boolean(20), // 20% chance of being featured
            'max_participants' => $this->faker->numberBetween(10, 200),
            // 'image' => 'events/' . $this->faker->image('public/storage/events', 640, 480, null, false),
        ];
    }

    public function featured()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_featured' => true,
            ];
        });
    }
}
