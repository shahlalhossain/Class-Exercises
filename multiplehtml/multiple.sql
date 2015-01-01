-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2015 at 04:05 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl2nd`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE IF NOT EXISTS `multiple` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `hobby` text NOT NULL,
  `preferred_location` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `multiple`
--

INSERT INTO `multiple` (`id`, `full_name`, `hobby`, `preferred_location`, `created`, `modified`) VALUES
(7, 'Shahlal Hossain', 'Gardening,Reading,Dancing,Singing', 'Dhaka,Rajshahi,Chittagong,Sylhet,Khulna,Jessore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Shahlal Hossain', 'Gardening,Reading,Dancing,Singing', 'Dhaka,Rajshahi,Chittagong,Sylhet,Khulna,Jessore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'dfhasdhfjh', 'Gardening,Reading', 'Dhaka,Rajshahi,Chittagong,Sylhet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'dfhasdhfjh', 'Gardening,Reading', 'Dhaka,Rajshahi,Chittagong,Sylhet', '2015-01-01 08:26:50', '2015-01-01 14:26:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
