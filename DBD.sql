-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2016 at 05:22 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DBD`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20141229162641, 'DbAcl', '2016-12-13 21:47:12', '2016-12-13 21:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 226),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Users', 14, 29),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'login', 17, 18),
(11, 8, NULL, NULL, 'logout', 19, 20),
(12, 8, NULL, NULL, 'view', 21, 22),
(13, 8, NULL, NULL, 'add', 23, 24),
(14, 8, NULL, NULL, 'edit', 25, 26),
(15, 8, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'Skill', 30, 41),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 1, NULL, NULL, 'Region', 42, 53),
(23, 22, NULL, NULL, 'index', 43, 44),
(24, 22, NULL, NULL, 'view', 45, 46),
(25, 22, NULL, NULL, 'add', 47, 48),
(26, 22, NULL, NULL, 'edit', 49, 50),
(27, 22, NULL, NULL, 'delete', 51, 52),
(28, 1, NULL, NULL, 'Task', 54, 65),
(29, 28, NULL, NULL, 'index', 55, 56),
(30, 28, NULL, NULL, 'view', 57, 58),
(31, 28, NULL, NULL, 'add', 59, 60),
(32, 28, NULL, NULL, 'edit', 61, 62),
(33, 28, NULL, NULL, 'delete', 63, 64),
(34, 1, NULL, NULL, 'Commune', 66, 77),
(35, 34, NULL, NULL, 'index', 67, 68),
(36, 34, NULL, NULL, 'view', 69, 70),
(37, 34, NULL, NULL, 'add', 71, 72),
(38, 34, NULL, NULL, 'edit', 73, 74),
(39, 34, NULL, NULL, 'delete', 75, 76),
(40, 1, NULL, NULL, 'Province', 78, 89),
(41, 40, NULL, NULL, 'index', 79, 80),
(42, 40, NULL, NULL, 'view', 81, 82),
(43, 40, NULL, NULL, 'add', 83, 84),
(44, 40, NULL, NULL, 'edit', 85, 86),
(45, 40, NULL, NULL, 'delete', 87, 88),
(46, 1, NULL, NULL, 'Mission', 90, 101),
(47, 46, NULL, NULL, 'index', 91, 92),
(48, 46, NULL, NULL, 'view', 93, 94),
(49, 46, NULL, NULL, 'add', 95, 96),
(50, 46, NULL, NULL, 'edit', 97, 98),
(51, 46, NULL, NULL, 'delete', 99, 100),
(52, 1, NULL, NULL, 'Emergency', 102, 113),
(53, 52, NULL, NULL, 'index', 103, 104),
(54, 52, NULL, NULL, 'view', 105, 106),
(55, 52, NULL, NULL, 'add', 107, 108),
(56, 52, NULL, NULL, 'edit', 109, 110),
(57, 52, NULL, NULL, 'delete', 111, 112),
(58, 1, NULL, NULL, 'Error', 114, 115),
(59, 1, NULL, NULL, 'Address', 116, 127),
(60, 59, NULL, NULL, 'index', 117, 118),
(61, 59, NULL, NULL, 'view', 119, 120),
(62, 59, NULL, NULL, 'add', 121, 122),
(63, 59, NULL, NULL, 'edit', 123, 124),
(64, 59, NULL, NULL, 'delete', 125, 126),
(65, 1, NULL, NULL, 'Pages', 128, 131),
(66, 65, NULL, NULL, 'display', 129, 130),
(67, 1, NULL, NULL, 'Administrator', 132, 143),
(68, 67, NULL, NULL, 'index', 133, 134),
(69, 67, NULL, NULL, 'view', 135, 136),
(70, 67, NULL, NULL, 'add', 137, 138),
(71, 67, NULL, NULL, 'edit', 139, 140),
(72, 67, NULL, NULL, 'delete', 141, 142),
(73, 1, NULL, NULL, 'Volunteer', 144, 155),
(74, 73, NULL, NULL, 'index', 145, 146),
(75, 73, NULL, NULL, 'view', 147, 148),
(76, 73, NULL, NULL, 'add', 149, 150),
(77, 73, NULL, NULL, 'edit', 151, 152),
(78, 73, NULL, NULL, 'delete', 153, 154),
(79, 1, NULL, NULL, 'Area', 156, 167),
(80, 79, NULL, NULL, 'index', 157, 158),
(81, 79, NULL, NULL, 'view', 159, 160),
(82, 79, NULL, NULL, 'add', 161, 162),
(83, 79, NULL, NULL, 'edit', 163, 164),
(84, 79, NULL, NULL, 'delete', 165, 166),
(85, 1, NULL, NULL, 'Notification', 168, 179),
(86, 85, NULL, NULL, 'index', 169, 170),
(87, 85, NULL, NULL, 'view', 171, 172),
(88, 85, NULL, NULL, 'add', 173, 174),
(89, 85, NULL, NULL, 'edit', 175, 176),
(90, 85, NULL, NULL, 'delete', 177, 178),
(91, 1, NULL, NULL, 'Acl', 180, 181),
(92, 1, NULL, NULL, 'Bake', 182, 183),
(93, 1, NULL, NULL, 'DebugKit', 184, 199),
(94, 93, NULL, NULL, 'Panels', 185, 190),
(95, 94, NULL, NULL, 'index', 186, 187),
(96, 94, NULL, NULL, 'view', 188, 189),
(97, 93, NULL, NULL, 'Requests', 191, 194),
(98, 97, NULL, NULL, 'view', 192, 193),
(99, 93, NULL, NULL, 'Toolbar', 195, 198),
(100, 99, NULL, NULL, 'clearCache', 196, 197),
(101, 1, NULL, NULL, 'Migrations', 200, 201),
(102, 1, NULL, NULL, 'Incharge', 202, 213),
(103, 102, NULL, NULL, 'index', 203, 204),
(104, 102, NULL, NULL, 'view', 205, 206),
(105, 102, NULL, NULL, 'add', 207, 208),
(106, 102, NULL, NULL, 'edit', 209, 210),
(107, 102, NULL, NULL, 'delete', 211, 212),
(108, 1, NULL, NULL, 'InCharge', 214, 215),
(109, 1, NULL, NULL, 'Incharge', 216, 217),
(110, 1, NULL, NULL, 'InCharge', 218, 219),
(111, 1, NULL, NULL, 'Home', 220, 225),
(112, 111, NULL, NULL, 'index', 221, 222),
(113, 111, NULL, NULL, 'login', 223, 224);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ADD_ID` int(11) NOT NULL,
  `COM_ID` int(11) DEFAULT NULL,
  `ADD_CALLE` varchar(64) DEFAULT NULL,
  `ADD_NUMERO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ADD_ID`, `COM_ID`, `ADD_CALLE`, `ADD_NUMERO`) VALUES
(1, 45, 'Blanco', 1733),
(2, 50, 'Baquedano', 169),
(3, 45, 'Blanco', 123);

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ADM_ID` int(11) NOT NULL,
  `ADM_NOMBRE1` varchar(25) DEFAULT NULL,
  `ADM_NOMBRE2` varchar(25) DEFAULT NULL,
  `ADM_APELLIDO1` varchar(25) DEFAULT NULL,
  `ADM_APELLIDO2` varchar(25) DEFAULT NULL,
  `ADM_TELEFONO` int(11) DEFAULT NULL,
  `ADM_MAIL` varchar(50) DEFAULT NULL,
  `ADM_UBICACION` varchar(50) DEFAULT NULL,
  `ADM_DISPONIBILIDAD` tinyint(1) DEFAULT NULL,
  `ADM_IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ADM_ID`, `ADM_NOMBRE1`, `ADM_NOMBRE2`, `ADM_APELLIDO1`, `ADM_APELLIDO2`, `ADM_TELEFONO`, `ADM_MAIL`, `ADM_UBICACION`, `ADM_DISPONIBILIDAD`, `ADM_IDUSER`) VALUES
(1, 'jose', 'antonio', 'camus', 'godoy', 72765333, 'jose.camus@usach.cl', 'CONCÓN', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AREA_ID` int(11) NOT NULL,
  `AREA_NOMBRE` varchar(30) DEFAULT NULL,
  `AREA_NUMERO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AREA_ID`, `AREA_NOMBRE`, `AREA_NUMERO`) VALUES
(1, 'ARICA', 1),
(2, 'CAMARONES', 2),
(3, 'PUTRE', 3),
(4, 'GENERAL LAGOS', 4),
(5, 'IQUIQUE', 5),
(6, 'ALTO HOSPICIO', 6),
(7, 'POZO ALMONTE', 7),
(8, 'CAMIÑA', 8),
(9, 'COLCHANE', 9),
(10, 'HUARA', 10),
(11, 'PICA', 11),
(12, 'ANTOFAGASTA', 12),
(13, 'MEJILLONES', 13),
(14, 'SIERRA GORDA', 14),
(15, 'TALTAL', 15),
(16, 'CALAMA', 16),
(17, 'OLLAGÜE', 17),
(18, 'SAN PEDRO DE ATACAMA', 18),
(19, 'TOCOPILLA', 19),
(20, 'MARÍA ELENA', 20),
(21, 'COPIAPÓ', 21),
(22, 'CALDERA', 22),
(23, 'TIERRA AMARILLA', 23),
(24, 'CHAÑARAL', 24),
(25, 'DIEGO DE ALMAGRO', 25),
(26, 'VALLENAR', 26),
(27, 'ALTO DEL CARMEN', 27),
(28, 'FREIRINA', 28),
(29, 'HUASCO', 29),
(30, 'LA SERENA', 30),
(31, 'COQUIMBO', 31),
(32, 'ANDACOLLO', 32),
(33, 'LA HIGUERA', 33),
(34, 'PAIGUANO', 34),
(35, 'VICUÑA', 35),
(36, 'ILLAPEL', 36),
(37, 'CANELA', 37),
(38, 'LOS VILOS', 38),
(39, 'SALAMANCA', 39),
(40, 'OVALLE', 40),
(41, 'COMBARBALÁ', 41),
(42, 'MONTE PATRIA', 42),
(43, 'PUNITAQUI', 43),
(44, 'RÍO HURTADO', 44),
(45, 'VALPARAÍSO', 45),
(46, 'CASABLANCA', 46),
(47, 'CONCÓN', 47),
(48, 'JUAN FERNÁNDEZ', 48),
(49, 'PUCHUNCAVÍ', 49),
(50, 'QUINTERO', 50),
(51, 'VIÑA DEL MAR', 51),
(52, 'ISLA DE PASCUA', 52),
(53, 'LOS ANDES', 53),
(54, 'CALLE LARGA', 54),
(55, 'RINCONADA', 55),
(56, 'SAN ESTEBAN', 56),
(57, 'LA LIGUA', 57),
(58, 'CABILDO', 58),
(59, 'PAPUDO', 59),
(60, 'PETORCA', 60),
(61, 'ZAPALLAR', 61),
(62, 'QUILLOTA', 62),
(63, 'CALERA', 63),
(64, 'HIJUELAS', 64),
(65, 'LA CRUZ', 65),
(66, 'NOGALES', 66),
(67, 'SAN ANTONIO', 67),
(68, 'ALGARROBO', 68),
(69, 'CARTAGENA', 69),
(70, 'EL QUISCO', 70),
(71, 'EL TABO', 71),
(72, 'SANTO DOMINGO', 72),
(73, 'SAN FELIPE', 73),
(74, 'CATEMU', 74),
(75, 'LLAILLAY', 75),
(76, 'PANQUEHUE', 76),
(77, 'PUTAENDO', 77),
(78, 'SANTA MARÍA', 78),
(79, 'LIMACHE', 79),
(80, 'QUILPUÉ', 80),
(81, 'VILLA ALEMANA', 81),
(82, 'OLMUÉ', 82),
(83, 'RANCAGUA', 83),
(84, 'CODEGUA', 84),
(85, 'COINCO', 85),
(86, 'COLTAUCO', 86),
(87, 'DOÑIHUE', 87),
(88, 'GRANEROS', 88),
(89, 'LAS CABRAS', 89),
(90, 'MACHALÍ', 90),
(91, 'MALLOA', 91),
(92, 'MOSTAZAL', 92),
(93, 'OLIVAR', 93),
(94, 'PEUMO', 94),
(95, 'PICHIDEGUA', 95),
(96, 'QUINTA DE TILCOCO', 96),
(97, 'RENGO', 97),
(98, 'REQUÍNOA', 98),
(99, 'SAN VICENTE', 99),
(100, 'PICHILEMU', 100),
(101, 'LA ESTRELLA', 101),
(102, 'LITUECHE', 102),
(103, 'MARCHIHUE', 103),
(104, 'NAVIDAD', 104),
(105, 'PAREDONES', 105),
(106, 'SAN FERNANDO', 106),
(107, 'CHÉPICA', 107),
(108, 'CHIMBARONGO', 108),
(109, 'LOLOL', 109),
(110, 'NANCAGUA', 110),
(111, 'PALMILLA', 111),
(112, 'PERALILLO', 112),
(113, 'PLACILLA', 113),
(114, 'PUMANQUE', 114),
(115, 'SANTA CRUZ', 115),
(116, 'TALCA', 116),
(117, 'CONSTITUCIÓN', 117),
(118, 'CUREPTO', 118),
(119, 'EMPEDRADO', 119),
(120, 'MAULE', 120),
(121, 'PELARCO', 121),
(122, 'PENCAHUE', 122),
(123, 'RÍO CLARO', 123),
(124, 'SAN CLEMENTE', 124),
(125, 'SAN RAFAEL', 125),
(126, 'CAUQUENES', 126),
(127, 'CHANCO', 127),
(128, 'PELLUHUE', 128),
(129, 'CURICÓ', 129),
(130, 'HUALAÑÉ', 130),
(131, 'LICANTÉN', 131),
(132, 'MOLINA', 132),
(133, 'RAUCO', 133),
(134, 'ROMERAL', 134),
(135, 'SAGRADA FAMILIA', 135),
(136, 'TENO', 136),
(137, 'VICHUQUÉN', 137),
(138, 'LINARES', 138),
(139, 'COLBÚN', 139),
(140, 'LONGAVÍ', 140),
(141, 'PARRAL', 141),
(142, 'RETIRO', 142),
(143, 'SAN JAVIER', 143),
(144, 'VILLA ALEGRE', 144),
(145, 'YERBAS BUENAS', 145),
(146, 'CONCEPCIÓN', 146),
(147, 'CORONEL', 147),
(148, 'CHIGUAYANTE', 148),
(149, 'FLORIDA', 149),
(150, 'HUALQUI', 150),
(151, 'LOTA', 151),
(152, 'PENCO', 152),
(153, 'SAN PEDRO DE LA PAZ', 153),
(154, 'SANTA JUANA', 154),
(155, 'TALCAHUANO', 155),
(156, 'TOMÉ', 156),
(157, 'HUALPÉN', 157),
(158, 'LEBU', 158),
(159, 'ARAUCO', 159),
(160, 'CAÑETE', 160),
(161, 'CONTULMO', 161),
(162, 'CURANILAHUE', 162),
(163, 'LOS ALAMOS', 163),
(164, 'TIRÚA', 164),
(165, 'LOS ANGELES', 165),
(166, 'ANTUCO', 166),
(167, 'CABRERO', 167),
(168, 'LAJA', 168),
(169, 'MULCHÉN', 169),
(170, 'NACIMIENTO', 170),
(171, 'NEGRETE', 171),
(172, 'QUILACO', 172),
(173, 'QUILLECO', 173),
(174, 'SAN ROSENDO', 174),
(175, 'SANTA BÁRBARA', 175),
(176, 'TUCAPEL', 176),
(177, 'YUMBEL', 177),
(178, 'ALTO BIOBÍO', 178),
(179, 'CHILLÁN', 179),
(180, 'BULNES', 180),
(181, 'COBQUECURA', 181),
(182, 'COELEMU', 182),
(183, 'COIHUECO', 183),
(184, 'CHILLÁN VIEJO', 184),
(185, 'EL CARMEN', 185),
(186, 'NINHUE', 186),
(187, 'ÑIQUÉN', 187),
(188, 'PEMUCO', 188),
(189, 'PINTO', 189),
(190, 'PORTEZUELO', 190),
(191, 'QUILLÓN', 191),
(192, 'QUIRIHUE', 192),
(193, 'RÁNQUIL', 193),
(194, 'SAN CARLOS', 194),
(195, 'SAN FABIÁN', 195),
(196, 'SAN IGNACIO', 196),
(197, 'SAN NICOLÁS', 197),
(198, 'TREGUACO', 198),
(199, 'YUNGAY', 199),
(200, 'TEMUCO', 200),
(201, 'CARAHUE', 201),
(202, 'CUNCO', 202),
(203, 'CURARREHUE', 203),
(204, 'FREIRE', 204),
(205, 'GALVARINO', 205),
(206, 'GORBEA', 206),
(207, 'LAUTARO', 207),
(208, 'LONCOCHE', 208),
(209, 'MELIPEUCO', 209),
(210, 'NUEVA IMPERIAL', 210),
(211, 'PADRE LAS CASAS', 211),
(212, 'PERQUENCO', 212),
(213, 'PITRUFQUÉN', 213),
(214, 'PUCÓN', 214),
(215, 'SAAVEDRA', 215),
(216, 'TEODORO SCHMIDT', 216),
(217, 'TOLTÉN', 217),
(218, 'VILCÚN', 218),
(219, 'VILLARRICA', 219),
(220, 'CHOLCHOL', 220),
(221, 'ANGOL', 221),
(222, 'COLLIPULLI', 222),
(223, 'CURACAUTÍN', 223),
(224, 'ERCILLA', 224),
(225, 'LONQUIMAY', 225),
(226, 'LOS SAUCES', 226),
(227, 'LUMACO', 227),
(228, 'PURÉN', 228),
(229, 'RENAICO', 229),
(230, 'TRAIGUÉN', 230),
(231, 'VICTORIA', 231),
(232, 'VALDIVIA', 232),
(233, 'CORRAL', 233),
(234, 'LANCO', 234),
(235, 'LOS LAGOS', 235),
(236, 'MÁFIL', 236),
(237, 'MARIQUINA', 237),
(238, 'PAILLACO', 238),
(239, 'PANGUIPULLI', 239),
(240, 'LA UNIÓN', 240),
(241, 'FUTRONO', 241),
(242, 'LAGO RANCO', 242),
(243, 'RÍO BUENO', 243),
(244, 'PUERTO MONTT', 244),
(245, 'CALBUCO', 245),
(246, 'COCHAMÓ', 246),
(247, 'FRESIA', 247),
(248, 'FRUTILLAR', 248),
(249, 'LOS MUERMOS', 249),
(250, 'LLANQUIHUE', 250),
(251, 'MAULLÍN', 251),
(252, 'PUERTO VARAS', 252),
(253, 'CASTRO', 253),
(254, 'ANCUD', 254),
(255, 'CHONCHI', 255),
(256, 'CURACO DE VÉLEZ', 256),
(257, 'DALCAHUE', 257),
(258, 'PUQUELDÓN', 258),
(259, 'QUEILÉN', 259),
(260, 'QUELLÓN', 260),
(261, 'QUEMCHI', 261),
(262, 'QUINCHAO', 262),
(263, 'OSORNO', 263),
(264, 'PUERTO OCTAY', 264),
(265, 'PURRANQUE', 265),
(266, 'PUYEHUE', 266),
(267, 'RÍO NEGRO', 267),
(268, 'SAN JUAN DE LA COSTA', 268),
(269, 'SAN PABLO', 269),
(270, 'CHAITÉN', 270),
(271, 'FUTALEUFÚ', 271),
(272, 'HUALAIHUÉ', 272),
(273, 'PALENA', 273),
(274, 'COIHAIQUE', 274),
(275, 'LAGO VERDE', 275),
(276, 'AISÉN', 276),
(277, 'CISNES', 277),
(278, 'GUAITECAS', 278),
(279, 'COCHRANE', 279),
(280, 'OHIGGINS', 280),
(281, 'TORTEL', 281),
(282, 'CHILE CHICO', 282),
(283, 'RÍO IBÁÑEZ', 283),
(284, 'PUNTA ARENAS', 284),
(285, 'LAGUNA BLANCA', 285),
(286, 'RÍO VERDE', 286),
(287, 'SAN GREGORIO', 287),
(288, 'CABO DE HORNOS', 288),
(289, 'ANTÁRTICA', 289),
(290, 'PORVENIR', 290),
(291, 'PRIMAVERA', 291),
(292, 'TIMAUKEL', 292),
(293, 'NATALES', 293),
(294, 'TORRES DEL PAINE', 294),
(295, 'SANTIAGO', 295),
(296, 'CERRILLOS', 296),
(297, 'CERRO NAVIA', 297),
(298, 'CONCHALÍ', 298),
(299, 'EL BOSQUE', 299),
(300, 'ESTACIÓN CENTRAL', 300),
(301, 'HUECHURABA', 301),
(302, 'INDEPENDENCIA', 302),
(303, 'LA CISTERNA', 303),
(304, 'LA FLORIDA', 304),
(305, 'LA GRANJA', 305),
(306, 'LA PINTANA', 306),
(307, 'LA REINA', 307),
(308, 'LAS CONDES', 308),
(309, 'LO BARNECHEA', 309),
(310, 'LO ESPEJO', 310),
(311, 'LO PRADO', 311),
(312, 'MACUL', 312),
(313, 'MAIPÚ', 313),
(314, 'ÑUÑOA', 314),
(315, 'PEDRO AGUIRRE CERDA', 315),
(316, 'PEÑALOLÉN', 316),
(317, 'PROVIDENCIA', 317),
(318, 'PUDAHUEL', 318),
(319, 'QUILICURA', 319),
(320, 'QUINTA NORMAL', 320),
(321, 'RECOLETA', 321),
(322, 'RENCA', 322),
(323, 'SAN JOAQUÍN', 323),
(324, 'SAN MIGUEL', 324),
(325, 'SAN RAMÓN', 325),
(326, 'VITACURA', 326),
(327, 'PUENTE ALTO', 327),
(328, 'PIRQUE', 328),
(329, 'SAN JOSÉ DE MAIPO', 329),
(330, 'COLINA', 330),
(331, 'LAMPA', 331),
(332, 'TILTIL', 332),
(333, 'SAN BERNARDO', 333),
(334, 'BUIN', 334),
(335, 'CALERA DE TANGO', 335),
(336, 'PAINE', 336),
(337, 'MELIPILLA', 337),
(338, 'ALHUÉ', 338),
(339, 'CURACAVÍ', 339),
(340, 'MARÍA PINTO', 340),
(341, 'SAN PEDRO', 341),
(342, 'TALAGANTE', 342),
(343, 'EL MONTE', 343),
(344, 'ISLA DE MAIPO', 344),
(345, 'PADRE HURTADO', 345),
(346, 'PEÑAFLOR', 346);

-- --------------------------------------------------------

--
-- Table structure for table `area_volunteer`
--

CREATE TABLE `area_volunteer` (
  `AREA_ID` int(11) NOT NULL,
  `VOL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 4),
(2, NULL, 'Groups', 2, NULL, 5, 6),
(3, NULL, 'Groups', 3, NULL, 7, 14),
(4, 1, 'Users', 1, NULL, 2, 3),
(5, 3, 'Users', 2, NULL, 12, 13),
(6, 3, 'Users', 3, NULL, 8, 9),
(7, 3, 'Users', 4, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `commune`
--

CREATE TABLE `commune` (
  `COM_ID` int(11) NOT NULL,
  `PRO_ID` int(11) DEFAULT NULL,
  `COM_NOMBRE` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commune`
--

INSERT INTO `commune` (`COM_ID`, `PRO_ID`, `COM_NOMBRE`) VALUES
(1, 1, 'ARICA'),
(2, 1, 'CAMARONES'),
(3, 2, 'PUTRE'),
(4, 2, 'GENERAL LAGOS'),
(5, 3, 'IQUIQUE'),
(6, 3, 'ALTO HOSPICIO'),
(7, 4, 'POZO ALMONTE'),
(8, 4, 'CAMIÑA'),
(9, 4, 'COLCHANE'),
(10, 4, 'HUARA'),
(11, 4, 'PICA'),
(12, 5, 'ANTOFAGASTA'),
(13, 5, 'MEJILLONES'),
(14, 5, 'SIERRA GORDA'),
(15, 5, 'TALTAL'),
(16, 6, 'CALAMA'),
(17, 6, 'OLLAGÜE'),
(18, 6, 'SAN PEDRO DE ATACAMA'),
(19, 7, 'TOCOPILLA'),
(20, 7, 'MARÍA ELENA'),
(21, 8, 'COPIAPÓ'),
(22, 8, 'CALDERA'),
(23, 8, 'TIERRA AMARILLA'),
(24, 9, 'CHAÑARAL'),
(25, 9, 'DIEGO DE ALMAGRO'),
(26, 10, 'VALLENAR'),
(27, 10, 'ALTO DEL CARMEN'),
(28, 10, 'FREIRINA'),
(29, 10, 'HUASCO'),
(30, 11, 'LA SERENA'),
(31, 11, 'COQUIMBO'),
(32, 11, 'ANDACOLLO'),
(33, 11, 'LA HIGUERA'),
(34, 11, 'PAIGUANO'),
(35, 11, 'VICUÑA'),
(36, 12, 'ILLAPEL'),
(37, 12, 'CANELA'),
(38, 12, 'LOS VILOS'),
(39, 12, 'SALAMANCA'),
(40, 13, 'OVALLE'),
(41, 13, 'COMBARBALÁ'),
(42, 13, 'MONTE PATRIA'),
(43, 13, 'PUNITAQUI'),
(44, 13, 'RÍO HURTADO'),
(45, 14, 'VALPARAÍSO'),
(46, 14, 'CASABLANCA'),
(47, 14, 'CONCÓN'),
(48, 14, 'JUAN FERNÁNDEZ'),
(49, 14, 'PUCHUNCAVÍ'),
(50, 14, 'QUINTERO'),
(51, 14, 'VIÑA DEL MAR'),
(52, 15, 'ISLA DE PASCUA'),
(53, 16, 'LOS ANDES'),
(54, 16, 'CALLE LARGA'),
(55, 16, 'RINCONADA'),
(56, 16, 'SAN ESTEBAN'),
(57, 17, 'LA LIGUA'),
(58, 17, 'CABILDO'),
(59, 17, 'PAPUDO'),
(60, 17, 'PETORCA'),
(61, 17, 'ZAPALLAR'),
(62, 18, 'QUILLOTA'),
(63, 18, 'CALERA'),
(64, 18, 'HIJUELAS'),
(65, 18, 'LA CRUZ'),
(66, 18, 'NOGALES'),
(67, 19, 'SAN ANTONIO'),
(68, 19, 'ALGARROBO'),
(69, 19, 'CARTAGENA'),
(70, 19, 'EL QUISCO'),
(71, 19, 'EL TABO'),
(72, 19, 'SANTO DOMINGO'),
(73, 20, 'SAN FELIPE'),
(74, 20, 'CATEMU'),
(75, 20, 'LLAILLAY'),
(76, 20, 'PANQUEHUE'),
(77, 20, 'PUTAENDO'),
(78, 20, 'SANTA MARÍA'),
(79, 21, 'LIMACHE'),
(80, 21, 'QUILPUÉ'),
(81, 21, 'VILLA ALEMANA'),
(82, 21, 'OLMUÉ'),
(83, 22, 'RANCAGUA'),
(84, 22, 'CODEGUA'),
(85, 22, 'COINCO'),
(86, 22, 'COLTAUCO'),
(87, 22, 'DOÑIHUE'),
(88, 22, 'GRANEROS'),
(89, 22, 'LAS CABRAS'),
(90, 22, 'MACHALÍ'),
(91, 22, 'MALLOA'),
(92, 22, 'MOSTAZAL'),
(93, 22, 'OLIVAR'),
(94, 22, 'PEUMO'),
(95, 22, 'PICHIDEGUA'),
(96, 22, 'QUINTA DE TILCOCO'),
(97, 22, 'RENGO'),
(98, 22, 'REQUÍNOA'),
(99, 22, 'SAN VICENTE'),
(100, 23, 'PICHILEMU'),
(101, 23, 'LA ESTRELLA'),
(102, 23, 'LITUECHE'),
(103, 23, 'MARCHIHUE'),
(104, 23, 'NAVIDAD'),
(105, 23, 'PAREDONES'),
(106, 24, 'SAN FERNANDO'),
(107, 24, 'CHÉPICA'),
(108, 24, 'CHIMBARONGO'),
(109, 24, 'LOLOL'),
(110, 24, 'NANCAGUA'),
(111, 24, 'PALMILLA'),
(112, 24, 'PERALILLO'),
(113, 24, 'PLACILLA'),
(114, 24, 'PUMANQUE'),
(115, 24, 'SANTA CRUZ'),
(116, 25, 'TALCA'),
(117, 25, 'CONSTITUCIÓN'),
(118, 25, 'CUREPTO'),
(119, 25, 'EMPEDRADO'),
(120, 25, 'MAULE'),
(121, 25, 'PELARCO'),
(122, 25, 'PENCAHUE'),
(123, 25, 'RÍO CLARO'),
(124, 25, 'SAN CLEMENTE'),
(125, 25, 'SAN RAFAEL'),
(126, 26, 'CAUQUENES'),
(127, 26, 'CHANCO'),
(128, 26, 'PELLUHUE'),
(129, 27, 'CURICÓ'),
(130, 27, 'HUALAÑÉ'),
(131, 27, 'LICANTÉN'),
(132, 27, 'MOLINA'),
(133, 27, 'RAUCO'),
(134, 27, 'ROMERAL'),
(135, 27, 'SAGRADA FAMILIA'),
(136, 27, 'TENO'),
(137, 27, 'VICHUQUÉN'),
(138, 28, 'LINARES'),
(139, 28, 'COLBÚN'),
(140, 28, 'LONGAVÍ'),
(141, 28, 'PARRAL'),
(142, 28, 'RETIRO'),
(143, 28, 'SAN JAVIER'),
(144, 28, 'VILLA ALEGRE'),
(145, 28, 'YERBAS BUENAS'),
(146, 29, 'CONCEPCIÓN'),
(147, 29, 'CORONEL'),
(148, 29, 'CHIGUAYANTE'),
(149, 29, 'FLORIDA'),
(150, 29, 'HUALQUI'),
(151, 29, 'LOTA'),
(152, 29, 'PENCO'),
(153, 29, 'SAN PEDRO DE LA PAZ'),
(154, 29, 'SANTA JUANA'),
(155, 29, 'TALCAHUANO'),
(156, 29, 'TOMÉ'),
(157, 29, 'HUALPÉN'),
(158, 30, 'LEBU'),
(159, 30, 'ARAUCO'),
(160, 30, 'CAÑETE'),
(161, 30, 'CONTULMO'),
(162, 30, 'CURANILAHUE'),
(163, 30, 'LOS ALAMOS'),
(164, 30, 'TIRÚA'),
(165, 31, 'LOS ANGELES'),
(166, 31, 'ANTUCO'),
(167, 31, 'CABRERO'),
(168, 31, 'LAJA'),
(169, 31, 'MULCHÉN'),
(170, 31, 'NACIMIENTO'),
(171, 31, 'NEGRETE'),
(172, 31, 'QUILACO'),
(173, 31, 'QUILLECO'),
(174, 31, 'SAN ROSENDO'),
(175, 31, 'SANTA BÁRBARA'),
(176, 31, 'TUCAPEL'),
(177, 31, 'YUMBEL'),
(178, 31, 'ALTO BIOBÍO'),
(179, 32, 'CHILLÁN'),
(180, 32, 'BULNES'),
(181, 32, 'COBQUECURA'),
(182, 32, 'COELEMU'),
(183, 32, 'COIHUECO'),
(184, 32, 'CHILLÁN VIEJO'),
(185, 32, 'EL CARMEN'),
(186, 32, 'NINHUE'),
(187, 32, 'ÑIQUÉN'),
(188, 32, 'PEMUCO'),
(189, 32, 'PINTO'),
(190, 32, 'PORTEZUELO'),
(191, 32, 'QUILLÓN'),
(192, 32, 'QUIRIHUE'),
(193, 32, 'RÁNQUIL'),
(194, 32, 'SAN CARLOS'),
(195, 32, 'SAN FABIÁN'),
(196, 32, 'SAN IGNACIO'),
(197, 32, 'SAN NICOLÁS'),
(198, 32, 'TREGUACO'),
(199, 32, 'YUNGAY'),
(200, 33, 'TEMUCO'),
(201, 33, 'CARAHUE'),
(202, 33, 'CUNCO'),
(203, 33, 'CURARREHUE'),
(204, 33, 'FREIRE'),
(205, 33, 'GALVARINO'),
(206, 33, 'GORBEA'),
(207, 33, 'LAUTARO'),
(208, 33, 'LONCOCHE'),
(209, 33, 'MELIPEUCO'),
(210, 33, 'NUEVA IMPERIAL'),
(211, 33, 'PADRE LAS CASAS'),
(212, 33, 'PERQUENCO'),
(213, 33, 'PITRUFQUÉN'),
(214, 33, 'PUCÓN'),
(215, 33, 'SAAVEDRA'),
(216, 33, 'TEODORO SCHMIDT'),
(217, 33, 'TOLTÉN'),
(218, 33, 'VILCÚN'),
(219, 33, 'VILLARRICA'),
(220, 33, 'CHOLCHOL'),
(221, 34, 'ANGOL'),
(222, 34, 'COLLIPULLI'),
(223, 34, 'CURACAUTÍN'),
(224, 34, 'ERCILLA'),
(225, 34, 'LONQUIMAY'),
(226, 34, 'LOS SAUCES'),
(227, 34, 'LUMACO'),
(228, 34, 'PURÉN'),
(229, 34, 'RENAICO'),
(230, 34, 'TRAIGUÉN'),
(231, 34, 'VICTORIA'),
(232, 35, 'VALDIVIA'),
(233, 35, 'CORRAL'),
(234, 35, 'LANCO'),
(235, 35, 'LOS LAGOS'),
(236, 35, 'MÁFIL'),
(237, 35, 'MARIQUINA'),
(238, 35, 'PAILLACO'),
(239, 35, 'PANGUIPULLI'),
(240, 36, 'LA UNIÓN'),
(241, 36, 'FUTRONO'),
(242, 36, 'LAGO RANCO'),
(243, 36, 'RÍO BUENO'),
(244, 37, 'PUERTO MONTT'),
(245, 37, 'CALBUCO'),
(246, 37, 'COCHAMÓ'),
(247, 37, 'FRESIA'),
(248, 37, 'FRUTILLAR'),
(249, 37, 'LOS MUERMOS'),
(250, 37, 'LLANQUIHUE'),
(251, 37, 'MAULLÍN'),
(252, 37, 'PUERTO VARAS'),
(253, 38, 'CASTRO'),
(254, 38, 'ANCUD'),
(255, 38, 'CHONCHI'),
(256, 38, 'CURACO DE VÉLEZ'),
(257, 38, 'DALCAHUE'),
(258, 38, 'PUQUELDÓN'),
(259, 38, 'QUEILÉN'),
(260, 38, 'QUELLÓN'),
(261, 38, 'QUEMCHI'),
(262, 38, 'QUINCHAO'),
(263, 39, 'OSORNO'),
(264, 39, 'PUERTO OCTAY'),
(265, 39, 'PURRANQUE'),
(266, 39, 'PUYEHUE'),
(267, 39, 'RÍO NEGRO'),
(268, 39, 'SAN JUAN DE LA COSTA'),
(269, 39, 'SAN PABLO'),
(270, 40, 'CHAITÉN'),
(271, 40, 'FUTALEUFÚ'),
(272, 40, 'HUALAIHUÉ'),
(273, 40, 'PALENA'),
(274, 41, 'COIHAIQUE'),
(275, 41, 'LAGO VERDE'),
(276, 42, 'AISÉN'),
(277, 42, 'CISNES'),
(278, 42, 'GUAITECAS'),
(279, 43, 'COCHRANE'),
(280, 43, 'O\'HIGGINS'),
(281, 43, 'TORTEL'),
(282, 44, 'CHILE CHICO'),
(283, 44, 'RÍO IBÁÑEZ'),
(284, 45, 'PUNTA ARENAS'),
(285, 45, 'LAGUNA BLANCA'),
(286, 45, 'RÍO VERDE'),
(287, 45, 'SAN GREGORIO'),
(288, 46, 'CABO DE HORNOS'),
(289, 46, 'ANTÁRTICA'),
(290, 47, 'PORVENIR'),
(291, 47, 'PRIMAVERA'),
(292, 47, 'TIMAUKEL'),
(293, 48, 'NATALES'),
(294, 48, 'TORRES DEL PAINE'),
(295, 49, 'SANTIAGO'),
(296, 49, 'CERRILLOS'),
(297, 49, 'CERRO NAVIA'),
(298, 49, 'CONCHALÍ'),
(299, 49, 'EL BOSQUE'),
(300, 49, 'ESTACIÓN CENTRAL'),
(301, 49, 'HUECHURABA'),
(302, 49, 'INDEPENDENCIA'),
(303, 49, 'LA CISTERNA'),
(304, 49, 'LA FLORIDA'),
(305, 49, 'LA GRANJA'),
(306, 49, 'LA PINTANA'),
(307, 49, 'LA REINA'),
(308, 49, 'LAS CONDES'),
(309, 49, 'LO BARNECHEA'),
(310, 49, 'LO ESPEJO'),
(311, 49, 'LO PRADO'),
(312, 49, 'MACUL'),
(313, 49, 'MAIPÚ'),
(314, 49, 'ÑUÑOA'),
(315, 49, 'PEDRO AGUIRRE CERDA'),
(316, 49, 'PEÑALOLÉN'),
(317, 49, 'PROVIDENCIA'),
(318, 49, 'PUDAHUEL'),
(319, 49, 'QUILICURA'),
(320, 49, 'QUINTA NORMAL'),
(321, 49, 'RECOLETA'),
(322, 49, 'RENCA'),
(323, 49, 'SAN JOAQUÍN'),
(324, 49, 'SAN MIGUEL'),
(325, 49, 'SAN RAMÓN'),
(326, 49, 'VITACURA'),
(327, 50, 'PUENTE ALTO'),
(328, 50, 'PIRQUE'),
(329, 50, 'SAN JOSÉ DE MAIPO'),
(330, 51, 'COLINA'),
(331, 51, 'LAMPA'),
(332, 51, 'TILTIL'),
(333, 52, 'SAN BERNARDO'),
(334, 52, 'BUIN'),
(335, 52, 'CALERA DE TANGO'),
(336, 52, 'PAINE'),
(337, 53, 'MELIPILLA'),
(338, 53, 'ALHUÉ'),
(339, 53, 'CURACAVÍ'),
(340, 53, 'MARÍA PINTO'),
(341, 53, 'SAN PEDRO'),
(342, 54, 'TALAGANTE'),
(343, 54, 'EL MONTE'),
(344, 54, 'ISLA DE MAIPO'),
(345, 54, 'PADRE HURTADO'),
(346, 54, 'PEÑAFLOR');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `EMER_ID` int(11) NOT NULL,
  `AREA_ID` int(11) NOT NULL,
  `ADM_ID` int(11) NOT NULL,
  `EMER_NOMBRE` varchar(50) DEFAULT NULL,
  `EMER_FECHA` date DEFAULT NULL,
  `EMER_ESTADO` varchar(20) DEFAULT NULL,
  `EMER_DESCRIPCION` text,
  `EMER_GRAVEDAD` varchar(20) DEFAULT NULL,
  `EMER_RANGO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`EMER_ID`, `AREA_ID`, `ADM_ID`, `EMER_NOMBRE`, `EMER_FECHA`, `EMER_ESTADO`, `EMER_DESCRIPCION`, `EMER_GRAVEDAD`, `EMER_RANGO`) VALUES
(1, 45, 1, 'Terremoto en Valparaíso', '2016-12-07', 'En curso', 'Terremoto grado 8.5 en Valparaíso, el cual ocasionó derrumbamientos de terreno, acumulación de escombros y destrucción de hogares.', 'Alta', 10);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_volunteer`
--

CREATE TABLE `emergency_volunteer` (
  `VOL_ID` int(11) DEFAULT NULL,
  `EMER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-12-13 18:50:27', '2016-12-13 18:50:27'),
(2, 'Encargado', '2016-12-13 18:50:32', '2016-12-13 18:50:32'),
(3, 'Voluntario', '2016-12-13 18:50:37', '2016-12-13 18:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `in_charge`
--

CREATE TABLE `in_charge` (
  `IN_ID` int(11) NOT NULL,
  `ADD_ID` int(11) DEFAULT NULL,
  `IN_NOMBRE1` varchar(25) DEFAULT NULL,
  `IN_NOMBRE2` varchar(25) DEFAULT NULL,
  `IN_APELLIDO2` varchar(25) DEFAULT NULL,
  `IN_TELEFONO` int(11) DEFAULT NULL,
  `IN_EMAIL` varchar(50) DEFAULT NULL,
  `IN_UBICACION` varchar(50) DEFAULT NULL,
  `IN_DISPONIBILIDAD` tinyint(1) DEFAULT NULL,
  `IN_IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_charge`
--

INSERT INTO `in_charge` (`IN_ID`, `ADD_ID`, `IN_NOMBRE1`, `IN_NOMBRE2`, `IN_APELLIDO2`, `IN_TELEFONO`, `IN_EMAIL`, `IN_UBICACION`, `IN_DISPONIBILIDAD`, `IN_IDUSER`) VALUES
(1, 1, 'Cristian', 'Andrés', 'Lineros', 72765334, 'critian.lineros@usach.cl', 'VALPARAÍSO', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `MIS_ID` int(11) NOT NULL,
  `IN_ID` int(11) DEFAULT NULL,
  `EMER_ID` int(11) DEFAULT NULL,
  `MIS_NOMBRE` varchar(30) DEFAULT NULL,
  `MIS_DESCRIPCION` text,
  `MIS_ESTADO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`MIS_ID`, `IN_ID`, `EMER_ID`, `MIS_NOMBRE`, `MIS_DESCRIPCION`, `MIS_ESTADO`) VALUES
(1, 1, 1, 'Rescate de personas', 'Buscar gente desaparecida y trasladar a los heridos.', 'En curso');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NOT_ID` int(11) NOT NULL,
  `NOT_MENSAJE` varchar(256) DEFAULT NULL,
  `NOT_TIPO` varchar(32) DEFAULT NULL,
  `NOT_ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_adm`
--

CREATE TABLE `not_adm` (
  `ADM_ID` int(11) DEFAULT NULL,
  `NOT_ID` int(11) DEFAULT NULL,
  `NA_ESTADO` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_in_charge`
--

CREATE TABLE `not_in_charge` (
  `NOT_ID` int(11) DEFAULT NULL,
  `IN_ID` int(11) DEFAULT NULL,
  `NI_ESTADO` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_vol`
--

CREATE TABLE `not_vol` (
  `NOT_ID` int(11) DEFAULT NULL,
  `VOL_ID` int(11) DEFAULT NULL,
  `NV_ESTADO` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `PRO_ID` int(11) NOT NULL,
  `REG_ID` int(11) DEFAULT NULL,
  `PRO_NOMBRE` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`PRO_ID`, `REG_ID`, `PRO_NOMBRE`) VALUES
(1, 1, 'ARICA'),
(2, 1, 'PARINACOTA'),
(3, 2, 'IQUIQUE'),
(4, 2, 'TAMARUGAL'),
(5, 3, 'ANTOFAGASTA'),
(6, 3, 'EL LOA'),
(7, 3, 'TOCOPILLA'),
(8, 4, 'COPIAPÓ'),
(9, 4, 'CHAÑARAL'),
(10, 4, 'HUASCO'),
(11, 5, 'ELQUI'),
(12, 5, 'CHOAPA'),
(13, 5, 'LIMARÍ'),
(14, 6, 'VALPARAÍSO'),
(15, 6, 'ISLA DE PASCUA'),
(16, 6, 'LOS ANDES'),
(17, 6, 'PETORCA'),
(18, 6, 'QUILLOTA'),
(19, 6, 'SAN ANTONIO'),
(20, 6, 'SAN FELIPE DE ACONCAGUA'),
(21, 6, 'MARGA MARGA'),
(22, 7, 'CACHAPOAL'),
(23, 7, 'CARDENAL CARO'),
(24, 7, 'COLCHAGUA'),
(25, 8, 'TALCA'),
(26, 8, 'CAUQUENES'),
(27, 8, 'CURICÓ'),
(28, 8, 'LINARES'),
(29, 9, 'CONCEPCIÓN'),
(30, 9, 'ARAUCO'),
(31, 9, 'BIOBÍO'),
(32, 9, 'ÑUBLE'),
(33, 10, 'CAUTÍN'),
(34, 10, 'MALLECO'),
(35, 11, 'VALDIVIA'),
(36, 11, 'RANCO'),
(37, 12, 'LLANQUIHUE'),
(38, 12, 'CHILOÉ'),
(39, 12, 'OSORNO'),
(40, 12, 'PALENA'),
(41, 13, 'COIHAIQUE'),
(42, 13, 'AISÉN'),
(43, 13, 'CAPITÁN PRAT'),
(44, 13, 'GENERAL CARRERA'),
(45, 14, 'MAGALLANES'),
(46, 14, 'ANTÁRTICA CHILENA'),
(47, 14, 'TIERRA DEL FUEGO'),
(48, 14, 'ULTIMA ESPERANZA'),
(49, 15, 'SANTIAGO'),
(50, 15, 'CORDILLERA'),
(51, 15, 'CHACABUCO'),
(52, 15, 'MAIPO'),
(53, 15, 'MELIPILLA'),
(54, 15, 'TALAGANTE');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `REG_ID` int(11) NOT NULL,
  `REG_NOMBRE` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`REG_ID`, `REG_NOMBRE`) VALUES
(1, 'ARICA Y PARINACOTA'),
(2, 'TARAPACÁ'),
(3, 'ANTOFAGASTA'),
(4, 'ATACAMA'),
(5, 'COQUIMBO'),
(6, 'VALPARAÍSO'),
(7, 'DEL LIBERTADOR GRAL. BERNARDO O\'HIGGINS'),
(8, 'DEL MAULE'),
(9, 'DEL BIOBÍO '),
(10, 'DE LA ARAUCANÍA'),
(11, 'DE LOS RÍOS'),
(12, 'DE LOS LAGOS'),
(13, 'AISÉN DEL GRAL. CARLOS IBAÑEZ DEL CAMPO'),
(14, 'MAGALLANES Y DE LA ANTÁRTICA CHILENA'),
(15, 'METROPOLITANA DE SANTIAGO');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `SKILL_ID` int(11) NOT NULL,
  `SKILL_NOMBRE` varchar(30) DEFAULT NULL,
  `SKILL_DIFICULTAD` int(11) DEFAULT NULL,
  `SKILL_DESCRIPCION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`SKILL_ID`, `SKILL_NOMBRE`, `SKILL_DIFICULTAD`, `SKILL_DESCRIPCION`) VALUES
(1, 'Licencia de conducir A3', 4, 'Traslado de persona');

-- --------------------------------------------------------

--
-- Table structure for table `skill_volunteer`
--

CREATE TABLE `skill_volunteer` (
  `VOL_ID` int(11) DEFAULT NULL,
  `SKILL_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TASK_ID` int(11) NOT NULL,
  `MIS_ID` int(11) DEFAULT NULL,
  `TASK_NOMBRE` varchar(30) DEFAULT NULL,
  `TASK_CANTIDAD` int(11) DEFAULT NULL,
  `TASK_ESTADO` varchar(30) DEFAULT NULL,
  `TASK_DESCRIPCION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TASK_ID`, `MIS_ID`, `TASK_NOMBRE`, `TASK_CANTIDAD`, `TASK_ESTADO`, `TASK_DESCRIPCION`) VALUES
(1, 1, 'Transporte de personas', 2, 'En curso', 'Se necesita trasladar personas a los refugios.');

-- --------------------------------------------------------

--
-- Table structure for table `task_skill`
--

CREATE TABLE `task_skill` (
  `TASK_ID` int(11) DEFAULT NULL,
  `SKILL_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_volunteer`
--

CREATE TABLE `task_volunteer` (
  `TASK_ID` int(11) DEFAULT NULL,
  `VOL_ID` int(11) DEFAULT NULL,
  `TV_SOLICITUD` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'camus', '$2y$10$vD4prlxAWi8tN6fa7r5ZwOIAsYIQJJdM1w5oxtCc5eHt6F5y2vFkG', 1, '2016-12-13 18:50:53', '2016-12-13 18:50:53'),
(2, 'cristian', '$2y$10$BZNOTDT/2QF9D4b0uFDWD.m5633G4XAek05uI5ziYYYDjpch9CqDq', 2, '2016-12-13 18:51:03', '2016-12-13 20:17:05'),
(3, 'jean', '$2y$10$I87SIeqdnwhUY8bZSdq7duiif9B5B7UrZamCCg81lpj60UIf5jUki', 3, '2016-12-13 18:51:13', '2016-12-13 18:51:13'),
(4, 'jose.camusg@gmail.com', '$2y$10$ErQOU.8hZ72r90Ce305aCehaoCJcNwYp3cCmDkhggUFbI.1tueDYa', 3, '2016-12-13 20:17:05', '2016-12-13 20:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `VOL_ID` int(11) NOT NULL,
  `ADD_ID` int(11) DEFAULT NULL,
  `VOL_NOMBRE1` varchar(25) DEFAULT NULL,
  `VOL_NOMBRE2` varchar(25) DEFAULT NULL,
  `VOL_APELLIDO1` varchar(25) DEFAULT NULL,
  `VOL_APELLIDO2` varchar(25) DEFAULT NULL,
  `VOL_TELEFONO` int(11) DEFAULT NULL,
  `VOL_EMAIL` varchar(50) DEFAULT NULL,
  `VOL_DISPONIBILIDAD` tinyint(1) DEFAULT NULL,
  `VOL_RANK` int(11) DEFAULT NULL,
  `VOL_IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`VOL_ID`, `ADD_ID`, `VOL_NOMBRE1`, `VOL_NOMBRE2`, `VOL_APELLIDO1`, `VOL_APELLIDO2`, `VOL_TELEFONO`, `VOL_EMAIL`, `VOL_DISPONIBILIDAD`, `VOL_RANK`, `VOL_IDUSER`) VALUES
(1, 2, 'Jean', 'Carlos', 'Cabello', 'Mandujano', 72765335, 'jean.cabello@usach.cl', 1, 0, 3),
(2, 3, 'Juan', 'José', 'Acevedo', 'Acevedo', 1234567, 'jose.camusg@gmail.com', 0, 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ADD_ID`),
  ADD KEY `FK_PERTENECE_11` (`COM_ID`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ADM_ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AREA_ID`);

--
-- Indexes for table `area_volunteer`
--
ALTER TABLE `area_volunteer`
  ADD PRIMARY KEY (`AREA_ID`,`VOL_ID`),
  ADD KEY `FK_AREA_VOLUNTEER2` (`VOL_ID`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `FK_PERTENECE_12` (`PRO_ID`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`EMER_ID`),
  ADD KEY `FK_TIENE_4` (`AREA_ID`);

--
-- Indexes for table `emergency_volunteer`
--
ALTER TABLE `emergency_volunteer`
  ADD KEY `FK_ASOCIA1` (`EMER_ID`),
  ADD KEY `FK_ASOCIA2` (`VOL_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_charge`
--
ALTER TABLE `in_charge`
  ADD PRIMARY KEY (`IN_ID`),
  ADD KEY `FK_TIENE_45` (`ADD_ID`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`MIS_ID`),
  ADD KEY `FK_TIENE_1` (`IN_ID`),
  ADD KEY `FK_TIENE_2` (`EMER_ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NOT_ID`);

--
-- Indexes for table `not_adm`
--
ALTER TABLE `not_adm`
  ADD KEY `FK_RELA3` (`NOT_ID`),
  ADD KEY `FK_RELA4` (`ADM_ID`);

--
-- Indexes for table `not_in_charge`
--
ALTER TABLE `not_in_charge`
  ADD KEY `FK_RELA1` (`NOT_ID`),
  ADD KEY `FK_RELA2` (`IN_ID`);

--
-- Indexes for table `not_vol`
--
ALTER TABLE `not_vol`
  ADD KEY `FK_TIENE_38` (`NOT_ID`),
  ADD KEY `FK_TIENE_40` (`VOL_ID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`PRO_ID`),
  ADD KEY `FK_PERTENECE_13` (`REG_ID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`REG_ID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`SKILL_ID`);

--
-- Indexes for table `skill_volunteer`
--
ALTER TABLE `skill_volunteer`
  ADD KEY `FK_TIENE_7` (`SKILL_ID`),
  ADD KEY `FK_TIENE_8` (`VOL_ID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TASK_ID`),
  ADD KEY `FK_TIENE_3` (`MIS_ID`);

--
-- Indexes for table `task_skill`
--
ALTER TABLE `task_skill`
  ADD KEY `FK_TIENE_5` (`TASK_ID`),
  ADD KEY `FK_TIENE_6` (`SKILL_ID`);

--
-- Indexes for table `task_volunteer`
--
ALTER TABLE `task_volunteer`
  ADD KEY `FK_TIENE_30` (`VOL_ID`),
  ADD KEY `FK_TIENE_31` (`TASK_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`VOL_ID`),
  ADD KEY `FK_TIENE_43` (`ADD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ADD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ADM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AREA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `commune`
--
ALTER TABLE `commune`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;
--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `EMER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `in_charge`
--
ALTER TABLE `in_charge`
  MODIFY `IN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `MIS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NOT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `SKILL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `TASK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `VOL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_PERTENECE_11` FOREIGN KEY (`COM_ID`) REFERENCES `commune` (`COM_ID`);

--
-- Constraints for table `area_volunteer`
--
ALTER TABLE `area_volunteer`
  ADD CONSTRAINT `FK_AREA_VOLUNTEER` FOREIGN KEY (`AREA_ID`) REFERENCES `area` (`AREA_ID`),
  ADD CONSTRAINT `FK_AREA_VOLUNTEER2` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`);

--
-- Constraints for table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `FK_PERTENECE_12` FOREIGN KEY (`PRO_ID`) REFERENCES `province` (`PRO_ID`);

--
-- Constraints for table `emergency`
--
ALTER TABLE `emergency`
  ADD CONSTRAINT `FK_TIENE_10` FOREIGN KEY (`EMER_ID`) REFERENCES `administrator` (`ADM_ID`),
  ADD CONSTRAINT `FK_TIENE_4` FOREIGN KEY (`AREA_ID`) REFERENCES `area` (`AREA_ID`);

--
-- Constraints for table `emergency_volunteer`
--
ALTER TABLE `emergency_volunteer`
  ADD CONSTRAINT `FK_ASOCIA1` FOREIGN KEY (`EMER_ID`) REFERENCES `emergency` (`EMER_ID`),
  ADD CONSTRAINT `FK_ASOCIA2` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`);

--
-- Constraints for table `in_charge`
--
ALTER TABLE `in_charge`
  ADD CONSTRAINT `FK_TIENE_45` FOREIGN KEY (`ADD_ID`) REFERENCES `address` (`ADD_ID`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `FK_TIENE_1` FOREIGN KEY (`IN_ID`) REFERENCES `in_charge` (`IN_ID`),
  ADD CONSTRAINT `FK_TIENE_2` FOREIGN KEY (`EMER_ID`) REFERENCES `emergency` (`EMER_ID`);

--
-- Constraints for table `not_adm`
--
ALTER TABLE `not_adm`
  ADD CONSTRAINT `FK_RELA3` FOREIGN KEY (`NOT_ID`) REFERENCES `notification` (`NOT_ID`),
  ADD CONSTRAINT `FK_RELA4` FOREIGN KEY (`ADM_ID`) REFERENCES `administrator` (`ADM_ID`);

--
-- Constraints for table `not_in_charge`
--
ALTER TABLE `not_in_charge`
  ADD CONSTRAINT `FK_RELA1` FOREIGN KEY (`NOT_ID`) REFERENCES `notification` (`NOT_ID`),
  ADD CONSTRAINT `FK_RELA2` FOREIGN KEY (`IN_ID`) REFERENCES `in_charge` (`IN_ID`);

--
-- Constraints for table `not_vol`
--
ALTER TABLE `not_vol`
  ADD CONSTRAINT `FK_TIENE_38` FOREIGN KEY (`NOT_ID`) REFERENCES `notification` (`NOT_ID`),
  ADD CONSTRAINT `FK_TIENE_40` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `FK_PERTENECE_13` FOREIGN KEY (`REG_ID`) REFERENCES `region` (`REG_ID`);

--
-- Constraints for table `skill_volunteer`
--
ALTER TABLE `skill_volunteer`
  ADD CONSTRAINT `FK_TIENE_7` FOREIGN KEY (`SKILL_ID`) REFERENCES `skill` (`SKILL_ID`),
  ADD CONSTRAINT `FK_TIENE_8` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `FK_TIENE_3` FOREIGN KEY (`MIS_ID`) REFERENCES `mission` (`MIS_ID`);

--
-- Constraints for table `task_skill`
--
ALTER TABLE `task_skill`
  ADD CONSTRAINT `FK_TIENE_5` FOREIGN KEY (`TASK_ID`) REFERENCES `task` (`TASK_ID`),
  ADD CONSTRAINT `FK_TIENE_6` FOREIGN KEY (`SKILL_ID`) REFERENCES `skill` (`SKILL_ID`);

--
-- Constraints for table `task_volunteer`
--
ALTER TABLE `task_volunteer`
  ADD CONSTRAINT `FK_TIENE_30` FOREIGN KEY (`VOL_ID`) REFERENCES `volunteer` (`VOL_ID`),
  ADD CONSTRAINT `FK_TIENE_31` FOREIGN KEY (`TASK_ID`) REFERENCES `task` (`TASK_ID`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `FK_TIENE_43` FOREIGN KEY (`ADD_ID`) REFERENCES `address` (`ADD_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
