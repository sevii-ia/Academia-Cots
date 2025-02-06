-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2020 a las 09:28:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cots3`
--
DROP DATABASE IF EXISTS `cots3`;
CREATE DATABASE IF NOT EXISTS `cots3` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `cots3`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numexpalu` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `dnialu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrealu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apealu` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionalu` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provinciaalu` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonoalu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tutor` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numexpalu`, `dnialu`, `nombrealu`, `apealu`, `direccionalu`, `provinciaalu`, `telefonoalu`, `tutor`) VALUES
('20001', '12345678A', 'VICTOR', 'MARHUENDA', 'C/EL PINO, 3', 'ALICANTE', '987', '11111'),
('20002', '12345678B', 'SERGIO', 'GUIJARRO', 'C/ EL PINO,4', 'ALICANTE', '9876', '22222'),
('20003', '12345678C', 'JORGE', 'SEGURA', 'C/ EL PINO,5', 'ALICANTE', '98765', '22222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `codciclo` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nomciclo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`codciclo`, `nomciclo`) VALUES
('10001', 'SMR'),
('10002', 'CAE'),
('10003', 'COM'),
('10004', 'GEST');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `numexpalu` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `codciclo` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`numexpalu`, `codciclo`) VALUES
('20001', '10001'),
('20002', '10002'),
('20003', '10001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `dnitutor` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombretutor` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apetutor` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direcciontutor` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provinciatutor` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonotutor` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`dnitutor`, `nombretutor`, `apetutor`, `direcciontutor`, `provinciatutor`, `telefonotutor`) VALUES
('11111', 'RAFA', 'GARCIA', 'C/ EL PINO,1', 'ALICANTE', '123'),
('22222', 'PABLO', 'PINTO', 'C/ EL PINO,2', 'ALICANTE', '1234'),
('33333', 'MANUEL', 'MARTIN', 'C/ EL PINO,3', 'ALCANTE', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numexpalu`),
  ADD KEY `tutor` (`tutor`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`codciclo`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`numexpalu`,`codciclo`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`dnitutor`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`tutor`) REFERENCES `tutores` (`dnitutor`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`numexpalu`) REFERENCES `alumnos` (`numexpalu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
