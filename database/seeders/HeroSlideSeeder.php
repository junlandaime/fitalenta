<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run()
    {
        // HeroSlide::factory()->count(5)->create();

        // // Buat satu slide yang pasti aktif
        // HeroSlide::factory()->create([
        //     'is_active' => true,
        //     'order' => 1,
        // ]);

        $slides = [
            ['title' => 'Human Capital Management Service', 'subtitle' => 'The Best Business and Career Consulting Firm you can trust', 'cta_text' => 'Free Consultation', 'cta_link' => 'https://web.whatsapp.com/send?phone=6285281791931&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk', 'image' => 'hero-slides/hero (1).jpg', 'order' => 1, 'is_active' => true],
            ['title' => 'Excellent Consulting Services for You', 'subtitle' => 'AGENCY AND CONSULTANCY', 'cta_text' => 'FREE CONSULTATION', 'cta_link' => 'https://api.whatsapp.com/send/?phone=6285281791931&text&type=phone_number&app_absent=0%20', 'image' => 'hero-slides/hero (2).jpg', 'order' => 2, 'is_active' => true],
            ['title' => 'Indonesian Scratch Competition', 'subtitle' => '"Harmoni Bumi: Kebudayaan Indonesia!"', 'cta_text' => 'Learn More', 'cta_link' => 'https://isc.fitalenta.co.id/', 'image' => 'hero-slides/hero (1).png', 'order' => 3, 'is_active' => true],


        ];

        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }
    }
}
