-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2026 at 07:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darwis_decor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `paket_id` bigint UNSIGNED NOT NULL,
  `tanggal_booking` date NOT NULL,
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `nama_customer`, `email_customer`, `no_hp`, `user_id`, `paket_id`, `tanggal_booking`, `total`, `status`, `created_at`, `updated_at`) VALUES
(5, 'nara', 'narasvl@gmail.com', '081910596477', 1, 107, '2026-06-21', '14225000.00', 'approved', '2026-06-20 23:44:34', '2026-06-20 23:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `booking_extras`
--

CREATE TABLE `booking_extras` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `extra_id` bigint UNSIGNED NOT NULL,
  `qty` int UNSIGNED NOT NULL DEFAULT '1',
  `subtotal` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_extras`
--

INSERT INTO `booking_extras` (`id`, `booking_id`, `extra_id`, `qty`, `subtotal`, `created_at`, `updated_at`) VALUES
(6, 5, 75, 1, '3000000.00', '2026-06-20 23:44:34', '2026-06-20 23:44:34'),
(7, 5, 77, 1, '1500000.00', '2026-06-20 23:44:34', '2026-06-20 23:44:34'),
(8, 5, 78, 1, '1000000.00', '2026-06-20 23:44:34', '2026-06-20 23:44:34'),
(9, 5, 84, 5, '150000.00', '2026-06-20 23:44:34', '2026-06-20 23:44:34'),
(10, 5, 85, 305, '4575000.00', '2026-06-20 23:44:34', '2026-06-20 23:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `harga` decimal(15,2) NOT NULL DEFAULT '0.00',
  `aktif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `nama`, `deskripsi`, `harga`, `aktif`, `created_at`, `updated_at`) VALUES
(75, 'Custom Decor', '3jt (untuk 3 meter, untuk penambahan 1 jt/meter)', '3000000.00', 1, '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(76, 'Melamin Jalan', '3jt (untuk 3 meter)', '3000000.00', 1, '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(77, 'Mix Fresh Flowers', '1.5jt per paket', '1500000.00', 1, '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(78, 'Upgrade Size Decor', '1jt/meter', '1000000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(79, 'Photobooth/Music', '1jt (band dan 2 penyanyi)', '1000000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(80, 'Lighting Effect', '3jt (untuk ..)', '3000000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(81, 'Pohon Decor', '1.5jt per unit', '1500000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(82, 'Pergola', '4x4=2.5jt / 6x6=4jt', '2500000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(83, 'Kain Lorong/Decor', 'Harga total 6jt (4x6)', '6000000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(84, 'Meja', '30 rb /pcs', '30000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54'),
(85, 'Kursi', '15 rb /pcs', '15000.00', 1, '2026-06-20 19:59:54', '2026-06-20 19:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_06_000001_create_pakets_table', 2),
(5, '2026_06_06_000002_create_extras_table', 2),
(6, '2026_06_06_000003_create_bookings_table', 2),
(7, '2026_06_06_000004_create_booking_extras_table', 2),
(8, '2026_06_06_000005_add_customer_fields_to_bookings_table', 3),
(9, '2026_06_20_000001_add_is_active_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `harga_mulai` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `nama`, `kategori`, `deskripsi`, `harga_mulai`, `created_at`, `updated_at`) VALUES
(107, 'Home Package 1', 'only-decor', 'Dekorasi 4m artificial flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin', '4000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(108, 'Home Package 2', 'only-decor', 'Dekorasi 5m artificial flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin', '5000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(109, 'Home Package 3', 'only-decor', 'Dekorasi 6m artificial mix flowers (tanpa panggung), set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 2 standing foto, lantai melamin, meja & kursi akad', '6000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(110, 'Home Package A', 'only-decor', 'Dekorasi 4m, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin, Tenda 4x12, full karpet, panggung 4x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', '11500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(111, 'Home Package B', 'only-decor', 'Dekorasi 5m, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 1 standing foto, lantai melamin, Tenda 4x12/6x12, full karpet, panggung 5x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', '12500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(112, 'Home Package C', 'only-decor', 'Dekorasi 6m mix flowers, set sofa pelaminan, mini garden, lighting standar, welcome gate, 1 kotak amplop, 2 standing foto, lantai melamin, meja & kursi akad, Tenda 6x12, full karpet, panggung 6x3, Kursi 70 + cover, meja 6 + cover, lighting, blower 1 unit', '13000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(113, 'Dekorasi Gedung A', 'only-decor', 'Dekorasi 8m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan', '15500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(114, 'Dekorasi Gedung B', 'only-decor', 'Dekorasi 10m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola 1 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan', '18500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(115, 'Dekorasi Gedung C', 'only-decor', 'Dekorasi 12m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola 2 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan, lantai akrilik', '23500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(116, 'Dekorasi Gedung Exclusive', 'only-decor', 'Dekorasi 12-14m artificial mix fresh flowers, mini garden, set sofa pelaminan, welcome gate + welcome sign, Set meja kursi akad, backdrop musik, pergola (6x6) 3 lorong, standing flowers, penjor, 2 kotak uang, 2 standing foto, lantai melamin, karpet jalan, lantai akrilik, 2 Fresnel + 2 Beam, Hand Bouquet Fresh Flowers', '30000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(117, 'Paket Rumah A', 'all-in', 'MUA & Busana (1 makeup, 2 pasang busana, ronce melati, 2 pagar ayu), dekorasi 4m, mini taman, lantai melamin, welcome gate, artificial hand bouquet, 1 kotak angpau', '12500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(118, 'Paket Rumah B', 'all-in', 'MUA & Busana (1 makeup, 2 pasang busana, ronce melati, 2 pagar ayu, makeup ortu & besan), dekorasi 6m, mini taman, lantai melamin, welcome gate, hand bouquet, 1 kotak angpau, standing photo frame', '15000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(119, 'Paket Gedung A', 'all-in', 'MUA lengkap, dekorasi 10m mix fresh flowers, mini taman, meja kursi akad, 1 penjor, welcome gate & mirror sign, standing photo frame, backdrop musik, karpet jalan, 2 kotak angpau, hand bouquet fresh flowers, standing flowers, pergola, lorong 1 pcs', '33000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(120, 'Paket Gedung B', 'all-in', 'MUA lengkap, adat panggih, dekorasi 10m mix fresh flowers, mini taman, meja kursi akad, 1 penjor, backdrop musik, karpet jalan, welcome gate & mirror sign, standing photo frame, 2 kotak angpau, hand bouquet fresh flowers, standing flower, pergola, lorong 2 pcs, lantai akrilik, bunga mobil', '37000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(121, 'Paket Gedung Premium', 'all-in', 'MUA lengkap + adat panggih, dekorasi 10-14m mix bunga segar, meja kursi akad, 1 penjor, backdrop musik, karpet jalan, welcome gate & mirror sign, standing photo frame, 2 kotak angpau, hand bouquet fresh flowers, standing flowers, pergola 4x4, lorong 3 pcs, lantai akrilik, lighting (beam), bunga mobil', '45000000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53'),
(122, 'Paket Gedung GOLD', 'all-in', 'MUA lengkap, WO (One day service, 7 personel), Entertainment (Full band, sound system), Dokumentasi (3 album + cinematic video), Dekorasi 8-10m, Welcome gate, Backdrop music, Mirror sign, dll. Benefit: Free MC, Henna & Fake nails, Buku tamu', '50500000.00', '2026-06-20 19:59:53', '2026-06-20 19:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LwESr717K2dcJJuoMqVkOwKPUu0bu0JdLkEnwdF6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUhaMVBuUXZ5Q2ttNUI2ZnREN3FpN0V2cHNzZW1yMTBjeXlmNk41MCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyIjtzOjU6InJvdXRlIjtzOjEwOiJ1c2VyLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782010473),
('o84TAziY920gzwn2xlnF2nBnPSATwNukKEDyFshV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicGljTENDMFNJVVpaeGYxcVpjZ3ozYjJOc2l2djZIdFhFUHRpR2M3QSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoxMToiYWRtaW4ubG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YToxOntpOjA7czo3OiJzdWNjZXNzIjt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6Nzoic3VjY2VzcyI7czoyMToiTG9naW4gYWRtaW4gYmVyaGFzaWwuIjt9', 1782024311),
('WOgNum4ITVustiyJaV0Pe052dVA0qR1e2RW0YtIt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSm9paHRxa2cxVFJnd3BWQThSNFluQ0VwSFJLRG5IaVFPUG1Mc3hwNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyIjtzOjU6InJvdXRlIjtzOjEwOiJ1c2VyLmluZGV4Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1782026140);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2026-06-06 05:56:51', '$2y$12$x2WKfntC9wSNk9ZJM779bO9D2AfqcWkq7z9cqbYllGY9yrHGA3mxy', 1, 'yv7UjNdxFE3N6S6muxrOQceZtj1Umt5pMXUXO6xEwC4kGurTywusCINaoIh5', '2026-06-06 05:56:52', '2026-06-20 19:59:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_tanggal_booking_unique` (`tanggal_booking`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_paket_id_foreign` (`paket_id`);

--
-- Indexes for table `booking_extras`
--
ALTER TABLE `booking_extras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_extras_booking_id_extra_id_unique` (`booking_id`,`extra_id`),
  ADD KEY `booking_extras_extra_id_foreign` (`extra_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_is_active_index` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking_extras`
--
ALTER TABLE `booking_extras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `pakets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `booking_extras`
--
ALTER TABLE `booking_extras`
  ADD CONSTRAINT `booking_extras_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_extras_extra_id_foreign` FOREIGN KEY (`extra_id`) REFERENCES `extras` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
