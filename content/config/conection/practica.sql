-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2022 a las 00:09:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Uptaeb Inicia Clases', 'Acceso al Sistema de Gestón Educación Mediada por las Tecnologías de Información y Comunicación Libres', 'imagen2.jpg'),
(2, 'Estudiantes unidos', 'Los Estudiantes se unen en protesta para exigir más seguridad dentro de la universidad', 'imagen3.jpg'),
(7, 'Nueva Plataforma para Estudiantes', 'Se ha añadido una nueva plataforma para los estudiantes que quieran realizar un postgrado', 'imagen2.jpg'),
(8, 'Reinicio de clases presenciales', 'Unexpo reinicia clases presenciales a partir del proximo año escolarw', 'imagen3.jpg'),
(9, 'Nueva noticia', 'nueva noticia creada', 'imagen3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id_notificaciones` int(30) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `autor` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id_notificaciones`, `nombre`, `fecha`, `autor`, `estado`) VALUES
(1, 'Nueva noticia agregada', '2022-03-19 22:21:17', 'Gisbel Torres', 1),
(2, 'Nueva noticia agregada', '2022-03-19 22:21:17', 'Lorena', 1),
(3, 'Nueva noticia agregada', '2022-03-19 22:21:17', 'Ana Soto', 1),
(4, 'Nueva noticias', '2022-03-20 14:09:16', 'Jose Perez', 1),
(5, 'Nueva notificacion agregada', '2022-03-20 15:22:53', 'Gisbel Torres', 1),
(6, 'Nueva notificaicon', '2022-03-20 15:22:53', 'Gisbel', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id_notificaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id_notificaciones` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
