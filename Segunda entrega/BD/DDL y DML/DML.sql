INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (11111111, 'admin', 'istrador', 'admin', 'istrator', 'admin123321nimda');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (22222222, 'joaquin', 'belando', 'martinez', 'rodriguez', 'a1a1a1a1');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (33333333, 'francisco', 'daniel', 'martinez', 'alvarado', '122112');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (44444444, 'jhin', 'jhin', 'jhin', 'jhin', 'sublime');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (55555555, 'brian', '', 'alvarez', 'falero', '55123');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (51800449, 'franco', 'joaquin', 'machado', 'rosales', 'franky1432ma4');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (51823293, 'bruno', '', 'correa', 'altez', 'n2ajhe532ndwui');
INSERT INTO `usuario` (ci, `p_nom`, `s_nom`, `p_ape`, `s_ape`, `pass`) VALUES (66666666, 'juan', 'pablo', 'machado', 'rosales', 'aa344o34hf');

INSERT INTO `administrador` (ci) VALUES (11111111);

INSERT INTO `alumno` (`ci`, `apodo`) VALUES (22222222, 'joaquino'); 
INSERT INTO `alumno` (`ci`, `apodo`) VALUES (51823293, 'bcorrea');
INSERT INTO `alumno` (`ci`, `apodo`) VALUES (51800449, 'frankymachado');

INSERT INTO `docente` (`ci`) VALUES(33333333);
INSERT INTO `docente` (`ci`) VALUES(44444444);

INSERT INTO `orientacion` (`nom_or`) VALUES ('biologico');
INSERT INTO `orientacion` (`nom_or`) VALUES ('desarrollo web');
INSERT INTO `orientacion` (`nom_or`) VALUES ('artistico');
INSERT INTO `orientacion` (`nom_or`) VALUES ('videojuegos');
INSERT INTO `orientacion` (`nom_or`) VALUES ('desarrollo y soporte');
INSERT INTO `orientacion` (`nom_or`) VALUES ('cientifico');

INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 2, 'matematica');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 3, 'matematica');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 4, 'matematica');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 5, 'matematica');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 6, 'matematica');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 1, 'biologia');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (0, 2, 'programacion web');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (0, 2, 'diseño web');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 3, 'filosofia');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (0, 5, 'redes');
INSERT INTO `asignatura` (`tipo`, `id_or`, `nom_asig`) VALUES (1, 6, 'quimica');

INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBA', 1);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBB', 1);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBC', 1);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBE', 1);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBF', 1);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBA', 2);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBB', 2);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBC', 2);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBE', 2);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBF', 2);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBA', 3);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBB', 3);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBC', 4);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBE', 5);
INSERT INTO `grupo` (`nom_gr`, `id_or`) VALUES ('3ºBF', 6);










INSERT INTO `agenda` (`id_agenda`, `dia`, `hora_in`, `ci`, `id_asig`, `hora_fin`) VALUES
(1, '0000-00-00 00:00:00', NULL, 12312311, 1, NULL),
(2, '0000-00-00 00:00:00', NULL, 12345678, 2, NULL);

INSERT INTO `alumno_ingresa_grupo` (`ci`, `id_gr`) VALUES
(11111111, '1'),
(51823293, '2'),
(21123211, '2'),
(78945612, '1');

INSERT INTO `consulta` (`num_cons`, `ci`, `estado`, `hora_in`, `hora_fin`, `fec_cons`) VALUES
(1, 78945612, NULL, NULL, NULL, NULL),
(2, 78945612, NULL, NULL, NULL, NULL),
(3, 51823293, NULL, NULL, NULL, NULL),
(4, 78945612, NULL, NULL, NULL, NULL),
(5, 11111111, NULL, NULL, NULL, NULL);


INSERT INTO `docente_dicta_asignatura` (`ci`, `id_asig`) VALUES
(12312311, 1),
(12345678, 2),
(12312311, 3),
(12312311, 4);

INSERT INTO `entra_sala` (`ci`, `hora_en`, `hora_sal`, `id_chat`, `anfitrion`) VALUES
(11111111, NULL, NULL, 1, NULL),
(51823293, NULL, NULL, 1, NULL);


INSERT INTO `mensaje` (`id_mensaje`, `id_chat`, `ci`) VALUES
(1, 1, 12312311),
(2, 2, 21123211);

INSERT INTO `mensaje_asincronico` (`id_text_asin`, `ci`, `num_cons`) VALUES
(1, 21123211, 1),
(2, 21123211, 2),
(3, 78945612, 3),
(4, 78945612, 4);


INSERT INTO `sala_chat` (`id_chat`, `hora_inicio`, `hora_cierre`, `estado_chat`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL);