<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users with 'editor' role
        // $editors = User::where('role', 'editor')->get();

        // Create some published articles
        // Article::factory()->count(30)
        //     ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
        //     ->create();

        // Create some unpublished articles
        // Article::factory()->count(10)
        //     ->unpublished()
        //     ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
        //     ->create();

        // Create some featured articles
        // Article::factory()->count(5)
        //     ->featured()
        //     ->sequence(fn($sequence) => ['author_id' => $editors->random()->id])
        //     ->create();



        $blogs = [
            [
                // 1
                'title' => '5 Cara Maksimalkan Masa Kuliah untuk Masa Depan Cemerlang',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Masa kuliah adalah waktu emas untuk mengeksplorasi berbagai peluang. Dengan membangun relasi dan aktif mengikuti kegiatan, kamu bisa mempersiapkan diri menghadapi masa depan yang lebih cerah.',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (1).jpg',
                'category_id' => 3
            ],
            [
                // 2
                'title' => '5 Tips Agar Cepat Dapat Kerja Remote',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Siapkan dirimu untuk sukses dalam dunia kerja remote dengan lima langkah praktis yang bisa meningkatkan skill, memperluas jaringan, dan membuka peluang karier tanpa batas lokasi!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (12).jpg',
                'category_id' => 3
            ],
            [
                // 3
                'title' => '5 Pertanyaan Penting untuk Dirimu Sebelum Umur 30',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Jangan biarkan hidupmu mengalir tanpa arah, tanyakan lima hal penting ini ke dirimu sendiri sebelum mencapai umur 30 agar kamu bisa merencanakan masa depan yang lebih jelas dan terarah!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (13).jpg',
                'category_id' => 3
            ],
            [
                // 4
                'title' => 'Harta Karun Digital: 15 Aplikasi Penting untuk Persiapan Karier',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Temukan berbagai platform digital yang bisa membantumu mempersiapkan karier impian, mulai dari latihan wawancara, pembuatan CV profesional, hingga membangun portfolio yang menarik dalam satu klik!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (10).jpg',
                'category_id' => 3
            ],
            [
                // 5
                'title' => 'Menjadi Ahli Digital Marketing: Langkah-Langkah Penting yang Harus Kamu Lakukan',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Terus belajar dan update keterampilan digital marketing-mu dengan mengikuti tren terbaru, bangun portofolio yang kuat melalui pengalaman langsung, dan dapatkan sertifikasi relevan agar siap bersaing di dunia digital yang semakin berkembang!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (9).jpg',
                'category_id' => 3
            ],
            [
                // 6
                'title' => '"Kenapa Lamaran Kerja Kamu Sering Gagal? Ini Penyebabnya!"',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Pelajari penyebab utama lamaran kerja kamu tidak dilirik perekrut, mulai dari personal branding yang kurang jelas hingga CV yang asal-asalan, dan temukan cara untuk meningkatkan peluangmu mendapatkan undangan interview!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (8).jpg',
                'category_id' => 3
            ],
            [
                // 7
                'title' => 'Menentukan Karier yang Tepat untuk Masa Depanmu',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Temukan langkah-langkah praktis untuk menentukan karier yang tepat sesuai dengan minat dan kemampuanmu, mulai dari riset, pengembangan keterampilan, hingga cara membangun personal branding yang kuat untuk menghadapi dunia kerja',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (7).jpg',
                'category_id' => 3
            ],
            [
                // 8
                'title' => 'Networking: Jalan Terbaik Mencari Peluang Karier dan Pengembangan Diri',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Networking bukan hanya soal mencari koneksi, tapi juga membangun relasi kuat yang membuka banyak peluang karier, pengalaman, dan kolaborasi untuk masa depan yang lebih cerah.',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (6).jpg',
                'category_id' => 3
            ],
            [
                // 9
                'title' => 'Tips Menulis CV yang Menarik: Buka Peluang Kariermu!',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Ingin CV-mu dilirik oleh HRD dan mendapatkan peluang interview lebih besar? Ikuti tips menulis CV yang efektif ini untuk menonjolkan dirimu di antara kandidat lainnya dan buktikan bahwa kamu adalah pilihan terbaik!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (5).jpg',
                'category_id' => 3
            ],
            [
                // 10
                'title' => 'Panduan Praktis Menentukan Arah Karier untuk Pemuda',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Menentukan arah karier yang sesuai bukanlah hal yang instan; pahami dirimu, lakukan riset mendalam, dan cobalah berbagai pengalaman agar kamu dapat menemukan karier yang benar-benar sesuai dengan minat dan bakatmu.',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (4).jpg',
                'category_id' => 3
            ],
            [
                // 11
                'title' => '5 Pekerjaan yang Sangat Dibutuhkan di Masa Depan: Menghadapi Perubahan Teknologi dan Sosial',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Dari teknologi informasi hingga energi terbarukan, 5 profesi ini akan menjadi kunci dalam menghadapi perubahan sosial dan teknologi di masa depan yang semakin dinamis!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (3).jpg',
                'category_id' => 3
            ],
            [
                // 12
                'title' => 'Tips Sukses Menghadapi Interview: Persiapan Mental dan Strategi Menjawab Pertanyaan',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Persiapan matang, riset mendalam, mendengarkan dengan seksama, dan menjaga pikiran positif adalah kunci untuk menghadapi interview dengan percaya diri dan menghindari "nge-blank" di tengah proses',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (2).jpg',
                'category_id' => 3
            ],
            [
                // 13
                'title' => '5 Langkah Sukses untuk Fresh Graduate Memulai Karier dengan Cemerlang',
                'slug' => '-',
                'content' => '-',
                'excerpt' => 'Memulai karier memang penuh tantangan, tapi dengan lima langkah sederhana ini, fresh graduate bisa memastikan karier mereka melesat menuju kesuksesan!',
                'author_id' => 1,
                'event_date' => now(),
                'is_featured' => true,
                'image' => 'articles/fit (11).jpg',
                'category_id' => 3
            ],


        ];

        foreach ($blogs as $blog) {
            $blog['slug'] = Str::slug($blog['title']);

            Article::create($blog);
        }
    }
}
