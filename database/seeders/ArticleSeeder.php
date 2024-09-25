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
                'content' => '<p><strong>5 Cara Maksimalkan Masa Kuliah untuk Masa Depan Cemerlang</strong></p><p>&nbsp;</p><p>Masa kuliah adalah waktu yang sangat berharga dalam hidup kita. Selain belajar di kelas, banyak hal lain yang bisa kita lakukan untuk mempersiapkan masa depan. Berikut adalah lima kegiatan yang bisa kamu lakukan selama kuliah untuk memaksimalkan pengalaman dan membantu membangun karier yang lebih baik.</p><p>&nbsp;</p><h3><strong>1. Bangun Relasi yang Luas</strong></h3><p>Salah satu hal terpenting yang harus kamu lakukan saat kuliah adalah membangun relasi. Cobalah untuk berkenalan dengan teman dari lintas jurusan, lintas angkatan, bahkan lintas kampus. Dengan memiliki relasi yang luas, kamu akan punya banyak kesempatan untuk belajar dari berbagai latar belakang dan pengalaman. Jangan takut untuk memulai obrolan dengan orang baru, karena siapa tahu mereka bisa menjadi partner bisnis, rekan kerja, atau bahkan sahabat seumur hidup!</p><p>&nbsp;</p><h3><strong>2. Ikut Program Magang</strong></h3><p>Mengikuti program magang selama kuliah bisa memberikan kamu pengalaman profesional yang sangat berharga. Magang memungkinkan kamu untuk terjun langsung ke dunia kerja, memahami cara kerja industri, dan membangun jaringan profesional. Selain itu, magang juga akan meningkatkan nilai jualmu saat melamar pekerjaan setelah lulus. Jangan lupa, pengalaman magang juga membantu kamu menemukan minat karier yang sebenarnya!</p><p>&nbsp;</p><h3><strong>3. Ikut Program Exchange</strong></h3><p>Program pertukaran pelajar (exchange) tidak harus ke luar negeri. Di dalam negeri pun banyak universitas yang menawarkan program exchange yang bermanfaat. Mengikuti program exchange bisa melatih banyak hal, seperti adaptasi dengan lingkungan baru, kerja sama dalam tim lintas budaya, hingga kemampuan manajemen diri. Ini adalah kesempatan emas untuk keluar dari zona nyaman dan memperluas wawasan internasional atau antar budaya.</p><p>&nbsp;</p><h3><strong>4. Ikut Kepanitiaan</strong></h3><p>Melibatkan diri dalam kepanitiaan acara kampus adalah cara yang efektif untuk mengasah soft skills seperti manajemen waktu, kepemimpinan, komunikasi, dan kerja sama tim. Selain menambah pengalaman, kamu juga akan mendapatkan kesempatan untuk mengenal lebih banyak teman baru dan membangun relasi yang bermanfaat di masa depan. Relasi yang kamu bangun saat menjadi panitia acara bisa membuka pintu untuk berbagai kesempatan lain di dunia profesional.</p><p>&nbsp;</p><h3><strong>5. Kerja Sambil Kuliah</strong></h3><p>Jika kamu ingin menambah uang jajan atau sekadar menambah tabungan, kerja sambil kuliah bisa menjadi pilihan. Kamu bisa mencoba mengajar siswa SD hingga SMA, menjadi content creator, atau bahkan menjadi affiliate marketer. Selain mendapatkan penghasilan tambahan, bekerja sambil kuliah juga bisa membantu kamu mengasah keterampilan manajemen waktu dan meningkatkan rasa tanggung jawab.</p><p>Dengan melakukan kegiatan-kegiatan ini, kamu tidak hanya akan mendapatkan pengalaman berharga, tetapi juga membekali diri dengan keterampilan dan jaringan yang akan sangat berguna di dunia kerja nanti. Jangan sia-siakan masa kuliahmu hanya untuk belajar di kelas, tapi manfaatkan waktu ini untuk membangun masa depan yang lebih cerah!</p><p>&nbsp;</p><p>&nbsp;</p><p>Jadi, tunggu apa lagi? Mulailah sekarang dan ambil setiap kesempatan yang ada. Masa depanmu dimulai dari sekarang, dan pilihan ada di tanganmu. Siap untuk sukses? Ayo maksimalkan masa kuliahmu!</p>',
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
                'content' => '<h2><strong>5 Tips Agar Cepat Dapat Kerja Remote</strong></h2>

<p>Saat ini, kerja remote menjadi salah satu tren paling dicari oleh generasi muda. Dengan fleksibilitas waktu dan tempat, kerja remote memungkinkan kita bekerja dari mana saja tanpa terikat kantor fisik. Berikut adalah lima langkah penting yang bisa kamu ambil untuk mempercepat peluangmu mendapatkan kerja remote:</p>

<p>&nbsp;</p>

<h3><strong>1. Self Assessment dan Upgrade Skill</strong></h3>

<p>Langkah pertama yang harus kamu lakukan adalah mengevaluasi keterampilan yang kamu miliki. Identifikasi skill yang relevan dengan pekerjaan remote, seperti pemrograman, digital marketing, multimedia, atau bahasa asing. Setelah itu, pastikan kamu selalu meng-upgrade keterampilan tersebut lewat berbagai pelatihan, bootcamp, atau webinar. Dengan menguasai tools yang dibutuhkan untuk pekerjaan remote, kamu akan lebih percaya diri dan siap bersaing di pasar kerja global.</p>

<p>&nbsp;</p>

<h3><strong>2. Buat Profil LinkedIn dan Portfolio Online yang Menarik</strong></h3>

<p>Profil LinkedIn yang lengkap dan profesional akan meningkatkan peluangmu untuk ditemukan oleh perekrut. Pastikan profilmu menonjolkan pengalaman dan keterampilan yang relevan. Jika kamu bekerja di bidang kreatif atau teknologi, lengkapi juga dengan portfolio online yang menunjukkan hasil karya atau proyek yang pernah kamu kerjakan. Portfolio yang menarik adalah cara terbaik untuk memamerkan keahlianmu secara visual kepada calon employer.</p>

<p>&nbsp;</p>

<h3><strong>3. Segera Update CV</strong></h3>

<p>Jangan lupa untuk selalu memperbarui CV kamu! Pastikan CV-mu profesional dan sesuai dengan pekerjaan yang kamu lamar. Highlight skill dan pengalaman yang relevan, serta gunakan keyword dan format yang sesuai dengan deskripsi pekerjaan. CV yang baik akan membuat perekrut tertarik untuk mempelajari lebih lanjut tentang dirimu.</p>

<p>&nbsp;</p>

<h3><strong>4. Cari di Platform Khusus Pekerjaan Remote</strong></h3>

<p>Banyak platform online yang dikhususkan untuk mencari pekerjaan remote. Kamu bisa mulai mencari pekerjaan di situs seperti Remote.co, We Work Remotely, FlexJobs, LinkedIn, atau Upwork. Platform ini menyediakan berbagai jenis pekerjaan remote dari berbagai perusahaan global, jadi pastikan kamu mendaftarkan dirimu di beberapa platform tersebut untuk memperluas peluang.</p>

<p>&nbsp;</p>

<h3><strong>5. Manfaatkan Networking dan Komunitas</strong></h3>

<p>Jangan lewatkan peluang untuk berpartisipasi dalam berbagai event networking, baik online maupun offline. Dengan mengikuti event ini, kamu bisa bertukar ilmu, memperluas jaringan, dan mendapatkan informasi tentang peluang kerja remote yang mungkin tidak kamu temukan di tempat lain. Bergabunglah dengan komunitas yang relevan dengan bidang kerjamu untuk membangun relasi yang bermanfaat.</p>

<p>&nbsp;</p>

<p>Dengan mengikuti lima langkah ini, kamu akan lebih siap untuk memasuki dunia kerja remote yang fleksibel dan penuh peluang. Jangan ragu untuk terus belajar, memperluas jaringan, dan mempersiapkan dirimu dengan baik untuk mendapatkan pekerjaan impianmu!</p>

<p>&nbsp;</p>
',
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
                'content' => '<h1><strong>5 Pertanyaan Penting untuk Dirimu Sebelum Umur 30</strong></h1>

<p>Di usia muda, kita sering dihadapkan pada banyak pilihan hidup. Tapi, apakah kamu sudah benar-benar berpikir matang tentang langkah-langkah yang akan kamu ambil di masa depan? Jangan biarkan dirimu terjebak di umur 30 tanpa arah yang jelas. Berikut adalah lima pertanyaan penting yang perlu kamu tanyakan ke diri sendiri untuk membantumu membuat keputusan yang lebih baik.</p>

<p>&nbsp;</p>

<h3><strong>1. Gaya Hidup Seperti Apa yang Aku Inginkan di Umur 30?</strong></h3>

<p>Semakin kita dewasa, biaya hidup makin meningkat. Pikirkan bagaimana gaya hidup yang ingin kamu jalani di masa depan. Apakah kamu ingin melanjutkan studi, menikah dan punya anak, atau memulai bisnis? Semua pilihan ini membutuhkan perencanaan matang. Jangan biarkan hidupmu mengalir begitu saja tanpa arah yang jelas.</p>

<p>&nbsp;</p>

<h3><strong>2. Goals Jangka Panjang yang Ingin Dicapai, Apa?</strong></h3>

<p>Kamu mungkin masih bingung tentang tujuan jangka panjangmu, dan itu normal. Teruslah bergerak dan coba hal-hal baru hingga kamu menemukan apa yang benar-benar ingin kamu capai. Begitu kamu punya tujuan yang jelas, kamu bisa menentukan langkah-langkah yang perlu diambil untuk mencapainya.</p>

<p>&nbsp;</p>

<h3><strong>3. Aktivitas Apa yang Membuat Aku Lupa Waktu?</strong></h3>

<p>Sering kali, apa yang kita lakukan tanpa terasa waktu berjalan adalah petunjuk tentang passion kita. Apakah kamu suka scrolling media sosial? Mungkin kamu cocok jadi social media specialist. Atau mungkin kamu suka mengulik aplikasi dan website? Itu bisa jadi tanda bahwa kamu berminat di bidang software engineering.</p>

<p>&nbsp;</p>

<h3><strong>4. Aku Lebih Nyaman di Lingkungan yang Bagaimana?</strong></h3>

<p>Setiap orang punya preferensi lingkungan kerja yang berbeda. Ada yang lebih suka lingkungan fast-paced dan terstruktur, ada juga yang lebih cocok di tempat yang lebih dinamis dan fleksibel. Penting untuk tahu di mana kamu bisa merasa nyaman, karena lingkungan yang salah bisa membuatmu tidak produktif dan tidak tampil all out.</p>

<p>&nbsp;</p>

<h3><strong>5. Aku Orangnya Lebih Extrovert atau Introvert?</strong></h3>

<p>Mengetahui kepribadianmu, apakah lebih extrovert atau introvert, bisa membantu menentukan jalur karier yang paling sesuai. Seorang extrovert mungkin lebih cocok di bidang jurnalisme, marketing, atau event organizer. Sementara introvert bisa lebih berkembang di bidang seperti software engineering, content writing, atau desain grafis.</p>

<p>&nbsp;</p>

<p>Hidup di usia 30-an bisa jadi lebih menantang jika kamu tidak merencanakan sejak dini. Dengan menanyakan lima pertanyaan ini kepada dirimu sendiri, kamu bisa mulai membangun kehidupan yang lebih terarah dan mencapai tujuan-tujuan besar yang kamu impikan.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
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
                'content' => '<h1><strong>Harta Karun Digital: 10 Aplikasi Penting untuk Persiapan Karier</strong></h1>

<p>Di era digital, kamu bisa memanfaatkan berbagai platform online untuk mempersiapkan diri menghadapi dunia kerja. Ada banyak tools yang bisa kamu gunakan untuk latihan wawancara, membangun portfolio, hingga membuat CV yang memukau. Berikut adalah 10 aplikasi yang bisa menjadi &quot;harta karun&quot; dalam perjalananmu mencari pekerjaan.</p>

<p>&nbsp;</p>

<h3><strong>Harta Karun untuk Wawancara</strong></h3>

<ol>
	<li><strong>Pramp</strong><br />
	Platform ini dirancang untuk latihan wawancara secara interaktif. Kamu bisa berlatih dengan sesama pencari kerja, mendapatkan umpan balik langsung, dan memperbaiki jawabanmu untuk wawancara berikutnya.</li>
	<li><strong>Big Interview</strong><br />
	Aplikasi ini menyediakan daftar persiapan wawancara yang komprehensif. Kamu bisa belajar dari contoh pertanyaan dan jawaban yang disesuaikan dengan berbagai industri.</li>
	<li><strong>InterviewBit</strong><br />
	Terutama untuk kamu yang bergerak di bidang IT, InterviewBit menyediakan latihan wawancara berbasis coding yang bisa membantumu meningkatkan skill teknis dan wawancara.</li>
	<li><strong>Glassdoor</strong><br />
	Glassdoor menyediakan berbagai contoh pertanyaan wawancara yang sering ditanyakan di berbagai perusahaan. Ini akan membantu kamu memahami pola dan jenis pertanyaan yang mungkin muncul.</li>
	<li><strong>Google Translate (Fitur Latihan Speaking)</strong><br />
	Ingin memoles kemampuan bahasa Inggris-mu? Fitur speaking di Google Translate bisa membantu melatih pronunciation dan meningkatkan kepercayaan dirimu saat wawancara.</li>
</ol>

<h3>&nbsp;</h3>

<h3><strong>Harta Karun untuk Portfolio</strong></h3>

<ol>
	<li><strong>Behance</strong><br />
	Bagi kamu yang bekerja di bidang desain, Behance adalah platform terbaik untuk memamerkan karya-karyamu kepada calon employer.</li>
	<li><strong>GitHub</strong><br />
	Untuk para developer, GitHub adalah tempat untuk menampilkan hasil coding-mu. Ini bisa menjadi &quot;CV&quot; digital yang dilihat oleh perekrut untuk menilai keterampilan teknismu.</li>
	<li><strong>Canva</strong><br />
	Canva adalah tool desain yang mudah digunakan untuk membuat berbagai template portofolio atau presentasi profesional, bahkan tanpa skill desain yang mumpuni.</li>
	<li><strong>WordPress</strong><br />
	Platform ini cocok untuk membuat portofolio online secara lebih kompleks. Kamu bisa menyesuaikan konten dan desain sesuai dengan kebutuhan profesionalmu.</li>
	<li><strong>Wix</strong><br />
	Wix adalah platform website builder yang menawarkan banyak template profesional untuk membuat portfolio online yang menarik dan mudah diakses oleh perekrut.</li>
</ol>

<h3>&nbsp;</h3>

<h3><strong>Harta Karun untuk CV</strong></h3>

<ol>
	<li><strong>Grammarly</strong><br />
	Aplikasi ini akan membantumu memeriksa tata bahasa dan ejaan di CV agar terlihat lebih profesional dan bebas dari kesalahan.</li>
	<li><strong>Hemingway Editor</strong><br />
	Jika kamu ingin CV-mu singkat dan padat, Hemingway Editor membantu menyederhanakan kalimat-kalimatmu agar lebih mudah dibaca dan tetap formal.</li>
	<li><strong>Evernote</strong><br />
	Gunakan Evernote untuk menyimpan catatan tentang pengalaman kerja, proyek, atau pencapaian penting yang bisa kamu masukkan ke dalam CV-mu.</li>
	<li><strong>Skillsyncer</strong><br />
	Tools ini membantu kamu memindai CV agar sesuai dengan format Applicant Tracking System (ATS), sehingga CV-mu lebih mudah lolos seleksi otomatis.</li>
	<li><strong>Google Drive</strong><br />
	Simpan semua versi CV-mu di Google Drive agar mudah diakses kapan saja, di mana saja, terutama saat kamu harus mengirimkannya dengan cepat.</li>
</ol>

<p>&nbsp;</p>

<p>Dengan memanfaatkan platform digital ini, kamu bisa mempersiapkan dirimu secara lebih baik untuk memasuki dunia kerja. Dari latihan wawancara hingga membuat portfolio yang mengesankan, aplikasi-aplikasi ini akan membantumu meraih pekerjaan impian dengan lebih mudah.</p>
',
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
                'content' => '<h2><strong>Menjadi Ahli Digital Marketing: Langkah-Langkah Penting yang Harus Kamu Lakukan</strong></h2>

<p>Digital marketing semakin berkembang seiring kemajuan teknologi dan transformasi digital yang terus berlanjut. Bagi kamu yang berusia 15-30 tahun dan ingin terjun ke dunia ini, ada beberapa langkah yang bisa kamu ikuti untuk menjadi ahli digital marketing yang handal. Berikut adalah beberapa panduan untuk membantumu memulai dan mengasah keterampilanmu.</p>

<p>&nbsp;</p>

<h3><strong>1. Terus Belajar dan Update</strong></h3>

<p>Digital marketing selalu berubah dan berkembang. Agar tetap relevan, kamu perlu terus belajar dengan membaca blog, mengikuti webinar, dan bergabung dalam komunitas yang aktif di dunia digital marketing. Dengan begitu, kamu akan selalu mendapatkan informasi terbaru tentang tren dan strategi pemasaran yang efektif.</p>

<p>&nbsp;</p>

<h3><strong>2. Networking dan Cari Pengalaman Kerja</strong></h3>

<p>Jaringan sangat penting dalam dunia digital marketing. Bergabung dengan komunitas terkait, mengikuti konferensi, atau menghadiri workshop bisa membuka peluang baru bagimu. Selain itu, cobalah untuk magang atau mengambil pekerjaan freelance untuk membangun portofoliomu. Pengalaman langsung ini akan sangat membantumu memahami dunia digital marketing secara praktis.</p>

<p>&nbsp;</p>

<h3><strong>3. Dapatkan Sertifikasi yang Relevan</strong></h3>

<p>Mendapatkan sertifikasi di bidang digital marketing akan membuatmu lebih kompeten di mata employer. Beberapa sertifikasi yang bisa kamu ambil meliputi:</p>

<ul>
	<li><strong>Google Ads Certification</strong>: Menunjukkan bahwa kamu ahli dalam menggunakan Google Ads.</li>
	<li><strong>HubSpot Inbound Marketing Certification</strong>: Mengajarkanmu tentang strategi inbound marketing.</li>
	<li><strong>Facebook Blueprint Certification</strong>: Menunjukkan keahlianmu dalam mengelola iklan di platform Facebook.</li>
</ul>

<h3>&nbsp;</h3>

<h3><strong>4. Praktik Langsung dan Kuasai Alat-Alat Digital Marketing</strong></h3>

<p>Tidak hanya teori, kamu juga perlu mempraktikkan keterampilanmu dengan langsung mengelola akun media sosial, membuat blog atau website, dan menggunakan alat-alat seperti Google Ads dan Facebook Ads. Praktik ini akan memberikan pengalaman nyata yang sangat berharga dan meningkatkan keahlianmu dalam mengelola kampanye digital.</p>

<h3>&nbsp;</h3>

<h3><strong>5. Pelajari Dasar-Dasar Digital Marketing</strong></h3>

<p>Untuk memulai, penting bagimu mempelajari konsep dasar seperti SEO (Search Engine Optimization), SEM (Search Engine Marketing), SMM (Social Media Marketing), content marketing, dan email marketing. Platform online seperti Coursera, Udemy, atau Google Digital Garage menawarkan kursus online baik gratis maupun berbayar yang bisa kamu ambil untuk memperdalam pengetahuanmu.</p>

<p>&nbsp;</p>

<p>Dengan terus belajar, memperluas jaringan, mendapatkan sertifikasi, dan mempraktikkan langsung keterampilan digital marketing, kamu bisa menjadi seorang ahli di bidang ini. Dunia digital marketing menawarkan banyak peluang, dan dengan langkah yang tepat, kamu bisa meraih kesuksesan di dunia digital.</p>

<p>&nbsp;</p>
',
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
                'content' => '<p>Mungkin kamu pernah bertanya-tanya kenapa lamaran kerja yang kamu kirimkan tidak membuahkan hasil, bahkan undangan interview pun tak kunjung datang. Padahal, kamu merasa sudah memenuhi syarat dan kualifikasi yang dicari. Ternyata, ada beberapa hal yang sering menjadi penyebab kegagalan tersebut, yang mungkin selama ini kamu lewatkan. Dalam artikel ini, kita akan membahas beberapa faktor yang bisa membuat lamaran kerja kamu tidak dilirik oleh perekrut, berdasarkan tema-tema penting yang terlihat di berbagai gambar berikut ini.</p>

<p>&nbsp;</p>

<ol>
	<li><strong>Personal Branding yang Kurang Jelas</strong> Personal branding adalah cara kamu menampilkan dirimu sendiri dan keunikanmu. Jika lamaranmu tidak menonjolkan apa yang membuatmu berbeda dari kandidat lainnya&mdash;seperti proyek khusus atau pencapaian unik&mdash;HRD mungkin tidak akan memperhatikan lamaran kamu. Penting sekali untuk menonjolkan keunggulanmu dengan jelas di CV maupun portofolio agar menarik perhatian perekrut.</li>
	<li><strong>Posisi Sudah Terisi</strong> Kadang, proses perekrutan berlangsung sangat cepat, bahkan sebelum HRD sempat melihat lamaranmu, posisi yang kamu lamar sudah terisi. Oleh karena itu, penting untuk selalu mengecek lowongan pekerjaan secara rutin dan segera mengirimkan lamaran sebelum kesempatan itu hilang.</li>
	<li><strong>Kualifikasi Tidak Sesuai</strong> Salah satu alasan utama lamaran ditolak adalah karena kualifikasi, pengalaman, atau keterampilan yang tidak sesuai dengan apa yang dicari oleh perusahaan. Pastikan kamu melamar pada posisi yang sesuai dengan kompetensimu. Kalau tidak, lamaranmu bisa saja langsung ditolak tanpa pertimbangan lebih lanjut.</li>
	<li><strong>Membuat CV Asal-Asalan</strong> CV adalah representasi pertama dirimu yang dilihat oleh perekrut. CV yang asal-asalan, dengan informasi yang kurang lengkap dan banyak ruang kosong, bisa membuat lamaranmu dianggap tidak serius. Pastikan CV kamu tersusun rapi, memuat semua pengalaman yang relevan, dan menonjolkan kemampuan serta pencapaian yang sesuai dengan posisi yang dilamar.</li>
</ol>

<p>&nbsp;</p>

<p>Mengetahui penyebab-penyebab ini, kamu bisa lebih berhati-hati dan teliti saat mempersiapkan lamaran kerja ke depannya. Perbaiki personal branding, kirim lamaran secepat mungkin, sesuaikan kualifikasi dengan posisi yang dilamar, dan buat CV yang menarik serta informatif. Dengan cara ini, peluang kamu untuk dipanggil interview akan meningkat drastis!</p>

<p>&nbsp;</p>

<p><strong>Jangan lupa untuk terus mengembangkan diri dan meningkatkan kemampuan, karena dunia kerja sangat dinamis dan penuh persaingan!</strong></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
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
