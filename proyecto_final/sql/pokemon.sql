-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2025 a las 05:52:49
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo siniesntro`
--

CREATE TABLE `tipo siniesntro` (
  `id` int(11) NOT NULL,
  `Pokemon` varchar(100) NOT NULL,
  `Evoluciones` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Debilidades` varchar(100) NOT NULL,
  `Pega eficaz` varchar(100) NOT NULL,
  `Tiene shyni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo siniesntro`
--

INSERT INTO `tipo siniesntro` (`id`, `Pokemon`, `Evoluciones`, `Tipo`, `Debilidades`, `Pega eficaz`, `Tiene shyni`) VALUES
(1, 'dfh', 'ryeyry', 'ywryweyw', 'ytweeywyy', 'rwywrywyw', 'reyeryey'),
(2, 'dfh', 'ryeyry', 'ywryweyw', 'ytweeywyy', 'rwywrywyw', 'reyeryey'),
(3, 'dfh', 'ryeyry', 'ywryweyw', 'ytweeywyy', 'rwywrywyw', 'reyeryey'),
(4, 'dfh', 'ryeyry', 'ywryweyw', 'ytweeywyy', 'rwywrywyw', 'reyeryey');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agua`
--
ALTER TABLE `agua`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo siniesntro`
--
ALTER TABLE `tipo siniesntro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agua`
--
ALTER TABLE `agua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo siniesntro`
--
ALTER TABLE `tipo siniesntro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
