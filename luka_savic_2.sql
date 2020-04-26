-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 11:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE luka_savic_2;
USE luka_savic_2;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luka_savic_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `zaposlenici`
--

CREATE TABLE `zaposlenici` (
  `ID_zaposlenika` int(11) NOT NULL,
  `Ime_zaposlenika` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Prezime_zaposlenika` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Datum_rodenja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zaposlenici`
--

INSERT INTO `zaposlenici` (`ID_zaposlenika`, `Ime_zaposlenika`, `Prezime_zaposlenika`, `Datum_rodenja`) VALUES
(1, 'Luka', 'SaviÄ‡', '2001-10-24'),
(2, 'Pero', 'PeriÄ‡', '2003-06-12'),
(3, 'Iva', 'IviÄ‡', '2000-03-21'),
(4, 'Maja', 'MajiÄ‡', '1998-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zaposlenici`
--
ALTER TABLE `zaposlenici`
  ADD PRIMARY KEY (`ID_zaposlenika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zaposlenici`
--
ALTER TABLE `zaposlenici`
  MODIFY `ID_zaposlenika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
