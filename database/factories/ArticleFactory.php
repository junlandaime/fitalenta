<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(5, true),
            'excerpt' => $this->faker->sentence(),
            'category_id' => 2,
            'author_id' => User::factory(),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_featured' => $this->faker->boolean(10), // 10% chance of being featured
            // 'image' => 'articles/' . $this->faker->image('public/storage/articles', 640, 480, null, false),
        ];
    }

    public function unpublished()
    {
        return $this->state(function (array $attributes) {
            return [
                'published_at' => null,
            ];
        });
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
