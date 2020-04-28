-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 12:11 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RDN tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `eadd` varchar(50) NOT NULL,
  `psw` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`eadd`, `psw`) VALUES
('ravaljirudra717@gmail.com', '1234567'),
('niknil56@gmail.com', '1234567'),
('deepmshah113@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `name` varchar(100) CHARACTER SET cp1250 COLLATE cp1250_bin NOT NULL,
  `time` time(6) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `through` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`name`, `time`, `start`, `end`, `through`) VALUES
('RAJASTHAN', '09:10:00.000000', '2020-04-09', '2020-04-18', 'BUS'),
('DARJEELING', '07:30:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY'),
('DUBAI', '01:00:00.000000', '2020-04-09', '2020-04-14', 'AIRPLANE'),
('BALI', '07:00:00.000000', '2020-04-09', '2020-04-15', 'AIRPLANE'),
('ANDAMAN', '02:00:00.000000', '2020-04-09', '2020-04-15', 'AIRPLANE'),
('HONG KONG', '00:04:00.000000', '2020-04-09', '2020-04-15', 'RAILWAY'),
('LADAKH', '00:03:00.000000', '2020-04-09', '2020-04-17', 'BUS'),
('GOA', '04:06:00.000000', '2020-04-09', '2020-04-14', 'BUS'),
('', '15:04:00.000000', '2020-04-09', '2020-04-17', 'BUS'),
('', '15:04:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY'),
('', '15:04:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY'),
('', '15:04:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY'),
('', '15:04:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY'),
('HONGKONG', '02:35:00.000000', '2020-04-09', '2020-04-15', 'AIRPLANE'),
('', '13:02:00.000000', '2020-04-09', '2020-04-17', 'RAILWAY');

-- --------------------------------------------------------

--
-- Table structure for table `uregistration`
--

CREATE TABLE `uregistration` (
  `tourname` varchar(60) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nperson` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregistration`
--

INSERT INTO `uregistration` (`tourname`, `fname`, `lname`, `email`, `nperson`) VALUES
('RAJASTHAN', 'Yagnesh', 'Patil', 'yagneshpatil@gmail.com', 4),
('GOA', 'Viral', 'Patel', 'viralpatel@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `tourname` varchar(100) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `rate` int(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`tourname`, `fname`, `lname`, `rate`, `email`) VALUES
('RAJASTHAN', 'Yagnesh', 'Patil', 3, 'yagneshpatil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `psw`) VALUES
('Yagnesh', 'Patil', 'yagneshpatil@gmail.com', '123456'),
('Viral', 'Patel', 'viralpatel@gmail.com', '123456'),
('Harshit', 'Rana', 'harshitrana@gmail.com', '123456'),
('Vedant', 'Patel', 'vedantpatel@gmail.com', '123456'),
('Raj', 'Dattani', 'rajdattani@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
