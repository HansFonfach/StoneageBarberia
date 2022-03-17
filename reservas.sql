-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-05-2019 a las 19:26:35
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `Usuario` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Pass` varchar(80) NOT NULL,
  PRIMARY KEY (`Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Usuario`, `Nombre`, `Pass`) VALUES
('Administrador', 'Alejandro Robledo', '85f88626efd8b348c76a9648b70087de');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberos`
--

DROP TABLE IF EXISTS `barberos`;
CREATE TABLE IF NOT EXISTS `barberos` (
  `ID_Barbero` int(5) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Barbero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barberos`
--

INSERT INTO `barberos` (`ID_Barbero`, `Nombre`, `Apellido`) VALUES
(1, 'Alejandro', 'Robledo'),
(2, 'Johan', 'Tovar'),
(3, 'Kevin', 'Vergara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `ID_Horario` int(11) NOT NULL AUTO_INCREMENT,
  `Horas` varchar(30) NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY (`ID_Horario`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`ID_Horario`, `Horas`, `Estado`) VALUES
(1, '10:00 am - 11:00 am', 1),
(2, '11:00 am - 12:00 pm', 1),
(3, '12:00 pm - 13:00 pm', 1),
(4, '14:00 pm - 15:00 pm', 1),
(5, '15:00 pm - 16:00 pm', 1),
(6, '16:00 pm - 17:00 pm', 1),
(7, '17:00 pm - 18:00 pm', 1),
(8, '18:00 pm - 19:00 pm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `ID_Reserva` int(5) NOT NULL AUTO_INCREMENT,
  `Rut` varchar(50) NOT NULL,
  `ID_Barbero` int(5) NOT NULL,
  `ID_Horario` int(5) NOT NULL,
  `Servicio` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `Estado` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Reserva`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`ID_Reserva`, `Rut`, `ID_Barbero`, `ID_Horario`, `Servicio`, `Fecha`, `Estado`) VALUES
(1, '19301809-2', 1, 2, '3', '2019-05-01', 'Inactivo'),
(11, 'asdasdasd', 3, 2, '2', '2019-07-27', 'inactivo'),
(7, '19301809-2', 0, 0, '0', '2019-05-16', 'inactivo'),
(8, '19301809-2', 1, 0, '0', '2019-05-17', 'inactivo'),
(12, '123123', 2, 1, '2', '2019-06-29', 'inactivo'),
(13, 'asdasd', 2, 1, '2', '2019-05-26', 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `ID_Servicio` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Servicio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_Servicio`, `Nombre`) VALUES
(1, 'Corte de pelo'),
(2, 'Afeitado contemporaneo o  moderno'),
(3, 'Afeitado contemporaneo'),
(4, 'Afeitado clasico o neotradicional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Rut` varchar(15) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Faltas` int(20) NOT NULL,
  UNIQUE KEY `Rut` (`Rut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Rut`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Pass`, `Faltas`) VALUES
('19301809-2', 'Hans', 'Fonfach', 'hans.fonfach22@gmail.com', '975297584', '90359b4f858423c27cf2192465f4412c', 0),
('19301809-3', 'hans', 'fonfach', 'hans.fonfach@gmail.com', '975297584', '90359b4f858423c27cf2192465f4412c', 0),
('19301809-4', 'hans', 'fonfach', 'albox.96@hotmail.es', '75297584', '9b4aaf9b8bbe6677bd119c356433a318', 0),
('19301809-8', 'hans', 'fonfach', 'hansad@jahd.cl', '75297584', '90359b4f858423c27cf2192465f4412c', 0),
('asdasd', 'asdasd', 'asdasd', 'hans@asjdasd.cl', '97297584', '7815696ecbf1c96e6894b779456d330e', 0),
('asdasda', 'sdasdas', 'dasda@asldja.cl', 'sdasdasdkjh@aksjd.cl', '123123', 'a8f5f167f44f4964e6c998dee827110c', 0),
('192389123', 'iuisaudiu', 'asdasd', 'ashdhas@kjshd.cl', '975297584', 'adbf5a778175ee757c34d0eba4e932bc', 1),
('1231231', 'asd', '123123', 'asdjhakshd@asdjh.cl', '1111111111', '90359b4f858423c27cf2192465f4412c', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
