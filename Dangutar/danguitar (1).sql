-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 04:34 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `danguitar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Guitar ', 1),
(2, 'Guitar Acoustic', 1),
(3, 'Guitar Classic', 1),
(4, 'Flamenco Guitar', 1),
(5, 'Guitar Hawaii', 1),
(6, 'Guitar điện', 1),
(7, 'Guitar bass', 1),
(8, 'Guitar Acoustic Lazer', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `name` varchar(50) NOT NULL,
  `anh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `id_users` varchar(50) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`name`, `anh`, `soluong`, `dongia`, `id_users`, `id_pro`, `description`) VALUES
('Guitar Acoustic YAMAHA DW-4s', 'anh/anh22.jpg', 2, 6750000, 'b', 5, 'Mô tả chi tiết'),
('Guitar Acoustic YAMAHA FG-152', 'anh/anh21.jpg', 2, 3500000, 'admin', 3, 'Mô tả chi tiết'),
('Guitar Acoustic YAMAHA DW-4s                    ', 'anh/anh22.jpg                    ', 1, 6750000, 'cc                    ', 8, 'Mô tả chi tiết'),
('Guitar Acoustic YAMAHA DW-4s        ', 'anh/anh22.jpg        ', 2, 6750000, 'cc        ', 4, 'Mô tả chi tiết'),
('Guitar điện ARIA PRO II MAGNA series        ', 'anh/anh12.jpg        ', 2, 3400000, 'cc        ', 2, 'Mô tả chi tiết 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `cat_id`, `price`, `image`, `description`) VALUES
(2, 'Guitar điện ARIA PRO II MAGNA series', 1, 3400000, 'anh/anh12.jpg', 'Mô tả chi tiết 2'),
(3, 'Guitar Acoustic YAMAHA FG-152', 2, 3500000, 'anh/anh21.jpg', 'Mô tả chi tiết'),
(4, 'Guitar Acoustic YAMAHA DW-4s', 2, 6750000, 'anh/anh22.jpg', 'Mô tả chi tiết'),
(5, 'Guitar Acoustic YAMAHA DW-4s', 2, 6750000, 'anh/anh22.jpg', 'Mô tả chi tiết'),
(6, 'Guitar Acoustic YAMAHA DW-4s', 2, 6750000, 'anh/anh22.jpg', 'Mô tả chi tiết'),
(7, 'Guitar Acoustic YAMAHA DW-4s', 2, 6750000, 'anh/anh22.jpg', 'Mô tả chi tiết'),
(8, 'Guitar Acoustic YAMAHA DW-4s', 2, 6750000, 'anh/anh22.jpg', 'Mô tả chi tiết'),
(9, 'Guitar Acoustic YAMAHA FG-152', 2, 3500000, 'anh/anh21.jpg', 'Mô tả chi tiết'),
(10, 'Guitar điện GIO IBANEZ bk', 1, 3900000, 'anh/anh11.jpg', 'Mô tả chi tiết 1'),
(11, 'Guitar điện ARIA PRO II MAGNA series', 1, 3400000, 'anh/anh12.jpg', 'Mô tả chi tiết 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`userName`, `password`, `level`) VALUES
('a', 'a', 0),
('admin', 'admin', 1),
('b', 'b', 0),
('cc', 'cc', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `tbl_giohang_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`userName`),
  ADD CONSTRAINT `tbl_giohang_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `tbl_product` (`pro_id`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
