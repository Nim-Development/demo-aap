-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 23, 2019 at 02:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cateraars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cateraars`
--

CREATE TABLE `cateraars` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cateraars`
--

INSERT INTO `cateraars` (`id`, `naam`, `regio`, `created_at`, `updated_at`) VALUES
(1, 'Elbert Wintheiser', 'Lake Devan', '2019-12-23 12:46:52', '2019-12-23 12:46:52'),
(2, 'Prof. Gilda Smith', 'North Gretchen', '2019-12-23 12:46:52', '2019-12-23 12:46:52'),
(3, 'Miss Jazmyn Krajcik', 'West Loraine', '2019-12-23 12:46:52', '2019-12-23 12:46:52'),
(4, 'Prof. Wilmer Bode', 'Ortizhaven', '2019-12-23 12:46:52', '2019-12-23 12:46:52'),
(5, 'Assunta Koch', 'South Minerva', '2019-12-23 12:46:52', '2019-12-23 12:46:52');

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
(3, '2019_12_23_125502_create_cateraars_table', 1),
(4, '2019_12_23_132937_create_opdrachts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opdrachts`
--

CREATE TABLE `opdrachts` (
  `id` int(10) UNSIGNED NOT NULL,
  `cateraar_id` bigint(20) NOT NULL,
  `naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omschrijving` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oplever_datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opdrachts`
--

INSERT INTO `opdrachts` (`id`, `cateraar_id`, `naam`, `omschrijving`, `oplever_datum`, `created_at`, `updated_at`) VALUES
(1, 1, 'Greyson Murazik', 'Queen jumped.', '1974-07-17 14:08:05', '2019-12-23 12:47:32', '2019-12-23 12:47:32'),
(2, 1, 'Emile Cremin', 'There was no.', '1997-11-14 09:30:45', '2019-12-23 12:47:32', '2019-12-23 12:47:32'),
(3, 1, 'Georgette Greenholt Jr.', 'Alice did.', '2018-08-18 02:58:00', '2019-12-23 12:47:32', '2019-12-23 12:47:32'),
(4, 1, 'Eloisa Wuckert', 'I!\' he.', '1999-10-22 12:04:59', '2019-12-23 12:47:32', '2019-12-23 12:47:32'),
(5, 2, 'Mr. Dayton Lehner Sr.', 'Stigand.', '1976-11-08 08:54:01', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(6, 2, 'Mr. Jedediah Nader', 'Gryphon.', '1971-05-01 18:52:28', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(7, 2, 'Bette Beahan', 'Alice.', '1990-12-17 13:47:47', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(8, 2, 'Felton O\'Connell', 'Alice began.', '1997-04-10 04:27:31', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(9, 2, 'Marisa Lebsack', 'Alice.', '1991-02-21 03:52:09', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(10, 2, 'Stanton Larson', 'Majesty?\' he.', '2019-02-21 08:44:55', '2019-12-23 12:47:57', '2019-12-23 12:47:57'),
(11, 3, 'Danyka Strosin', 'The.', '1971-01-17 04:50:36', '2019-12-23 12:48:08', '2019-12-23 12:48:08'),
(12, 3, 'Prof. Broderick Pouros V', 'SOMEBODY.', '1982-05-20 17:42:32', '2019-12-23 12:48:08', '2019-12-23 12:48:08'),
(13, 3, 'Paolo Klocko', 'Alice would.', '1988-06-11 22:55:23', '2019-12-23 12:48:08', '2019-12-23 12:48:08'),
(14, 4, 'Mrs. Aryanna Tromp II', 'Alice; \'but a.', '1995-09-03 21:44:23', '2019-12-23 12:48:15', '2019-12-23 12:48:15'),
(15, 4, 'Vance Altenwerth Sr.', 'Hatter, \'or.', '2002-07-02 10:12:51', '2019-12-23 12:48:15', '2019-12-23 12:48:15'),
(16, 5, 'Abdul Dach', 'King, and the.', '1981-02-15 02:48:10', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(17, 5, 'Ms. Thelma Botsford MD', 'I shall fall.', '1981-06-15 07:49:53', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(18, 5, 'Bobby Eichmann', 'King, going.', '1996-03-03 12:56:00', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(19, 5, 'Amos Hoppe I', 'Caterpillar.', '1997-08-05 10:35:30', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(20, 5, 'Skye Koss', 'At last the Dodo.', '1997-11-27 05:38:44', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(21, 5, 'Hosea Bahringer', 'Alice led.', '2015-07-20 06:02:14', '2019-12-23 12:48:24', '2019-12-23 12:48:24'),
(22, 5, 'Dr. Shayne Stroman', 'King, the.', '1993-08-21 08:19:52', '2019-12-23 12:48:24', '2019-12-23 12:48:24');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cateraars`
--
ALTER TABLE `cateraars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opdrachts`
--
ALTER TABLE `opdrachts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `cateraars`
--
ALTER TABLE `cateraars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opdrachts`
--
ALTER TABLE `opdrachts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
