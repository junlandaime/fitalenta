<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        // Gallery::factory()->count(20)->create();

        // Memastikan ada beberapa gambar yang featured
        // Gallery::factory()->count(5)->create([
        //     'is_featured' => true,
        // ]);

        // Membuat satu gambar untuk setiap kategori yang pasti ada
        // $categories = ['Event', 'Office', 'Team', 'Project'];
        // foreach ($categories as $index => $category) {
        //     Gallery::factory()->create([
        //         'category' => $category,
        //         'order' => $index + 1,
        //     ]);
        // }



        $galleries = [
            ['title' => 'C-Level Share & Talk 001', 'description' => 'C-Level Share & Talk 001: Sharing Session bersama CEO PT Garuda Maintenance Facility Aero Asia Tbk: Bapak Andi Fahrurrozi', 'image' => 'gallery/CLST 01.jpg', 'event_date' => '2023-08-26', 'category_id' => 2, 'is_featured' => false, 'order' => 1,],

            ['title' => 'Training B2B Sales Development', 'description' => 'Training B2B Sales Development bersama BPRS Al Salaam', 'image' => 'gallery/Pelatihan AODP AlSalaam.jpg', 'event_date' => '2023-09-01', 'category_id' => 2, 'is_featured' => false, 'order' => 2,],

            ['title' => 'Work and Study Abroad 001', 'description' => 'Work and Study Abroad 001: Sharing Session Peluang Pendidikan dan Kerja di Swedia bersama Ibu II Ratna Yanti', 'image' => 'gallery/WSA Series 001.jpeg', 'event_date' => '2023-09-09', 'category_id' => 3, 'is_featured' => false, 'order' => 2,],

            ['title' => 'C-Level Share & Talk 002', 'description' => 'C-Level Share & Talk 002: Sharing Session bersama Managing Director Rohde & Schwarz Indonesia: Muhammad Arif, S.T., M.T (Han)', 'image' => 'gallery/CLST Series 002.jpg', 'event_date' => '2023-09-30', 'category_id' => 2, 'is_featured' => false, 'order' => 4,],

            ['title' => 'Work and Study Abroad 002', 'description' => 'Work and Study Abroad 002: Sharing Session Peluang Kerja di Italy bersama Ibu IAnindya K. Wardhani, S.T., MBA', 'image' => 'gallery/WSA Series 002 -  (13).jpeg', 'event_date' => '2023-10-07', 'category_id' => 2, 'is_featured' => false, 'order' => 5,],

            ['title' => 'C-Level Share & Talk 003', 'description' => 'C-Level Share & Talk 003: Sharing Session bersama Direktur Keuangan dan SDM PT Aero Globe Indonesia: Ibu Lia Yuanawati, S.T., M.M', 'image' => 'gallery/CLST Series 003.png', 'event_date' => '2023-10-28', 'category_id' => 2, 'is_featured' => false, 'order' => 6,],

            ['title' => 'Penyaluran Talent Guru Kimia', 'description' => 'Penyaluran Talent Guru Kimia ke SMA Pribadi Bandung', 'image' => 'gallery/Penyaluran Talent ke Pribadi Bandung.jpg', 'event_date' => '2023-11-01', 'category_id' => 2, 'is_featured' => false, 'order' => 7,],

            ['title' => 'Workshop Strategic Pimpinan BPRS Al Salaam', 'description' => 'Workshop Strategic Pimpinan BPRS Al Salaam', 'image' => 'gallery/Wokrhsop Strategic ALSalaam.jpg', 'event_date' => '2023-12-06', 'category_id' => 2, 'is_featured' => false, 'order' => 8,],

            ['title' => 'Penyaluran Dana Sosial Perusahaan', 'description' => 'Penyaluran Dana Sosial Perusahaan kepada YPM Salman ITB dan Wakaf Salman ITB', 'image' => 'gallery/Penyaluran Dana Sosial Perusahaan tahun 2023.jpg', 'event_date' => '2023-12-30', 'category_id' => 2, 'is_featured' => false, 'order' => 10,],

            ['title' => 'Pembukaan Pendampingan Bisnis', 'description' => 'Pembukaan Pendampingan Bisnis Seluruh Kantor Cabang BPRS Al Salaam', 'image' => 'gallery/Pendampingan Kepala Cabang AlSalaam.jpg', 'event_date' => '2024-02-01', 'category_id' => 2, 'is_featured' => false, 'order' => 11,],

            ['title' => 'Launch Phylanthropy Business Affiliate Program', 'description' => 'Launch Phylanthropy Business Affiliate Program by FITALENTA', 'image' => 'gallery/launch affiliate program.jpg', 'event_date' => '2024-02-10', 'category_id' => 2, 'is_featured' => false, 'order' => 12,],

            ['title' => 'Spiritual Education Camp', 'description' => 'Spiritual Education Camp khusus Remaja di Masjid Raya Al Jabbar 29 - 31 Maret 2024', 'image' => 'gallery/Spiritual and Education Camp.jpg', 'event_date' => '2024-03-29', 'category_id' => 2, 'is_featured' => false, 'order' => 13,],

            ['title' => 'Work and Study Abroad 005', 'description' => 'Work and Study Abroad 005: Sharing Session Peluang Pendidikan dan Kerja di Turki bersama Ibu Muhammad Azkia Fahmi, Lc., M.A', 'image' => 'gallery/Wsa series 005_4.png', 'event_date' => '2024-04-04', 'category_id' => 2, 'is_featured' => false, 'order' => 14,],

            ['title' => 'Pelatihan Digital Marketing', 'description' => 'Pelatihan Digital Marketing di BBPVP Bandung 7 - 15 Mei 2024', 'image' => 'gallery/BBPVP Bandung.jpg', 'event_date' => '2024-05-07', 'category_id' => 2, 'is_featured' => false, 'order' => 15,],

            ['title' => 'Work and Study Abroad 006', 'description' => 'Work and Study Abroad 006: Sharing Session Peluang Pendidikan dan Kerja di Amerika Serikat bersama Ibu Keukeu Abdullah', 'image' => 'gallery/dokumentasi WSA Series 006__1.png', 'event_date' => '2024-06-01', 'category_id' => 2, 'is_featured' => false, 'order' => 16,],

            ['title' => 'Pelatihan dan Sertifikasi BNSP', 'description' => 'Pelatihan dan Sertifikasi BNSP untuk Karyawan LPIT ITB 19 - 22 Juni 2024', 'image' => 'gallery/Workshop Sertifikasi LPIT ITB.jpg', 'event_date' => '2024-06-19', 'category_id' => 2, 'is_featured' => false, 'order' => 17,],

            ['title' => 'Work and Study Abroad 007', 'description' => 'Work and Study Abroad 007: Sharing Session Peluang Pendidikan dan Kerja di Finlandia bersama kak Yunita dan kak Rinski', 'image' => 'gallery/Dokumentasi bersama WSA 007.jpeg', 'event_date' => '2024-07-13', 'category_id' => 2, 'is_featured' => false, 'order' => 18,],

            ['title' => 'Partisipasi FITALENTA pada Job Fair', 'description' => 'Partisipasi FITALENTA pada Job Fair Milangkala Paguyuban Pasundan dan Apindo', 'image' => 'gallery/3 Agustus 2024_Job Fair Pasundan.jpg', 'event_date' => '2024-08-03', 'category_id' => 2, 'is_featured' => false, 'order' => 19,],

            ['title' => 'Partisipasi FITALENTA pada Vokasi Fest', 'description' => 'Partisipasi FITALENTA pada Vokasi Fest BBPVP Bandung dihadiri juga Wakil Mentri Ketenagakerjaan RI: Bapak Ir. Afriansyah Noor | 14 - 15 Agustus 2024', 'image' => 'gallery/15 Aug 2024_Job Fair BBPVP Bandung dihadiri Wamen.jpg', 'event_date' => '2024-08-14', 'category_id' => 2, 'is_featured' => false, 'order' => 20,],




        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
