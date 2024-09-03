<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'image' => 'galleries/',
            //  $this->faker->image('public/storage/galleries', 640, 480, null, false),
            'category' => $this->faker->randomElement(['Event', 'Office', 'Team', 'Project']),
            'is_featured' => $this->faker->boolean(20),
            'order' => $this->faker->numberBetween(1, 100),
        ];
    }
}
