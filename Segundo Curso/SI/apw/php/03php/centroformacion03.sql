-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2020 a las 00:23:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centroformacion03`
--
DROP DATABASE IF EXISTS `centroformacion03`;
CREATE DATABASE IF NOT EXISTS `centroformacion03` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `centroformacion03`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numexpalu` varchar(10) NOT NULL,
  `dnialu` varchar(12) DEFAULT NULL,
  `nombrealu` varchar(25) DEFAULT NULL,
  `apealu` varchar(25) DEFAULT NULL,
  `direccionalu` varchar(50) DEFAULT NULL,
  `provinciaalu` varchar(15) DEFAULT NULL,
  `telefonoalu` varchar(15) DEFAULT NULL,
  `tutor` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numexpalu`, `dnialu`, `nombrealu`, `apealu`, `direccionalu`, `provinciaalu`, `telefonoalu`, `tutor`) VALUES
('001', '21123456X', 'MANUEL', 'GARCÍA PÉREZ', 'C/ VILLEGAS, 1', 'ALICANTE', '965123456', '03'),
('002', '21654321P', 'SANDRA', 'PÉREZ GARCÍA', 'C/ VILLEGAS, 2', 'ALICANTE', '965654321', '02'),
('003', '21789456T', 'ANTONIO', 'ESPINOSA RAMOS', 'C/ VILLEGAS, 3', 'MURCIA', '965789456', '03'),
('004', '21654789R', 'JOSÉ', 'ROCA GARCÍA', 'C/ VILLEGAS, 4', 'ALICANTE', '965321789', '01'),
('005', '21784596S', 'MARÍA', 'RAMOS ROCA', 'C/ VILLEGAS, 5', 'MURCIA', '965123457', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `dnitutor` varchar(12) NOT NULL,
  `nombretutor` varchar(25) DEFAULT NULL,
  `apetutor` varchar(25) DEFAULT NULL,
  `direcciontutor` varchar(50) DEFAULT NULL,
  `provinciatutor` varchar(25) DEFAULT NULL,
  `telefonotutor` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`dnitutor`, `nombretutor`, `apetutor`, `direcciontutor`, `provinciatutor`, `telefonotutor`) VALUES
('01', 'ÁNGEL', 'RODRÍGUEZ', 'C/ EL PINO,1', 'ALICANTE', '965123456'),
('02', 'MANUEL', 'PÉREZ', 'C/ EL PINO,2', 'ALICANTE', '965654321'),
('03', 'ANTONIO', 'MARTÍNEZ', 'C/ EL PINO,3', 'MURCIA', '968123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numexpalu`),
  ADD KEY `tutoresalumnos` (`tutor`);

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
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`tutor`) REFERENCES `tutores` (`dnitutor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
