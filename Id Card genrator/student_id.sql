-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2019 at 01:34 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(50) NOT NULL AUTO_INCREMENT,
  `profile` text NOT NULL,
  `name` text NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `class` text NOT NULL,
  `u_id` int(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `profile`, `name`, `f_name`, `m_name`, `dob`, `mobile`, `class`, `u_id`) VALUES
(15, '5c79345bb8f88.jpg', 'asd', 'asd', 'asdd', '2019-02-25', 'asdsa', 'III', 2240),
(16, '5c7934a7da2f7.jpg', 'Vvaqas Khan', 'Niaz', 'Nil', '2019-03-11', '123', 'III', 4664);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
