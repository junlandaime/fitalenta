<?php

namespace Database\Factories;

use App\Models\HeroSlide;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeroSlideFactory extends Factory
{
    protected $model = HeroSlide::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(6),
            'image' => 'hero-slides/',
            //  $this->faker->image('public/storage/hero-slides', 1920, 1080, null, false),
            'cta_text' => $this->faker->words(2, true),
            'cta_link' => $this->faker->url,
            'order' => $this->faker->unique()->numberBetween(1, 10),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
