-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2025 at 08:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voleyball`
--

-- --------------------------------------------------------

--
-- Table structure for table `setters`
--

CREATE TABLE `setters` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Numero` int(50) NOT NULL,
  `Posición` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setters`
--

INSERT INTO `setters` (`id`, `Nombre`, `Apellido`, `Numero`, `Posición`) VALUES
(1, 'Simon', 'Nicolov', 1, 'Setter'),
(2, 'Micah Christenson	', 'Christenson	', 1, 'Setter'),
(3, 'Bruno Rezende', 'Rezende	', 8, 'Setter'),
(4, 'Sergey Grankin', 'Grankin', 11, 'Setter'),
(5, 'Ricardo Lucarelli', 'Lucarelli', 7, 'Setter'),
(6, 'Kevin Tilley', 'Tilley', 12, 'Setter'),
(7, 'Luciano De Cecco', 'De Cecco', 5, 'Setter'),
(8, 'Josh Tuaniga', 'Tuaniga', 3, 'Setter'),
(9, 'Alen Pajenk', 'Pajenk', 9, 'Setter'),
(10, 'Emmanuel Kone', 'Kone', 4, 'Setter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setters`
--
ALTER TABLE `setters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setters`
--
ALTER TABLE `setters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
