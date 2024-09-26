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
                'name' => 'Financial Industry Services',
                'short' => 'PT FAST Indo Talenta (FITALENTA) provides expert solutions for the financial industry, focusing on leadership, sales, business coaching, and HR strategies. With 20+ years of experience, we help companies achieve sustainable growth through tailored training and support.',
                'description' => '<h1><strong>Financial Industry Services</strong></h1>

<p>&nbsp;</p>

<p>At PT FAST Indo Talenta (FITALENTA), we empower clients in the financial industry by providing comprehensive, tailored services designed to elevate business performance and drive sustainable growth. Our expertise spans across multiple facets, ensuring that organizations can thrive in a competitive and ever-evolving financial landscape.</p>

<p>&nbsp;</p>

<h3>Our key services include:</h3>

<p>&nbsp;</p>

<ul>
	<li><strong>Leadership &amp; Sales Empowerment</strong>: We provide training programs that enhance both the hard and soft skills of your workforce, from branch managers to sales staff, ensuring they meet and exceed organizational targets.</li>
	<li><strong>Business Monitoring &amp; Coaching</strong>: Our hands-on coaching and monitoring services are designed to support business leaders in maintaining discipline, creativity, and motivation across their teams, with regular reviews and tailored guidance.</li>
	<li><strong>HR Strategy to Improve Productivity</strong>: We help you refine your HR processes through psychometric assessments, competency analysis, and tailored recruitment strategies to ensure the right talent is in the right position, enhancing overall organizational productivity.</li>
	<li><strong>Culture &amp; Business Transformation</strong>: FITALENTA assists in fostering a culture of innovation and entrepreneurship within your organization, driving long-term transformation through targeted programs that build both individual and team capabilities.</li>
</ul>

<p>&nbsp;</p>

<p>With over 20 years of director&rsquo;s experience in the financial sector, FITALENTA is dedicated to being a lifetime partner for companies aiming to achieve financial success through innovative training methods, strategic HR practices, and personalized business assistance. We focus on empowering people and businesses, driving growth and ensuring long-term success.</p>

<p>&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'chart-line',
                // 'icon' => 'coins',
            ],
            [
                'name' => 'Human Capital Program',
                'short' => 'PT FAST Indo Talenta (FITALENTA) connects businesses with top talent through curated, competency-based recruitment solutions. Streamline your hiring process and secure the right people for your team',
                'description' => '<h1><strong>Human Capital Program Services</strong></h1>

<p>&nbsp;</p>

<p>At PT FAST Indo Talenta (FITALENTA), we are dedicated to helping companies find, attract, and secure the best talent through our comprehensive Human Capital Recruitment services. With a focus on competency-based recruitment, we offer customized solutions to match your company&rsquo;s unique needs, whether it&#39;s filling permanent positions, internships, or outsourcing roles. Our recruitment approach is designed to streamline the hiring process, making it more efficient and effective.</p>

<p>&nbsp;</p>

<p><strong>Key Features of Our Recruitment Services:</strong></p>

<p>&nbsp;</p>

<ol>
	<li><strong>Talent Pool Access</strong>: We maintain a web-based talent database compiled through collaborations with leading universities, training institutions, and labor departments. This platform is designed to give your HR department access to a curated list of top candidates, simplifying the search for skilled individuals to meet your company&#39;s specific needs. Each candidate is thoroughly assessed and rated based on competencies, ensuring that only qualified talent is presented for consideration.</li>
	<li><strong>Customized Recruitment Schemes</strong>: FITALENTA works closely with your team to understand your business objectives and talent requirements. We then curate a pool of candidates specifically tailored to meet these needs. Our process includes company needs analysis, talent curation, and collaborative selection, where companies actively participate in interviews, tests, and assessments to ensure the best fit for their roles.</li>
	<li><strong>Flexible Recruitment Models</strong>: We offer multiple recruitment schemes to meet different needs, including:
	<ul>
		<li><strong>Internship Programs</strong>: For companies seeking fresh talent for short-term projects or training.</li>
		<li><strong>Outsourcing Services</strong>: Ideal for businesses looking to outsource specific tasks or functions.</li>
		<li><strong>Headhunting</strong>: For companies in need of highly skilled professionals or executives.</li>
	</ul>
	</li>
	<li><strong>End-to-End Support</strong>: From analyzing your company&#39;s needs to the final hiring and contract agreements, our team is with you every step of the way. We help draft contracts, assist in negotiations, and ensure that the hiring process is aligned with your business goals.</li>
	<li><strong>Collaborative International Recruitment</strong>: In addition to domestic recruitment, we have experience in international talent placement. We work with international partners to send skilled workers abroad, including collaborations in countries like Japan, Taiwan, Australia, and Kyrgyzstan. Through partnerships with language and training centers, we ensure that your talent is fully prepared for international roles.</li>
	<li><strong>Success Stories</strong>: Our successful collaborations with institutions such as Pribadi School, Labschool UPI, and Wakaf Salman ITB showcase our ability to provide tailored recruitment solutions across various industries, ensuring long-term satisfaction for both companies and candidates.</li>
</ol>

<p>&nbsp;</p>

<p>In addition to recruitment, FITALENTA offers job preparation training and competency enhancement programs that are standardized by the National Professional Certification Agency (BNSP). Our training services are easily accessible and designed to elevate the skills and qualifications of your workforce. We provide a wide range of training schemes, developed in collaboration with more than three professional BNSP certification and training institutions. These partnerships ensure that our programs are up-to-date, relevant, and effective in addressing industry needs. Below is a sample of the certifications FITALENTA provides.</p>

<p><img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXeC0GALKGIaHtZQ-F_YcuzoisQXTv4SWNlQYiLO-7eZuT0Xpabm9M3L6Zz_0W1uWR74XEYgj8kO06TkAtRU3O6hPuEtjyGBaWR-QUkEt6s-35mq4v-eRYvZ2QGd-bHifsMLruXCvD97qe6fhprWUT_cc8I?key=nR4R9axYUVwkhNVJQ6hUBA" style="height:339px; width:602px" /></p>

<p>&nbsp;</p>

<p>FITALENTA ensures that your company gets access to a reliable and well-vetted workforce that drives business growth. Whether you are looking to fill entry-level positions or find seasoned executives, our recruitment services provide the expertise and resources you need to succeed in today&rsquo;s competitive market.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                // 'icon' => 'chart-line',
                'icon' => 'people-group',
            ],
            // [
            //     'name' => 'Next Level Eduventures',
            //     'description' => 'Specialized training programs designed to enhance skills and knowledge in various aspects of the financial industry.',
            //     'price' => 5000000,
            //     'duration' => '5 days',
            //     'is_featured' => true,
            //     'icon' => 'chart-line',
            // ],
            [
                'name' => 'Next Level Eduventures',
                'short' => 'Elevate your education and career with FITALENTA&#39;s Next Level EduVentures Program, offering personalized guidance for university admissions, international study, and work opportunities. Explore global possibilities today',
                'description' => '<h1><strong>Next Level EduVentures Program</strong></h1>

<p>&nbsp;</p>

<p>At PT FAST Indo Talenta (FITALENTA), we are committed to enhancing the quality of education for students and professionals alike through our <strong>Next Level EduVentures Program</strong>. This initiative is designed to support educational development by offering a wide range of services that cater to the evolving needs of learners at every stage, from admissions guidance to international work and study consultations.</p>

<p>&nbsp;</p>

<p>Our services include:</p>

<ol>
	<li><strong>New Student Admissions Support</strong>: We assist students in navigating the complex process of university applications, ensuring they are well-prepared to gain acceptance into their desired institutions. Our team provides expert advice on choosing the right programs, preparing necessary documents, and meeting academic requirements.</li>
	<li><strong>Edu Trips and Edu Camps</strong>: FITALENTA organizes educational trips and immersive edu camps to provide students with hands-on learning experiences in various fields. These programs are designed to foster practical knowledge and real-world exposure, enabling participants to bridge the gap between theoretical learning and professional practice.</li>
	<li><strong>Language Centers for Mandarin and Japanese</strong>: To equip students for global opportunities, we offer language programs specializing in Mandarin and Japanese. These language centers focus on building proficiency to help students and professionals succeed in international environments, particularly in countries like Japan and China.</li>
	<li><strong>Work and Study Abroad Consultation</strong>: FITALENTA provides personalized consultation services for those looking to work or study abroad. Through partnerships with institutions in Japan, Australia, Taiwan, Kyrgyzstan, and Finland, we help students and professionals explore and secure international opportunities. Our comprehensive support includes visa guidance, university applications, and job placements, ensuring a smooth transition to international environments.</li>
</ol>

<p>&nbsp;</p>

<p><strong>International Opportunities</strong>: Through our extensive network, we connect individuals to a variety of educational and career opportunities in leading global markets, including Japan, Australia, Taiwan, Kyrgyzstan, Finland, and So on. Our team collaborates with top language and training centers to ensure that participants are fully prepared for their journey abroad.</p>

<p>&nbsp;</p>

<p>By leveraging our expertise and global partnerships, FITALENTA&rsquo;s <strong>Next Level EduVentures Program</strong> helps learners enhance their educational experience and achieve their academic and career goals, both locally and internationally.</p>

<p><br />
&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'person-arrow-up-from-line',
            ],
            [
                'name' => 'Business Affiliate',
                'short' => 'FITALENTA&#39;s Business Affiliate Program connects talented freelancers with companies to boost sales and drive growth through structured training, competitive commissions, and expert coaching. Discover how we can help you achieve your business or career goals',
                'description' => '<h1><strong>Business Affiliate Program</strong></h1>

<p>&nbsp;</p>

<p>PT FAST Indo Talenta (FITALENTA) presents a unique solution for both individuals seeking flexible freelance opportunities and companies aiming to boost their sales and marketing efforts. Our <strong>Business Affiliate Program</strong> connects talented freelancers with businesses in need of sales support, creating a mutually beneficial ecosystem that empowers both sides to succeed.</p>

<p>&nbsp;</p>

<h1><strong>For Talents: Freelance Sales and Marketing Opportunities</strong></h1>

<p>&nbsp;</p>

<p>FITALENTA&rsquo;s <strong>Business Affiliate Program</strong> offers an excellent opportunity for individuals who want to work as freelance sales and marketing professionals. By joining the program, affiliates will:</p>

<ul>
	<li><strong>Receive Structured Training</strong>: Freelancers are equipped with the skills they need to succeed through a comprehensive training program, tailored to provide essential sales and marketing expertise.</li>
	<li><strong>Earn Competitive Commissions</strong>: Freelancers can enjoy competitive commissions for their sales efforts, giving them strong earning potential based on performance.</li>
	<li><strong>Access Ongoing Coaching</strong>: To ensure continued growth and success, our affiliates benefit from personalized coaching by experienced sales experts who provide guidance, support, and best practices in sales strategy and execution.</li>
</ul>

<p>This program is perfect for those looking for flexible work arrangements with the ability to manage their own time while receiving the tools they need to succeed in the competitive sales industry.</p>

<p>&nbsp;</p>

<h1>&nbsp;</h1>

<h1><strong>For Companies: Expanding Sales Capacity</strong></h1>

<p>Companies can leverage FITALENTA&rsquo;s <strong>Business Affiliate Program</strong> to access a highly trained and motivated freelance sales force. By working with our affiliates, businesses can:</p>

<ul>
	<li><strong>Boost Sales Efforts</strong>: Companies can significantly enhance their sales operations by utilizing a dedicated team of affiliates focused on driving product sales and expanding market reach.</li>
	<li><strong>Outsource Sales and Marketing</strong>: FITALENTA&rsquo;s program allows businesses to outsource their sales functions to experienced professionals without the overhead costs of hiring full-time staff, providing a cost-effective solution.</li>
	<li><strong>Flexibility and Scalability</strong>: Businesses can scale their sales efforts easily by adjusting the number of affiliates based on market demand, enabling them to quickly respond to changing business needs.</li>
</ul>

<p>This approach is ideal for businesses seeking to increase sales efficiency and market penetration while maintaining flexibility in their operations.</p>

<p>&nbsp;</p>

<h1>&nbsp;</h1>

<h1><strong>Two Affiliate Streams</strong></h1>

<p>FITALENTA&rsquo;s <strong>Business Affiliate Program</strong> is divided into two distinct streams, each serving different sectors:</p>

<ol>
	<li><strong>Philanthropy-Based Affiliate</strong>: This stream focuses on supporting NGO partners in raising funds for social causes. FITALENTA works closely with non-profit organizations to help them reach their fundraising targets by mobilizing freelance affiliates to promote and gather donations for charitable programs. Freelancers in this stream contribute to impactful causes while earning commissions, creating a win-win scenario for both the NGO and the affiliate.</li>
	<li><strong>Business-Based Affiliate</strong>: This stream is designed for companies seeking to sell products and services. FITALENTA has partnered with leading industries such as banking, insurance, and international express shipping. Our affiliates help drive product sales by reaching out to new and existing markets, ensuring that businesses can grow their customer base effectively. As FITALENTA continues to expand, we remain open to new partnerships, offering businesses a flexible and scalable solution to meet their sales targets.</li>
</ol>

<p>&nbsp;</p>

<hr />
<p>Whether you are an individual looking for rewarding freelance work or a company seeking to enhance your sales and marketing efforts, FITALENTA&rsquo;s <strong>Business Affiliate Program</strong> offers the ideal platform. Our program delivers professional support, training, and scalable solutions that help you achieve your goals efficiently.</p>

<p><strong>Get in touch today to learn more about how FITALENTA&rsquo;s Business Affiliate Program can empower you!</strong></p>

<p><br />
&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'business-time',
            ],
            [
                'name' => 'Branding and Marketing Program',
                'short' => 'FITALENTA&#39;s Branding & Marketing Program offers exclusive seminars, webinars, and workshops to help you grow your skills, network with industry leaders, and explore global opportunities. Elevate your career or organization',
                'description' => '<h1><strong>Branding &amp; Marketing Program</strong></h1>

<p>&nbsp;</p>

<p>PT FAST Indo Talenta (FITALENTA) offers an exciting array of programs designed not only to provide valuable insights and skills but also to strengthen our branding and connection with the community. Our <strong>Branding &amp; Marketing Program</strong> consists of three core initiatives, each tailored to help individuals and organizations gain access to cutting-edge knowledge and networks, while also enhancing FITALENTA&rsquo;s presence in the business ecosystem.</p>

<p>&nbsp;</p>

<h3><strong>1. C-Level Share and Talk Series</strong></h3>

<p>&nbsp;</p>

<p>Our <strong>C-Level Share and Talk (CLST) Series</strong> provides a unique opportunity for participants to engage directly with C-Level executives from various industries. These sessions offer valuable insights into the latest trends, challenges, and opportunities in the current business and labor ecosystem. Attendees can gain first-hand knowledge about what it takes to succeed in multinational companies, enhance their professional network, and even receive discounts on FITALENTA&rsquo;s career services. Each session includes e-certificates and is designed to provide actionable takeaways that can help participants accelerate their career paths.</p>

<p>&nbsp;</p>

<p>Our last CLST Series Program program:</p>

<p><img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdv9_-vqr71-m7IF5VRkZjH7GlnI8_YjcOQUnvGtRNNp_hZ-VL4FF7ycLNYoT9nqoYsbF3jEkWPOREzoAYjipywbyrVHLOCuJbAk7Pi3hfm7CL6j_WAUAXeNvIxuz0tICfZPgjkj8W4k2KvjhlDbu2ix5I?key=c11AFijXk0P_9sTHUjhJaQ" style="height:393px; width:393px" /></p>

<p>&nbsp;</p>

<h3><strong>2. Work and Study Abroad Series</strong></h3>

<p>&nbsp;</p>

<p>FITALENTA&rsquo;s <strong>Work and Study Abroad (WSA) Series</strong> is a platform for individuals interested in exploring global educational and career opportunities. Through seminars and webinars, we provide access to information on scholarships, study programs, internships, and work placements abroad. This program is ideal for students and professionals looking to gain international experience. With detailed presentations from global consultants, such as opportunities in Taiwan and beyond, participants are guided step-by-step through the application process and receive crucial advice for their career development.</p>

<p>&nbsp;</p>

<p>Our last WSA Series Program program</p>

<p><img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXcaQl2r0S0S6oSLV4QrqOWEVoAgARp4joi9jcgdMaj1UE9p0e_ZGu8djcPaFOEZBQI5SgzDg3eaupkSG2tEkTpYlloJsorsTUEEmdcVCosPDWsyKP45MFEXmf3haHGlcZYko8eYnlnCXZdBJd9F3ZPF7oZc?key=c11AFijXk0P_9sTHUjhJaQ" style="height:503px; width:504px" /></p>

<p>&nbsp;</p>

<h3><strong>3. FITALENTA Career Catalyst Series</strong></h3>

<p>&nbsp;</p>

<p>The <strong>FITALENTA Career Catalyst (FCC) Series</strong> is designed to help individuals sharpen both foundational and expert-level skills needed for today&rsquo;s competitive job market. These seminars, webinars, and workshops cover a wide range of topics, from personal development to advanced technical skills. Participants will walk away with actionable knowledge, valuable certifications, and special discounts on additional FITALENTA services. This series also serves as an excellent opportunity for networking, allowing attendees to connect with peers and experts across various industries.</p>

<p>&nbsp;</p>

<p>Our last FCC Series Program:</p>

<p><img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXeDWsSJKND3zT0ZFASO1_kDGLHU4meaSM15IzSxwOS527w5rDQeTSGG820ndX1gUOoALGEiiTpgi-B0Pk8D2DxMN6eoLuP_8_jy2XwCi_gOTUyC1dZaPA3dKu2NIuiR2XAKdHoSR2kYcPOREfp8EaFwF4_1?key=c11AFijXk0P_9sTHUjhJaQ" style="height:404px; width:404px" /></p>

<p>&nbsp;</p>

<hr />
<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Why Join the FITALENTA Ecosystem?</strong></p>

<p>These programs are more than just events; they are gateways to personal and professional growth. Whether you&#39;re an individual looking to expand your skills, a student eager to explore global opportunities, or a professional seeking valuable networking with industry leaders, the FITALENTA <strong>Branding &amp; Marketing Program</strong> is for you. Participants receive certificates, access to exclusive career services, and significant insights that can give them a competitive edge in the workforce.</p>

<p>For <strong>universities and organizations</strong>, these programs offer a perfect avenue for branding and creating added value for students and employees. Through our events, institutions can access non-regular programs that enhance their students&rsquo; employability and exposure to global opportunities.</p>

<p>&nbsp;</p>

<hr />
<p><strong>Be a Part of FITALENTA&rsquo;s Ecosystem</strong></p>

<p>Don&rsquo;t miss out on the chance to elevate your career, grow your network, and become part of FITALENTA&rsquo;s ever-expanding ecosystem. Whether you&rsquo;re an individual looking to enrich your skill set or an organization wanting to provide your students or employees with unique learning experiences, FITALENTA is your partner for success. <strong>Join us today and unlock new opportunities for growth and development!</strong></p>

<p><br />
&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'store',
            ],
            [
                'name' => 'Event Organizer',
                'short' => 'FITALENTA offers professional event organizer services, handling everything from planning to execution to ensure your event&#39;s success. Let us help bring your event to life',
                'description' => '<h1><strong>FITALENTA Event Organizer Services</strong></h1>

<p>&nbsp;</p>

<p>PT FAST Indo Talenta (FITALENTA) is dedicated to ensuring the success of your organization&#39;s events by providing professional event organizer services from planning to execution. Our comprehensive support guarantees that your event runs smoothly, allowing you to focus on the core objectives while we manage the logistics, coordination, and implementation.</p>

<p>&nbsp;</p>

<p>FITALENTA has experience organizing a wide range of events, including corporate, educational, and entrepreneurial programs. One of the flagship events currently managed by FITALENTA is the <strong>Salman Technopreneur Academy</strong>, a prestigious program aimed at fostering world-class technopreneurs. This ongoing project exemplifies our ability to handle large-scale, impactful events with precision and professionalism.</p>

<p>&nbsp;</p>

<p><strong>Our Event Organizer Services Include:</strong></p>

<ul>
	<li><strong>Comprehensive Planning</strong>: From initial concept development to detailed event schedules, we work with you to plan every aspect of your event.</li>
	<li><strong>Seamless Execution</strong>: FITALENTA ensures that your event is executed flawlessly, with experienced teams handling all logistics, technical aspects, and coordination.</li>
	<li><strong>Customized Solutions</strong>: Whether it&#39;s a corporate gathering, an educational seminar, or a large entrepreneurial event, FITALENTA tailors its services to meet the specific needs of your organization.</li>
</ul>

<p>&nbsp;</p>

<p>By partnering with FITALENTA, you gain access to a trusted event organizer that prioritizes your event&rsquo;s success. We are committed to delivering memorable and impactful events that achieve your goals and leave a lasting impression on your audience.</p>

<p>&nbsp;</p>

<p>Let us help bring your next event to life&mdash;<strong>contact us today</strong> to learn more about how FITALENTA can assist you with your event organizing needs!</p>

<p><br />
&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'calendar-days',
            ],
            [
                'name' => 'STEMSpark',
                'short' => 'STEMSpark by FITALENTA offers exciting STEM education programs for SD-SMA students, from Scratch coding to drone training and national-level competitions. Unlock the future of technology for your students',
                'description' => '<h1><strong>STEMSpark by FITALENTA</strong></h1>

<p>&nbsp;</p>

<p>FITALENTA is proud to introduce <strong>STEMSpark</strong>, an innovative educational service designed to support STEM (Science, Technology, Engineering, and Mathematics) education for students in elementary, middle, and high schools (SD-SMA). Through <strong>STEMSpark</strong>, we provide expert educators and comprehensive curricula to equip the next generation with vital technical skills and knowledge in emerging technologies.</p>

<p>&nbsp;</p>

<h3><strong>Comprehensive STEM Education Programs</strong></h3>

<p>&nbsp;</p>

<p>At <strong>STEMSpark</strong>, we offer a wide range of courses tailored to meet the needs of students across various educational levels:</p>

<ul>
	<li><strong>Scratch Programming</strong>: Perfect for younger students, Scratch introduces the basics of coding in a fun, interactive way.</li>
	<li><strong>Python Programming</strong>: As students advance, we offer Python courses to help them build a strong foundation in one of the most popular programming languages in the world.</li>
	<li><strong>Cybersecurity</strong>: For high school students, we offer cybersecurity education, introducing them to the critical concepts needed to protect data in an increasingly digital world.</li>
</ul>

<h3>&nbsp;</h3>

<h3><strong>National-Level Competitions</strong></h3>

<p>&nbsp;</p>

<p>In addition to regular courses, <strong>STEMSpark</strong> hosts the <strong>Indonesian Scratch Competition</strong>, an annual national event that brings together young talents from across the country to showcase their coding skills. This competition, officially recognized by the Ministry of Education and Culture of Indonesia, provides students with a platform to challenge themselves and gain national recognition for their abilities. Participation in these competitions is an excellent way for students to apply their skills in real-world scenarios while competing at a national level.</p>

<p>&nbsp;</p>

<h3><strong>Drone Technology Integration</strong></h3>

<p>&nbsp;</p>

<p>To further enhance STEM learning, <strong>STEMSpark</strong> also includes <strong>Drone Training</strong>, where students learn how to operate drones and explore the technology behind them. This hands-on experience introduces students to new frontiers in technology, from aerial photography to the future of delivery systems.</p>

<p>By integrating drone technology into our STEM curriculum, we aim to ignite students&rsquo; curiosity about the potential of technology in solving modern-day challenges, making their learning experience both engaging and practical.</p>

<p>&nbsp;</p>

<h3><strong>Why Choose STEMSpark?</strong></h3>

<p>&nbsp;</p>

<p>At <strong>STEMSpark</strong>, we are committed to developing future leaders in technology and innovation by:</p>

<ul>
	<li>Providing high-quality STEM education at every level, from Scratch programming to advanced cybersecurity.</li>
	<li>Offering nationally recognized competitions that give students the chance to shine.</li>
	<li>Equipping students with practical knowledge through hands-on courses, like drone operation.</li>
	<li>Preparing students for the future by developing essential skills for tomorrow&#39;s workforce.</li>
</ul>

<p>Our programs are designed to foster creativity, critical thinking, and problem-solving skills, all of which are crucial in today&rsquo;s rapidly evolving technological landscape.</p>

<p>&nbsp;</p>

<hr />
<p><strong>Join STEMSpark Today!</strong> Whether you&rsquo;re a school looking to enhance your curriculum or a student eager to dive into the world of STEM, <strong>STEMSpark</strong> offers the tools, knowledge, and experiences you need to succeed. <strong>Contact us today</strong> to learn more about how we can help bring the future of technology into your classroom!</p>

<p><br />
&nbsp;</p>
',
                'price' => null,
                'duration' => 'Varies',
                'is_featured' => true,
                'icon' => 'group-arrows-rotate',
            ],
        ];

        foreach ($mainServices as $service) {
            Service::create($service);
        }
        // Create some additional services
        // Service::factory()->count(1)->create();
    }
}
