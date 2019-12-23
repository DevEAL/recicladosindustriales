-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2019 a las 15:39:11
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Reciclados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ri_contact`
--

CREATE TABLE `ri_contact` (
  `idri_contact` int(11) NOT NULL,
  `ri_name` varchar(45) DEFAULT NULL,
  `ri_email` varchar(45) DEFAULT NULL,
  `ri_phone` varchar(15) DEFAULT NULL,
  `ri_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ri_contact`
--

INSERT INTO `ri_contact` (`idri_contact`, `ri_name`, `ri_email`, `ri_phone`, `ri_message`) VALUES
(1, 'prueba', 'correo@correo.com', '1234567', 'pruebaa lorem insum');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ri_cotizar`
--

CREATE TABLE `ri_cotizar` (
  `idri_cotizar` int(11) NOT NULL,
  `ri_name` varchar(45) NOT NULL,
  `ri_email` varchar(45) NOT NULL,
  `ri_material` varchar(45) NOT NULL,
  `ri_message` text NOT NULL,
  `ri_Phone` varchar(15) NOT NULL,
  `ri_cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ri_cotizar`
--

INSERT INTO `ri_cotizar` (`idri_cotizar`, `ri_name`, `ri_email`, `ri_material`, `ri_message`, `ri_Phone`, `ri_cantidad`) VALUES
(1, '', '', '', '', '', ''),
(2, 'name1', 'correo@correo.com', 'material1', 'mensaje1', '123456', 'mas 50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ri_Inscripcion`
--

CREATE TABLE `ri_Inscripcion` (
  `idri_Inscripcion` int(11) NOT NULL,
  `ri_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ri_Inscripcion`
--

INSERT INTO `ri_Inscripcion` (`idri_Inscripcion`, `ri_email`) VALUES
(1, 'correo@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ri_parameters`
--

CREATE TABLE `ri_parameters` (
  `idri_Parameters` int(11) NOT NULL,
  `ri_name` varchar(45) DEFAULT NULL,
  `ri_status` int(11) DEFAULT NULL,
  `ri_value` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ri_parameters`
--

INSERT INTO `ri_parameters` (`idri_Parameters`, `ri_name`, `ri_status`, `ri_value`) VALUES
(1, 'Email_contacto', 1, 'backend@enalgunlugarestudio.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ri_contact`
--
ALTER TABLE `ri_contact`
  ADD PRIMARY KEY (`idri_contact`);

--
-- Indices de la tabla `ri_cotizar`
--
ALTER TABLE `ri_cotizar`
  ADD PRIMARY KEY (`idri_cotizar`);

--
-- Indices de la tabla `ri_Inscripcion`
--
ALTER TABLE `ri_Inscripcion`
  ADD PRIMARY KEY (`idri_Inscripcion`);

--
-- Indices de la tabla `ri_parameters`
--
ALTER TABLE `ri_parameters`
  ADD PRIMARY KEY (`idri_Parameters`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ri_contact`
--
ALTER TABLE `ri_contact`
  MODIFY `idri_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ri_cotizar`
--
ALTER TABLE `ri_cotizar`
  MODIFY `idri_cotizar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ri_Inscripcion`
--
ALTER TABLE `ri_Inscripcion`
  MODIFY `idri_Inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ri_parameters`
--
ALTER TABLE `ri_parameters`
  MODIFY `idri_Parameters` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
