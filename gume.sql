-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2015 at 09:09 AM
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
(2, 2, '12-dia-diem-tham-quan-mien-phi-o-da-lat', '12 địa điểm tham quan miễn phí ở Đà Lạt', 'Cách trung tâm thành phố Đà Lạt 5 km, nằm trên núi Phụng Hoàng, đây là một trong những thiền viện lớn nhất của Việt Nam.', 'flower.jpg', 'Làng hoa Vạn Thành\r\n\r\nChạy theo đường 3/2, đến khách sạn Sài Gòn - Đà Lạt rẽ tay trái về hướng Cam Ly, bạn sẽ được chiêm ngưỡng làng hoa nổi tiếng và lâu đời nhất ở Đà Lạt. Các ruộng hoa và nhà kính với muôn vàn sắc hoa rực rỡ sẽ là phông nền đẹp cho những bức ảnh của bạn. Du khách cũng khó lòng rời khỏi nơi này khi bước chân bị níu giữ bởi hương thơm quyến rũ của “vương quốc” hoa.', 1, 50, '2015-12-25 06:17:32', '2015-12-25 06:17:32', NULL),
(3, 2, 'long-lon-non-va-thit-xao-mam-ruoc-cua-nguoi-mien-trung', 'Lòng lợn non và thịt xào mắm ruốc của người miền Trung', 'Những con ruốc nhỏ xíu chế biến thành mắm dùng làm gia vị nêm nếm, ăn ngay hoặc xào với thịt ba chỉ được nhiều người ưa chuộng khi đến miền Trung.', 'long-lon.jpg', 'Đến với mảnh đất miền Trung nắng gió, bạn sẽ được thưởng thức những món ăn rất dân dã nhưng có thể khiến bạn nhớ mãi.\r\n\r\nLòng non luộc chấm với mắm ruốc\r\n\r\nNguyên liệu để làm nên món ăn này rất đơn giản gồm lòng non chấm mắm nhưng lại khác biệt bởi mắm ruốc đặc trưng của người miền Trung.\r\n\r\nĐể món ăn ngon đúng điệu, lòng non được làm sạch, rửa qua với nước lạnh rồi đổ chút rượu trắng, giấm vào để trong vòng 10 phút cho lòng có màu trắng, khi ăn sẽ cảm nhận được vị giòn sật.', 1, 5, '2015-12-28 09:14:18', '2015-12-28 09:14:18', NULL),
(4, 3, 'cac-dia-diem-choi-tet-duong-lich-gan-ha-noi', 'Các địa điểm chơi Tết dương lịch gần Hà Nội', 'Những khu sinh thái , nghỉ dưỡng với phong cảnh khoáng đạt vừa là nơi có thể vui chơi, nghỉ ngơi, vừa khám phá thiên nhiên và cuộc sống của người dân là địa điểm thú vị để bạn tận hưởng dịp lễ Tết.', 'dailai.jpg', 'Các địa danh được giới thiệu sau đây rất thích hợp cho chuyến khám phá từ 2-3 ngày, cách Hà Nội từ 40-100 km.\r\n\r\nĐồng Mô\r\n\r\nĐây là một địa điểm lý tưởng cho người dân Hà Nội nếu không muốn đi quá xa vào dịp Tết dương lịch. Đồng Mô cách Hà Nội chừng 40 km, thích hợp cho các buổi dã ngoại, cắm trại.\r\n\r\nỞ đây có khu Sơn Tinh Camp với khuôn viên rộng lớn và phong cảnh hữu tình, 3 mặt giáp với hồ Đồng Mô, rừng cây ăn quả xen kẽ với rừng nguyên sinh tạo nên cảnh quan thiên nhiên tươi đẹp, thích hợp cho gia đình có con nhỏ có chỗ vui chơi và cho cả nhóm bạn.', 1, 30, '2015-12-28 13:34:21', '2015-12-28 13:34:21', NULL),
(5, 2, 'cung-phuot-mu-cang-chai-mua-lua-chin', 'Cung phượt Mù Cang Chải mùa lúa chín', 'Trên các cung đường đèo dốc, du khách sẽ được đắm mình trong mùa vàng tháng 9 Mù Cang Chải, Yên Bái và trải nghiệm đời sống người Mông, Thái.', 'mu-cang-chai.jpg', 'Lịch trình dành cho du khách xuất phát từ Hà Nội bằng xe khách lên thành phố Yên Bái rồi thuê xe máy. Việc kết hợp đi ôtô giúp bạn tiết kiệm thời gian và sức khỏe tốt hơn vì xe khách Hà Nội - Yên Bái luôn sẵn có với 2,5 - 3 giờ chạy.', 1, 50, '2015-12-28 10:35:40', '2015-12-28 10:35:40', NULL),
(6, 1, 'con-mua-tien-sap-chay-vao-tui-facebook-nho-tinh-nang-moi-nay', 'Cơn mưa tiền sắp chảy vào túi Facebook nhờ tính năng mới này', 'Động thái thử nghiệm công cụ tìm kiếm doanh nghiệp và dịch vụ địa phương của Facebook gần đây sẽ tạo ra những khó khăn nhất định cho Yelp và mở ra nguồn doanh thu khổng lồ cho công ty.', 'facebook.jpg', 'Ai cũng biết CEO Facebook Mark Zuckerberg là người luôn tìm hiểu những điều mới mẻ, cải tiến cái cũ, tạo ra trải nghiệm tốt hơn cho người dùng và từ đó làm tăng doanh thu.\r\nVí dụ điển hình là thương vụ bỏ ra 2 tỷ USD để mua lại hãng công nghệ thực tế ảo Ocolus vào năm ngoái với kế hoạch đưa Oculus trở thành 1 nền tảng "cho 1 dạng trải nghiệm hoàn toàn khác biệt". Ngoài ra, họ cũng đang chờ tới thời cơ thích hợp để biến Instagram thành cỗ máy in tiền mới.\r\nMột bài báo gần đây đã chỉ ra điểm mạnh của Facebook trong cộng đồng các doanh nghiệp nhỏ và vừa như là động cơ thúc đẩy doanh số bán hàng của họ.\r\nPhần lớn trong tổng số 2,5 triệu USD thu được từ đối tác marketing là các doanh nghiệp vừa và nhỏ. Điều này để nói rằng động thái thử nghiệm công cụ tìm kiếm và đánh giá doanh nghiệp và dịch vụ địa phương của Facebook gần đây không chỉ đơn giản tạo ra những khó khăn nhất định cho Yelp mà nó còn mở ra nguồn doanh thu khổng lồ cho công ty.', 1, 10, '2015-12-28 09:17:25', '2015-12-28 09:17:25', NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
