-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2019 at 12:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `Food_ID` int(4) UNSIGNED NOT NULL,
  `FoodType` tinyint(1) NOT NULL,
  `FoodName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LunchItems`
--

CREATE TABLE `LunchItems` (
  `Food_ID` int(4) NOT NULL,
  `Type` varchar(1) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LunchOrder`
--

CREATE TABLE `LunchOrder` (
  `Pupil_ID` int(4) NOT NULL,
  `Order_ID` int(4) NOT NULL,
  `CollectionDate` date NOT NULL,
  `CollectionTime` time NOT NULL,
  `FoodPrepared` varchar(1) NOT NULL,
  `FoodCollected` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Pupil`
--

CREATE TABLE `Pupil` (
  `Pupil_ID` int(4) UNSIGNED NOT NULL,
  `PupilForeame` varchar(20) NOT NULL,
  `PupilSurname` varchar(20) NOT NULL,
  `PupilHouse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `LunchItems`
--
ALTER TABLE `LunchItems`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `LunchOrder`
--
ALTER TABLE `LunchOrder`
  ADD PRIMARY KEY (`Pupil_ID`,`Order_ID`);

--
-- Indexes for table `Pupil`
--
ALTER TABLE `Pupil`
  ADD PRIMARY KEY (`Pupil_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `Food_ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pupil`
--
ALTER TABLE `Pupil`
  MODIFY `Pupil_ID` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
