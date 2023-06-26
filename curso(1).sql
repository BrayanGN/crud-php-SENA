-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 00:54:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `creditos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion`, `creditos`) VALUES
(1, 'prueba modificada', 'descripccion comprobando el editar ', 4),
(4, 'php', 'fundamenetos basicos', 2),
(5, 'prueba', 'descripccion', 1),
(6, 'prueba', 'descripccion', 1),
(7, 'prueba', 'descripccion', 1),
(8, 'prueba', 'descripccion', 1),
(9, 'prueba', 'descripccion', 1),
(10, 'prueba', 'descripccion', 1),
(11, 'prueba', 'descripccion', 1),
(12, 'prueba', 'descripccion', 1),
(13, 'prueba', 'descripccion', 1),
(14, 'prueba', 'descripccion', 1),
(15, 'prueba', 'descripccion', 1),
(16, 'prueba', 'descripccion', 1),
(17, 'prueba', 'descripccion', 1),
(18, 'prueba', 'descripccion', 1),
(19, 'prueba', 'descripccion', 1),
(20, 'prueba', 'descripccion', 1),
(21, 'prueba', 'descripccion', 1),
(22, 'prueba', 'descripccion', 1),
(23, 'prueba', 'descripccion', 1),
(24, 'prueba', 'descripccion', 1),
(25, 'prueba', 'descripccion', 1),
(26, 'prueba', 'descripccion', 1),
(27, 'prueba', 'descripccion', 1),
(28, 'prueba', 'descripccion', 1),
(29, 'prueba', 'descripccion', 1),
(30, 'prueba', 'descripccion', 1),
(31, 'prueba', 'descripccion', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
