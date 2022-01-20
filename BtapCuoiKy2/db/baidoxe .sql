-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2022 lúc 01:17 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baidoxe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `maadmin` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenadmin` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`maadmin`, `email`, `matkhau`, `tenadmin`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Văn Nghĩa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datcho`
--

CREATE TABLE `datcho` (
  `madatcho` int(11) NOT NULL,
  `maodo` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `biensoxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL,
  `giodangky` time DEFAULT NULL,
  `thoigianvao` time NOT NULL,
  `soluot` int(11) NOT NULL,
  `thoigianradukien` time NOT NULL,
  `tiendukien` int(100) NOT NULL,
  `trangthaidat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datcho`
--

INSERT INTO `datcho` (`madatcho`, `maodo`, `makh`, `biensoxe`, `ngaydangky`, `giodangky`, `thoigianvao`, `soluot`, `thoigianradukien`, `tiendukien`, `trangthaidat`) VALUES
(4, 1, 2, 'abc', '2022-01-07', NULL, '07:00:00', 2, '09:00:00', 30000, 4),
(5, 6, 2, 'abc', '2022-01-07', NULL, '07:00:00', 5, '12:00:00', 100000, 4),
(6, 12, 2, 'abc', '2022-01-07', NULL, '07:00:00', 4, '11:00:00', 120000, 4),
(7, 9, 5, 'aaa', '2022-01-10', NULL, '07:00:00', 1, '08:00:00', 30000, 4),
(8, 6, 5, 'aaa', '2022-01-10', NULL, '07:00:00', 3, '10:00:00', 60000, 4),
(9, 2, 5, 'aaa', '2022-01-10', NULL, '07:00:00', 4, '11:00:00', 60000, 4),
(10, 1, 1, '123', '2022-01-11', NULL, '07:00:00', 3, '10:00:00', 45000, 4),
(11, 5, 1, '123', '2022-01-11', NULL, '07:00:00', 3, '10:00:00', 60000, 4),
(12, 9, 1, '123', '2022-01-11', NULL, '07:00:00', 4, '11:00:00', 120000, 4),
(13, 1, 1, '123', '2022-01-11', NULL, '07:00:00', 1, '08:00:00', 15000, 4),
(14, 1, 1, '123', '2022-01-12', NULL, '07:00:00', 1, '08:00:00', 15000, 3),
(15, 1, 1, '123', '2022-01-12', NULL, '07:00:00', 2, '09:00:00', 30000, 4),
(16, 1, 1, '123', '2022-01-12', NULL, '07:00:00', 1, '08:00:00', 15000, 3),
(18, 1, 1, '123', '2022-01-12', NULL, '07:00:00', 1, '08:00:00', 15000, 3),
(26, 9, 1, '123', '2022-01-12', '13:30:36', '07:00:00', 2, '09:00:00', 60000, 4),
(27, 1, 1, '123', '2022-01-12', '14:13:18', '07:00:00', 1, '08:00:00', 15000, 3),
(28, 1, 1, '123', '2022-01-19', '16:09:15', '07:00:00', 1, '08:00:00', 15000, 3),
(29, 1, 1, '123', '2022-01-19', '16:18:54', '07:00:00', 1, '08:00:00', 15000, 3),
(30, 1, 1, '123', '2022-01-19', '16:19:08', '07:00:00', 1, '08:00:00', 15000, 3),
(31, 1, 1, '123', '2022-01-19', '16:19:25', '07:00:00', 1, '08:00:00', 15000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `madatcho` int(11) NOT NULL,
  `ngaylaphd` date NOT NULL,
  `thoigianra` time DEFAULT NULL,
  `tienphat` int(11) NOT NULL DEFAULT 0,
  `tongtien` int(11) DEFAULT NULL,
  `trangthaihd` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `madatcho`, `ngaylaphd`, `thoigianra`, `tienphat`, `tongtien`, `trangthaihd`) VALUES
(4, 6, '2022-01-07', '19:20:00', 270000, 390000, 1),
(5, 5, '2022-01-07', '19:19:00', 160000, 260000, 1),
(6, 4, '2022-01-07', '19:19:00', 165000, 195000, 1),
(7, 9, '2022-01-10', '23:23:00', 195000, 255000, 1),
(8, 8, '2022-01-10', '22:23:00', 260000, 320000, 1),
(9, 7, '2022-01-10', '21:23:00', 420000, 450000, 1),
(10, 12, '2022-01-11', '17:31:00', 210000, 330000, 1),
(11, 11, '2022-01-11', '10:00:00', 0, 60000, 1),
(12, 10, '2022-01-11', '09:31:00', 0, 45000, 1),
(13, 13, '2022-01-11', '17:46:00', 150000, 165000, 1),
(14, 15, '2022-01-12', '12:08:00', 60000, 90000, 1),
(15, 17, '2022-01-12', NULL, 0, 15000, 0),
(16, 19, '2022-01-12', NULL, 0, 15000, 0),
(28, 19, '2022-01-12', NULL, 0, 15000, 0),
(29, 19, '2022-01-12', NULL, 0, 15000, 0),
(34, 26, '2022-01-12', '14:14:00', 180000, 240000, 1),
(38, 31, '2022-01-19', '16:22:00', 135000, 150000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `sdt`, `diachi`, `email`, `matkhau`) VALUES
(1, 'Phạm Văn Nghĩa', '0372458126', 'Quảng Nam', 'vannghia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Lê Thoa', '0899234567', 'Đà Nẵng', 'lethoa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Nam', '027654896', 'Đà Nẵng', 'nam123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Văn Trình', '0376015458', 'Đà Nẵng', 'vantrinh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Bình', '0273482460', 'Quảng Bình', 'binh@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiodo`
--

CREATE TABLE `loaiodo` (
  `maloaio` int(11) NOT NULL,
  `tenloaio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiodo`
--

INSERT INTO `loaiodo` (`maloaio`, `tenloaio`, `dongia`) VALUES
(1, 'Ô xe 4 chỗ', 15000),
(2, 'Ô xe 7 chỗ', 20000),
(3, 'Ô xe 16 chỗ', 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `odo`
--

CREATE TABLE `odo` (
  `maodo` int(11) NOT NULL,
  `maloaio` int(11) NOT NULL,
  `tenodo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tang` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `odo`
--

INSERT INTO `odo` (`maodo`, `maloaio`, `tenodo`, `tang`, `trangthai`) VALUES
(1, 1, 'A101', 1, 1),
(2, 1, 'A102', 1, 1),
(3, 1, 'A201', 2, 1),
(4, 1, 'A202', 2, 1),
(5, 2, 'A103', 1, 1),
(6, 2, 'A104', 1, 1),
(7, 2, 'A203', 2, 1),
(8, 2, 'A204', 2, 1),
(9, 3, 'A105', 1, 1),
(10, 3, 'A106', 1, 1),
(11, 3, 'A205', 2, 1),
(12, 3, 'A206', 2, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maadmin`);

--
-- Chỉ mục cho bảng `datcho`
--
ALTER TABLE `datcho`
  ADD PRIMARY KEY (`madatcho`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loaiodo`
--
ALTER TABLE `loaiodo`
  ADD PRIMARY KEY (`maloaio`);

--
-- Chỉ mục cho bảng `odo`
--
ALTER TABLE `odo`
  ADD PRIMARY KEY (`maodo`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `maadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `datcho`
--
ALTER TABLE `datcho`
  MODIFY `madatcho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaiodo`
--
ALTER TABLE `loaiodo`
  MODIFY `maloaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `odo`
--
ALTER TABLE `odo`
  MODIFY `maodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
