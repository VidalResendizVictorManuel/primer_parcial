-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2025 a las 06:36:26
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
-- Base de datos: `pokemones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atrapable`
--

CREATE TABLE `atrapable` (
  `id` int(11) NOT NULL,
  `atrapable` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atrapable`
--

INSERT INTO `atrapable` (`id`, `atrapable`) VALUES
(2, 'No'),
(1, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id` int(11) NOT NULL,
  `clase` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id`, `clase`) VALUES
(1, 'comun'),
(3, 'legendario'),
(2, 'pseudo legendaerio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generacion`
--

CREATE TABLE `generacion` (
  `id` int(11) NOT NULL,
  `nombre_generacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generacion`
--

INSERT INTO `generacion` (`id`, `nombre_generacion`) VALUES
(4, 'Cuarta generacion'),
(9, 'Novena generacion'),
(8, 'Octava generacion'),
(1, 'Primera generacion'),
(5, 'Quinta generacion'),
(2, 'Segunda generacion'),
(7, 'Septima generacion'),
(6, 'Sexta generacion'),
(3, 'Tercera generacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `meta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `meta`
--

INSERT INTO `meta` (`id`, `meta`) VALUES
(2, 'No'),
(3, 'Quien sabe'),
(1, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `id` int(11) NOT NULL,
  `numero_de_la_pokedex` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `evoluciones` varchar(50) NOT NULL,
  `pega_efectivo` varchar(50) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_generacion` int(11) NOT NULL,
  `id_meta` int(11) NOT NULL,
  `id_atrapable` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `debilidades` varchar(55) DEFAULT NULL,
  `descripcion` varchar(55) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`id`, `numero_de_la_pokedex`, `nombre`, `evoluciones`, `pega_efectivo`, `id_tipo`, `id_generacion`, `id_meta`, `id_atrapable`, `id_clase`, `debilidades`, `descripcion`, `fecha_ingreso`) VALUES
(8, '0001', 'Bulbasaur', 'evasour venesuar', 'nose', 18, 1, 1, 1, 1, 'Fuego, Hielo, Bicho', 'Tras nacer, crece alimentándose durante un tiempo de lo', '2025-04-09'),
(9, '0004', 'Charmander', 'Charmeleon, Charizard', 'Planta Bicho', 2, 1, 3, 2, 1, 'Agua, Tierra, Roca', 'La llama de su cola indica su fuerza vital. Si está déb', '2025-04-23'),
(10, '0007', 'Squietle', 'Wartortle, Blastoise', 'Fuego, Tierra, Roca', 1, 1, 2, 2, 1, 'Planta, Electrico', 'Tras nacer, se le hincha el lomo y se le forma un capar', '2025-04-14'),
(11, '0010', 'Caterpie', 'Metapod, Butterfree', 'Planta', 12, 1, 2, 2, 3, 'no tiene', 'es un dios de otro universo fuera de nuestra comprensio', '2025-04-08'),
(12, '0013', 'Weedle', 'Kakuna, Beedrill', 'Planta.', 12, 1, 2, 1, 1, 'Fuego, Hielo, Bicho.', 'El aguijón de la cabeza es muy puntiagudo. Se alimenta ', '2025-04-02'),
(13, '0016', 'Pidgey', 'Pidgeotto, Pidgeot', 'Planta. Bicho', 14, 1, 2, 1, 1, 'Fuego, Lucha', 'Su docilidad es tal que suelen defenderse levantando ar', '2025-04-16'),
(14, '0019', 'Rattata', 'Raticate', 'ninguna', 6, 1, 2, 1, 1, 'Lucha.', 'Es propenso a hincar los incisivos en cualquier cosa qu', '2025-04-16'),
(15, '0021', 'Spearow', 'Fearow', 'Planta Bicho,', 14, 1, 2, 1, 1, 'Lucha, Hielo y Electrico', 'A la hora de proteger su territorio, compensa su incapa', '2025-04-24'),
(25, '0025', 'Pikachu', 'Raichu', 'Agua', 3, 2, 3, 2, 2, 'Roca', 'Cuando se enfada, este Pokémon descarga la energía que ', '2025-04-01'),
(26, '0027', 'Sandshrew', 'Sandslash', 'no lo se', 5, 1, 2, 1, 1, 'Agua, Planta', 'Excava madrigueras profundas en las que vive. Cuando lo', '2025-04-03'),
(27, '0029', 'Nidoran', 'Nidorina, Nidoran', 'Planta y ya', 13, 1, 2, 1, 1, 'Tierra, Psico', 'Posee un olfato más fino que los Nidoran♂. Usa los bigo', '2025-04-04'),
(28, '0032', 'Nidoran', 'Nidorino, Nidoking', 'si solo a planta', 5, 1, 3, 1, 1, 'Tiene como debilidad la lucha', 'Mantiene sus grandes orejas levantadas, siempre alerta.', '2025-04-07'),
(29, '0035', 'Clefairy ', 'Clefairy ', 'nose a cual', 15, 1, 2, 1, 1, 'Veneno ,Acero', 'En las noches de luna llena, Clefairy de diversos lugar', '2025-04-17'),
(30, '0037', 'Vulpix', 'Ninetales', 'Planta, Hieo', 2, 1, 2, 1, 1, 'agua, tierra, roca.', 'Si lo ataca un enemigo más fuerte que él, finge estar h', '2025-04-15'),
(31, '0041', 'Zubat', 'Golbat', 'Planta, Bicho y Hada', 13, 1, 2, 1, 1, 'Electrico, Hielo, Psiquico, Roca', 'Emite ondas ultrasónicas por la boca para escrutar el e', '2025-04-17'),
(32, '0046', 'Paras', 'PArasect', 'Solo a Planta y Bicho', 12, 1, 3, 1, 1, 'Fuego por 4', 'Escarba en el suelo para extraer nutrientes de las raíc', '2025-04-18'),
(33, '0048', 'Venonat', 'Venomoth', 'Planta y ya.', 12, 1, 2, 1, 1, 'Fuego y Roca', 'Rezuma veneno por todo su cuerpo. De noche, atrapa y co', '2025-03-14'),
(34, '0050', 'Diglett', 'Dugtrio', 'A fuego nadamas', 5, 1, 2, 1, 1, 'Agua y Planta', 'Vive 1 m por debajo del suelo, donde se alimenta de raí', '2025-04-30'),
(35, '0058', 'Growlithe', 'Arcanine', 'Planta y ya', 2, 1, 3, 1, 1, 'Agua Tierra y Roca', 'De naturaleza valiente y honrada, se enfrenta sin miedo', '2025-05-02'),
(36, '0092', 'Gastly', 'Haunter, Gengar', 'Planta, Psico, Lucha Normal', 11, 7, 1, 1, 1, 'Tierra, Psico, Fantasma, Siniestro', 'Su estrategia consiste en envolver al rival con su cuer', '2025-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(9, 'Acero'),
(1, 'Agua'),
(12, 'Bicho'),
(17, 'Dragon'),
(3, 'Eléctrico'),
(11, 'Fantasma'),
(2, 'Fuego'),
(15, 'Hada'),
(16, 'Hielo'),
(7, 'Lucha'),
(6, 'Normal'),
(18, 'Planta'),
(10, 'Psiquico'),
(4, 'Roca'),
(8, 'Siniestro'),
(5, 'Tierra'),
(13, 'Veneno'),
(14, 'Volador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atrapable`
--
ALTER TABLE `atrapable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `atrapable` (`atrapable`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clase` (`clase`);

--
-- Indices de la tabla `generacion`
--
ALTER TABLE `generacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_generacion` (`nombre_generacion`);

--
-- Indices de la tabla `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `meta` (`meta`);

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_de_la_pokedex` (`numero_de_la_pokedex`),
  ADD UNIQUE KEY `debilidades` (`debilidades`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_clase` (`id_clase`),
  ADD KEY `id_generacion` (`id_generacion`),
  ADD KEY `id_meta` (`id_meta`),
  ADD KEY `id_atrapable` (`id_atrapable`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atrapable`
--
ALTER TABLE `atrapable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `generacion`
--
ALTER TABLE `generacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD CONSTRAINT `pokemones_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`),
  ADD CONSTRAINT `pokemones_ibfk_2` FOREIGN KEY (`id_generacion`) REFERENCES `generacion` (`id`),
  ADD CONSTRAINT `pokemones_ibfk_3` FOREIGN KEY (`id_meta`) REFERENCES `meta` (`id`),
  ADD CONSTRAINT `pokemones_ibfk_4` FOREIGN KEY (`id_clase`) REFERENCES `clase` (`id`),
  ADD CONSTRAINT `pokemones_ibfk_5` FOREIGN KEY (`id_atrapable`) REFERENCES `atrapable` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;