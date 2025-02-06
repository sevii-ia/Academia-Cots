-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2020 a las 13:21:57
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
-- Base de datos: `centroformacion01`
--
DROP DATABASE IF EXISTS `centroformacion01`;
CREATE DATABASE IF NOT EXISTS `centroformacion01` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `centroformacion01`;

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
  `provinciaalu` varchar(25) DEFAULT NULL,
  `telefonoalu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numexpalu`, `dnialu`, `nombrealu`, `apealu`, `direccionalu`, `provinciaalu`, `telefonoalu`) VALUES
('0001', '123456T', 'MANUEL', 'RODRIGUEZ', 'C/ EL PINO, 1', 'ALICANTE', '965123456'),
('0002', '123456Y', 'SANDRA', 'ROCA', 'C/ EL PINO, 2', 'MURCIA', '966543216');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numexpalu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
