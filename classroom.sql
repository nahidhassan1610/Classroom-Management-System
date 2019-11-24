-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 05:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine`
--

CREATE TABLE `tbl_routine` (
  `id` int(3) NOT NULL COMMENT 'primary_key',
  `day` tinyint(3) DEFAULT NULL,
  `room` tinyint(3) DEFAULT NULL,
  `time` tinyint(3) DEFAULT NULL,
  `teacher_name` varchar(60) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=blank, 1=booked',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_routine`
--

INSERT INTO `tbl_routine` (`id`, `day`, `room`, `time`, `teacher_name`, `status`, `created_at`) VALUES
(1, 1, 1, 1, 'Ralit Soft', 1, '2017-12-12 16:52:11'),
(2, 2, 6, 1, 'gfg', 1, '2017-12-12 16:52:11'),
(3, 1, 5, 1, 'dfsdf', 1, '2017-12-15 12:14:42'),
(4, 2, 2, 3, 'trytr', 1, '2017-12-15 13:06:06'),
(5, 2, 2, 4, NULL, 0, '2017-12-15 13:06:16'),
(6, 3, 7, 2, NULL, 0, '2017-12-15 13:06:24'),
(7, 4, 8, 5, 'fdgdfg', 1, '2017-12-15 13:06:34'),
(8, 5, 5, 2, NULL, 0, '2017-12-15 13:06:43'),
(9, 5, 8, 6, NULL, 0, '2017-12-15 13:06:57'),
(10, 6, 4, 2, NULL, 0, '2017-12-15 13:07:05'),
(11, 6, 5, 4, 'gfdgdf', 1, '2017-12-15 13:07:14'),
(12, 6, 11, 6, '', 1, '2017-12-15 13:07:24'),
(13, 4, 3, 6, NULL, 0, '2017-12-15 14:04:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'primary_key', AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
