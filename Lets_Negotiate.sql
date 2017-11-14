-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 01:09 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jridgway`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
  `BID` int(9) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ISBN` varchar(16) NOT NULL,
  `Auther` varchar(30) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` int(3) DEFAULT '0',
  `Quality` varchar(10) NOT NULL,
  PRIMARY KEY (`BID`),
  KEY `FK_Quality` (`Quality`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`BID`, `Name`, `ISBN`, `Auther`, `Picture`, `Description`, `Price`, `Quality`) VALUES
(123456789, 'Game Of Thrones', '9788496422612', 'George RR Martin', 'GOT.png', 'Mid Evil Drama', 0, ''),
(987654321, 'Game Of Thrones', '9788496422612', 'George RR Martin', 'GOT.png', 'Mid Evil Drama', 0, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Books_For_Give_Away`
--
CREATE TABLE IF NOT EXISTS `Books_For_Give_Away` (
`BID` int(9)
,`SID` int(9)
,`Book_Name` varchar(50)
,`Fname` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `Books_For_Sell`
--
CREATE TABLE IF NOT EXISTS `Books_For_Sell` (
`BID` int(9)
,`SID` int(9)
,`Name` varchar(50)
,`Fname` varchar(20)
,`Price` int(3)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `Books_For_Trade`
--
CREATE TABLE IF NOT EXISTS `Books_For_Trade` (
`BID` int(9)
,`SID` int(9)
,`Name` varchar(50)
,`Fname` varchar(20)
);
-- --------------------------------------------------------

--
-- Table structure for table `Book_Postings`
--

CREATE TABLE IF NOT EXISTS `Book_Postings` (
  `BID` int(9) NOT NULL,
  `SID` int(9) NOT NULL,
  `Sale_Type` varchar(10) NOT NULL,
  PRIMARY KEY (`BID`,`SID`,`Sale_Type`),
  KEY `FK_Sellers_SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book_Postings`
--

INSERT INTO `Book_Postings` (`BID`, `SID`, `Sale_Type`) VALUES
(123456789, 900712513, 'Trade'),
(987654321, 900712513, 'Sell');

-- --------------------------------------------------------

--
-- Table structure for table `Quality`
--

CREATE TABLE IF NOT EXISTS `Quality` (
  `Quality` varchar(10) NOT NULL,
  PRIMARY KEY (`Quality`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Quality`
--

INSERT INTO `Quality` (`Quality`) VALUES
('Fair'),
('Good'),
('Great'),
('Poor');

-- --------------------------------------------------------

--
-- Table structure for table `Sale_Type`
--

CREATE TABLE IF NOT EXISTS `Sale_Type` (
  `Sale_Type` varchar(10) NOT NULL,
  PRIMARY KEY (`Sale_Type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sale_Type`
--

INSERT INTO `Sale_Type` (`Sale_Type`) VALUES
('Give Away'),
('Sell'),
('Trade');

-- --------------------------------------------------------

--
-- Table structure for table `Sellers`
--

CREATE TABLE IF NOT EXISTS `Sellers` (
  `SID` int(9) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sellers`
--

INSERT INTO `Sellers` (`SID`, `Fname`, `Lname`, `Email`, `Username`, `Password`) VALUES
(900712513, 'Justin', 'Ridgway', 'jridgway@radford.edu', 'jridgway', 'Password1');

-- --------------------------------------------------------

--
-- Structure for view `Books_For_Give_Away`
--
DROP TABLE IF EXISTS `Books_For_Give_Away`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jridgway`@`localhost` SQL SECURITY DEFINER VIEW `Books_For_Give_Away` AS select `BP`.`BID` AS `BID`,`BP`.`SID` AS `SID`,`B`.`Name` AS `Book_Name`,`S`.`Fname` AS `Fname` from ((`Book_Postings` `BP` join `Books` `B` on((`B`.`BID` = `BP`.`BID`))) join `Sellers` `S` on((`BP`.`SID` = `S`.`SID`))) where (`BP`.`Sale_Type` = 'Give Away');

-- --------------------------------------------------------

--
-- Structure for view `Books_For_Sell`
--
DROP TABLE IF EXISTS `Books_For_Sell`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jridgway`@`localhost` SQL SECURITY DEFINER VIEW `Books_For_Sell` AS select `BP`.`BID` AS `BID`,`BP`.`SID` AS `SID`,`B`.`Name` AS `Name`,`S`.`Fname` AS `Fname`,`B`.`Price` AS `Price` from ((`Book_Postings` `BP` join `Books` `B` on((`B`.`BID` = `BP`.`BID`))) join `Sellers` `S` on((`BP`.`SID` = `S`.`SID`))) where (`BP`.`Sale_Type` = 'Sell');

-- --------------------------------------------------------

--
-- Structure for view `Books_For_Trade`
--
DROP TABLE IF EXISTS `Books_For_Trade`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jridgway`@`localhost` SQL SECURITY DEFINER VIEW `Books_For_Trade` AS select `BP`.`BID` AS `BID`,`BP`.`SID` AS `SID`,`B`.`Name` AS `Name`,`S`.`Fname` AS `Fname` from ((`Book_Postings` `BP` join `Books` `B` on((`B`.`BID` = `BP`.`BID`))) join `Sellers` `S` on((`BP`.`SID` = `S`.`SID`))) where (`BP`.`Sale_Type` = 'Trade');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
