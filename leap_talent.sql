-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 03:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leap_talent`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_compaigns`
--

CREATE TABLE `apply_for_compaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `seen` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_for_compaigns`
--

INSERT INTO `apply_for_compaigns` (`id`, `trainee_id`, `trainer_id`, `status`, `seen`, `created_at`, `updated_at`) VALUES
(3, 5, 2, '0  ', 1, '2023-05-07 17:52:28', '2023-05-22 17:01:18'),
(4, 124, 96, '0', 1, '2023-05-30 16:07:03', '2023-05-30 16:09:00'),
(5, 148, 147, '0', 1, '2023-05-31 11:46:36', '2023-05-31 11:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `timeline` varchar(191) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` varchar(191) NOT NULL,
  `latitude` varchar(191) NOT NULL,
  `longitude` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `trainer_id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(18, '96', '30.1870131756', '71.4371797079', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(19, '97', '30.181459', ' 71.492157', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(20, '98', '30.2267', '71.4761', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(21, '99', '71.5090', '71.5090', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(22, '100', '30.181459', ' 71.492157', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(23, '101', '30.181459', '71.492157', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(24, '102', '30.1870131756', '71.4371797079', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(25, '103', '30.110752', '71.421164', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(26, '104', '30.263864', '30.263864', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(27, '105', '30.223305', '71.475203', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(28, '106', '30.2', '71.4167', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(29, '107', '30.1870131756', '71.4371797079', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(30, '108', '31.485722', '74.32648689999996', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(31, '109', '30.110752', '71.421164', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(32, '110', '30.2', '71.4167', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(33, '111', '30.1870131756', '71.4371797079', '2023-05-25 14:32:25', '2023-05-25 14:32:25'),
(34, '138', '28.4340449', '70.3101645', '2023-05-30 09:40:24', '2023-05-30 09:40:24'),
(35, '142', '30.157458', '71.5249154', '2023-05-31 05:40:01', '2023-05-31 05:40:01'),
(36, '147', '30.2216', '71.4702', '2023-05-31 11:19:34', '2023-05-31 11:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_01_183631_create_categories_table', 1),
(6, '2022_02_01_183658_create_languages_table', 1),
(7, '2022_02_07_184350_create_notification_table', 1),
(8, '2022_02_07_190726_create_app_slider', 1),
(9, '2022_06_03_055209_create_event_table', 1),
(10, '2023_04_06_205639_create_ratings_table', 2),
(11, '2023_04_06_223505_create_register_courses_table', 3),
(12, '2023_04_06_220857_create_registrations_table', 4),
(13, '2023_04_07_210629_create_apply_for_compaigns_table', 5),
(14, '2023_04_09_140750_create_locations_table', 6),
(15, '2023_04_09_211007_create_reviews_table', 7),
(16, '2023_04_11_210246_create_compaign_registrations_table', 8),
(17, '2023_05_09_211721_create_trainer_reviews_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `rating` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `trainee_id`, `trainer_id`, `rating`, `created_at`, `updated_at`) VALUES
(2, 10, 10, '5', '2023-04-06 16:50:24', '2023-04-06 18:18:44'),
(3, 10, 10, '3', '2023-04-06 16:50:35', '2023-04-06 16:50:35'),
(4, 7, 10, '3', '2023-04-06 19:04:35', '2023-04-06 19:04:35'),
(5, 3, 3, '4', '2023-04-07 14:29:06', '2023-04-07 14:29:06'),
(6, 15, 15, '4', '2023-04-09 20:30:31', '2023-04-09 20:30:38'),
(7, 23, 18, '4', '2023-05-04 15:43:15', '2023-05-04 15:43:15'),
(8, 5, 11, '4', '2023-05-07 19:00:44', '2023-05-07 19:00:44'),
(9, 5, 2, '2', '2023-05-13 15:39:11', '2023-05-22 01:20:07'),
(10, 5, 10, '4', '2023-05-21 16:07:35', '2023-05-21 16:48:58'),
(11, 124, 96, '4', '2023-05-26 14:26:12', '2023-05-26 14:26:12'),
(12, 125, 97, '3', '2023-05-26 14:55:03', '2023-05-26 14:55:03'),
(13, 126, 110, '5', '2023-05-26 15:06:07', '2023-05-26 15:06:07'),
(14, 130, 106, '4', '2023-05-26 15:19:38', '2023-05-26 15:19:38'),
(15, 132, 108, '5', '2023-05-26 15:23:13', '2023-05-26 15:23:13'),
(16, 133, 102, '3', '2023-05-26 15:25:06', '2023-05-26 15:25:06'),
(17, 135, 100, '4', '2023-05-26 15:29:09', '2023-05-26 15:29:09'),
(18, 143, 142, '3', '2023-05-31 06:11:26', '2023-05-31 06:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` varchar(191) DEFAULT NULL,
  `trainer_id` varchar(191) DEFAULT NULL,
  `registration_image` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `seen` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `trainee_id`, `trainer_id`, `registration_image`, `start_date`, `end_date`, `status`, `seen`, `created_at`, `updated_at`) VALUES
(17, '124', '96', '6173058431685128773.png', '2023-03-26 19:01:16', '2023-06-26 19:01:16', '1', 1, '2023-03-26 14:01:16', '2023-05-30 15:33:55'),
(18, '125', '97 ', '6591636141685130735.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 14:43:52', '2023-05-26 14:52:15'),
(19, '126', '110', '5445234341685131433.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:03:40', '2023-05-26 15:03:53'),
(20, '128', '98', '7339838201685132137.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:15:26', '2023-05-26 15:15:37'),
(21, '130', '106', '5899867691685132312.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:18:18', '2023-05-26 15:18:32'),
(22, '132', '108', '5899867691685132312.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:21:24', '2023-05-26 15:21:24'),
(23, '133', '102', '1705072611685132715.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:25:00', '2023-05-26 15:25:15'),
(24, '135', '100', '1032721821685132941.png', '2023-02-26 19:01:16', '2023-05-26 19:01:16', '1', 1, '2023-05-26 15:28:50', '2023-05-26 15:29:01'),
(28, '137', '99', NULL, '2023-05-29 18:28:05', '2023-08-29 18:28:05', NULL, NULL, '2023-05-29 13:28:05', '2023-05-29 13:28:05'),
(32, '143', '100', '2917507611685531475.png', '2023-05-31 11:00:17', '2023-08-31 11:00:17', '1', 1, '2023-05-31 06:00:17', '2023-05-31 06:20:28'),
(33, '143', '142', '2917507611685531475.png', '2023-05-31 11:10:39', '2023-08-31 11:10:39', NULL, 1, '2023-08-31 06:10:39', '2023-05-31 06:12:20'),
(34, '146', '142', '7713642281685547960.jpg', '2023-05-31 15:45:42', '2023-08-31 15:45:42', NULL, NULL, '2023-05-31 10:45:42', '2023-05-31 10:46:00'),
(35, '146', '101', NULL, '2023-04-25 15:46:40', '2023-07-25 15:46:40', '1', 1, '2023-04-25 10:46:40', '2023-05-31 10:46:40'),
(36, '148', '147', '1871642371685550509.jpg', '2023-02-26 16:28:06', '2023-05-26 16:28:06', '1', 1, '2023-02-26 11:28:06', '2023-05-31 11:35:08'),
(37, '124', '97', NULL, '2023-06-02 16:23:11', '2023-09-02 16:23:11', NULL, NULL, '2023-06-02 11:23:11', '2023-06-02 11:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` varchar(191) NOT NULL,
  `trainer_id` varchar(191) NOT NULL,
  `reviews` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `trainee_id`, `trainer_id`, `reviews`, `created_at`, `updated_at`) VALUES
(1, '7', '2', 'Most intelligent trainee of this course i have...keep it up', '2023-04-09 16:29:17', '2023-04-09 16:29:17'),
(2, '5', '2', 'vbvcbvcbvc', '2023-05-12 15:16:41', '2023-05-12 15:16:41'),
(3, '124', '96', 'gdgdgfdgffgdf', '2023-05-29 13:37:17', '2023-05-29 13:37:17'),
(4, '124', '96', 'dsfdfdsfds', '2023-05-29 13:37:25', '2023-05-29 13:37:25'),
(5, '140', '96', 'My best trainee in this batch', '2023-05-30 16:25:01', '2023-05-30 16:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_reviews`
--

CREATE TABLE `trainer_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainee_id` varchar(191) NOT NULL,
  `trainer_id` varchar(191) NOT NULL,
  `reviews` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainer_reviews`
--

INSERT INTO `trainer_reviews` (`id`, `trainee_id`, `trainer_id`, `reviews`, `created_at`, `updated_at`) VALUES
(4, '124', '96', 'I have Completed my course and happy to be a part of this course.', '2023-05-26 14:25:21', '2023-05-26 14:25:21'),
(5, '124', '96', 'I Highly recomend to start course here', '2023-05-26 14:26:06', '2023-05-26 14:26:06'),
(7, '125', '97', 'I have Completed my course and happy to be a part of this course.', '2023-05-26 14:54:15', '2023-05-26 14:54:15'),
(8, '126', '110', 'I have Completed my course and happy to be a part of this course.', '2023-05-26 15:05:11', '2023-05-26 15:05:11'),
(9, '128', '98', 'I like the course.', '2023-05-26 15:17:13', '2023-05-26 15:17:13'),
(10, '130', '106', 'i am So happy to be a part of this course', '2023-05-26 15:20:18', '2023-05-26 15:20:18'),
(11, '132', '108', 'A best platform of online courses...', '2023-05-26 15:23:06', '2023-05-26 15:23:06'),
(12, '133', '102', 'It everage platform its needed to be improve and improve trianers...Thank you', '2023-05-26 15:27:15', '2023-05-26 15:27:15'),
(13, '135', '100', 'I really enjoyed this course and also recommend all users to join as soon as possible...', '2023-05-26 15:31:47', '2023-05-26 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `user_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `is_verified` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) DEFAULT NULL,
  `phone_number` varchar(191) DEFAULT NULL,
  `shop_number` varchar(191) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `id_card` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `trainer_role` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `compaign` int(255) DEFAULT NULL,
  `online_course` int(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `availability` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `is_verified`, `email_verified_at`, `password`, `role`, `phone_number`, `shop_number`, `location`, `id_card`, `city`, `trainer_role`, `category`, `address`, `image`, `status`, `compaign`, `online_course`, `remember_token`, `created_at`, `updated_at`, `availability`) VALUES
(96, 'Fahad', 'Rehman ', 'Fahad11 ', 'fahad@gmail.com', NULL, NULL, '$2y$10$UvgD0KE9Eo9h1ddkbGx6eukGim133IDGWjSL5x4uRnlXQ3mfcXN4q', 'trainer', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', 'Electrician', NULL, 'Multan ', '1685125104552.jpg', NULL, 0, NULL, NULL, '2023-05-24 16:36:51', '2023-05-30 16:20:37', 1),
(97, 'Ali  ', 'Khan ', 'Ali12 ', 'ali@gmail.com', NULL, NULL, '$2y$10$/cba75XhhGM5MqyY78YtlObwUqjhpf9OtGHeQzJYiE4ecODt8y3Fi', 'trainer', '03341487100 ', 'A110 ', 'Railway Road, Multan ', '32678-3246004-4', 'Multan ', 'Electrician', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(98, 'Hamza ', 'Sheikh ', 'Hamza87 ', 'hamza@gmail.com', NULL, NULL, '$2y$10$K3iFv3XPTkvx5xJAm24BeeassNpyzhiLCUdQCfbrgvtAKXTL/zurC', 'trainer', '03113615436 ', 'D101 ', 'Gardezi market, Multan ', '32571-3456113-4', 'Multan ', 'Mechanic', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(99, 'Abdullah ', 'Rauf ', 'Abdullah22 ', 'abdullah@gmail.com', NULL, NULL, '$2y$10$3Jf86AA/IBhKIEHouQ4Tt.y8x6KwKMNhehmYeOgdKz.0qXS6m6VWK', 'trainer', '03330376220 ', 'A222 ', 'Vehari chowk, Multan ', '32788-3257223-5 ', 'Multan ', 'Mechanic', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(100, 'Zain ', 'Khalid ', 'Khalid ', 'zain@gmail.com', NULL, NULL, '$2y$10$XOUFR0tjwJaeUbJTarYA9uJ0TkzLXrHupZecFQYFHc.OV58IW10Yi', 'trainer', '03008637386 ', 'A341 ', 'Railway Road, Multan ', '32571-3456113-4 ', 'Multan ', 'Chef', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(101, 'Haris ', 'Ahsan ', 'Haris44 ', 'haris@gmail.com', NULL, NULL, '$2y$10$cK6iRkdY1Cf6tJhBHz/bb.nz9XYwZHfalmUtjJRb0ctUVvfM/EGly', 'trainer', '03410379420 ', 'B240 ', 'Bahawalpur Bypass, Multan ', '32788-3257223-5 ', 'Multan ', 'Chef', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(102, 'Rizwan', 'Adil ', 'Rizwan99 ', 'rizwan@gmail.com', NULL, NULL, '$2y$10$eKCRcSoazLytL4NkEsH3UevXMXH/6mDxeBmTg7aX4CyhiK/djkevi', 'trainer', '03324736536 ', 'E98 ', 'Sadar bazar cantt ', '33682-3577243-6 ', 'Multan ', 'Tailor', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(103, 'Farhan', 'Khan ', 'Farhan39 ', 'farhan@gmail.com', NULL, NULL, '$2y$10$Q3246luDf9285CIV1Wr2bucZZ7Gupv.tdeehgTni916nFV7txeKGa', 'trainer', '03330376220 ', 'C114 ', 'A76	Northern Bypass, Multan', '33679-3368113-9 ', 'Multan ', 'Tailor', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(104, 'Zeeshan', 'Haider ', 'Zeeshan114 ', 'zeeshan@gmail.com', NULL, NULL, '$2y$10$0I1tggmRn6sG3G.bCXbGRejmpqBgb0qps4w56eaRFbmUtO4YGoiLa', 'trainer', '03337547636 ', 'D248 ', 'Bosan Road, Multan ', '31794-3686241-7', 'Multan ', 'Barber', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(105, 'Ibrahim', 'Rashid ', 'Ibrahim02 ', 'ibrahim@gmail.com', NULL, NULL, '$2y$10$o74oBp8OyPOCmkumqI1eL.j.A5eC8mHl9LZhWqmq1t9pw0Bm706d.', 'trainer', '03330376220 ', 'C114 ', 'A66	Gardezi market, Multan ', '32989-3279223-1 ', 'Multan ', 'Barber', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(106, 'Yousaf', 'Ali ', 'Yousaf113 ', 'yousaf@gmail.com', NULL, NULL, '$2y$10$oHb.EGyAyiWKjrlGNl6yXeW5jSoaxYaZunfdCWsGcXFkXS.1XQmPi', 'trainer', '03118659016 ', 'B211 ', 'Railway Road, Multan ', '32996-3266341-9 ', 'Multan ', 'Artist', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:51', '2023-05-24 16:36:51', 1),
(107, 'M.', 'Usman ', 'Usman011 ', 'usman@gmail.com', NULL, NULL, '$2y$10$5f47L1mV7X/7GCgwgzuebONbNNQQCVx7BQeI65vociKuRe.YhPDrm', 'trainer', '03317222101 ', 'C141 ', 'Sadar Bazar Cantt, Multan ', '33889-3230123-4 ', 'Multan ', 'Artist', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:52', '2023-05-24 16:36:52', 1),
(108, 'Faizan', 'Bilal ', 'Faizan ', 'faizan@gmail.com', NULL, NULL, '$2y$10$lZHVAfn6bv/3Rava2plcleyzAGwNSoZOHXf78fR2RyfhlKPrWtgJ.', 'trainer', '03337196791 ', 'E678 ', 'Model Town, Multan ', '32778-3255541-1 ', 'Multan ', 'Gardener', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:52', '2023-05-24 16:36:52', 1),
(109, 'Rauf', 'Abdullah ', 'Rauf011 ', 'rauf@gmail.com', NULL, NULL, '$2y$10$JcWIYaQ9GZ1nqtNcKjKDEOfBOnOQN1ujtT6UlWCfiI63NakKdidpq', 'trainer', '03317222101 ', 'C100 ', 'Northern Bypass, Multan', '33446-3200113-5', 'Multan ', 'Gardener', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:36:52', '2023-05-24 16:36:52', 1),
(110, 'Adnan', 'Rasheed', 'Adnan56', 'adnan@gmail.com', NULL, NULL, '$2y$10$UH9zOpaXGvSwknZveyw3cOeDmUeH1lgqbRgSA77UVGqkdA5No/W2O', 'trainer', '03216324321', 'X114 ', 'Sadar bazar cantt, Multan ', '30042-2345102-2 ', 'Multan ', 'Plumber', NULL, 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:50', '2023-05-24 16:38:50', 1),
(124, 'Arham', 'Rehman ', 'Arham11 ', 'arham@gmail.com', NULL, NULL, '$2y$10$mAUak1DBMgKOm57mOvQdGeC2bFeZluh6TzNjtoeWspk5o7oouUQw2', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Electrician', 'Multan ', '1685125307325.jpg', NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-26 13:21:47', NULL),
(125, 'Usama', 'Khan ', 'usama11 ', 'usama@gmail.com', NULL, NULL, '$2y$10$kZqE2PwOVy8YqN3sB/tOxeiiwwGX0r7Vc92k0h2lQDHACCwQkhB5q', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Electrician', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(126, 'Abbas', 'Akram ', 'Abass11 ', 'abaas@gmail.com', NULL, NULL, '$2y$10$fsW1hdUXURruZg8x9eEcpO.wRSGWea2lfelxbfNaxcbDfdEk224ki', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Plumber', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(127, 'Usman', 'Khan ', 'usman11 ', 'usman@gmail.com', NULL, NULL, '$2y$10$zOofbrEYULGm0XtMnUVsTuzlSkc/uqd3Zs4SLi8awQnBAql7fetWW', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Plumber', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(128, 'Shahid', 'Akram ', 'Shahid223 ', 'shahid@gmail.com', NULL, NULL, '$2y$10$Py4HKMd8gJeLu7ua2veSxeFfeKPnPMhblVyN0jLNzSYO48voc/tue', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Mechanic', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(129, 'Abrar', 'Khan ', 'Abrar ', 'abrar@gmail.com', NULL, NULL, '$2y$10$vq/roij3s4CuCl9wkNYEpOCohC4TWwX.Wn/WCAPtOxBlGEtCETrhO', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Mechanic', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(130, 'Choudry', 'Hamza ', 'Hamza112233 ', 'hamza120@gmail.com', NULL, NULL, '$2y$10$xrOksFuMmEIbd8yTRocLlegtmKn0LHp3ir.Vm0VY35caBKHG2Bvge', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Artist', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(131, 'Tarik', 'Ali ', 'tarik889 ', 'tarik@gmail.com', NULL, NULL, '$2y$10$Nx9XuHNqk2o1ZkYls2q9iu.zQUvkvqhODem9XVPk2Z7g3oUJ7XsWa', 'trainee', '03216324325 ', 'C114 ', 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Artist', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:38:52', '2023-05-24 16:38:52', NULL),
(132, 'Ajmal', 'Khan', 'ajmal008', 'ajmal@gmail.com', NULL, NULL, '$2y$10$OnSIBT2b9YuovGOgj98yGe4dbWsw0r9B3uTO/3DDu2mcPuJGp0CX.', 'trainee', '03076756546', NULL, NULL, '34564-0987876-3', 'Cant,Multan', NULL, 'Gardener', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-24 16:45:48', '2023-05-24 16:46:52', NULL),
(133, 'Junaid', 'Rehman', 'junaid007', 'junaid@gmail.com', NULL, NULL, '$2y$10$LMYHLjChM36Iq4Aet2UMRu4H2ziXXdmpscK3zsJPBCgiAMhu.NmJS', 'trainee', '03087656454', NULL, NULL, '31345-6654787-3', 'Cant,Multan', NULL, 'Tailor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-25 14:36:46', '2023-05-26 10:10:37', NULL),
(135, 'Huzaifa', 'Satar ', 'huzaifa889 ', 'huzaifa@gmail.com', NULL, NULL, '$2y$10$3ZwqGAliknrPiHWrR4ypyetaT.5J85ym21z48Gy0JUZdEinhk8kpW', 'trainee', '03216324325 ', NULL, 'Sadar bazar cantt, Multan ', '32642-2345102-2 ', 'Multan ', NULL, 'Chef', 'Multan ', NULL, NULL, NULL, NULL, NULL, '2023-05-26 14:43:52', '2023-05-26 14:43:52', NULL),
(136, 'testing', 'trainer', 'dffgfgfdgff33', 'testingtrainer@gmail.com', NULL, NULL, '$2y$10$LcDKGvxA2Udw0Kxqy7NN8uElVvJkblDnllUa0exXnGHC5EII4oZMG', 'trainer', '35454343454', '45345434343435435435345', 'dgfdgfdgdf', '45354-3543543-4', 'fdgfdgdf', 'Chef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 12:29:09', '2023-05-29 12:45:21', NULL),
(137, 'new', 'trainee', 'fgfdgfdgfd', 'newtrainee@gmail.com', NULL, NULL, '$2y$10$aTySoMhyxfKhUvxGa/7Uk.n0YUCMZ8N.Nv9/PXXv2hVQ0Xu6gDzSW', 'trainee', '32453254324', NULL, NULL, '34324-3243243-2', 'dffsdfdsf', NULL, 'Mechanic', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 12:58:16', '2023-05-29 13:04:11', NULL),
(138, 'tesing', 'trainer', 'trainertesting1', 'testingtrainer1@gmail.com', NULL, NULL, '$2y$10$30aC/uGOensM8lc9f2Ztbes.zYAlSqJ8tASM1xKprOJzTKiHU2oDK', 'trainer', '23432432434', '3432434', 'multan', '42343-2423432-4', 'multan', 'Barber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 09:39:28', '2023-05-30 09:40:24', NULL),
(139, 'Atif', 'Rehman', 'atif007', 'atif@gmail.com', NULL, NULL, '$2y$10$MH0wnlqO6sUGYnxMLfi/..RMxXJ6/ymtzYZCTeZzDFTlutZYHVjdS', 'trainee', '03087656544', NULL, NULL, '30234-3434343-4', 'multan', NULL, 'Mechanic', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 10:17:38', '2023-05-30 10:19:16', NULL),
(141, 'fdgfgfdgfdfd', 'gfgfdgfd', 'fvfdvfdvfd', 'aaa@gmail.com', NULL, NULL, '$2y$10$.aH0XxLE.j5nFWnLe6LA4Od4G8IorJOTs12XFuiBqD8gJiZAM5D7O', 'trainee', '32432423332', NULL, NULL, '32432-4234324-3', 'dsfsdsfds', NULL, 'Plumber', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 16:14:12', '2023-05-30 16:15:49', NULL),
(142, 'Aliyan', 'Ali', 'aliyan110', 'aliyaan11@gmail.com', NULL, NULL, '$2y$10$eOu5NL1QwYp/kOWIfwZE9OzHlZBnsaWAL2IF88nO5vxIRDmMIIy5W', 'trainer', '03000612949', '232', 'multan', '56654-7666668-4', 'railway road muzaffarghar', 'Chef', NULL, NULL, '3167962111685529601.jpg', NULL, NULL, NULL, NULL, '2023-05-31 05:34:23', '2023-05-31 05:40:50', 1),
(143, 'Arham', 'khan', 'arham222', 'arham11@gmail.com', NULL, NULL, '$2y$10$mJalz7/LFfIFel/W0Rbqz.dZLETpbcJOm1.wrBQVQZr3AAwrl.xsG', 'trainee', '03000612949', NULL, NULL, '67670-7666668-5', 'abc chock bypass', NULL, 'Chef', NULL, '1685533294219.jpg', 1, NULL, NULL, NULL, '2023-05-31 05:50:28', '2023-05-31 06:41:34', NULL),
(144, 'Danial', 'Ali', 'danial112', 'danial11@gmail.com', NULL, NULL, '$2y$10$yKNJHtGbHZRpg5WT4YS4ouBnCmo1C4Ecr2wEMQq1cqPNLYTQsRBVC', 'trainee', '03000612949', NULL, NULL, '67676-7666666-4', 'abc chock M.garh', NULL, 'Chef', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 10:14:59', '2023-05-31 10:27:56', NULL),
(145, 'Mekaa', 'Alis', 'meka11', 'alis@gmail.com', NULL, NULL, '$2y$10$5bmbPS/9FC4X/lvgRIwbUun/v1JVHIfYZeKH9z9vBdubXGQwyhgSW', 'trainee', '11111111111', NULL, NULL, '43433-3224563-9', 'abc chock M.garh', NULL, 'Chef', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 10:28:43', '2023-05-31 10:30:30', NULL),
(146, 'Farooq', 'Ali', 'farooq11', 'ali123@gmail.com', NULL, NULL, '$2y$10$d.yzGapDBKt0sQ9S8ShWs.nh.tUfdbOVeivWdxQsnMEPhxyH5aCXO', 'trainee', '03000612949', NULL, NULL, '66666-3226477-4', 'abc chock M.garh', NULL, 'Chef', NULL, '6543687261685547780.jpg', NULL, NULL, NULL, NULL, '2023-05-31 10:41:25', '2023-05-31 10:43:00', NULL),
(147, 'Alpha', 'charli', 'alpha114', 'alpha110@gmail.com', NULL, NULL, '$2y$10$txZHNTOs288C8Uw/SGVy9OuXQMjsC5THbvvAWu3g1xHpOOGRdDv/G', 'trainer', '03876534343', '233', 'Multan', '12334-4455556-6', 'abc chock bypass', 'Chef', NULL, NULL, '5843429031685549974.jpg', NULL, 1, NULL, NULL, '2023-05-31 11:17:21', '2023-05-31 11:46:04', 1),
(148, 'Kaleem', 'Ali', 'ali333', 'ali333@gmail.com', NULL, NULL, '$2y$10$j/aV.RvU7qsiT3M/M82xGuRBNfO2./Ikf8UDGW3zEuerMF4pL2GJ.', 'trainee', '03000612949', NULL, NULL, '67676-7668666-4', 'abc chock M.garh', NULL, 'Chef', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 11:26:43', '2023-05-31 11:27:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_compaigns`
--
ALTER TABLE `apply_for_compaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_reviews`
--
ALTER TABLE `trainer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_for_compaigns`
--
ALTER TABLE `apply_for_compaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainer_reviews`
--
ALTER TABLE `trainer_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
