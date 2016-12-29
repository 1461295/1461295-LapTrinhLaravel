-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 07:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banbanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoai` varchar(5) NOT NULL,
  `TenLoai` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `TenLoai`) VALUES
('L0001', 'Cake Delights'),
('L0002', 'Bánh Sinh Nhật'),
('L0003', 'Bánh ngọt');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaLoai` varchar(5) DEFAULT NULL,
  `MaSP` varchar(6) NOT NULL,
  `TenSP` text,
  `GiaBan` float DEFAULT NULL,
  `BaoQuan` text,
  `TinhTrang` tinytext,
  `HinhAnh` text,
  `LuotXem` int(11) DEFAULT NULL,
  `MoTa` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaLoai`, `MaSP`, `TenSP`, `GiaBan`, `BaoQuan`, `TinhTrang`, `HinhAnh`, `LuotXem`, `MoTa`) VALUES
('L0001', 'SP0001', 'Cake Delights Mocha', 200000, 'Để tủ lạnh ngăn mát', 'Còn hàng', '\\images\\cakes', 2, 'Đây là món độc quyền của Cake Delights, với hương vị thơm ngon của trà xanh mang hương vị đặc trưng của Cake Delights'),
('L0003', 'SP0002', 'Bánh Kem Dau', 150000, 'Để tủ lạnh ngăn mát', 'Còn hàng', '\\images\\tarts', 2, 'Dành cho những bạn thích vị chua chua ngọt ngọt của dâu cùng lớp kem tươi thơm ngon.'),
('L0003', 'SP0003', 'Bánh Cookies Trái cây', 50000, 'Để nơi khô ráo tránh ánh nắng trực tiếp', 'Còn hàng', '\\images\\dessert', 0, 'Một hộp gồm 10 cái với các loại trái cây khác nhau, thích hợp làm món tráng miệng trong các bữa tiệc.'),
('L0002', 'SP0006', 'Bánh Sinh Nhật', 150000, 'Để ngăn mát tủ lạnh', 'Còn hàng', '\\images\\sinhnhat', 0, 'Bánh sinh nhật với hương vị kem thơm ngon và lớp bánh mềm thơm tuyệt vời.'),
('L0003', 'SP0004', 'Bánh Mì Kem Dừa', 15000, 'Dùng ngay sau khi mua, hoặc để tủ lạnh ngăn đông', 'Còn hàng', '\\images\\pastries', 0, 'Với cách thức chế biến sáng tạo, đã làm nên món bánh vừa giòn vừa mát lạnh.'),
('L0003', 'SP0005', 'Chocolate Strawberry', 15000, 'Để nơi khô ráo, thoáng mát tránh ánh nắng trực tiếp', 'Còn hàng', '\\images\\special-treats', 0, 'Với lớp kem hương dâu hòa quyện với vị Chocolate của lớp bánh sẽ tạo nên hương vị đặc biệt và mới lạ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoai` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
