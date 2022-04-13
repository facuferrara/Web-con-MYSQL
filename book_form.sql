-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2022 a las 17:34:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `book_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book_form`
--

CREATE TABLE `book_form` (
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `localizacion` varchar(255) NOT NULL,
  `invitados` int(255) NOT NULL,
  `llegadas` date NOT NULL,
  `salidas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `book_form`
--

INSERT INTO `book_form` (`nombre`, `email`, `telefono`, `direccion`, `localizacion`, `invitados`, `llegadas`, `salidas`) VALUES
('', 'facundo.ferrara@educacion.gob.ar', '', '', '', 0, '0000-00-00', '0000-00-00'),
('', 'facundo.ferrara@educacion.gob.ar', '', '', '', 0, '0000-00-00', '0000-00-00'),
('', 'facundo.ferrara@educacion.gob.ar', '', '', '', 0, '0000-00-00', '0000-00-00'),
('', 'facu_matute_98@hotmail.com', '', '', '', 0, '0000-00-00', '0000-00-00'),
('alberto', 'alber@hotmail.com', '1149123123', 'herrera', 'Moron', 2, '0000-00-00', '1213-03-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
