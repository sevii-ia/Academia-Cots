-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2021 a las 08:40:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centroformacion06`
--
CREATE DATABASE IF NOT EXISTS `centroformacion06` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `centroformacion06`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `apealu` varchar(50) DEFAULT NULL,
  `direccionalu` varchar(100) DEFAULT NULL,
  `telefonoalu` varchar(30) DEFAULT NULL,
  `numexpalu` varchar(20) NOT NULL,
  `dnialu` varchar(24) DEFAULT NULL,
  `nombrealu` varchar(50) DEFAULT NULL,
  `tutor` varchar(24) DEFAULT NULL,
  `provinciaalu` varchar(4) DEFAULT NULL,
  `sexoalu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`apealu`, `direccionalu`, `telefonoalu`, `numexpalu`, `dnialu`, `nombrealu`, `tutor`, `provinciaalu`, `sexoalu`) VALUES
('GARCIA PEREZ', 'C/ VILLEGAS, 1', '965123456', '001', '21123456X', 'MANUEL', '03', '03', 'M'),
('PEREZ GARCIA', 'C/ VILLEGAS, 2', '965654321', '002', '21654321P', 'SANDRA', '02', '30', 'H'),
('ESPINOSA RAMOS', 'C/ VILLEGAS, 3', '965789456', '003', '21789456T', 'ANTONIO', '03', '46', 'M'),
('ROCA GARCIA', 'C/ VILLEGAS, 4', '965321789', '004', '21654789R', 'JOSE', '01', '03', 'M'),
('RAMOS ROCA', 'C/ VILLEGAS, 5', '965123457', '005', '21784596S', 'MARIA', '02', '46', 'H'),
('SALERO RICO', 'C/ VILLEGAS, 6', '965456799', '006', '21456789X', 'MARIO', '04', '46', 'H'),
('RODRIGUEZ CASTIZO', 'C/ VILLEGAS, 7', '965987465', '007', '21998712X', 'JOSE', '05', '03', 'H'),
('SERPIS SELLA', 'C/ VILLEGAS, 8', '965789453', '008', '21786324W', 'ANTONIO', '05', '30', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `nomprov` varchar(30) DEFAULT NULL,
  `codprov` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`nomprov`, `codprov`) VALUES
('ALICANTE', '03'),
('MURCIA', '30'),
('VALENCIA', '46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `nombretutor` varchar(50) DEFAULT NULL,
  `apetutor` varchar(50) DEFAULT NULL,
  `telefonotutor` varchar(30) DEFAULT NULL,
  `dnitutor` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`nombretutor`, `apetutor`, `telefonotutor`, `dnitutor`) VALUES
('ANGEL', 'RODRIGUEZ', '965123456', '01'),
('MANUEL', 'PEREZ', '965654321', '02'),
('ANTONIO', 'MARTINEZ', '968123456', '03'),
('MARIO', 'CANO', '965123456', '04'),
('SANDRA', 'GALLEGO', '965321654', '05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numexpalu`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codprov`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`dnitutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
