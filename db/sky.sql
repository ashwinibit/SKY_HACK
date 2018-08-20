-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 01:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sky`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `state`) VALUES
('admin', 'bit123', 'admin', 'active'),
('admin1', 'bit123', 'admin', 'active'),
('subadmin', 'bit123', 'subadmin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `regestration`
--

CREATE TABLE `regestration` (
  `r_id` int(255) NOT NULL,
  `name` char(255) NOT NULL,
  `u_id` int(24) DEFAULT NULL,
  `gender` char(255) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `S_ID` varchar(255) NOT NULL,
  `S_Name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `elig` text NOT NULL,
  `benifits` text NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`S_ID`, `S_Name`, `area`, `elig`, `benifits`, `department`, `status`) VALUES
('abc', 'ssss', 'sssxzc', 'zsfxfgvccnnbcgfc', 'hfaksalf;zxcz', 'dddddd', 'active'),
('xcdcx', 'zcdfs', 'zdfzffzdfz', 'zszfbccbnbvxxz', 'zfcbfghf', 'dzzfdsdz', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE `subadmin` (
  `name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`name`, `email`, `mobile_no`, `username`, `password`, `department`) VALUES
('Risha bada Gupta', 'rishagupta7136@gmail.com', 0, 'dsfsdffsdfd', '07587 296756', 'Health'),
('d', 's', 2, 'zx', 'zz', 'xx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `regestration`
--
ALTER TABLE `regestration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regestration`
--
ALTER TABLE `regestration`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
