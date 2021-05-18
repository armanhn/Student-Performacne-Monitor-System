-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 08:14 PM
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
('CSE303L', 'Database Mangement', 1, 'CSE'),
('CSE316', 'Data Communication and Computer Networks', 3, 'CSE'),
('CSE316L', 'Data Communication and Computer Networks', 1, 'CSE');

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
  `total_marks` float NOT NULL,
  `grade` varchar(3) NOT NULL,
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

INSERT INTO `grade_sheet` (`cssyID`, `section_name`, `serial_id`, `id`, `quiz`, `mid`, `final`, `attendance`, `project`, `assignment`, `total_marks`, `grade`, `CLO1`, `CLO2`, `CLO3`, `CLO4`, `CLO5`, `CLO6`) VALUES
('CSE101-SEC2-SUM-2021-1710450', 'CSE101-SEC2-SUM-2021', 28, 1710450, 10.5, 16, 35, 8.5, 15, NULL, 85, 'B+', 'Y', 'Y', 'Y', 'Y', 'N', 'Y'),
('CSE101-SEC2-SUM-2021-1711118', 'CSE101-SEC2-SUM-2021', 28, 1711118, 10, 20.5, 30.5, 8.5, 20, NULL, 89.5, 'B+', 'Y', 'Y', 'Y', 'N', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1711322', 'CSE101-SEC2-SUM-2021', 28, 1711322, 14, 25, 40, 10, 15, NULL, 104, 'A-', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1711619', 'CSE101-SEC2-SUM-2021', 28, 1711619, 0, 21, 27.2, 7, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE101-SEC2-SUM-2021-1711729', 'CSE101-SEC2-SUM-2021', 28, 1711729, 0, 4.6, 14.4, 5, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1762565', 'CSE101-SEC2-SUM-2021', 28, 1762565, 0, 12.8, 20, 5, 0, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1773384', 'CSE101-SEC2-SUM-2021', 28, 1773384, 0, 6, 12.4, 6, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1789481', 'CSE101-SEC2-SUM-2021', 28, 1789481, 0, 17.4, 17.2, 5, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1834433', 'CSE101-SEC2-SUM-2021', 28, 1834433, 0, 12.4, 17.6, 7, 0, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1835298', 'CSE101-SEC2-SUM-2021', 28, 1835298, 0, 9.4, 22.4, 8, 0, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1835874', 'CSE101-SEC2-SUM-2021', 28, 1835874, 0, 7, 23.6, 6, 0, 0, 0, 'B', 'N', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE101-SEC2-SUM-2021-1842333', 'CSE101-SEC2-SUM-2021', 28, 1842333, 0, 17.6, 27.6, 7, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1845457', 'CSE101-SEC2-SUM-2021', 28, 1845457, 0, 21.2, 22, 9, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1849651', 'CSE101-SEC2-SUM-2021', 28, 1849651, 0, 11.8, 28, 6, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1855787', 'CSE101-SEC2-SUM-2021', 28, 1855787, 0, 21.2, 20.4, 7, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1863951', 'CSE101-SEC2-SUM-2021', 28, 1863951, 0, 8.8, 20.4, 3, 0, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1868128', 'CSE101-SEC2-SUM-2021', 28, 1868128, 0, 15.8, 22, 5, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1872128', 'CSE101-SEC2-SUM-2021', 28, 1872128, 0, 19.6, 22, 3, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1873255', 'CSE101-SEC2-SUM-2021', 28, 1873255, 0, 10.8, 24.8, 6, 0, 0, 0, 'B', 'N', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1877262', 'CSE101-SEC2-SUM-2021', 28, 1877262, 0, 14, 15.2, 9, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1886577', 'CSE101-SEC2-SUM-2021', 28, 1886577, 0, 10.6, 23.2, 8, 0, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1887973', 'CSE101-SEC2-SUM-2021', 28, 1887973, 0, 19, 18.4, 6, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE101-SEC2-SUM-2021-1892367', 'CSE101-SEC2-SUM-2021', 28, 1892367, 0, 1.2, 15.2, 7, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE101-SEC2-SUM-2021-1893863', 'CSE101-SEC2-SUM-2021', 28, 1893863, 0, 25.6, 25.2, 8, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE101-SEC2-SUM-2021-1898334', 'CSE101-SEC2-SUM-2021', 28, 1898334, 0, 21.8, 24.8, 10, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1710450', 'CSE214-SEC2-SUM-2021', 29, 1710450, 15, 30, 38, NULL, NULL, 10, 93, 'A', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE214-SEC2-SUM-2021-1711118', 'CSE214-SEC2-SUM-2021', 29, 1711118, 10.5, 20.5, 35, NULL, NULL, 10, 76, 'B+', 'Y', 'Y', 'N', 'N', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1711322', 'CSE214-SEC2-SUM-2021', 29, 1711322, 14, 25, 35, NULL, NULL, 10, 84, 'A-', 'Y', 'Y', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1712983', 'CSE214-SEC2-SUM-2021', 29, 1712983, 0, 11.6, 23.6, 7, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1715578', 'CSE214-SEC2-SUM-2021', 29, 1715578, 0, 16.8, 22, 5, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'N', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1718437', 'CSE214-SEC2-SUM-2021', 29, 1718437, 0, 14.6, 26.8, 8, 0, 0, 0, 'B+', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1728139', 'CSE214-SEC2-SUM-2021', 29, 1728139, 0, 4.6, 14.4, 5, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1728439', 'CSE214-SEC2-SUM-2021', 29, 1728439, 0, 19.6, 26.8, 8, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'N', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1731817', 'CSE214-SEC2-SUM-2021', 29, 1731817, 0, 16.4, 20.8, 5, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'N', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1731852', 'CSE214-SEC2-SUM-2021', 29, 1731852, 0, 7, 22.4, 9, 0, 0, 0, 'B+', 'N', 'Y', 'N', 'N', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1736425', 'CSE214-SEC2-SUM-2021', 29, 1736425, 0, 17, 24.4, 9, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1737824', 'CSE214-SEC2-SUM-2021', 29, 1737824, 0, 21, 27.2, 7, 0, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1742892', 'CSE214-SEC2-SUM-2021', 29, 1742892, 0, 21.4, 22.8, 7, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1745484', 'CSE214-SEC2-SUM-2021', 29, 1745484, 0, 10.6, 27.6, 5, 0, 0, 0, 'B+', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE214-SEC2-SUM-2021-1752538', 'CSE214-SEC2-SUM-2021', 29, 1752538, 0, 24.2, 18.8, 8, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1754681', 'CSE214-SEC2-SUM-2021', 29, 1754681, 0, 13, 21.6, 7, 0, 0, 0, 'B+', 'Y', 'N', 'N', 'N', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1766156', 'CSE214-SEC2-SUM-2021', 29, 1766156, 0, 4, 0, 4, 0, 0, 0, 'B+', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1766176', 'CSE214-SEC2-SUM-2021', 29, 1766176, 0, 7.4, 24, 7, 0, 0, 0, 'B', 'N', 'N', 'Y', 'N', 'N', 'Y'),
('CSE214-SEC2-SUM-2021-1769463', 'CSE214-SEC2-SUM-2021', 29, 1769463, 0, 6.6, 22.4, 5, 0, 0, 0, 'B', 'N', 'N', 'N', 'Y', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1772947', 'CSE214-SEC2-SUM-2021', 29, 1772947, 0, 14.4, 14.4, 8, 0, 0, 0, 'B', 'Y', 'Y', 'N', 'N', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1784847', 'CSE214-SEC2-SUM-2021', 29, 1784847, 0, 18.4, 24.8, 9, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE214-SEC2-SUM-2021-1788337', 'CSE214-SEC2-SUM-2021', 29, 1788337, 0, 2, 4.8, 4, 0, 0, 0, 'B+', 'N', 'N', 'N', 'Y', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1791753', 'CSE214-SEC2-SUM-2021', 29, 1791753, 0, 3.8, 0, 9, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE214-SEC2-SUM-2021-1797789', 'CSE214-SEC2-SUM-2021', 29, 1797789, 0, 17.4, 17.2, 6, 0, 0, 0, 'B+', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE214-SEC2-SUM-2021-1798883', 'CSE214-SEC2-SUM-2021', 29, 1798883, 0, 20.4, 21.6, 5, 0, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1614733', 'CSE303-SEC1-SUM-2021', 30, 1614733, 0, 3.4, 23.2, 0, 23, 0, 0, 'B+', 'N', 'Y', 'N', 'N', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1634352', 'CSE303-SEC1-SUM-2021', 30, 1634352, 0, 11.8, 17.2, 0, 23, 0, 0, 'B+', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1646434', 'CSE303-SEC1-SUM-2021', 30, 1646434, 0, 7.2, 24, 0, 12, 0, 0, 'B', 'N', 'Y', 'Y', 'N', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1654432', 'CSE303-SEC1-SUM-2021', 30, 1654432, 0, 9, 23.2, 0, 12, 0, 0, 'B+', 'N', 'Y', 'Y', 'N', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1661638', 'CSE303-SEC1-SUM-2021', 30, 1661638, 0, 12, 18, 0, 12, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1665491', 'CSE303-SEC1-SUM-2021', 30, 1665491, 0, 0, 18.4, 0, 10, 0, 0, 'C', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1678812', 'CSE303-SEC1-SUM-2021', 30, 1678812, 0, 17.4, 18.8, 0, 25, 0, 0, 'B', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1686272', 'CSE303-SEC1-SUM-2021', 30, 1686272, 0, 9, 18.8, 0, 20, 0, 0, 'B', 'Y', 'N', 'N', 'Y', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1710450', 'CSE303-SEC1-SUM-2021', 30, 1710450, 15, 30, 40, NULL, 20, NULL, 105, 'A', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1711118', 'CSE303-SEC1-SUM-2021', 30, 1711118, 12, 28, 37, NULL, 20, NULL, 97, 'A-', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1711322', 'CSE303-SEC1-SUM-2021', 30, 1711322, NULL, 20.5, 30.5, NULL, 17, NULL, 68, 'B', 'Y', 'Y', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1728125', 'CSE303-SEC1-SUM-2021', 30, 1728125, 0, 2.8, 22, 0, 27, 0, 0, 'C+', 'N', 'Y', 'N', 'N', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1729416', 'CSE303-SEC1-SUM-2021', 30, 1729416, 0, 2.8, 23.2, 0, 12, 0, 0, 'B+', 'N', 'Y', 'Y', 'N', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1743714', 'CSE303-SEC1-SUM-2021', 30, 1743714, 0, 9.6, 0, 0, 0, 0, 0, 'F', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1747457', 'CSE303-SEC1-SUM-2021', 30, 1747457, 0, 6.6, 15.6, 0, 11, 0, 0, 'C+', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1759787', 'CSE303-SEC1-SUM-2021', 30, 1759787, 0, 11.4, 23.2, 0, 23, 0, 0, 'B+', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1763881', 'CSE303-SEC1-SUM-2021', 30, 1763881, 0, 14.2, 18.8, 0, 19, 0, 0, 'C+', 'Y', 'Y', 'N', 'Y', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1768463', 'CSE303-SEC1-SUM-2021', 30, 1768463, 0, 12.2, 24, 0, 11, 0, 0, 'B+', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1773277', 'CSE303-SEC1-SUM-2021', 30, 1773277, 0, 12.2, 19.2, 0, 25, 0, 0, 'B', 'N', 'Y', 'N', 'N', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1778274', 'CSE303-SEC1-SUM-2021', 30, 1778274, 0, 7.8, 16.8, 0, 11, 0, 0, 'C', 'N', 'Y', 'N', 'N', 'Y', 'N'),
('CSE303-SEC1-SUM-2021-1781682', 'CSE303-SEC1-SUM-2021', 30, 1781682, 0, 8.4, 0, 0, 0, 0, 0, 'F', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1783512', 'CSE303-SEC1-SUM-2021', 30, 1783512, 0, 14.6, 18.4, 0, 11, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE303-SEC1-SUM-2021-1795656', 'CSE303-SEC1-SUM-2021', 30, 1795656, 0, 9.2, 18, 0, 27, 0, 0, 'B', 'N', 'Y', 'Y', 'N', 'Y', 'Y'),
('CSE303-SEC1-SUM-2021-1797625', 'CSE303-SEC1-SUM-2021', 30, 1797625, 0, 11.4, 22.4, 0, 11, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE316-SEC1-SUM-2021-1416455', 'CSE316-SEC1-SUM-2021', 31, 1416455, 0, 8.8, 26, 0, 24, 0, 0, 'B', 'N', 'Y', 'Y', 'Y', 'Y', 'N'),
('CSE316-SEC1-SUM-2021-1528882', 'CSE316-SEC1-SUM-2021', 31, 1528882, 0, 5.2, 12, 0, 6, 0, 0, 'B', 'N', 'N', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1579288', 'CSE316-SEC1-SUM-2021', 31, 1579288, 0, 7, 18.4, 0, 23, 0, 0, 'B', 'N', 'N', 'Y', 'Y', 'N', 'Y'),
('CSE316-SEC1-SUM-2021-1612985', 'CSE316-SEC1-SUM-2021', 31, 1612985, 0, 8.4, 20, 0, 12, 0, 0, 'B+', 'N', 'Y', 'Y', 'Y', 'Y', 'N'),
('CSE316-SEC1-SUM-2021-1613273', 'CSE316-SEC1-SUM-2021', 31, 1613273, 0, 4, 15.2, 0, 12, 0, 0, 'B', 'N', 'Y', 'N', 'Y', 'N', 'Y'),
('CSE316-SEC1-SUM-2021-1616161', 'CSE316-SEC1-SUM-2021', 31, 1616161, 0, 13.8, 20, 0, 0, 0, 0, 'C-', 'Y', 'Y', 'N', 'N', 'Y', 'N'),
('CSE316-SEC1-SUM-2021-1622731', 'CSE316-SEC1-SUM-2021', 31, 1622731, 0, 0, 0, 0, 0, 0, 0, 'C', 'N', 'N', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1623112', 'CSE316-SEC1-SUM-2021', 31, 1623112, 0, 9.8, 18, 0, 12, 0, 0, 'C', 'N', 'Y', 'N', 'Y', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1625654', 'CSE316-SEC1-SUM-2021', 31, 1625654, 0, 8, 12.8, 0, 24, 0, 0, 'B', 'N', 'N', 'N', 'Y', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1633554', 'CSE316-SEC1-SUM-2021', 31, 1633554, 0, 6, 0, 0, 0, 0, 0, 'B', 'N', 'Y', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1641252', 'CSE316-SEC1-SUM-2021', 31, 1641252, 0, 24.8, 24.8, 0, 34, 0, 0, 'C+', 'Y', 'Y', 'Y', 'Y', 'N', 'N'),
('CSE316-SEC1-SUM-2021-1645333', 'CSE316-SEC1-SUM-2021', 31, 1645333, 0, 17.8, 20.4, 0, 23, 0, 0, 'B+', 'Y', 'Y', 'N', 'Y', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1653725', 'CSE316-SEC1-SUM-2021', 31, 1653725, 0, 0, 0, 0, 0, 0, 0, 'B+', 'N', 'N', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1662147', 'CSE316-SEC1-SUM-2021', 31, 1662147, 0, 5, 9.2, 0, 9, 0, 0, 'B', 'N', 'N', 'N', 'N', 'Y', 'N'),
('CSE316-SEC1-SUM-2021-1665555', 'CSE316-SEC1-SUM-2021', 31, 1665555, 0, 6.6, 16.8, 0, 27, 0, 0, 'C+', 'N', 'Y', 'N', 'Y', 'N', 'Y'),
('CSE316-SEC1-SUM-2021-1668314', 'CSE316-SEC1-SUM-2021', 31, 1668314, 0, 0, 24, 0, 11, 0, 0, 'C+', 'N', 'N', 'Y', 'N', 'N', 'N'),
('CSE316-SEC1-SUM-2021-1669953', 'CSE316-SEC1-SUM-2021', 31, 1669953, 0, 1, 0, 0, 0, 0, 0, 'B', 'N', 'N', 'N', 'N', 'N', 'N'),
('CSE316-SEC1-SUM-2021-1674181', 'CSE316-SEC1-SUM-2021', 31, 1674181, 0, 7.6, 14, 0, 11, 0, 0, 'C-', 'N', 'N', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1691291', 'CSE316-SEC1-SUM-2021', 31, 1691291, 0, 5.8, 21.6, 0, 30, 0, 0, 'B-', 'N', 'N', 'N', 'Y', 'N', 'Y'),
('CSE316-SEC1-SUM-2021-1691483', 'CSE316-SEC1-SUM-2021', 31, 1691483, 0, 7, 12, 0, 6, 0, 0, 'C', 'N', 'Y', 'N', 'N', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1695837', 'CSE316-SEC1-SUM-2021', 31, 1695837, 0, 11, 21.2, 0, 24, 0, 0, 'B', 'Y', 'N', 'Y', 'Y', 'Y', 'Y'),
('CSE316-SEC1-SUM-2021-1696326', 'CSE316-SEC1-SUM-2021', 31, 1696326, 0, 7.2, 24, 0, 12, 0, 0, 'B', 'N', 'Y', 'Y', 'Y', 'N', 'N');

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
(28, 'CSE101-SEC2-SUM-2021', 'CLO1,CLO2', 'CLO3', 'CLO4', 'CLO5', 'CLO6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'CSE214-SEC2-SUM-2021', 'CLO1', 'CLO2', 'CLO3', 'CLO4', 'CLO5', 'CLO6', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'CSE303-SEC1-SUM-2021', NULL, NULL, NULL, 'CLO1', 'CLO2', 'CLO3', 'CLO4', 'CLO5', 'CLO6', NULL, NULL, NULL, NULL),
(31, 'CSE316-SEC1-SUM-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CLO1', 'CLO2', 'CLO3', 'CLO4', 'CLO5', 'CLO6');

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
('CSE303L-SEC1-SUM-2021', 4315, 'CSE303L', 'Database Mangement', 'SEC1', 'SUM', 2021, NULL),
('CSE316-SEC1-SUM-2021', 4256, 'CSE316', 'Data Communication and Computer Networks', 'SEC1', 'SUM', 2021, NULL),
('CSE316L-SEC1-SUM-2021', 4256, 'CSE316L', 'Data Communication and Computer Networks', 'SEC1', 'SUM', 2021, NULL);

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
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
