-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2022 at 02:14 AM
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
-- Database: `skillsdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `canoe_kayak`
--

DROP TABLE IF EXISTS `canoe_kayak`;
CREATE TABLE IF NOT EXISTS `canoe_kayak` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id as primary key',
  `heading` varchar(50) NOT NULL COMMENT 'heading as location',
  `tripDate` date NOT NULL COMMENT 'trip date',
  `duration` int(11) NOT NULL COMMENT 'number of trip days',
  `summary` text NOT NULL COMMENT 'summary information',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='For Halifax Canoe and Kayak';

--
-- Dumping data for table `canoe_kayak`
--

INSERT INTO `canoe_kayak` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(1, 'Halifax', '2022-12-21', 4, 'Lorem ipsum dolor sit amet. Et fugiat quos aut fuga rerum et neque similique id quis delectus. Aut cumque voluptas sed animi nihil non quis Quis est corrupti cumque ut doloribus laboriosam et vero ipsam! Et mollitia facere qui incidunt voluptas est temporibus magni. Sed laudantium soluta sit voluptas placeat qui unde qui excepturi molestiae.'),
(2, 'Sydney', '2023-02-09', 3, 'Aut cumque voluptas sed animi nihil non quis Quis est corrupti cumque ut doloribus laboriosam et vero ipsam! Et mollitia facere qui incidunt voluptas est temporibus magni. Sed laudantium soluta sit voluptas placeat qui unde qui excepturi molestiae.'),
(3, 'Dartmouth', '2023-01-21', 5, 'Et mollitia facere qui incidunt voluptas est temporibus magni. Sed laudantium soluta sit voluptas placeat qui unde qui excepturi molestiae.'),
(4, 'Bedford', '2022-12-31', 4, 'Lorem ipsum dolor sit amet. Et fugiat quos aut fuga rerum et neque similique id quis delectus. Aut cumque voluptas sed animi nihil non quis Quis est corrupti cumque ut doloribus laboriosam et vero ipsam! Et mollitia facere qui incidunt voluptas est temporibus magni. Sed laudantium soluta sit voluptas placeat qui unde qui excepturi molestiae.'),
(5, 'Goodwood', '2023-03-09', 2, 'Goodwood is a suburban community of the Halifax Regional Municipality in the Canadian province of Nova Scotia.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
