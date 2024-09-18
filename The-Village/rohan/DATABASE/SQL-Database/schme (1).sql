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
-- Database: `schme`
--

-- --------------------------------------------------------

--
-- Table structure for table `schmecat`
--

CREATE TABLE `schmecat` (
  `id` int(11) NOT NULL,
  `schmename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schmecat`
--

INSERT INTO `schmecat` (`id`, `schmename`) VALUES
(7, 'saurabh'),
(8, 'nale'),
(9, 'Rohan'),
(16, 'women'),
(17, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `schmedetail`
--

CREATE TABLE `schmedetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schmedetail`
--

INSERT INTO `schmedetail` (`id`, `name`, `des`, `pdf`, `date`, `cat`) VALUES
(18, 'Manjhi Kanya Bhagyashree Scheme', 'From 1st August 2017, WCD Dept. Govt. of Maharashtra has started implementation of First-of-its-Kind scheme “Majhi Kanya Bhagyashree”. Under this scheme, Govt. shall provide Financial Assistance as follows: One Girl Child: Rs.50,000 for a period of 18 yea', 'practice practical 3.pdf', '13/07/21', 'saurabh'),
(19, ' Integrated Child Development Service (ICDS)', 'ICDS is one of the flagship initiatives of Govt. of India that is being implemented in the state by WCD Dept. ICDS seeks to provide young children with an integrated package of services such as supplementary nutrition, health care and pre-school education', 'practice practical 7.pdf', '13/07/21', 'child'),
(20, 'Beti Bachao Beti Padhao Scheme', 'With a core objective of increasing the Child Sex ratio in the State, the WCD Department has started implementation of Beti Bachao and Beti Padhao Scheme of the Central Govt. in 10 Districts i.e. Beed, Jalgaon, Ahmednagar, Buldhana, Aurangabad, Washim, Ko', 'practice practical 12.pdf', '13/07/21', 'child'),
(21, 'Child Care Institutions (CCIs)', 'The WCD Dept. realizes that Child Protection is about protecting children from or against any perceived or real danger or risk to their life, their personhood and childhood. It is about reducing their vulnerability to any kind of harm and ensuring that no', 'practice practical 12.pdf', '13/07/21', 'saurabh'),
(22, 'Child Advisory Centers', 'The state has established these centers for enhancing the creative potential of children by providing them various activities, opportunities and common platform to interact, experiment, create and perform according to their age, aptitude and ability.  The', 'practice practical 24.pdf', '13/07/21', 'child'),
(43, 'RAY5', 'rohananananana', 'Village Gallery.pdf', '', 'nale'),
(44, 'Manodhairya Scheme for Rape victims, Children who are victims of Sexual Offences and Acid Attack Victims (Women and Children)', 'It is of utmost importance to ensure the victims of Rape and Acid Attacks (Women and Children) are brought out from the psychological shock that they suffer. It is also equally important to provide them Shelter, Financial Assistance, Medical and Legal Aid', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'women');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schmecat`
--
ALTER TABLE `schmecat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schmedetail`
--
ALTER TABLE `schmedetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schmecat`
--
ALTER TABLE `schmecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schmedetail`
--
ALTER TABLE `schmedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
