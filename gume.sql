-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2015 at 11:42 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gume`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT '0',
  `num_view` int(10) UNSIGNED DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `alias`, `title`, `description`, `thumb`, `content`, `is_publish`, `num_view`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'doi-chan-phi-thuong-cua-co-gai-viet-chinh-phuc-sa-mac', 'Đôi chân phi thường của cô gái Việt chinh phục sa mạc', 'Để vượt sa mạc Atacama - nơi có độ cao 3.200 m so với mực nước biển, Vũ Phương Thanh, sinh năm 1990 đã chạy, đi bộ 85-115km/tuần, rèn đôi chân hoạt động liên tục 12 tiếng/ngày.', 'thanh-vu.jpg', 'Vũ Phương Thanh (Tang Vu) đã vượt qua 250 km trong giải chạy bền vượt sa mạc tại Chile. Trước đó, cô từng tham gia các cuộc thi: Ultra Marathon The North Face 100, bán Ironman ở Bintan, Indonesia...', 1, 100, '2015-12-25 03:11:15', '2015-12-25 03:11:15', NULL),
(2, 2, '12-dia-diem-tham-quan-mien-phi-o-da-lat', '12 địa điểm tham quan miễn phí ở Đà Lạt', 'Cách trung tâm thành phố Đà Lạt 5 km, nằm trên núi Phụng Hoàng, đây là một trong những thiền viện lớn nhất của Việt Nam.', 'flower.jpg', 'Làng hoa Vạn Thành\r\n\r\nChạy theo đường 3/2, đến khách sạn Sài Gòn - Đà Lạt rẽ tay trái về hướng Cam Ly, bạn sẽ được chiêm ngưỡng làng hoa nổi tiếng và lâu đời nhất ở Đà Lạt. Các ruộng hoa và nhà kính với muôn vàn sắc hoa rực rỡ sẽ là phông nền đẹp cho những bức ảnh của bạn. Du khách cũng khó lòng rời khỏi nơi này khi bước chân bị níu giữ bởi hương thơm quyến rũ của “vương quốc” hoa.', 1, 50, '2015-12-25 06:17:32', '2015-12-25 06:17:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `alias`, `name`, `thumb`, `is_publish`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cong-nghe', 'Công Nghệ', NULL, 1, '2015-12-24 04:12:16', '2015-12-24 04:12:16', NULL),
(2, 'doi-song', 'Đời Sống', NULL, 1, '2015-12-24 04:12:16', '2015-12-24 04:12:16', NULL),
(3, 'giai-tri', 'Giải Trí', NULL, 1, '2015-12-24 04:12:16', '2015-12-24 04:12:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
