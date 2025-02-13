-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2020 a las 08:38:52
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
DROP DATABASE IF EXISTS `cursosformacion23`;
CREATE DATABASE IF NOT EXISTS `cursosformacion23` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cursosformacion23`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE `formacion` (
  `num_correlativo` smallint(6) NOT NULL,
  `tipo_formacion` varchar(75) DEFAULT NULL,
  `inicio_curso` date DEFAULT NULL,
  `finalizacion_curso` char(19) DEFAULT NULL,
  `coste_curso` int(11) DEFAULT NULL,
  `num_organizador` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formacion`
--

INSERT INTO `formacion` (`num_correlativo`, `tipo_formacion`, `inicio_curso`, `finalizacion_curso`, `coste_curso`, `num_organizador`) VALUES
(1, 'Formación ABA', '1996-03-14', '1996-03-15 00:00:00', 160000, '1'),
(2, 'Formación de laboratorio', '1996-04-14', '1996-04-16 00:00:00', 200000, '4'),
(3, 'Formación en grupo', '1996-04-07', '1996-04-08 00:00:00', 210000, '5'),
(4, 'Curso básico de Excel', '1996-11-25', '1996-11-26 00:00:00', 120000, '2'),
(5, 'Nociones básicas\r\nPC/Windows 3,1', '1996-12-13', '1996-12-13 00:00:00', 90000, '3'),
(6, 'Curso básico de Word para\r\nWindows', '1996-12-14', '1996-12-15 00:00:00', 180000, '4'),
(7, 'Curso básico de Powerpoint', '1996-01-04', '1996-01-04 00:00:00', 120000, '4'),
(8, 'Gestión de proyectos', '1995-11-07', '1996-11-07 00:00:00', 154900, '5'),
(9, 'Telemárqueting - Formación', '1996-04-26', '1996-04-27 00:00:00', 203400, '5'),
(10, 'Planificación de personal - \r\nPráctica', '1996-09-03', '1996-09-04 00:00:00', 122000, '7'),
(11, 'Formular y analizar correcta-\r\nmente los certificados de\r\ntrbajo', '1996-09-18', '1996-09-19 00:00:00', 244000, '7'),
(20, 'Curso10', '2011-01-01', '0000-00-00 00:00:00', 1250, '1'),
(21, 'Curso10', '2011-01-01', '2011-12-31 00:00:00', 1250, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizadores`
--

CREATE TABLE `organizadores` (
  `num_organizador` varchar(25) NOT NULL,
  `lugar_organizacion` varchar(25) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `organizador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `organizadores`
--

INSERT INTO `organizadores` (`num_organizador`, `lugar_organizacion`, `direccion`, `organizador`) VALUES
('1', 'Madrid', '…', 'S & B Madrid'),
('2', 'Barcelona', '…', 'S & B Barcelona'),
('3', 'Murcia', '…', 'S & B Murcia'),
('4', 'Las Palmas', '…', 'S & B Las Palmas'),
('5', 'Zaragoza', '…', 'S & B Zaragoza'),
('6', 'Málaga', '…', 'S & B Málaga'),
('7', 'Toledo', '…', 'S & B Toledo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `num_correlativo` smallint(6) NOT NULL,
  `num_personal` varchar(4) NOT NULL,
  `asistencia` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`num_correlativo`, `num_personal`, `asistencia`) VALUES
(1, '1002', 'Sí'),
(1, '1017', 'Sí'),
(1, '1101', 'Sí'),
(1, '1429', 'Sí'),
(2, '1114', 'Sí'),
(2, '1439', 'Sí'),
(3, '1010', 'Sí'),
(3, '1015', 'Sí'),
(3, '1016', 'Sí'),
(3, '1017', 'Sí'),
(4, '1432', 'Sí'),
(4, '1433', 'Sí'),
(5, '1002', 'Sí'),
(5, '1435', 'Sí'),
(5, '1439', 'Sí'),
(6, '1005', 'Sí'),
(6, '1100', 'Sí'),
(7, '1430', 'Sí'),
(7, '1431', 'Sí'),
(8, '1438', 'Sí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `num_personal` varchar(4) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `calle` varchar(75) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `poblacion` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `sueldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`num_personal`, `nombre`, `apellido`, `calle`, `cp`, `poblacion`, `nacimiento`, `sexo`, `sueldo`) VALUES
('1002', 'Enrique', 'Vidal', 'Viladomat 175', '08002', 'Barcelona', '1951-12-28', 'H', 460000),
('1005', 'Juan', 'Moreno', 'Paseo Caballero 40', '28000', 'Madrid', '1952-08-02', 'H', 570000),
('1008', 'Javier', 'Gutiérrez', 'Calle ejemplo 6', '09999', 'Población ejemplo', '1947-09-10', 'H', 630000),
('1010', 'Jorge', 'Marañón', 'Calle ejemplo 12', '09999', 'Población ejemplo', '1956-03-22', 'H', 487700),
('1015', 'Elías', 'Soler', 'Diagonal 1073', '30008', 'Murcia', '1950-07-09', 'H', 573300),
('1016', 'Manuel', 'González', 'Bolivia 59', '29003', 'Málaga', '1951-01-02', 'H', 1019900),
('1017', 'Claudio', 'López', 'Rbla. Terrasa 23', '08220', 'Terrasa', '1955-04-13', 'H', 375500),
('1100', 'Cristina', 'Márquez', 'Nogal 22', '35212', 'Las Palmas', '1961-03-19', 'M', 720000),
('1101', 'Alberto', 'Romero', 'Merla 15', '50292', 'Zaragoza', '1948-12-21', 'H', 570000),
('1112', 'Luís', 'Canals', 'Calle ejemplo 145', '09999', 'Población ejemplo', '1961-02-06', 'H', 680000),
('1113', 'Carlos', 'López', 'Calle ejempl 7', '09999', 'Población ejemplo', '1963-06-24', 'H', 460000),
('1114', 'Tomás', 'Morales', 'Calle ejemplo 3', '09999', 'Población ejemplo', '1963-07-12', 'H', 610000),
('1429', 'Ricardo', 'Peire', 'Topacio 1096', '08700', 'Igualada', '1971-05-15', 'H', 660000),
('1430', 'Helena', 'Zubieta', 'Calle ejemplo 8', '09999', 'Población ejemplo', '1948-04-24', 'M', 812000),
('1431', 'Begoña', 'Huertas', 'Pelayo 48', '30009', 'Murcia', '1958-01-13', 'M', 240000),
('1432', 'Bernardo', 'Escape', 'Argentina 89', '30007', 'Murcia', '1959-05-10', 'H', 365500),
('1433', 'Silvia', 'Arenas', 'Terciopelo 39', '30006', 'Murcia', '1952-04-28', 'M', 575500),
('1434', 'Jorge', 'Domínguez', 'Pinar 12', '30005', 'Murcia', '1969-08-20', 'H', 680000),
('1435', 'Pedro', 'Canales', 'Burdeos 4', '45004', 'Toledo', '1944-11-02', 'H', 590000),
('1436', 'Pablo', 'Prats', 'Auladell 25', '08190', 'Sant Cugat', '1947-05-22', 'H', 820000),
('1437', 'Cristal', 'Pulido', 'Gomera 79', '35200', 'Valderrama', '1932-12-27', 'M', 510000),
('1438', 'Marcos', 'Juárez', 'Cadena 44', '28006', 'Madrid', '1946-09-26', 'H', 470000),
('1439', 'Esther', 'Molina', 'Borrás 129', '08008', 'ALICANTE', '1966-01-29', 'M', 510000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`num_correlativo`),
  ADD UNIQUE KEY `num_correlativo` (`num_correlativo`),
  ADD KEY `ORGANIZADORESFORMACION` (`num_organizador`);

--
-- Indices de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`num_organizador`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`num_correlativo`,`num_personal`),
  ADD KEY `FORMACIONPARTICIPANTES` (`num_correlativo`),
  ADD KEY `PERSONALPARTICIPANTES` (`num_personal`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`num_personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
