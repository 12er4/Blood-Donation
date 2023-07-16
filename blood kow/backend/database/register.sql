-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 08:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `First Name` varchar(155) NOT NULL,
  `Last Name` varchar(155) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` bigint(50) NOT NULL,
  `Blood Group` varchar(10) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Street Address` varchar(255) NOT NULL,
  `Apartment` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Postal Code` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `hiv` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `First Name`, `Last Name`, `Email`, `Phone`, `Blood Group`, `Date Of Birth`, `Street Address`, `Apartment`, `City`, `State`, `Postal Code`, `Country`, `hiv`) VALUES
(1, 'DINESH ', 'M', 'Dineshm.2006@srit.org', 8903044221, 'O+', '2003-02-22', 'adar', 'bandisholai', 'Niligiris', 'Tamil Nadu', '643104', 'India', 'Y'),
(2, 'DINESH @', 'M', 'Dineshm@srit.org', 8903044221, 'O+', '2003-02-22', 'adar', 'bandisholai', 'Niligiris', 'Tamil Nadu', '643104', 'India', 'Y'),
(3, 'horid', 'A k', 'horid@gamil.com', 9789453361, 'AB+', '2003-07-17', 'pollachi', 'coimbator', 'Erode', 'Tamil Nadu', '640101', 'India', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
