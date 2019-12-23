-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2019 a las 16:31:58
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ri_Inscripcion`
--

CREATE TABLE `ri_Inscripcion` (
  `idri_Inscripcion` int(11) NOT NULL,
  `ri_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `idri_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ri_Inscripcion`
--
ALTER TABLE `ri_Inscripcion`
  MODIFY `idri_Inscripcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ri_parameters`
--
ALTER TABLE `ri_parameters`
  MODIFY `idri_Parameters` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
