-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2020 a las 14:26:03
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
-- Base de datos: `inmobiliaria`
--
DROP DATABASE IF EXISTS `inmobiliaria`;
CREATE DATABASE IF NOT EXISTS `inmobiliaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `inmobiliaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `idpiso` int(11) NOT NULL,
  `zona` int(11) DEFAULT 0 COMMENT 'babel,carolinas,...',
  `superficie` varchar(4) DEFAULT NULL COMMENT 'm2',
  `habitaciones` varchar(2) DEFAULT NULL,
  `aseos` varchar(2) DEFAULT NULL,
  `fecha` varchar(4) DEFAULT NULL,
  `precio` int(11) DEFAULT 0 COMMENT 'precio aiquiler'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `viviendas`
--

INSERT INTO `viviendas` (`idpiso`, `zona`, `superficie`, `habitaciones`, `aseos`, `fecha`, `precio`) VALUES
(2, 6, '75', '3', '1', '1995', 350),
(3, 1, '90', '3', '1', '1985', 450),
(4, 2, '110', '4', '2', '1998', 750);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `idzona` int(11) NOT NULL,
  `nomzona` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`idzona`, `nomzona`) VALUES
(1, 'Babel'),
(2, 'Carolinas'),
(3, 'Los Angeles'),
(4, 'Bulevar del Pla'),
(5, 'San Blas'),
(6, 'Tómbola'),
(7, 'Altozano'),
(9, 'Campoamor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`idpiso`),
  ADD KEY `id` (`idpiso`),
  ADD KEY `zona` (`zona`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`idzona`),
  ADD KEY `id` (`idzona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `idpiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `idzona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
