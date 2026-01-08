-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2026 at 09:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `full_name`, `username`, `admin_password`, `email`, `last_login`, `created_at`) VALUES
(1, 'Super Admin', 'suzon', '$2y$10$xVTtMU.Zo7uMSlogIfnSQed0YMHWAbxXf2fyepfSk6.G.mhUnMRc6', NULL, NULL, '2025-12-24 12:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `admission_details`
--

CREATE TABLE `admission_details` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `info_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_details`
--

INSERT INTO `admission_details` (`id`, `category`, `info_text`, `created_at`) VALUES
(1, 'eligibility', 'এস.এস.সি ও দাখিল সমমানের পরীক্ষায় শুধুমাত্র ২০২১খ্রি. থেকে ২০২৬ খ্রি. এর মধ্যে উত্তীর্ণ শিক্ষার্থীরা GPA-2.00 নিয়ে সরাসরি ১ম পর্বে ভর্তি হতে পারবে।', '2026-01-07 17:29:26'),
(2, 'eligibility', 'এইচ.এস.সি (বিজ্ঞান) পাশকৃত ছাত্র-ছাত্রীরা সরাসরি ৩য় পর্বে ভর্তির সুযোগ পাবে।', '2026-01-07 17:29:26'),
(4, 'rules', 'বোর্ড কর্তৃক নির্ধারিত ভর্তি ফরম কলেজ ক্যাম্পাস ডেস্ক থেকে সংগ্রহ করে স্ব-হস্তে পূরণ করতে হবে।', '2026-01-07 17:29:26'),
(5, 'rules', 'বোর্ড নির্ধারিত আবেদন ফরম পূরণ করে ভর্তির সময় প্রার্থীদের এস.এস.সি সমমানের পরীক্ষার মূল সনদপত্র সহ প্রয়োজনীয় ডকুমেন্ট প্রতিষ্ঠান নির্ধারিত ভর্তি ফি ও ১ম সেমিস্টার ফি এককালীন জমা দিয়ে নির্দিষ্ট সময়ের মধ্যে ভর্তি হতে হবে।', '2026-01-07 17:29:26'),
(6, 'rules', 'ভর্তির সময় ভর্তি ফরম সম্পূর্ণ ফ্রি।', '2026-01-07 17:29:26'),
(7, 'documents', 'এসএসসি পরীক্ষার মূল নম্বরপত্র।', '2026-01-07 17:29:26'),
(8, 'documents', 'সদ্য তোলা পাসপোর্ট সাইজের ছবি (৩ কপি)।', '2026-01-07 17:29:26'),
(13, 'header_title', 'gbhnjhbgvfvbhnjhbgvfc', '2026-01-07 22:08:10'),
(14, 'header_desc', 'suzon', '2026-01-07 22:10:31'),
(16, 'eligibility', 'এইচ.এস.সি (ভোকেশনাল) পাশকৃত ছাত্র-ছাত্রীরা সরাসরি ৪র্থ পর্বে ভর্তির সুযোগ পাবে।', '2026-01-07 22:40:30'),
(17, 'documents', 'প্রশংসাপত্র (ফটোকপি)।', '2026-01-07 23:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `author_members`
--

CREATE TABLE `author_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL,
  `member_role` enum('director','principal') NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_members`
--

INSERT INTO `author_members` (`id`, `name`, `designation`, `institution`, `message`, `image_file`, `member_role`, `status`) VALUES
(5, ' vc vc c', 'c c vc cvv ', 'cd vc vf ', 'c c v ', 'member_1767457584.jpg', 'director', 1),
(6, 'mohammad anwar', 'senior software developer', 'shahjalaj univercity', 'eokfijcjvfivnfrjnreijfioedkewodewdkeirnjfedfke,cvf,vlcff.cfc,d,cd,cldf,clf,vgmvkgmvkgmvgmvkmgkvmfvkmvkv', 'member_1767457779.jpg', 'director', 1),
(7, 'gbvgfnbhfg', 'vccbvfb vf', 'bhfgb g', 'I am honored and feel very privileged to be the Principal of Sylhet Professional Technical Institute (SPTI). I am always excited and look forward to working with our students,teachers, and staff to make SPTI the best Institute. Students who attend SPTI find it to be a place where they can grow academically, morally, and spiritually, in a fresh environment. The beauty of our campus makes it an ideal atmosphere for learning, whether in the classroom, or through academic and laboratory exercises, tutorials, and assignments. A full complement of extra-curricular activities allows our entire students or student body to enjoy special interests, share in the excitement of student life, and develop leadership skills that reflect individual competence. My commitment to our community of Technical Education is to provide methods to support constructive behaviors that will help keep our Institute safe and promote a positive learning environment.', 'member_1767458722.jpg', 'principal', 1),
(8, 'cvbnm,mbv', 'c vbnm,mjhngbfvbgnh', 'spti', 'cdvfbnmbvcvbnm,mnbvcxzc', 'member_1767461506.jpg', 'director', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_image`) VALUES
(17, 'this is image 1', 'banner_1767331561.jpg'),
(18, 'this is image 2', 'banner_1767331799.jpg'),
(19, 'tis is banner image 3', 'banner_1767331894.jpg'),
(20, 'this image 4', 'banner_1767518214.jpg'),
(21, 'this  i banner', 'banner_1767614868.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Campus_Facilitie`
--

CREATE TABLE `Campus_Facilitie` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Campus_Facilitie`
--

INSERT INTO `Campus_Facilitie` (`id`, `icon`, `title`, `description`) VALUES
(3, 'icon_1767549010.png', 'Low Cost', 'Affordable education for all'),
(8, 'icon_1767553722.png', 'WiFi', ''),
(9, 'icon_1767553800.png', 'Wavier up to  10 %', ''),
(10, 'icon_1767553839.png', 'Hostel', ''),
(11, 'icon_1767553885.png', 'Rich Library', ''),
(12, 'icon_1767553924.png', 'Lab', '');

-- --------------------------------------------------------

--
-- Table structure for table `conttact_us`
--

CREATE TABLE `conttact_us` (
  `id` int(11) NOT NULL,
  `inst_name` varchar(200) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conttact_us`
--

INSERT INTO `conttact_us` (`id`, `inst_name`, `site_address`, `site_email`, `site_phone`) VALUES
(1, 'Sylhet Professional Technical Institute', 'KMSS Bhaban, Dargah Gate, Sylhet-3100', 'spti.spci@gmail.com', '+8801734033581');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `tech_name` varchar(100) NOT NULL,
  `tech_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `dept_id`, `tech_name`, `tech_image`) VALUES
(2, 9, 'Computer Technology', 'course_1767706877.png'),
(3, 10, 'Electrical Technology', 'course_1767706898.png'),
(6, 11, 'civil technology', 'course_1767816237.png');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `head_name` varchar(255) NOT NULL,
  `head_email` varchar(255) NOT NULL,
  `head_contact` varchar(20) DEFAULT NULL,
  `head_image` varchar(255) DEFAULT NULL,
  `intro_text` text DEFAULT NULL,
  `job_sector` text DEFAULT NULL,
  `exam_system` text DEFAULT NULL,
  `dept_icon` varchar(255) DEFAULT NULL,
  `job_icon` varchar(255) DEFAULT NULL,
  `exam_icon` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `head_name`, `head_email`, `head_contact`, `head_image`, `intro_text`, `job_sector`, `exam_system`, `dept_icon`, `job_icon`, `exam_icon`, `status`) VALUES
(9, 'Computer', 'Ajim Uddin', 'ajimuddin07@gmail.com', '01734033583', 'head_image_1767530349_70.png', 'জীবন চলার পথে সর্বোত্তম সঙ্গী ও সহজ মাধ্যম হলো কম্পিউটার। কম্পিউটার ছাড়া মানুষের কর্মকৌশল যেন অপূর্ণাঙ্গ। তথ্য-প্রযুক্তির উন্নয়নে কম্পিউটার এক বিস্ময়কর আস্থাশীল নাম। কম্পিউটারের মাধ্যমে অতি অল্প সময়ে অসাধ্যকে সাধন করা সম্ভব। কম্পিউটার একদিকে যেমন বিশ্বকে হাতের মুঠোয় এনে দিয়েছে, তেমনি ভাবে খুলে দিয়েছে বিজ্ঞান ও উন্নয়নের দ্বার। বর্তমান সময়ে কম্পিউটার ছাড়া কোন কাজই যেন অসম্ভব। সময়ের চাহিদানুসারে কম্পিউটার টেকনোলজি মানুষের অত্যন্ত প্রিয় হয়ে উঠেছে। কম্পিউটার ডিপ্লোমা পাশ করার পর কেউ বেকার থাকে না।\r\n', '\r\nকম্পিউটার বিজ্ঞানের ছাত্র-ছাত্রীদের জন্য অনেক রাস্তা খোলা। এ বিভাগ থেকে পাস করা শিক্ষার্থীরা বিভিন্ন শাখায় কাজ করতে পারেন। কেউ হতে পারেন প্রোগ্রামার আবার কেউ বা নেটওয়ার্ক অ্যাডমিনিস্ট্রেটর। এ ছাড়া গ্রাফিক্স বা ওয়েব ডিজাইনারও হতে পারেন। পাশাপাশি আছে ফ্রিল্যান্সিয়ের সুযোগ। আর অফিস আদালত, ব্যাংক-বীমা, প্রতিষ্ঠান, কর্পোরেট হাউস, গণমাধ্যম এবং শিক্ষা প্রতিষ্ঠানে চাকুরি তো আছেই। পদসমূহ: কম্পিউটার ইঞ্জিনিয়ারিং করার পর একজন ছাত্র/ছাত্রী যে সমস্ত পদে অধিষ্ঠিত হতে পারেন সেগুলো হলো প্রোগ্রাম সহকারী, প্রোগ্রাম আইটি অফিসার, কম্পিউটার অপারেটর, কম্পিউটার ইঞ্জিনিয়ারিং, নেটওয়ার্ক অ্যাডমিনিস্ট্রেটর, ডিজাইনার, টেকনিশিয়ান, ল্যাব-টেকনিশিয়ান, প্রধান ইন্সট্রাক্টর, সহকারী ইন্সট্রাক্টর এবং অন্যান্য। এক কথায় কম্পিউটার ইঞ্জিনিয়াররা যেকোনো পদে অধিষ্ঠিত হতে পারেন।', 'ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষাক্রম সর্বমোট ৪ বছর মেয়াদী এবং ৮ সেমিষ্টার ভিত্তিক। প্রতি ৬ মাস পর পর বাংলাদেশ কারিগরি শিক্ষা বোর্ডের নিয়ন্ত্রণে সেমিষ্টার ফাইনাল পরীক্ষা অনুষ্ঠিত হয়। এছাড়াও ছাত্র-ছাত্রীদের নিয়মিত ক্লাস টেষ্ট, কুইজ টেষ্ট, বিতর্ক প্রতিযোগিতা এবং অন্যান্য সমাজ সচেতনতা মূলক অনুষ্টানে অংশগ্রহণ করতে হয়। সফলতার সাথে কোর্স সম্পন্ন করার পর শিক্ষার্থীগণ বাংলাদেশ কারিগরি শিক্ষা বোর্ড কর্তৃক ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং সনদপত্র লাভ করবেন।', 'dept_icon_1767530349_65.png', 'job_icon_1767530349_30.png', 'exam_icon_1767530349_19.png', 1),
(10, 'Electrical', 'Md. Fazle Rabby', 'rabbyfazle746@gmail.com', '01234567811', 'head_image_1767530766_17.png', 'ইলেকট্রিসিটির পাওয়ার হাউস ডিজাইন ও তার রক্ষণবেক্ষণ, ইলেকট্রনিক্স সংক্রান্ত যাবতীয় বিষয়, টেলিকমিউনিকেশন, ইত্যাদি নিয়ে বিস্তারিত আলোচনা করা হয়। বাড়ি-ঘর, রাস্তা-ঘাট, কল-কারখানা, ব্যবসা প্রতিষ্ঠান, অফিস-আদালত আর মুদি দোকান যেখানেই যান বিদ্যুৎ দরকার হবেই। এই বিদ্যুৎ উৎপাদন, সংরক্ষণ, সরবরাহ, বিতরণ, পরিচালনা পদ্ধতি, ক্যাবল লাইন স্ট্রাকচার থেকে শুরু করে এর সবরকম ব্যবস্থাপনার সাথে জড়িত একজন ইলেকট্রিক্যাল ইঞ্জিনিয়ার। ইলেকট্রিক্যাল ইঞ্জিনিয়াররা পুঁথিগত বিদ্যা, মেধা ও দক্ষতার মাধ্যমেই পরিচালনা করছেন সারা দেশের বিদ্যুৎ ব্যবস্থাকে', 'হাই ভোল্টেজ ক্যাবল লাইন, পাওয়ার জেনারেটর প্লান্ট, হাউজ ওয়্যারিং, ইন্ডাস্ট্রি, ফ্যাক্টরিসহ সংশ্লিষ্ট বিভিন্ন প্রতিষ্ঠানে ইলেকট্রিক্যাল ইঞ্জিনিয়ারদের রয়েছে একটা বড় চাকুরীর ক্ষেত্র। বর্তমান সময়ে দেশে বিদেশে তড়িৎ প্রকৌশলীদের জন্য রয়েছে উচ্চ ও সম্মানজনক জীবিকা নির্বাহের সুযোগ। সহজ কথা দেশে বা বিদেশে এমন কোন ক্ষেত্র নেই যেখানে ইলেকট্রিক্যাল ডিপ্লোমাধারীদের চাকুরির ক্ষেত্র নেই। পদসমূহ: ইলেকট্রিক্যাল ইঞ্জিনিয়ারিং করার পর একজন ছাত্র/ছাত্রী যে সমস্ত পদে অধিষ্ঠিত হতে পারেন সেগুলো হলো ইলেকট্রিক্যাল ইঞ্জিনিয়ার, এসিস্ট্যান্ট ইঞ্জিনিয়ার, ল্যাব-টেকনিশিয়ান, প্রধান ইন্সট্রাক্টর, সহকারী ইন্সট্রাক্টর, জুনিয়র ইন্সট্রাক্টর এবং অন্যান্য।', 'ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং শিক্ষাক্রম সর্বমোট ৪ বছর মেয়াদী এবং ৮ সেমিষ্টার ভিত্তিক। প্রতি ৬ মাস পর পর বাংলাদেশ কারিগরি শিক্ষা বোর্ডের নিয়ন্ত্রণে সেমিষ্টার ফাইনাল পরীক্ষা অনুষ্ঠিত হয়। ৮ম সেমিষ্টার হচ্ছে ছাত্র-ছাত্রীদের জন্য ইন্ডাষ্ট্রিয়াল ট্রেনিং সেমিষ্টার। এছাড়াও ছাত্র-ছাত্রীদের নিয়মিত ক্লাস টেষ্ট, কুইজ টেষ্ট, বিতর্ক প্রতিযোগিতা এবং অন্যান্য সমাজ সচেতনতা মূলক অনুষ্টানে অংশগ্রহণ করতে হয়। সফলতার সাথে কোর্স সম্পন্ন করার পর শিক্ষার্থীগণ বাংলাদেশ কারিগরি শিক্ষা বোর্ড কর্তৃক ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং সনদপত্র লাভ করবেন।', 'dept_icon_1767530766_58.png', 'job_icon_1767530766_14.png', 'exam_icon_1767530766_28.png', 1),
(11, 'civil', 'fvbfvfvfgbg', 'a@gmail.com', '95695985325', 'head_image_1767703037_50.png', 'xcvbcxz', 'xcxvcxbcvxz', 'cvbcxz', 'dept_icon_1767703037_52.png', 'job_icon_1767703037_52.png', 'exam_icon_1767703037_91.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `gallery_image`) VALUES
(13, 'this is gallery', 'gallery_1767467131.jpg'),
(14, 'this is gallery', 'gallery_1767467011.jpg'),
(15, '0', 'gallery_1767604555.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `notice_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_file`, `created_at`, `notice_date`) VALUES
(22, 'Admission Notice', '', '2025-12-27 14:04:04', '2025-12-01'),
(24, 'Form fillup', '', '2025-12-27 16:16:14', '2025-12-02'),
(30, 'admission notice', '1767332029_IMG_5850.jpg', '2026-01-02 05:33:49', '2026-01-02'),
(31, 'this is notice', '1767352752_IMG_5556.jpg', '2026-01-02 11:19:12', '2026-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` int(11) NOT NULL,
  `scholor_title` varchar(255) NOT NULL,
  `scholor_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `scholor_title`, `scholor_des`) VALUES
(2, '৫৫% ভর্তি ছাড়', '\r\nমেধাবি ‍শিক্ষার্থীদের জন্য সর্বচ্চ ৫৫% পর্যন্ত ভর্তি ছাড়।'),
(3, 'উপবৃত্তি', '\r\nপ্রতি সেমিস্টারে ৫০০০/- টাকা সরকারি উপবৃত্তি প্রদান।'),
(5, '60% ছাড়', '\r\nমেয়েদের জন্য প্রতি সেমিস্টারে ৫০% ছাড়');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `reg_no` int(16) NOT NULL,
  `student_department` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `student_image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `roll_no`, `reg_no`, `student_department`, `semester`, `session`, `phone`, `student_image`, `status`, `created_at`) VALUES
(4, 'Nusrat Jahan', 201106, 1602040507, 'Civil', '3rd', '2022-23', '01512345681', NULL, 'active', '2025-12-27 12:09:48'),
(5, 'Rakibul Islam', 301110, 1702050607, 'Civil', '7th', '2020-21', '01312345682', NULL, 'active', '2025-12-27 12:09:48'),
(8, 'Farhana Yasmin', 401121, 1802060709, 'Mechanical', '1st', '2023-24', '01712345685', '1766842357_Screenshot From 2025-07-17 13-24-48.png', 'active', '2025-12-27 12:09:48'),
(12, 'Raj', 544544, 4343435, 'Computer', '5th', '2022-2012', '', '1766854569_Screenshot From 2025-08-21 03-12-56.png', 'active', '2025-12-27 14:56:53'),
(14, 'suzon mia', 676540, 1502221366, 'Computer', '1st', '2021-2022', '', '1767079156_IMG_5533.jpg', 'active', '2025-12-30 07:19:16'),
(15, 'ariyan justin rabon', 676557, 1502221367, 'Computer', '8th', '20-21', '09876567890', '1767087822_IMG_5717.jpg', 'active', '2025-12-30 09:43:42'),
(16, 'forhad', 876565, 1502213570, 'Electrical', '4th', '2021-2021', '019766786733535', '1767093708_IMG_5592.jpg', 'active', '2025-12-30 11:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `teacher_department` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `teacher_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `teacher_department`, `phone`, `email`, `teacher_image`, `created_at`) VALUES
(63, 'Ambia Akhter Mona', 'Principle', 'Civil', '01455663585', 'ambiamona@gmail.com', '1767003318_Screenshot_From_2025-07-17_13-54-08.png', '2025-12-29 10:15:18'),
(64, 'Neuton', 'Accountant', 'Computer', '0154484545', 'neuton@gmail.com', '1767003365_Screenshot_From_2025-09-14_08-29-04.png', '2025-12-29 10:16:05'),
(65, 'Rakib Hussain', 'Junior Instructor', 'Computer', '01943565611', 'rakib@gmail.com', '1767332482_IMG_5610.jpg', '2025-12-29 10:17:30'),
(66, 'iuuhgkuhjhjkhioil', 'rteyui98765456789', 'Computer', '787867676', 'a@gmail.com', '1767079287_IMG_5575.jpg', '2025-12-30 07:21:27'),
(69, 'lkjhgfcx', 'oiouygyfg', 'Electrical', '012356789', 'fdg@gmail.com', '1767090575_IMG_5733.jpg', '2025-12-30 09:41:29'),
(70, 'md:anwar', 'senior developer(computer-science)', 'Computer', '07889765781', 'anwar@gmail.com', '1767090661_IMG_5724.jpg', '2025-12-30 10:31:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admission_details`
--
ALTER TABLE `admission_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_members`
--
ALTER TABLE `author_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Campus_Facilitie`
--
ALTER TABLE `Campus_Facilitie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `conttact_us`
--
ALTER TABLE `conttact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_department_card` (`dept_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_details`
--
ALTER TABLE `admission_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `author_members`
--
ALTER TABLE `author_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Campus_Facilitie`
--
ALTER TABLE `Campus_Facilitie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `conttact_us`
--
ALTER TABLE `conttact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_dept_link` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
