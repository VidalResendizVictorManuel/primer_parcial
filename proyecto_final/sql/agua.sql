-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2025 a las 05:53:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agua`
--

CREATE TABLE `agua` (
  `id` int(11) NOT NULL,
  `Pokemon` varchar(100) NOT NULL,
  `Evoluciones` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Debilidades` varchar(100) NOT NULL,
  `Efectivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agua`
--

INSERT INTO `agua` (`id`, `Pokemon`, `Evoluciones`, `Tipo`, `Debilidades`, `Efectivo`) VALUES
(10, 'Piplup', 'Empoleon ', 'Agua y Acero', 'No tiene', 'Fuego'),
(13, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(14, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(15, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(16, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(19, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(20, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(22, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero'),
(25, 'Charmander', 'Charizard y Charmileon', 'Fuego', 'Agua', 'Planta y Acero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agua`
--
ALTER TABLE `agua`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agua`
--
ALTER TABLE `agua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
