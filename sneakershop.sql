-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 05, 2023 lúc 03:12 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sneakershop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'afbab', 5, 32, '05:30:44pm 21/06/2023'),
(2, 'ababaebrwab', 5, 32, '05:33:56pm 21/06/2023'),
(3, 'adfn ad a', 5, 31, '05:35:31pm 21/06/2023'),
(4, 'asb asb', 5, 33, '05:35:39pm 21/06/2023'),
(5, 'afsdb a a', 5, 40, '05:35:45pm 21/06/2023'),
(6, 'saf a a', 5, 29, '05:35:52pm 21/06/2023'),
(8, 'afb aqebra', 5, 39, '05:36:00pm 21/06/2023'),
(9, 'dfba', 5, 31, '05:36:30pm 21/06/2023'),
(10, 'afdb en', 5, 31, '05:36:33pm 21/06/2023'),
(13, 'giày đẹp, chất lượng tốt', 6, 41, '04:06:30pm 22/06/2023'),
(14, 'good good', 6, 38, '04:07:46pm 22/06/2023'),
(15, 'giày đẹp', 6, 38, '04:07:52pm 22/06/2023'),
(16, 'giày đẹp, chất lượng tốtg', 6, 40, '04:08:29pm 22/06/2023'),
(17, 'balenciaga', 6, 30, '04:08:41pm 22/06/2023'),
(18, 'triple S fullden', 6, 30, '04:09:04pm 22/06/2023'),
(19, 'Màu nổi, đẹp', 6, 27, '04:09:39pm 22/06/2023'),
(20, 'màu nổi bật , tươi', 6, 29, '04:09:54pm 22/06/2023'),
(21, 'zadfesnan', 6, 39, '04:09:59pm 22/06/2023'),
(22, 'jhsdvbajkdv', 6, 18, '04:10:06pm 22/06/2023'),
(23, 'giày mềm êm dễ đi dễ phối', 6, 18, '04:10:20pm 22/06/2023'),
(24, 'giày phù hợp với trang phục', 6, 24, '04:10:38pm 22/06/2023'),
(25, 'Màu Trắng, đỏ, xám, xanh than', 6, 25, '04:10:58pm 22/06/2023'),
(26, ' Màu Trắng cho nữ', 6, 23, '04:11:20pm 22/06/2023'),
(27, 'giày đẹp', 6, 23, '04:11:25pm 22/06/2023'),
(28, 'giày chất lượng tốt', 6, 22, '04:11:44pm 22/06/2023'),
(29, 'xịn', 6, 22, '04:12:05pm 22/06/2023'),
(30, 'phối màu độc đao', 6, 21, '04:12:19pm 22/06/2023'),
(31, 'rất thích', 6, 21, '04:12:27pm 22/06/2023'),
(32, 'giày rất êm và thoải mái', 6, 17, '04:12:56pm 22/06/2023'),
(33, 'zdngdn adgngfj,mf', 6, 17, '04:13:03pm 22/06/2023'),
(34, ' màu trắng sọc đen', 6, 15, '04:13:15pm 22/06/2023'),
(35, 'đúng form', 6, 15, '04:13:24pm 22/06/2023'),
(36, 'giày đẹp', 6, 16, '04:13:36pm 22/06/2023'),
(37, 'êm dễ đi', 6, 16, '04:13:42pm 22/06/2023'),
(38, 'Màu Trắng, Hồng, Đen', 6, 26, '04:14:08pm 22/06/2023'),
(39, 'giày chất lượng tốtg', 6, 26, '04:14:15pm 22/06/2023'),
(43, 'g', 6, 28, '04:14:39pm 22/06/2023'),
(44, 'SFN SN ', 6, 28, '04:14:43pm 22/06/2023'),
(45, 'phong cách cổ điẻn nhung đẹp', 6, 35, '04:15:08pm 22/06/2023'),
(46, 'Màu Đen để trắng', 6, 34, '04:15:21pm 22/06/2023'),
(47, 'giá rẻ nhung đẹp', 6, 34, '04:15:27pm 22/06/2023'),
(48, 'An n', 6, 33, '04:15:51pm 22/06/2023'),
(49, 'giày chất', 6, 36, '04:16:05pm 22/06/2023'),
(50, 'rất đẹp', 6, 36, '04:16:09pm 22/06/2023'),
(51, 'giày đẹp', 6, 37, '04:16:18pm 22/06/2023'),
(53, 'r', 6, 37, '04:16:27pm 22/06/2023'),
(54, 'khbvkh', 0, 41, '02:19:46pm 23/06/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `product_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_ID`, `product_name`, `id_type`, `price`, `image`, `description`, `views`) VALUES
(15, 'Giày ADIDAS EQT màu trắng', 5, 350000.00, 'adidas_EQT_trang.jpg', 'Fullsize 36-42\r\nmàu trắng sọc đen\r\n', 12),
(16, 'Giày ADIDAS Super Stars (Trắng)', 5, 500000.00, 'adidas_super_star_trang.jpg', 'Fullsize 36-42\r\nmàu trắng', 14),
(17, 'Giày ADIDAS Ultra boost triple(Black)', 5, 450000.00, 'adidas_Ultra_Boost_triple_black.jpg', 'Fullsize 36-42\r\nmàu: full đen', 9),
(18, 'ADIDAS yeezy 350 v2 ceam white sf 2', 5, 400000.00, 'adidas-yeezy-350-v2-ceam-white-sf-2.jpg', 'Fullsize 36-42', 23),
(21, 'Puma Trắng viền đen', 4, 300000.00, 'puma_trang_vien_den.jpg', 'Fullsize 36-42\r\nMàu trắng đen', 18),
(22, 'Puma Trắng mũi bạc', 4, 380000.00, 'puma-trang-mui-bac-sf.jpg', 'fullsize 36-42\r\nMàu trắng mũi bạc', 16),
(23, 'Puma Trắng Nữ', 4, 320000.00, 'puma_trang_nu.jpg', 'Fullsize 36-42\r\nMàu Trắng cho nữ', 7),
(24, 'Puma fenty Creeper White Rep11', 4, 480000.00, 'giay-puma-fenty-creeper-white-rep-11-2.jpg', 'Fullsize 36-42\r\nMàu full Trắng', 11),
(25, 'Puma RS-X hard Drive', 4, 600000.00, 'Giày-Puma-RS-X-Hard-Drive.jpg', 'Fullsize 36-42\r\nMàu Trắng, đỏ, xám, xanh than', 17),
(26, 'Balenciaga speed trainer White BlackPink', 3, 750000.00, 'balenciaga_speed_trainer_white_black_pink.jpg', 'Fullsize 36-42\r\nMàu Trắng, Hồng, Đen', 15),
(27, 'Balenciaga Triple S', 3, 700000.00, 'balenciaga_triple_S.jpg', 'Fullsize 36-42\r\nMàu Cổ điển', 26),
(28, 'Balenciaga Triple SB clear White', 3, 750000.00, 'balenciaga_triple_s_clear_white_plus_y_factory.jpg', 'Fullsize 36-42\r\nMàu full trắng', 19),
(29, 'Balenciaga Triple Sb neon Green', 3, 800000.00, 'balenciaga_triple_s_neon_green.jpg', 'Fullsize 36-42\r\nMàu xanh neon', 24),
(30, 'Balenciaga Triple Sb Full Đen ', 3, 780000.00, 'balenciaga-triple-s-full-den-rep.jpeg', 'Fullsize 36-42\r\nMàu full đen', 27),
(31, 'Giày Vans Ward', 2, 280000.00, 'Giày-Vans-Ward.jpg', 'Fullsize 36-42\r\nMàu cổ điển', 34),
(32, 'Giày Vans Caro', 2, 300000.00, 'vans_caro_co_day.jpg', 'Fullsize 36-42\r\nMàu Trắng đen caro', 33),
(33, 'Giày Vans lười Caro', 2, 350000.00, 'vans_luoi_caro.jpg', 'Fullsize 36-42\r\nMàu Trắng đen caro', 30),
(34, 'Giày Vans old Skool', 2, 250000.00, 'vans_old_skool.jpg', 'Fullsize 36-42\r\nMàu Đen để trắng', 20),
(35, 'Giày Vans Vault Old Skool', 2, 280000.00, 'vans_vault_old_skool.jpg', 'Fullsize 36-42', 10),
(36, 'Nike AIR UPTEMPER Trắng đỏ', 1, 750000.00, 'giay-nike-air-uptempo-trắng-đỏ-5.jpg', 'Fullsize 36-42\r\nMàu Trắng  chữ đỏ', 19),
(37, 'Nike AF1 full White', 1, 550000.00, 'nike_af1_white.jpg', 'Fullsize 36-42\r\nMàu Full trắng', 22),
(38, 'Nike Jordan 4 Retro Off-white sail 1', 1, 780000.00, 'Nike-Air-Jordan-4-Retro-Off-White-sail-1.jpg', 'Fullsize 36-42\r\nmàu Ngà voi', 29),
(39, 'NIKE JD1 midnight smokegrey', 1, 630000.00, 'nike_jd1_mid_night_smokegrey.jpg', 'Fullsize 36-42\r\nmàu trắng đen xám\r\ncổ cao', 24),
(40, 'Nike jd1 low Trắng Xám', 1, 450000.00, 'nike_jd1_low_trang_xam.jpg', 'Fullsize 36-42\r\nMàu trắng đen xám\r\ncổ thấp', 28),
(41, ' ADIDAS yeezy 700 wave runner solid grey 1 min', 5, 450000.00, 'adidas-Yeezy-Boost-700-Wave-Runner-xam-dam-2.jpg', 'Fullsize 36-42', 15),
(43, 'alexander MCQueen 4', 5, 450000.00, 'giay-alexander-mcqueen-4_result.jpg', 'fullsize 36-42\r\n\r\nmàu trắng\r\n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'NIKE'),
(2, 'VANS'),
(3, 'BALENCIAGA '),
(4, 'PUMA'),
(5, 'ADIDAS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(4, 'dtrung', '060503', 'nguyenductrung@gmail.com', NULL, NULL, 0),
(5, 'anhanh', '123456', 'anhttph27113@fpt.edu.vn', '80/47 Xuân Phương', '0362359525', 1),
(6, 'tuyetanh232', '230203', 'trinhanhanh2302@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
