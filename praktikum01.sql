-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2022 at 01:42 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum01`
--

-- --------------------------------------------------------

--
-- Table structure for table `klasemen`
--

DROP TABLE IF EXISTS `klasemen`;
CREATE TABLE IF NOT EXISTS `klasemen` (
  `rank` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `team` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rank`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasemen`
--

INSERT INTO `klasemen` (`rank`, `name`, `points`, `team`) VALUES
(1, 'Dan', 4000, 'Team 1 Electric'),
(2, 'Reid', 3200, 'Team 2 Gas'),
(3, 'Ken', 2000, 'Team 3 Energy'),
(4, 'Varr', 6400, 'Team 4 Furniture'),
(5, 'Fett', 6500, 'Team 5 Typography'),
(6, 'Greg', 4900, 'Team 6 Comms'),
(7, 'Clob', 5000, 'Team 7 Defense'),
(8, 'Ralf', 5100, 'Team 8 Construction'),
(9, 'Cal', 3400, 'Team 9 Media'),
(10, 'Case', 4000, 'Team 10 Tech');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
