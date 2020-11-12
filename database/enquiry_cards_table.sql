-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 12-11-2020 a las 10:14:49
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enquiry_cards_table`
--

CREATE TABLE `enquiry_cards_table` (
  `name` varchar(266) NOT NULL,
  `title` varchar(266) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` bigint(20) UNSIGNED NOT NULL,
  `checked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enquiry_cards_table`
--

INSERT INTO `enquiry_cards_table` (`name`, `title`, `date`, `id`, `checked`) VALUES
('hola 2', 'hola 2', '2020-11-05 13:20:58', 2, NULL),
('hola3', 'hola3 hola', '2020-11-05 13:21:13', 3, NULL),
('4444', '444', '2020-11-05 13:21:17', 4, NULL),
('55555', '5555', '2020-11-05 13:21:22', 5, NULL),
('', '', '2020-11-05 13:30:38', 6, NULL),
('', '', '2020-11-05 13:33:31', 7, NULL),
('', '', '2020-11-05 13:33:54', 8, NULL),
('', '', '2020-11-05 13:34:02', 9, NULL),
('', '', '2020-11-05 13:35:05', 10, NULL),
('holahola', 'holahola', '2020-11-05 13:47:29', 11, NULL),
('44444', '44444', '2020-11-05 13:51:05', 12, NULL),
('holahola', 'holahola', '2020-11-05 13:56:16', 13, NULL),
('hola', 'hola', '2020-11-05 13:57:50', 14, NULL),
('hola', 'hola', '2020-11-05 13:58:12', 15, NULL),
('hola', 'hola', '2020-11-05 13:58:15', 16, NULL),
('hola', 'hola', '2020-11-05 13:58:29', 17, NULL),
('hola', 'hola', '2020-11-05 13:58:41', 18, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enquiry_cards_table`
--
ALTER TABLE `enquiry_cards_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enquiry_cards_table`
--
ALTER TABLE `enquiry_cards_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
