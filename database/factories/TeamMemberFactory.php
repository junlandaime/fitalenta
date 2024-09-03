<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'bio' => $this->faker->paragraphs(2, true),
            'image' => 'team-members/',
            // . $this->faker->image('public/storage/team-members', 300, 300, null, false),
            'order' => $this->faker->unique()->numberBetween(1, 20),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
