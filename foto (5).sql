-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 04:22 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `aboutheader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abouttext` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutphoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `aboutheader`, `abouttext`, `aboutphoto`, `created_at`, `updated_at`) VALUES
(1, 'Hi I\'m Amila Pradeep', 'fdf', 'uploads/abouthotos/1598882570WhatsApp Image 2020-08-31 at 9.47.37 PM (3).jpeg', NULL, '2020-08-31 06:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wedding', NULL, NULL),
(2, 'Pre-Shoots', NULL, NULL),
(3, 'Functions', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` int(10) UNSIGNED NOT NULL,
  `coverphoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverphotophoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverphotoservices` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverphotoabout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverphotocontact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`id`, `coverphoto`, `coverphotophoto`, `coverphotoservices`, `coverphotoabout`, `coverphotocontact`, `created_at`, `updated_at`) VALUES
(1, '/uploads/coverphotos/1598883258WhatsApp Image 2020-08-31 at 9.47.34 PM (1).jpeg', '/uploads/coverphotos/1598882557WhatsApp Image 2020-08-31 at 9.47.34 PM (2).jpeg', '/uploads/coverphotos/1598882558WhatsApp Image 2020-08-31 at 9.47.34 PM (4).jpeg', '/uploads/coverphotos/1598882558WhatsApp Image 2020-08-31 at 9.47.34 PM (1).jpeg', '/uploads/coverphotos/1598882558WhatsApp Image 2020-08-31 at 9.47.36 PM (3).jpeg', NULL, '2020-08-31 06:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2020_08_24_173823_create_homes_table', 1),
(44, '2020_08_24_173853_create_contacts_table', 1),
(45, '2020_08_24_173914_create_services_table', 1),
(46, '2020_08_24_173936_create_photographies_table', 1),
(47, '2020_08_27_162743_create_settings_table', 1),
(48, '2020_08_29_130804_create_covers_table', 1),
(49, '2020_08_30_032517_create_abouts_table', 1),
(50, '2020_08_30_063438_create_albums_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographies`
--

CREATE TABLE `photographies` (
  `id` int(10) UNSIGNED NOT NULL,
  `photoname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newphoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Albumname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographies`
--

INSERT INTO `photographies` (`id`, `photoname`, `newphoto`, `Albumname`, `description`, `created_at`, `updated_at`) VALUES
(1, 'wed', '/uploads/newphotos/1598882603WhatsApp Image 2020-08-31 at 9.47.34 PM (5).jpeg', '1', 'blah', '2020-08-31 06:03:23', '2020-08-31 06:03:23'),
(2, 'a', '/uploads/newphotos/1598882616WhatsApp Image 2020-08-31 at 9.47.35 PM (2).jpeg', '1', 'ad', '2020-08-31 06:03:36', '2020-08-31 06:03:36'),
(3, 'sd', '/uploads/newphotos/1598882628WhatsApp Image 2020-08-31 at 9.47.34 PM (6).jpeg', '1', 'dsd', '2020-08-31 06:03:48', '2020-08-31 06:03:48'),
(4, 'dfs', '/uploads/newphotos/1598882641WhatsApp Image 2020-08-31 at 9.47.35 PM.jpeg', '1', 'fsf', '2020-08-31 06:04:01', '2020-08-31 06:04:01'),
(5, 'xcs', '/uploads/newphotos/1598882655WhatsApp Image 2020-08-31 at 9.47.36 PM (5).jpeg', '1', 'scs', '2020-08-31 06:04:15', '2020-08-31 06:04:15'),
(6, 'sds', '/uploads/newphotos/1598882670WhatsApp Image 2020-08-31 at 9.47.36 PM (4).jpeg', '1', 'sds', '2020-08-31 06:04:30', '2020-08-31 06:04:30'),
(7, 'sdsd', '/uploads/newphotos/1598882682WhatsApp Image 2020-08-31 at 9.47.36 PM (1).jpeg', '1', 'zxzx', '2020-08-31 06:04:42', '2020-08-31 06:04:42'),
(8, 'xsd', '/uploads/newphotos/1598882699WhatsApp Image 2020-08-31 at 9.47.37 PM.jpeg', '1', 'sds', '2020-08-31 06:04:59', '2020-08-31 06:04:59'),
(9, 'fdf', '/uploads/newphotos/1598882712WhatsApp Image 2020-08-31 at 9.47.34 PM (1).jpeg', '2', 'scxcx', '2020-08-31 06:05:12', '2020-08-31 06:05:12'),
(10, 'cxcsc', '/uploads/newphotos/1598882727WhatsApp Image 2020-08-31 at 9.47.34 PM (2).jpeg', '2', 'xcxc', '2020-08-31 06:05:27', '2020-08-31 06:05:27'),
(11, 'xzxz', '/uploads/newphotos/1598882740WhatsApp Image 2020-08-31 at 9.47.34 PM (3).jpeg', '2', 'zxzx', '2020-08-31 06:05:40', '2020-08-31 06:05:40'),
(12, 'xcxc', '/uploads/newphotos/1598882757WhatsApp Image 2020-08-31 at 9.47.34 PM.jpeg', '2', 'xcxc', '2020-08-31 06:05:57', '2020-08-31 06:05:57'),
(13, 'dsdcsc', '/uploads/newphotos/1598882780WhatsApp Image 2020-08-31 at 9.47.34 PM (4).jpeg', '2', 'cxc', '2020-08-31 06:06:20', '2020-08-31 06:06:20'),
(14, 'ssds', '/uploads/newphotos/1598882791WhatsApp Image 2020-08-31 at 9.46.35 PM (1).jpeg', '3', 'sdsd', '2020-08-31 06:06:31', '2020-08-31 06:06:31'),
(15, 'dsd', '/uploads/newphotos/1598882800WhatsApp Image 2020-08-31 at 9.46.35 PM.jpeg', '3', 'sdsd', '2020-08-31 06:06:40', '2020-08-31 06:06:40'),
(16, 'sdsds', '/uploads/newphotos/1598882812WhatsApp Image 2020-08-31 at 9.46.39 PM.jpeg', '3', 'sdsd', '2020-08-31 06:06:52', '2020-08-31 06:06:52'),
(17, 'sdsd', '/uploads/newphotos/1598882823WhatsApp Image 2020-08-31 at 9.46.44 PM.jpeg', '3', 'sdsd', '2020-08-31 06:07:03', '2020-08-31 06:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicephoto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `servicephoto`, `created_at`, `updated_at`) VALUES
(1, 'weddings', 'asakjdjhsgcgshcksjcklasjchasdsdsdsdsds', '/uploads/servicephoto/1598882854WhatsApp Image 2020-08-31 at 9.47.36 PM (4).jpeg', '2020-08-31 06:07:34', '2020-08-31 06:07:34'),
(2, 'pre-shoots', 'dffsdfsgfhggggggggggggggggggggggggg', '/uploads/servicephoto/1598882878WhatsApp Image 2020-08-31 at 9.47.34 PM (4).jpeg', '2020-08-31 06:07:58', '2020-08-31 06:07:58'),
(3, 'functions', 'zxzxzxz', '/uploads/servicephoto/1598882898WhatsApp Image 2020-08-31 at 9.46.59 PM.jpeg', '2020-08-31 06:08:18', '2020-08-31 06:08:18'),
(4, 'WildLife', 'sdsdsdmkkkkkkkkkkkkk', '/uploads/servicephoto/1598882925WhatsApp Image 2020-08-31 at 9.47.36 PM.jpeg', '2020-08-31 06:08:45', '2020-08-31 06:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `address`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Gunapala_Studio', 'Dehiattakandiya', '087977', 'ss@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gayan', 'admin@gmail.com', '$2y$10$08eDC0tFxYQ04AHUutzHouiefhK5/.Pxmm9XrxbSEtc5HT9pbFqLO', NULL, '2020-08-31 06:01:03', '2020-08-31 06:01:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
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
-- Indexes for table `photographies`
--
ALTER TABLE `photographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
