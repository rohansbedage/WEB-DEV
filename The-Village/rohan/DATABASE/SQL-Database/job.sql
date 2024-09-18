-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:03 AM
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
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

CREATE TABLE `appliedjobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `edu` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobcat`
--

CREATE TABLE `jobcat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobcat`
--

INSERT INTO `jobcat` (`id`, `name`, `des`) VALUES
(5, 'carpenter ', 'sdsdvsd ds f'),
(6, 'saurabh', 'sdsdvsd ds f');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`id`, `name`, `des`, `img`, `cat`, `status`) VALUES
(12, 'carpenter ', 'need car penter for the sevice', 'Screenshot (53).png', 'saurabh', 0),
(14, 'saurabh', 'sdsdvsd ds f', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif', 'rohan', 0),
(16, 'rohan', 'hello in this job we are working on car', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif', 'carpenter ', 0),
(17, 'rohannn', 'hello in this job we are working on car', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif', 'carpenter ', 0),
(18, 'RAY', 'qqawwwww', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'carpenter ', 0),
(19, 'RAY', 'qqawwwww', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'carpenter ', 0),
(20, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(21, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(22, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(23, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(24, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(25, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(26, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(27, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(28, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(29, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0),
(30, 'ABcss', 'we', '07b73934f0fd45c9e47cc6f48a2d6e66.png', 'saurabh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbusr`
--

CREATE TABLE `tbusr` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usernam` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usrrol` char(1) NOT NULL,
  `cntnum` varchar(10) NOT NULL,
  `act` int(11) NOT NULL,
  `amount` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusr`
--

INSERT INTO `tbusr` (`id`, `name`, `usernam`, `password`, `usrrol`, `cntnum`, `act`, `amount`, `address`) VALUES
(1, 'Admin', 'admin', 'admin123', 'A', '2345698752', 1, 1232, ''),
(2, 'Anjaan', 'anjaan', '123456', 'S', '5689452365', 1, 1232, ''),
(4, 'saurabh', 'saurabh', 'Saurabh', 'S', '8967564589', 1, 2131, ''),
(5, 'nale', 'nale', 'Saurabh', 'S', '8967564589', 1, 0, ''),
(6, 'manish', 'manish', 'Manish', 'S', '1234567890', 1, 456, ''),
(7, 'rohan', 'rohan', 'Rohanb', 'S', '7878787878', 0, 7867, 'RAmpark Building Flat No 14'),
(8, 'sv', 'sv', 'Saurabh', 'S', '5656565656', 0, 5000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcat`
--
ALTER TABLE `jobcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusr`
--
ALTER TABLE `tbusr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `jobcat`
--
ALTER TABLE `jobcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbusr`
--
ALTER TABLE `tbusr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
