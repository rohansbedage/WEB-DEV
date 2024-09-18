-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `pop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `year`, `profit`, `pop`) VALUES
(1, 1997, 35, 2980),
(2, 1998, 37, 3006),
(3, 1999, 39, 3300),
(4, 2000, 42, 3450),
(5, 2001, 44, 3580),
(6, 2002, 47, 3876),
(7, 2003, 43, 4500),
(8, 2004, 42, 4800),
(9, 2005, 47, 5176),
(10, 2006, 48, 4765),
(11, 2007, 50, 5600),
(12, 2008, 52, 5990),
(13, 2009, 54, 6102),
(14, 2010, 53, 6299),
(15, 2011, 57, 6526),
(16, 2012, 60, 6952),
(17, 2013, 61, 7200),
(18, 2014, 62, 7650),
(19, 2015, 65, 8012),
(20, 2016, 67, 8500),
(21, 2017, 70, 8967),
(22, 2018, 72, 9103),
(23, 2019, 74, 9600),
(24, 2020, 76, 10000),
(25, 2021, 80, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `lit`
--

CREATE TABLE `lit` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `pop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lit`
--

INSERT INTO `lit` (`id`, `year`, `profit`, `pop`) VALUES
(1, 1997, 35, 2980),
(2, 1998, 37, 3006),
(3, 1999, 39, 3300),
(4, 2000, 42, 3450),
(5, 2001, 44, 3580),
(6, 2002, 47, 3876),
(7, 2003, 43, 4500),
(8, 2004, 42, 4800),
(9, 2005, 47, 5176),
(10, 2006, 48, 4765),
(11, 2007, 50, 5600),
(12, 2008, 52, 5990),
(13, 2009, 54, 6102),
(14, 2010, 53, 6299),
(15, 2011, 57, 6526),
(16, 2012, 60, 6952),
(17, 2013, 61, 7200),
(18, 2014, 62, 7650),
(19, 2015, 65, 8012),
(20, 2016, 67, 8632),
(21, 2017, 70, 8703),
(22, 2018, 72, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lit`
--
ALTER TABLE `lit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lit`
--
ALTER TABLE `lit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
