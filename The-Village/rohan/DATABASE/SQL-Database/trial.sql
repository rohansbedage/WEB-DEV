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
-- Database: `trial`
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
(90, 'rohan', 12, '121121112222222', '12300', '250', '2021-07-07 20:22:04', NULL, 'Active'),
(91, 'Fashion', 12, '111', '111', '111', '2021-07-08 11:15:31', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(7, 'Jasprit Bumrah ruled out of England T20I series due to injury', 3, 4, '<p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\"><span style=\"margin: 0px; padding: 0px; font-weight: 700;\">The Indian Cricket Team has received a huge blow right ahead of the commencement of the much-awaited series against England. Star speedster Jasprit Bumrah has been ruled out of the forthcoming 3-match T20I series as he suffered an injury in his left thumb.</span></p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The 24-year-old pacer picked up a niggle during India’s first T20I match against Ireland played on June 27 at the Malahide cricket ground in Dublin. As per the reports, he is likely to be available for the ODI series against England scheduled to start from July 12.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">In the first, Bumrah exhibited a phenomenal performance with the ball. In his quota of four overs, he conceded 19 runs and picked 2 wickets at an economy rate of 4.75.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">Post his injury, he arrived at team’s optional training session on Thursday but didn’t train. Later, he was rested in the second face-off along with MS Dhoni, Shikhar Dhawan and Bhuvneshwar Kumar.</p><p style=\"margin-bottom: 15px; padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">As of now, no replacement has been announced. However, Umesh Yadav may be be given chance in the team in Bumrah’s absence.</p><p style=\"padding: 0px; font-size: 16px; font-family: PTSans, sans-serif;\">The first T20I match between India and England will be played at Old Trafford, Manchester on July 3.</p>', '2018-06-30 18:49:23', '2018-08-28 15:57:32', 1, 'Jasprit-Bumrah-ruled-out-of-England-T20I-series-due-to-injury', '6d08a26c92cf30db69197a1fb7230626.jpg'),
(10, 'Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal', 7, 9, '<h1 style=\"box-sizing: inherit; margin-top: 0px; padding: 0px; font-family: Roboto, sans-serif; font-size: 38px; line-height: normal; letter-spacing: -0.5px; color: rgb(51, 51, 51);\"><span itemprop=\"headline\" style=\"box-sizing: inherit;\">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</span>Tata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel Deal</h1>', '2018-06-30 19:08:56', '2018-08-28 15:59:59', 1, 'Tata-Steel,-Thyssenkrupp-Finalise-Landmark-Steel-Deal', '505e59c459d38ce4e740e3c9f5c6caf7.jpg'),
(11, 'UNs Jean Pierre Lacroix thanks India for contribution to peacekeeping', 6, 8, '<p>UNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeepingUNs Jean Pierre Lacroix thanks India for contribution to peacekeeping<br></p>', '2018-06-30 19:10:36', '2018-08-28 16:01:35', 1, 'UNs-Jean-Pierre-Lacroix-thanks-India-for-contribution-to-peacekeeping', '27095ab35ac9b89abb8f32ad3adef56a.jpg'),
(12, 'Shah holds meeting with NE states leaders in Manipur', 6, 7, '<p><span style=\"color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">New Delhi: BJP president Amit Shah today held meetings with his party leaders who are in-charge of 11 Lok Sabha seats spread across seven northeast states as part of a drive to ensure that it wins the maximum number of these constituencies in the general election next year.</span><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><webviewcontentdata style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">Shah held separate meetings with Lok Sabha toli (group) of Arunachal Pradesh, Tripura, Meghalaya, Mizoram, Nagaland, Sikkim and Manipur in Manipur, the partys media head Anil Baluni said.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Baluni said that Shah was in West Bengal for two days before he arrived in Manipur. The BJP chief would reach Odisha tomorrow.</webviewcontentdata><br></p>', '2018-06-30 19:11:44', '2021-05-20 21:10:19', 1, 'Shah-holds-meeting-with-NE-states-leaders-in-Manipur', 'c980af5a7416ad88a618f78d94f385a6.gif'),
(13, 'alert', 8, 10, '<p>ddddddddddddddddddddddd</p>', '2021-05-21 04:57:55', NULL, 1, 'alert', '0233da40e5e6fe41c95c9bcb975b5067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `AdmitDate` date DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `PatientStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `PatientName`, `Age`, `gender`, `AdmitDate`, `UpdationDate`, `PatientStatus`) VALUES
(73, 'rohana', 12, 'child', NULL, NULL, 'Dead');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$i4LMfeFPQpGSNPTaccIkKuwxAkJ4PhBr3JND7FpXwWFjRvchQn17C', 'phpgurukulofficial@gmail.com', 1, '2018-05-27 17:51:00', '2018-10-24 18:21:07');

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
  `posting_date` date DEFAULT NULL,
  `admin_remark_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_id`, `email_id`, `subject`, `task_type`, `prioprity`, `ticket`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(0, '20', 'abc@gmail.com', 'I have a issue q', NULL, NULL, 'q222', NULL, 'closed', 'qqqqqqqqqq', '2021-07-08', '2021-07-08 11:54:22');

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
  `Penalty` varchar(255) DEFAULT NULL,
  `Paymentstatus` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `lastname`, `Age`, `email`, `alt_email`, `password`, `mobile`, `gender`, `user_image`, `address`, `status`, `posting_date`, `watertax`, `Propertytax`, `Penalty`, `Paymentstatus`) VALUES
(3, 'Anuj kumar', '', '', '0', 'anuj.lpu1@gmail.com', '', '123456', '8285703354', 'male', NULL, 'Sec-5 Sahibabad Ghaziabad 55e', 0, '2015-01-01 18:30:00', '', '', '', ''),
(7, 'RAY', '', '', '0', 'rahul@gmail.com', '', '123456', '8285703355', 'female', '', 'Viman Nager , Nagar road ,Pune', 0, '2015-02-03 18:30:00', '', '', '', ''),
(9, 'Anuj', '', '', '0', 'demo@gmail.com', '', 'Test@12345', '1234567890', 'male', '', 'New Delhi India', 0, '2019-07-10 18:30:00', '', '', '', ''),
(11, 'Test user', '', '', '0', 'testuser@gmail.com', '', 'Test@123', '1234567890', 'male', NULL, 'New Delhi', NULL, '2019-08-06 18:09:15', '', '', '', ''),
(12, 'Rohan', 'RAY', 'Patili', '29', 'abc@gmail.com', '', 'ro1230', '09856667592', 'male', NULL, 'Viman Nager , Nagar road ,sangli', NULL, '2019-08-10 11:24:31', '1000', '500', '0', 'paid');

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
(119, '2021/06/18', '09:55:18pm', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(120, '2021/06/17', '09:55:57pm', 12, 'ABc', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(121, '2021/06/16', '01:02:29am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(122, '2021/06/19', '01:05:30am', 3, 'Anuj kumar', 'anuj.lpu1@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(134, '2021/06/22', '04:31:57pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(135, '2021/06/15', '09:19:51pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(136, '2021/06/23', '08:36:04pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(137, '2021/06/24', '01:21:07pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(138, '2021/06/26', '01:48:55pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(139, '2021/06/26', '01:49:40pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(140, '2021/06/26', '06:24:41pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(141, '2021/06/27', '11:56:53am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(142, '2021/06/27', '06:57:42pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(143, '2021/06/27', '08:36:37pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(144, '2021/06/27', '12:38:06am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(145, '2021/06/27', '02:39:44am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(146, '2021/06/28', '12:34:45pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(147, '2021/06/28', '07:41:03pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(148, '2021/06/29', '11:03:38am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(149, '2021/06/30', '04:53:23pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(150, '2021/06/30', '07:37:06pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(151, '2021/06/30', '07:55:35pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(152, '2021/06/30', '08:09:39pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(153, '2021/06/30', '02:04:24am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(154, '2021/07/01', '11:50:44am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(155, '2021/07/03', '12:29:13am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(156, '2021/07/04', '12:12:56pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(157, '2021/07/04', '08:19:16pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(158, '2021/07/04', '08:19:42pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(159, '2021/07/04', '08:20:00pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(160, '2021/07/04', '08:20:13pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(161, '2021/07/04', '08:20:30pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(162, '2021/07/05', '10:39:52am', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', ''),
(163, '2021/07/08', '04:30:46pm', 12, 'Rohan', 'abc@gmail.com', 0x3a3a31, 0x38342d32412d46442d44322d31422d37, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
