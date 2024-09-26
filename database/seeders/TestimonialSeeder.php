<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        // Testimonial::factory()->count(15)->create();

        $testimonials = [
            ['client_name' => 'Zulhamdi Bakri', 'company' => 'Kepala Cabang Depok BPRS Al Salaam', 'content' => 'FITALENTA sudah memberikan ilmu dan pengetahuan mengenai sales, marketing, dan service. Banyak hal baru yang kami rasakan, seperti mengubah pola pikir tentang peluang dan mendapatkan leads. Yang lebih terasa yaitu mendapatkan leads disekitar lingkungan kantor cabang dengan memanfaatkan APN dan TMM', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

            ['client_name' => 'Annisa Aulia Rahmah', 'company' => 'Magister Institut Teknologi Bandung', 'content' => 'Kehadiran FITALENTA sangat membantu saya dalam proses rkerutmen guru di SMA Pribadi Bandung. Dari awal saya diberikan informasi terkait peluang rekrutmen yang ada, dibantu dalam mengembangkan CV, dan memberikan rekomendasik kepada Sekolah atas kompetensi yang saya miliki', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

            ['client_name' => 'Adiba N', 'company' => 'Fresh Graduate Universitas Gadjah Mada', 'content' => 'Sebagai yang baru lulus kuliah, saya dan teman teman sering bingung untuk mulai kerja di mana, dibagian apa, juga bagaimana cara berkarir. Berkat acara i i, saya mendapatkan insight praktis dan strategis untuk merencanakan pengembangan karir di Industri aviasi serta BUMN. Terimakasih FITALENTA dan Pak Andi Fahrurrozi sebagai CEO GMF AeroAsia', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

            ['client_name' => 'Devan Faisal', 'company' => 'AODP BPRS Al Salaam', 'content' => 'FITALENTA memberikan pelatihan - pelatihan yang benar - benar kami butuhkan, dengan narasumber yang kompeten. Selama masa pelatihan kami di bimbing secara intens dan terstruktur. Menjadi berani, bertanggung jawab dalam melaksanakan tugas yang diberikan. Mindset kami berubah seketika dan membakar semangat juang', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

            ['client_name' => 'Rizka Amalia', 'company' => 'Mahasiswa Ilmu Komunikasi Unida Gontor', 'content' => 'Pada acara Work and Study Abroad FITALENTA yang ke-5, saya mendapatkan pengetahuan dan mendapatkan info info baru mengenai beasiswa untuk kuliah di turki, serta apa saja dan bagaimana yg perlu di perhatikan ataupun di persiapkan untuk kuliah di turki,mendapatkan info-info mengenai kehidupan dan budaya yang ada di turki, dan masih banyak lagi', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

            ['client_name' => 'Azwar', 'company' => 'Direktur Bisnis BPRS Al Salaam', 'content' => 'Alhamdulillah pendampingan pelatihan sales B2B yang dilaksanakan FITALENTA luar biasa', 'image' => 'testimonials/', 'rating' => 5, 'is_featured' => true],

        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
