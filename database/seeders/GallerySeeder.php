<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::factory()->count(20)->create();

        // Memastikan ada beberapa gambar yang featured
        Gallery::factory()->count(5)->create([
            'is_featured' => true,
        ]);

        // Membuat satu gambar untuk setiap kategori yang pasti ada
        $categories = ['Event', 'Office', 'Team', 'Project'];
        foreach ($categories as $index => $category) {
            Gallery::factory()->create([
                'category' => $category,
                'order' => $index + 1,
            ]);
        }
    }
}
