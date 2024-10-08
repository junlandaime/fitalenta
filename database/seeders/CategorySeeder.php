<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create(
            [
                'name' => 'Informations',
                'slug' => 'informations',
                'parent_id' => null,
            ],
        );
        $category = Category::create(
            [
                'name' => 'Event',
                'slug' => 'event',
                'parent_id' => null,
            ]
        );
        $category = Category::create(
            [
                'name' => 'Blogs',
                'slug' => 'blogs',
                'parent_id' => null,
            ]
        );
    }
}
