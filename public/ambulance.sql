-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2018 at 10:42 AM
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
  `AmbID` varchar(30) DEFAULT NULL,
  `AmbPass` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulanceinfo`
--

INSERT INTO `ambulanceinfo` (`AmbID`, `AmbPass`) VALUES
('12345', 'ambulance');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalinfo`
--

CREATE TABLE IF NOT EXISTS `hospitalinfo` (
  `Username` varchar(30) DEFAULT NULL,
  `Password1` varchar(30) DEFAULT NULL,
  `Password2` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalinfo`
--

INSERT INTO `hospitalinfo` (`Username`, `Password1`, `Password2`) VALUES
('1111', '1111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE IF NOT EXISTS `joinus` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Mobile` decimal(10,0) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `position` varchar(10) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL,
  `CPassword` varchar(20) NOT NULL,
  UNIQUE KEY `Mobile` (`Mobile`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`FirstName`, `LastName`, `Mobile`, `Email`, `position`, `Password`, `CPassword`) VALUES
('', '', 0, '', 'driver', '', ''),
('Shekhar', 'saini', 9650890, 'sainishekhar555581@gmail.com', 'driver', '555', '555'),
('Shekhar', 'saini', 96505090, 'sainish55ekhar581@gmail.com', 'driver', '1111', '1111'),
('Shekhar', 'saini', 96508550, 'sainishekhar5581@gmail.com', 'helper', '1234', '1234'),
('Shekhar', 'saini', 9650855090, 'sainishekhar581@gmail.com', 'helper', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Mobile` varchar(30) DEFAULT NULL,
  `Email` varchar(40) NOT NULL DEFAULT '',
  `Password` varchar(40) DEFAULT NULL,
  `CPassword` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `Mobile` (`Mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`FirstName`, `LastName`, `Mobile`, `Email`, `Password`, `CPassword`) VALUES
('Tarun', 'Kethwalia', '09891198501', 'tarunkethwalia18@gmail.com', 'password', 'password'),
('Shekhar', 'saini', '74650855090', 'sainishekhar584771@gmail.com', '7474', '7474'),
('Shekhar', 'saini', '096508550', 'sainishekhar51@gmail.com', '14', '14'),
('Shekhar', 'saini', '0965085504', 'sainishekhar444581@gmail.com', '444', '444'),
('Shekhar', 'saini', '096508554', 'sainishekhar58221@gmail.com', '22', '22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
