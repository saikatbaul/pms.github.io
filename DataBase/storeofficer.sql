-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 10:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `storeofficer`
--

CREATE TABLE `storeofficer` (
  `officerId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeofficer`
--

INSERT INTO `storeofficer` (`officerId`, `name`, `email`, `uname`, `password`, `gender`, `phoneNumber`, `dob`, `image`) VALUES
(5, 'Saikat Baul', 'saikat.sb67@gmail.com', 'saikat_67', '11111111', 'Male', '01718116914', '1999-11-27', '../ProfilePicture/ProfileImage.jpg'),
(9, 'Sakimul Karim Adan', 'sakimul12@gmail.com', 'sakimul_12', '77777777', 'Male', '01818123229', '1998-11-21', '../ProfilePicture/adan.jpg'),
(25, 'Chomok Islam', 'chomok@gmail.com', 'chomok', '11111111', 'Male', '01863543784', '2021-08-02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storeofficer`
--
ALTER TABLE `storeofficer`
  ADD PRIMARY KEY (`officerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storeofficer`
--
ALTER TABLE `storeofficer`
  MODIFY `officerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
