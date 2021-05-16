-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 02:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `assessment_plan` longblob DEFAULT NULL,
  `question_bank` longblob DEFAULT NULL,
  `marks_obtained` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `section_name`, `assessment_plan`, `question_bank`, `marks_obtained`) VALUES
(5, 'CSE101-SEC2-SUM-2021', NULL, NULL, NULL),
(6, 'CSE101L-SEC2-SUM-2021', NULL, NULL, NULL),
(7, 'CSE303-SEC1-SUM-2021', NULL, NULL, NULL),
(8, 'CSE303L-SEC1-SUM-2021', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `no_of_credits` int(1) NOT NULL,
  `program_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `no_of_credits`, `program_id`) VALUES
('CSC301', 'Finite Automata and Computability', 3, 'CSC'),
('CSC311', 'Computer Organization and Architecture', 3, 'CSC'),
('CSE101', 'Introduction to c++', 3, 'CSE'),
('CSE101L', '', 1, 'CSE'),
('CSE214', 'Computer Organization and Architecture', 3, 'CSE'),
('CSE303', 'Database Management ', 3, 'CSE'),
('CSE303L', 'Database Mangement', 1, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(7) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `dept_head_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `dept_head_id`) VALUES
(2850, 'CSE', 4258),
(2485, 'PS', 4325),
(2395, 'EEE', 4573);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `f_name` varchar(11) NOT NULL,
  `l_name` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `b_group` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `password`, `f_name`, `l_name`, `dob`, `b_group`, `email`, `address`) VALUES
(4255, '19870205', 'Romasa', 'Qasim', '1987-02-05', 'O+', 'romasa@iub.edu.bd', 'Gulashan Dhaka - 1212'),
(4256, '19800205', 'Abu', 'Sayed', '1980-02-05', 'AB+', 'abusayed@iub.edu.bd', 'Green Road Dhaka - 1205'),
(4315, '19850305', 'Javed', 'Hossain', '1985-03-05', 'O+', 'javed@iub.edu.bd', 'Baridhara Dhaka - 1210');

-- --------------------------------------------------------

--
-- Table structure for table `grade_sheet`
--

CREATE TABLE `grade_sheet` (
  `cssyID` varchar(30) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `serial_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `quiz` float DEFAULT NULL,
  `mid` float DEFAULT NULL,
  `final` float DEFAULT NULL,
  `attendance` float DEFAULT NULL,
  `project` float DEFAULT NULL,
  `assignment` float DEFAULT NULL,
  `CLO1` varchar(3) DEFAULT NULL,
  `CLO2` varchar(3) DEFAULT NULL,
  `CLO3` varchar(3) DEFAULT NULL,
  `CLO4` varchar(3) DEFAULT NULL,
  `CLO5` varchar(3) DEFAULT NULL,
  `CLO6` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_sheet`
--

INSERT INTO `grade_sheet` (`cssyID`, `section_name`, `serial_id`, `id`, `quiz`, `mid`, `final`, `attendance`, `project`, `assignment`, `CLO1`, `CLO2`, `CLO3`, `CLO4`, `CLO5`, `CLO6`) VALUES
('CSE214-SEC2-SUM-2021-1710450', 'CSE214-SEC2-SUM-2021', 10, 1710450, 10.5, 16, 12, 10, 20, 10, 'Y', 'Y', 'N', 'N', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1711118', 'CSE303-SEC1-SUM-2021', 9, 1711118, 10.5, 20.5, 30.5, 8.5, NULL, NULL, 'Y', 'Y', 'N', 'Y', NULL, NULL);

--
-- Triggers `grade_sheet`
--
DELIMITER $$
CREATE TRIGGER `insert_trigger1` BEFORE INSERT ON `grade_sheet` FOR EACH ROW SET new.cssyID = CONCAT(new.section_name,'-', new.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_trigger1` BEFORE UPDATE ON `grade_sheet` FOR EACH ROW SET new.cssyID = CONCAT(new.section_name,'-', new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `plo_table`
--

CREATE TABLE `plo_table` (
  `serial_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `plo1` varchar(50) DEFAULT NULL,
  `plo2` varchar(50) DEFAULT NULL,
  `plo3` varchar(50) DEFAULT NULL,
  `plo4` varchar(50) DEFAULT NULL,
  `plo5` varchar(50) DEFAULT NULL,
  `plo6` varchar(50) DEFAULT NULL,
  `plo7` varchar(50) DEFAULT NULL,
  `plo8` varchar(50) DEFAULT NULL,
  `plo9` varchar(50) DEFAULT NULL,
  `plo10` varchar(50) DEFAULT NULL,
  `plo11` varchar(50) DEFAULT NULL,
  `plo12` varchar(50) DEFAULT NULL,
  `plo13` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plo_table`
--

INSERT INTO `plo_table` (`serial_id`, `section_name`, `plo1`, `plo2`, `plo3`, `plo4`, `plo5`, `plo6`, `plo7`, `plo8`, `plo9`, `plo10`, `plo11`, `plo12`, `plo13`) VALUES
(9, 'CSE303-SEC1-SUM-2021', 'CLO1', 'CLO2', NULL, 'CLO3', NULL, 'CLO4', NULL, 'CLO5', NULL, NULL, NULL, 'CLO6', NULL),
(10, 'CSE214-SEC2-SUM-2021', NULL, NULL, 'CLO3', NULL, 'CLO2', NULL, 'CLO1', NULL, NULL, 'CLO5', 'CLO4', NULL, 'CLO6'),
(24, 'CSC301-SEC1-SUM-2021', 'CLO1', 'CLO2', 'CLO3', 'CLO4', 'CLO5', 'CLO6', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` varchar(4) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `dept_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `dept_id`) VALUES
('CSC', 'Computer Science', 2850),
('CSE', 'Computer Science and Engineering', 2850);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_name` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_ID` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `section` varchar(7) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `year` int(4) NOT NULL,
  `course_outline` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_name`, `faculty_id`, `course_ID`, `course_name`, `section`, `semester`, `year`, `course_outline`) VALUES
('CSC301-SEC1-SUM-2021', 4255, 'CSC301', 'Finite Automata and Computability', 'SEC1', 'SUM', 2021, NULL),
('CSC311-SEC2-SUM-2021', 4255, 'CSC311', 'Computer Organization and Architecture', 'SEC2', 'SUM', 2021, NULL),
('CSE101-SEC2-SUM-2021', 4315, 'CSE101', 'Introduction to c++', 'SEC2', 'SUM', 2021, NULL),
('CSE101L-SEC2-SUM-2021', 4315, 'CSE101L', 'Introduction to c++', 'SEC2', 'SUM', 2021, NULL),
('CSE214-SEC2-SUM-2021', 4256, 'CSE214', 'Computer Organization and Architecture', 'SEC2', 'SUM', 2021, NULL),
('CSE303-SEC1-SUM-2021', 4315, 'CSE303', 'Database Mangement', 'SEC1', 'SUM', 2021, NULL),
('CSE303L-SEC1-SUM-2021', 4315, 'CSE303L', 'Database Mangement', 'SEC1', 'SUM', 2021, NULL);

--
-- Triggers `section`
--
DELIMITER $$
CREATE TRIGGER `insert_trigger` BEFORE INSERT ON `section` FOR EACH ROW SET new.section_name = CONCAT(new.course_ID,'-', new.section ,'-', new.semester,'-', new.year )
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_trigger` BEFORE UPDATE ON `section` FOR EACH ROW SET new.section_name = CONCAT(new.course_ID,'-', new.section ,'-', new.semester,'-', new.year )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `password`) VALUES
(4315, '19850305'),
(1711118, '19960912');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `password`, `student_name`, `email`) VALUES
(1710450, '19970513', 'Morsalin Amin', '1710450@iub.edu.bd'),
(1711118, '19960912', 'Arman Hossain', '1711118@iub.edu.bd'),
(1711126, '19982403', 'Faiyaz Mahmood', '1711126@iub.edu.bd'),
(1711322, '19970512', 'Mehedi Hasan', '1711322@iub.edu.bd'),
(1820223, '19970110', 'Muzayed Imam', '1820223@iub.edu.bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_head_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_sheet`
--
ALTER TABLE `grade_sheet`
  ADD PRIMARY KEY (`cssyID`);

--
-- Indexes for table `plo_table`
--
ALTER TABLE `plo_table`
  ADD PRIMARY KEY (`serial_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_name`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plo_table`
--
ALTER TABLE `plo_table`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
