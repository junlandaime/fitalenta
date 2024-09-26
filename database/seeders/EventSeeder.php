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
                'description' => 'Acara C-Level Share &amp; Talk: Tips &amp; Tricks Mencapai Puncak Karier merupakan kesempatan emas bagi para profesional dan mahasiswa untuk belajar langsung dari CEO PT GMF AeroAsia Tbk, Andi Fahrurrozi, S.T., M.T. Dalam seminar ini, peserta akan mendapatkan wawasan mendalam mengenai perjalanan karier seorang eksekutif di salah satu perusahaan BUMN terkemuka, serta bagaimana memulai dan membangun karier di industri perawatan pesawat dan BUMN. Selain itu, acara ini juga menyediakan peluang karier melalui FITALENTA serta diskon khusus untuk layanan asesmen dan konseling karier.</p>

<h3><strong>What to Expect</strong></h3>

<ul>
	<li>Kisah inspiratif perjalanan karier CEO PT GMF AeroAsia Tbk</li>
	<li>Pengenalan industri perawatan pesawat terbang dari perspektif eksekutif</li>
	<li>Tips memulai karier di BUMN, khususnya di sektor aviasi</li>
	<li>Kesempatan karier dan penawaran khusus dari FITALENTA</li>
	<li>Networking dengan profesional dan pakar industri</li>
</ul>
<p>&nbsp;</p>
<h3><strong>Agenda</strong></h3>
<p>&nbsp;</p>
<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan menyanyikan lagu kebangsaan</p>

<p><strong>09:30 WIB - Keynote Speech</strong></p>

<p>&ldquo;Tips &amp; Trick Mencapai Puncak Karier&rdquo; oleh Pak Andi Fahrurrozi, S.T., M.T</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama CEO PT GMF AeroAsia Tbk</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-08-26 09:00:00',
                'location' => 'GSG Masjid Salman ITB',
                'image' => 'events/fitalent (3).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //2
                'title' => 'Work and Study Abroad Series 001: Take a Bold Step to Sweden Get Closer to Your Dream',
                'description' => '<p>Acara <em>Work and Study Abroad Series 001</em> dengan tema &quot;Take a Bold Step to Sweden Get Closer to Your Dream&quot; memberikan kesempatan bagi peserta untuk mendapatkan wawasan dan strategi dalam meraih impian melalui pendidikan dan pengalaman kerja di luar negeri, khususnya di Swedia. Dalam kelas eksklusif ini, CEO Win Socio Innovation, Ratna Yanti Kosasih, S.Si, M.Sc, akan membagikan pengalaman dan tips sukses yang dapat membantu peserta mempersiapkan diri untuk meniti karier internasional. Acara ini juga menawarkan review CV kelompok dan peluang karier melalui FITALENTA.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta akan mendapatkan:</p>

<ul>
	<li>Inspirasi dari kisah sukses dan pengalaman CEO Win Socio Innovation</li>
	<li>Tips dan strategi untuk studi dan bekerja di luar negeri, khususnya di Swedia</li>
	<li>Review CV secara berkelompok setelah acara untuk meningkatkan peluang karier</li>
	<li>Kesempatan untuk membangun jaringan dengan profesional dan peserta lainnya</li>
	<li>Diskon eksklusif untuk layanan asesmen dan konsultasi karier</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan menyanyikan lagu kebangsaan</p>

<p><strong>09:30 WIB - Keynote Speech</strong></p>

<p>&ldquo;Take a Bold Step to Sweden Get Closer to Your Dream&rdquo; oleh Ibu Ratna Yanti Kosasih, S.Si, M.Sc</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama lulusan luar negeri Uppsala University, Swedia</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-09-09 09:00:00',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (4).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //3
                'title' => 'C-Level Share and Talk 002: The Secrets to Getting Accepted into Multinational Companies',
                'description' => '<p>Acara <em>C-Level Share &amp; Talk Series 002</em> dengan tema &quot;The Secrets to Getting Accepted into Multinational Companies&quot; adalah kesempatan bagi para profesional dan mahasiswa untuk mendapatkan wawasan dari Muhammad Arif, S.T., M.T (Han), Managing Director Rohde &amp; Schwarz Indonesia. Dalam acara ini, peserta akan mendapatkan panduan langsung mengenai cara membangun karier di perusahaan multinasional, strategi agar diterima di perusahaan-perusahaan global, serta bagaimana mempersiapkan diri secara optimal untuk menghadapi proses rekrutmen di perusahaan multinasional. Acara ini juga menyediakan kesempatan karier melalui FITALENTA serta diskon layanan asesmen dan konsultasi karier.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta akan memperoleh:</p>

<ul>
	<li>Wawasan dari Managing Director Rohde &amp; Schwarz Indonesia mengenai karier di perusahaan multinasional</li>
	<li>Diskusi tentang strategi sukses untuk diterima di perusahaan global</li>
	<li>Tips praktis dan panduan persiapan untuk proses rekrutmen</li>
	<li>Networking dengan profesional dan pakar industri multinasional</li>
	<li>Diskon khusus untuk layanan asesmen dan konsultasi karier</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan menyanyikan lagu kebangsaan</p>

<p><strong>09:30 WIB - Keynote Speech</strong></p>

<p>&ldquo;The Secrets to Getting Accepted into Multinational Companies&rdquo; oleh Bapak Muhammad Arif, S.T., M.T (Han)</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Managing Director Rohde &amp; Schwarz Indonesia</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-09-30 09:00:00',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (5).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //4
                'title' => 'Work and Study Abroad Series 002: Kejar Mimpi Berkarier di Italy, Bisa!!',
                'description' => '<p>Acara <em>Work and Study Abroad Series 002</em> dengan tema &quot;Kejarlah Mimpi Berkarier di Italy, Bisa!!!&quot; menawarkan pengalaman eksklusif bagi peserta yang ingin meraih impian berkarier di Italia. Dipandu oleh Anindya K. Wardhani, S.T., MBA, THSN Global Engagement Head dari International Italy, peserta akan mendapatkan wawasan dan panduan langsung untuk meniti karier internasional, khususnya di Italia. Acara ini juga memberikan kesempatan untuk mendapatkan review CV secara kelompok serta peluang karier melalui FITALENTA.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pemimpin industri yang berbagi pengalaman karier internasional</li>
	<li>Diskusi panel mengenai tren dan tantangan karier di luar negeri</li>
	<li>Review CV berkelompok untuk mempersiapkan diri lebih baik di pasar kerja global</li>
	<li>Kesempatan networking dengan sesama profesional dan pakar industri</li>
	<li>Diskon khusus untuk layanan asesmen dan konsultasi karier</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan menyanyikan lagu kebangsaan</p>

<p><strong>09:30 WIB - Keynote Speech</strong></p>

<p>&ldquo;Take a Bold Step to Sweden Get Closer to Your Dream&rdquo; oleh Ibu Anindya K. Wardhani, S.T., MBA</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama THSN Global Engagement Head dari International Italy</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-10-07 09:00:00',
                'location' => 'Gedung Sains Technopark ITB',
                'image' => 'events/fitalent (6).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 20,
            ],
            [
                //5
                'title' => 'Work and Study Abroad Series 003: Gapai Cita Cita di Jepang dan Korea',
                'description' => '<p>Acara <em>C-Level Share &amp; Talk Series 003</em> dengan tema &quot;Gapai Cita-cita di Jepang dan Korea&quot; adalah kesempatan unik untuk mendapatkan wawasan dari dua profesional yang telah sukses meniti karier internasional di Jepang dan Korea. Laksamana Rayhan, M.Eng dalam bidang Manajemen Lingkungan dari University of Kitakyushu, serta Rakhmawati Nabila, M.Eng dalam bidang Advanced Energy and System Engineering dari University of Science and Technology (UST) Korea, akan berbagi pengalaman mereka tentang perjalanan studi dan karier di luar negeri. Peserta akan diajak untuk memahami lebih dalam mengenai peluang studi dan karier di Jepang dan Korea, serta cara mempersiapkan diri agar dapat bersaing secara global.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pembicara yang berbagi pengalaman karier di Jepang dan Korea</li>
	<li>Sesi diskusi mengenai tantangan dan tren terbaru dalam dunia studi dan karier internasional</li>
	<li>Sesi tanya jawab interaktif dengan para pembicara</li>
	<li>Kesempatan untuk memperluas jaringan dengan profesional dan peserta lainnya</li>
	<li>Doorprize menarik serta peluang mendapatkan diskon layanan asesmen dan konsultasi karier</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan Perusahaan</p>

<p><strong>09:30 WIB - Keynote Speech Speaker 1</strong></p>

<p>&ldquo;Peluang kuliah dan karir di Korea Selatan&rdquo; oleh Ibu Rakhmawati Nabila, M.Eng</p>

<p><strong>10:00 WIB - Keynote Speech Speaker 2</strong></p>

<p>&ldquo;Peluang kuliah dan karir di Jepang&rdquo; oleh Bapak Laksamana Rayhan, M.Eng</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama kedua pembicara</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-10-22 09:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (2).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //6
                'title' => 'C-Level Share and Talk 003: Ngobrolin Kerja di BUMN - Tahu Lebih & Lebih Tahu',
                'description' => '<p>Acara <em>C-Level Share &amp; Talk Series 003</em> dengan tema &quot;Ngobrolin Kerja di BUMN: Tahu Lebih &amp; Lebih Tahu&quot; menghadirkan Lia Yuanawati, S.T., M.M., Direktur Keuangan &amp; SDM PT Aero Globe Indonesia. Acara ini memberikan kesempatan langka bagi peserta untuk mempelajari seluk-beluk bekerja di BUMN dari perspektif seorang profesional berpengalaman. Ibu Lia akan berbagi pengetahuan tentang strategi karier, manajemen SDM, serta dinamika kerja di BUMN. Ini adalah kesempatan berharga bagi mereka yang ingin mengetahui lebih jauh tentang peluang karier dan pengembangan profesional di sektor BUMN.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pemimpin industri mengenai karier dan manajemen di BUMN</li>
	<li>Diskusi panel mengenai tren terkini dan tantangan bekerja di BUMN</li>
	<li>Sesi tanya jawab interaktif dengan pembicara</li>
	<li>Kesempatan untuk memperluas jaringan dengan peserta lain dan profesional industri</li>
	<li>Pemahaman yang lebih dalam tentang peluang karier dan pengembangan SDM</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>08:30 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>09:00 WIB - Keynote Speech</strong></p>

<p>&ldquo;Ngobrolin Kerja di BUMN: Tahu Lebih &amp; Lebih Tahu&rdquo; oleh Ibu Lia Yuanawati, S.T., M.M.</p>

<p><strong>10:00 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Direktur Keuangan &amp; SDM PT Aero Globe Indonesia</p>

<p><strong>10:20 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-10-28 08:30:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (7).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //7
                'title' => 'Career Catalyst Series 002: Build a Successfull Career with Good Teamwork',
                'description' => '<p>Acara <em>Career Catalyst Series 001</em> dengan tema &quot;Tips Kerja SMART Agar Karier Berkembang Cepat&quot; akan menghadirkan Achmad Zakaria, Head of Leadership Faculty di Generali Indonesia. Dalam sesi ini, peserta akan belajar langsung dari seorang ahli kepemimpinan tentang bagaimana strategi bekerja secara SMART dapat mempercepat perkembangan karier. Acara ini dirancang untuk membantu peserta memahami cara mengelola waktu, prioritas, serta mengambil langkah-langkah yang tepat untuk mencapai puncak karier dengan efektif. Dengan investasi yang terjangkau, peserta juga mendapatkan peluang karier melalui FITALENTA dan sertifikat elektronik.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta akan mendapatkan:</p>

<ul>
	<li>Inspirasi dari Achmad Zakaria mengenai strategi sukses dalam pengembangan karier</li>
	<li>Diskusi mengenai tantangan dan tren terbaru dalam dunia karier profesional</li>
	<li>Sesi tanya jawab interaktif untuk membahas lebih dalam tentang strategi kerja SMART</li>
	<li>Kesempatan untuk memperluas jaringan dengan peserta dan profesional dari berbagai industri</li>
	<li>Akses eksklusif ke layanan karier melalui FITALENTA</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>08:45 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>09:00 WIB - Keynote Speech</strong></p>

<p>&ldquo;Tips Kerja SMART Agar Karier Berkembang Cepat&rdquo; oleh Bapak Achmad Zakaria</p>

<p><strong>10:00 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Head of Leadership Faculty di Generali Indonesia</p>

<p><strong>10:20 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-12-09 08:45:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (9).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //8
                'title' => 'Work and Study Abroad Series 004: Menggapai Peluang Karir di Jepang dari Sekarang',
                'description' => '<p>Acara <em>Career Catalyst Series 002</em> dengan tema &quot;Build a Successful Career with Good Teamwork&quot; dirancang untuk membantu para profesional dan mahasiswa memahami pentingnya kerja sama tim dalam membangun karier yang sukses. Dipandu oleh Riza Pahlevi Jeremy, seorang fasilitator dan coach berpengalaman, peserta akan mempelajari keterampilan dan strategi yang dibutuhkan untuk menciptakan sinergi yang kuat dalam tim kerja. Melalui acara ini, peserta akan mendapatkan wawasan tentang bagaimana membangun komunikasi efektif dan kolaborasi yang produktif dalam lingkungan kerja.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari fasilitator tentang pentingnya teamwork dalam kesuksesan karier</li>
	<li>Diskusi mengenai tantangan dan peluang dalam bekerja di tim yang efektif</li>
	<li>Sesi interaktif dengan Riza Pahlevi Jeremy untuk membahas praktik kerja sama yang baik</li>
	<li>Kesempatan networking dengan peserta dan profesional lainnya</li>
	<li>Akses eksklusif ke layanan karier melalui FITALENTA</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>08:45 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>09:00 WIB - Keynote Speech</strong></p>

<p>&ldquo;Build a Successful Career with Good Teamwork&rdquo; oleh Bapak Riza Pahlevi Jeremy</p>

<p><strong>10:00 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Fasilitator dan Coach Profesional</p>

<p><strong>10:20 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-12-16 08:45:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (10).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //9
                'title' => 'Career Catalyst Series 003: Unlocking Your Career Blueprint - Embracing Your Unique Gift for Success',
                'description' => '<p>Acara <em>Work and Study Abroad Series 004</em> dengan tema &quot;Menggapai Peluang Karir di Jepang dari Sekarang&quot; merupakan kesempatan berharga bagi para peserta untuk mendapatkan wawasan langsung dari dua pembicara berpengalaman di dunia kerja Jepang. Galih Nurcahyo, seorang Engineer di Micron Memory Japan dan lulusan S2 Kyoto Institute of Technology, serta Awaludin, Wakil Direktur SDM LPK Kiseki Indonesia yang memiliki pengalaman 25 tahun bekerja di perusahaan Jepang, akan berbagi pengalaman dan tips sukses dalam meniti karier di Jepang. Acara ini akan membekali peserta dengan informasi tentang bagaimana memulai perjalanan karier di Jepang dari sekarang.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pembicara mengenai pengalaman bekerja dan studi di Jepang</li>
	<li>Diskusi panel tentang tren dan tantangan terbaru dalam karier di Jepang</li>
	<li>Sesi interaktif untuk menjawab pertanyaan peserta mengenai karier internasional</li>
	<li>Kesempatan untuk memperluas jaringan dengan profesional dan peserta lainnya</li>
	<li>Peluang karier melalui FITALENTA serta sertifikat elektronik</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan Perusahaan</p>

<p><strong>09:30 WIB - Keynote Speech Speaker 1</strong></p>

<p>&ldquo;Peluang kuliah di Jepang&rdquo; oleh Bapak Galih Nurcahyo</p>

<p><strong>10:00 WIB - Keynote Speech Speaker 2</strong></p>

<p>&ldquo;Peluang karir di Jepang&rdquo; oleh Bapak Awaludin</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama kedua pembicara</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-04-30 09:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (12).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 300,
            ],
            [
                //10
                'title' => 'Work and Study Abroad Series 005: Exploring Opportunities - Work and Study Abroad in Turkey',
                'description' => '<p>Acara <em>Career Catalyst Series 003</em> dengan tema &quot;Unlocking Your Career Blueprint: Embracing Your Unique Gift for Success&quot; merupakan webinar eksklusif yang dipandu oleh Dedi Priadi, M.T., MA, penemu PRIAdi Psychological Fingerprints. Dalam acara ini, peserta akan diajak untuk memahami bagaimana mengenali potensi unik dalam diri masing-masing dan menggunakannya untuk merancang perjalanan karier yang sukses. Webinar ini memberikan wawasan berharga bagi siapa saja yang ingin mengembangkan karier sesuai dengan bakat dan minat mereka. Peserta juga akan mendapatkan e-sertifikat dan kesempatan karier melalui FITALENTA.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pemateri yang berbagi wawasan mengenai potensi karier berdasarkan sidik jari psikologis</li>
	<li>Diskusi panel tentang tantangan dan peluang dalam pengembangan karier pribadi</li>
	<li>Sesi tanya jawab interaktif untuk menggali lebih dalam potensi unik peserta</li>
	<li>Kesempatan untuk memperluas jaringan dengan peserta dan profesional lainnya</li>
	<li>Peluang karier melalui FITALENTA serta e-sertifikat</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>20:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>20:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;Unlocking Your Career Blueprint: Embracing Your Unique Gift for Success&rdquo; oleh Bapak Dedi Priadi, M.T., MA</p>

<p><strong>21:15 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama penemu PRIAdi Psychological Fingerprints</p>

<p><strong>21:30 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-05-04 08:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (13).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //11
                'title' => 'Work and Study Abroad Series 006: Unlock Your American Dream - Success Stories & Steps to Study and Work in USA',
                'description' => '<p>Acara <em>Work Study Abroad Series 005</em> dengan tema &quot;Exploring Opportunities: Work and Study Abroad in Turkey&quot; adalah kesempatan unik bagi peserta untuk mendapatkan wawasan langsung mengenai peluang studi dan bekerja di Turki. Dipandu oleh Muhammad Azkia Fahmi, Lc., M.A., seorang alumni Istanbul Sabahattin Zaim University dan Al Azhar University, acara ini akan membantu peserta memahami bagaimana memulai perjalanan studi di Turki serta menjelajahi berbagai peluang karier yang ada. Acara ini memberikan kesempatan bagi para peserta untuk mendapatkan bimbingan, e-sertifikat, dan kesempatan karier melalui FITALENTA.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pembicara tentang pengalaman studi dan bekerja di Turki</li>
	<li>Diskusi panel mengenai tren dan tantangan studi serta karier di Turki</li>
	<li>Sesi interaktif yang memberikan wawasan lebih mendalam tentang peluang pendidikan di Turki</li>
	<li>Kesempatan untuk membangun jaringan dengan sesama peserta dan profesional</li>
	<li>Peluang karier melalui FITALENTA serta e-sertifikat</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>13:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan perusahaan</p>

<p><strong>13:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;Exploring Opportunities: Work and Study Abroad in Turkey&rdquo; oleh Bapak Azkia Fahmi, Lc., M.A</p>

<p><strong>14:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama lulusan luar negeri Istanbul Sabahattin Zaim University&nbsp;</p>

<p><strong>14:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-06-01 13:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (14).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //12
                'title' => 'Work and Study Abroad Series 007: Melangkah di Tanah Aurora - Peluang Pendidikan dan Karir di Finlandia',
                'description' => '<p>Acara <em>Work and Study Abroad Series 006</em> dengan tema &quot;Unlock Your American Dream: Success Stories &amp; Steps to Study and Work in the USA&quot; memberikan kesempatan luar biasa bagi peserta untuk memahami bagaimana menggapai impian belajar dan bekerja di Amerika Serikat. Dengan narasumber Keukeu Abdullah, SE, Ak, MSOM, Business Support Manager di University of Arkansas, peserta akan mendapatkan wawasan dari pengalaman pribadi beliau tentang perjalanan kariernya di Amerika. Selain itu, acara ini juga memberikan tips eksklusif dan strategi khusus bagi mereka yang tertarik meniti karier dan melanjutkan studi di Amerika Serikat.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari cerita sukses dan pengalaman narasumber dalam menggapai karier di Amerika</li>
	<li>Diskusi panel mengenai tren terkini dan tantangan untuk studi dan bekerja di Amerika</li>
	<li>Tips eksklusif dan strategi untuk mempersiapkan diri dalam mengejar studi dan karier di luar negeri</li>
	<li>Kesempatan untuk memperluas jaringan dengan sesama peserta dan profesional internasional</li>
	<li>Peluang karier melalui FITALENTA serta materi eksklusif dari webinar</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>09:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan perusahaan</p>

<p><strong>09:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;Unlock Your American Dream: Success Stories &amp; Steps to Study and Work in the USA&rdquo; oleh Ibu Keukeu Abdullah, SE, Ak, MSOM</p>

<p><strong>10:30 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Business Support Manager di University of Arkansas</p>

<p><strong>10:50 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-07-13 09:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (15).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //13
                'title' => 'Work and Study Abroad Series 008: Study in Taiwan',
                'description' => '<p>Acara <em>Work and Study Abroad Series 007</em> dengan tema &quot;Melangkah di Tanah Aurora: Peluang Pendidikan dan Karir di Finlandia&quot; menawarkan wawasan eksklusif mengenai kesempatan pendidikan dan karier di Finlandia. Dipandu oleh Chairina A. Hutagalung-J&auml;rvinen, Bachelor in Business Administration dari Satakunta University of Applied Sciences, serta Yunita Firmaningsih-Kolu, M.A. (Ed.), Master in Educational Leadership dari University of Jyv&auml;skyl&auml;, Finlandia, acara ini bertujuan membantu para peserta memahami jalur pendidikan di Finlandia serta peluang karier yang tersedia di negara tersebut. Peserta juga dapat memanfaatkan sesi tanya jawab dan networking untuk memperdalam pengetahuan mereka.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Webinar inspiratif dari para pemimpin industri pendidikan dan karier</li>
	<li>Diskusi panel tentang tren dan tantangan terbaru dalam dunia pendidikan dan karier di Finlandia</li>
	<li>Sesi interaktif untuk membahas strategi sukses dalam meniti karier di luar negeri</li>
	<li>Kesempatan networking dengan peserta lain dan profesional di berbagai bidang</li>
	<li>Doorprize menarik dan peluang karier melalui FITALENTA serta sertifikat elektronik</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>13:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan Perusahaan</p>

<p><strong>13:15 WIB - Keynote Speech Speaker 1</strong></p>

<p>&ldquo;Peluang kuliah di Finlandia&rdquo; oleh Ibu Chairina A. Hutagalung-J&auml;rvinen</p>

<p><strong>13:45 WIB - Keynote Speech Speaker 2</strong></p>

<p>&ldquo;Peluang karir di Finlandia&rdquo; oleh Ibu Yunita Firmaningsih-Kolu, M.A. (Ed.)</p>

<p><strong>14:15 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama kedua pembicara</p>

<p><strong>14:30 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-07-25 13:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (16).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //14
                'title' => 'Job Fair bersama Paguyuban Pasundan dan Apindo',
                'description' => '<p>Acara <em>Work Study Abroad Series 008</em> dengan tema &quot;Study in Taiwan&quot; menawarkan kesempatan bagi para peserta untuk mengeksplorasi peluang kuliah gratis dan magang berbayar di Taiwan melalui skema beasiswa dan program magang tahun keberangkatan 2024 dan 2025. Dipandu oleh Alberto, seorang Konsultan Pendidikan Internasional dari Everbright Group, acara ini memberikan wawasan mendalam tentang cara mendapatkan beasiswa dan memanfaatkan peluang magang bagi mahasiswa aktif. Selain itu, peserta juga akan mendapatkan e-sertifikat sebagai tanda partisipasi.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p><br />
Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari pembicara tentang studi dan karier di Taiwan</li>
	<li>Diskusi panel tentang tren dan tantangan dalam mendapatkan beasiswa dan peluang magang di Taiwan</li>
	<li>Sesi interaktif untuk membahas strategi sukses mendapatkan beasiswa</li>
	<li>Kesempatan networking dengan mahasiswa dan profesional yang memiliki minat serupa</li>
	<li>Peluang magang berbayar dan kuliah gratis bagi mahasiswa aktif</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>16:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan perusahaan</p>

<p><strong>16:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;Study in Taiwan&rdquo; oleh Bapak Alberto</p>

<p><strong>17:15 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama Konsultan Pendidikan Internasional dari Everbright Group</p>

<p><strong>17:30 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-08-03 16:00:00',
                'location' => 'Paguyuban Pasundan. Jl. Sumatra no. 41, Bandung',
                'image' => 'events/fitalent (1).png',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 10000,
            ],
            [
                //15
                'title' => 'PBA Training: Build an Interesting Content',
                'description' => '<p><em>Job Fair 2024</em> adalah kesempatan luar biasa bagi pencari kerja dan masyarakat umum untuk menemukan berbagai peluang karier di berbagai sektor. Acara ini akan menampilkan pameran UMKM, hasil olahan pangan, serta pameran perguruan tinggi dan sekolah Pasundan. Selain itu, peserta juga dapat mengikuti walk-in interview secara langsung dengan perusahaan yang berpartisipasi, serta memperluas jaringan profesional mereka. Dengan berbagai sponsor dan peserta yang terlibat, acara ini menjadi tempat yang ideal bagi Anda yang ingin mengembangkan karier dan menemukan peluang baru.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p>Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Pidato inspiratif dari pemimpin industri tentang peluang karier dan bisnis</li>
	<li>Diskusi panel tentang tren terbaru dan tantangan dalam dunia kerja</li>
	<li>Workshop interaktif dan sesi breakout yang membahas berbagai topik pengembangan karier</li>
	<li>Kesempatan untuk networking dengan sesama pencari kerja dan para ahli industri</li>
	<li>Pameran inovatif yang menampilkan solusi bisnis terbaru serta hasil olahan UMKM</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>08:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan menyanyikan lagu kebangsaan</p>

<p><strong>09:00 WIB - Job Fair</strong></p>

<p>Peserta dapat berkeliling ke stand informasi kerja, kuliah, dan UMKM</p>

<p><strong>12:00 WIB - Session Break</strong></p>

<p>Istirahat siang</p>

<p><strong>13:00 WIB - Job Fair</strong></p>

<p>Peserta dapat melanjutkan berkeliling ke stand informasi kerja, kuliah, dan UMKM</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-08-23 08:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (17).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //16
                'title' => 'PBA Training: Financial Talk - Cara Asyik Mengelola Keuangan Pribadi',
                'description' => '<p>Acara <em>PBA Training: Build an Interesting Content</em> adalah pelatihan eksklusif yang dirancang untuk membantu peserta memahami cara membuat konten menarik yang dapat meningkatkan reach dan engagement di media sosial. Dipandu oleh Saura Prillizia, seorang <em>Social Media Specialist</em>, acara ini akan memberikan wawasan tentang strategi dan teknik dalam menciptakan konten yang tidak hanya relevan, tetapi juga mampu menarik perhatian audiens yang lebih luas. Pelatihan ini cocok bagi siapa saja yang ingin mengembangkan kemampuan mereka dalam pembuatan konten digital.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p>Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Inspirasi dari seorang <em>Social Media Specialist</em> mengenai pembuatan konten yang efektif</li>
	<li>Diskusi panel tentang tren terkini dan tantangan dalam dunia media sosial</li>
	<li>Sesi interaktif yang membahas teknik pembuatan konten yang menarik</li>
	<li>Kesempatan untuk networking dengan sesama peserta dan profesional di bidang media sosial</li>
	<li>Tips dan strategi untuk meningkatkan reach dan engagement konten</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>16:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>16:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;<em>Build an Interesting Content</em>&rdquo; oleh Saura Prillizia</p>

<p><strong>17:15 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama <em>Social Media Specialist</em></p>

<p><strong>17:30 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-09-20 16:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (1).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 100,
            ],
            [
                //17
                'title' => 'Career Catalyst Series 001: Tips Kerja SMART Agar Karier Berkembang Cepat',
                'description' => '<p>Acara <em>PBA Training: Financial Talk - Cara Asyik Mengelola Keuangan Pribadi</em> memberikan kesempatan bagi peserta untuk memahami cara praktis dan efektif dalam mengelola keuangan pribadi. Dengan menghadirkan Agus Ismail, S.T., MBA, seorang ahli dalam manajemen keuangan, peserta akan diajak untuk mengeksplorasi metode dan tips yang asyik dalam menjaga stabilitas finansial. Webinar ini sangat cocok bagi siapa saja yang ingin memiliki pengelolaan keuangan yang lebih baik serta mencapai tujuan finansial mereka dengan cara yang menyenangkan dan mudah diterapkan.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p>Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Webinar inspiratif dari pembicara ahli di bidang keuangan pribadi</li>
	<li>Diskusi panel tentang tren terbaru dan tantangan dalam mengelola keuangan pribadi</li>
	<li>Sesi interaktif yang membahas langkah-langkah praktis dalam pengelolaan keuangan</li>
	<li>Kesempatan networking dengan peserta lain dan profesional di bidang finansial</li>
	<li>Tips dan strategi eksklusif untuk mencapai tujuan keuangan dengan cara yang menyenangkan</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>16:00 WIB - Opening Ceremony</strong></p>

<p>Pembukaan acara dan pengenalan company profile</p>

<p><strong>16:15 WIB - Keynote Speech</strong></p>

<p>&ldquo;<em>Financial Talk - Cara Asyik Mengelola Keuangan Pribadi</em>&rdquo; oleh Bapak Agus Ismail, S.T., MBA</p>

<p><strong>17:15 WIB - Panel Discussion</strong></p>

<p>Diskusi langsung bersama pemateri</p>

<p><strong>17:30 WIB - Closing and Photo Session</strong></p>

<p>Closing ceremony dan pengambilan dokumentasi bersama</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'event_date' => '2023-11-25 16:00:00',
                'location' => 'Zoom Meeting',
                'image' => 'events/fitalent (8).jpg',
                'category_id' => 2,
                'is_featured' => true,
                'max_participants' => 300,
            ],
            [
                //18
                'title' => 'Spiritual and Education Camp - The Great Young Moeslem Gathering',
                'description' => '<p><em>Spiritual &amp; Education Camp: The Great Young Moslem Gathering</em> adalah acara yang dirancang khusus untuk pelajar kelas 2 SMP hingga 3 SMA yang bertujuan untuk memperkuat nilai-nilai spiritual dan pendidikan dalam lingkungan Islami. Acara ini akan diadakan di Masjid Raya Al Jabbar, Bandung, dari tanggal 22 hingga 24 Maret 2024. Peserta akan mengikuti serangkaian kegiatan yang tidak hanya meningkatkan pengetahuan agama, tetapi juga membangun keterampilan sosial, pengembangan diri, dan kepemimpinan. Acara ini menawarkan suasana yang mendukung dan bermanfaat bagi para peserta muda untuk mengembangkan akhlak dan karakter Islami.</p>

<p>&nbsp;</p>

<p><strong>What to Expect</strong></p>

<p>Dalam acara ini, peserta dapat mengharapkan:</p>

<ul>
	<li>Sesi inspiratif dari pemimpin pemikiran dalam industri pendidikan dan spiritual</li>
	<li>Diskusi panel tentang tantangan dan peluang yang dihadapi oleh generasi muda Muslim</li>
	<li>Workshop interaktif dan sesi pengembangan diri yang mendukung pertumbuhan spiritual dan pendidikan</li>
	<li>Kesempatan networking dengan teman sebaya dan mentor yang berpengalaman</li>
	<li>Kegiatan yang beragam seperti simulasi, talk show inspiratif, dan pelatihan life plan</li>
</ul>

<p>&nbsp;</p>

<p><strong>Agenda</strong></p>

<p>&nbsp;</p>

<p><strong>Friday, 22 March 2024</strong></p>

<p><strong>13:00 WIB - Opening Ceremony</strong></p>

<p>Registrasi dan Pembukaan Acara</p>

<p><strong>16:00 WIB - Keynote Speech Session 1</strong></p>

<p>&ldquo;<em>Pemuda Muslim Masa Kini: Beriman dan Berakidah</em>&rdquo; oleh Ust. Muhammad Elvandi</p>

<p><strong>18:00 WIB - Break</strong></p>

<p>Istirahat dan Buka Puasa Bersama</p>

<p><strong>20:00 WIB - Spiritual Session</strong></p>

<p>Mengaji dan diskusi Kegamaan</p>

<p>&nbsp;</p>

<p><strong>Saturday, 23 March 2024</strong></p>

<p><strong>05:00 WIB - Fasil Time and Morning Training</strong></p>

<p>Diskusi bersama fasilitator serta olahraga ringan pagi</p>

<p><strong>09:00 WIB - Keynote Speech Session 2</strong></p>

<p>&ldquo;<em>Menjadi Pemuda Berdampak</em>&rdquo; oleh Pembicara Muda Nasional</p>

<p><strong>13:00 WIB - Focus Group Discussion</strong></p>

<p>Diskusi gerakan sosial sederhana</p>

<p><strong>16:00 WIB - Spiritual Tour</strong></p>

<p>Tour spiritual di Masjid Raya Al Jabbar Jawa Barat</p>

<p><strong>18:00 WIB - Break</strong></p>

<p>Istirahat dan Buka Puasa Bersama</p>

<p><strong>20:00 WIB - Life Planning Session</strong></p>

<p>Diskusi dengan mentor untuk pembuatan rencana masa depan</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Sunday, 24 March 2024</strong></p>

<p><strong>05:00 WIB - Fasil Time and Morning Training</strong></p>

<p>Diskusi bersama fasilitator serta olahraga ringan pagi</p>

<p><strong>09:00 WIB - Quest Challenge</strong></p>

<p>Pelaksanaan Gerakan Sosial dan Presentasi Life Plan Individu</p>

<p><strong>13:00 WIB - Closing Ceremony</strong></p>

<p>Penutupan acara dan foto bersama</p>

<p>&nbsp;</p>
',
                'event_date' => '2024-03-22 13:00:00',
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
