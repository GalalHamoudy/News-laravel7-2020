-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'categories', ' تم اضافة قسم ملابس', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 06:50:32', '2021-01-07 06:50:32'),
(2, 'posts', ' تم اضافة قسم معلومات الخبر باللغة العربية', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 06:51:07', '2021-01-07 06:51:07'),
(3, 'comments', ' تم اضافة تعليق  kira united', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 07:17:10', '2021-01-07 07:17:10'),
(4, 'comments', ' تم اضافة تعليق  mohammed galal', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 07:18:15', '2021-01-07 07:18:15'),
(5, 'comments', ' تم تعديل حالة التعليق kira united', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:14:28', '2021-01-07 12:14:28'),
(6, 'comments', ' تم تعديل حالة التعليق kira united', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:14:37', '2021-01-07 12:14:37'),
(7, 'comments', ' تم حذف التعليق mohammed galal', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:14:44', '2021-01-07 12:14:44'),
(8, 'comments', ' تم تعديل حالة التعليق kira united', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:14:57', '2021-01-07 12:14:57'),
(9, 'comments', ' تم تعديل حالة التعليق kira united', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:15:15', '2021-01-07 12:15:15'),
(10, 'user', ' تم تعديل العضو Mohammed Galal', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:16:51', '2021-01-07 12:16:51'),
(11, 'posts', ' تم حذف المقال معلومات الخبر باللغة العربية', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:17:37', '2021-01-07 12:17:37'),
(12, 'categories', ' تم حذف القسم ملابس', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:17:44', '2021-01-07 12:17:44'),
(13, 'categories', ' تم اضافة قسم السياسة والاقتصاد', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:27:31', '2021-01-07 12:27:31'),
(14, 'categories', ' تم اضافة قسم الرياضة العربية و العالمية', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:29:44', '2021-01-07 12:29:44'),
(15, 'categories', ' تم اضافة قسم الصحة والسكان', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:32:09', '2021-01-07 12:32:09'),
(16, 'categories', ' تم اضافة قسم الدوري الانجليزي الممتاز', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:34:37', '2021-01-07 12:34:37'),
(17, 'posts', ' تم اضافة قسم ضياء داوود: \"لو لم يتم سحب الثقة من وزيرة الصحة يبقى كنا بنفضفض\"', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:44:42', '2021-01-07 12:44:42'),
(18, 'posts', ' تم اضافة قسم منتخب البرازيل يصل مساء غدا استعدادا لودية الفراعنة قبل مونديال اليد', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:46:16', '2021-01-07 12:46:16'),
(19, 'posts', ' تم اضافة قسم أسوان يجرى \"رابيد تسيت\" استعداداً لمباراة المقاصة فى الدورى.. صور', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:48:15', '2021-01-07 12:48:15'),
(20, 'posts', ' تم اضافة قسم العلم يكشف: هكذا تؤثر درجات الحرارة على فيروس \"كورونا\"', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:50:23', '2021-01-07 12:50:23'),
(21, 'posts', ' تم اضافة قسم هل توصل أطباء تايلاند إلى علاج لفيروس كورونا', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:51:38', '2021-01-07 12:51:38'),
(22, 'comments', ' تم اضافة تعليق  بسم الله اول تعليق', NULL, NULL, 'App\\User', 1, '[]', '2021-01-07 12:54:02', '2021-01-07 12:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `ar_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_description` varchar(255) NOT NULL,
  `en_description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `type`, `ar_name`, `en_name`, `ar_description`, `en_description`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(2, 0, 'السياسة والاقتصاد', 'Politics and economics', 'كل الاخبار السياسية و الاقتصادية من جميع دول العالم', 'All political and economic news from all countries of the world', '1610029651.jpg', 1, '2021-01-07 12:27:31', '2021-01-07 12:27:31'),
(3, 0, 'الرياضة العربية و العالمية', 'Arab and international sports', 'كل الاخبار الرياضية من جميع دول العالم الغربية و العربية و في كل الرياضات', 'All sports news from all western and Arab countries of the world and in all sports', '1610029784.jpg', 1, '2021-01-07 12:29:44', '2021-01-07 12:29:44'),
(4, 0, 'الصحة والسكان', 'Health and Population', 'كل المعلومات التي تهم صحتك و تقوي مناعتك و جميع الاحصاءيات حول عدد السكان حول العالم', 'All the information that is important to your health and strengthens your immunity, and all the statistics about the number of people around the world', '1610029929.jpg', 1, '2021-01-07 12:32:09', '2021-01-07 12:32:09'),
(5, 3, 'الدوري الانجليزي الممتاز', 'English Premier League', 'كل الاخبار الرياضية التي تتعلق بالدوري الانجليزي و ترتيباته', 'All sports news related to the English Premier League and its arrangements', '1610030077.jpg', 1, '2021-01-07 12:34:37', '2021-01-07 12:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 5, 'بسم الله اول تعليق', 0, '2021-01-07 12:54:02', '2021-01-07 12:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_21_190147_create_categories_table', 1),
(5, '2020_11_21_190306_create_posts_table', 1),
(6, '2020_11_22_182234_laratrust_setup_tables', 1),
(7, '2020_11_24_055550_create_activity_log_table', 1),
(8, '2021_01_07_083356_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'THEadmin', 'THEadmin', 'admin can add or remove all', '2021-01-07 06:46:34', '2021-01-07 06:46:34'),
(2, 'THEsupervisor', 'THEsupervisor', 'THEsupervisor can accept or reject posts', '2021-01-07 06:46:34', '2021-01-07 06:46:34'),
(3, 'THEwriter', 'THEwriter', 'writer can write posts', '2021-01-07 06:46:34', '2021-01-07 06:46:34'),
(4, 'THEuser', 'THEuser', 'user can write comments', '2021-01-07 06:46:34', '2021-01-07 06:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `ar_summary` varchar(255) NOT NULL,
  `en_summary` varchar(255) NOT NULL,
  `ar_description` longtext NOT NULL,
  `en_description` longtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `ar_name`, `en_name`, `ar_summary`, `en_summary`, `ar_description`, `en_description`, `picture`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'ضياء داوود: \"لو لم يتم سحب الثقة من وزيرة الصحة يبقى كنا بنفضفض\"', 'Diaa Dawood: \"If confidence had not been withdrawn from the Minister of Health, we would have left.\"', 'وانتقد النائب، مواقف الأغلبية في منح ا علي عبد العال، ما ذكره النائب، قائلا:\"هذه الكلمة لا يجب أن تقال، البلد صامدة وقوية ولا تهتز إطلاقا\".', 'The deputy criticized the majority’s positions in granting confidence to the government in October, saying: “The country was srong and does not shake at all.”', 'أكد النائب ضياء الدين داوود، عضو مجلس النواب، إنه لو لم يتم سحب الثقة من الدكتور هالة زايد، وزير الصحة \"يبقي كنا بنفضفض\"، جاء ذلك خلال الجلسة العامة للبرلمان، أثناء نظر أول  استجواب في الفصل التشريعى الاول للبرلمان، والموجه لوزيرة الصحة بسبب انهيار الخدمات الصحية بمستشفى بولاق الدكرور بمحافظة الجيزة.\r\n\r\n \r\n\r\nوانتقد النائب، مواقف الأغلبية في منح الثقة للحكومة في أكتوبر، قائلا:\"البلد تعرضت لهزة كبيرة\"، ورفض الدكتور علي عبد العال، ما ذكره النائب، قائلا:\"هذه الكلمة لا يجب أن تقال، البلد صامدة وقوية ولا تهتز إطلاقا\".\r\n\r\n \r\n\r\nوتابع ضياء داوود: بدل من أن ترد الوزيرة على الاستجواب بهذه الكلمات، كان يجب عليها أن تتحمل المسئولية السياسية وتتقدم باستقالتها من الوزارة، وأشار إلى أن ما تتشدق به الوزيرة من منظومة التأمين الصحي في بورسعيد لا يعتمد عليه، داعيا النواب لزيارة بوسعيد والتعرف على ما تعانيه المستشفيات هناك.', 'Deputy Diaa Al-Din Daoud, a member of Parliament, confirmed that if no confidence was withdrawn from Dr. Hala Zayed, the Minister of Health, \"we would keep shaking\". This came during the plenary session of Parliament, during the consideration of the first interrogation in the first legislative term of Parliament, directed at the Minister of Health because of The collapse of health services at Bulaq Dakrour Hospital in Giza Governorate.\r\n\r\n \r\n\r\nThe deputy criticized the majority’s positions in granting confidence to the government in October, saying: “The country was subjected to a great shock.” Dr. Ali Abdel-Al rejected what the deputy said, saying: “This word should not be said, the country is steadfast and strong and does not shake at all.”\r\n\r\n \r\n\r\nDiaa Daoud continued: Instead of the minister responding to the interrogation with these words, she should have assumed political responsibility and submitted her resignation from the ministry, and indicated that what the minister speaks for about the health insurance system in Port Said is not reliable, calling on the deputies to visit Bossaid and get to know what Hospitals there are suffering.', '1610030682.jpg', 1, '2021-01-07 12:44:42', '2021-01-07 12:44:42'),
(3, 3, 'منتخب البرازيل يصل مساء غدا استعدادا لودية الفراعنة قبل مونديال اليد', 'The Brazil national team arrives tomorrow evening in preparation for the friendly of the Pharaohs before the World Cup', 'كشف خالد فتحى نائب مدير بطولة العالم لكرة اليد عن وصول منتخب البرازيل  فى الحادية عشر والنصف مساء غدا الجمعة', 'Khaled Fathy, Deputy Director of the World Handball Championship, revealed the arrival of the Brazil national team at 11:30 pm tomorrow, Friday', 'ومن المقرر أن يطبق على منتخب البرازيل أيضا نظام من الباب للباب الذى طبق على اليابان أول  منتخب يصل إلى القاهرة ، بدخول حافلة البطولة إلى سلم الطائرة من أجل نقل الوفد إلى عمل الإختبارات الطبية قبل دخول الفقاعة بفندق البطولة .\r\n\r\nيلتقى فى السادسة مساء اليوم الخميس، منتخب مصر لكرة اليد الأول بقيادة مديره الفنى الأسبانى روبرتو جارسيا نظيره اليابانى فى إطار ثان مباريات كلا المنتخبين الودية بالمعسكر الأخير فى إطار الإستعداد لبطولة العالم مصر 2021 المقرر إنطلاقها يوم 13 يناير الجارى .\r\n\r\nويسعى المدير الفنى الأسبانى إلى تغيير الخطط التى لعب بها الودية الأولى  التى أقيمت أول أمس الثلاثاء بإستاد القاهرة و شهدت فوز الفراعنة 34 / 29 لتجريب جميع اللاعبين للإستقرار على القوام الأساسى للفراعنة فى المونديال.\r\n\r\n \r\n\r\nوأعلنت اللجنة المنظمة لبطولة العالم لكرة اليد مصر 2021، إقامة مباريات منتخب مصر فى السابعة مساءً بدءًا من يوم 13 يناير الجارى على صالة استاد القاهرة الدولى، ويبدأ الفراعنة مباريات بطولة العالم بمواجهة تشيلى ثم جمهورية التشيك يوم 16 يناير وأخيرا السويد يوم 18 ضمن المجموعة السابعة، و تضع اللجنة المنظمة للبطولة الرتوش الأخيرة لحفل الأفتتاح المقرر أن يحيه النجم تامر حسنى بأغنية للبطولة.', 'The Brazil national team is also scheduled to implement a door-to-door system that was applied to Japan, the first team arriving in Cairo, by entering the tournament bus to the plane ladder in order to transport the delegation to the medical tests before entering the bubble at the tournament hotel.\r\n\r\nAt 6 pm today, Thursday, the first Egyptian handball team, led by its Spanish technical director Roberto Garcia, will meet his Japanese counterpart in the framework of the second matches of both teams in the last camp in preparation for the Egypt 2021 World Championship, scheduled to start on January 13th.\r\n\r\nThe Spanish technical director seeks to change the plans in which he played the first friendly, which was held the day before yesterday, Tuesday, at Cairo Stadium, and witnessed the Pharaohs win 34/29 to try all the players to settle on the basic strength of the Pharaohs in the World Cup.\r\n\r\n \r\n\r\nAnd the Organizing Committee of the World Handball Championship Egypt 2021 announced that the Egyptian national team matches will be held at 7 pm starting on January 13 at the Cairo International Stadium, and the Pharaohs will start the World Championship matches against Chile, then the Czech Republic on January 16 and finally Sweden on 18 in Group Seven, And the organizing committee of the tournament puts the last frills for the opening ceremony, which will be performed by the star Tamer Hosni with the song of the tournament.', '1610030776.jpg', 1, '2021-01-07 12:46:16', '2021-01-07 12:46:16'),
(4, 4, 'أسوان يجرى \"رابيد تسيت\" استعداداً لمباراة المقاصة فى الدورى.. صور', 'Aswan conducts \"Rapid Test\" in preparation for the clearing match in the league .. Pictures', 'خضع فريق أسوان بقيادة سامى الشيشينى مدرب الفريق، اليوم الخميس، لإجراءات تحليل \"رابيد تيست\"، للكشف عن فيروس كورونا، وذلك قبل 48 ساعة من مباراتهم المرتقبة', 'The Aswan team, led by Sami El Shishini, the coach of the team, underwent, today, Thursday, the procedures of analyzing the \"Rapid Test\", to detect the Corona virus, 48 hours before their upcoming match', 'على جانب آخر، تبحث لجنة الكرة برئاسة مجدى سبالك بالتنسيق مع الجهاز الفنى تدعيمات شهر يناير سواء من داخل أو خارج مصر وفق إحتياجات الفريق الفنية وإمكانيات وموارد نادى أسوان.\r\n\r\nويحتل أسوان المركز العاشر فى جدول مسابقة الدورى العام برصيد 6 نقاط حصدها أبناء الجنوب بعد الفوز فى أول مباراتين على إنبى ثم طلائع الجيش، قبل الخسارة فى 3 مباريات متتالية أمام المصرى والجونة والاسماعيلى.\r\n\r\nوسجل لاعبو أسوان 3 أهداف واستقبلت شباكهم 7 آخرين، ويعتبر هيثم الفيل كابتن الفريق هو هداف أسوان حتى الآن برصيد هدفين.\r\n\r\nويعود سامى الشيشينى لقيادة أسوان من الملعب فى مباراة المقاصة، وذلك بعد تعرضه لعقوبة الإيقاف لمدة مباراة بالإضافة إلى تغريمه 20 ألف جنية، عقب اعتراضه على القرارات التحكيمية فى مباراة اسوان والجونة بالجولة الرابعة، والتى انتهت بفوز الجونة بهدف نظيف.\r\n\r\nوكان الشيشينى قضى تلك العقوبة فى مباراة الاسماعيلى الأخيرة ليقود الفريق من خارج الملعب، فى اللقاء الذى خسره أبناء الجنوب بهدفين نظيفين.', 'On the other hand, the Football Committee headed by Magdy Sabalk, in coordination with the technical staff, is discussing January\'s support, whether from inside or outside Egypt, according to the technical needs of the team and the capabilities and resources of Aswan Club.\r\n\r\nAswan occupies the tenth place in the general league table with 6 points scored by the people of the South after winning the first two matches against Enppi and then Tala\'a Al-Jaish, before losing in 3 consecutive matches against Al-Masry, Al-Gouna and Al-Ismaili.\r\n\r\nAswan players scored 3 goals and received 7 others, and Haitham El Fil, the captain of the team, is Aswan\'s top scorer so far, with two goals.\r\n\r\nSami Al-Shishini returns to lead Aswan from the stadium in the clearing match, after being subjected to a ban for a match in addition to a fine of 20,000 pounds, after his objection to the arbitration decisions in the Aswan and El-Gouna match in the fourth round, which ended with El-Gouna\'s victory with a clean goal.\r\n\r\nThe Chechen had spent that penalty in the last Ismaili match to lead the team from outside the stadium, in the match that the people of the South lost with two clean goals.', '1610030895.jpg', 1, '2021-01-07 12:48:15', '2021-01-07 12:48:15'),
(5, 4, 'العلم يكشف: هكذا تؤثر درجات الحرارة على فيروس \"كورونا\"', 'Science reveals: This is how temperatures affect the \"Corona\" virus', 'في الوقت الذي يواصل فيه فيروس \"كورونا\" المستجد حصد الأرواح حول العالم، كشفت باحثة صينية عن علاقة المرض بدرجات الحرارة، وتأثير الأحوال الجوية على انتشار الفيروس', 'At a time when the emerging \"Corona\" virus continues to claim lives around the world, a Chinese researcher revealed the relationtions on the spread of the virus', 'في الوقت الذي يواصل فيه فيروس \"كورونا\" المستجد حصد الأرواح حول العالم، كشفت باحثة صينية عن علاقة المرض بدرجات الحرارة، وتأثير الأحوال الجوية على انتشار الفيروس.\r\n\r\n\r\nونقلت صحيفة \"تشاينا توداي\" الصينية عن الباحثة في الجمعية الطبية الصينية تانغ تشين، قولها إن فيروس \"كورونا\" يفقد نشاطه بشكل أكبر مع ارتفاع درجات الحرارة.\r\n\r\nوأضافت تشين قائلة: \"يفقد الفيروس قوته كلما ارتفعت الحرارة، وتمثل درجة الحرارة 56 مئوية أفضل الدرجات التي يتراجع فيها نشاط كورونا بقوة وبسرعة\"', 'At a time when the emerging \"Corona\" virus continues to claim lives around the world, a Chinese researcher revealed the relationship of the disease with temperatures, and the effect of weather conditions on the spread of the virus.\r\n\r\n\r\nThe Chinese newspaper \"China Today\" quoted a researcher at the Chinese Medical Association, Tang Chen, as saying that the \"Corona\" virus is losing its activity more as temperatures rise.\r\n\r\nChen added, \"The virus loses its strength whenever the temperature rises, and the temperature of 56 degrees Celsius represents the best degree in which Corona\'s activity decreases strongly and quickly.\"', '1610031022.jpg', 1, '2021-01-07 12:50:22', '2021-01-07 12:50:22'),
(6, 5, 'هل توصل أطباء تايلاند إلى علاج لفيروس كورونا', 'Have Thai doctors found a treatment for Corona virus?', 'كشف أطباء تايلانديون، الأحد، أنهم حققوا نجاحا في معالجة حالات شديدة من الإصابة بفيروس كورونا الجديد، وكانت إحداها لامرأة صينية تبلغ من العمر 70 عاما', 'Thai doctors revealed, on Sunday, that they have achieved success in treating severe cases of infection with the new Corona virus, one of which was a 70-year-old Chinese woman.', 'وقال الأطباء التايلانديون إنهم نجحوا في علاج حالات شديدة من الإصابة بالفيروس مستخدمين مزيجا من أدوية الإنفلونزا وفيروس مرض نقص المناعة المكتسب الإيدز \"إتش.أي.في\"، وأظهرت النتائج الأولية تحسنا كبيرا خلال 48 ساعة من بدء العلاج.\r\n\r\nوأوضح الأطباء من مستشفى \"راجافيثي\" في العاصمة بانكوك، أن النهج الجديد في علاج فيروس كورونا أدى إلى تحسن حالات عدد من المرضى تحت رعايتهم، ومنهم امرأة صينية من مدينة ووهان بمقاطعة هوبي في الصين، تبلغ من العمر 70 عاما، أكدت التحاليل إصابتها بالفيروس قبل 10 أيام.\r\n\r\nويشمل العلاج مزيجا من عقارين لمكافحة فيروس الإيدز، هما لوبينافير وريتونافير، إلى جانب جرعات كبيرة من عقار الإنفلونزا أوزيلتاميفير.', 'Thai doctors said that they had succeeded in treating severe cases of HIV infection using a combination of influenza and HIV / AIDS drugs, and initial results showed a significant improvement within 48 hours of starting treatment.\r\n\r\nDoctors from the \"Rajavithi\" Hospital in the capital, Bangkok, said that the new approach to treating the Corona virus has led to an improvement in the conditions of a number of patients under their care, including a 70-year-old Chinese woman from Wuhan, Hubei Province in China, who tested positive for the virus before 10 days.\r\n\r\nTreatment includes a combination of two anti-HIV drugs, lopinavir and ritonavir, along with large doses of the influenza drug oseltamivir.', '1610031097.jpg', 1, '2021-01-07 12:51:38', '2021-01-07 12:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin can add or remove all', '2021-01-07 06:46:33', '2021-01-07 06:46:33'),
(2, 'supervisor', 'supervisor', 'supervisor can accept or reject posts', '2021-01-07 06:46:33', '2021-01-07 06:46:33'),
(3, 'writer', 'writer', 'writer can write posts', '2021-01-07 06:46:34', '2021-01-07 06:46:34'),
(4, 'user', 'user', 'user can write comments', '2021-01-07 06:46:34', '2021-01-07 06:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `bio`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed Galal', 'kira2000united@gmail.com', NULL, '$2y$10$MtbEA9OqYTuVoYU9FwPvUOsbjaBR8ZFkij2SYAF7f/ZoQsHQmwvru', 'المهندس المصمم و المؤسس للموقع و احد العاملين به', '1.jpg', NULL, '2021-01-07 06:46:36', '2021-01-07 12:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
