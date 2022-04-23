-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dewi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_014`
--

CREATE TABLE `tbl_014` (
  `id_014` int(11) NOT NULL,
  `nama_014` varchar(50) NOT NULL,
  `email_014` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_014`
--

INSERT INTO `tbl_014` (`id_014`, `nama_014`, `email_014`) VALUES
(1, 'Dewi Imani Al Qur\' Ani', 'imanialqurani158@gmail.com'),
(2, 'M. Ali Wafa', 'alivixjar98@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_014`
--
ALTER TABLE `tbl_014`
  ADD PRIMARY KEY (`id_014`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_014`
--
ALTER TABLE `tbl_014`
  MODIFY `id_014` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
