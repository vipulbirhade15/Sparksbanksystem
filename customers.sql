-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 09:20 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customersdata`
--

CREATE TABLE `customersdata` (
  `id` int(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Account no.` int(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customersdata`
--

INSERT INTO `customersdata` (`id`, `Name`, `Account no.`, `Email`, `Balance`) VALUES
(1, 'Divya Arora', 7001, 'arorad@gmail.com', 19500),
(2, 'sneha patil', 7002, 'sp@gmail.com', 24000),
(3, 'pulkit sharma', 7003, 'pulkit@gmail.com', 21000),
(4, 'kaushal naik', 7004, 'naikkaushal@gmail.com', 24500),
(5, 'Siya mehra', 7005, 'sm@gmail.com', 8000),
(6, 'jiya jagdale', 7006, 'j2@gmail.com', 10000),
(7, 'soham patil', 7007, 'patil@gmail.com', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sno` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `Balance` int(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sno`, `sender`, `reciever`, `Balance`, `datetime`) VALUES
(3, 'sneha patil', 'Divya Arora', 500, '0000-00-00 00:00:00'),
(4, 'kaushal naik', 'Siya mehra', 1000, '2021-06-10 07:12:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customersdata`
--
ALTER TABLE `customersdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customersdata`
--
ALTER TABLE `customersdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
