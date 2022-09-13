-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 11:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `fetchdata`
--

CREATE TABLE `fetchdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Number` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sel` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fetchdata`
--

INSERT INTO `fetchdata` (`id`, `name`, `email`, `Number`, `gender`, `sel`, `qualification`) VALUES
(8, 'Ayesha', 'ayesha@gmai.com', '234243', 'Male', 'Karachi', 'Matric,Intermediate'),
(13, 'Vvaqas Khan', 'waqas@gmai.com', '03442459048', 'Male', 'Peshawar', 'Matric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fetchdata`
--
ALTER TABLE `fetchdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fetchdata`
--
ALTER TABLE `fetchdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
