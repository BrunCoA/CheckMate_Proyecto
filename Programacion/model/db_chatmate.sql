-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 02:36:53
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
  `apodo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_ingresa_grupo`
--

CREATE TABLE `alumno_ingresa_grupo` (
  `ci` int(8) NOT NULL,
  `id_gr` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `ci` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_gr` varchar(5) NOT NULL,
  `id_or` int(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(36) NOT NULL,
  `id_chat` int(36) NOT NULL,
  `ci` int(8) NOT NULL
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
  `s_nom` varchar(64) ,
  `p_ape` varchar(64) NOT NULL,
  `s_ape` varchar(64) ,
  `activo` tinyint(1) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `hora_conex` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora_des` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id_asig` int(36) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `num_cons` int(36) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_or` int(36) NOT NULL AUTO_INCREMENT;

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
