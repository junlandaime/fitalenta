<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // if (Category::count() == 0) {
        //     $this->call(CategorySeeder::class);
        // }
        // Create some regular events
        // Event::factory()->count(20)->create();

        // Create some featured events
        // Event::factory()->count(5)->featured()->create();

        // Create a specific upcoming event
        // Event::create([
        //     'title' => 'FITALENTA Annual Conference',
        //     'description' => 'Join us for our annual conference discussing the latest trends in talent management and business consulting.',
        //     'event_date' => now()->addMonths(2),
        //     'location' => 'Jakarta Convention Center',
        //     'category_id' => 1,
        //     'is_featured' => true,
        //     'max_participants' => 500,
        // ]);


        $events = [
            [
                'title' => 'C-Level Share and Talk 001: Tips & Trick Mencapai Puncak Karier',
                'description' => '-',
                'event_date' => '2023-08-26',
                'location' => 'GSG Masjid Salman ITB',
                'image' => 'events/fitalent (3).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //2
                'title' => 'Work and Study Abroad Series 001: Take a Bold Step to Sweden Get Closer to Your Dream',
                'description' => '-',
                'event_date' => '2023-09-09',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (4).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //3
                'title' => 'C-Level Share and Talk 002: The Secrets to Getting Accepted into Multinational Companies',
                'description' => '-',
                'event_date' => '2023-09-30',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (5).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //4
                'title' => 'Work and Study Abroad Series 002: Kejar Mimpi Berkarier di Italy, Bisa!!',
                'description' => '-',
                'event_date' => '2023-10-07',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (6).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //5
                'title' => 'Work and Study Abroad Series 003: Gapai Cita Cita di Jepang dan Korea',
                'description' => '-',
                'event_date' => '2023-10-22',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (2).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //6
                'title' => 'C-Level Share and Talk 003: Ngobrolin Kerja di BUMN - Tahu Lebih & Lebih Tahu',
                'description' => '-',
                'event_date' => '2023-10-28',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (7).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //7
                'title' => 'Career Catalyst Series 002: Build a Successfull Career with Good Teamwork',
                'description' => '-',
                'event_date' => '2023-12-09',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (9).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //8
                'title' => 'Work and Study Abroad Series 004: Menggapai Peluang Karir di Jepang dari Sekarang',
                'description' => '-',
                'event_date' => '2023-12-16',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (10).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //9
                'title' => 'Career Catalyst Series 003: Unlocking Your Career Blueprint - Embracing Your Unique Gift for Success',
                'description' => '-',
                'event_date' => '2024-04-30',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (12).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 300,
            ],
            [
                //10
                'title' => 'Work and Study Abroad Series 005: Exploring Opportunities - Work and Study Abroad in Turkey',
                'description' => '-',
                'event_date' => '2024-05-04',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (13).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //11
                'title' => 'Work and Study Abroad Series 006: Unlock Your American Dream - Success Stories & Steps to Study and Work in USA',
                'description' => '-',
                'event_date' => '2024-06-01',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (14).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //12
                'title' => 'Work and Study Abroad Series 007: Melangkah di Tanah Aurora - Peluang Pendidikan dan Karir di Finlandia',
                'description' => '-',
                'event_date' => '2024-07-13',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (15).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //13
                'title' => 'Work and Study Abroad Series 008: Study in Taiwan',
                'description' => '-',
                'event_date' => '2024-07-25',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (16).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //14
                'title' => 'Job Fair bersama Paguyuban Pasundan dan Apindo',
                'description' => '-',
                'event_date' => '2024-08-03',
                'location' => 'Paguyuban Pasundan. Jl. Sumatra no. 41, Bandung',
                'image' => 'events/fitalent (1).png',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 10000,
            ],
            [
                //15
                'title' => 'PBA Training: Build an Interesting Content',
                'description' => '-',
                'event_date' => '2024-08-23',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (17).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //16
                'title' => 'PBA Training: Financial Talk - Cara Asyik Mengelola Keuangan Pribadi',
                'description' => '-',
                'event_date' => '2024-09-20',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (1).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //17
                'title' => 'Career Catalyst Series 001: Tips Kerja SMART Agar Karier Berkembang Cepat',
                'description' => '-',
                'event_date' => '2023-11-25',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (8).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 300,
            ],
            [
                //18
                'title' => 'Spiritual and Education Camp - The Great Young Moeslem Gathering',
                'description' => '-',
                'event_date' => '2024-03-22',
                'location' => 'Masjid Raya Al Jabbar Jawa Barat',
                'image' => 'events/fitalent (11).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            // [
            //     //6
            //     'title' => 'C-Level Share and Talk 003: Ngobrolin Kerja di BUMN - Tahu Lebih & Lebih Tahu',
            //     'description' => '-',
            //     'event_date' => '2023-10-28',
            //     'location' => 'Zoom Meeting',
            //     'image' => 'events/fitalent (7).jpg',
            //     'category_id' => 2,
            //     'is_featured' => true,
            //     'max_participants' => 100,
            // ],

            // Tambahkan wilayah lain sesuai kebutuhan
        ];

        foreach ($events as $event) {
            $event['slug'] = Str::slug($event['title']);

            Event::create($event);
        }
    }
}
