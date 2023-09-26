-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 08:15 AM
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
-- Database: `libsystem`
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
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `organisation_id`, `created_on`) VALUES
(1, 'admin', '$2y$10$C4Pqk68lUAG2ZsFp6py/de3i0uSLVc/wyexyBKZHyI2oM2QvH4Ete', 'Evan', 'Reblora', 'Reblora, Evan_CV (1).jpg', '2', '2018-05-03'),
(2, 'root', '123456', 'rex', 'reb', '', '1', '2023-09-21'),
(3, 'test', '$2y$10$NMDoXvhEixn/7PkIUFCBje3MCy92oC76bxEDXnUHYMZCYE4XuGHky', 'Evan', 'Reblora', '', '2', '2023-09-22');

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
(27, 'MZQ651094278', 1, 'testikng', 'fgasasfa', 'evan', 'Codex.docx', '', '2023-09-21, 08:43 PM', 0);

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
(14, 'ASEAN Biodiversity Dashboard');

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
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `firstname`, `lastname`, `photo`, `course_id`, `created_on`) VALUES
(5, 'FPY103724589', 'zoey', 'reblora', 'yan2x2.jpg', 1, '2023-09-14'),
(6, 'UQC481023967', 'Riley', 'Reblora', '', 2, '2023-09-21'),
(7, 'EQO690718324', 'Riley', 'Yosef', '', 2, '2023-09-21'),
(8, 'AOG985347260', 'pamela', 'reblora', '', 2, '2023-09-21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
