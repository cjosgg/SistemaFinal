-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2021 a las 04:41:00
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
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `email`, `nom_usuario`, `contrasenia`, `status`) VALUES
(1, 'Celso Josué ', 'García', 'García', 'cjgg123@gmail.com', 'cjgg123', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(2, 'Abel', 'Osuna', 'Luque', 'faOsunaluque@gmail.com', 'abeluky', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(3, 'pichula triste', 'Barajas', 'Higuera', 'ptBJ123@gmail.com', 'ptBJ123', '0cc175b9c0f1b6a831c399e269772661', 'Inactivo'),
(4, 'pichula triste', 'Barajas', 'Higuera', 'ptBJ123@gmail.com', 'ptBJ123', '0cc175b9c0f1b6a831c399e269772661', 'Inactivo'),
(5, 'aaaa', 'bbbb', 'ccc', 'abc@gmail.com', 'abc123', '0cc175b9c0f1b6a831c399e269772661', 'Inactivo'),
(6, 'Ana Laura', 'Iniguez', 'Baez', 'anlIB@gmail.com', 'anlIB', '0cc175b9c0f1b6a831c399e269772661', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `id_maestro`, `status`) VALUES
(1, 'Curso de HTML', 1, 'Activo'),
(2, 'Ingles', 2, 'Activo'),
(3, 'Python', 3, 'Activo'),
(5, 'Teoria de Grafos', 4, 'Activo');

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
(4, 1, 1, 1, 9),
(5, 2, 4, 1, 10),
(6, 2, 5, 1, 10),
(7, 3, 6, 1, 10),
(8, 3, 7, 1, 0),
(9, 3, 8, 1, 0),
(10, 3, 9, 1, 0),
(11, 3, 10, 1, 9),
(12, 1, 11, 1, 0),
(13, 5, 12, 1, 0),
(14, 1, 13, 1, 0),
(15, 1, 14, 1, 0),
(16, 1, 15, 1, 0),
(17, 5, 16, 1, 0),
(18, 5, 17, 1, 0);

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
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `u_alumnos`
--

INSERT INTO `u_alumnos` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `edad`, `email`, `nom_usuario`, `contrasenia`, `status`) VALUES
(1, 'Celso Josue', 'Garcia', 'Garcia', 21, 'jossss07garcia@gmail.com', 'cjgg123', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(2, 'Ana Lucia', 'Nevares ', 'Reina', 19, 'AnluNR@gmail.com', 'anluNR', '92eb5ffee6ae2fec3ad71c777531578f', 'Activo'),
(3, 'Rosa Amelia', 'Quintero', 'Suarez', 17, 'rsamQS@gmail.com', 'rsamQS', '4a8a08f09d37b73795649038408b5f33', 'Activo'),
(4, 'Abel', 'Cazares', 'Perez', 23, 'AbCP123@gmail.com', 'abCP123', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(5, 'Nadia Luisa', 'Komanecci', 'Perez', 24, 'NaKP45@gmail.com', 'NaKP45', '0cc175b9c0f1b6a831c399e269772661', 'Inactivo'),
(6, 'Andrea Luisa', 'Bastidas', 'Carrillo', 23, 'ALBC23@hotmail.com', 'ALBC23', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(7, 'Angel Andres', 'Guzman', 'Salinas', 22, 'AnAGS@gmail.com', 'AnAGS', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(8, 'Alba Sofia', 'Aguirre', 'Hernandez', 19, 'AlbSA@gmail.com', 'AsAH', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(9, 'Susana Distancia', 'Torres ', 'Gonzales', 15, 'SdTG@hotmail.com', 'sdTG15', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(10, 'Hector Gerardo', 'Gonzales', 'Navarro', 19, 'hgGN@gmail.com', 'hgGN19', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(11, 'Sara Gloria', 'Cruz', 'Curiel', 23, 'sgCC@gmail.com', 'sgCC23', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(12, 'Erick', 'Aranda ', 'Espinoza', 21, 'eArEs@gmail.com', 'eArEs21', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(13, 'Paloma', 'Rosas', 'Valdez', 16, 'paRV@gmail.com', 'paRV16', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(14, 'Raul ', 'Espinoza', 'Cordero', 20, 'raEC@gmail.com', 'raEC20', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(15, 'Cristina Esperanza', 'Funes', 'Diaz', 17, 'ceFD@gmail.com', 'ceFD17', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(16, 'Luis Felipe', 'Santander ', 'Osorio', 22, 'lupSO@gmail.com', 'lufSO22', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(17, 'Beatriz Ximena', 'Vazquez', 'Salazar', 18, 'bexiVS@gmail.com', 'bexiVS18', '0cc175b9c0f1b6a831c399e269772661', 'Activo');

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
  `nom_usuario` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `u_maestros`
--

INSERT INTO `u_maestros` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `edad`, `email`, `nom_usuario`, `contrasenia`, `status`) VALUES
(1, 'Sandra Maria', 'Qui', 'Orozco', 56, 'sanQO@gmail.com', 'sanQO', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(2, 'Cesar Eduardo', 'Elmer', 'Omero', 56, 'YelR@gmail.com', 'yElMero', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(3, 'Mario', 'Ontiveros', 'Lazcano', 49, 'MarOL876@gmail.com', 'MarOL', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(4, 'Mario Luis', 'Ugarte', 'Zepedo', 53, 'MaLUZ53@gmail.com', 'MaLUZ53', '0cc175b9c0f1b6a831c399e269772661', 'Activo'),
(5, 'Jose Antonio', 'Navarro', 'Encinas', 47, 'JosAnNE48@gmail.com', 'JosAnNE48', '0cc175b9c0f1b6a831c399e269772661', 'Activo');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grupo_alumnos`
--
ALTER TABLE `grupo_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `u_alumnos`
--
ALTER TABLE `u_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `u_maestros`
--
ALTER TABLE `u_maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
