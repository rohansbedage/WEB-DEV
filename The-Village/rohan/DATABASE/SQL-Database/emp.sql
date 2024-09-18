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
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(11) NOT NULL COMMENT 'primary key',
  `emp_name` varchar(255) NOT NULL COMMENT 'employee name',
  `emp_email` varchar(100) NOT NULL,
  `emp_salary` double NOT NULL COMMENT 'employee salary',
  `emp_age` int(11) NOT NULL COMMENT 'employee age'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_email`, `emp_salary`, `emp_age`) VALUES
(1, 'Smith', 'smith@phpzag.com', 10000, 32),
(2, 'Jhon', 'jhone@phpzag.com', 2000, 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp(),
  `watertax` varchar(255) NOT NULL,
  `Propertytax` varchar(255) NOT NULL,
  `Penalty` varchar(255) NOT NULL,
  `Paymentstatus` varchar(255) NOT NULL,
  `home` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `lastname`, `Age`, `email`, `alt_email`, `password`, `mobile`, `gender`, `user_image`, `address`, `status`, `posting_date`, `watertax`, `Propertytax`, `Penalty`, `Paymentstatus`, `home`, `otp`) VALUES
(3, 'AWW', 'Anuj t', 'Anuj ', '20', 'anuj.lpu1@gmail.com', '', '123456', '8285703354', 'female', NULL, 'Sec-5 Sahibabad Ghaziabad 55e', 0, '2015-01-01 18:30:00', '100', '1000', '100', 'paid', 0, ''),
(12, 'Rohan', 'Rohan', 'Bedage', '20', 'abc@gmail.com', '', 'ro1230', '8329234445', 'male', '2df9936a904b4474e438b4860c8eaeb7.jpg', 'Viman Nager , Nagar road ,Pune', NULL, '2019-08-10 11:24:31', '100', '100', '0', '0', 0, ''),
(54, 'sau', 'RAY', 'Bedage', '122', 'sauq@gmail.com', NULL, 'sau1234', '9856667592', 'female', NULL, '09856667592', NULL, '2021-07-19 08:00:38', '10', '10', '0', '0', 10, ''),
(58, 'ro', 'RAY', 'Bedage', '', 'ro@gmail.com', NULL, 'ro1230', '9856667592', 'male', NULL, 'Viman Nager , Nagar road ,Pune', NULL, '2021-07-23 09:25:34', '0', '0', '0', '0', 80, ''),
(59, 'rohan', 'RAY', 'Bedage', '12', 'rohanbedage2001@gmail.com', NULL, 'ro1234', '9856667592', 'female', NULL, 'Viman Nager , Nagar road ,Pune', NULL, '2021-07-23 09:28:45', '0', '0', '0', '0', 80, ''),
(62, 'neel', 'neel', 'patil', '', 'silentknight1921@gmail.com', NULL, 'ro1230', '9856667592', 'male', NULL, 'Viman Nager , Nagar road ,Pune', NULL, '2021-07-23 10:32:23', '0', '0', '0', 'paid', 90, ''),
(61, 'sau', 'saurabh', 'Bedage', '', 'sau@gmail.com', NULL, 'ro1230', '8329234445', 'female', NULL, 'Jaylakshmi Niwas ,', NULL, '2021-07-23 10:30:45', '0', '0', '0', 'paid', 90, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
