-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 10:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl_no` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl_no`, `email`, `password`) VALUES
(0, 'admin@123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `sl_no` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`sl_no`, `email`, `password`, `companyname`, `address`, `district`, `pincode`, `phno`) VALUES
(2, 'admin@123', '123', 'SHARATH C', 'MALADUJA HOUSE BATTATHUR', 'KASARAGOD', 671318, 9539255600);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `sl_no` int(5) NOT NULL,
  `comcode` int(5) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `a1` int(5) NOT NULL,
  `a2` int(5) NOT NULL,
  `a3` int(5) NOT NULL,
  `a4` int(5) NOT NULL,
  `a5` int(5) NOT NULL,
  `a11` text NOT NULL,
  `a12` text NOT NULL,
  `a13` text NOT NULL,
  `a14` text NOT NULL,
  `a21` text NOT NULL,
  `a22` text NOT NULL,
  `a23` text NOT NULL,
  `a24` text NOT NULL,
  `a31` text NOT NULL,
  `a32` text NOT NULL,
  `a33` text NOT NULL,
  `a34` text NOT NULL,
  `a41` text NOT NULL,
  `a42` text NOT NULL,
  `a43` text NOT NULL,
  `a44` text NOT NULL,
  `a51` text NOT NULL,
  `a52` text NOT NULL,
  `a53` text NOT NULL,
  `a54` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`sl_no`, `comcode`, `tname`, `q1`, `q2`, `q3`, `q4`, `q5`, `a1`, `a2`, `a3`, `a4`, `a5`, `a11`, `a12`, `a13`, `a14`, `a21`, `a22`, `a23`, `a24`, `a31`, `a32`, `a33`, `a34`, `a41`, `a42`, `a43`, `a44`, `a51`, `a52`, `a53`, `a54`) VALUES
(4, 123, 'dsfs', 'sdfsf', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 123, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 1, 1, 1, 1, 1, 'hjkh', 'hjkhjk', 'hjkhjk', 'hjk', 'hjk', 'hjk', 'jhk', 'hjk', 'hjk', 'hjk', 'jhk', 'jhk', 'jhk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'jhk');

-- --------------------------------------------------------

--
-- Table structure for table `examcompany`
--

CREATE TABLE `examcompany` (
  `sl_no` int(5) NOT NULL,
  `companyid` int(5) NOT NULL,
  `examid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examuser`
--

CREATE TABLE `examuser` (
  `sl_no` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `examid` int(5) NOT NULL,
  `jobcode` varchar(50) NOT NULL,
  `mark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `sl_no` int(5) NOT NULL,
  `jobcode` varchar(50) NOT NULL,
  `jobname` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `jobdetails` text NOT NULL,
  `companycode` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobuser`
--

CREATE TABLE `jobuser` (
  `sl_no` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `jobid` int(5) NOT NULL,
  `verify` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `sl_no` int(5) NOT NULL,
  `qname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`sl_no`, `qname`) VALUES
(1, 'bca'),
(2, 'bsc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl_no` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl_no`, `email`, `password`, `name`, `status`) VALUES
(1, 'user@123', 'user', 'jon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` int(5) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `examcompany`
--
ALTER TABLE `examcompany`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `examuser`
--
ALTER TABLE `examuser`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `examuser_ibfk_1` (`jobcode`),
  ADD KEY `examid` (`examid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `sl_no_2` (`sl_no`),
  ADD UNIQUE KEY `jobcode` (`jobcode`),
  ADD KEY `sl_no` (`sl_no`);

--
-- Indexes for table `jobuser`
--
ALTER TABLE `jobuser`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `jobuser_ibfk_1` (`jobid`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `examcompany`
--
ALTER TABLE `examcompany`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examuser`
--
ALTER TABLE `examuser`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobuser`
--
ALTER TABLE `jobuser`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examuser`
--
ALTER TABLE `examuser`
  ADD CONSTRAINT `examuser_ibfk_1` FOREIGN KEY (`jobcode`) REFERENCES `job` (`jobcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examuser_ibfk_2` FOREIGN KEY (`examid`) REFERENCES `exam` (`sl_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobuser`
--
ALTER TABLE `jobuser`
  ADD CONSTRAINT `jobuser_ibfk_1` FOREIGN KEY (`jobid`) REFERENCES `job` (`sl_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD CONSTRAINT `userdetails_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`sl_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
