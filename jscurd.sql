-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2019 at 04:54 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jscurd`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'development'),
(2, 'UI-Designer'),
(3, 'QA'),
(4, 'Documention'),
(5, 'Graphics-Designer');

-- --------------------------------------------------------

--
-- Table structure for table `dept_emp`
--

CREATE TABLE `dept_emp` (
  `dept_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_emp`
--

INSERT INTO `dept_emp` (`dept_id`, `emp_id`, `from_date`, `to_date`) VALUES
(1, 1, '2019-10-01 20:58:15', NULL),
(1, 2, '2019-10-01 21:11:21', NULL),
(1, 3, '2019-10-01 21:12:33', NULL),
(1, 4, '2019-10-01 21:13:11', NULL),
(1, 8, '2019-10-01 21:21:49', NULL),
(1, 9, '2019-10-01 21:22:31', NULL),
(1, 11, '2019-10-02 04:26:55', NULL),
(2, 6, '2019-10-01 21:20:05', NULL),
(2, 10, '2019-10-01 21:39:26', NULL),
(3, 7, '2019-10-01 21:21:00', NULL),
(5, 5, '2019-10-01 21:14:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_manager`
--

CREATE TABLE `dept_manager` (
  `dept_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `join_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `first_name`, `last_name`, `dob`, `gender`, `join_date`) VALUES
(1, 'Imran', 'Malik', '2019-02-08 00:00:00', 'M', '2019-10-23 00:00:00'),
(2, 'Niraj', 'Kumar', '2019-08-14 00:00:00', 'M', '2019-10-31 00:00:00'),
(3, 'Sunny', 'Jha', '2019-01-12 00:00:00', 'M', '2019-10-16 00:00:00'),
(4, 'Ram ', 'kumar', '2019-08-09 00:00:00', 'M', '2019-10-29 00:00:00'),
(5, 'Vivek', 'Neggi', '2019-06-08 00:00:00', 'M', '2019-10-29 00:00:00'),
(6, 'Chetan', 'Kumar', '2019-10-02 00:00:00', 'M', '2019-10-15 00:00:00'),
(7, 'Deepak', 'kumar', '2019-10-10 00:00:00', 'M', '2019-10-29 00:00:00'),
(8, 'Avnish', 'Saini', '2019-10-15 00:00:00', 'M', '2019-10-28 00:00:00'),
(9, 'Jyoti', 'Ranjan', '2019-10-10 00:00:00', 'M', '2019-10-01 00:00:00'),
(10, 'aa', 'aa', '2019-10-09 00:00:00', 'M', '2019-10-16 00:00:00'),
(11, 'sunny', 'jha', '2019-10-08 00:00:00', 'M', '2019-10-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `dept_manager` varchar(30) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `dob`, `gender`, `department`, `dept_manager`, `salary`, `join_date`) VALUES
(16, 'ramss', '2019-02-12', 'Female', 'developer', 'new  ', 45, '2019-08-09'),
(17, 'ram1111', '2019-09-07', 'Male', 'developer', 'new      ', 147373, '2019-02-03'),
(19, 'Name', '2015-12-12', 'Female', 'Department', 'new ', 12121212, '0210-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `emp_id` int(11) NOT NULL,
  `salary_amount` int(11) NOT NULL,
  `from_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`emp_id`, `salary_amount`, `from_date`, `to_date`) VALUES
(1, 15000, '2019-10-01 20:58:15', NULL),
(2, 15000, '2019-10-01 21:11:21', NULL),
(3, 15000, '2019-10-01 21:12:33', NULL),
(4, 15000, '2019-10-01 21:13:11', NULL),
(5, 15000, '2019-10-01 21:14:01', NULL),
(6, 15000, '2019-10-01 21:20:05', NULL),
(7, 15000, '2019-10-01 21:21:00', NULL),
(8, 15000, '2019-10-01 21:21:49', NULL),
(9, 15000, '2019-10-01 21:22:31', NULL),
(10, 22, '2019-10-01 21:39:26', NULL),
(11, 56565, '2019-10-02 04:26:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `emp_id` int(11) NOT NULL,
  `title_content` int(11) NOT NULL,
  `from_date` int(11) NOT NULL,
  `to_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD PRIMARY KEY (`dept_id`,`emp_id`);

--
-- Indexes for table `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD PRIMARY KEY (`dept_id`,`emp_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
