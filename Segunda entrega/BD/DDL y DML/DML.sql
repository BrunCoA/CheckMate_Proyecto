
INSERT INTO `administrador` (`ci`) VALUES
(51800449);

INSERT INTO `agenda` (`id_agenda`, `dia`, `hora_in`, `ci`, `id_asig`, `hora_fin`) VALUES
(1, '0000-00-00 00:00:00', NULL, 12312311, 1, NULL),
(2, '0000-00-00 00:00:00', NULL, 12345678, 2, NULL);

INSERT INTO `alumno` (`ci`, `apodo`) VALUES
(11111111, ''),
(51823293, ''),
(21123211, ''),
(78945612, '');

INSERT INTO `alumno_ingresa_grupo` (`ci`, `id_gr`) VALUES
(11111111, '1'),
(51823293, '2'),
(21123211, '2'),
(78945612, '1');

INSERT INTO `asignatura` (`id_asig`, `tipo`, `id_or`, `nom_asig`) VALUES
(1, 2, 1, 'matematica'),
(2, 2, 2, 'biologia'),
(3, 1, 1, 'astronomia'),
(4, 1, 1, 'sociologia'),
(5, 2, 3, 'filosofia'),
(6, 2, 4, 'formacion empresarial'),
(7, 2, 1, 'quimica');

INSERT INTO `consulta` (`num_cons`, `ci`, `estado`, `hora_in`, `hora_fin`, `fec_cons`) VALUES
(1, 78945612, NULL, NULL, NULL, NULL),
(2, 78945612, NULL, NULL, NULL, NULL),
(3, 51823293, NULL, NULL, NULL, NULL),
(4, 78945612, NULL, NULL, NULL, NULL),
(5, 11111111, NULL, NULL, NULL, NULL);

INSERT INTO `docente` (`ci`) VALUES
(12312311),
(12345678);

INSERT INTO `docente_dicta_asignatura` (`ci`, `id_asig`) VALUES
(12312311, 1),
(12345678, 2),
(12312311, 3),
(12312311, 4);

INSERT INTO `entra_sala` (`ci`, `hora_en`, `hora_sal`, `id_chat`, `anfitrion`) VALUES
(11111111, NULL, NULL, 1, NULL),
(51823293, NULL, NULL, 1, NULL);

INSERT INTO `grupo` (`id_gr`, `id_or`) VALUES
('1', 1),
('2', 2);

INSERT INTO `mensaje` (`id_mensaje`, `id_chat`, `ci`) VALUES
(1, 1, 12312311),
(2, 2, 21123211);

INSERT INTO `mensaje_asincronico` (`id_text_asin`, `ci`, `num_cons`) VALUES
(1, 21123211, 1),
(2, 21123211, 2),
(3, 78945612, 3),
(4, 78945612, 4);

INSERT INTO `orientacion` (`id_or`, `nom_or`) VALUES
(1, 'cientifico'),
(2, 'biologico'),
(3, 'artistico'),
(4, 'web');

INSERT INTO `sala_chat` (`id_chat`, `hora_inicio`, `hora_cierre`, `estado_chat`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL);

INSERT INTO `usuario` (`ci`, `nom`, `ape`, `activo`, `pass`, `foto`, `hora_conex`, `hora_des`) VALUES
(11111111, 'bruno', 'correa altez', 0, 'asdasd', '', '2021-09-14 01:59:40', NULL),
(12312311, 'joaquin', 'belando', 0, '4321asd', '', '2021-09-14 02:02:31', NULL),
(12345678, 'francisco', 'martinez', 0, 'cookie', '', '2021-09-14 02:02:59', NULL),
(21123211, 'brian', 'malvarez falero', 0, 'holahola', '', '2021-09-14 02:01:28', NULL),
(51800449, 'franco joaquin', 'machado rosales', 0, 'chau123', '', '2021-09-14 01:58:40', NULL),
(51823293, 'pablo', 'machado rosales', 0, '123133', '', '2021-09-14 02:00:36', NULL),
(78945612, 'agustin', 'camejo', 0, 'hola1234', '', '2021-09-14 02:02:03', NULL);