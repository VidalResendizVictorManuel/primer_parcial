-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2025 a las 05:53:37
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
-- Estructura de tabla para la tabla `siniestro`
--

CREATE TABLE `siniestro` (
  `id` int(11) NOT NULL,
  `Pokemon` varchar(100) NOT NULL,
  `Evoluciones` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Debilidades` varchar(100) NOT NULL,
  `Efectivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `siniestro`
--

INSERT INTO `siniestro` (`id`, `Pokemon`, `Evoluciones`, `Tipo`, `Debilidades`, `Efectivo`) VALUES
(1, 'Hydreigon', 'Deino,  Zweilous', 'Siniestro y Dragón', 'Tipo Hada, Bicho, Dragón, Lucha y Hielo. ', 'Efectivo contra Giratina-Origin, Zarude, Mewtwo. '),
(2, 'Greninja', 'Froakie y Frogadier ', 'Agua y Siniestro', 'es débil frente a ataques de tipo Bicho, Eléctrico, Hada, Lucha y Planta.', 'Es efectivo contra sus oponentes con ataques de tipo Bicho, Eléctrico, Hada, Lucha y Planta'),
(3, 'Incineroar', 'Litten y Torracat', 'Fuego y Siniestro', 'débil contra ataques de tipo Lucha, Tierra, Roca y Agua. ', 'Es efectivo contra sus oponentes con ataques de tipo Bicho, Eléctrico, Hada, Lucha y Planta'),
(4, 'Tyranitar', 'Pupitar  y Larvitar', 'Roca y Siniestro', 'débil frente a ataques de tipo Lucha y débil frente a ataques de tipo Bicho, Hada, Planta, Tierra, A', 'Es efectivo contra sus oponentes con ataques de tipo Bicho, Eléctrico, Hada, Lucha y Planta'),
(5, 'Meowscarada', 'Sprigatito y Floragato', 'Planta y Siniestro', 'débil contra los ataques de tipo Bicho, Fuego, Hielo, Lucha, Veneno, Volador y Hada. ', 'Tierra, Roca, Agua'),
(6, 'Umbreon', 'Eevee', 'Siniestro', 'Débil contra tipo lucha, bicho, hada y fuego. ', 'psíquico'),
(7, 'Zoroark', 'Zorua', 'Siniestro', 'Débil contra tipo lucha, bicho, hada y fuego. ', 'psíquico'),
(8, 'Bisharp', 'Pawniard', 'Siniestro', 'Débil contra tipo lucha, bicho, hada y fuego. ', 'psíquico'),
(9, ' Darkrai', 'No tiene', 'Siniestro', 'Débil contra tipo lucha, bicho, hada y fuego. ', 'psíquico'),
(10, ' Absol', 'No tiene', 'Siniestro', 'Débil contra tipo lucha, bicho, hada y fuego. ', 'psíquico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
