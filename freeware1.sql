-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 01:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeware1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_users`
--

CREATE TABLE `add_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_users`
--

INSERT INTO `add_users` (`id`, `role`, `username`, `email`, `password`, `image`, `created_at`, `updated_at`, `status`) VALUES
(12, 'NGO', 'pushkarorgchem', 'ak7582176@gmail.com', 'push', 'Ajay Kumar1.png', '2020-06-06 14:20:51', '2020-06-06 14:20:51', '0'),
(13, 'Super Market', 'priya', 'ak7582176@gmail.com', 'priya', 'BS.png', '2020-06-06 14:23:07', '2020-06-06 14:23:07', '0'),
(14, 'Super Market', 'ajay', 'ak7582176@gmail.com', 'lal', 'C:\\xampp\\tmp\\php7736.tmp', '2020-06-06 14:25:46', '2020-06-06 14:25:46', '0'),
(15, 'Super Market', 'ajay', 'ak7582176@gmail.com', 'kumar', 'C:\\xampp\\tmp\\php36BA.tmp', '2020-06-06 17:22:57', '2020-06-06 17:22:57', '0'),
(16, 'Super Market', 'pushkarorgchem', 'ajay.kumar23@student.amity.edu', 'kumar', 'C:\\xampp\\tmp\\php446A.tmp', '2020-06-06 17:27:02', '2020-06-06 17:27:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_valets`
--

CREATE TABLE `add_valets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_03_075531_create_add_users_table', 1),
(4, '2020_06_03_120026_create_add_valets_table', 2),
(5, '2020_06_03_120833_create_add_valets_table', 3),
(6, '2020_06_03_170106_create_payment_methods_table', 4),
(7, '2020_06_04_152431_create_send_requests_table', 5),
(8, '2020_06_04_170524_create_receive_requests_table', 6),
(9, '2020_06_05_181338_create_send_request1s_table', 7),
(10, '2020_06_05_190354_create_send_request2s_table', 8),
(11, '2020_06_06_065655_create_send_responses_table', 9);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `method`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'GooglePay', 'C:\\xampp\\tmp\\phpCFEE.tmp', '2020-06-06 17:24:21', '2020-06-06 17:24:21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `send_request1s`
--

CREATE TABLE `send_request1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_request1s`
--

INSERT INTO `send_request1s` (`id`, `bill`, `gen`, `genby`, `due`, `image`, `created_at`, `updated_at`) VALUES
(1, '#556', '03/11/2020', 'Easy Day', '03/15/2020', 'C:\\xampp\\tmp\\phpCBD1.tmp', '2020-06-06 17:17:47', '2020-06-06 17:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `send_request2s`
--

CREATE TABLE `send_request2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen` date NOT NULL,
  `genby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_requests`
--

CREATE TABLE `send_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_requests`
--

INSERT INTO `send_requests` (`id`, `bill`, `gen`, `genby`, `due`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, '#556', '03/11/2020', 'Easy Day', '03/15/2020', 'C:\\xampp\\tmp\\php59D6.tmp', '2020-06-06 17:15:10', '2020-06-06 17:15:10', '1'),
(2, '#556', '03/11/2020', 'Easy Day', '03/15/2020', 'C:\\xampp\\tmp\\php66B0.tmp', '2020-06-06 17:20:41', '2020-06-06 17:20:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `send_responses`
--

CREATE TABLE `send_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, NULL, NULL, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_users`
--
ALTER TABLE `add_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_valets`
--
ALTER TABLE `add_valets`
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
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_request1s`
--
ALTER TABLE `send_request1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_request2s`
--
ALTER TABLE `send_request2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_requests`
--
ALTER TABLE `send_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_responses`
--
ALTER TABLE `send_responses`
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
-- AUTO_INCREMENT for table `add_users`
--
ALTER TABLE `add_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `add_valets`
--
ALTER TABLE `add_valets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_request1s`
--
ALTER TABLE `send_request1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_request2s`
--
ALTER TABLE `send_request2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_requests`
--
ALTER TABLE `send_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `send_responses`
--
ALTER TABLE `send_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
