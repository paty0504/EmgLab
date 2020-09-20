-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2020 lúc 12:28 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_emg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `school` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `applicant`
--

INSERT INTO `applicant` (`id`, `name`, `mail`, `phone`, `grade`, `school`, `cv`) VALUES
(4, 'Thành Nguyễn', 'thanhkhotinh@gmail.com', '0982835087', 'k62', 'ĐTVT', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `picture`) VALUES
(2, 'Lập Trình Web', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', 'MFMY_html.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `job` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `current_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `role`, `job`, `picture`, `grade`, `current_member`) VALUES
(1, 'Phạm Mạnh Hùng', 'hung.phammanh@hust.edu.vn', 'Trưởng nhóm nghiên cứu', 'Kỹ thuật Điện tử viễn thông và  Điện tử Y sinh. Giảng viên thực hành bộ môn CNĐT& KTYS', 'aDEK_thayhung.jpg', 'k44', 1),
(3, 'Hoàng Mạnh Cường', 'www.facebook.com/hoang.m.cuong.5', 'Viettel', 'Phân tích và thiết kế phần cứng', 'Jgd1_acuong.jpg', 'K52', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `highlight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `picture`, `highlight`) VALUES
(1, 'Robot bê phở - PHỞ RESTECH', '<p style=\"text-align:justify\">Phở 4.0 là giải pháp áp dụng điều khiển tự động hóa để nâng cao hiệu quả phục vụ cho nhà hàng, giúp giải quyết các vấn đề như: Giảm số người phục vụ, khắc phục sự hạn chế do diện tích nhà hàng hẹp, giảm thời gian đáp ứng các yêu cầu của khách hàng, tạo ra sự mới lạ trong việc phục vụ thực khách,...</p>\r\n\r\n<p style=\"text-align:justify\">Thông tin về Nhà hàng và ý tưởng của nhà hàng Phở 4.0 bạn có thể đọc tại các bài báo như:&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://cafebiz.vn/pho-40-yen-bai-lau-40-binh-duong-tuong-lai-nhung-nguoi-lam-boi-ban-phuc-vu-that-nghiep-boi-cong-nghe-se-khong-con-xa-o-viet-nam-20170815161112835.chn\" style=\"color: rgb(0, 0, 0);\" target=\"_blank\">\'Phở 4.0\' Yên Bái, \'lẩu 4.0’ Bình Dương: Tương lai những người làm bồi bàn, phục vụ thất nghiệp bởi công nghệ sẽ không còn xa ở Việt Nam?</a></li>\r\n	<li><a href=\"http://www.baomoi.com/quan-pho-la-nhat-viet-nam-dieu-khien-tu-xa-pho-tu-chay-ra-moi-khach/c/23007967.epi\" style=\"color: rgb(0, 0, 0);\" target=\"_blank\">Quán phở lạ nhất Việt Nam: Điều khiển từ xa, phở tự chạy ra mời khách</a></li>\r\n	<li><a href=\"http://www.baomoi.com/tu-pho-4-0-nhin-ve-co-hoi-nam-bat-cach-mang-cong-nghiep-moi/c/23115673.epi\" rel=\"nofollow noopener noreferrer\" style=\"color: rgb(0, 0, 0);\" target=\"_blank\">Từ \'Phở 4.0\' nhìn về cơ hội nắm bắt cách mạng công nghiệp mới</a></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">EMGlabvn chúng tôi là nhóm đã nghiên cứu, cung cấp giải pháp công nghệ và dịch vụ công nghệ về robot, điều khiển và phát triển ứng dụng cho ý tưởng nhà hàng Phở 4.0 của Đối tác tại Yên Bái. Chúng tôi đang tiếp tục thực hiện nâng cấp Robot và các thành phần liên quan theo yêu cầu của đối tác để nhân rộng mô hình nhà hàng trên cả nước.</p>', 'ofPc_sp2.jpg', 1),
(6, 'Sản phẩm 2', '<p>Hiện nay, nhóm EMGlabvn chúng tôi đang nghiên cứu phát triển các thành phần của hệ thống hỗ trợ điểm danh sinh viên tham gia các lớp học tại trường đại học BKHN. Hệ thống bao gồm phần cứng, phần mềm và cách thức thu nhận và sử dụng các thông tin có được từ hệ thống. Hệ thống điểm danh sử dụng nhiều công nghệ định sinh viên khác nhau để xác thực sinh viên tham gia lớp học.</p>\r\n\r\n<p>Hệ thống được Lãnh đạo Nhà trường cho phép nghiên cứu và dự kiến thử nghiệm với Sinh viên K61 trong kỳ 2 năm học 2016-2017 tại trường đại học Bách Khoa Hà Nội.</p>', 'OA2P_webemg.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_contact`
--

CREATE TABLE `product_contact` (
  `id` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_contact`
--

INSERT INTO `product_contact` (`id`, `idproduct`, `name`, `email`, `phone`, `comment`) VALUES
(2, 6, 'Thành Nguyễn', 'thanhkhotinh@gmail.com', '0982835087', 'Chào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `highlight` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `project`
--

INSERT INTO `project` (`id`, `description`, `picture`, `highlight`, `name`) VALUES
(1, '<p>Hiện nay, nhóm EMGlabvn chúng tôi đang nghiên cứu phát triển các thành phần của hệ thống hỗ trợ điểm danh sinh viên tham gia các lớp học tại trường đại học BKHN. Hệ thống bao gồm phần cứng, phần mềm và cách thức thu nhận và sử dụng các thông tin có được từ hệ thống. Hệ thống điểm danh sử dụng nhiều công nghệ định sinh viên khác nhau để xác thực sinh viên tham gia lớp học.</p>\r\n\r\n<p>Hệ thống được Lãnh đạo Nhà trường cho phép nghiên cứu và dự kiến thử nghiệm với Sinh viên K61 trong kỳ 2 năm học 2016-2017 tại trường đại học Bách Khoa Hà Nội.</p>', 'LTvd_rsz_dyqw_sp1.jpg', 1, 'Hệ thống hỗ trợ điểm danh sinh viên Đại học BKHN'),
(8, '<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'ZUha_rsz_dw8a_sp4.jpg', 1, 'Dự Án 2'),
(9, '<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '6brI_spxx.jpg', 1, 'Dự Án 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_contact`
--

CREATE TABLE `project_contact` (
  `id` int(11) NOT NULL,
  `idproject` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `picture`) VALUES
(2, 'Giải đáp thắc mắc sinh vieen', '<p>\"</p>\r\n\r\n<p style=\"text-align:justify\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>\r\n\r\n<p>\"</p>', 'ErSa_webemg.jpg'),
(3, 'Giải pháp công nghệ 4.0', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non tellus non turpis scelerisque condimentum sit amet at sem. Nullam risus urna, dignissim id fringilla vitae, volutpat sed sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>\r\n\r\n<p>Morbi nibh neque, faucibus non tincidunt quis, sodales eget felis. In hac habitasse platea dictumst. Sed vulputate imperdiet iaculis. Nulla facilisi. Mauris et dui ac elit scelerisque laoreet.</p>\r\n\r\n<p>Nulla quam dui, varius a feugiat sed, hendrerit eu nunc. Suspendisse potenti. Nullam nunc nisi, condimentum at sagittis egestas, malesuada sit amet risus.</p>\r\n\r\n<p>Sed vehicula iaculis fermentum. Aenean nec lorem nibh, id tincidunt mi. Integer cursus dui suscipit dolor consectetur aliquet. Donec volutpat molestie condimentum. Vestibulum ullamcorper, dolor sit amet sodales pharetra, elit dui venenatis tortor, vel ullamcorper elit leo in nisi.</p>\r\n\r\n<p>Nullam eu consectetur urna. Fusce egestas velit nisi. Duis velit leo, vehicula eu ornare eget, cursus eget eros. Maecenas dui purus, suscipit nec euismod id, commodo et ante. Suspendisse id ipsum non massa vestibulum malesuada id scelerisque tortor.</p>', 'q1DV_logo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_contact`
--

CREATE TABLE `service_contact` (
  `id` int(100) NOT NULL,
  `idservice` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `service_contact`
--

INSERT INTO `service_contact` (`id`, `idservice`, `name`, `email`, `phone`, `comment`) VALUES
(1, 3, 'Thành Nguyễn', 'thanhkhotinh@gmail.com', '0982835087', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `quyen` int(11) DEFAULT 0,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `quyen`, `password`, `created_at`) VALUES
(1, 'Thành Nguyễn', 'thanhkhotinh@gmail.com', 1, '$2y$10$OLZA/0JNNvHXOcJLMPr7y.MH14qlEOVqq7p9wmZWp1bzjHNh.MspG', '2020-05-26 02:56:38'),
(2, 'Thành 1', 'thanh123@gmail.com', 0, '$2y$10$NMxH0yvfmpv0Bt560iKgl.XE/sA1NO6MU0I8eHZvSmeUPf3XDdpaq', '2020-05-26 02:57:07'),
(4, 'Thành 2', '1@gmail.com', 0, '$2y$10$wumpJU8KrgSlM9FmWrHqHeoaOjiZktj1c0eSBkh5ABRbDwAa9vBOm', '2020-05-27 07:18:08'),
(5, 'Thành 3', 'abc@gmail.com', 0, '$2y$10$gLse8O5EJGpK0f5jihI5N./QZdgEFG9Ec.l0M.0VzVW0I3qWCKPC.', '2020-05-27 07:18:22'),
(6, 'Thành4', 'aa@gmail.com', 0, '$2y$10$tQJI2c131/HEZ0eIkIklDOBoHl98QuuprNjps/lMvywl3YP.5yFsW', '2020-05-27 07:18:39'),
(7, 'Thanh', 'adsda@gmail.com', 0, '$2y$10$hfHHNQTDckr6PVNyWFfvm.5sXEA1twjcp7msIwyUx6YWD1yqJYpza', '2020-05-27 07:19:07'),
(8, 'nguyen', '12@gmail.com', 0, '$2y$10$Luai.IYiIPiNRM2imQ7SUOLriNWZVtuej.c8fSveUI0BN.f/5f.7W', '2020-05-27 07:19:27'),
(9, 'ádsadasdasd', 'asdasd@gmail.com', 0, '$2y$10$OA/vypkReezvQwXSZ5sjq.Sb0ZrTaJpcPRw9m072jDJk2Jihf2HNe', '2020-05-27 07:19:40'),
(10, 'ABC', 'aaaaa@gmail.com', 0, '$2y$10$/JhehK0NATy4fpgqfPgM5.jbpEee/nbnWVGPD00zy/oSM6DhKu2Cq', '2020-05-27 07:19:53'),
(11, 'Thannnnh', '11@gmail.com', 0, '$2y$10$jbvzGiqtxWYvvi8wCAM0b.Lrm35XpvGNi5Ez/diXFfDKs.DLPDNp2', '2020-05-27 07:20:27'),
(12, 'áaaaaa', '1222@gmail.com', 0, '$2y$10$GwdIFEVYBUfuJNM4G6Wr1uBsRb14FCAhGFdNjpWCXrD6uv74ZrqwC', '2020-05-27 07:20:40'),
(13, 'Thành Nguyễn 1', 'thanh1@gmail.com', 0, '$2y$10$H1XHNfJbXdet46POgb1JRO8Bp7Ju1LJm3jExVZ0vrxqMSfG8Jkm56', '2020-06-15 03:58:41'),
(14, 'Phồng Tôm', 'phongtom@gmail.com', 0, '$2y$10$it2Qdl9D/sbxRiXPcDtNKe2dW1qIN5iTF.3HzqGbsprhHSeqIPTYS', '2020-06-15 10:33:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_contact`
--
ALTER TABLE `product_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `idproduct_2` (`idproduct`);

--
-- Chỉ mục cho bảng `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project_contact`
--
ALTER TABLE `project_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproject` (`idproject`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_contact`
--
ALTER TABLE `service_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idservice` (`idservice`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_contact`
--
ALTER TABLE `product_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `project_contact`
--
ALTER TABLE `project_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `service_contact`
--
ALTER TABLE `service_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product_contact`
--
ALTER TABLE `product_contact`
  ADD CONSTRAINT `product_contact_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `project_contact`
--
ALTER TABLE `project_contact`
  ADD CONSTRAINT `project_contact_ibfk_1` FOREIGN KEY (`idproject`) REFERENCES `project` (`id`);

--
-- Các ràng buộc cho bảng `service_contact`
--
ALTER TABLE `service_contact`
  ADD CONSTRAINT `service_contact_ibfk_1` FOREIGN KEY (`idservice`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
