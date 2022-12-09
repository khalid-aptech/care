-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 01:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PHONE` bigint(11) NOT NULL,
  `DATE` date NOT NULL,
  `SPECIALIZATION` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `NAME`, `EMAIL`, `PHONE`, `DATE`, `SPECIALIZATION`, `CITY`, `MESSAGE`) VALUES
(13, 'ZAIN', 'mdotkhalid4@gmail.com', 3012949584, '0000-00-00', 'Psychological', 'karachi', 'HIGH FEVERR'),
(14, 'ZAIN', 'mdotkhalid4@gmail.com', 3012949584, '0000-00-00', 'Psychological', 'karachi', 'HIGH FEVERR'),
(15, 'ZAIN', 'mdotkhalid4@gmail.com', 3012949584, '0000-00-00', 'Psychological', 'karachi', 'HIGH FEVERR'),
(16, 'ZAIN', 'mdotkhalid4@gmail.com', 3012949584, '0000-00-00', 'Psychological', 'karachi', 'HIGH FEVERR'),
(17, 'ZAIN', 'mdotkhalid4@gmail.com', 3012949584, '0000-00-00', 'Psychological', 'karachi', 'HIGH FEVERR'),
(18, 'Kareem Decker', 'redyw@mailinator.com', 1, '0000-00-00', 'Departments', 'lahore', 'Sint tempora irure u'),
(19, 'Hayes Trujillo', 'nidos@mailinator.com', 1, '0000-00-00', 'Diagnostic', 'karachi', 'Eu aperiam enim volu'),
(20, 'Richard Bryan', 'nugenylebo@mailinator.com', 1, '0000-00-00', 'Diagnostic', 'lahore', 'Quia dolor et eu sun'),
(21, 'Quincy Crosby', 'vaqehokejy@mailinator.com', 1, '0000-00-00', 'Diagnostic', 'lahore', 'Culpa aspernatur po'),
(22, 'Adara Estrada', 'rixe@mailinator.com', 1, '0000-00-00', 'Psychological', 'lahore', 'Quis doloribus exerc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `message`, `phone`) VALUES
(1, 'Nash Gates', 'juzokotic@mailinator.com', 'Laudantium vero sed', 1),
(2, 'Nash Gates', 'juzokotic@mailinator.com', 'Laudantium vero sed', 1),
(3, 'ZAIN', 'donerecapu@mailinator.com', 'I NEEEED HELP ON URGENT BASIS', 1),
(4, 'Holmes Vaughan', 'toloze@mailinator.com', 'Dolores unde magna l', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DID` int(11) NOT NULL,
  `D-NAME` varchar(30) NOT NULL,
  `PROFILE` varchar(67) NOT NULL,
  `SPLST` varchar(60) NOT NULL,
  `CITY` varchar(80) NOT NULL,
  `TIMING` int(6) NOT NULL,
  `A-DAYS` varchar(70) NOT NULL,
  `ADDRESS` varchar(80) NOT NULL,
  `ROLE` varchar(70) NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DID`, `D-NAME`, `PROFILE`, `SPLST`, `CITY`, `TIMING`, `A-DAYS`, `ADDRESS`, `ROLE`, `PASSWORD`) VALUES
(10, 'zain', 'image', 'abc', 'sad', 0, '', 'gsfdg', 'doctor', NULL),
(11, 'tyboxafic@mailinator.com', 'image', '', '', 1995, '', 'Eligendi sed ex volu', 'doctor', NULL),
(12, 'wujitira@mailinator.com', 'image', '', '', 1995, '', 'Officia explicabo A', 'doctor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `P-NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `PASSWORD` varchar(80) NOT NULL,
  `PHONE` int(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `P-NAME`, `EMAIL`, `PASSWORD`, `PHONE`) VALUES
(5, 'zarlish', 'patient@patient.com', '123', 2147483647),
(6, 'Jocelyn Hammond', 'poxocos@mailinator.com', 'Pa$$w0rd!', 1),
(7, 'Oprah Medina', 'vifugaz@mailinator.com', 'Pa$$w0rd!', 1),
(8, 'Kelly Gilbert', 'wigebu@mailinator.com', 'Pa$$w0rd!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(67) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `IMAGE` varchar(80) NOT NULL,
  `ROLE` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `IMAGE`, `ROLE`) VALUES
(16, 'Khalid', 'admin@admin.com', 'admin123', 'hair.JPG', 'admin'),
(17, 'qyfamiq@mailinator.com', 'jepi@mailinator.com', 'Aliqua Quas quaerat', 'hair.JPG', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
