-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 03:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `donorsID` (
 id MEDIUMINT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (id)
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `BloodType` varchar(4) NOT NULL,
  `Age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `donors` (`First`, `Last`, `Email`, `Password`,`BloodType`,`Age`) VALUES
('Alex', 'Markules', 'alex.r.markules@wmich.edu', 'abcd1234','O','20'),
('aaa', 'aaaaa', 'abx@cyz.org', 'zzzzzzzz','O','54'),
('Tony', 'Ruiz', 'antonio.ruiz@wmich.edu', 'temp','O','21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
