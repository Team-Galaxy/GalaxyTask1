-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql304.byethost.com
-- Generation Time: Sep 21, 2019 at 12:20 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b10_24512343_Task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `galusers`
--

CREATE TABLE `galusers` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galusers`
--

INSERT INTO `galusers` (`id`, `mail`, `pass`, `cpass`) VALUES
(1, 'nearbyhealthcare@gmail.com', 'ert', 'ytewrty'),
(2, 'chidideveloper@gmail.com', '1234567890', '1234567890'),
(3, 'gfay@gmail.com', '123', '123'),
(4, 'chidideveloper@gmail.cotm', 'wer', 'wert'),
(5, 'chidideveloper@gmail.comrt', 'were', 'were'),
(6, 'chidideveloper@gmail.comrtq', 'wert', 'werty'),
(7, 'chidideveloper@gmail.comi', '6', '3'),
(8, 'nearbyhealthcare@gmail.come', '5', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galusers`
--
ALTER TABLE `galusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galusers`
--
ALTER TABLE `galusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
