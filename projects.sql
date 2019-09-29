-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2013 at 12:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `Name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `guide` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `PL` varchar(20) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `review` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Name`, `id`, `author`, `guide`, `year`, `PL`, `domain`, `status`, `review`) VALUES
('Library Management', 1, 'Sunil Kumar', 'Srikanth H R', 2001, 'HTML, CSS, JavaScrip', 'Web', 0, 1),
('Timetable Generation', 2, 'Vasudev', 'Sathyam Vellal', 2010, 'Python', 'GUI based Desktop Application', 0, 0),
('Management System for Academic Projects', 3, 'Somashekhar', 'Phalachandra', 2008, 'HTML5, CSS3, Javascr', 'Web', 1, 1),
('Faculty Adviser Automation', 4, 'Shivaraj', 'N S Kumar', 2009, 'Java', 'GUI based Desktop Application', 1, 1),
('Sparse Matrix', 5, 'Niranjan', 'H B Mahesh', 2011, 'C', 'Data-Structures', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `name` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `ta` varchar(200) NOT NULL,
  `grant1` tinyint(1) NOT NULL,
  PRIMARY KEY (`name`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `id`, `ta`, `grant1`) VALUES
('1pi10cs116', 1, 'hello', 1),
('1pi10cs116', 3, 'i want it', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usn` varchar(10) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usn`, `passwd`, `email`, `usertype`, `DOB`, `gender`, `phone`) VALUES
('1pi10cs116', '787c302218a2e9581a917d3d7a7ac368', '1pi10cs116@gmail.com', 'user', '2013-04-09', 1, '+919445656432'),
('1pi10cs115', '47e904d1c52e9eb66f584a17aa0f247f', '1pi10cs115@yahoo.com', 'user', '2004-06-09', 0, '+919445890876'),
('1pi10cs105', 'f6c02f372fb1fb4f03f6b54c122de449', '1pi10cs105@yahoo.com', 'user', '2003-12-31', 0, '+919445899990'),
('1pi10cs089', 'ec4f2d42f39101b65c43293a4ac0869c', '1pi10cs089@gmail.com', 'user', '2005-03-26', 1, '+919499956432'),
('1pi10cs113', '265e1a8386bfab6432aaf414da94aa3b', '1pi10cs113@gmail.com', 'user', '2004-05-11', 0, '+917769656432'),
('8147555550', 'c9ee7456f835593ff0dbf825fe68b688', 'profbadrip@gmail.com', 'admin', '2003-07-15', 1, '+918147555550'),
('1pi10cs117', 'c2f5032a3dc60d3731771429c560e8a1', '1pi10cs117@gmail.com', 'user', '2002-01-15', 1, '8678976543'),
('1pi10cs078', 'd41d8cd98f00b204e9800998ecf8427e', '1pi10cs078@hotmail.com', 'user', '2013-03-05', 0, '+91 990089900'),
('1pi10cs118', 'd41d8cd98f00b204e9800998ecf8427e', '1pi10cs118@rediff.com', 'user', '2007-03-06', 0, '+91 964399008'),
('1pi10cs119', 'd41d8cd98f00b204e9800998ecf8427e', '1pi10cs119@gmail.com', 'user', '2012-04-04', 1, '+91 776006789'),
('1pi10cs001', 'd41d8cd98f00b204e9800998ecf8427e', '1pi10cs001@yahoo.com', 'user', '1992-03-25', 0, '+918147566458'),
('1pi10cs002', 'd41d8cd98f00b204e9800998ecf8427e', '1pi10cs002@gmail.com', 'user', '1993-03-03', 1, '+91 815634485'),
('1pi10cs076', '1d03b7e3f78f94d41ab9074ad5d47651', '1pi10cs076@yahoo.com', 'user', '1992-09-17', 1, '+918147566489'),
('1pi10cs080', '0dd4b9008b9a1d7c1a35ed2b4a5bd66a', '1pi10cs080@gmail.com', 'user', '1992-03-03', 0, '+918147566978');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
