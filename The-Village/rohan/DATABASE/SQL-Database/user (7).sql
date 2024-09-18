-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:06 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `email`) VALUES
(1, 'rohan', 'ronnie', 'bedage', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `villagers`
--

CREATE TABLE `villagers` (
  `id` int(11) NOT NULL,
  `VillagersFirstName` varchar(200) DEFAULT NULL,
  `VillagersLastName` varchar(255) DEFAULT NULL,
  `VillagersAge` varchar(255) NOT NULL,
  `VillagersGender` varchar(2555) NOT NULL,
  `VillagePopulationCategory` varchar(2555) NOT NULL,
  `VillagersLiteracy` varchar(255) DEFAULT NULL,
  `VillagersProfession` varchar(255) NOT NULL,
  `AdmitDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `hospitalStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villagers`
--

INSERT INTO `villagers` (`id`, `VillagersFirstName`, `VillagersLastName`, `VillagersAge`, `VillagersGender`, `VillagePopulationCategory`, `VillagersLiteracy`, `VillagersProfession`, `AdmitDate`, `UpdationDate`, `hospitalStatus`) VALUES
(83, 'rohan', 'Bedage', '9', 'female', 'Children', 'Literate', 'Engineer', '2021-07-09 17:07:34', NULL, 'Active'),
(84, 'ronnie', 'here', '25', 'male', 'Adults', 'Literate', 'Lawyer', '2021-07-09 17:49:31', NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villagers`
--
ALTER TABLE `villagers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `villagers`
--
ALTER TABLE `villagers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
