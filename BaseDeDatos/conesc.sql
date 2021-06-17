-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 06:16:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conesc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(30) DEFAULT NULL,
  `ap_materno` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `email`, `status`, `nom_usuario`, `contrasenia`) VALUES
(1, 'Celso Josué ', 'García', 'García', 'cjgg123@gmail.com', 'Activo', 'cjgg123', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `id_maestro`) VALUES
(1, 'Curso de HTML', 1),
(2, 'Ingles', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_alumnos`
--

CREATE TABLE `grupo_alumnos` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `calificacion` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_alumnos`
--

INSERT INTO `grupo_alumnos` (`id`, `id_curso`, `id_alumno`, `id_periodo`, `calificacion`) VALUES
(1, 2, 1, 1, 7),
(2, 2, 2, 1, 7),
(3, 2, 3, 1, 9),
(4, 1, 1, 1, 10),
(5, 1, 4, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id`, `fechaInicio`, `fechaFin`) VALUES
(1, '2021-05-01', '2021-11-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_alumnos`
--

CREATE TABLE `u_alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(40) DEFAULT NULL,
  `ap_materno` varchar(40) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `u_alumnos`
--

INSERT INTO `u_alumnos` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `edad`, `email`, `status`, `nom_usuario`, `contrasenia`) VALUES
(1, 'Josué ', 'García', 'García', 21, 'jas@gmail.com', 'Activo', 'cjgg', '0cc175b9c0f1b6a831c399e269772661'),
(2, 'Ana Lucia', 'Nevares ', 'Reina', 19, 'AnluNR@gmail.com', 'Activo', 'anluNR', '92eb5ffee6ae2fec3ad71c777531578f'),
(3, 'Rosa Amelia', 'Quintero', 'Suarez', 17, 'rsamQS@gmail.com', 'Activo', 'rsamQS', '4a8a08f09d37b73795649038408b5f33'),
(4, 'Abel', 'Cazares', 'Perez', 23, 'AbCP123@gmail.com', 'Activo', 'abCP123', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_maestros`
--

CREATE TABLE `u_maestros` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(40) DEFAULT NULL,
  `ap_materno` varchar(40) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `u_maestros`
--

INSERT INTO `u_maestros` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `edad`, `email`, `status`, `nom_usuario`, `contrasenia`) VALUES
(1, 'Sandra Maria', 'Qui', 'Orozco', 56, 'sanQO@gmail.com', 'Activo', 'sanQO', '0cc175b9c0f1b6a831c399e269772661'),
(2, 'yop Merengues', 'Elmer', 'Omero', 56, 'YelR@gmail.com', 'Activo', 'yElMero', '0cc175b9c0f1b6a831c399e269772661');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_maestro` (`id_maestro`);

--
-- Indices de la tabla `grupo_alumnos`
--
ALTER TABLE `grupo_alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_periodo` (`id_periodo`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `u_alumnos`
--
ALTER TABLE `u_alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `u_maestros`
--
ALTER TABLE `u_maestros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grupo_alumnos`
--
ALTER TABLE `grupo_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `u_alumnos`
--
ALTER TABLE `u_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `u_maestros`
--
ALTER TABLE `u_maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `u_maestros` (`id`);

--
-- Filtros para la tabla `grupo_alumnos`
--
ALTER TABLE `grupo_alumnos`
  ADD CONSTRAINT `grupo_alumnos_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `grupo_alumnos_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `u_alumnos` (`id`),
  ADD CONSTRAINT `grupo_alumnos_ibfk_4` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
