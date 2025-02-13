-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2020 a las 08:37:54
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
-- Base de datos: `empleados`
--
DROP DATABASE IF EXISTS `empleados`;
CREATE DATABASE IF NOT EXISTS `empleados` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `empleados`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `dni` varchar(15) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `codprov` varchar(2) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`dni`, `nombre`, `apellidos`, `domicilio`, `municipio`, `codprov`, `sexo`) VALUES
('55555555w', 'amparo', 'barros', 'pino verde', 'albatera', '01', 'M'),
('66666666f', 'manolo', 'garcia', 'prodo verde', 'requena', '04', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idprov` varchar(2) NOT NULL,
  `nomprov` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idprov`, `nomprov`) VALUES
('01', 'alicante'),
('02', 'albacete'),
('03', 'murcia'),
('04', 'valencia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `provinciasempleados` (`codprov`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idprov`),
  ADD KEY `idprov` (`idprov`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
