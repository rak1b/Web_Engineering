-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 09:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sid` int(3) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sid`, `fname`, `lname`, `email`, `slot`) VALUES
(111, 'Md Rakibul', 'Islam', 'rakib@gmail.com', 'Thursday'),
(121, 'Sajid', 'Khan', 'sajid94@diu.edu.bd', 'Thursday'),
(233, 'Adi', 'R', 'adi@mail.com', 'Thursday'),
(326, 'jen', 'jany', 'jeny@mail.com', 'Thursday'),
(332, 'Rifat ', 'Ara', 'rifat_ara@mail.com', 'Tuesday'),
(340, 'Rifat ', 'Rahman', 'rifat@mail.com', 'Thursday'),
(342, 'Jennifer ', 'Guens', 'jenni@mail.com', 'Monday'),
(453, 'hannah', 'h', 'admin@admin.com', 'Monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=923234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
