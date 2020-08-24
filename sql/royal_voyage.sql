-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 16, 2020 at 02:28 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_voyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

DROP TABLE IF EXISTS `sign_up`;
CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` int(9) DEFAULT NULL,
  `passwords` varchar(34) DEFAULT NULL,
  `sex` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `name`, `birthdate`, `email`, `telephone`, `passwords`, `sex`) VALUES
(1, 'Yaya Mamoudou', '0000-00-00', 'yayamamoudou0@gmail.com', 694996019, '000', NULL),
(2, 'Yaya Mamoudou', '2020-07-01', 'yayamamoudou0@gmail.com', 67388262, '0000', 'male'),
(3, 'yaya', '2020-07-09', 'yayamamoudou0@gmail.com', 637828936, '00', 'male'),
(4, 'Kepte Imelda', '1999-08-02', 'kepteImelda@gmail.com', 656826172, '0000', 'female'),
(5, 'thali', '2020-07-02', 'tytr@h.com', 767254678, '0000', 'female'),
(6, 'Yifoue Garin ', '2005-05-21', 'garinyifoue@lastar.com', 699864844, '0000', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transactionID` int(11) NOT NULL AUTO_INCREMENT,
  `personID` int(11) NOT NULL,
  `ticketOwnerName` varchar(50) NOT NULL,
  `mode` varchar(10) DEFAULT 'classic',
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `travelDate` date NOT NULL,
  `travelTime` varchar(10) NOT NULL,
  `numberOfPlaces` int(75) DEFAULT '1',
  `ticket_billing` int(11) NOT NULL,
  `paymentNumber` int(9) DEFAULT NULL,
  PRIMARY KEY (`transactionID`,`personID`),
  KEY `personID` (`personID`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactionID`, `personID`, `ticketOwnerName`, `mode`, `departure`, `arrival`, `travelDate`, `travelTime`, `numberOfPlaces`, `ticket_billing`, `paymentNumber`) VALUES
(56, 1, 'Yaya Mamoudou', 'VIP', 'Buea', 'Limbe', '2020-07-23', '12am', 2, 5000, 694996019),
(57, 1, 'Yaya maoudou', 'VIP', 'Bamenda', 'Limbe', '2020-07-23', '7am', 2, 9000, 694996019),
(58, 1, 'Signe Ndeh Alice', 'classic', 'Buea', 'Limbe', '2020-07-24', '7am', 1, 1000, 672635828),
(59, 1, 'Kepte Imelda', 'VIP', 'Buea', 'Baffoussam', '2020-08-09', '3pm', 1, 3500, 657982746),
(60, 1, 'Yaya Mamoudou', 'classic', 'Buea', 'Bamenda', '2020-07-21', '9am', 3, 7500, 672816472),
(61, 0, 'Mamoudou', 'VIP', 'Buea', 'Douala', '2020-07-29', '7am', 2, 6000, 672886352),
(62, 2, '', 'classic', 'Limbe', 'Douala', '0000-00-00', '7am', 1, 2000, 0),
(63, 2, 'Yaya', 'classic', 'Limbe', 'Douala', '2020-07-29', '9am', 2, 4000, 652682992),
(64, 1, '', 'classic', 'Buea', 'Limbe', '0000-00-00', '7am', 1, 1000, 0),
(65, 4, 'Kepte Imelda', 'classic', 'Buea', 'Baffoussam', '2020-08-07', '9am', 1, 2000, 656837263),
(66, 4, 'Kepte Imelda', 'VIP', 'Buea', 'Yaounde', '2020-08-09', '3pm', 1, 6500, 656874567),
(67, 1, 'Yaya Mamoudou', 'VIP', 'Buea', 'Limbe', '2020-07-17', '12am', 2, 5000, 694996019),
(68, 1, 'Gillon Else', 'classic', 'Limbe', 'Buea', '2020-07-30', '9am', 1, 1000, 653378422),
(69, 1, 'Signe Ndeh', 'VIP', 'Buea', 'Limbe', '0000-00-00', '7pm', 2, 5000, 673982182),
(70, 1, '', 'VIP', 'Buea', 'Bamenda', '2020-07-16', '9am', 2, 8000, 694996019),
(71, 1, 'Garin', 'VIP', 'Buea', 'Douala', '2020-07-23', '9am', 1, 3000, 694996019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
