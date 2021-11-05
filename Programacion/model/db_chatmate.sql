-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 23:04:04
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_chatmate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ci` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ci`) VALUES
(11111111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(36) NOT NULL,
  `dia` timestamp NULL DEFAULT NULL,
  `hora_in` time DEFAULT NULL,
  `ci` int(8) DEFAULT NULL,
  `id_asig` int(36) DEFAULT NULL,
  `hora_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ci` int(8) NOT NULL,
  `apodo` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ci`, `apodo`, `foto`) VALUES
(22222222, 'joaquino', ''),
(51823293, 'bcorrea', ''),
(51800449, 'frankymachado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_ingresa_grupo`
--

CREATE TABLE `alumno_ingresa_grupo` (
  `ci` int(8) NOT NULL,
  `id_gr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_ingresa_grupo`
--

INSERT INTO `alumno_ingresa_grupo` (`ci`, `id_gr`) VALUES
(22222222, 2),
(51823293, 9),
(51800449, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asig` int(36) NOT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `id_or` int(36) NOT NULL,
  `nom_asig` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asig`, `tipo`, `id_or`, `nom_asig`) VALUES
(1, 1, 2, 'matematica'),
(2, 1, 3, 'matematica'),
(3, 1, 4, 'matematica'),
(4, 1, 5, 'matematica'),
(5, 1, 6, 'matematica'),
(6, 1, 1, 'biologia'),
(7, 0, 2, 'programacion web'),
(8, 0, 2, 'diseño web'),
(9, 1, 3, 'filosofia'),
(10, 0, 5, 'redes'),
(11, 1, 6, 'quimica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `num_cons` int(36) NOT NULL,
  `ci` int(8) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `hora_in` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fec_cons` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ci` int(8) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ci`, `foto`) VALUES
(33333333, ''),
(44444444, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_dicta_asignatura`
--

CREATE TABLE `docente_dicta_asignatura` (
  `ci` int(8) NOT NULL,
  `id_asig` int(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entra_sala`
--

CREATE TABLE `entra_sala` (
  `ci` int(8) NOT NULL,
  `hora_en` time DEFAULT NULL,
  `hora_sal` time DEFAULT NULL,
  `id_chat` int(36) NOT NULL,
  `anfitrion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_gr` int(4) NOT NULL,
  `nom_gr` varchar(5) NOT NULL,
  `id_or` int(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_gr`, `nom_gr`, `id_or`) VALUES
(1, '3ºBA', 1),
(2, '3ºBB', 1),
(3, '3ºBC', 1),
(4, '3ºBE', 1),
(5, '3ºBF', 1),
(6, '3ºBA', 2),
(7, '3ºBB', 2),
(8, '3ºBC', 2),
(9, '3ºBE', 2),
(10, '3ºBF', 2),
(11, '3ºBA', 3),
(12, '3ºBB', 3),
(13, '3ºBC', 4),
(14, '3ºBE', 5),
(15, '3ºBF', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(36) NOT NULL,
  `id_chat` int(36) NOT NULL,
  `ci` int(8) NOT NULL,
  `msj` mediumblob DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje_asincronico`
--

CREATE TABLE `mensaje_asincronico` (
  `id_text_asin` int(36) NOT NULL,
  `ci` int(8) NOT NULL,
  `num_cons` int(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientacion`
--

CREATE TABLE `orientacion` (
  `id_or` int(36) NOT NULL,
  `nom_or` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orientacion`
--

INSERT INTO `orientacion` (`id_or`, `nom_or`) VALUES
(1, 'biologico'),
(2, 'desarrollo web'),
(3, 'artistico'),
(4, 'videojuegos'),
(5, 'desarrollo y soporte'),
(6, 'cientifico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala_chat`
--

CREATE TABLE `sala_chat` (
  `id_chat` int(36) NOT NULL,
  `hora_inicio` timestamp NULL DEFAULT NULL,
  `hora_cierre` timestamp NULL DEFAULT NULL,
  `estado_chat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(8) NOT NULL,
  `p_nom` varchar(64) NOT NULL,
  `s_nom` varchar(64) NOT NULL,
  `p_ape` varchar(64) NOT NULL,
  `s_ape` varchar(64) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `pass` varchar(64) NOT NULL,
  `hora_conex` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora_des` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `activo`, `pass`, `hora_conex`, `hora_des`) VALUES
(11111111, 'admin', 'istrador', 'admin', 'istrator', 0, 'admin123321nimda', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(22222222, 'joaquin', 'belando', 'martinez', 'rodriguez', 0, 'a1a1a1a1', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(33333333, 'francisco', 'daniel', 'martinez', 'alvarado', 0, '122112', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(44444444, 'jhin', 'jhin', 'jhin', 'jhin', 0, 'sublime', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(51800449, 'franco', 'joaquin', 'machado', 'rosales', 0, 'franky1432ma4', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(51823293, 'bruno', '', 'correa', 'altez', 0, 'n2ajhe532ndwui', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(55555555, 'brian', '', 'alvarez', 'falero', 0, '55123', '2021-11-05 21:54:19', '2021-11-05 21:54:19'),
(66666666, 'juan', 'pablo', 'machado', 'rosales', 0, 'aa344o34hf', '2021-11-05 21:54:19', '2021-11-05 21:54:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD KEY `fk_administrador_ci` (`ci`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `fk_agenda_ci` (`ci`),
  ADD KEY `fk_agenda_id_asig` (`id_asig`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD KEY `fk_alumno_ci` (`ci`);

--
-- Indices de la tabla `alumno_ingresa_grupo`
--
ALTER TABLE `alumno_ingresa_grupo`
  ADD KEY `fk_alumno_ingresa_grupo_ci` (`ci`),
  ADD KEY `fk_alumno_ingresa_grupo_id_gr` (`id_gr`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asig`),
  ADD KEY `fk_asignatura_id_or` (`id_or`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`num_cons`),
  ADD KEY `fk_consulta_ci` (`ci`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD KEY `fk_docente_ci` (`ci`);

--
-- Indices de la tabla `docente_dicta_asignatura`
--
ALTER TABLE `docente_dicta_asignatura`
  ADD KEY `fk_docente_dicta_asignatura_ci` (`ci`),
  ADD KEY `fk_docente_dicta_asignatura_id_asig` (`id_asig`);

--
-- Indices de la tabla `entra_sala`
--
ALTER TABLE `entra_sala`
  ADD KEY `fk_entra_sala_id_chat` (`id_chat`),
  ADD KEY `fk_entra_sala_ci` (`ci`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_gr`),
  ADD KEY `fk_grupo_id_or` (`id_or`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `fk_mensaje_id_chat` (`id_chat`),
  ADD KEY `fk_mensaje_ci` (`ci`);

--
-- Indices de la tabla `mensaje_asincronico`
--
ALTER TABLE `mensaje_asincronico`
  ADD PRIMARY KEY (`id_text_asin`),
  ADD KEY `fk_mensaje_asincronico_num_cons` (`num_cons`),
  ADD KEY `fk_mensaje_asincronico_ci` (`ci`);

--
-- Indices de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  ADD PRIMARY KEY (`id_or`);

--
-- Indices de la tabla `sala_chat`
--
ALTER TABLE `sala_chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(36) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asig` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `num_cons` int(36) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_gr` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(36) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje_asincronico`
--
ALTER TABLE `mensaje_asincronico`
  MODIFY `id_text_asin` int(36) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id_or` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sala_chat`
--
ALTER TABLE `sala_chat`
  MODIFY `id_chat` int(36) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`);

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_ci` FOREIGN KEY (`ci`) REFERENCES `docente` (`ci`),
  ADD CONSTRAINT `fk_agenda_id_asig` FOREIGN KEY (`id_asig`) REFERENCES `asignatura` (`id_asig`);

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`);

--
-- Filtros para la tabla `alumno_ingresa_grupo`
--
ALTER TABLE `alumno_ingresa_grupo`
  ADD CONSTRAINT `fk_alumno_ingresa_grupo_ci` FOREIGN KEY (`ci`) REFERENCES `alumno` (`ci`),
  ADD CONSTRAINT `fk_alumno_ingresa_grupo_id_gr` FOREIGN KEY (`id_gr`) REFERENCES `grupo` (`id_gr`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `fk_asignatura_id_or` FOREIGN KEY (`id_or`) REFERENCES `orientacion` (`id_or`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fk_docente_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`);

--
-- Filtros para la tabla `docente_dicta_asignatura`
--
ALTER TABLE `docente_dicta_asignatura`
  ADD CONSTRAINT `fk_docente_dicta_asignatura_ci` FOREIGN KEY (`ci`) REFERENCES `docente` (`ci`),
  ADD CONSTRAINT `fk_docente_dicta_asignatura_id_asig` FOREIGN KEY (`id_asig`) REFERENCES `asignatura` (`id_asig`);

--
-- Filtros para la tabla `entra_sala`
--
ALTER TABLE `entra_sala`
  ADD CONSTRAINT `fk_entra_sala_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`),
  ADD CONSTRAINT `fk_entra_sala_id_chat` FOREIGN KEY (`id_chat`) REFERENCES `sala_chat` (`id_chat`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_id_or` FOREIGN KEY (`id_or`) REFERENCES `orientacion` (`id_or`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `fk_mensaje_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`),
  ADD CONSTRAINT `fk_mensaje_id_chat` FOREIGN KEY (`id_chat`) REFERENCES `sala_chat` (`id_chat`);

--
-- Filtros para la tabla `mensaje_asincronico`
--
ALTER TABLE `mensaje_asincronico`
  ADD CONSTRAINT `fk_mensaje_asincronico_ci` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`),
  ADD CONSTRAINT `fk_mensaje_asincronico_num_cons` FOREIGN KEY (`num_cons`) REFERENCES `consulta` (`num_cons`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
