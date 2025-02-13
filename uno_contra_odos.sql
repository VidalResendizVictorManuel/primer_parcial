-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2025 at 08:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uno_contra_odos`
--

-- --------------------------------------------------------

--
-- Table structure for table `111`
--

CREATE TABLE `111` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Maldiciones` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `111`
--

INSERT INTO `111` (`id`, `Nombre`, `Apellido`, `Maldiciones`) VALUES
(1, '1', '1', 1),
(2, '2', '2', 2),
(3, '3', '3', 3),
(4, '4', '4', 4),
(5, '5', '5', 5),
(6, '6', '6', 6),
(7, '7', '7', 7),
(8, '8', '8', 8),
(9, '9', '9', 9),
(10, '10', '10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `maldiciones`
--

CREATE TABLE `maldiciones` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Maldiciones` int(10) NOT NULL,
  `Rituales` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `111`
--
ALTER TABLE `111`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maldiciones`
--
ALTER TABLE `maldiciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `111`
--
ALTER TABLE `111`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `maldiciones`
--
ALTER TABLE `maldiciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
