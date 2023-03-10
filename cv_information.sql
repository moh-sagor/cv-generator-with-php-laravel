-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 06:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_infos`
--

CREATE TABLE `cv_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `github` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `carrer` varchar(512) DEFAULT NULL,
  `skill_1` varchar(255) DEFAULT NULL,
  `skill_2` varchar(255) DEFAULT NULL,
  `skill_3` varchar(255) DEFAULT NULL,
  `skill_4` varchar(255) DEFAULT NULL,
  `skill_5` varchar(255) DEFAULT NULL,
  `project_1` varchar(255) DEFAULT NULL,
  `project_2` varchar(255) DEFAULT NULL,
  `project_3` varchar(255) DEFAULT NULL,
  `bsc` varchar(255) NOT NULL,
  `bsc_res` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `hsc_res` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `ssc_res` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_infos`
--

INSERT INTO `cv_infos` (`id`, `name`, `address`, `phone`, `email`, `github`, `linkedin`, `image`, `carrer`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `project_1`, `project_2`, `project_3`, `bsc`, `bsc_res`, `hsc`, `hsc_res`, `ssc`, `ssc_res`, `created_at`, `updated_at`) VALUES
(4, 'Md Sagor Hossain', 'House -68, Road -3 Mohammadpur Housing Limited, Mohammadpur, Dhaka-1207', '01740003789', 'rzsprince@gmail.com', 'moh-sagor', 'moh-sagor', '1708382002.JPG', 'Innovative and technically-astute Web development well-versed in analyzing user needs and developing web application to precisely meet diverse needs. Fluent in React to frontend web design and Django for backend web development. Team working is the power of productivity. To work meaningfully through consistency, discipline and hard work in creative and competitive environment based on strong commitment', 'PHP', 'Laravel', 'OOP', 'React', 'Problem Solving', 'Cv generator in Laravel', 'Result Generator', 'Portfolio', 'Daffodil International University', '3.71', 'Shaheed Govt. Bulbul Collage', '4.92', 'Pabna Cadet Collegiate School', '5.00', '2023-03-10 11:52:56', '2023-03-10 11:52:56'),
(5, 'MRS XYZ', 'House -68, Road -3 Mohammadpur Housing Limited, Mohammadpur, Dhaka-1207', '01740015646', 'farhana.sharmin.1042032', 'xyz-github', 'xyz-linkedin', '887316079.JPG', 'Innovative and technically-astute Web development well-versed in analyzing user needs and developing web application to precisely meet diverse needs. Fluent in React to frontend web design and Django for backend web development. Team working is the power of productivity. To work meaningfully through consistency, discipline and hard work in creative and competitive environment based on strong commitment', 'PHP', 'Laravel', 'OOP', 'React', 'Problem Solving', 'Cv generator in Laravel', 'Result Generator', 'Portfolio', 'Daffodil International University', '2.61', 'Shaheed Govt. Bulbul Collage', '3.00', 'Pabna Cadet Collegiate School', '4.00', '2023-03-10 11:55:08', '2023-03-10 11:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_09_170953_create_cv_infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_infos`
--
ALTER TABLE `cv_infos`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `cv_infos`
--
ALTER TABLE `cv_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
