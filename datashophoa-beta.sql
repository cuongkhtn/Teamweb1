-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 10:44 AM
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
-- Table structure for table `Bill`
--

CREATE TABLE IF NOT EXISTS `Bill` (
  `id` int(10) unsigned NOT NULL,
  `iduser` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `Total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Bill`
--

INSERT INTO `Bill` (`id`, `iduser`, `idkh`, `Total`, `payment`, `created_at`, `updated_at`) VALUES
(3, 14, 5, '3100000', 'COD', '2018-01-09 10:36:43', '2018-01-09 10:36:43'),
(4, 14, 6, '3100000', 'COD', '2018-01-09 10:37:48', '2018-01-09 10:37:48'),
(5, 14, 7, '2500000', 'COD', '2018-01-09 10:39:16', '2018-01-09 10:39:16'),
(6, 14, 8, '1600000', 'COD', '2018-01-09 10:41:36', '2018-01-09 10:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `id` int(10) unsigned NOT NULL,
  `loaiuser` int(11) NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `idhoa` int(10) unsigned NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(101) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`id`, `name`, `sex`, `email`, `address`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(5, 'Nguyễn Quốc Cường', 'nam', 'cuonganh365@gmail.com', '271 An Dương Vương', 1657235365, NULL, '2018-01-09 10:36:43', '2018-01-09 10:36:43'),
(6, 'Nguyễn Quốc Cường', 'nam', 'cuonganh365@gmail.com', '271 An Dương Vương', 1657235365, NULL, '2018-01-09 10:37:48', '2018-01-09 10:37:48'),
(7, 'Nguyễn Quốc Cường', 'nam', 'cuonganh365@gmail.com', '271 An Dương Vương', 1657235365, NULL, '2018-01-09 10:39:16', '2018-01-09 10:39:16'),
(8, 'Nguyễn Quốc Cường', 'nam', 'cuonganh365@gmail.com', '271 An Dương Vương', 1657235365, NULL, '2018-01-09 10:41:36', '2018-01-09 10:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE IF NOT EXISTS `loaisp` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hoa Đặt Hàng Nhiều Nhất', NULL, '2017-12-11 23:51:14'),
(2, 'Hoa Cưới', NULL, '2017-12-12 00:03:09'),
(3, 'Hoa Giỏ', NULL, NULL),
(4, 'Hoa Sinh Nhật', NULL, NULL),
(5, 'Hoa Bó', NULL, NULL),
(6, 'Hoa Xin Lỗi', NULL, NULL),
(7, 'Hoa sinh nhật', NULL, NULL),
(8, ' Hoa Cổng Cưới', NULL, NULL),
(9, 'Hoa chúc mừng', NULL, NULL),
(10, 'Hoa khai trương', NULL, NULL),
(11, 'Hoa chia buồn', NULL, NULL),
(12, 'Hoa hướng dương', NULL, NULL),
(13, 'Lan Hồ điệp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_12_06_135546_create_loaisp_table', 1),
(3, '2017_12_06_140806_create_slide_table', 2),
(4, '2017_12_06_150342_create_users_table', 3),
(5, '2017_12_06_150735_create_sanpham_table', 4),
(13, '2017_12_20_135635_comment', 5),
(29, '2018_01_06_010613_create_shoppingcart_table', 6),
(30, '2018_01_09_143650_bill', 6),
(31, '2018_01_09_143802_customer', 6),
(32, '2018_01_09_145551_order', 6);

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `id` int(10) unsigned NOT NULL,
  `idbill` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`id`, `idbill`, `idsp`, `name`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(14, 6, 5, 'Hoa cưới 57', 2, 550000, '2018-01-09 10:41:36', '2018-01-09 10:41:36'),
(15, 6, 4, 'Hoa baby', 1, 500000, '2018-01-09 10:41:36', '2018-01-09 10:41:36');

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
(4, 'Hoa baby', 2, '', 'hc1.jpg', 590000, 500000, 0, NULL, NULL, 1),
(5, 'Hoa cưới 57', 2, '', 'hc2.jpg', 550000, 0, 0, NULL, NULL, 1),
(6, 'Tím thủy chung', 2, '', 'hc3.gif', 550000, 0, 0, NULL, NULL, 2),
(7, 'MS White', 2, '', 'hc4.gif', 900000, 0, 0, NULL, NULL, 1),
(8, 'Hoa cưới 56', 2, '', 'hc5.gif', 600000, 0, 0, NULL, NULL, 1),
(9, 'Hoa cưới 55', 2, '', 'hc6.jpg', 1000000, 800000, 0, NULL, NULL, 1),
(10, 'Hoa cưới 54', 2, '', 'hc7.jpg', 500000, 0, 0, NULL, NULL, 1),
(11, 'Hoa cưới 53', 2, '', 'hc8.jpg', 600000, 0, 0, NULL, NULL, 1),
(12, 'Hoa cưới 52', 2, '', 'hc9.jpg', 720000, 600000, 0, NULL, NULL, 1),
(13, 'Hoa cưới 51', 2, '', 'hc10.jpg', 590000, 0, 0, NULL, NULL, 1),
(14, 'Hoa cưới 50', 2, '', 'hc11.jpg', 550000, 0, 0, NULL, NULL, 1),
(15, 'Hoa cưới 49', 2, '', 'hc12.jpg', 600000, 0, 0, NULL, NULL, 1),
(16, 'Hoa cưới 48', 2, '', 'hc13.jpg', 680000, 500000, 0, NULL, NULL, 0),
(17, 'Hoa cưới 47', 2, '', 'hc14.jpg', 670000, 0, 0, NULL, NULL, 0),
(18, 'Hoa cưới 46', 2, '', 'hc15.jpg', 500000, 0, 0, NULL, NULL, 0),
(19, 'Hoa cưới 45', 2, '', 'hc16.jpg', 400000, 0, 0, NULL, NULL, 0),
(20, 'Sánh bước bên nhau', 2, '', 'hc17.jpg', 450000, 400000, 0, NULL, NULL, 2),
(21, 'Hoa Cưới 44', 2, '', 'hc18.jpg', 400000, 0, 0, NULL, NULL, 0),
(22, 'Hoa Cưới 42', 2, '', 'hc19.jpg', 720000, 0, 0, NULL, NULL, 0),
(23, 'Hoa cưới 33', 2, '', 'hc20.jpg', 800000, 0, 0, NULL, NULL, 0),
(24, 'Hoa cưới 16', 2, '', 'hc21.jpg', 1000000, 0, 0, NULL, NULL, 0),
(25, 'Hoa cưới 52', 2, '', 'hc22.jpg', 800000, 0, 0, NULL, NULL, 0),
(26, 'Hoa cưới 51', 2, '', 'hc23.jpg', 700000, 0, 0, NULL, NULL, 0),
(27, 'Hoa cưới 50', 2, '', 'hc24.jpg', 500000, 0, 0, NULL, NULL, 0),
(29, 'Hoa cưới 49', 2, '', 'hc25.jpg', 1000000, 0, 0, NULL, NULL, 0),
(30, 'Hoa cưới 48', 2, '', 'hc26.jpg', 600000, 0, 0, NULL, NULL, 0),
(31, 'Hoa cưới 43', 2, '', 'hc27.jpg', 1200000, 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `id` int(10) unsigned NOT NULL,
  `idUser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `loaiuser` int(11) DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `loaiuser`, `confirmed`, `confirmation_code`) VALUES
(14, 'Nguyễn Quốc Cường', 'cuonganh365@gmail.com', '$2y$10$lv0FcWvw7u/66Mei/Mt5jez8vpTieLo/J7VyPOm8QQdqQEyo10X1u', '8fbtuqGIkw46FJDf0qHvZfAsbVkV72bTUbrQBTv9Xk6B8nXsRCDJvFWFGK7O', '2017-12-19 03:08:40', '2018-01-06 16:47:05', '01657235365', '271 An Dương Vương', 1, 1, NULL),
(100, 'nguyen duy anh', 'hixbunny02@gmail.com', '$2y$10$0UGLW1tjaguYjBxeg/lmj.OHZD18CSv8WsGKeJdIb6OwlCdVlOpdG', 'QwZIifD2rsqzStFFnH0u9uTDL32iGG8fzqWFJVHXD8LHQwcq9ayU9MJH40wa', '2018-01-08 06:46:41', '2018-01-08 07:54:59', '113', 'Street Address', 2, 1, NULL),
(102, 'cu2', 'minhthaitn4@zing.vn', '$2y$10$9dm3LHBDTTkkoiqBWiQj7eskdmglBx7Tj36htsn523/Tfi1ng1dh.', NULL, '2018-01-08 08:01:50', '2018-01-08 08:01:50', '', '', 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idhoa_foreign` (`idhoa`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
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
-- AUTO_INCREMENT for table `Bill`
--
ALTER TABLE `Bill`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `comment_idhoa_foreign` FOREIGN KEY (`idhoa`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
