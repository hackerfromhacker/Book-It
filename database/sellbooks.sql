-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2023 at 01:14 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sellbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_books`
--

CREATE TABLE IF NOT EXISTS `booking_books` (
  `prbk_id` int(11) NOT NULL AUTO_INCREMENT,
  `ULog_Id` varchar(200) NOT NULL,
  `SLog_Id` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `sdprmnt` varchar(200) NOT NULL,
  `ssemester` varchar(200) NOT NULL,
  `scntno` varchar(200) NOT NULL,
  `saddrs` text NOT NULL,
  `semail` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cphone` varchar(200) NOT NULL,
  `caddrs` text NOT NULL,
  `csex` varchar(200) NOT NULL,
  `cdprmnt` varchar(200) NOT NULL,
  `csemester` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `photo_1` text NOT NULL,
  `sstatus` varchar(200) NOT NULL,
  `dstats` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `porder` varchar(200) NOT NULL,
  `pblsh` varchar(200) NOT NULL,
  `pyr` varchar(200) NOT NULL,
  `product_sub` varchar(200) NOT NULL,
  PRIMARY KEY (`prbk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `booking_books`
--

INSERT INTO `booking_books` (`prbk_id`, `ULog_Id`, `SLog_Id`, `sname`, `sdprmnt`, `ssemester`, `scntno`, `saddrs`, `semail`, `cname`, `cphone`, `caddrs`, `csex`, `cdprmnt`, `csemester`, `product_name`, `qty`, `price`, `photo_1`, `sstatus`, `dstats`, `date`, `porder`, `pblsh`, `pyr`, `product_sub`) VALUES
(42, 'RNTX744859905', 'RNTX744859905', 'SHAMEER', 'BCA', 'FIRST', '9847169022', 'SSS', 'ras@gmail.com', 'SHAMEER', '9847169022', 'PALAKKAD', 'Male', 'BCA', 'FIRST', 'NICE', 200, 2000, 'IMG465787348.jpg', 'Pending', 'Pending', '2023-02-21', 'Product', 'DC', '2023-02-17', 'NICE'),
(43, 'RNTX744859905', 'RNTX744859905', 'SHAMEER', 'BCA', 'FIRST', '9847169022', 'SSS', 'ras@gmail.com', 'SHAMEER', '9847169022', 'PALAKKAD', 'Male', 'BCA', 'FIRST', 'NICE', 200, 2000, 'IMG465787348.jpg', 'Cancel', 'Cancel', '2023-02-21', 'Product', 'DC', '2023-02-17', 'NICE'),
(44, 'RNTX744859905', 'RNTX74485995', 'SHAMEER', 'BCA', 'FIRST', '9847169022', 'SSS', 'ras@gmail.com', 'SHAMEER', '9847169022', 'PALAKKAD', 'Male', 'BCA', 'FIRST', 'NICE', 200, 2000, 'IMG465787348.jpg', 'Pending', 'Pending', '2023-02-21', 'Product', 'DC', '2023-02-17', 'NICE'),
(45, 'RNTX744859905', 'RNTX74485995', 'SHAMEER', 'BCA', 'FIRST', '9847169022', 'SSS', 'ras@gmail.com', 'SHAMEER', '9847169022', 'PALAKKAD', 'Male', 'BCA', 'FIRST', 'NICE', 200, 2000, 'IMG465787348.jpg', 'Accept', 'Pending', '2023-02-21', 'Product', 'DC', '2023-02-17', 'NICE');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_sub` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `qty` decimal(13,2) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `discount` decimal(13,2) DEFAULT NULL,
  `description` text,
  `photo_1` text NOT NULL,
  `photo_2` text NOT NULL,
  `pblsh` text NOT NULL,
  `pyr` text NOT NULL,
  `sname` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `addrs` text NOT NULL,
  `dprmnt` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `product_name`, `product_sub`, `category`, `qty`, `price`, `discount`, `description`, `photo_1`, `photo_2`, `pblsh`, `pyr`, `sname`, `cntno`, `email`, `addrs`, `dprmnt`, `semester`, `date`) VALUES
(15, 'RNTX744859905', 'NICE', 'NICE', 'Books', '200.00', '2000.00', '10.00', 'SSS', 'IMG1130559425.jpg', 'IMG1197318880.jpg', 'DC', '2023-02-17', 'SHAMEER', '9847169022', 'ras@gmail.com', 'good', 'BCA', 'FIRST', '2023-02-20'),
(16, 'RNTX744859905', 'NICE', 'NICE', 'Books', '200.00', '2000.00', '10.00', 'SSS', 'IMG465787348.jpg', 'IMG952468875.jpg', 'DC', '2023-02-17', 'SHAMEER', '9847169022', 'ras@gmail.com', 'SSS', 'BCA', 'FIRST', '2023-02-20'),
(17, 'RNTX74485995', 'NICE', 'NICE', 'Books', '200.00', '2000.00', '10.00', 'SSS', 'IMG465787348.jpg', 'IMG952468875.jpg', 'DC', '2023-02-17', 'SHAMEER', '9847169022', 'ras@gmail.com', 'SSS', 'BCA', 'FIRST', '2023-02-20'),
(18, 'RNTX74485995', 'NICE', 'NICE', 'Books', '200.00', '2000.00', '10.00', 'SSS', 'IMG465787348.jpg', 'IMG952468875.jpg', 'DC', '2023-02-17', 'SHAMEER', '9847169022', 'ras@gmail.com', 'SSS', 'BCA', 'FIRST', '2023-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` bigint(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` text,
  `subject` text,
  `dated` date DEFAULT NULL,
  `reply` text,
  `reply_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `user_id`, `name`, `phone`, `email`, `subject`, `dated`, `reply`, `reply_date`) VALUES
(1, 'RNTX8542779485', 'John Doe', '789465132', 'seller@email.com', 'fdsfdsfdsf', '2022-03-11', 'reply', '2022-03-11'),
(2, 'RNTX8542779485', 'SHAMEER', '9847169014', 'sham@gmail.com', 'ssssss', '2022-04-07', 'pending', '2022-04-07'),
(3, 'RNTX8542779485', 'RASEENA', '9847169014', '2022-04-08', 'hi', '2022-04-08', NULL, NULL),
(4, 'RNTX8889793291', 'SHAMEER', '9847169014', 'sham@gmail.com', 'dfhdfh', '2022-04-08', 'erutru', '2022-04-08'),
(5, 'RNTX8889793199', 'RAJ', '984716914', 'raj@gmail.com', 'sdgsdgd', '2022-04-08', 'rtrte', '2022-04-08'),
(6, 'RNTX198867130', 'RASEENA', '9847169255', 'ras@gmail.com', 'hi how', '2023-02-01', 'dfh', '2023-02-21'),
(7, 'RNTX1023305244', 'SHAMEER', '9847169014', 'sham@gmail.com', 'ss', '2023-02-02', 'pending', NULL),
(8, 'RNTX55508745', 'RAJ', '9847169144', 'raj@gmail.com', 'hi', '2023-02-02', 'rr', '2023-02-02'),
(9, 'RNTX744859905', 'SHAMEER', '9847169022', 'ras@gmail.com', 'asfsf', '2023-02-21', 'rey', '2023-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(21) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `semail` text,
  `password` text,
  `status` tinyint(1) DEFAULT '1',
  `photo` text,
  `addrs` text NOT NULL,
  `age` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `dprtmnt` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_type`, `fname`, `lname`, `phone`, `semail`, `password`, `status`, `photo`, `addrs`, `age`, `sex`, `dprtmnt`, `semester`) VALUES
(1, 'RNTX8889793297896', 'Admin', 'Vivek', 'admin', '789465321', 'admin@gmail.com', 'admin', 1, 'IMG396440621.jpg', '', '', '', '', ''),
(11, 'RNTX744859905', 'Customer', 'SHAMEER', 'SHAM', '9847169022', 'ras@gmail.com', '1234', 1, 'IMG37829054.jpg', 'PALAKKAD', '25', 'Male', 'BCA', 'FIRST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
