-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 08:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptdoaibu`
--

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
(3, '2018_06_07_161129_create_roles_table', 1),
(4, '2018_06_07_161510_create_transactions_table', 1),
(5, '2018_06_07_174925_create_role_users_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', NULL, NULL),
(2, 'administrator', NULL, NULL),
(3, 'adminbengkel', NULL, NULL),
(4, 'direksi', NULL, NULL),
(5, 'other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, '2018-07-02 20:41:47', 1, 1),
(2, NULL, '2018-07-02 20:39:40', 2, 2),
(3, NULL, '2018-07-02 20:42:37', 3, 3),
(4, NULL, '2018-07-02 20:15:27', 4, 4),
(5, NULL, '2018-07-02 21:34:19', 7, 5),
(6, NULL, NULL, 17, 5),
(7, NULL, '2018-07-02 21:36:59', 18, 5),
(8, '2018-06-26 02:26:38', '2018-07-02 20:57:57', 23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `items`, `qty`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'olie shell 1 lt', 1, 450000.00, 1, NULL, NULL),
(2, 'ban', 1, 999999.99, 3, NULL, NULL),
(3, 'ban', 1, 1500.00, 3, NULL, NULL),
(4, 'ban', 1, 1500.00, 3, NULL, NULL),
(5, 'ban', 1, 1500.00, 3, NULL, NULL),
(6, 'accu', 2, 250000.00, 3, NULL, NULL),
(7, 'accu', 2, 250000.00, 3, NULL, NULL),
(8, 'accu', 5, 750000.00, 3, NULL, NULL),
(9, 'accu', 5, 750000.00, 3, NULL, NULL),
(10, 'accu', 5, 750000.00, 3, NULL, NULL),
(11, 'accu', 5, 750000.00, 3, NULL, NULL),
(12, 'ban', 3, 250000.00, 3, NULL, NULL),
(13, 'busi', 20, 150000.00, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'superadmin', 'superadmin@admin.com', '$2y$10$r1Vo1DOiOvdPaSeH49oIW.D.UECbWo4sgLBj7LYGSoTojKHFt7HaG', '2018-06-07 10:52:37', '2018-06-07 10:52:37', 'M0wvXC63lqSjBkXGYxFxBTZK9gFLG8HENoGegajA6s512wGXYlBSvVqthQEz'),
(2, 'administrator', 'administrator@admin.com', '$2y$10$r1Vo1DOiOvdPaSeH49oIW.D.UECbWo4sgLBj7LYGSoTojKHFt7HaG', NULL, NULL, 'jOSfYWMFkfrjwl5CM71hMtpNSGhrdXakbCzSu9anJIRI1EGSlkVwORKlrzh0'),
(3, 'adminbengkel', 'adminbengkel@admin.com', '$2y$10$r1Vo1DOiOvdPaSeH49oIW.D.UECbWo4sgLBj7LYGSoTojKHFt7HaG', NULL, NULL, 'tvE3sLbG8KyoqKQeBb9N44cNCtzhfXhffuDQUuD7B99P8pJWQFhLAQOLagRH'),
(4, 'direksi', 'direksi@admin.com', '$2y$10$r1Vo1DOiOvdPaSeH49oIW.D.UECbWo4sgLBj7LYGSoTojKHFt7HaG', NULL, NULL, '7MMiPyfysWr51bOBYs33IGnHVD3IMesPfpUSEWqWrNrRWPYSOdwf9h3OsUMv'),
(7, 'adi', 'adi@admin.com', '$2y$10$xw3CnXWEeME.dDuoUkS16eLODfMylodDl1Vlmr9HTgM5ZOZ3Bb7Ga', '2018-06-21 02:28:46', '2018-06-21 02:28:46', 'cIkh4Ex5FLV4O5EV7xP6VFpC6q8iyIRGVmuAffoYRJ7L9JAJ90pZw90dyQSj'),
(17, 'ada', 'ada@admin.com', '$2y$10$KRyxIRqrQoYSLVBMM77One0ZvHszpHxpQDRXltScQ5aNebZn9Q.sy', '2018-06-21 23:24:28', '2018-06-21 23:24:28', 'qXbwkDL3x7xXsQBgwpLVWqk5RhfjFMNZwbfvl82eeyFT8PJt85fvqaj9qRCi'),
(18, '0', 'guest@admin.com', '$2y$10$ntqiEdGL4D/3BJ92MvS67.XV.d44FWG..d4oFnbJuncksXEfWl8BO', '2018-06-25 00:03:41', '2018-06-25 00:03:41', 'jaqkcApw84WSvlIYzYQOu9txqmtQMoi4iNrXsTDB8O8LfBgLQsOlkqjwNUix'),
(23, 'guest2', 'guest2@admin.com', '$2y$10$7pPs3P0HJwc6KOUqWKK5ouapvUwE8eeyMuakd3g.qKnDAs5QIubJW', '2018-06-26 02:26:38', '2018-06-26 02:26:38', 'HiUrs6JyX23dnbRZl63CAaXG4GoqL4HaHSrFfQVc6iuNAs7GI33iWhWmHLJ1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
