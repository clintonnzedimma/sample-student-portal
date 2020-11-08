-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 12:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `okp_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `units` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `units`) VALUES
(1, 'GST : Use of English', 3),
(2, 'ACC : Intro to Accounting', 2),
(3, 'MTH : Calculus', 3),
(4, 'CSC : BASIC Programming', 2),
(5, 'CHM : Chemistry Lab', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hod` varchar(255) DEFAULT NULL,
  `schId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `hod`, `schId`) VALUES
(1, 'Mathematical Sciences', 'Dr Gbenga', NULL),
(2, 'Chemical Sciences', 'Dr Ochuko', NULL),
(3, 'Economics', 'Dr Paul', NULL),
(4, 'Physical Sciences', 'Dr Charles', NULL),
(5, 'Botany', 'Dr Peter', NULL),
(6, 'Accounting', 'Dr Sandra', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `otherName` varchar(255) DEFAULT NULL,
  `matNum` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` varchar(255) NOT NULL,
  `schId` varchar(11) DEFAULT NULL,
  `deptId` varchar(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `surname`, `firstName`, `otherName`, `matNum`, `email`, `sex`, `password`, `dob`, `schId`, `deptId`, `phone`, `address`, `passport`, `type`) VALUES
(3, 'Doe', 'Kehinde', 'King', NULL, 'john@alc.com', 'male', '$2y$10$Utq4NiPcV3z3iUvjLzBHJOwpEX/B.BVPEGOFH/DPo6YKxaOCxyaIe', '1999-01-01', NULL, '3', '08152718093', 'z', 'external_5fa73134b49d26.66355984.jpg', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `reg_courses`
--

CREATE TABLE `reg_courses` (
  `id` int(11) NOT NULL,
  `courseId` varchar(255) DEFAULT NULL,
  `courseTitle` varchar(255) DEFAULT NULL,
  `memberId` varchar(255) DEFAULT NULL,
  `matNum` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `units` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_courses`
--

INSERT INTO `reg_courses` (`id`, `courseId`, `courseTitle`, `memberId`, `matNum`, `session`, `semester`, `units`) VALUES
(21, '2', 'ACC : Intro to Accounting', '3', NULL, '2020/2021', 'first', 2),
(22, '3', 'MTH : Calculus', '3', NULL, '2020/2021', 'first', 3),
(23, '4', 'CSC : BASIC Programming', '3', NULL, '2020/2021', 'first', 2),
(24, '5', 'CHM : Chemistry Lab', '3', NULL, '2020/2021', 'first', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_courses`
--
ALTER TABLE `reg_courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg_courses`
--
ALTER TABLE `reg_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
