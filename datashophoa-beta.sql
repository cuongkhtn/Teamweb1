-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2017 at 01:33 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datashophoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE IF NOT EXISTS `loaisp` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hoa Cưới', NULL, '2017-12-11 23:51:14'),
(2, 'Lan hồ điệp', NULL, '2017-12-12 00:03:09'),
(3, 'Hoa Giỏ', NULL, NULL),
(4, 'Hoa Sinh Nhật', NULL, NULL),
(5, 'Hoa Bó', NULL, NULL),
(6, 'Hoa Xin Lỗi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_12_06_135546_create_loaisp_table', 1),
(3, '2017_12_06_140806_create_slide_table', 2),
(4, '2017_12_06_150342_create_users_table', 3),
(5, '2017_12_06_150735_create_sanpham_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloai` int(10) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(15) NOT NULL,
  `giakm` int(15) NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `idloai`, `description`, `image`, `gia`, `giakm`, `soluong`, `created_at`, `updated_at`, `new`) VALUES
(4, 'Hoa baby', 1, '', 'hc1.jpg', 590000, 500000, 0, NULL, NULL, 1),
(5, 'Hoa cưới 57', 1, '', 'hc2.jpg', 550000, 0, 0, NULL, NULL, 1),
(6, 'Tím thủy chung', 1, '', 'hc3.gif', 550000, 0, 0, NULL, NULL, 2),
(7, 'MS White', 1, '', 'hc4.gif', 900000, 0, 0, NULL, NULL, 1),
(8, 'Hoa cưới 56', 1, '', 'hc5.gif', 600000, 0, 0, NULL, NULL, 1),
(9, 'Hoa cưới 55', 1, '', 'hc6.jpg', 1000000, 800000, 0, NULL, NULL, 1),
(10, 'Hoa cưới 54', 1, '', 'hc7.jpg', 500000, 0, 0, NULL, NULL, 1),
(11, 'Hoa cưới 53', 1, '', 'hc8.jpg', 600000, 0, 0, NULL, NULL, 1),
(12, 'Hoa cưới 52', 1, '', 'hc9.jpg', 720000, 600000, 0, NULL, NULL, 1),
(13, 'Hoa cưới 51', 1, '', 'hc10.jpg', 590000, 0, 0, NULL, NULL, 1),
(14, 'Hoa cưới 50', 1, '', 'hc11.jpg', 550000, 0, 0, NULL, NULL, 1),
(15, 'Hoa cưới 49', 1, '', 'hc12.jpg', 600000, 0, 0, NULL, NULL, 1),
(16, 'Hoa cưới 48', 1, '', 'hc13.jpg', 680000, 500000, 0, NULL, NULL, 0),
(17, 'Hoa cưới 47', 1, '', 'hc14.jpg', 670000, 0, 0, NULL, NULL, 0),
(18, 'Hoa cưới 46', 1, '', 'hc15.jpg', 500000, 0, 0, NULL, NULL, 0),
(19, 'Hoa cưới 45', 1, '', 'hc16.jpg', 400000, 0, 0, NULL, NULL, 0),
(20, 'Sánh bước bên nhau', 1, '', 'hc17.jpg', 450000, 400000, 0, NULL, NULL, 2),
(21, 'Hoa Cưới 44', 1, '', 'hc18.jpg', 400000, 0, 0, NULL, NULL, 0),
(22, 'Hoa Cưới 42', 1, '', 'hc19.jpg', 720000, 0, 0, NULL, NULL, 0),
(23, 'Hoa cưới 33', 1, '', 'hc20.jpg', 800000, 0, 0, NULL, NULL, 0),
(24, 'Hoa cưới 16', 1, '', 'hc21.jpg', 1000000, 0, 0, NULL, NULL, 0),
(25, 'Hoa cưới 52', 1, '', 'hc22.jpg', 800000, 0, 0, NULL, NULL, 0),
(26, 'Hoa cưới 51', 1, '', 'hc23.jpg', 700000, 0, 0, NULL, NULL, 0),
(27, 'Hoa cưới 50', 1, '', 'hc24.jpg', 500000, 0, 0, NULL, NULL, 0),
(29, 'Hoa cưới 49', 1, '', 'hc25.jpg', 1000000, 0, 0, NULL, NULL, 0),
(30, 'Hoa cưới 48', 1, '', 'hc26.jpg', 600000, 0, 0, NULL, NULL, 0),
(31, 'Hoa cưới 43', 1, '', 'hc27.jpg', 1200000, 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) unsigned NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'banner1.jpg', NULL, NULL),
(2, '', 'banner2.jpg', NULL, NULL),
(3, '', 'banner3.jpg', NULL, NULL),
(4, '', 'banner4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(101) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaiuser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `loaiuser`) VALUES
(13, 'Cường', 'cuonganh365@gmail.com', '$2y$10$BKSv0LwV8D1bZd7HQr..cOWVmNQDzo.E81Q2TNgYwsgoCtWZvTs0S', 'uO2LRe7A7ELEHu9IEyyGlQRJM5coF0uOakJmJxyjV7A4Or7ssUo6fzOuDpP7', NULL, NULL, NULL, NULL, 1),
(14, 'demo', 'demo@gmail.com', '$2y$10$QmK565hnY3d/7vcdDB5bhelJ8p3cyNnbbAOtT8McD16enrbe7vFrm', 'SlstchdVZOivAOkTwBiX6bxJLflfuxIRfO3bCzQnIQRl1h56nMqPhW5FL0Ax', '2017-12-19 03:08:40', '2017-12-19 03:08:40', '01654833756', '227/Nguyễn Văn Cừ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
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
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
