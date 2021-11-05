DROP DATABASE IF EXISTS db_chatmate;
CREATE DATABASE IF NOT EXISTS db_chatmate;

USE db_chatmate;

CREATE TABLE `usuario` (
  `ci` int(8) NOT NULL,
  `p_nom` varchar(64) NOT NULL,
  `s_nom` varchar(64) NOT NULL,
  `p_ape` varchar(64) NOT NULL,
  `s_ape` varchar(64) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0,
  `pass` varchar(64) NOT NULL,
  `hora_conex` timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora_des` timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `administrador` (
  `ci` int(8) NOT NULL,
  CONSTRAINT fk_administrador_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `docente` (
  `ci` int(8) NOT NULL,
  `foto` varchar(255) NOT NULL,
  CONSTRAINT fk_docente_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `alumno` (
  `ci` int(8) NOT NULL,
  `apodo` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  CONSTRAINT fk_alumno_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `orientacion` (
  `id_or` int(36) NOT NULL AUTO_INCREMENT,
  `nom_or` varchar(64) DEFAULT NULL,
  PRIMARY KEY (id_or)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `grupo` (
  `id_gr` int(4) NOT NULL AUTO_INCREMENT,
  `nom_gr` varchar(5) NOT NULL,
  `id_or` int(36) NOT NULL,
  PRIMARY KEY (id_gr),
  CONSTRAINT fk_grupo_id_or FOREIGN KEY (id_or) REFERENCES orientacion (id_or)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `asignatura` (
  `id_asig` int(36) NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) DEFAULT NULL,
  `id_or` int(36) NOT NULL,
  `nom_asig` varchar(64) DEFAULT NULL,
  PRIMARY KEY (id_asig),
  CONSTRAINT fk_asignatura_id_or FOREIGN KEY (id_or) REFERENCES orientacion (id_or)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `docente_dicta_asignatura` (
  `ci` int(8) NOT NULL,
  `id_asig` int(36) NOT NULL,
  CONSTRAINT fk_docente_dicta_asignatura_ci FOREIGN KEY (ci) REFERENCES docente(ci),
  CONSTRAINT fk_docente_dicta_asignatura_id_asig FOREIGN KEY (id_asig) REFERENCES asignatura (id_asig)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `alumno_ingresa_grupo` (
  `ci` int(8) NOT NULL,
  `id_gr` int(4) NOT NULL,
  CONSTRAINT fk_alumno_ingresa_grupo_ci FOREIGN KEY (ci) REFERENCES alumno (ci),
  CONSTRAINT fk_alumno_ingresa_grupo_id_gr FOREIGN KEY (id_gr) REFERENCES grupo (id_gr)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `agenda` (
  `id_agenda` int(36) NOT NULL AUTO_INCREMENT,
  `dia` timestamp NULL DEFAULT NULL,
  `hora_in` time DEFAULT NULL,
  `ci` int(8) DEFAULT NULL,
  `id_asig` int(36) DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  PRIMARY KEY (id_agenda),
  CONSTRAINT fk_agenda_ci FOREIGN KEY (ci) REFERENCES docente (ci),
  CONSTRAINT fk_agenda_id_asig FOREIGN KEY (id_asig) REFERENCES asignatura (id_asig)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `consulta` (
  `num_cons` int(36) NOT NULL AUTO_INCREMENT,
  `ci` int(8) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `hora_in` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fec_cons` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (num_cons),
  CONSTRAINT fk_consulta_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sala_chat` (
  `id_chat` int(36) NOT NULL AUTO_INCREMENT,
  `hora_inicio` timestamp NULL DEFAULT NULL,
  `hora_cierre` timestamp NULL DEFAULT NULL,
  `estado_chat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (id_chat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `entra_sala` (
  `ci` int(8) NOT NULL,
  `hora_en` time DEFAULT NULL,
  `hora_sal` time DEFAULT NULL,
  `id_chat` int(36) NOT NULL,
  `anfitrion` tinyint(1) DEFAULT NULL,
  CONSTRAINT fk_entra_sala_id_chat FOREIGN KEY (id_chat) REFERENCES sala_chat (id_chat),
  CONSTRAINT fk_entra_sala_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `mensaje` (
  `id_mensaje` int(36) NOT NULL AUTO_INCREMENT,
  `id_chat` int(36) NOT NULL,
  `ci` int(8) NOT NULL,
  `msj` mediumblob,
  `created_on` timestamp,
  PRIMARY KEY (id_mensaje),
  CONSTRAINT fk_mensaje_id_chat FOREIGN KEY (id_chat) REFERENCES sala_chat (id_chat),
  CONSTRAINT fk_mensaje_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `mensaje_asincronico` (
  `id_text_asin` int(36) NOT NULL AUTO_INCREMENT,
  `ci` int(8) NOT NULL,
  `num_cons` int(36) NOT NULL,
  PRIMARY KEY (id_text_asin),
  CONSTRAINT fk_mensaje_asincronico_num_cons FOREIGN KEY (num_cons) REFERENCES consulta (num_cons),
  CONSTRAINT fk_mensaje_asincronico_ci FOREIGN KEY (ci) REFERENCES usuario (ci)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



