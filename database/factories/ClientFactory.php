<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => 'clients/',
            // . $this->faker->image('public/storage/clients', 200, 100, null, false),
            'website' => $this->faker->url,
            'is_featured' => $this->faker->boolean(30),
        ];
    }
}
