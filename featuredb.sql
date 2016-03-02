-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2016 at 05:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `featuredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `client` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  `target` date NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `area` varchar(100) NOT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`feature_id`, `title`, `description`, `client`, `priority`, `target`, `url`, `area`) VALUES
(3, 'Feature 3', 'It is a new feature', 'Client B', 3, '2016-05-08', '', 'Claims'),
(4, 'feature 4', 'it is a new feature for client B.', 'Client B', 1, '2016-02-24', '', 'Policies'),
(8, 'feature 6N', 'it is a new feature for client A.', 'Client A', 3, '2016-03-12', '', 'Policies'),
(9, 'feature 6N', 'it is a new feature for client A.', 'Client A', 2, '2016-03-12', '', 'Policies'),
(10, 'feature 6N', 'it is a new feature for client A.', 'Client A', 1, '2016-03-25', '', 'Reports'),
(11, 'feature 7J', 'it is a new feature for client C.', 'Client C', 2, '2016-03-21', '', 'Reports'),
(12, 'Feature NRT', 'a new feature for client C', 'Client C', 1, '2016-04-15', '', 'Billing'),
(13, 'Feature HJK', 'a new feature for client B', 'Client B', 2, '2016-04-14', '', 'Policies');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('iws_user', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
