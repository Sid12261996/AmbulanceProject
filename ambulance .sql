-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 05:36 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ambulance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulanceinfo`
--

CREATE TABLE IF NOT EXISTS `ambulanceinfo` (
  `driverId` varchar(16) NOT NULL,
  `driverName` char(16) NOT NULL,
  `carNo` varchar(16) NOT NULL,
  `phoneNo` decimal(10,0) NOT NULL,
  UNIQUE KEY `driverId` (`driverId`,`carNo`,`phoneNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalinfo`
--

CREATE TABLE IF NOT EXISTS `hospitalinfo` (
  `hospitalName` char(20) NOT NULL,
  `hospitalPhone` decimal(10,0) NOT NULL,
  UNIQUE KEY `hospitalName` (`hospitalName`,`hospitalPhone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `fname` char(15) NOT NULL,
  `lname` char(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bdays` date NOT NULL,
  `userPhone` decimal(10,0) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `word` varchar(16) NOT NULL,
  UNIQUE KEY `userPhone` (`userPhone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `email`, `bdays`, `userPhone`, `pass`, `word`) VALUES
('Shekhar', 'saini', 'sainishekhar581@gmail.com', '2018-11-07', 9650855090, 'saini1998@', 'saini1998@');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
