-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 04:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `admin_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'mh.tusar83@gmail.com', '12', 'tusar', 'Mh', 'Mehedi', 'Admin'),
(2, '0318402466@gmail.com', '11', 'mehedi', 'Hasan', 'Tusar', 'Moderator'),
(4, 'CEO@gmail.com', '32', 'sheikhH', 'Sheikh', 'Hasina', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `info` varchar(200) NOT NULL,
  `phn` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `c_name`, `info`, `phn`, `mail`, `addr`, `pass`) VALUES
(2, 'Olivine limited', 'We put our skilled resources with the supervision of ardit leader to ensure that you get your desirable service', 1123547891, 'olivine@olivine.com', 'Mohakhali DOHS, Dhaka 1206', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `phn` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `expertise` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `uni_name`, `cgpa`, `phn`, `address`, `user_mail`, `pass`, `expertise`) VALUES
(3, 'Kamrul Hassan', 'American International University-Bangladesh', '3.27 & 2021', 2123547891, 'Chittagong', 'kh@gmail.com', '12', 'JavaScript, Php Laravel, Nodejs,React, 4month internship as Web Developer at Flexibit It.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
