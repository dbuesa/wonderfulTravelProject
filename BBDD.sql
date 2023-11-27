-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 15:18:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecte1`
--
DROP DATABASE IF EXISTS `projecte1`;
CREATE DATABASE IF NOT EXISTS `projecte1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projecte1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciutats`
--

CREATE TABLE `ciutats` (
  `ciutat_id` int(11) NOT NULL,
  `continent_id` int(11) NOT NULL,
  `preu_persona` decimal(9,2) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciutats`
--

INSERT INTO `ciutats` (`ciutat_id`, `continent_id`, `preu_persona`, `nom`) VALUES
(1, 1, 199.99, 'Praga'),
(2, 1, 299.99, 'Madrid'),
(3, 1, 499.99, 'Amsterdam'),
(4, 1, 449.99, 'Atenas'),
(5, 2, 9999.99, 'Kampala'),
(6, 2, 999.99, 'Abuja'),
(7, 2, 399.99, 'Brazzaville'),
(8, 2, 299.99, 'Algeria'),
(9, 3, 2999.99, 'Rio de Janeiro'),
(10, 3, 1999.99, 'Buenos Aires'),
(11, 3, 1499.99, 'Bogotà'),
(12, 3, 2499.99, 'Cusco'),
(13, 4, 1499.99, 'Sydney'),
(14, 4, 1400.99, 'Wellington'),
(15, 4, 3499.99, 'Wagga Wagga'),
(16, 4, 1999.99, 'Hobart'),
(17, 5, 2199.99, 'Dacca'),
(18, 5, 3999.99, 'Hong Kong'),
(19, 5, 2499.99, 'Jakarta'),
(20, 5, 1999.99, 'Canton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contintents`
--

CREATE TABLE `contintents` (
  `continent_id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contintents`
--

INSERT INTO `contintents` (`continent_id`, `nom`) VALUES
(1, 'Europa'),
(2, 'Àfrica'),
(3, 'Amèrica'),
(4, 'Oceania'),
(5, 'Àsia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

CREATE TABLE `reserves` (
  `reserva_id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  `continent_id` int(11) NOT NULL,
  `ciutat_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `preu` decimal(60,2) NOT NULL,
  `persones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserves`
--

INSERT INTO `reserves` (`reserva_id`, `usuari_id`, `continent_id`, `ciutat_id`, `data`, `preu`, `persones`) VALUES
(70, 96, 5, 17, '2023-11-30', 2199.99, 1),
(71, 96, 5, 17, '2023-11-30', 2199.99, 1),
(72, 96, 5, 17, '2023-11-30', 2199.99, 1),
(73, 96, 5, 17, '2023-11-30', 2199.99, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `usuari_id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `adreca` text NOT NULL,
  `sexe` enum('Masculí','Femení','No binari','') NOT NULL,
  `adreca_electronica` varchar(75) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `codi_postal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`usuari_id`, `nom`, `adreca`, `sexe`, `adreca_electronica`, `dni`, `codi_postal`) VALUES
(96, 'dd', 'carrer vilar petit', 'Femení', 'd.buesa@sapalomera.cat', '12345678a', 8590);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciutats`
--
ALTER TABLE `ciutats`
  ADD PRIMARY KEY (`ciutat_id`),
  ADD KEY `fk_continents_continent_id` (`continent_id`);

--
-- Indices de la tabla `contintents`
--
ALTER TABLE `contintents`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`reserva_id`),
  ADD KEY `fk_reserves_usuari_id` (`usuari_id`),
  ADD KEY `fk_reserves_continent_id` (`continent_id`),
  ADD KEY `fk_reserves_ciutat_id` (`ciutat_id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`usuari_id`),
  ADD UNIQUE KEY `adreca_electronica` (`adreca_electronica`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `dni_2` (`dni`),
  ADD UNIQUE KEY `adreca_electronica_2` (`adreca_electronica`),
  ADD UNIQUE KEY `adreca_electronica_3` (`adreca_electronica`),
  ADD UNIQUE KEY `adreca_electronica_4` (`adreca_electronica`),
  ADD UNIQUE KEY `adreca_electronica_5` (`adreca_electronica`),
  ADD UNIQUE KEY `adreca_electronica_6` (`adreca_electronica`,`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciutats`
--
ALTER TABLE `ciutats`
  MODIFY `ciutat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contintents`
--
ALTER TABLE `contintents`
  MODIFY `continent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserves`
--
ALTER TABLE `reserves`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `usuari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciutats`
--
ALTER TABLE `ciutats`
  ADD CONSTRAINT `fk_continents_continent_id` FOREIGN KEY (`continent_id`) REFERENCES `contintents` (`continent_id`);

--
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_reserves_ciutat_id` FOREIGN KEY (`ciutat_id`) REFERENCES `ciutats` (`ciutat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reserves_continent_id` FOREIGN KEY (`continent_id`) REFERENCES `contintents` (`continent_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reserves_usuari_id` FOREIGN KEY (`usuari_id`) REFERENCES `usuaris` (`usuari_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
