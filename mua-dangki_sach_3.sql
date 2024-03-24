-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mua-dangki_sach_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `id_sach` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ngay_binhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` text NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1 COMMENT '0_Ẩn | 1_hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `trangthai`) VALUES
(1, 'Sách kinh tế', 1),
(7, 'Truyện tranh', 1),
(8, 'sách văn học', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `nguoinhan` text NOT NULL,
  `email` text NOT NULL,
  `so_dienthoai` int(11) NOT NULL,
  `diachi` text NOT NULL,
  `phuongthuc_tt` int(11) NOT NULL,
  `tong_donhang` double NOT NULL,
  `ngay_dathang` date NOT NULL,
  `trangthai` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang_chitiet`
--

CREATE TABLE `donhang_chitiet` (
  `id_dhct` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id_phanquyen` int(11) NOT NULL,
  `ten_phanquyen` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id_sach` int(11) NOT NULL,
  `ten_sach` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` double NOT NULL,
  `gia_khuyenmai` int(11) NOT NULL,
  `anh` text NOT NULL,
  `mota` text NOT NULL,
  `ten_tacgia` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_trangthai` int(11) NOT NULL,
  `ngay_xuatban` date NOT NULL,
  `id_voucher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id_sach`, `ten_sach`, `soluong`, `gia`, `gia_khuyenmai`, `anh`, `mota`, `ten_tacgia`, `id_danhmuc`, `id_trangthai`, `ngay_xuatban`, `id_voucher`) VALUES
(3, 'doraemon', 2, 2000, 0, 'do.jpg', 'Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'tung', 7, 2, '2023-11-01', 1),
(7, '7 viên ngọc rồng', 99, 600000, 30000, 'ngocrong.jpg', 'Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'tung', 7, 1, '2023-10-30', 0),
(9, 'Sống mòn', 98, 600000, 12000, '2.1.jpg', ' hay', 'Nam Cao', 8, 1, '2023-11-09', 0),
(10, 'Lão Hạc', 99, 600000, 220000, '3.png', ' hay', 'Nam Cao', 8, 1, '2023-11-06', 0),
(11, 'Chiến tranh tiền tệ', 98, 600000, 2000, '1.1.jpg', ' Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'tung', 1, 1, '0000-00-00', 0),
(13, 'Kế toán vỉa hè', 0, 90000, 0, '5.jpg', ' Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'tung', 1, 1, '0000-00-00', 0),
(14, 'Nhà đầu tư thông minh', 0, 600000, 30000, 'dautu.jpg', ' Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'trung', 1, 1, '0000-00-00', 0),
(15, 'Chiều chiều', 0, 300000, 0, 'chieu.jpg', ' ', 'Nam cao', 8, 1, '0000-00-00', 0),
(16, 'Tắt đèn', 0, 200000, 0, '4.1.jpg', ' Các bạn nhỏ Việt Nam hẳn đã rất quen thuộc với những câu chuyện về chú mèo máy Doraemon thông minh, cùng nhóm bạn Nobita hậu đậu, Shizuka dễ thương, Jaian hay bắt nạt bạn bè và Suneo mỏ nhọn hay mách lẻo. Và đặc biệt, chiếc túi thần kì đầy bảo bối của Doraemon giúp chúng ta được thỏa sức tưởng tượng và mơ ước. Trọn bộ: 45 tập!', 'Ngô Tất Tố', 8, 1, '0000-00-00', 0),
(17, 'Chi phèo', 0, 600000, 0, '5.1.jpg', ' ', 'Nam Cao', 8, 1, '0000-00-00', 0),
(20, 'Giông tố', 97, 80000, 60000, '6.1.png', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Tô Hoài', 8, 1, '2023-11-15', 0),
(21, 'Cây khế', 90, 100000, 80000, 'caykhe.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Thanh Tùng', 7, 1, '2023-11-22', 0),
(22, 'Co Lan', 98, 100000, 30000, 'conan.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Thành Trung', 7, 1, '2023-11-08', 0),
(23, 'Tấm cám', 98, 100000, 60000, 'tamcam.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Thanh Tùng', 7, 1, '2023-11-08', 0),
(24, 'Kinh tế vĩ mô', 97, 210000, 130000, 'kt.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Hoàng Dương', 1, 1, '2023-11-02', 0),
(25, 'Sức mạnh kiến thức', 98, 220000, 199999, 'sm.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Quang Toản', 1, 1, '2023-10-31', 0),
(26, 'Kinh tế học', 97, 100000, 30000, 'kh3.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Quang Toản', 1, 1, '2023-11-14', 0),
(27, 'Thế giới phẳng', 97, 10000, 8000, 'thegioi.jpg', ' Cuốn sách “Chưa kịp lớn đã phải trưởng thành”  như một cuốn nhật ký nhỏ cho những người trẻ đang lạc lõng và cô đơn trong quá trình trưởng thành của mình, đang lênh đênh giữa những cảm xúc khó khăn. Cuốn sách không quá dài, cũng không quá ngắn, phong cách viết nhẹ nhàng, mộc mạc, chân thành mà giản dị, bài viết dưới góc nhìn đa chiều về các vấn đề chung của tuổi trẻ như: ước mơ, tự do, lỗi lầm và cả những điều khó khăn trên hành trình trưởng thành.', 'Hoàng Dương', 1, 1, '2023-11-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `ho_ten` text NOT NULL,
  `email` text NOT NULL,
  `so_dienthoai` int(11) NOT NULL,
  `pass` text NOT NULL,
  `diachi` text NOT NULL,
  `anh` text DEFAULT NULL,
  `vaitro` int(11) NOT NULL,
  `taikhoan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `ho_ten`, `email`, `so_dienthoai`, `pass`, `diachi`, `anh`, `vaitro`, `taikhoan`) VALUES
(1, 'tung', 'admin@gmail.com', 0, '123', '', NULL, 0, ''),
(2, 'tung', 'admin@gmail.com', 0, '123', '', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `trangthaisach`
--

CREATE TABLE `trangthaisach` (
  `id_trangthai` int(11) NOT NULL,
  `ten_trangthai` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthaisach`
--

INSERT INTO `trangthaisach` (`id_trangthai`, `ten_trangthai`, `mota`) VALUES
(1, 'Đã xuất bản', ''),
(2, 'Chưa xuất bản', '');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phantram_giam` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `ngayhet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD PRIMARY KEY (`id_dhct`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id_phanquyen`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id_sach`),
  ADD KEY `sach_danhmuc` (`id_danhmuc`),
  ADD KEY `sach_trangthai` (`id_trangthai`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Indexes for table `trangthaisach`
--
ALTER TABLE `trangthaisach`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  MODIFY `id_dhct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id_phanquyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `id_sach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trangthaisach`
--
ALTER TABLE `trangthaisach`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`),
  ADD CONSTRAINT `sach_trangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthaisach` (`id_trangthai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
