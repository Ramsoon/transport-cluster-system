-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 04:47 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `subject`, `message`, `date_time`) VALUES
(1, 'sadiq@gmail.com', 'DEPLOYMENT PROBLEM', 'Good afternoon sir,\r\nsir i registered for over 48 hours now and i have not been deployed still', '2018-10-07 11:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `deploiy`
--

CREATE TABLE IF NOT EXISTS `deploiy` (
  `pid` int(11) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `state` varchar(90) NOT NULL,
  `HeighestQaul` varchar(90) NOT NULL,
  `WorkExp` varchar(70) NOT NULL,
  `hopi` varchar(500) NOT NULL,
  `mresult` varchar(50) NOT NULL,
  `dremark` varchar(60) NOT NULL,
  `deploystate` varchar(50) NOT NULL,
  `seaport` varchar(50) NOT NULL,
  `deploy_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deploiy`
--

INSERT INTO `deploiy` (`pid`, `fullName`, `sex`, `state`, `HeighestQaul`, `WorkExp`, `hopi`, `mresult`, `dremark`, `deploystate`, `seaport`, `deploy_date`) VALUES
(90, 'SADIQ ABDULRAHAMAN ', 'Male', 'Abia', 'Bachelor Degree', 'NONE', 'NONE', 'Fit', 'Satisfactory', 'Lagos', 'Lagos Port Complex', '2018-10-07 11:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `pid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `oname` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `state` varchar(200) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `haddress` varchar(200) NOT NULL,
  `nok` varchar(200) NOT NULL,
  `nokaddress` varchar(200) NOT NULL,
  `HeighestQaul` varchar(100) NOT NULL,
  `CourseOff` varchar(200) NOT NULL,
  `WorkExp` varchar(100) NOT NULL,
  `Responsibility` varchar(100) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bloodgr` varchar(20) NOT NULL,
  `genotype` varchar(100) NOT NULL,
  `hopi` varchar(100) NOT NULL,
  `mresult` varchar(50) NOT NULL,
  `dremark` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`pid`, `fname`, `lname`, `oname`, `sex`, `state`, `dob`, `phonenumber`, `haddress`, `nok`, `nokaddress`, `HeighestQaul`, `CourseOff`, `WorkExp`, `Responsibility`, `height`, `weight`, `bloodgr`, `genotype`, `hopi`, `mresult`, `dremark`, `reg_date`) VALUES
(90, 'SADIQ', 'ABDULRAHAMAN', '', 'Male', '', '16/02/1992', '08169966247', 'opp gtbank, lokoja,Kogi State.', 'muhmammed okino', 'opp gtbank, lokoja.', 'Higher National Diploma', 'SLT', '4 Years', 'Administrator', '1.68', '75', 'A+', 'O+', 'NONE', 'Fit', 'Satisfactory', '2018-10-07 14:40:54'),
(1002, 'kabiru', 'Muhd', 'okino', 'Male', '', '22/09/1990', '09089786645', 'okene-lokoja, kogi satate', 'oyiza muhammed', 'okene-lokoja, kogi satate', 'Primary Certificate', 'Comp. Sci.', '3 years', 'Sailor', '2.5', '80', 'A', 'O+', 'NONE', 'Fit', 'Satisfactory', '2018-10-07 14:35:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
