-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2021 at 11:47 AM
-- Server version: 5.7.34-log
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntanswed_nta`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_summery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `blog_title`, `blog_slug`, `category_id`, `blog_summery`, `blog_details`, `thumbnail`, `created_at`, `updated_at`) VALUES
(10, 6, 'Let\'s Enter into The World of Beauty with Certificate IV in Beauty Therapy', 'let-s-enter-into-the-world-of-beauty-with-certificate-iv-in-beauty-therapy', 3, 'The beauty industry has become a global industry that is progressing rapidly. The use of cosmetics nowadays has rather become an obligation to look presentable for a good impression on people.', '<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">The beauty industry has become a global industry that is progressing rapidly. The use of cosmetics nowadays has rather become an obligation to look presentable for a good impression on people. Moreover, maintaining a proper, clean, and tidy lifestyle is a key element for sound health, mind, and body. It has also become an essential part of our daily life to take care of our skin. As good skin reflects our personality and our hygiene.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Humans have been grooming themselves in one form or another since they first arrived on the planet. The concept behind beauty therapy has links with the earliest civilizations. Although there have been alterations in styles and fashions, Cosmetic treatments continued to be prominent throughout history.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Beauty therapy is generally known as the application of beauty treatments. Like any great career, beauty therapy starts with a robust educational foundation. It has been in practice for ages. With time and technical availabilities, beauty therapy has been modernized.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">In the context of Australia, the beauty industry is ahead of time. One of the RTO which avails Certificate IV in Beauty Therapy is Noble Training Academy (NTA). It is a privately operated Registered Training Organisation providing courses within Australia. It offers a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\"><a href=\"../../certificate-iv-in-beauty-therapy\">Beauty therapy training</a> at Noble Training Academy (NTA) is developed to ensure that the graduates learn skills that are relevant to the needs of employers and clients in the beauty industry.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">The Certificate IV in Beauty Therapy course is nationally recognized training that maps the information related to Beauty Therapy and the essentials.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">In this course, students can learn from our team of professionals how to provide a range of beauty services including waxing, manicure, and pedicure, lash and brow treatments, spray tanning, and make-up.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">This course includes training in demonstrating and selling retail skincare and cosmetic products. The students can also learn about safe hygiene and work practices and environmental sustainability.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">It enables the students to learn through a combination of classroom and hands-on practical exercises, plus completing a practical placement in a salon of their choice. They can graduate with the technical and customer service skills needed to work as a competent beauty therapist.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">People who undertake this course, work independently, with limited guidance from seniors or mentors, to perform routine and non-routine activities, and solve non-routine problems. They put in and accommodate technical skills and knowledge, and use judgment within the provision of beauty treatments and services. These individuals are liable for their own outputs and supply limited guidance to others.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">People who possess the following attributes like reliability, are friendly and caring with a positive attitude and self-motivation also having no allergies to beauty products, well-presented with good communication skills, excellent time, and stress management skills are the best fit for this industry.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">This course comprises 19 units that must be completed in order to get the certification. Out of which, 13 are core units and, 6 are elective units.</span></p>', '060521-020548.jpg', '2020-11-18 02:12:58', '2021-05-31 10:08:22'),
(11, 6, 'Want to Beautify from Head to Toe? Get Diploma in Beauty Therapy', 'want-to-beautify-from-head-to-toe-get-diploma-in-beauty-therapy', 2, 'It is known that beauty remains in the eyes of the beholder. Thereby there’s no need to toggle God’s creation. It might be a good practice to abide by such a statement but not always implementable.', '<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">It is known that beauty remains in the eyes of the beholder. Thereby there&rsquo;s no need to toggle God&rsquo;s creation. It might be a good practice to abide by such a statement but not always implementable. It is always required for everyone to be presentable be it in the workplace or for personal hygiene maintenance, taking care of your body and skin is key for a healthy mind and body.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Well in this growing age of technologies, there has been a rapid proliferation in the Cosmetic Industry too. Beauty therapy relates to the provision and application by well-trained beauticians of a wide range of treatments and cosmetic methods.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">The early research proves that the concept of beauty therapy dates back to ancient Greek and Egyptian civilizations, wherein beauty treatments were carried out.&nbsp; The use of skin creams and oil treatments were commonplace during these eras as evidence of their usability as suggested by archeologists. Both males and females used to wear cosmetics during this time, including eyeliner.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Cosmetic treatments continued to be well-known throughout history, albeit there have been periods when any sort of beauty regimen was pondered unrighteous, especially during more holy eras.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">According to the Australian Government\'s Job Outlook service, the Cosmetic industry is currently growing exponentially with around 25,000 vacancies expected over the following five years. Companies are looking for professionals who are responsible, well-groomed and communicate well with others.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Established in 2016, Noble Training Academy (NTA) is a privately operated Registered Training Organisation providing courses within Australia. It offers a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\"><a href=\"../../diploma-in-beauty-therapy\">Beauty therapy training</a> at Noble Training Academy (NTA) is developed to ensure that the graduates learn skills that are relevant to the needs of employers and clients in the beauty industry.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">This course provides advanced skills in beauty therapy. Students get the chance to find out from an expert team of executives who understand the industry and its requirements by maintaining strong connections. It is designed to provide education in the fundamentals of the skin along with all-important practical and diagnostic skills, allowing you to be proficient in performing a wide range of specialized facial and body treatments.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Students can acquire real-world learning environments by putting theory into practice. With access to real industry-standard professional centers as their classroom, they can graduate confidently, knowing their own potential.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">The course gives training in basic and advanced beauty therapy techniques and services including facial treatments, lash and brow treatments, manicures and pedicures, make-up, waxing, body massage and treatments, spa treatments, tan application, electrolysis treatments, hot stone and oil massages advice on and selling of retail skincare and cosmetic products.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">The beauty industry is ideal for anyone who wants an easy-going and fun lifestyle. Working hours will depend upon the work location. In a salon, spa, or retail environment, one may need to work evenings and weekends. If one establishes their own business, they will have more flexibility in their working hours. However, they will need to be available at times that suit their clients &mdash; which are often outside normal business hours.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">Successful completion of this course will offer individual specialized skills. Businesses within the beauty industry always search for ready to upgrade your career as a senior beauty therapist.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400; font-family: georgia, palatino, serif;\">These individuals work relatively autonomously and are in control of personal outputs. Their work involves the self-directed application of data and skills with substantial depth in some areas where judgment is required in planning and selecting appropriate equipment, services, and techniques. Work is often conducted in beauty salons and spas.</span></p>', '060521-020538.jpg', '2020-11-18 02:50:53', '2021-05-31 10:06:43'),
(13, 6, 'Want to Relax Your Clients? Take Diploma of Remedial Massage Course!', 'want-to-relax-your-clients-take-diploma-of-remedial-massage-course-1', 2, 'Don’t we all need relaxation at least once a week to completely free ourselves from daily activities and stress which in turn affects the physical as well as mental wellbeing? Certainly, we do.', '<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Don&rsquo;t we all need relaxation at least once a week to completely free ourselves from daily activities and stress which in turn affects the physical as well as mental wellbeing? Certainly, we do. For that purpose, remedial therapy comes to an individual&rsquo;s rescue. As it provides the individual with aesthetic experience. The people providing this therapy have years of experience in this field thus satisfying their customers with utmost relaxation which goes beyond their level of expectations.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The <a href=\"../../diploma-in-remedial-massage\">Diploma of Remedial Massage course</a> is tailored to impart the knowledge and practical skills to be a remedial massage therapist. Remedial massage is utilizing massage as a form of applied remedy to musculoskeletal ailments.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">From Australian perspectives, Remedial Therapy is regarded as a highly qualified certification for anyone involved in this field. Out of countless institutions providing remedial massage therapy courses, the diploma of Remedial Massage Therapy in Noble Training Academy is getting renowned in this field.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Established in 2016, <a href=\"../../\">Noble Training Academy</a> is a privately operated Registered Training Organisation. The courses are provided within Australia. They offer a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry. NTA is dedicated </span><span style=\"font-weight: 400;\">to their duty as nationally recognized training providers, they empower their students with the right blend of theoretical and pragmatic knowledge.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The teaching approach is designed to train the therapist to understand the anatomical body to a depth whereby they can determine variations from normal health status. The emphasis is then placed on using a blend of specific musculoskeletal assessment techniques and specialist hand skills to apply a remedial treatment aimed at addressing the cause. The motive is to work on improving health and not just providing relief!&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">An individual taking this course can learn advanced massage techniques to treat a variety of injuries, assess and treat clients with soft tissue dysfunction,&nbsp; Relaxation Massage, Deep Tissue Massage, Sports Massage, Joint Loosening, Stretching musculoskeletal imbalance, or motion restrictions, and can also develop a comprehensive treatment plan using specialist massage techniques. This course gives the students practical skills in remedial massage, which uses massage, stretching, and associated techniques to improve wellness, health, and relaxation. They can gain experience with real clients as well.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The consequences of the Diploma of Remedial Massage (HLT52015) course involve the capability to assess posture, muscular imbalances, and mobility using recognized testing protocols, understanding of remedial massage treatments to raise movement, oversee pain and strengthen recovery from exercise. Moreover, practical skills in the running of a massage business and practice, implementation of injury prevention strategies for clients engaging in sport and exercise. It develops skills to cater to massage services for specific population groups including pregnant clients, the elderly, and athletes. It also involves engagement with other medical and allied health professionals.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">The graduates can work as a remedial massage therapist in the following areas: self-employed as an independent remedial therapist, multi-disciplinary practice as part of a team of other allied health practitioners, hospitals, aged care facilities, and other health organizations, gyms, or sporting clubs, and health spas.</span></p>', '060521-020529.jpg', '2020-11-18 03:01:14', '2021-05-31 10:11:01'),
(14, 6, 'Want to be a Professional STYLIST? Get Certificate III in Hairdressing!', 'want-to-be-a-professional-stylist-get-certificate-iii-in-hairdressing', 5, 'Hairdressing is an occupation that has intrigued both male and female practitioners. Dating back in time, male hairdressers (often called barbers) predominantly served the male customers and women served the female customers.', '<p><span style=\"color: #000000;\">Hairdressing is an occupation that has intrigued both male and female practitioners. Dating back in time, male hairdressers (often called barbers) predominantly served male customers and women served female customers. But, lately, in modern times, such distinctions have become less rigid.</span></p>\r\n<p><span style=\"color: #000000;\">In accordance with the Australian Government\'s Job Outlook, hairdressing skills are in demand with employers finding it hard to fill vacancies. The industry is currently experiencing vigorous development with more than 31,000 job openings anticipated over the next five years.</span></p>\r\n<p><span style=\"color: #000000;\">If someone dreams of being a hairstylist or owning their own salon or is simply enthusiastic about exploring a dynamic career in hairdressing that will enhance their creativity and accelerate their skills to perfection, the Certificate III in Hairdressing course is the right fit for them.&nbsp;</span></p>\r\n<p><span style=\"color: #000000;\">Established in 2016, <a href=\"../../\">Noble Training Academy</a> is a privately operated Registered Training Organisation. The courses are provided within Australia. They offer a range of nationally recognised qualifications from Certificate III to Diploma level in the beauty industry.</span></p>\r\n<p><span style=\"color: #000000;\">Dedicated to their duty as a nationally recognised training provider, they empower their students with the right blend of theoretical and pragmatic knowledge. The NTA hairdressing team is a cut above the rest and will help individuals pursue a career in this exciting industry.</span></p>\r\n<p><span style=\"color: #000000;\">An individual can learn skills in designing and applying a wide span of technical hairdressing services including cutting, styling, colouring, perming, and straightening.&nbsp;</span></p>\r\n<p><span style=\"color: #000000;\">It is recommended that individuals set on the path to a successful career in hairdressing with this entry-level qualification. Students can earn the practical skills to confidently seek employment in a hair salon as a hairdresser.</span></p>\r\n<p><span style=\"color: #000000;\">It is also advisable to learn modern salon operations including colouring and lightening hair, providing shampoo and basin services, and designing and cutting hair. All of this will take place in the classroom and real functioning professional salon environments too.</span></p>\r\n<p><span style=\"color: #000000;\">Some talented individuals possessing good hands can fast track their way to a formal qualification by earning credit for the things they already know. Getting recognition for the skills that they have gained from the workplace or previous learning means less study time for them, and getting the paper to prove that they are qualified a whole lot sooner. Students can assess their skills by directly applying for credits from the previous successful study, and get advanced standing in their course.</span></p>\r\n<p><span style=\"color: #000000;\">This qualification equips an individual with practical skills in design and style, foundation colour, hair and scalp treatments, long hair design, protein treatments, and straightening, men&rsquo;s grooming, advanced cutting, and colour techniques.</span></p>\r\n<p><br /><span style=\"color: #000000;\">This industry-standard solution is equipped with the newest equipment. The salon provides the ideal training environment to practise the student&rsquo;s acquired skills while expert trainers teach, supervise, and guide them. They can also gain valuable experience arranging bookings and in customer service as the qualified, industry experts will also teach students to consult with clients, promote products and services.</span></p>\r\n<p><span style=\"color: #000000;\">On completion, individuals can have the confidence and skills to provide a variety of hairdressing services and begin their career as <a href=\"../../certificate-iii-in-hairdressing\">qualified hairdresser</a>. They can also have the knowledge to treat hair, build confidence, and indulge their client, and create looks that will turn heads.</span></p>', '060521-020512.jpg', '2020-11-24 03:18:43', '2021-05-31 10:10:33'),
(17, 6, 'Do You Want to be A Beautician Rather Than A Doctor? Know The Competition', 'do-you-want-to-be-a-beautician-rather-than-a-doctor-know-the-competition-1', 6, 'It might surprise you if anyone tells you about choosing to be a Beautician rather than a Doctor.', '<p style=\"text-align: justify;\">It might surprise you if anyone tells you about choosing to be a Beautician rather than a Doctor. Here, presenting some of the finest reasons why should an individual choose the career path of being a Beautician over a Doctor.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>Fast Entry into the Market:</strong> When you enter into the beauty industry by getting enrolled in a related course, it doesn\'t consume much of an individual&rsquo;s time to get qualified and earn the certification. Moreover, individuals can get a license within the timeframe of one year or less. Whereas if an individual were a doctor, it requires them to first complete the mandatory 5 years long course then specialize in Dermatology for another 2 - 3 years.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>Work with People from various backgrounds:</strong> Beauticians are not limited to just salons and therapy centers. If one has good hands-on techniques, they can work with famous celebrities. More or less every celebrity has their own beautician that they rely on. Celebrities like to consult with their personal preferred beauticians to toggle some of their features rather than getting an appointment with a doctor because getting an appointment with a good dermatologist is pretty time-consuming.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>One can earn a handsome amount</strong>: Beauty is all about money in today&rsquo;s world. When an individual works as a beautician, the work context leads them towards successful career build up in the industry generating better income. Moreover, if an individual does a good job at work it open doors to repeat customers, referrals, and tips as well. Although a doctor&rsquo;s charge is more than compared to that of a beautician, people nowadays trust the beauticians and when they have repeated customer they can rather have a good amount of earnings.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>Fun Working Environment:</strong> The job is rather fun with a relaxing working environment. To add on, individuals get to work in the field that they really love. The work allows the individual to play around toggling with different colors and textures. As well as permit individuals to sharpen their skills. Whereas Doctor&rsquo;s life is quite mundane and they need to apply only the taught skills, pretty restricted.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>Flexible Schedule:</strong> The working schedules are rather flexible which allows individuals to work full-time, part-time, day shifts, night shifts, and on weekends as per their preferences. Thus individuals have the opportunity to work alongside their studies. This flexibility is not possible for doctors. They need to maintain their routine works and be on their duties or sometimes rush to the workplace if there&rsquo;s an emergency.</p>\r\n<p style=\"padding-left: 40px; text-align: justify;\"><strong>Work as an entrepreneur:</strong> A certified beautician has the freedom to set up their own business and enjoy being their own boss rather than working under another person&rsquo;s supervision after getting the certificate from a verified institution. In terms of medical studies, even after completing their studies, it is required for them to work under supervision for a longer period to earn the required training to set up their own chambers.</p>\r\n<p style=\"text-align: justify;\">In the context of Australia, the beauty industry is progressing day by day. One of the RTO which avails <a href=\"../../certificate-iv-in-beauty-therapy\">Certificates in beauty courses</a> is Noble Training Academy (NTA). It is a privately operated Registered Training Organisation that gives certificates within Australia in beauty-related courses. It offers a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry.</p>\r\n<p style=\"text-align: justify;\">The training at <a href=\"../../\">Noble Training Academy (NTA)</a> is developed to ensure that the graduates learn skills that are relevant to the needs of employers and clients in the beauty industry.&nbsp;</p>\r\n<p style=\"text-align: justify;\">So, if an individual is still in a dilemma between choosing their career as a beautician and a doctor then they must give a thought to the abovementioned reasons which will help them to decide.</p>', '060521-020558.jpg', '2020-12-17 02:08:40', '2021-05-31 10:09:53'),
(20, 6, 'Did You Know Healthy Hair is the Motto of A Healthy Lifestyle?', 'did-you-know-healthy-hair-is-the-motto-of-a-healthy-lifestyle-1', 2, 'Many times, individuals decide to chop off their long locks for that stylish short look, but then they instantly regret it.', '<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Many times, individuals decide to chop off their long locks for that stylish short look, but then they instantly regret it. Or maybe one day an individual decides to cut their own bangs, but unfortunately, they don&rsquo;t end up with the Brigitte Bardot look they were hoping for! Whether it&rsquo;s a crazy quarantine haircut that one now regrets, or one just wants to rock long silky hair, these tips are the best possible way to grow hair out healthy, and fast!&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><strong>Vitamins</strong></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../blogImages/1620293486.jpg\" alt=\"\" width=\"550\" height=\"402\" /></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">It&rsquo;s no secret vitamins are good for an individual&rsquo;s body,&nbsp; so why wouldn&rsquo;t they be great for the hair?&nbsp; If anyone is a busy mom and can&rsquo;t eat an enriched diet loaded with vitamins, then they need to grow their hair, opt into some hair vitamins. Among various available nutritions, Hum nutrition hair sweet air is vegan gummies and contains vitamins and minerals such as biotin, b12, and zinc which are essential for growing out those luscious locks quickly.</span></p>\r\n<p style=\"text-align: justify;\"><strong>Getting trims</strong></p>\r\n<p style=\"text-align: center;\"><img title=\"little-girl-with-long-blonde-hair-getting-her-hair-T4UQMKB.jpg\" src=\"../../blogImages/1620293677.jpg\" alt=\"\" width=\"550\" height=\"366\" /></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">While it&rsquo;s a myth that hair will grow faster with trims, what can happen is that the hair will grow stronger with each trim. If one avoids cutting their hair then the ends of the hair will split like tiny branches, making the length at the bottom look almost see-through making the hair have weak ends. If one definitely wants long, but also healthy and strong hair, getting trims often is a must!</span></p>\r\n<p style=\"text-align: justify;\"><strong>Hair masque</strong></p>\r\n<p style=\"text-align: center;\"><img title=\"hairstylist-washing-clients-hair-in-barber-shop-PCLWRVC.jpg\" src=\"../../blogImages/1620293694.jpg\" alt=\"\" width=\"550\" height=\"366\" /></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Most people must have used a mask for their face, to give their skin that extra pampering. Why not do the same for the hair? Using a masque can moisturize and strengthen the hair, which will help an individual\'s hair grow quicker and healthier. To achieve the ultimate long hair goals it is recommended to use a hair masque once a week or every 3-4 shampoos. If anyone notices their hair starting to fall flat after using a masque, they shouldn&rsquo;t get worried, instead, they should just spread the masques out a bit more. Moreover, If an individual is looking for a natural or more DIY style masque, coconut oil will moisturize the hair in no time!&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><strong>Healthy di</strong></p>\r\n<p style=\"text-align: center;\"><strong><img title=\"close-up-of-female-hands-measuring-waist-with-meas-PM7X4FW.jpg\" src=\"../../blogImages/1620293712.jpg\" alt=\"\" width=\"550\" height=\"550\" /></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Following a healthy diet is essential for growing long healthy hair. What an individual puts in their body reflects outside their body too, so a nutrient-rich diet leads to super healthy hair! One will want to eat foods with plenty of biotin, protein, and vitamins particularly A, C, and E. &nbsp; Foods that comprise these aspects have scientifically shown to promote hair growth and strength! Foods like eggs, spinach, fish, and nuts should be the new food staples on a person&rsquo;s hair growth journey!&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">After following these tips, there&rsquo;s no doubt that the hair will grow fast in no time! Still, if an individual is suspicious about these tips, it is suggested that s/he should take professional certifications from a reputable institute.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Out of countless colleges, <a href=\"../../\">Noble Training Academy</a> is a privately operated Registered Training Organisation that provides courses related to hairdressing and hair care within Australia. They offer a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry. The highly trained professionals at this college provide the right training to an individual to groom themselves to serve at an industrial platform so that they can earn a handsome salary.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">If an individual is interested in <a href=\"../../certificate-iii-in-hairdressing\">hairdressing courses</a> it is suggested that Certificate III in Hairdressing at Noble Training Academy(NTA) is the best course to follow up with.&nbsp;</span></p>', '060521-020541.jpg', '2021-02-14 02:32:20', '2021-05-31 10:09:00'),
(21, 6, 'Remedial Massage Vs Deep Tissue Massage! Know which is better!', 'remedial-massage-vs-deep-tissue-massage-know-which-is-better-1', 4, 'Whether an individual is experiencing muscle tension, aches and pains (acute or chronic), or just wants to iron out those back-to-work knots, a good massage session can offer them much-needed relief from stress and pain.', '<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Whether an individual is experiencing muscle tension, aches and pains (acute or chronic), or just wants to iron out those back-to-work knots, a good massage session can offer them much-needed relief from stress and pain. The only challenge they might face is which one to choose as there are many different types of massage on offer these days. People who are involved in physical activities or play professional sports are well acquainted with the terms remedial massage and deep tissue massage, both of which assist with muscle recovery and soreness. Deep tissue massage and remedial massage are frequently mixed up with or thought to be the same, but in reality, they are very contrasting. Finding out the variation between the two can help people choose the one that is right for them under particular circumstances. So, what&rsquo;s the difference, and does an individual need a remedial or deep tissue massage?</span></p>\r\n<p style=\"text-align: justify;\"><strong>Remedial Massage</strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">A remedial massage is known as a form of complementary therapy that focuses on treating a specific problem area mostly caused by postural imbalance, muscle tension, and/or soft tissue injury. This type of therapy often starts with a complete assessment of the problematic muscles, ligaments, tendons, and posture.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Remedial massage can provide relief from a wide range of muscle and joint conditions. On one hand, it can be used as general relaxation treatment, while on the other hand it is regarded as an effective treatment option for specific musculoskeletal disorders/complaints.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-weight: 400;\">Remedial massage is helpful for releasing muscle tension, postural issues, and reduced range of motion</span></li>\r\n<li><span style=\"font-weight: 400;\">Remedial massage is beneficial for relieving from lowering neck and shoulder pain</span></li>\r\n<li><span style=\"font-weight: 400;\">Remedial massage is functional in reducing chronic back pain.</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><strong>Deep Tissue Massage</strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">This type of massage is directed at the deeper tissue structures of the muscles and fascia. Albeit it relies on many of the same movements and techniques used in Swedish massage, the amount of pressure exerted is generally more intense as the therapist works to release the chronic muscle tension or knots. On several occasions, this added pressure may feel uncomfortable but is frequently known as a &ldquo;good pain&rdquo; by clients as it enhances the therapeutic benefits of the massage and helps patients recovers from chronic pain and injury. Deep tissue massage is often an all-over treatment that is not focused on a specific issue but addresses the whole body.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">In conclusion, deep tissue massage is ideal for those who are looking for a whole-body massage and the therapeutic benefits of firm pressure. On the flip side, remedial massage is a focused treatment and is ideal for those with chronic pain and injuries that require proper diagnosis and specific treatment. Remedial massage is also covered under most people&rsquo;s private health extras cover in Australia whereas deep tissue massage is not.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Out of numerous colleges, <a href=\"../../\">Noble Training Academy</a> is a privately operated Registered Training Organisation that provides a <a href=\"../../diploma-in-remedial-massage\">Diploma of remedial massage</a> course within Australia. They offer a range of nationally recognized qualifications from Certificate III to Diploma level in the beauty industry. The Diploma of Remedial Massage is designed in a manner to provide complete training in this regard. The highly trained professionals at this college give the needed training to an individual to groom themselves to serve at an industrial platform so that they can earn a good salary.</span></p>', '060521-020524.jpg', '2021-02-25 07:40:19', '2021-05-31 09:53:03'),
(22, 6, 'How RPL Influence Job Demand in Beauty Therapy Industries in Australia', 'how-rpl-influence-job-demand-in-beauty-therapy-industries-in-australia', 2, 'Let\'s find out how RPL is boosting the career to the current situation of Covid-19 in the Beauty Therapy industry in Australia.', '<p>Let\'s talk about the beauty therapy industries at a glance in this article. Undoubtedly, beauty therapy is one of the growing industries right now in Australia. If you are thinking of doing study or training as a beauty therapist, then doing long-term formal training will waste your time, money, and efforts. Getting an RPL makes those terms easier to overcome, and you will easily feel the job demand in these industries very quickly.</p>\r\n<p>Now, you have experienced in related industries for 2/3 years and want to make a career in Australia, then the use of RPL will be the best preferable choice. From the current demand in beauty industries. Anyone with less experience will also be available to apply for an RPL in the beauty industry. Right now, the need for a beauty expert is very high. If someone has proper qualifications about therapy or massages with no institutional certificates, then the candidates still allow applying for an RPL.</p>\r\n<p>Get the chance to work with some well-known therapist centers while you can collect the RPL without any educational Qualifications. Let\'s discuss further words to know more about this job\'s demand and how RPL has influenced in Beauty industry in Australia.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>What is the Covid-19 situation in the Beauty industries in Australia?</strong></p>\r\n<p>In this current situation of Covid-19, the growth of beauty industries fell and went out of control badly. A study shows that from the first lockdown of May 2020, the general public stopped purchasing beauty products and services regularly.</p>\r\n<p>As a result, the economy of this business went out of hand, and small entrepreneurs had to shut down massage therapy Centers, beauty parlors, Spa Center, and other beauty care services in the World. Lots of experienced people are become jobless and lost their only way of livelihood in this situation. In Australia, only skilled people are living a stable and better life at this point. RPL diploma courses in beauty therapy are helping those experienced workers and learners to apply for a relevant job under the pandemic situation. So, RPL is making the possible vibe to overlap the crisis of unemployment.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How can RPL boost your career in the Beauty industry without a degree in this covid pandemic?</strong></p>\r\n<p>There is an expectation of substantial growth of the beauty therapy sector in Australia. In the upcoming years, there will be some revolutionary changes in this industry. About 20,000 new jobs will be anticipated over the next five years in the Beauty industry. (Source: According to the Australian Government\'s Career Outlook service) Now those industries are seeking skilled applicants who are most responsible, well-presented and have good interpersonal skills.</p>\r\n<p>From the beauty business industry concept, one of the ideal advantages is to have an RPL certificate in this industry. Anyone can start a career in beauty therapy care and services with an entry-level qualification by earning an RPL. For the covid situation, the Beauty &amp; Personal Care industry is subject to constant challenges, new innovations, day-to-day transformations, and the beauty industry getting the thrives from RPL jobholders. The RPL courses required minimum work experienced or no experienced based on your skills in this industry line and to become a beauty therapist or beauty artist. It is a straightforward and more secure process to earn an RPL to improve your works and help to boost your career in this sector.</p>\r\n<p>To know more, read the following paragraph about the RPL assessment of the beauty therapy industry.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>What is the assessment process of RPL in the Beauty therapy industry? </strong></p>\r\n<p>Collect your RPL certificates I, II in Beauty Therapy with just four easy steps.</p>\r\n<ol>\r\n<li><strong> </strong><strong>FREE SKILLS ASSESSMENT</strong></li>\r\n</ol>\r\n<p>There is no obligation to apply, and also, it\'s a budget-friendly process. First, Beauty related skill tests are checked by an experienced RTO representative and totally free.</p>\r\n<ol start=\"2\">\r\n<li><strong> </strong><strong>EVIDENCE PORTFOLIO</strong></li>\r\n</ol>\r\n<p>Next is to submit your \'Experience Portfolio\' and provide relevant documents about the training on beauty therapy. (Such as professional training certificates, photos, videos of the earlier working institutions, prior references, previous qualifications (If any), updated resume, and other documents as per the requirements)</p>\r\n<ol start=\"3\">\r\n<li><strong> </strong><strong>SKILLS CHECK</strong></li>\r\n</ol>\r\n<p>Thirdly, get a qualified assessor from one of our partnering RTOs. They will review the overall evidence and determine if the candidates are eligible in the therapy units for the RPL qualification access.</p>\r\n<ol start=\"4\">\r\n<li><strong> </strong><strong>QUALIFIED</strong></li>\r\n</ol>\r\n<p>Lastly, if the RTO assesses you as the right candidate and applicant get passed in all required steps of competency of Beauty and consultant. Later within a week, a qualification letter will be awarded by the registered training organization based on your merit.</p>\r\n<p>&nbsp;</p>\r\n<p>These four steps are the initial steps to complete an RPL assessment, but other requirements and criteria are under-maintained as per the policy.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Conclusion</strong></p>\r\n<p>Right now, every job requirement needs more skill elements to lift the career in Australia. It can be done by developing and improving the skills or training in a particular sector, but imagine who are well skilled but have no paper authentication and no jobs? So, thinking of that how they will make the livelihood in this covid situation. Here, the demand for Beauty therapists is now getting higher and higher in Australia. As a result, RPL now becomes one of the demanding courses for the beauty therapy industry. Build your career in the beauty therapy and treatment industry with the RPL certificates on your skilled unit.</p>\r\n<p>Different courses and management lines are available in Recognition of Prior Learning (RPL). Simply check out our website for more related blogs on RPL industries.</p>', '020621-040626.png', '2021-06-02 08:47:26', '2021-06-02 08:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Diploma in beauty therapy', '2020-11-05 04:53:07', '2020-11-05 04:53:07'),
(3, 'Certificate IV in Beauty Therapy', '2020-11-18 02:52:16', '2020-11-18 02:52:16'),
(4, 'Diploma of Remedial Massage', '2020-11-18 03:01:42', '2020-11-18 03:01:42'),
(5, 'Certificate III in Hairdressing', '2020-11-24 03:08:05', '2020-11-24 03:08:05'),
(6, 'Beauty', '2020-12-15 10:18:37', '2020-12-15 10:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_10_25_080813_create_sessions_table', 1),
(14, '2020_11_03_031854_create_categories_table', 2),
(15, '2020_11_02_134644_create_blogs_table', 3),
(16, '2021_01_27_053629_create_roles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('f4dRPug8mBF1zsv2QgTg4sJCCqMTXA8Qmamta9bs', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXA4Y0VsdzVJRnhxT1hwU1JjcER0am1hbk9jNVYwZGFiT0x5SXUyciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvYmxvZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622928949),
('HM9In4xFmM3l01EnjZhKa30Sm0j037NwAbD2FH82', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0V3WUhWb3F2Z3VlMVExTmEyeEMyMUhBQ2tFZjdxTUFUZ3pPeTkyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvYWJvdXQtdXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622928880),
('hyFtPfb1wH3OyIGfNs1oAB6d6sRvgB71fBlppEis', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3pSOU9kUG1pd2tST0c5NFBTdDlzMFFNaVFkZ3VmRTFMWHZiTXA4MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvZG93bmxvYWQvQ0YwMDUtQ29tcGxhaW50cy1fLUFwcGVhbHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622929249),
('IGN7ofmXc3JKyLKBPPMbUd320ZrgatFfnbEeEOnD', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidU16VXNxdnBTOTNaM21IemJ3R0UwVHhDMVBpU05rRWxsakRDZm1SdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvZG93bmxvYWQvU3R1ZGVudC1IYW5kYm9vay0yMDE5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1622929370),
('kA89UHEDzlGC6B0Wm0NwN24JJsEne5SPkODcxJKM', NULL, '54.36.148.86', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVBQN2tvS252SUxTbnFVVXRYa0JtRFNaMU9zc2FGQmdyYTZsbm9sUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622931351),
('lgFrcy4Fg9V3jWGe5f7RSe26FdKAvOgBfUahRQ8H', NULL, '66.249.71.88', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.97 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYW5ueGdZODJWVEJaTWdXSDFHa2xqVlJvNXpyS1VPeHFNbVRXb2g3YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622931122),
('lSAwVCLEuenapL4LUe9LzgEwiTAa47UfGShe81Eb', NULL, '54.173.229.88', 'scalaj-http/2.4.2', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic28wanNmemxXT0x4Qmw1aWF1bnNYRGNHcWNxNW10RktHaG03elFxZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622928841),
('mGmTsCeo8CBjzuGkiuZHDN1QcMT4RddxWjhn473o', NULL, '45.77.47.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4240.193 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGZHam9zc2tGZDdvNGduTXNhTEJXQmd2cmRtQ1dDbW03djRZbGV4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622923722),
('MTspBetIjN8SAUUXNhesj7rEwIgZo1EkKcQkTWqt', NULL, '157.55.39.122', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVNWZzNWUHlEUGx1eW1xUU83Y3NwVGdjNmlVN2E0ZldZbHhLQnAzZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3Lm50YS5uc3cuZWR1LmF1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1622930010),
('r4eN2blxvxa8MMDobAikZ5lEJzRT2WGxlZF0seXL', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWtHVGlDYUhWUTFGTElXeHFEZ3BORGxvOHVUdzhzS1JCTmtEYUhwWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvZG93bmxvYWQvQ29tcGxhaW50LWFuZC1hcHBlYWwtcG9saWN5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1622929297),
('SKFkgPeqJyOF3IFyZ8IsY2nbShg7tqzAjcxrcpdP', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmpwckxOT2V5aGRsM3BCRXUzOGdSWjB5Mkk5bFdha2lCRERVcnloUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvZGlwbG9tYS1pbi1yZW1lZGlhbC1tYXNzYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1622929338),
('t3A9E4diqVI14npiD03HjIr1Ngo424kLbqZbCun3', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWpDMWZuS0RNa0hpZHU4cDhBaFpaQWFGamlrU1RSRFB6bGtQTmZGSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvZGlwbG9tYS1pbi1iZWF1dHktdGhlcmFweSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1622929218),
('tI2iQ9w6MX6X5CVIfUF3OIOkzf95JCjFuG4lIgpm', NULL, '54.173.229.88', 'Buck/2.2; (+https://app.hypefactors.com/media-monitoring/about.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTVhZlA4RzMyWkpYbXF3V2FqeXhkSkZJYzZhd1lLWVlRcVM4ZDlYNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUvY29udGFjdC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1622928994),
('URVPz5n8R5a0l3dGXoSARZHPUEPoNd7GsUYRFdcX', NULL, '40.77.167.13', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGpEWGpWa051Qmh4MEVpNDJLa1h6UExBQ2hOTlh4TmhkeUFJWWQ3ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTk6Imh0dHBzOi8vd3d3Lm50YS5uc3cuZWR1LmF1L2Jsb2dzL1dhbnQtdG8tcmVsYXgteW91ci1jbGllbnRzLVRha2UtRGlwbG9tYS1vZi1SZW1lZGlhbC1NYXNzYWdlLUNvdXJzZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1622944683),
('XZwDBcZLPZEurEBmbgfiDsmRjUYQVUySlFgRgJmY', NULL, '157.55.39.122', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHNJV3NGOTlmSGExWEFQUHdyQVl1bEdBMzRsSnFRMGxPUmFjcnVNeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbnRhLm5zdy5lZHUuYXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1622940647);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quadque\'s Team', 1, '2020-11-02 13:39:24', '2020-11-02 13:39:24'),
(2, 2, 'Kashfia\'s Team', 1, '2020-11-05 10:45:12', '2020-11-05 10:45:12'),
(3, 3, 'Kashfia\'s Team', 1, '2020-11-17 07:20:33', '2020-11-17 07:20:33'),
(4, 4, 'shuvo\'s Team', 1, '2021-05-31 08:26:27', '2021-05-31 08:26:27'),
(5, 6, 'Quadque\'s Team', 1, '2021-05-31 12:24:35', '2021-05-31 12:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(6, 'Quadque', 'admin@quadque.tech', NULL, '$2y$10$u3mzcXQSfdVfc4iigh8yxOBGS5z/GRMs/fkXlk/8DP07AkSsjArsi', NULL, NULL, NULL, NULL, NULL, '2021-05-31 12:24:35', '2021-05-31 12:24:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
