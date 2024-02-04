-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3306
-- Generation Time: Mar 25, 2023 at 02:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(240) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `massage`) VALUES
(1, 'ss', 'shubham1135@gmail.com', 'hello'),
(2, 'sagar', 'garate.sagar@rmcet.com', 'hello '),
(3, 'shubham', 'shubhamaurya1135@gmail.com', 'hello'),
(4, 's', 'shubhamaurya1135@gmail.com', 'hello'),
(5, 's', 'shubhamaurya1135@gmail.com', 'gello'),
(6, 'shubham', 'shubhan@gamil.com', 'hello'),
(7, 'shubham', 'shubham@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `full_name` varchar(250) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `contact` text NOT NULL,
  `dob` text NOT NULL,
  `skill` text NOT NULL,
  `education` text NOT NULL,
  `internship` text NOT NULL,
  `project` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `created_at`, `updated_at`, `full_name`, `headline`, `contact`, `dob`, `skill`, `education`, `internship`, `project`, `url`, `tid`) VALUES
(14, 7, '2022-10-16 14:40:13', '2023-03-24 17:56:07', 'Gaurav Pawar', 'Machine Learning Engineer', '{\"email\":\"guarav@pawar.com\",\"mobile\":\"8698013214\",\"address\":\"1135 Nivali Titha ratnagiri\"}', '2002-06-22', '[\"HTML\",\"CSS\",\"BOOTSTRAP\",\"JAVASCRIPT\",\"PYTHON\",\"PHP\",\"NODE JS\",\"REACT JS\"]', '[{\"title\":\"SSC 10th Class\",\"college\":\"Patvardhan High School\",\"Cduration\":\"2015-2018\"},{\"title\":\"HSC 12th Science\",\"college\":\"Patvardhan High School\",\"Cduration\":\"2018-2020\"},{\"title\":\"Bachelor Of Engineering\",\"college\":\"RMCET \",\"Cduration\":\"2020-2024\"}]', '[{\"company\":\"TATA Consultancy Services\",\"duration\":\" 3 months\",\"description\":\"Done an internship at TCS on mahine learning engineer. work on there peoject onsggg.\"}]', '[{\"name\":\"E-library \",\"Pduration\":\"2 Months\",\"Pdespcription\":\"I did a project on a prolem which all students are facing in covid pandamic. So i create a project on it E-library provide engineering book to all the semester.\"},{\"name\":\"Automatic Resume Builder\",\"Pduration\":\"3 months\",\"Pdespcription\":\"This project help to all student who are looking to create resume with one of the best templetes at free of cost .\"}]', '5613191q2z3yw6uyxt', 0),
(17, 7, '2022-10-16 15:06:25', '2022-10-16 15:06:25', 'wrwer', 'wer', '{\"email\":\"a@d.com\",\"mobile\":\"ewtwet\",\"address\":\"wte\"}', '2022-10-17', '[\"wet\"]', '[{\"title\":\"wet\",\"college\":\"etwet\",\"Cduration\":\"wet\"}]', '[{\"company\":\"etew\",\"duration\":\" twet\",\"description\":\"ewe\"}]', '[{\"name\":\"wetw\",\"Pduration\":\"wet\",\"Pdespcription\":\"wetwt\"}]', '6yx755wyqut6983z12', 0),
(115, 16, '2022-10-28 07:57:09', '2023-03-24 17:56:31', 'Shubham Maurya', 'Machine Learning Engineer', '{\"email\":\"shubhamaurya1135@gmail.com\",\"mobile\":\"8698014214\",\"address\":\"1135 Nivali Titha ratnagiri\"}', '2022-10-24', '[\"HTML\",\"CSS\",\"BOOTSTRAP\",\"PHP\",\"PYTHON\"]', '[{\"title\":\"SSC 10th Class\",\"college\":\"Patvardhan High School\",\"Cduration\":\"2015-2018\",\"score\":\" 80\"},{\"title\":\"HSC 12th Science\",\"college\":\"Patvardhan High School\",\"Cduration\":\"2018-2020\",\"score\":\" 90\"},{\"title\":\"Bachelor Of Engineering\",\"college\":\"RMCET \",\"Cduration\":\"2020-2024\",\"score\":\" 90\"}]', '[{\"company\":\"TATA Consultancy Services\",\"duration\":\" 3 months\",\"description\":\"Done an internship at TCS on mahine learning engineer. work on there peoject onsggg.\"}]', '[{\"name\":\"E-library \",\"Pduration\":\"2 Months\",\"Pdespcription\":\"I did a project on a prolem which all students are facing in covid pandamic.\"},{\"name\":\"Automatic Resume Builder\",\"Pduration\":\"3 months\",\"Pdespcription\":\"This project help to all student who are looking to create resume.\"}]', 'yuyt12w6684z3q699x', 0),
(120, 19, '2022-12-26 11:19:35', '2022-12-26 11:19:35', 'Shubham Maurya', 'Machine Learning Engineer', '{\"email\":\"shubhamaurya1135@gmail.com\",\"mobile\":\"8698014214\",\"address\":\"1135 Nivali Titha ratnagiri\"}', '2022-12-19', 'null', '[]', '[]', '[]', '0u5ytz1yx7265q753w', 0),
(126, 16, '2023-03-19 15:55:32', '2023-03-19 15:55:32', 'Gaurav Pawar', 'machine learning', '{\"email\":\"gaurav.pawar@gmail.com\",\"mobile\":\"9868569856\",\"address\":\"1135 Nivali Titha ratnagiri\"}', '2023-03-08', '[\"HTML\",\"CSS\",\"BOOTSTRAP\",\"PHP \",\"PYTHON\"]', '[{\"title\":\"10th Class\",\"college\":\"Patvardhan highschool\",\"Cduration\":\"2015-18\",\"score\":\" 74\"},{\"title\":\"Engineering\",\"college\":\"RMCET\",\"Cduration\":\"2020-24\",\"score\":\" 90\"}]', '[{\"company\":\"Tata Moters\",\"duration\":\" 3 months\",\"description\":\"i work thier as a machin engineer\"}]', '[{\"name\":\"Tata Moters\",\"Pduration\":\"3 months\",\"Pdespcription\":\"i work thier as a machin engineeri work thier as a machin engineer\"},{\"name\":\"Tata motrer\",\"Pduration\":\"3 month\",\"Pdespcription\":\"i work thier as a machin engineer\"}]', '2y9z3yxqu4w123716t', 0),
(157, 20, '2023-03-22 08:07:23', '2023-03-22 08:07:23', '2353532', '233535', '{\"email\":\"dfdsf\",\"mobile\":\"1212121212\",\"address\":\"qqqqqqqqqq\"}', '2023-03-31', 'null', '[]', '[]', '[]', '92x3q4z47y41ut6y7w', 0),
(158, 20, '2023-03-22 08:07:35', '2023-03-22 08:07:35', '2353532', '233535', '{\"email\":\"dfdsf\",\"mobile\":\"1212121212\",\"address\":\"qqq\"}', '2023-03-31', 'null', '[]', '[]', '[]', '57y954z6q7124wtxuy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `templetes`
--

CREATE TABLE `templetes` (
  `temp_id` int(11) NOT NULL,
  `temp_title` varchar(250) NOT NULL,
  `temp_desp` varchar(250) NOT NULL,
  `temp_link` text NOT NULL,
  `temp_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templetes`
--

INSERT INTO `templetes` (`temp_id`, `temp_title`, `temp_desp`, `temp_link`, `temp_img`) VALUES
(1, 'Default Templetes', 'This is default templete.', 'resume', 'resume'),
(2, 'Responsive resume Templates', 'This is responsive resume templates.', 'resume2', 'simple'),
(3, 'Simple Resume Template', 'This is Single page resume templates.', 'resume-3', 'resume-3'),
(4, 'Modern CV templates', ' In the Modern style are perfect for applicants who want to craft a clean, easy-to-scan resume.', '#', 'modern');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(290) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `account_status`, `created_at`, `updated_at`) VALUES
(2, 'Shubham Maurya', 'shubham@gmail.com', '123456', 0, '2022-10-11 15:26:02', '2022-10-16 03:43:37'),
(7, 'gaurav pawar', 'gaurav@pawar.com', '123456', 0, '2022-10-16 12:43:21', '2022-10-16 12:43:21'),
(8, 'sagar prabodhan garate', 'garate.sagar@rmcet.com', 'sagar123', 0, '2022-10-17 03:20:13', '2022-10-17 03:20:13'),
(9, 'dada', 'dada@gmail.com', '123456', 0, '2022-10-23 07:21:59', '2022-10-23 07:21:59'),
(14, 'Shubham Maurya', 'shubham1135@gmail.com', '$2y$10$qoG4Xkavyc0VrCihLj0eCuw11WuFr8GvMjvqeANCq41EHfTDGF4hy', 0, '2022-10-28 08:46:22', '2022-10-28 09:18:42'),
(16, 'Shubham Maurya', 'shubhamaurya1135@gmail.com', '$2y$10$BaOcotHqCqdDhyzcainFie/YTbeWsqt2MxYaTv38fbTsynU2f181C', 0, '2022-10-28 10:56:11', '2022-10-28 10:56:11'),
(17, 'Ambuj', 'ambuj.singh@gmail.com', '$2y$10$u74ztmQtTzaalQSlV6RHleNJLuMSKB0jS0ZRHiIpXyyJWk70Zix7C', 0, '2022-11-03 04:04:00', '2022-11-03 04:04:00'),
(18, 'Shubham Maurya', 'maurya.shubham@gmail.com', '$2y$10$rFjCZP1Wv8EIWsh3BUG9pec5/liuIL.NRhZsmvIds9d7N5DOT5hDO', 0, '2022-11-03 07:27:21', '2022-11-03 07:27:21'),
(19, 'aditya kushwaha', 'a@b.com', '$2y$10$yu1DcoEoTTSfdk37gSYFZuDGq7SacWjjWCwXJy3fFJz4/Ce.KHH0y', 0, '2022-12-26 11:17:31', '2022-12-26 11:17:31'),
(20, 'garav', 'g@v.com', '$2y$10$DC0DfVqras3DGb3YUFG2zecj5O3ACcB4okgi9y842uI37k/0kua2W', 0, '2023-03-22 08:06:04', '2023-03-22 08:06:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templetes`
--
ALTER TABLE `templetes`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `templetes`
--
ALTER TABLE `templetes`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
