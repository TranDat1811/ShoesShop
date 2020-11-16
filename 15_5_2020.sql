-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 03:51 PM
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
-- Database: `nienluancoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_hd`
--

CREATE TABLE `chitiet_hd` (
  `cthd_maso` int(11) NOT NULL,
  `hd_maso` int(11) NOT NULL,
  `h_maso` int(11) NOT NULL,
  `cthd_soluong` varchar(200) NOT NULL,
  `cthd_giamua` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhkhuyenmai`
--

CREATE TABLE `chuongtrinhkhuyenmai` (
  `ct_maso` int(10) NOT NULL,
  `ct_ten` varchar(200) NOT NULL,
  `ct_giamgia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuongtrinhkhuyenmai`
--

INSERT INTO `chuongtrinhkhuyenmai` (`ct_maso`, `ct_ten`, `ct_giamgia`) VALUES
(6, 'Khai trương cửa hàng', 20),
(7, 'Giảm khủng', 50),
(8, 'Không giảm giá', 0),
(9, 'Lễ 5/5', 15);

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `cv_maso` int(10) NOT NULL,
  `cv_ten` varchar(200) NOT NULL,
  `cv_luong` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`cv_maso`, `cv_ten`, `cv_luong`) VALUES
(8, 'Quản lí', 20000000),
(9, 'Bán hàng', 8000000);

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `nv_maso` int(10) NOT NULL,
  `dn_taikhoan` varchar(30) NOT NULL,
  `dn_matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`nv_maso`, `dn_taikhoan`, `dn_matkhau`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `h_maso` int(11) NOT NULL,
  `h_ten` varchar(200) NOT NULL,
  `h_gia` int(255) NOT NULL,
  `h_soluong` int(255) NOT NULL,
  `h_mau` varchar(200) NOT NULL,
  `h_kichco` int(2) NOT NULL,
  `h_hinhanh` varchar(200) NOT NULL,
  `h_mota` text NOT NULL,
  `nh_maso` int(10) NOT NULL,
  `ct_maso` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`h_maso`, `h_ten`, `h_gia`, `h_soluong`, `h_mau`, `h_kichco`, `h_hinhanh`, `h_mota`, `nh_maso`, `ct_maso`) VALUES
(1, 'Jordan Delta', 3829000, 100, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 43, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 6),
(2, 'Jordan Delta', 3829000, 100, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 41, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 6),
(3, 'Jordan Delta', 3829000, 100, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 42, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 6),
(4, 'Air Jordan 1 Mid SE', 3519000, 80, 'Black/Amarillo/White/Team Orange', 40, 'air-jordan-1-mid-se-shoe-xnGlQq.jpg', 'Air Jordan 1 Mid SE duy trì sự hấp dẫn vượt thời gian của OG AJ1, được tân trang lại với màu sắc tươi mới và vật liệu cao cấp. Được thiết kế với một đơn vị Air-Sole nhẹ và các đường nét thiết kế cổ điển, nó nắm bắt được bản chất của bản gốc thông qua một ống kính hiện đại', 1, 9),
(5, 'Air Jordan 1 Mid SE', 3519000, 80, 'Black/Amarillo/White/Team Orange', 41, 'air-jordan-1-mid-se-shoe-xnGlQq.jpg', 'Air Jordan 1 Mid SE duy trì sự hấp dẫn vượt thời gian của OG AJ1, được tân trang lại với màu sắc tươi mới và vật liệu cao cấp. Được thiết kế với một đơn vị Air-Sole nhẹ và các đường nét thiết kế cổ điển, nó nắm bắt được bản chất của bản gốc thông qua một ống kính hiện đại', 1, 9),
(7, 'Nike Air Force 1 07', 2929000, 100, 'Black/White/Black', 36, 'air-force-1-07-shoe-7FdcQX.jpg', 'Huyền thoại sống trong Nike Air Force 1 07 hiện đại mang trên mình chiếc AF1 mang tính biểu tượng pha trộn phong cách cổ điển với các chi tiết ngọt ngào. Một biểu tượng thẻ khâu chạy dọc lưỡi trong khi thương hiệu quá mức trong suốt củng cố di sản Nike.', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon1`
--

CREATE TABLE `hoadon1` (
  `hd_maso` int(11) NOT NULL,
  `hd_ngaylap` datetime NOT NULL,
  `hd_tongtien` varchar(200) NOT NULL,
  `nv_maso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_maso` int(10) NOT NULL,
  `nv_ten` varchar(200) NOT NULL,
  `nv_cmnd` varchar(9) NOT NULL,
  `nv_tuoi` int(2) NOT NULL,
  `nv_diachi` varchar(255) NOT NULL,
  `nv_sodienthoai` varchar(10) NOT NULL,
  `nv_gioitinh` varchar(100) NOT NULL,
  `cv_maso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_maso`, `nv_ten`, `nv_cmnd`, `nv_tuoi`, `nv_diachi`, `nv_sodienthoai`, `nv_gioitinh`, `cv_maso`) VALUES
(1, 'Trần Sĩ Đạt', '331814616', 22, 'Vĩnh Long', '0382507755', 'Nam', 8),
(2, 'Trần Văn A', '331816617', 18, 'Cần thơ', '0188223388', 'Nam', 9),
(3, 'Nguyễn Thị B', '331814618', 20, 'Cần Thơ', '0382507755', 'Nữ', 9);

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
(1, 'Nike'),
(6, 'Adidas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`cthd_maso`);

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
  ADD PRIMARY KEY (`nv_maso`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`h_maso`),
  ADD KEY `nh_maso` (`nh_maso`),
  ADD KEY `ct_maso` (`ct_maso`);

--
-- Indexes for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD PRIMARY KEY (`hd_maso`),
  ADD KEY `nv_maso` (`nv_maso`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_maso`),
  ADD KEY `cv_maso` (`cv_maso`) USING BTREE;

--
-- Indexes for table `nhomhang`
--
ALTER TABLE `nhomhang`
  ADD PRIMARY KEY (`nh_maso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  MODIFY `cthd_maso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  MODIFY `ct_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
  MODIFY `cv_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `h_maso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhomhang`
--
ALTER TABLE `nhomhang`
  MODIFY `nh_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_2` FOREIGN KEY (`nh_maso`) REFERENCES `nhomhang` (`nh_maso`),
  ADD CONSTRAINT `hanghoa_ibfk_3` FOREIGN KEY (`ct_maso`) REFERENCES `chuongtrinhkhuyenmai` (`ct_maso`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`cv_maso`) REFERENCES `congviec` (`cv_maso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
