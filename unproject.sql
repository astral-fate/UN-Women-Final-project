-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 سبتمبر 2024 الساعة 12:13
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unproject`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1727084211),
('1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1727084211;', 1727084211),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1727085013),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1727085013;', 1727085013),
('fatemcah.it@gmail.com|127.0.0.1', 'i:1;', 1726999094),
('fatemcah.it@gmail.com|127.0.0.1:timer', 'i:1726999094;', 1726999094),
('test@hotmail.com|127.0.0.1', 'i:1;', 1727086397),
('test@hotmail.com|127.0.0.1:timer', 'i:1727086397;', 1727086397);

-- --------------------------------------------------------

--
-- بنية الجدول `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'UX', '2024-09-21 19:14:22', '2024-09-21 19:14:22'),
(2, 'Tech', '2024-09-21 19:14:30', '2024-09-21 19:14:30'),
(3, 'Marketing', '2024-09-21 19:14:40', '2024-09-21 19:14:40'),
(4, 'Design', '2024-09-22 07:12:09', '2024-09-22 07:12:09');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(2, 'Fatimah Mohammed', 'ino20012@gmail.com', 'Super cool', 'Super cool', 0, '2024-09-22 09:31:11', '2024-09-22 09:31:11'),
(3, 'Ahmed', 'ino2012@gmail.com', 'Insider Threats from Inadequate Policies', 'Malware from Unpatched Systems', 0, '2024-09-22 09:38:37', '2024-09-22 09:38:37'),
(4, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'Malware infection on operational systems', 0, '2024-09-22 14:07:39', '2024-09-22 14:07:39'),
(5, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'hallo', 0, '2024-09-22 17:24:54', '2024-09-22 17:24:54'),
(6, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'hallo', 0, '2024-09-22 17:27:13', '2024-09-22 17:27:13'),
(7, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 's', 0, '2024-09-22 17:27:25', '2024-09-22 17:27:25'),
(8, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 's', 0, '2024-09-22 17:29:41', '2024-09-22 17:29:41'),
(9, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 's', 0, '2024-09-22 17:29:50', '2024-09-22 17:29:50'),
(10, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'cc', 0, '2024-09-22 17:32:24', '2024-09-22 17:32:24'),
(11, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'cc', 0, '2024-09-22 17:32:49', '2024-09-22 17:32:49'),
(12, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'cc', 0, '2024-09-22 17:32:58', '2024-09-22 17:32:58'),
(13, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'cc', 1, '2024-09-22 17:33:08', '2024-09-23 06:15:34'),
(14, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'cc', 'cc', 1, '2024-09-22 17:36:48', '2024-09-23 06:14:50'),
(15, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Malware infection on operational systems', 'c', 1, '2024-09-22 17:39:23', '2024-09-23 06:08:11'),
(16, 'Fatimah Mohammed', 'fatemah.it@gmail.com', 'Unauthorized access to mining sites and system', 'halo', 0, '2024-09-23 05:37:22', '2024-09-23 05:37:22');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_09_21_212312_create_users_table', 2),
(8, '2024_09_21_212313_create_categories_table', 2),
(9, '2024_09_21_212313_create_topics_table', 2),
(10, '2024_09_21_212314_create_messages_table', 2),
(11, '2024_09_21_212314_create_testimonials_table', 2),
(12, '2024_09_21_215053_create_users_table', 3),
(13, '2024_09_21_215248_create_users_table', 3),
(14, '2024_09_22_101337_create_published_testimonials_view', 4);

-- --------------------------------------------------------

--
-- بنية الجدول `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `published_testimonials`
-- (See below for the actual view)
--
CREATE TABLE `published_testimonials` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`content` text
,`image` varchar(255)
);

-- --------------------------------------------------------

--
-- بنية الجدول `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YaG9fmFrm6CJeToubgvVYSODvLYikTvo1d4cREbW', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidjdJYkY0YTQzb3ViWHdBRUVsS21IVFk5UVB2REx5TzdiTk5EczBSTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI3MDg2MzQ1O319', 1727086366);

-- --------------------------------------------------------

--
-- بنية الجدول `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `image`, `is_published`, `created_at`, `updated_at`) VALUES
(12, 'fatma', 'kk', 'images/testimonials/1727041779_صورة1.png', 1, '2024-09-22 18:49:39', '2024-09-22 18:49:39'),
(13, 'AOU grads', 'ff', 'images/testimonials/1727041834_صورة2.png', 1, '2024-09-22 18:50:34', '2024-09-22 18:50:34'),
(14, 'UX', 'ffff', 'images/testimonials/1727041863_صورة3.png', 1, '2024-09-22 18:51:03', '2024-09-22 18:51:03'),
(15, 'somya ali', 'super cool thankx', 'images/testimonials/1727078504_sarah.png', 1, '2024-09-23 05:01:44', '2024-09-23 05:01:44');

-- --------------------------------------------------------

--
-- بنية الجدول `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_trending` tinyint(1) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `topics`
--

INSERT INTO `topics` (`id`, `title`, `content`, `category_id`, `user_id`, `image`, `views`, `is_trending`, `is_published`, `created_at`, `updated_at`) VALUES
(5, 'Full stack', 'full', 2, 1, 'images/topics/1727043497_Kidney Gaurd (5).jpg', 5, 1, 1, '2024-09-21 19:29:54', '2024-09-23 05:51:17'),
(6, 'Mobile dev', 'mobile', 2, 1, 'images/topics/1727043531_Soulition Arch (10).jpg', 0, 1, 1, '2024-09-21 19:30:21', '2024-09-22 19:18:51'),
(7, 'Front End Dev', 'Front End Dev', 2, 1, 'images/topics/1727043545_Kidney Gaurd.jpg', 2, 1, 1, '2024-09-22 07:09:06', '2024-09-23 05:51:26'),
(8, 'UI Design with Figma', 'UI Design with Figma', 1, 1, 'topic_images/mzFtysiO8Y5lHjc1xBfLmUIayBtL5k0LeKfLeLYe.png', 0, 0, 1, '2024-09-22 14:50:28', '2024-09-22 14:50:28'),
(9, 'User journey with Personas', 'User journey with Personas', 1, 1, 'images/topics/1727043092_undraw_Compose_music_re_wpiw.png', 1, 0, 1, '2024-09-22 14:51:01', '2024-09-22 19:11:32'),
(10, 'Usability testing', 'Usability testing', 1, 1, 'images/topics/1727042954_1727042944_undraw_online_ad_re_ol62.png', 11, 0, 1, '2024-09-22 14:51:38', '2024-09-23 04:59:59'),
(11, 'Social media branding', 'Social media branding', 3, 1, 'images/topics/1727043562_FWbuHEbUAAAP1d2-removebg-preview.png', 1, 0, 1, '2024-09-22 14:52:10', '2024-09-23 05:09:59'),
(12, 'Content Design and planning', 'Content Design and planning \r\nContent Design and planning\r\nContent Design and planning\r\nContent Design and planning\r\nContent Design and planning\r\nContent Design and planning', 3, 1, 'images/topics/1727042944_undraw_online_ad_re_ol62.png', 0, 0, 1, '2024-09-22 17:09:34', '2024-09-22 19:09:04'),
(13, 'Trends and SEO', 'Trends and SEO', 3, 1, 'images/topics/1727042935_undraw_Remote_design_team_re_urdx.png', 0, 0, 1, '2024-09-22 17:10:02', '2024-09-22 19:08:55'),
(14, 'User journey', 'ux', 1, 1, 'images/topics/1727043063_undraw_Finance_re_gnv2.png', 4, 0, 1, '2024-09-22 19:06:26', '2024-09-22 19:16:36');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `remember_token` varchar(225) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `username`, `email_verified_at`, `email`, `password`, `is_active`, `remember_token`) VALUES
(1, '2024-09-21 19:29:21', '2024-09-21 19:31:00', 'Fatimah', 'mohamed', 'astral', NULL, 'fatemah.it@gmail.com', '$2y$12$KKGsteRmT7Br8Mr7AluaReB6VjcOBYj5KOA8l3PbVy2i9SWYBnzpe', 1, 'JUy7kjEMuZJpHjBrx6UAvZ44MZYhIUPKDPzNLIxQGYtN4AQMNC1D5LsTXcqT'),
(2, '2024-09-22 07:07:28', '2024-09-22 07:07:28', 'Fatimah', 'mohamed', 'fatemah', NULL, 'ffatemah.it@gmail.com', '$2y$12$VV7RzIxA99TyA4yf10b3Zu0XXfmDsyQ.ACdS9XGrKVycxRIPBcM8y', 1, 'jgvaZ9uTOXcCggRcjJI3PnPerX3LqtYNrpYRKVxWbW0GfwmeTizYqBYNURPD'),
(3, '2024-09-23 06:33:10', '2024-09-23 06:33:10', 'Fatimah', 'ibrahim', 'fatemah.it@gmail.com', NULL, 'b.e.2.g.2017@gmail.com', '$2y$12$68cxEjFD6FLIVqnfr9tqNeRt6rQ.iAg9nGQXFH6yxVfI6zeVnANsG', 1, '2024-09-23 12:33:10'),
(4, '2024-09-23 06:34:28', '2024-09-23 06:35:51', 'Fatimah', 'ibrahim', 'astral11', '2024-09-23 06:35:51', 'ino20012@gmail.com', '$2y$12$571h1huoChZgmSM6NQG9BuAS7k4f5j8aUb0F7T9UTzRQsXSb0DMhq', 1, 'OmWrH39ulZbc4BxGprOlBy1GBM5aoBO53LJaN3ejha1cD39pHG4izRxgQYBJ'),
(5, '2024-09-23 06:49:03', '2024-09-23 06:49:13', 'Fatimah', 'mohamed', 'astral114', '2024-09-23 06:49:13', 'test@gmail.com', '$2y$12$EJ9NVkOrRv6Gm2mUKzKGpO1y2Nu.0FASOWcCwY.1M2ZxLISRdeqvm', 1, 'U4by758oDurOB51tBqn5IsnP1k5AUVZZZxqfxl9OYc1ZANTEFPYM0Zb4HDd6');

-- --------------------------------------------------------

--
-- Structure for view `published_testimonials`
--
DROP TABLE IF EXISTS `published_testimonials`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `published_testimonials`  AS SELECT `testimonials`.`id` AS `id`, `testimonials`.`name` AS `name`, `testimonials`.`content` AS `content`, `testimonials`.`image` AS `image` FROM `testimonials` WHERE `testimonials`.`is_published` = 1 ORDER BY `testimonials`.`created_at` DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_category_id_foreign` (`category_id`),
  ADD KEY `topics_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
