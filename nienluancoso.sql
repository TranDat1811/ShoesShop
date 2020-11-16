-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 05:28 PM
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
  `cthd_gia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`cthd_maso`, `hd_maso`, `h_maso`, `cthd_soluong`, `cthd_gia`) VALUES
(1, 0, 1, '70', '214424000');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhkhuyenmai`
--

CREATE TABLE `chuongtrinhkhuyenmai` (
  `ct_maso` int(10) NOT NULL,
  `ct_ten` varchar(200) NOT NULL,
  `ct_giamgia` int(2) NOT NULL,
  `ct_ngaybatdau` date NOT NULL,
  `ct_ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuongtrinhkhuyenmai`
--

INSERT INTO `chuongtrinhkhuyenmai` (`ct_maso`, `ct_ten`, `ct_giamgia`, `ct_ngaybatdau`, `ct_ngayketthuc`) VALUES
(6, 'Khai trương cửa hàng', 20, '2020-05-29', '2020-06-01'),
(8, 'Lễ 30/4 - 1/5', 25, '2020-06-02', '2020-06-05'),
(9, 'Lễ 5/5', 15, '2020-05-26', '2020-05-29'),
(10, 'Black friday', 50, '2020-05-30', '2020-05-31');

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
  `ct_maso` int(10) DEFAULT NULL,
  `h_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`h_maso`, `h_ten`, `h_gia`, `h_soluong`, `h_mau`, `h_kichco`, `h_hinhanh`, `h_mota`, `nh_maso`, `ct_maso`, `h_active`) VALUES
(1, 'Jordan Delta', 3829000, 100, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 43, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 8, 1),
(2, 'Jordan Delta', 3829000, 97, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 41, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 6, 1),
(3, 'Jordan Delta', 3829000, 99, 'Vachetta Tan/Light Cream/Rust Factor/Sail', 42, 'jordan-delta-shoe-ll8djW.jpg', 'Đồng bằng Jordan làm chủ nghệ thuật tiếp cận với một thiết kế biểu cảm và thoải mái từ trong ra ngoài. Được làm từ hỗn hợp các vật liệu công nghệ cao và tự nhiên, đôi giày này có lớp lót dưới chân sang trọng, nhẹ. Nó được chế tạo tỉ mỉ cho một cái nhìn và cảm nhận chỉ Jordan Brand có thể cung cấp.', 1, 6, 1),
(4, 'Air Jordan 1 Mid SE', 3519000, 76, 'Black/Amarillo/White/Team Orange', 40, 'air-jordan-1-mid-se-shoe-xnGlQq.jpg', 'Air Jordan 1 Mid SE duy trì sự hấp dẫn vượt thời gian của OG AJ1, được tân trang lại với màu sắc tươi mới và vật liệu cao cấp. Được thiết kế với một đơn vị Air-Sole nhẹ và các đường nét thiết kế cổ điển, nó nắm bắt được bản chất của bản gốc thông qua một ống kính hiện đại', 1, 9, 1),
(5, 'Air Jordan 1 Mid SE', 3519000, 77, 'Black/Amarillo/White/Team Orange', 41, 'air-jordan-1-mid-se-shoe-xnGlQq.jpg', 'Air Jordan 1 Mid SE duy trì sự hấp dẫn vượt thời gian của OG AJ1, được tân trang lại với màu sắc tươi mới và vật liệu cao cấp. Được thiết kế với một đơn vị Air-Sole nhẹ và các đường nét thiết kế cổ điển, nó nắm bắt được bản chất của bản gốc thông qua một ống kính hiện đại', 1, 9, 1),
(7, 'Nike Air Force 1 07', 2829000, 89, 'Black/White/Black', 36, 'air-force-1-07-shoe-7FdcQX.jpg', 'Huyền thoại sống trong Nike Air Force 1 07 hiện đại mang trên mình chiếc AF1 mang tính biểu tượng pha trộn phong cách cổ điển với các chi tiết ngọt ngào. Một biểu tượng thẻ khâu chạy dọc lưỡi trong khi thương hiệu quá mức trong suốt củng cố di sản Nike.', 1, 8, 1),
(14, 'Nike Air Force 1 07', 2829000, 91, 'Black/White/Black', 37, 'air-force-1-07-shoe-7FdcQX.jpg', 'Huyền thoại sống trong Nike Air Force 1 07 hiện đại mang trên mình chiếc AF1 mang tính biểu tượng pha trộn phong cách cổ điển với các chi tiết ngọt ngào. Một biểu tượng thẻ khâu chạy dọc lưỡi trong khi thương hiệu quá mức trong suốt củng cố di sản Nike.', 1, 8, 1),
(22, 'Nike SuperRep Go', 2929000, 100, 'Black/White/Black', 39, 'superrep-go-training-shoe-SMnpt6.jpg', 'Nike SuperRep Go kết hợp đệm bọt thoải mái, linh hoạt và hỗ trợ để giúp bạn di chuyển trong các lớp thể dục dựa trên mạch hoặc trong khi truyền phát các bài tập tại nhà.', 1, 8, 1),
(25, 'Nike SuperRep Go', 2929000, 99, 'Black/White/Black', 40, 'superrep-go-training-shoe-SMnpt6.jpg', 'Nike SuperRep Go kết hợp đệm bọt thoải mái, linh hoạt và hỗ trợ để giúp bạn di chuyển trong các lớp thể dục dựa trên mạch hoặc trong khi truyền phát các bài tập tại nhà.', 1, 6, 1),
(26, 'GIÀY ALPHAEDGE 4D', 7500000, 100, 'CORE BLACK / GLORY BLUE / COLLEGIATE PURPLE', 37, 'Giay_Alphaedge_4D_Mau_djen_FV6106_01_standard.jpg', 'GIÀY CHẠY BỘ NHẸ ĐƯỢC THIẾT KẾ ĐỂ TẠO LỢI THẾ CHO VẬN ĐỘNG VIÊN.\r\nTiến xa hơn, nhanh hơn với mẫu giày chạy bộ mang lại năng lượng thích ứng cho mỗi sải bước này. Thân giày bằng vải lưới thoáng khí có các vùng nâng đỡ để tăng thêm sự ổn định khi di chuyển sang hai bên. Công nghệ Carbon 4D ở đế giữa mang đến những bước chạy gọn ghẽ và độ chuyển hồi năng lượng có kiểm soát. Đế ngoài bằng cao su bền bỉ cho độ bám vượt trội.\r\n\r\nSản phẩm này làm từ sợi là thành quả hợp tác giữa adidas với tổ chức Parley for the Oceans. Một số sợi thuộc nhãn hiệu Ocean Plastic™ được làm từ rác tái chế thu gom trên các bãi biển và khu dân cư ven biển trước khi trôi dạt ra đại dương.', 9, NULL, 1),
(27, 'GIÀY ALPHAEDGE 4D', 7500000, 100, 'CORE BLACK / GLORY BLUE / COLLEGIATE PURPLE', 36, 'Giay_Alphaedge_4D_Mau_djen_FV6106_01_standard.jpg', 'GIÀY CHẠY BỘ NHẸ ĐƯỢC THIẾT KẾ ĐỂ TẠO LỢI THẾ CHO VẬN ĐỘNG VIÊN.\r\nTiến xa hơn, nhanh hơn với mẫu giày chạy bộ mang lại năng lượng thích ứng cho mỗi sải bước này. Thân giày bằng vải lưới thoáng khí có các vùng nâng đỡ để tăng thêm sự ổn định khi di chuyển sang hai bên. Công nghệ Carbon 4D ở đế giữa mang đến những bước chạy gọn ghẽ và độ chuyển hồi năng lượng có kiểm soát. Đế ngoài bằng cao su bền bỉ cho độ bám vượt trội.\r\n\r\nSản phẩm này làm từ sợi là thành quả hợp tác giữa adidas với tổ chức Parley for the Oceans. Một số sợi thuộc nhãn hiệu Ocean Plastic™ được làm từ rác tái chế thu gom trên các bãi biển và khu dân cư ven biển trước khi trôi dạt ra đại dương.', 9, NULL, 1),
(28, 'GIÀY PRIMEBLUE ULTRABOOST 20', 5000000, 100, 'CLOUD WHITE / SHARP BLUE / TRUE ORANGE', 37, 'Giay_Primeblue_UltraBoost_20_Mau_trang_EG0768_01_standard.jpg', 'GIÀY CHẠY CẢI TIẾN NÂNG ĐỠ TỐT Ở CÁC VỊ TRÍ CẦN THIẾT.\r\nTự tin không phải tự nhiên mà có. Tố chất ấy được vun đắp qua từng buổi chạy. Đôi giày adidas Primeblue Ultraboost 20 là người bạn đồng hành lý tưởng cho các buổi chạy tuyệt vời nhất. Thân giày bằng vải dệt kim co giãn cho phép bàn chân chuyển động tự nhiên và đế ngoài linh hoạt giúp bạn di chuyển nhịp nhàng. Nhờ đó, bạn dễ dàng hoàn thành quãng đường chạy và đong đầy sự tự tin cho cả cuộc đời.', 9, NULL, 1),
(29, 'GIÀY PRIMEBLUE ULTRABOOST 20', 5000000, 100, 'CLOUD WHITE / SHARP BLUE / TRUE ORANGE', 38, 'Giay_Primeblue_UltraBoost_20_Mau_trang_EG0768_01_standard.jpg', 'GIÀY CHẠY CẢI TIẾN NÂNG ĐỠ TỐT Ở CÁC VỊ TRÍ CẦN THIẾT.\r\nTự tin không phải tự nhiên mà có. Tố chất ấy được vun đắp qua từng buổi chạy. Đôi giày adidas Primeblue Ultraboost 20 là người bạn đồng hành lý tưởng cho các buổi chạy tuyệt vời nhất. Thân giày bằng vải dệt kim co giãn cho phép bàn chân chuyển động tự nhiên và đế ngoài linh hoạt giúp bạn di chuyển nhịp nhàng. Nhờ đó, bạn dễ dàng hoàn thành quãng đường chạy và đong đầy sự tự tin cho cả cuộc đời.', 9, NULL, 1),
(30, 'GIÀY PRIMEBLUE ULTRABOOST 20', 5000000, 100, 'CLOUD WHITE / SHARP BLUE / TRUE ORANGE', 40, 'Giay_Primeblue_UltraBoost_20_Mau_trang_EG0768_01_standard.jpg', 'GIÀY CHẠY CẢI TIẾN NÂNG ĐỠ TỐT Ở CÁC VỊ TRÍ CẦN THIẾT.\r\nTự tin không phải tự nhiên mà có. Tố chất ấy được vun đắp qua từng buổi chạy. Đôi giày adidas Primeblue Ultraboost 20 là người bạn đồng hành lý tưởng cho các buổi chạy tuyệt vời nhất. Thân giày bằng vải dệt kim co giãn cho phép bàn chân chuyển động tự nhiên và đế ngoài linh hoạt giúp bạn di chuyển nhịp nhàng. Nhờ đó, bạn dễ dàng hoàn thành quãng đường chạy và đong đầy sự tự tin cho cả cuộc đời.', 9, 6, 1),
(31, 'GIÀY SAMBA OG', 2500000, 100, 'CORE BLACK / CLOUD WHITE / GUM', 40, 'Giay_Samba_OG_Mau_djen_B75807_01_standard.jpg', 'THIẾT KẾ VÀ CẢM GIÁC LÊN CHÂN KINH ĐIỂN CỦA ĐÔI GIÀY SAMBA ĐÍCH THỰC.\r\nSinh ra trên sân bóng, đôi Samba là biểu tượng vượt thời gian của phong cách đường phố. Mẫu giày này giữ nguyên những nét đặc trưng với thân giày bằng da mềm và các chi tiết phủ ngoài bằng da lộn.', 9, NULL, 1),
(32, 'GIÀY ADIDAS HYPERSLEEK', 3100000, 100, 'OFF WHITE / ASH GREY / COPPER METALLIC', 39, 'Giay_adidas_Hypersleek_Mau_trang_FV4084_01_standard.jpg', 'GIÀY PLATFORM VỚI CÁC CHI TIẾT ÁNH KIM.\r\nQuên đi những định nghĩa. Đón nhận sự đối lập và tôn vinh sự cầu kỳ, vì đây là nơi ẩn chứa bao điều thú vị. Nguồn cảm hứng tạo nên đôi giày adidas Hypersleek này cũng có thể là câu thần chú giúp bạn vượt qua sáng thứ Hai. Bạn không thích bị giới hạn và đôi giày này cũng vậy. Đế platform giúp tăng chiều cao cùng mũi giày nhọn cho nét thời thượng. Hãy xỏ chân vào đôi giày này và phá vỡ những khuôn mẫu. Thế giới đang thách thức bạn, và bạn không bao giờ từ chối.', 9, NULL, 1),
(33, 'GIÀY ADIDAS HYPERSLEEK', 3100000, 100, 'OFF WHITE / ASH GREY / COPPER METALLIC', 40, 'Giay_adidas_Hypersleek_Mau_trang_FV4084_01_standard.jpg', 'GIÀY PLATFORM VỚI CÁC CHI TIẾT ÁNH KIM.\r\nQuên đi những định nghĩa. Đón nhận sự đối lập và tôn vinh sự cầu kỳ, vì đây là nơi ẩn chứa bao điều thú vị. Nguồn cảm hứng tạo nên đôi giày adidas Hypersleek này cũng có thể là câu thần chú giúp bạn vượt qua sáng thứ Hai. Bạn không thích bị giới hạn và đôi giày này cũng vậy. Đế platform giúp tăng chiều cao cùng mũi giày nhọn cho nét thời thượng. Hãy xỏ chân vào đôi giày này và phá vỡ những khuôn mẫu. Thế giới đang thách thức bạn, và bạn không bao giờ từ chối.', 9, NULL, 1),
(34, 'GIÀY PULSEBOOST HD SUMMER.RDY', 3500000, 100, 'SKY TINT / CLOUD WHITE / GREY THREE', 40, 'Giay_Pulseboost_HD_SUMMER.RDY_Mau_xanh_duong_EG0942_01_standard.jpg', 'ĐÔI GIÀY CHẠY BỘ GIÚP BẠN CHINH PHỤC KHOẢNG CÁCH TRONG TIẾT TRỜI NÓNG NỰC.\r\nChạy bộ sớm, chọn cung đường rợp bóng và đi đôi giày adidas thông thoáng này. Giày sẽ giúp bạn đánh bật hơi nóng với thân giày bằng vải lưới thoáng khí tại những vị trí cần thiết nhất. Lớp đệm đàn hồi với cảm giác vững chãi tiếp thêm năng lượng cho từng sải bước. Đừng quên uống đủ nước.', 9, NULL, 1);

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

--
-- Dumping data for table `hoadon1`
--

INSERT INTO `hoadon1` (`hd_maso`, `hd_ngaylap`, `hd_tongtien`, `nv_maso`) VALUES
(0, '2020-06-01 10:47:32', '214424000', 2);

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
  `cv_maso` int(10) NOT NULL,
  `nv_ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_maso`, `nv_ten`, `nv_cmnd`, `nv_tuoi`, `nv_diachi`, `nv_sodienthoai`, `nv_gioitinh`, `cv_maso`, `nv_ghichu`) VALUES
(2, 'Trần Văn A', '331816617', 18, 'Cần thơ', '0188223388', 'Nam', 9, ''),
(14, 'Trần Sĩ Đạt', '331814616', 22, 'Vĩnh Long', '0382507755', 'Nam', 8, '');

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
(9, 'Adidas'),
(11, 'Phụ kiện');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`cthd_maso`),
  ADD KEY `hd_maso` (`hd_maso`),
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
  ADD UNIQUE KEY `nv_cmnd` (`nv_cmnd`),
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
  MODIFY `cthd_maso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chuongtrinhkhuyenmai`
--
ALTER TABLE `chuongtrinhkhuyenmai`
  MODIFY `ct_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
  MODIFY `cv_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `h_maso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nhomhang`
--
ALTER TABLE `nhomhang`
  MODIFY `nh_maso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD CONSTRAINT `chitiet_hd_ibfk_1` FOREIGN KEY (`hd_maso`) REFERENCES `hoadon1` (`hd_maso`),
  ADD CONSTRAINT `chitiet_hd_ibfk_2` FOREIGN KEY (`h_maso`) REFERENCES `hanghoa` (`h_maso`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_2` FOREIGN KEY (`nh_maso`) REFERENCES `nhomhang` (`nh_maso`),
  ADD CONSTRAINT `hanghoa_ibfk_3` FOREIGN KEY (`ct_maso`) REFERENCES `chuongtrinhkhuyenmai` (`ct_maso`);

--
-- Constraints for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD CONSTRAINT `hoadon1_ibfk_1` FOREIGN KEY (`nv_maso`) REFERENCES `nhanvien` (`nv_maso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`cv_maso`) REFERENCES `congviec` (`cv_maso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
