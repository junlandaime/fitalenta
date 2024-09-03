<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(2, true),
            'price' => $this->faker->randomElement([null, $this->faker->numberBetween(100000, 10000000)]),
            'duration' => $this->faker->randomElement(['1 hour', '2 hours', '1 day', '1 week', 'Varies']),
            'is_featured' => $this->faker->boolean(30), // 30% chance of being featured
            'icon' => $this->faker->randomElement(['briefcase', 'users', 'chart-line', 'cogs', 'graduation-cap']),
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

    public function withoutPrice()
    {
        return $this->state(function (array $attributes) {
            return [
                'price' => null,
            ];
        });
    }
}
