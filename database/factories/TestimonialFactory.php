<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition()
    {
        return [
            'client_name' => $this->faker->name,
            'company' => $this->faker->company,
            'content' => $this->faker->paragraph(3),
            'rating' => $this->faker->numberBetween(3, 5),
            'image' => 'testimonials/',
            // . $this->faker->image('public/storage/testimonials', 100, 100, null, false),
            'is_featured' => $this->faker->boolean(20),
        ];
    }
}
