-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 05:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `organisation_id` varchar(20) NOT NULL,
  `level_id` varchar(5) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `organisation_id`, `level_id`, `created_on`) VALUES
(1, 'admin', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'Evan', 'Reblora', 'Reblora, Evan_CV (1).jpg', '2', '3', '2018-05-03'),
(2, 'root', '123456', 'rex', 'reb', '', '1', '1', '2023-09-21'),
(3, 'test', '$2y$10$NMDoXvhEixn/7PkIUFCBje3MCy92oC76bxEDXnUHYMZCYE4XuGHky', 'Evan', 'Reblora', '', '2', '1', '2023-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `description` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `file` varchar(100) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `date_uploaded` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `category_id`, `filename`, `description`, `publisher`, `file`, `file_type`, `date_uploaded`, `status`) VALUES
(2, 'bookisbntest', 2, 'Calculus Made Easy', 'Author Megasd', 'Self Publish Inc', '', '', '2018-05-02', 0),
(13, '159420229X', 3, 'Moonwalking with Einstein: The Art and Science of Remembering Everything ', 'Joshua Foer ', 'Penguin Press HC', '', '', '2020-05-11', 0),
(15, 'asfasf', 3, 'testing', 'testing1`', 'evabn', '', '', '2023-09-19, 05:01 PM', 0),
(17, 'asfASFASFA', 2, 'hjgjhasdasd', 'asdasdasfas', 'ASFAF', 'db_sfms.sql', '', '2018-05-02', 0),
(19, '2345214', 2, 'test', 'hjfghjfg', '', 'db_sfms.sql', '', '', 0),
(20, 'test', 4, 'eto download', 'eto download', 'eto download', 'On-call-consultant_Reblora.pdf', '', '2023-09-20, 03:41 PM', 0),
(21, 'dsad', 3, 'asfsaf', 'asdasd', 'dasd', '', '', '2023-09-20, 06:04 PM', 0),
(22, 'gasgfa', 3, 'asgasg', 'asfsf', 'sdasd', 'screencapture-localhost-kmproject-index-php-2023-09-19-15_06_28.png', '', '2023-09-20, 06:07 PM', 0),
(24, 'asgasg', 2, 'testyn', 'gasg', '', 'DAN.jpg', '', '', 0),
(26, 'YPU671430859', 1, 'sdasdasdasd', 'asdasd', '', 'Inspection and Acceptance Report - IT_supplies.pdf', '', '', 0),
(27, 'MZQ651094278', 1, 'testikng', 'fgasasfa', 'evan', 'Codex.docx', '', '2023-09-21, 08:43 PM', 0),
(28, 'QYN015368297', 1, 'eto ngayon', 'download mo', 'evan', 'BMB_IMS-Evaluation-Form-_App-Developer.docx', 'application/vnd.open', '2023-09-28, 02:05 PM', 0),
(29, 'DQB270651398', 1, 'evanrex', 'reblora', 'evan', '379924137_130493560149669_1881996736850902988_n.jpg', 'image/jpeg', '2023-09-28, 04:36 PM', 0),
(30, 'WIG415027369', 2, 'ASEAN marine biodiversity', 'ASEAN marine biodiverisity, abo', 'evan', '382246145_639711238272436_6438667938359017888_n.jpg', 'image/jpeg', '2023-09-28, 04:38 PM', 0),
(31, 'MEB340625798', 1, 'sdvdv', 'dsdafasf', 'asdasd', 'BMB_IMS-Evaluation-Form-_App-Developer (3).docx', 'application/vnd.open', '2023-09-29, 10:42 AM', 0),
(32, 'XIA358140796', 2, 'fasfasfa', 'gsadgasd', 'gasgas', 'BMB_IMS-Evaluation-Form-_App-Developer (2).docx', 'application/vnd.open', '2023-09-29, 02:49 AM', 0),
(33, 'FCP035846279', 14, 'ASEAN Biodiversity Dashboard', 'dashboard', 'evan', 'Provisional_Programme_Workshop_on_CHM.pdf', 'application/pdf', '2023-10-03, 05:44 AM', 0),
(34, 'DCT952830476', 16, 'kunware', 'eto', 'asdasd', 'Provisional_Programme_Workshop_on_CHM (1).pdf', 'application/pdf', '2023-10-03, 06:08 AM', 0),
(35, 'CTA524308671', 2, '745sdfh', 'sdgsdg', 'sdgsdg', '386449114_201071172997951_5123784999293594440_n.png', 'image/png', '2023-10-04, 02:43 AM', 0),
(36, 'QJT853061429', 2, 'asfasfasf', 'asfasfasf', 'asdasd', '352536983_123350720776630_144565122149316363_n.jpg', 'image/jpeg', '2023-10-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrow` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `student_id`, `book_id`, `date_borrow`, `status`) VALUES
(19, 5, 2, '2023-10-03', 1),
(20, 6, 28, '2023-10-03', 1),
(21, 0, 28, '2023-10-03', 1),
(22, 0, 28, '2023-10-03', 1),
(23, 0, 20, '2023-10-03', 1),
(24, 0, 28, '2023-10-03', 1),
(25, 0, 28, '2023-10-03', 1),
(26, 0, 20, '2023-10-03', 1),
(27, 9, 28, '2023-10-03', 1),
(28, 9, 29, '2023-10-03', 1),
(29, 9, 33, '2023-10-03', 1),
(30, 9, 28, '2023-10-04', 1),
(31, 9, 28, '2023-10-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Policy Brief'),
(2, 'Project Completion'),
(3, 'Publication'),
(4, 'Proceedings'),
(5, 'Annual Reports'),
(6, 'Video'),
(7, 'ASEAN Biodiversity Outlook'),
(8, 'BKMD 23 GB Documents'),
(9, '2016 BKDM Workshop Files'),
(10, 'KM Plan and Product Development'),
(11, 'GOF Budget Appropriation'),
(12, 'Activity Design'),
(13, 'KBA Course Prep Documents'),
(14, 'ASEAN Biodiversity Dashboard'),
(15, 'Testing'),
(16, 'SUb cat biodiversity');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `code`) VALUES
(1, 'Philippines', 'PH'),
(2, 'ASEAN Centre for Biodiversity', 'ACB');

-- --------------------------------------------------------

--
-- Table structure for table `restriction`
--

CREATE TABLE `restriction` (
  `id` int(11) NOT NULL,
  `levelname` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restriction`
--

INSERT INTO `restriction` (`id`, `levelname`, `access`) VALUES
(1, 'admin', 'add,edit,delete'),
(2, 'user', 'add,edit'),
(3, 'sudo', 'full-control');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level_id` varchar(5) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `email`, `password`, `firstname`, `lastname`, `photo`, `course_id`, `level_id`, `created_on`) VALUES
(5, 'FPY103724589', '', '', 'zoey', 'reblora', 'yan2x2.jpg', 1, '2', '2023-09-14'),
(6, 'UQC481023967', '', '', 'Riley', 'Reblora', '', 2, '2', '2023-09-21'),
(7, 'EQO690718324', '', '', 'Riley', 'Yosef', '', 2, '2', '2023-09-21'),
(8, 'AOG985347260', '', '', 'pamela', 'reblora', '', 2, '2', '2023-09-21'),
(9, 'QHX935278410', 'evan.reblora@gmail.com', '$2y$10$RtmwMbjpEp1hkXvGt3CspOOd/6loczE3ITAVrd1mvzktcbLeMV1uG', 'Evan1', 'Reblora1', '', 2, '2', '2023-09-29'),
(10, 'HCP421689735', 'evan.reblora@gmail.com', '$2y$10$09svtDSFgnLRfN09epP.8.Pal4WeJBUXUWXr9DyDf3xsybVsmwI9m', 'Evan2', 'Reblora2', '', 1, '2', '2023-09-29'),
(11, 'FGX346870195', 'evan.reblora@gmail.com', '$2y$10$0Mky79HGbO1D/N/DlipCL.HjhlfNnwtvIjZIH4V6C7o7gROF17vNq', 'Evan', 'Reblora', '', 1, '2', '2023-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restriction`
--
ALTER TABLE `restriction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restriction`
--
ALTER TABLE `restriction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
