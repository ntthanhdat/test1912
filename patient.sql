-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2020 lúc 05:56 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `FirstName` char(50) NOT NULL,
  `LastName` char(50) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `PhoneNumber` char(10) DEFAULT NULL,
  `Email` char(30) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `BloodGroup` char(3) DEFAULT NULL,
  `CreateOn` date DEFAULT NULL,
  `ModifiedOn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`PatientID`, `FirstName`, `LastName`, `DateOfBirth`, `Gender`, `PhoneNumber`, `Email`, `Height`, `Weight`, `BloodGroup`, `CreateOn`, `ModifiedOn`) VALUES
(2, 'dat', 'tran', '2000-12-12', 'nam', '0333456789', 'dat3@mail.com', 169, 52, 'O', '2020-12-19', '2020-12-30'),
(3, 'bob', 'ross', '2000-01-12', 'Nam', '0123433789', 'dat4@mail.com', 179, 52, 'O', '2020-12-19', '2020-12-21'),
(4, 'trang', 'nguyen', '1990-12-12', 'Nữ', '0333456789', 'dat2@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(5, 'dong', 'le', '2000-04-04', 'Nữ', '0123458899', 'dat@mail.cnet', 180, 52, 'B', '2020-12-19', '2020-12-19'),
(6, 'chau', 'nguyen', '2000-05-06', 'Nam', '0223336789', 'dat@mail.com.vn', 169, 51, 'B', '2020-12-19', '2020-12-19'),
(7, 'hong', 'tran', '2000-05-03', 'Nữ', '0223456789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(8, 'travitt', 'scot', '1999-12-03', 'Nam', '0133456789', 'dat@mail.com', 169, 52, 'A', '2020-12-19', '2020-12-21'),
(9, 'ba', 'ly', '2001-12-03', 'Nam', '0123556789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(10, 'bin', 'nguyen', '2000-12-01', 'Nữ', '0123446789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(14, 'bob', 'ross', '2000-01-12', 'Nam', '0123433789', 'dat@mail.com', 179, 52, 'O', '2020-12-19', '2020-12-21'),
(15, 'trang', 'nguyen', '1990-12-12', 'Nữ', '0333456789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(16, 'dong', 'le', '2000-04-04', 'Nữ', '0123458899', 'dat@mail.com', 180, 52, 'B', '2020-12-19', '2020-12-19'),
(17, 'chau', 'nguyen', '2000-05-06', 'Nam', '0223336789', 'dat@mail.com', 169, 51, 'B', '2020-12-19', '2020-12-19'),
(18, 'hong', 'tran', '2000-05-03', 'Nữ', '0223456789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(19, 'travitt', 'scot', '0000-00-00', 'Nam', '0133456789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(20, 'ba', 'ly', '2001-12-03', 'Nam', '0123556789', 'dat@mail.com', 169, 52, 'B', '2020-12-19', '2020-12-19'),
(21, 'bin', 'nguyen', '2000-12-01', 'Nam', '0123446789', 'dat@mail.com', 169, 52, 'A', '2020-12-19', '2020-12-19'),
(23, 'Nguyễn Thế', 'Đạt', '0000-00-00', 'Nam', '0774266332', 'thank@gmail.com', 1565, 445, 'A', '2020-12-21', '2020-12-21'),
(24, 'Nguyễn Thế', 'Đạt', '2020-12-11', 'Nam', '0774266332', 'thanhdatnguyenthe2k@gmail.com', 12, 12, 'A', '2020-12-30', '2020-12-30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
