-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `comment_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_credate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`comment_id`, `comment_description`, `comment_user_id`, `comment_product_id`, `created_at`, `updated_at`, `comment_order`, `comment_credate`) VALUES
(22, 'sdfsdf', '7', '23', '2021-05-19 13:22:50', NULL, '7', '2021-05-19 13:22:50'),
(23, 'gdfg', '7', '23', '2021-05-19 13:22:53', NULL, '8', '2021-05-19 13:22:53'),
(24, 'test1', '7', '12', '2021-05-19 21:12:32', NULL, '9', '2021-05-19 21:12:32'),
(25, 'test2', '7', '12', '2021-05-19 21:12:36', NULL, '10', '2021-05-19 21:12:36'),
(26, 'test3', '7', '12', '2021-05-19 21:12:38', NULL, '10', '2021-05-19 21:12:38'),
(27, 'test4', '7', '12', '2021-05-19 21:12:41', NULL, '10', '2021-05-19 21:12:41'),
(28, 'test5', '7', '12', '2021-05-19 21:12:45', NULL, '10', '2021-05-19 21:12:45'),
(29, 'test6', '7', '12', '2021-05-19 21:12:48', NULL, '10', '2021-05-19 21:12:48'),
(30, 'test1', '7', '27', '2021-05-19 21:14:40', NULL, '10', '2021-05-19 21:14:40'),
(31, 'test2', '10', '27', '2021-05-19 21:14:53', NULL, '10', '2021-05-19 21:14:53'),
(32, 'test4', '10', '27', '2021-05-19 21:14:56', NULL, '10', '2021-05-19 21:14:56'),
(33, 'test3', '10', '27', '2021-05-19 21:15:00', NULL, '10', '2021-05-19 21:15:00'),
(34, 'test5', '10', '27', '2021-05-19 21:15:03', NULL, '10', '2021-05-19 21:15:03'),
(35, 'test6', '10', '27', '2021-05-19 21:15:09', NULL, '10', '2021-05-19 21:15:09');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_18_072326_create_user_tbl', 2),
(5, '2021_05_18_115933_create_product_tbl', 3),
(6, '2021_05_18_195348_create_comment_tbl', 4),
(7, '2021_05_19_125841_prize_tb', 5),
(8, '2021_05_19_130130_prize_table', 6);

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
-- Table structure for table `prize_tb`
--

CREATE TABLE `prize_tb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seconde_prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neight_first_prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_digit_prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cre_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `product_key`, `product_name`, `product_detail`, `product_price`, `product_img`, `created_at`, `updated_at`, `product_order`) VALUES
(12, 'P0000002', 'item2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '1011', NULL, '2021-05-18 19:13:26', NULL, '2'),
(23, 'P0000003', 'item1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '5000', NULL, '2021-05-19 13:22:44', NULL, '3'),
(24, 'P0000004', 'item3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '230', NULL, '2021-05-19 21:13:27', NULL, '4'),
(25, 'P0000005', 'item4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '1234', NULL, '2021-05-19 21:13:37', NULL, '5'),
(26, 'P0000006', 'item5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '12348', NULL, '2021-05-19 21:13:49', NULL, '6'),
(27, 'P0000007', 'item6', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, enim tenetur. Vel blanditiis, aliquam similique inventore illo et doloremque nam.', '5555', NULL, '2021-05-19 21:14:14', NULL, '7');

-- --------------------------------------------------------

--
-- Table structure for table `sy_stf`
--

CREATE TABLE `sy_stf` (
  `sy_stf_id` bigint(20) UNSIGNED NOT NULL,
  `sy_stf_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sy_stf_logdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sy_stf`
--

INSERT INTO `sy_stf` (`sy_stf_id`, `sy_stf_gender`, `sy_stf_fname`, `sy_stf_lname`, `sy_stf_username`, `sy_stf_password`, `sy_stf_status`, `sy_stf_roll`, `sy_stf_email`, `sy_stf_order`, `sy_stf_logdate`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, NULL, 'Admin', 'rT5jnJ1gq2EZLJ1lM2I0pTy1rSZWewEb3Q', 'Enable', 'Superadmin', NULL, '3', '2021-05-18 10:33:53', '2021-05-18 10:33:53', NULL),
(10, NULL, NULL, NULL, 'user1', 'MmE0Z2xlrQRWewEb3Q', 'Enable', 'Normal', NULL, '4', '2021-05-18 11:48:47', '2021-05-18 11:48:47', NULL),
(11, NULL, NULL, NULL, 'user2', 'MmE0Z2xlrQRWewEb3Q', 'Enable', 'Normal', NULL, '5', '2021-05-19 08:08:39', '2021-05-19 08:08:39', NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`comment_id`);

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
-- Indexes for table `prize_tb`
--
ALTER TABLE `prize_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sy_stf`
--
ALTER TABLE `sy_stf`
  ADD PRIMARY KEY (`sy_stf_id`);

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
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
-- AUTO_INCREMENT for table `prize_tb`
--
ALTER TABLE `prize_tb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sy_stf`
--
ALTER TABLE `sy_stf`
  MODIFY `sy_stf_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
