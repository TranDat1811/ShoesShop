-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 05:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awm_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `hd_maso` int(11) NOT NULL,
  `cthd_soluong` int(11) NOT NULL,
  `cthd_gia` int(11) NOT NULL,
  `h_maso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhkhuyenmai`
--

CREATE TABLE `chuongtrinhkhuyenmai` (
  `ct_maso` int(10) NOT NULL,
  `ct_ten` varchar(200) NOT NULL,
  `ct_giamgia` int(2) NOT NULL,
  `ct_ngaybd` datetime NOT NULL,
  `ct_ngaykt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuongtrinhkhuyenmai`
--

INSERT INTO `chuongtrinhkhuyenmai` (`ct_maso`, `ct_ten`, `ct_giamgia`, `ct_ngaybd`, `ct_ngaykt`) VALUES
(1, 'Khai trương cửa hàng', 10, '2020-03-13 11:00:00', '2020-03-31 11:00:00'),
(2, 'Nhà cung cấp giảm giá', 15, '2020-03-13 11:00:00', '2020-03-20 11:00:00'),
(3, 'Giảm khủng', 50, '2020-03-26 11:00:00', '2020-03-31 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `cv_maso` int(10) NOT NULL,
  `cv_ten` varchar(200) NOT NULL,
  `cv_luong` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `nv_maso` int(10) NOT NULL,
  `dn_taikhoan` varchar(30) NOT NULL,
  `dn_matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `h_maso` int(10) NOT NULL,
  `h_ten` varchar(200) NOT NULL,
  `h_gia` varchar(200) NOT NULL,
  `h_hinhanh` varchar(100) NOT NULL,
  `h_kichco` int(2) DEFAULT NULL,
  `h_mau` varchar(100) NOT NULL,
  `h_soluong` int(10) NOT NULL,
  `h_mota` varchar(200) DEFAULT NULL,
  `nh_maso` int(10) NOT NULL,
  `ct_maso` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`h_maso`, `h_ten`, `h_gia`, `h_hinhanh`, `h_kichco`, `h_mau`, `h_soluong`, `h_mota`, `nh_maso`, `ct_maso`) VALUES
(7, 'Nike-123', '200000', '1.jpg', 35, 'Trắng', 60, 'Lớp đế được làm từ cao su tổng hợp giúp   đôi giày thêm đàn hồi', 7, 1),
(8, 'Adidas-1', '250000', '2.jpg', 35, 'Đỏ', 50, 'Lớp đế được làm từ cao su tổng hợp giúp   đôi giày thêm đàn hồi', 6, 2),
(9, 'Nike-234', '180000', '3.jpg', 36, 'Hồng', 70, 'Vải được tạo từ vải tổng hợp giúp người mang được thoải mái', 7, NULL),
(10, 'Dây giày', '15000', '4.jpg', NULL, 'Trắng', 50, 'Dây giày thiết kế độc đáo giúp đôi giày thêm phần sang trọng', 8, NULL),
(11, 'Nike React Infinity Run Flyknit', '4699000', 'nike_1.jpg', 40, 'Black/Laser Orange/White/University Blue', 50, 'Giày được nhập chính hãng từ NIKE', 7, 3),
(12, 'Nike React Infinity Run Flyknit', '4699000', 'nike_1.jpg', 40, 'Black/Laser Orange/White/University Blue', 50, 'Giày được nhập chính hãng từ NIKE', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_maso` int(11) NOT NULL,
  `hd_ngaydathang` int(11) NOT NULL,
  `hd_thanhtien` int(11) NOT NULL,
  `nv_maso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_maso` int(10) NOT NULL,
  `nv_ten` varchar(200) NOT NULL,
  `nv_cmnd` int(13) NOT NULL,
  `nv_tuoi` int(2) NOT NULL,
  `nv_diachi` varchar(255) NOT NULL,
  `nv_sodienthoai` int(10) NOT NULL,
  `nv_gioitinh` varchar(100) NOT NULL,
  `cv_maso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhomhang`
--

CREATE TABLE `nhomhang` (
  `nh_maso` int(10) NOT NULL,
  `nh_ten` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhomhang`
--

INSERT INTO `nhomhang` (`nh_maso`, `nh_ten`) VALUES
(6, 'Adidas'),
(7, 'Nike'),
(8, 'Phụ kiện');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD UNIQUE KEY `hd_maso` (`hd_maso`,`h_maso`),
  ADD KEY `h_maso` (`h_maso`);

--
-- Indexes for table `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  ADD PRIMARY KEY (`ct_maso`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`cv_maso`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD UNIQUE KEY `nv_maso` (`nv_maso`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`h_maso`),
  ADD UNIQUE KEY `nh_maso` (`nh_maso`,`ct_maso`),
  ADD KEY `ct_maso` (`ct_maso`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_maso`),
  ADD UNIQUE KEY `nv_maso` (`nv_maso`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_maso`),
  ADD UNIQUE KEY `cv_maso` (`cv_maso`);

--
-- Indexes for table `nhomhang`
--
ALTER TABLE `nhomhang`
  ADD PRIMARY KEY (`nh_maso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  MODIFY `ct_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
  MODIFY `cv_maso` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `h_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_maso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_maso` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhomhang`
--
ALTER TABLE `nhomhang`
  MODIFY `nh_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`h_maso`) REFERENCES `hang` (`h_maso`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`hd_maso`) REFERENCES `hoadon` (`hd_maso`);

--
-- Constraints for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`nv_maso`) REFERENCES `nhanvien` (`nv_maso`);

--
-- Constraints for table `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `hang_ibfk_1` FOREIGN KEY (`nh_maso`) REFERENCES `nhomhang` (`nh_maso`),
  ADD CONSTRAINT `hang_ibfk_3` FOREIGN KEY (`ct_maso`) REFERENCES `chuongtrinhkhuyenmai` (`ct_maso`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`nv_maso`) REFERENCES `nhanvien` (`nv_maso`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`cv_maso`) REFERENCES `congviec` (`cv_maso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
