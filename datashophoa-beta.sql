-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2017 at 11:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3917755_datashophoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `ten` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `ten`) VALUES
(1, 'Nokia'),
(2, 'Apple'),
(3, 'Samsung'),
(4, 'OPPO'),
(5, 'Sony'),
(6, 'HTC'),
(7, 'Asus'),
(8, 'Lenovo'),
(9, 'BKAV'),
(10, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id` int(11) NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `ten` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(101) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietsp`
--

INSERT INTO `chitietsp` (`id`, `id_theloai`, `ten`, `image`, `mota`, `gia`) VALUES
(1, 1, 'Nokia 105 Single Sim (2017)', 'qt64_admin/images/nokia1.png', 'Màn hình: QVGA, 2.4 inches\r\nHỗ trợ 2 sim 2 sóng\r\nDanh bạ 2000 số\r\nCamera: VGA\r\nPin: 1020 mAh', 350);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hoa Cưới', NULL, NULL),
(2, 'Lan Hồ Điệp', NULL, NULL),
(3, 'Hoa Giỏ', NULL, NULL),
(4, 'Hoa Sinh Nhật', NULL, NULL),
(5, 'Hoa Bó', NULL, NULL),
(6, 'Hoa Xin Lỗi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
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
(1, '2017_12_06_135546_create_loaisp_table', 1),
(3, '2017_12_06_140806_create_slide_table', 2),
(4, '2017_12_06_150342_create_users_table', 3),
(5, '2017_12_06_150735_create_sanpham_table', 4),
(7, '2017_11_28_174403_create_login_table', 1),
(8, '2017_12_01_003121_create_cat_table', 1),
(9, '2017_12_01_003529_create_chtietsp_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(101) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietsp_id_theloai_foreign` (`id_theloai`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
