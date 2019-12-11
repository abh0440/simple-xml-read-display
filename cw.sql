-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 05:17 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceo`
--

CREATE TABLE `ceo` (
  `NAME` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceo`
--

INSERT INTO `ceo` (`NAME`, `Phone`, `email`) VALUES
('Leonardo Watch', '(255) 129-564-887', 'leonardo.watch@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`Name`, `Address`, `Phone`, `Website`) VALUES
('Puzzles Enterprise', 'Kathmandu, Nepal', '(125) 865-966-877', 'www.puzent.com');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dname`) VALUES
('Research and Development'),
('Marketing'),
('Human Resource'),
('Mobile Development'),
('Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `name`, `phone`, `salary`, `address`, `email`) VALUES
('emp1', 'Tony Stark', '(800) 592-654-987', '60,000', 'Kathmandu, Nepal', 'tony.stark@gmail.com'),
('emp10', 'Clark Kent', '(800) 999-654-983', '60,000', 'Maitighar, Nepal', 'kent.clark@gmail.com'),
('emp11', 'Diana Prince', '(800) 444-654-983', '60,000', 'Lokanthali, Nepal', ''),
('emp12', 'Arthur Curry', '(800) 222-654-983', '60,000', 'Chunikhel, Nepal', ''),
('emp13', 'James Howlett', '(800) 333-654-983', '60,000', 'Dhulikhel, Nepal', ''),
('emp14', 'Wade Winston Wilson', '(800) 111-654-983', '60,000', 'Boudha, Nepal', 'dead.poo@gmail.com'),
('emp15', 'Loki Odinson', '(800) 332-654-983', '60,000', 'Naikap, Nepal', ''),
('emp2', 'Barry Allen', '(800) 592-654-983', '60,000', 'Bhaktapur, Nepal', ''),
('emp3', 'Bruce Banner', '(800) 555-654-983', '60,000', 'Baneshwor, Nepal', ''),
('emp4', 'Steve Rogers', '(800) 654-654-983', '60,000', 'Koteshwor, Nepal', 'steve.rogers@gmail.com'),
('emp5', 'Thor Odinson', '(800) 585-654-983', '60,000', 'Kamladi, Nepal', ''),
('emp6', 'Carol Denvers', '(800) 666-654-983', '60,000', 'Lalitpur, Nepal', ''),
('emp7', 'Clinton Francis Bartonk', '(800) 987-654-983', '60,000', 'Durbarmarg, Nepal', 'clint.hawkeye@gmail.com'),
('emp8', 'Natasha Romanoff', '(800) 777-654-983', '60,000', 'Putalisadak, Nepal', ''),
('emp9', 'Bruce Wayne', '(800) 888-654-983', '60,000', 'Anamnagar, Nepal', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
