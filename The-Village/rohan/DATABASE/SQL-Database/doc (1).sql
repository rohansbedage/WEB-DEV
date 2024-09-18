-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:02 AM
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
-- Database: `doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `mbno` int(11) NOT NULL,
  `adhar` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `mbno`, `adhar`, `cast`, `income`) VALUES
(10, 413232, 'P1.194086.pdf', 'P2.194086.pdf', 'P3.194086.pdf'),
(11, 1, 'P14.194086.pdf', 'P3.194086.pdf', 'P11.194086.pdf'),
(12, 67, 'p1.pdf', 'p2.pdf', 'p3.pdf'),
(13, 0, 'unit 3.pdf', 'unit 4.pdf', 'unit 5.pdf'),
(14, 4535345, 'unit 3.pdf', 'unit 4.pdf', 'unit 6.pdf'),
(15, 2147483647, 'Taxx.pdf', 'Tax.pdf', 'Users (4).pdf'),
(16, 2147483647, 'Users (7).pdf', 'Chap_5.AWK (1).pdf', 'Users (5).pdf'),
(17, 2147483647, 'Users (7).pdf', 'Chap_5.AWK (1).pdf', 'Users (5).pdf'),
(18, 2147483647, 'Users (7).pdf', 'Chap_5.AWK (1).pdf', 'Users (5).pdf'),
(19, 9874581, 'Users (4).pdf', 'Chap_5.AWK (1).pdf', 'Chap_5.AWK (1).pdf'),
(20, 14, 'Chap_5.AWK (1).pdf', 'Chap_5.AWK (1).pdf', 'Chap_5.AWK (1).pdf'),
(21, 14, 'Chap_5.AWK (1).pdf', 'Chap_5.AWK (1).pdf', 'Chap_5.AWK (1).pdf'),
(22, 2147483647, 'Users (7).pdf', 'Users (6).pdf', 'Users (5).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
