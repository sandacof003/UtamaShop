-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 12:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utamashopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `kategori`, `deskripsi`, `cpu`, `ram`, `vga`, `harga`, `stok`, `berat`, `created_at`, `updated_at`) VALUES
(1, 'Laptop A', 'Laptop Gaming', 'intel i7 / ram 4GB / vga gt1050', 'kuat', 'cukup', 'cukup', 14000000, 3, 4000, NULL, NULL),
(2, 'Laptop B', 'Laptop Gaming', 'intel i3 / ram 4GB / vga quadro', 'lemah', 'cukup', 'kuat', 14000000, 3, 4000, NULL, NULL),
(3, 'Laptop C', 'Laptop Gaming', 'intel i5 / 2GB / VGA Quadro', 'cukup', 'lemah', 'kuat', 52186452, 3, 4000, NULL, NULL),
(4, 'Laptop D', 'Laptop Gaming', 'intel i3 / ram 8GB / vga gt1050', 'lemah', 'kuat', 'cukup', 9000000, 3, 4000, NULL, NULL),
(5, 'Laptop E', 'Laptop Gaming', 'intel i7 / ram 8GB / vga GT740', 'kuat', 'kuat', 'lemah', 4000000, 5, 4000, NULL, NULL),
(6, 'Laptop F', 'Laptop Gaming', 'intel i5 / ram 2GB / vga gt740', 'cukup', 'lemah', 'lemah', 7000000, 3, 4000, NULL, NULL),
(7, 'Laptop G', 'Laptop Gaming', 'intel i7 / ram 16GB / vga Quadro', 'kuat', 'kuat', 'kuat', 10000000, 2, 4000, NULL, NULL),
(8, 'Laptop H', 'Laptop Gaming', 'intel i3 / ram 6GB / vga GT740', 'lemah', 'cukup', 'lemah', 2000000, 2, 4000, NULL, NULL),
(9, 'Laptop I', 'Laptop Gaming', 'intel i7 / ram 2GB / vga GT1050', 'kuat', 'lemah', 'cukup', 4000000, 2, 4000, NULL, NULL),
(10, 'Laptop J', 'Laptop Gaming', 'intel i3 / ram 6GB / vga GT1050', 'lemah', 'cukup', 'cukup', 6000000, 2, 4000, NULL, NULL),
(11, 'Laptop K', 'Laptop Gaming', 'intel i5 / ram 2GB / vga GT740', 'cukup', 'lemah', 'lemah', 1000000, 2, 4000, NULL, NULL),
(12, 'Laptop L', 'Laptop Gaming', 'intel i7 / ram 2GB / vga GT1050', 'kuat', 'lemah', 'cukup', 4000000, 2, 4000, NULL, NULL),
(13, 'Laptop M', 'Laptop Gaming', 'intel i7 / ram 6GB / vga Quadro', 'kuat', 'cukup', 'cukup', 8000000, 2, 4000, NULL, NULL),
(14, 'Laptop N', 'Laptop Gaming', 'intel i7 / ram 2GB / vga GT740', 'kuat', 'lemah', 'lemah', 2000000, 2, 4000, NULL, NULL),
(15, 'Laptop O', 'Laptop Gaming', 'intel i3 / ram 16GB / vga GT740', 'lemah', 'kuat', 'lemah', 4000000, 2, 4000, NULL, NULL),
(16, 'Laptop P', 'Laptop Office', 'intel i5 / ram 16gb / vga gt1050', 'cukup', 'kuat', 'cukup', 6000000, 5, 4000, NULL, NULL),
(17, 'Laptop Q', 'Laptop Office', 'intel i7 / ram 8gb / vga Quadro', 'kuat', 'cukup', 'kuat', 9000000, 2, 4000, NULL, NULL),
(18, 'Laptop R', 'Laptop Office', 'intel i7 / ram 2gb / vga gt740', 'kuat', 'lemah', 'lemah', 6000000, 5, 4000, NULL, NULL),
(19, 'Laptop S', 'Laptop Office', 'intel i3 / ram 16gb / vga gt1050', 'lemah', 'kuat', 'cukup', 3000000, 5, 4000, NULL, NULL),
(20, 'Laptop T', 'Laptop Office', 'intel i5 / ram 16gb / vga gt1050', 'cukup', 'kuat', 'cukup', 6000000, 5, 4000, NULL, NULL),
(21, 'Laptop U', 'Laptop Office', 'intel i3 / ram 6gb / vga Quadro', 'lemah', 'cukup', 'kuat', 7000000, 5, 4000, NULL, NULL),
(22, 'Laptop V', 'Laptop Office', 'intel i3 / ram 8gb / vga gt740', 'lemah', 'cukup', 'lemah', 2000000, 5, 4000, NULL, NULL),
(23, 'Laptop W', 'Laptop Office', 'intel i7 / ram 2gb / vga quadro', 'kuat', 'lemah', 'kuat', 6000000, 5, 4000, NULL, NULL),
(24, 'Laptop X', 'Laptop Office', 'intel i5 / ram 2gb / vga gt740', 'cukup', 'lemah', 'lemah', 4000000, 5, 4000, NULL, NULL),
(25, 'Laptop Y', 'Laptop Office', 'intel i5 / ram 8gb / vga gt1050', 'cukup', 'cukup', 'cukup', 5000000, 5, 4000, NULL, NULL),
(26, 'Laptop Z', 'Laptop Office', 'intel i7 / ram 16gb / vga gt1050', 'kuat', 'kuat', 'cukup', 10000000, 5, 4000, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2021_07_10_123713_create_pesanan_details_table', 1),
(7, '2021_07_10_123513_create_pesanans_table', 2),
(9, '2014_10_12_000000_create_users_table', 3),
(10, '2021_07_10_122512_create_barangs_table', 4);

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(2, 1, '2021-07-13', '2', 160, 8000000, '2021-07-13 08:58:19', '2021-08-11 03:30:56'),
(3, 1, '2021-07-17', '2', 677, 16000000, '2021-07-17 02:35:14', '2021-08-11 03:31:33'),
(4, 1, '2021-07-26', '1', 955, 21000000, '2021-07-26 00:47:12', '2021-08-11 03:13:56'),
(5, 1, '2021-07-28', '1', 197, 3000000, '2021-07-28 10:15:15', '2021-08-03 11:33:39'),
(6, 1, '2021-08-06', '0', 240, 3000000, '2021-08-06 03:21:33', '2021-08-06 03:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(16, 1, 1, 1, 8000000, '2021-07-13 07:50:15', '2021-07-13 07:50:15'),
(17, 1, 2, 1, 8000000, '2021-07-13 08:58:20', '2021-07-13 08:58:20'),
(18, 1, 3, 2, 16000000, '2021-07-17 02:35:14', '2021-07-17 02:35:14'),
(21, 3, 4, 1, 15000000, '2021-07-26 01:38:58', '2021-07-26 01:38:58'),
(22, 2, 4, 2, 6000000, '2021-07-27 01:40:03', '2021-07-27 01:40:03'),
(23, 2, 5, 1, 3000000, '2021-07-28 10:15:15', '2021-07-28 10:15:15'),
(24, 2, 6, 1, 3000000, '2021-08-06 03:21:34', '2021-08-06 03:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2', 'Vincent Marvin', 'vincentleemarvin@gmail.com', NULL, '$2y$10$LIjJKhn7YCtOkV9nsOnrTeOfc42kxotWgQi.Fw4g42IlT2RmlM0Ci', NULL, NULL, NULL, '2021-08-05 02:46:26', '2021-08-05 02:46:26'),
(2, '1', 'Admin', 'admin@admin.uks.com', NULL, '$2y$10$UO8OglnB9r8ZeFAzKwZrA.45S3h7VwUeYDJh1PmR5iPXHVZOZ0DjS', 'Jl Cenghay no37a Rawa Bunga', '085156698387', NULL, '2021-08-05 02:48:02', '2021-08-11 04:11:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
