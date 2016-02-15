-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2016 a las 13:26:33
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--

CREATE TABLE IF NOT EXISTS `aficiones` (
  `idaf` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`idaf`, `nombre`) VALUES
(1, 'deportes'),
(2, 'sad'),
(3, 'tv'),
(4, 'cine'),
(5, 'parapente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `idper` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idper`, `nombre`) VALUES
(1, 'Isa'),
(2, 'David'),
(3, 'ismae1'),
(4, 'ana'),
(5, 'Juan'),
(6, 'Manolo'),
(7, 'Isma'),
(8, 'Nuria'),
(9, 'Jesus'),
(10, 'Personita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_aficiones`
--

CREATE TABLE IF NOT EXISTS `personas_aficiones` (
  `idper` int(10) NOT NULL,
  `idaf` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas_aficiones`
--

INSERT INTO `personas_aficiones` (`idper`, `idaf`) VALUES
(1, 1),
(4, 2),
(5, 2),
(5, 3),
(5, 5),
(6, 2),
(7, 2),
(7, 3),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(10, 2),
(10, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`idaf`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD KEY `idper` (`idper`),
  ADD KEY `idaf` (`idaf`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `idaf` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idper` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD CONSTRAINT `personas_aficiones_ibfk_1` FOREIGN KEY (`idper`) REFERENCES `personas` (`idper`),
  ADD CONSTRAINT `personas_aficiones_ibfk_2` FOREIGN KEY (`idaf`) REFERENCES `aficiones` (`idaf`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
