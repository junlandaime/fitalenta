<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create main services
        $mainServices = [
            [
                'name' => 'Business Incubation and Acceleration',
                'description' => 'We provide comprehensive support to startups and growing businesses, helping them navigate challenges and accelerate their growth.',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'rocket',
            ],
            [
                'name' => 'Sending Workers Abroad',
                'description' => 'We connect talented Indonesian workers with international job opportunities, ensuring a smooth transition and legal compliance.',
                'price' => null,
                'duration' => 'Ongoing',
                'is_featured' => true,
                'icon' => 'globe',
            ],
            [
                'name' => 'Training for Financial Industries',
                'description' => 'Specialized training programs designed to enhance skills and knowledge in various aspects of the financial industry.',
                'price' => 5000000,
                'duration' => '5 days',
                'is_featured' => true,
                'icon' => 'chart-line',
            ],
            [
                'name' => 'Talent Sourcing & Outsourcing',
                'description' => 'We help companies find the right talent for their needs, whether for permanent positions or outsourced projects.',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'users',
            ],
        ];

        foreach ($mainServices as $service) {
            Service::create($service);
        }

        // Create some additional services
        // Service::factory()->count(1)->create();
    }
}
