-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 07:58 AM
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
-- Database: `rohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'rohan123');

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

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`id`, `name`, `email`, `detail`, `address`, `edu`, `mobile`, `job`, `uname`, `status`, `temp`, `img`) VALUES
(92, 'RAY', 'abc@gmail.com', '', 'Viman Nager , Nagar road ,Pune', 'aw', 2147483647, 'Dairy Farm Supervisor', 'abc@gmail.com', 1, '0', '194093_Business Communication.pdf');

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
(17, 'Power Cutoff', 'Powercutoff due to heavy rainfall.', '2021-07-24'),
(18, 'Vaccination ', 'Vaccination campaign is open for the people above 18 years', '2021-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `mbno` int(50) NOT NULL,
  `adhar` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `mbno`, `adhar`, `cast`, `income`) VALUES
(35, 832923444, '1.permanent account number (pan).pdf', 'Ch 4  Shell(merged).pdf', 'P1.194086.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `frequent_asks`
--

CREATE TABLE `frequent_asks` (
  `id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequent_asks`
--

INSERT INTO `frequent_asks` (`id`, `question_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 4),
(12, 1),
(13, 6),
(14, 7),
(15, 7),
(16, 1),
(17, 7),
(18, 8),
(19, 7),
(20, 7),
(21, 7),
(22, 6),
(23, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 9),
(30, 1),
(31, 8),
(32, 2),
(33, 7),
(34, 14),
(35, 9),
(36, 9),
(37, 9),
(38, 1),
(39, 4),
(40, 6),
(41, 7),
(42, 9),
(43, 10),
(44, 9),
(45, 9),
(46, 10),
(47, 9),
(48, 9),
(49, 9),
(50, 9),
(51, 9),
(52, 9),
(53, 3),
(54, 3),
(55, 9),
(56, 9),
(57, 9),
(58, 9),
(59, 9),
(60, 9),
(61, 9),
(62, 9),
(63, 9),
(64, 9),
(65, 10),
(66, 9),
(67, 9),
(68, 9),
(69, 9),
(70, 9),
(71, 9),
(72, 9),
(73, 9),
(74, 10),
(75, 2),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 9),
(83, 9),
(84, 3),
(85, 9),
(86, 9),
(87, 9),
(88, 3),
(89, 9),
(90, 9),
(91, 9),
(92, 10),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 9),
(101, 9),
(102, 9),
(103, 9),
(104, 3),
(105, 3),
(106, 3),
(107, 3),
(108, 3),
(109, 3),
(110, 3),
(111, 3),
(112, 4),
(113, 4),
(114, 4),
(115, 4),
(116, 4),
(117, 4),
(118, 4),
(119, 4),
(120, 4),
(121, 4),
(122, 4),
(123, 4),
(124, 4),
(125, 4),
(126, 4),
(127, 4),
(128, 4),
(129, 4),
(130, 4),
(131, 4),
(132, 4),
(133, 4),
(134, 4),
(135, 4),
(136, 4),
(137, 3),
(138, 3),
(139, 3),
(140, 3),
(141, 3),
(142, 9),
(143, 10),
(144, 9),
(145, 10),
(146, 10),
(147, 9),
(148, 12),
(149, 3),
(150, 3),
(151, 3),
(152, 15),
(153, 10),
(154, 9),
(155, 10),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 10),
(172, 9),
(173, 10),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 9),
(184, 3),
(185, 3),
(186, 3),
(187, 3),
(188, 3),
(189, 3),
(190, 3),
(191, 3),
(192, 3),
(193, 3),
(194, 3),
(195, 3),
(196, 3),
(197, 3),
(198, 3),
(199, 3),
(200, 3),
(201, 9),
(202, 1),
(203, 1),
(204, 1),
(205, 3),
(206, 3),
(207, 3),
(208, 3),
(209, 3),
(210, 12),
(211, 12),
(212, 12),
(213, 12),
(214, 12),
(215, 12),
(216, 12),
(217, 12),
(218, 12),
(219, 12),
(220, 12),
(221, 12),
(222, 12),
(223, 12),
(224, 12),
(225, 12),
(226, 12),
(227, 12),
(228, 12),
(229, 12),
(230, 12),
(231, 12),
(232, 10),
(233, 10),
(234, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(244, 1),
(245, 1),
(246, 1),
(247, 9),
(248, 3),
(249, 4),
(250, 4),
(251, 4),
(252, 4),
(253, 4),
(254, 4),
(255, 4),
(256, 4),
(257, 4),
(258, 4),
(259, 4),
(260, 9),
(261, 4),
(262, 3),
(263, 3),
(264, 3),
(265, 3),
(266, 3),
(267, 3),
(268, 3),
(269, 9),
(270, 1),
(271, 31),
(272, 31),
(273, 34),
(274, 34),
(275, 36),
(276, 36),
(277, 36),
(278, 34),
(279, 36),
(280, 36),
(281, 34),
(282, 34),
(283, 34),
(284, 34),
(285, 34),
(286, 34),
(287, 34),
(288, 34),
(289, 34),
(290, 34),
(291, 27),
(292, 34),
(293, 34),
(294, 34),
(295, 34),
(296, 27),
(297, 27),
(298, 27),
(299, 27),
(300, 27),
(301, 27),
(302, 27),
(303, 27),
(304, 27),
(305, 27),
(306, 27),
(307, 27),
(308, 27),
(309, 27),
(310, 34),
(311, 34),
(312, 34),
(313, 34),
(314, 58);

-- --------------------------------------------------------

--
-- Table structure for table `home1`
--

CREATE TABLE `home1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home1`
--

INSERT INTO `home1` (`id`, `name`, `des`, `day`, `month`) VALUES
(9, 'Heavy Rain', 'Due to heavy rain many houses and roads were washed away', '', ''),
(10, 'Heavy Rain', 'Due to heavy rain many houses and roads were washed away', '', ''),
(11, 'Heavy Rain', 'Due to heavy rain many houses and roads were washed away', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `HospitalName` varchar(200) DEFAULT NULL,
  `AvailableNormalBeds` int(11) DEFAULT NULL,
  `TotalNormalBeds` varchar(255) NOT NULL,
  `AvailableVentilatorBeds` varchar(2555) NOT NULL,
  `TotalVentilatorBeds` varchar(2555) NOT NULL,
  `AdmitDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `hospitalStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `HospitalName`, `AvailableNormalBeds`, `TotalNormalBeds`, `AvailableVentilatorBeds`, `TotalVentilatorBeds`, `AdmitDate`, `UpdationDate`, `hospitalStatus`) VALUES
(90, 'Siddhi Vinayak , Hospital', 40, '121', '25', '25', '2021-07-07 20:22:04', NULL, 'Active'),
(91, 'PHCB Hospital', 60, '210', '23', '29', '2021-07-08 13:16:41', NULL, 'Active'),
(92, 'Sahyadri Hospital', 12, '70', '27', '60', '2021-07-08 16:02:27', NULL, 'Active'),
(93, 'Pothadar Clinic', 20, '110', '12', '60', '2021-07-10 15:07:37', NULL, 'Active'),
(95, 'SAURABH HOSPITAL', 12, '120', '78', '80', '2021-07-14 11:07:15', NULL, 'Active'),
(98, 'rohan', 12, '12112111', '778', '21', '2021-07-22 13:23:26', NULL, 'Active'),
(99, 'oop', 12, '12', '22', '22', '2021-07-22 14:18:59', NULL, 'Active'),
(100, 'rohan', 12, '12112111', '778', '214', '2021-07-22 14:56:45', NULL, 'Active'),
(101, 'user99', 21, '30', '5', '10', '2021-07-24 09:38:02', NULL, 'Active');

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
(11, 'Dairy', 'Dairy related Jobs'),
(12, 'Field', 'Field'),
(13, 'medical', 'medical');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`id`, `name`, `des`, `img`, `cat`, `status`) VALUES
(28, 'Dairy Farm Supervisor', 'Dairy Farm Supervisor\r\nThis position works with the owners, dairy manager and other members of the management team to manage dairy herd health, feeding and treating of animals,…', 'israel_model.jpg', 'Dairy', 1),
(29, 'Field Representative(MFI)', 'Job type- Field Marketing.\r\nJob Profile- As a Field Officer, you are responsible for conducting village surveys, customer\r\nsourcing & training, maintaining center discipline, on time collections and addressing customer\r\nqueries. Carry out documentation an', '1.jpg', 'Field', 0),
(30, 'RM-Retail Agri', 'Sourcing and Business Generation Business scoping of geographical market for farming and\r\nrural community Sourcing proposals from individual farmers / Co-operative societies / Rural\r\nMandis & Markets / Kissan Clubs / Farmer Producer Organizations etc.\r\n● ', '2.jpeg', 'Field', 0),
(31, 'Digital Agronomist,mahabaleshwar', 'Qualifications\r\nMaster’s degree in Agriculture Science/Agribusiness Management/Rural Management with minimum 5\r\nyears of relevant work experience around research & development work in seed systems, product\r\nmanagement, rural innovation models, technology ', '3.jpg', 'Field', 0),
(32, 'Medical Consultant required at CKS Hospital,mahabaleshwar', 'Details:\r\nJob Information\r\nIndustry\r\nNGO/Social Services\r\nWork Experience\r\n5+ years\r\nRemote Job', '1.jpg', 'medical', 0),
(34, 'Require Medical Writing Trainee', 'An entry level role within a structured program, supporting Medical Writing deliverables and focusing on\r\nspecific tasks under senior supervision, while gaining experience, knowledge, and skills in Medical\r\nWriting.\r\nKeeps abreast of current medical and/or technical writing/regulatory knowledge, including Good Clinical\r\nPractice (GCP), along with developments and advances in drug development/medical and/or technical\r\nwriting', '4.jpg', 'medical', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `cr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `message`, `status`, `cr_date`) VALUES
(67, 'Power Cutoff', 'Due to Heavy rainfall there is power cutt off', 1, '2021-07-24 09:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `AdmitDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PatientStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `PatientName`, `Age`, `gender`, `AdmitDate`, `UpdationDate`, `PatientStatus`) VALUES
(74, 'rohan', 122, 'female', '2021-07-24 09:08:11', '2021-07-24 09:08:11', 'Active'),
(77, 'rohan', 25, 'male', '2021-07-24 09:07:57', '2021-07-24 09:07:57', 'Recovered'),
(78, 'rohan', 20, 'female', '2021-07-13 09:04:22', '2021-07-13 09:04:22', 'Dead'),
(79, 'sau', 12, 'female', '2021-07-22 15:27:06', '2021-07-22 15:27:06', 'Active'),
(80, 'rohan', 20, 'male', '2021-07-22 15:32:03', '2021-07-22 15:32:03', 'Dead'),
(81, 'rohan', 25, 'male', '2021-07-24 08:22:52', '2021-07-24 08:22:52', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `name`, `des`, `date`, `img`) VALUES
(2, 'saurabh', 'ghavava', '21/07/21', 'Capture.PNG'),
(3, 'qqqq', 'ghavava', '21/07/21', 'Capture.PNG'),
(4, 'rohan', 'ghavava', '21/07/21', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif'),
(5, 'rohan', 'ghavava', '21/07/21', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif'),
(6, 'rohan', 'ghavava', '21/07/21', 'toy-introverts-someone-messes-up-their-order-at-restaurant-incorrect-but-thank-u.jfif'),
(7, 'saurabh', 'ghavava', '21/07/21', 'e4c8cb3ec889cce6c9d5411239bb40db.jpg'),
(12, 'RAY', 'wa', '22/07/21', ''),
(13, 'Rohan S. Bedage', 'tyu', '22/07/21', ''),
(14, 'ABcss', 'q', '22/07/21', '');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `PostImage1` varchar(255) DEFAULT NULL,
  `PostImage2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `PostImage1`, `PostImage2`) VALUES
(39, 'Krishnabai Temple', 43, NULL, 'Location: Krishana Devi Temple, Old Mahabaleshwar, Maharashtra 412806\r\nOpen : 24 Hours\r\nThe Krishnabai Temple in Mahabaleshwar is a temple built in 1888, dedicated to Lord\r\nShiva. Overlooking the picturesque Krishna Valley, it is believed that the location of this\r\ntemple is the origin of the Krishna River. There is a carved Gomukh (Face of a Cow),\r\nthrough which water from the temple diverges into River Krishna. While the temple\r\nhosts a Shiva lingam and an exquisite statue of Lord Krishna, it also boasts of\r\nstone-carved columns and ceilings that showcase the ancient Hemadpanti architectural\r\nstye.', '2021-07-24 07:36:33', NULL, 1, 'Krishnabai-Temple', 'f3ccdd27d2000e3f9255a7e3e2c48800.jpg', '156005c5baf40ff51a327f1c34f2975b.jpg', '799bad5a3b514f096e69bbc4a7896cd9.jpg'),
(40, 'Rular Hospital,Mahabaleshwar', 38, NULL, 'Working Hours:\r\nMonday Open 24 Hrs\r\nTuesday Open 24 Hrs\r\nWednesday Open 24 Hrs\r\nThursday Open 24 Hrs\r\nFriday Open 24 Hrs\r\nSaturday Open 24 Hrs\r\nSunday Open 24 Hrs\r\nPhone: 02168 260747\r\nAddress:Satara Road, Mahabaleshwar Ho, Mahabaleshwar - 412806\r\nDoctors:\r\nDr. Mukesh Budhwani - Best General Practitioner\r\nDr. Poorva Lunavat | ENT Specialis\r\nDr. Ravindra Pannalal Chhajed General Physician\r\n', '2021-07-24 07:39:38', NULL, 1, 'Rular-Hospital,Mahabaleshwar', '199c40ae73cd2f55800b41f2de65c6b9.jpg', 'a0ea193b0972b214ca8340dccaf7417a.jpg', '74c89f331522cb7455cfa3440706de9e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `placecat`
--

CREATE TABLE `placecat` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placecat`
--

INSERT INTO `placecat` (`id`, `CategoryName`, `Description`, `PostImage`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(38, 'Hospital', 'Hospital', NULL, '2021-07-24 07:27:27', NULL, 1),
(39, 'Medicals', 'Medicals', NULL, '2021-07-24 07:30:37', NULL, 1),
(40, 'School', 'School', NULL, '2021-07-24 07:30:55', NULL, 1),
(41, 'Colleges', 'Colleges', NULL, '2021-07-24 07:31:02', NULL, 1),
(42, 'Factories', 'Factories', NULL, '2021-07-24 07:31:11', NULL, 1),
(43, 'Temple', 'Temple', NULL, '2021-07-24 07:31:18', NULL, 1),
(44, 'Stores', 'Stores', NULL, '2021-07-24 07:31:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `placesubcat`
--

CREATE TABLE `placesubcat` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placesubcat`
--

INSERT INTO `placesubcat` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, 'Bollywood ', 'Bollywood masala', '2018-06-22 15:45:38', '0000-00-00 00:00:00', 1),
(4, 3, 'Cricket', 'Cricket\r\n\r\n', '2018-06-30 09:00:43', '0000-00-00 00:00:00', 1),
(5, 3, 'Football', 'Football', '2018-06-30 09:00:58', '0000-00-00 00:00:00', 1),
(6, 5, 'Television', 'TeleVision', '2018-06-30 18:59:22', '0000-00-00 00:00:00', 1),
(7, 6, 'National', 'National', '2018-06-30 19:04:29', '0000-00-00 00:00:00', 1),
(8, 6, 'International', 'International', '2018-06-30 19:04:43', '0000-00-00 00:00:00', 1),
(9, 7, 'India', 'India', '2018-06-30 19:08:42', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `mobile`, `des`, `time`, `date`) VALUES
(34, '8329234445', 'ICICI BANK', '01:51:12pm', '24/07/21'),
(35, '8797867867', 'NDL', '01:51:25pm', '24/07/21');

-- --------------------------------------------------------

--
-- Table structure for table `prequest`
--

CREATE TABLE `prequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `wdd` varchar(255) DEFAULT NULL,
  `cms` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `smo` varchar(255) DEFAULT NULL,
  `swd` varchar(255) DEFAULT NULL,
  `dwd` varchar(255) DEFAULT NULL,
  `fwd` varchar(255) DEFAULT NULL,
  `dr` varchar(255) DEFAULT NULL,
  `whs` varchar(255) DEFAULT NULL,
  `wm` varchar(255) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `wta` varchar(255) DEFAULT NULL,
  `opi` varchar(255) DEFAULT NULL,
  `ld` varchar(255) DEFAULT NULL,
  `da` varchar(255) DEFAULT NULL,
  `osc` varchar(255) DEFAULT NULL,
  `nd` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `query` longtext DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `remark` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prequest`
--

INSERT INTO `prequest` (`id`, `name`, `email`, `contactno`, `company`, `wdd`, `cms`, `seo`, `smo`, `swd`, `dwd`, `fwd`, `dr`, `whs`, `wm`, `ed`, `wta`, `opi`, `ld`, `da`, `osc`, `nd`, `others`, `query`, `posting_date`, `remark`, `status`) VALUES
(5, 'vsfsfs', 'anuj.lpu1@gmail.com', '12345678', 'SQ', 'Website Design & Development', 'CMS (Content Management System)', 'SEO (Search Engine Optimization)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing', '2015-04-28', 'Sample text for testing', 1),
(6, 'Anuj kumar', 'anuj@jiyuiyui.com', '8285703354', 'Fluper', 'Website Design & Development', '', '', 'SMO (Social Media Optimization)	', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sample text for testing. Sample text for testing. Sample text for testing. Sample text for testing', '2015-04-28', 'Sample text for testing', 2),
(7, 'Mridul ', 'iyuiyuiyui@gmail.com', '12345678', 'Fluper', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', '', '', '', '', '', '', 'testingvvvtestin testingvtestinggtestingtesting  testingtesting testingv v', '2015-04-28', 'csfsfsf', 2),
(8, 'Mridul ', 'mridul@gmail.com', '12345678', 'Fluper', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', '', '', '', '', '', '', 'testingvvvtestin testingvtestinggtestingtesting  testingtesting testingv v', '2015-04-28', 'dwwrwer', 2),
(9, 'kjkhjkjhkjh', 'jhkhjk@dfdf.com', '67679679', 'tyuytu', 'Website Design & Development', 'CMS (Content Management System)', 'SEO (Search Engine Optimization)', 'SMO (Social Media Optimization)	', '', 'Dynamic Website Design', '', '', '', '', '', '', '', '', '', '', '', '', 'uytuytu', '2019-07-11', 'cssdf', 0),
(10, 'Test', 'test@gmail.com', '1234567890', 'cfsdfsdf', 'Website Design & Development', '', '', '', '', '', '', 'Domain Registration', 'Web Hosting Services', 'Website Maintenance', 'Ecommerce Development', '', '', '', '', '', '', '', 'This is sample text for testing.', '2019-08-06', 'fdgdf', NULL),
(11, 'Anuj', 'dsfdfsd@gmil.com', '1234567890', 'fdsfsd', 'Website Design & Development', '', 'SEO (Search Engine Optimization)', '', 'Static Website Design', '', 'Flash Website Development', '', '', '', '', '', 'Online Payment Integration', '', '', '', '', '', 'I want these services', '2019-08-10', 'This is sample text for testing.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `question` text DEFAULT NULL,
  `response_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `response_id`) VALUES
(27, 'what are yous', 20),
(34, 'hie', 27),
(35, 'hie', 28),
(37, 'wqqqq', 30),
(38, 'ffffffffffff', 31),
(39, 'dddddddd', 32),
(40, 'dddddddd', 33),
(43, 'hwiwiw', 36),
(56, 'xxx', 49),
(57, 'xxx', 50),
(58, 'no one', 51);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(30) NOT NULL,
  `response_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `response_message`) VALUES
(40, 'as'),
(41, 'aso'),
(42, 'waaaaa'),
(43, 'QQQQQQ'),
(44, 'awwwwwww'),
(45, 'eeeeeeee'),
(46, 'waaaaa'),
(47, 'ee'),
(48, 'S'),
(49, 'aaaaaa'),
(50, 'Sa'),
(51, 'ok no one\r\n');

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
(16, 'women'),
(17, 'child');

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
(45, 'Manodhairya Scheme for Rape victims, Children who are victims of Sexual Offences and Acid Attack Victims (Women and Children)', 'It is of utmost importance to ensure the victims of Rape and Acid Attacks (Women and Children) are brought out from the psychological shock that they suffer. It is also equally important to provide them Shelter, Financial Assistance, Medical and Legal Aid', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'women'),
(46, 'Manjhi Kanya Bhagyashree Scheme', 'From 1st August 2017, WCD Dept. Govt. of Maharashtra has started implementation of First-of-its-Kind scheme “Majhi Kanya Bhagyashree”.\r\nUnder this scheme, Govt. shall provide Financial Assistance as follows:\r\nOne Girl Child: Rs.50,000 for a period of 18 y', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'child'),
(47, 'Integrated Child Development Service (ICDS)', 'ICDS is one of the flagship initiatives of Govt. of India that is being implemented in the state by WCD Dept.\r\nICDS seeks to provide young children with an integrated package of services such as supplementary nutrition, health care and pre-school educatio', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'child'),
(48, 'Beti Bachao Beti Padhao Scheme', 'With a core objective of increasing the Child Sex ratio in the State, the WCD Department has started implementation of Beti Bachao and Beti Padhao Scheme of the Central Govt. in 10 Districts i.e. Beed, Jalgaon, Ahmednagar, Buldhana, Aurangabad, Washim, Ko', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'child'),
(49, 'Counselling Centre for Women', 'Counselling support is provided to victims of atrocities (Women and Children) to help them get rid of the psychological stress', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'women'),
(50, 'Rajiv Gandhi National Creche Scheme for the Children of Working Mothers', 'Under this program, pre-school children are provided requisite toys and educational material\r\nConsidering these factors and following the guiding principles of the Government of India, the Government of Maharashtra has started 600 crèches in the districts', 'Majhi Kanya Bhagyashree Scheme.pdf', '', 'women');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Simple ChatBot Application'),
(4, 'intro', 'Hi, Welcome to the Village !'),
(6, 'short_name', 'ChatBot'),
(10, 'no_result', 'I am sorry. I can&apos;t '),
(11, 'logo', 'uploads/1620181980_bot2.jpg'),
(12, 'bot_avatar', 'uploads/bot_avatar.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `home_no` int(11) NOT NULL,
  `water tax` int(11) NOT NULL,
  `property tax` int(11) NOT NULL,
  `payment status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `home_no`, `water tax`, `property tax`, `payment status`) VALUES
(1, 100, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax_due`
--

CREATE TABLE `tax_due` (
  `id` int(11) NOT NULL,
  `duedate` varchar(255) NOT NULL,
  `fromdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_due`
--

INSERT INTO `tax_due` (`id`, `duedate`, `fromdate`) VALUES
(1, '25-6-2021', '25-3-2021');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) DEFAULT NULL,
  `email_id` varchar(300) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `task_type` varchar(300) DEFAULT NULL,
  `prioprity` varchar(300) DEFAULT NULL,
  `ticket` longtext DEFAULT NULL,
  `attachment` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `admin_remark` longtext DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT NULL,
  `admin_remark_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_id`, `email_id`, `subject`, `task_type`, `prioprity`, `ticket`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(36, '3', 'abc@gmail.com', 'Issue related to power supply.', NULL, NULL, 'Issue related to power supply.', NULL, 'closed', 'we will try to solve your issue as soon as possible .', '2021-07-20 18:30:00', '2021-07-22 13:58:45'),
(37, '4', 'abc@gmail.com', 'Issue related to services.', NULL, NULL, 'issue related to services.', NULL, 'Open', NULL, '2021-07-20 18:30:00', '2021-07-21 16:36:51'),
(38, '5', 'abc@gmail.com', 'Issue related to Tax.', NULL, NULL, 'Issue related to Tax.', NULL, 'Open', NULL, '2021-07-20 18:30:00', '2021-07-21 16:37:14'),
(39, '6', 'abc@gmail.com', 'Enquiry of docs.', NULL, NULL, 'Enquiry of docs.', NULL, 'Open', NULL, '2021-07-20 18:30:00', '2021-07-21 16:37:29'),
(40, '7', 'abc@gmail.com', 'Enquiry related to lost docs.', NULL, NULL, 'Enquiry related to lost docs.', NULL, 'Open', NULL, '2021-07-20 18:30:00', '2021-07-21 16:37:58'),
(41, '8', 'abc@gmail.com', 'Water supply issue.', NULL, NULL, 'I have a issue related to water regularity. ', NULL, 'closed', 'f', '2021-07-20 18:30:00', '2021-07-22 14:04:11'),
(42, '9', 'sau@gmail.com', 'wa', NULL, NULL, 'wa', NULL, 'Open', NULL, '2021-07-22 18:30:00', '2021-07-23 10:52:13'),
(43, '10', 'rohanbedage2001@gmail.com', 'help', NULL, NULL, 'help related to something', NULL, 'closed', 'ok', '2021-07-23 18:30:00', '2021-07-24 08:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `unanswered`
--

CREATE TABLE `unanswered` (
  `id` int(30) NOT NULL,
  `question` text DEFAULT NULL,
  `no_asks` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unanswered`
--

INSERT INTO `unanswered` (`id`, `question`, `no_asks`) VALUES
(83, 'hhh', 3),
(85, 'hie', 3),
(86, 'hello', 3),
(87, 'hey', 3),
(88, 'heu', 3),
(89, 'hehehe', 2),
(90, 'no one', 2);

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
(3, 'AWW', 'Anuj t', 'Anuj ', '20', 'anuj.lpu1@gmail.com', '', '123456', '8285703354', 'female', NULL, 'Sec-5 Sahibabad Ghaziabad 55e', 0, '2015-01-01 18:30:00', '100', '1000', '100', 'paid', 70, ''),
(12, 'Rohan', 'Rohan', 'Bedage', '20', 'rohanbedage2001@gmail.com', '', 'ro1230', '8329234445', 'male', '2df9936a904b4474e438b4860c8eaeb7.jpg', 'Viman Nager , Nagar road ,Pune', NULL, '2019-08-10 11:24:31', '100', '100', '1000', '0', 80, ''),
(70, 'aish', 'Aishwarya', 'singh', '', 'aishwarya.194088@gmail.com', NULL, 'ro1230', '9856667592', 'female', NULL, 'Viman Nager , Nagar road ,Pune', NULL, '2021-07-24 09:50:26', '0', '0', '0', '0', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) DEFAULT '',
  `logintime` varchar(255) DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `ip` varbinary(16) DEFAULT NULL,
  `mac` varbinary(16) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(133, '2021/06/22', '04:02:43pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(132, '2021/06/22', '04:01:34pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(131, '2021/06/22', '03:57:28pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(130, '2021/06/22', '03:17:28pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(129, '2021/06/21', '09:54:52pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(128, '2021/06/21', '08:31:57pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(127, '2021/06/21', '07:50:34pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(126, '2021/06/21', '07:06:05pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(125, '2021/06/20', '10:40:18pm', 12, 'ABcsss', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(124, '2021/06/20', '05:19:31pm', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(123, '2021/06/20', '10:09:56am', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(116, '2021/06/14', '08:28:02am', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(117, '2021/06/14', '08:34:33am', 9, 'Anuj', 'demo@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(118, '2021/06/14', '08:35:41am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(119, '2021/06/14', '09:55:18pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(120, '2021/06/17', '09:55:57pm', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(121, '2021/06/19', '01:02:29am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(122, '2021/06/19', '01:05:30am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(134, '2021/07/08', '06:14:13pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(135, '2021/07/08', '09:22:04pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(136, '2021/07/08', '09:29:21pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(137, '2021/07/08', '09:29:39pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(138, '2021/07/09', '10:32:03am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(139, '2021/07/09', '11:38:40pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(140, '2021/07/09', '01:20:51am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(141, '2021/07/09', '01:44:43am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(142, '2021/07/10', '03:59:46pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(143, '2021/07/10', '09:52:15pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(144, '2021/07/10', '02:15:14am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(145, '2021/07/11', '01:00:25pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(146, '2021/07/11', '12:36:26am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(147, '2021/07/11', '02:06:11am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(148, '2021/07/12', '01:33:13pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(149, '2021/07/12', '04:49:52pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(150, '2021/07/12', '04:58:43pm', 45, 'sauabh', 'saurabhnale8@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(151, '2021/07/12', '05:03:45pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(152, '2021/07/12', '10:43:49pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(153, '2021/07/13', '08:02:12am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(154, '2021/07/13', '01:17:36pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(155, '2021/07/13', '01:17:52pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(156, '2021/07/13', '02:22:00pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(157, '2021/07/13', '02:32:24pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(158, '2021/07/13', '02:33:09pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(159, '2021/07/14', '09:11:01am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(160, '2021/07/14', '08:02:32pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(161, '2021/07/14', '08:10:39pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(162, '2021/07/15', '08:48:03pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(163, '2021/07/15', '09:00:32pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(164, '2021/07/17', '11:44:23pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(165, '2021/07/18', '07:00:35pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(166, '2021/07/18', '10:02:22pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(167, '2021/07/19', '01:31:04pm', 54, 'sau', 'sau@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(168, '2021/07/19', '02:02:44pm', 54, 'sau', 'sau@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(169, '2021/07/20', '03:39:23pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(170, '2021/07/20', '11:29:56pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(171, '2021/07/21', '10:35:22am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(172, '2021/07/21', '05:37:34pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(173, '2021/07/21', '07:30:36pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(174, '2021/07/21', '07:37:03pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(175, '2021/07/21', '07:41:08pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(176, '2021/07/21', '09:58:35pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(177, '2021/07/21', '10:38:25pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(178, '2021/07/22', '12:47:16pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(179, '2021/07/22', '06:42:43pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(180, '2021/07/23', '09:18:37am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(181, '2021/07/23', '01:02:35pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(182, '2021/07/23', '01:25:29pm', 55, 'rohan', 'ro@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(183, '2021/07/23', '01:31:52pm', 55, 'rohan', 'ro@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(184, '2021/07/23', '02:21:59pm', 56, 'ray', 'ray@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(185, '2021/07/23', '02:59:28pm', 59, 'rohan', 'rohan@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(186, '2021/07/23', '03:09:25pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(187, '2021/07/23', '03:17:42pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(188, '2021/07/23', '03:56:26pm', 60, 'sau', 'sau@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(189, '2021/07/23', '04:01:05pm', 61, 'sau', 'sau@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(190, '2021/07/23', '04:02:39pm', 62, 'neel', 'neel@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(191, '2021/07/23', '04:03:42pm', 61, 'sau', 'sau@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(192, '2021/07/23', '06:40:03pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(193, '2021/07/23', '06:51:11pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(194, '2021/07/23', '07:52:16pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(195, '2021/07/23', '09:56:02pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(196, '2021/07/23', '10:36:58pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(197, '2021/07/23', '10:50:34pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(198, '2021/07/23', '11:03:36pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(199, '2021/07/23', '12:50:37am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(200, '2021/07/23', '02:04:23am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(201, '2021/07/23', '03:08:01am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(202, '2021/07/23', '03:13:55am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(203, '2021/07/24', '07:32:11am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(204, '2021/07/24', '11:30:32am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(205, '2021/07/24', '11:33:37am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(206, '2021/07/24', '11:37:34am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(207, '2021/07/24', '01:57:41pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(208, '2021/07/24', '02:07:17pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(209, '2021/07/24', '02:12:49pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(210, '2021/07/24', '02:46:15pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(211, '2021/07/24', '03:05:55pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(212, '2021/07/24', '10:10:43pm', 12, 'Rohan', 'rohanbedage2001@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', '');

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
(84, 'ronnie', 'here', '25', 'female', 'Adults', 'Literate', 'Lawyer', '2021-07-09 17:49:31', NULL, 'Active'),
(85, 'rohan', 'Bedage', '122', 'female', 'Older Adults', 'Illiterate', 'Engineer', '2021-07-10 15:26:12', NULL, 'Active'),
(86, 'sau', 'oo', '25', 'female', 'Adults', 'Illiterate', 'Engineer', '2021-07-10 17:31:52', NULL, 'Active'),
(87, 'rohan', 'Bedage', '19', 'male', 'Adults', 'Literate', 'Engineer', '2021-07-24 09:12:43', NULL, 'Active'),
(88, 'saurabh', 'nale', '12', 'male', 'Teenagers', 'Literate', 'Student', '2021-07-24 09:13:15', NULL, 'Active'),
(89, 'neel', 'patil', '5', 'male', 'Infants', 'Literate', 'Underage', '2021-07-24 09:13:47', NULL, 'Active'),
(90, 'hari', 'patil', '66', 'male', 'Older Adults', 'Literate', 'Teacher', '2021-07-24 09:14:32', NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakingnews`
--
ALTER TABLE `breakingnews`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequent_asks`
--
ALTER TABLE `frequent_asks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home1`
--
ALTER TABLE `home1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placecat`
--
ALTER TABLE `placecat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placesubcat`
--
ALTER TABLE `placesubcat`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prequest`
--
ALTER TABLE `prequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_due`
--
ALTER TABLE `tax_due`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unanswered`
--
ALTER TABLE `unanswered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `breakingnews`
--
ALTER TABLE `breakingnews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `frequent_asks`
--
ALTER TABLE `frequent_asks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `home1`
--
ALTER TABLE `home1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `jobcat`
--
ALTER TABLE `jobcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `placecat`
--
ALTER TABLE `placecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `placesubcat`
--
ALTER TABLE `placesubcat`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `prequest`
--
ALTER TABLE `prequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `schmecat`
--
ALTER TABLE `schmecat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `schmedetail`
--
ALTER TABLE `schmedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_due`
--
ALTER TABLE `tax_due`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `unanswered`
--
ALTER TABLE `unanswered`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `villagers`
--
ALTER TABLE `villagers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
