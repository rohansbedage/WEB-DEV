-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:00 AM
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
-- Database: `breaking_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakingnews`
--

CREATE TABLE `breakingnews` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `des` varchar(255) NOT NULL,
  `Post_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breakingnews`
--

INSERT INTO `breakingnews` (`Id`, `Name`, `des`, `Post_Date`) VALUES
(4, 'mfdsjiodf', 'fdgidfuhgiudsfg', '2021-07-22'),
(5, 'dgdfksgfiuhg i', 'fdgdfogdfiusygi', '2021-07-22'),
(6, 'dngkhdgdfsuig', 'dfgdfgidufyg89d', '2021-07-22'),
(10, 'saurabh', 'jfldkj kj n', '2021-07-22'),
(11, 'saurabh', 'jfldkj kj n', '2021-07-22'),
(12, 'saurabh', 'jfldkj kj n', '2021-07-22'),
(13, 'saurabh', 'jfldkj kj n', '2021-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakingnews`
--
ALTER TABLE `breakingnews`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakingnews`
--
ALTER TABLE `breakingnews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
