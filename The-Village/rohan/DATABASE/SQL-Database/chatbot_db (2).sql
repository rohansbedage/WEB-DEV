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
-- Database: `chatbot_db`
--

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
(44, 24),
(45, 9),
(46, 1),
(47, 9),
(48, 10),
(49, 9),
(50, 9),
(51, 9),
(52, 10),
(53, 9),
(54, 9),
(55, 10),
(56, 9),
(57, 9),
(58, 9),
(59, 9),
(60, 9),
(61, 9),
(62, 9),
(63, 9),
(64, 10),
(65, 46),
(66, 9),
(67, 46),
(68, 9),
(69, 10),
(70, 46);

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
(1, 'what are you', 1),
(2, 'who are you', 1),
(3, 'what is your name', 1),
(4, 'What can you do', 2),
(7, 'what is PHP', 4),
(8, 'What is ChatBot', 5),
(9, 'hi', 6),
(10, 'hello', 6),
(11, 'yow', 6),
(12, 'good day', 6),
(14, 'sample', 7),
(15, 'what topic can I ask', 8),
(18, 'eeeeeeeeeeeeee', 11),
(19, 'rohan', 12),
(20, 'xxx', 13),
(21, 'xxx', 14),
(28, 'xxx', 21),
(29, 'rohan', 22),
(30, 'rohan', 23),
(31, 'rohan', 24),
(32, 'rohan', 25),
(33, 'rohan', 26),
(34, 'rohan', 27),
(35, 'rohan', 28),
(36, 'rohan', 29),
(37, 'rohan', 30),
(38, 'rohan', 31),
(39, 'rohan', 32),
(40, 'rohan', 33),
(41, 'rohan', 34),
(42, 'rohan', 35),
(43, 'rohan', 36),
(44, 'saurabh', 37),
(45, 'sasasa', 38),
(46, 'Help', 39);

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
(1, 'I am John, the chatBot of this application.'),
(2, 'I am in charge to answer your questions.'),
(3, 'You can ask me about something related to this website.'),
(4, 'PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.'),
(5, 'A chatbot is a software application used to conduct an on-line chat conversation via text or text-to-speech, in lieu of providing direct contact with a live human agent.'),
(6, 'Hi there, how can I help you ? :)'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue, lectus non tincidunt viverra, lacus erat venenatis mauris, sed hendrerit libero diam ac tellus. Integer imperdiet massa lacus, sed porta ligula efficitur at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; '),
(8, 'You can ask me about something related to this website.'),
(9, '45'),
(10, 'wwwwwwwwwwwwwwwwwww'),
(11, 'qqqqqqqqqqqqq'),
(12, 'ew'),
(13, 'w'),
(14, 'wqqq'),
(15, 'awwwwwwwwwww'),
(16, 'asssssssssssss'),
(17, 'rrr'),
(18, 'aw'),
(19, 'aw'),
(20, 'wa'),
(21, 'a'),
(22, 'ronnie'),
(23, 'ronnie'),
(24, 'ronnie'),
(25, 'ronnie'),
(26, 'ronnie'),
(27, 'ronnie'),
(28, 'ronnie'),
(29, 'ronnie'),
(30, 'ronnie'),
(31, 'ronnie'),
(32, 'ronnie'),
(33, 'ronnie'),
(34, 'ronnie'),
(35, 'ronnie'),
(36, 'ronnie'),
(37, '2:36 pm'),
(38, 'asssss'),
(39, 'Which type of help you need ');

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
(4, 'intro', 'Hi! Ronnie'),
(6, 'short_name', 'ChatBot'),
(10, 'no_result', 'I am sorry. I can&apos;t understand your question. Please rephrase your question and make sure it is related to this site. Thank you :)'),
(11, 'logo', 'uploads/1620181980_bot2.jpg'),
(12, 'bot_avatar', 'uploads/bot_avatar.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg');

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
(1, 'what can you do?', 6),
(2, 'what can you do ?', 6),
(3, 'what topic can I ask', 6),
(4, 'chat bot', 6),
(5, 'asdasd', 6),
(7, 'asd', 6),
(9, 'hello', 6),
(10, 'sample', 6),
(11, 'test', 6),
(12, 'ro', 4),
(13, 'roo', 4),
(14, 'reeew', 4),
(15, 'errrrrrrrrrr', 4),
(16, 'coc', 4),
(17, 'weew', 4),
(18, 'we', 4),
(19, 'hfjsjwej', 2),
(20, 'sekjseesj', 2),
(21, 'dd', 2),
(22, 'hie', 2),
(23, 'hii', 2),
(24, 'hey', 2),
(25, 'hwehw', 0),
(26, 'eshjesjsehs', 0),
(27, 'sesesehgaseesjse', 0),
(28, 'awhjawj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1620201300_avatar.png', NULL, '2021-01-20 14:02:37', '2021-05-05 15:55:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frequent_asks`
--
ALTER TABLE `frequent_asks`
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
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unanswered`
--
ALTER TABLE `unanswered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frequent_asks`
--
ALTER TABLE `frequent_asks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `unanswered`
--
ALTER TABLE `unanswered`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
