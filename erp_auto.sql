-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2023 a las 01:26:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp_auto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id` int(11) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `tabla` varchar(40) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id`, `estatus`, `tabla`, `descripcion`) VALUES
(1, 'Activo', 'trabajadores', NULL),
(2, 'Baja', 'trabajadores', NULL),
(3, 'Pendiente', 'trabajadores', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `puesto`, `descripcion`) VALUES
(1, 'Gerencia Administrativa', NULL),
(2, 'Director General', NULL),
(3, 'Gerencia de Recursos Humanos', NULL),
(4, 'Recursos Humanos', NULL),
(5, 'Vigilancia', NULL),
(6, 'Limpieza', NULL),
(7, 'Sistemas', NULL),
(8, 'Coordinador de Atencion a Clientes', NULL),
(9, 'Auxiliar de Atencion a Clientes', NULL),
(10, 'Gerencia de Compras', NULL),
(11, 'Aux. Compras', NULL),
(12, 'Zapata', NULL),
(13, 'Accesorios', NULL),
(14, 'Materias Primas', NULL),
(15, 'Montacargas', NULL),
(16, 'Operador Granalla', NULL),
(17, 'Operador Adhesivo', NULL),
(18, 'Planecion', NULL),
(19, 'Planeadores', NULL),
(20, 'Jefe de Produccion MMP', NULL),
(21, 'Gerencia Produccion', NULL),
(22, 'Jefe de Produccion Flash', NULL),
(23, 'Coordinador Preformas', NULL),
(24, 'Coordinador Presas Flash', NULL),
(25, 'Operador Prensas moldeo positivo', NULL),
(26, 'Operador Preformas', NULL),
(27, 'Operador Presas flash', NULL),
(28, 'Operador  Rectificado', NULL),
(29, 'Operador  Pintura', NULL),
(30, 'Operador Octopus', NULL),
(31, 'Operador Codificado', NULL),
(32, 'Operador Empaque', NULL),
(33, 'Operador Accesorios', NULL),
(34, 'Operador Shim', NULL),
(35, 'Operador de Mezclas Disco', NULL),
(36, 'Encargado de Mezclas Disco', NULL),
(37, 'Jefe de Acabado Disco', NULL),
(38, 'Gerencia Ingenieria de Producto', NULL),
(39, 'Director Planta', NULL),
(40, 'Auxiliar de Ingenieria de Producto', NULL),
(41, 'Jefe de Aseguramiento de Calidad', NULL),
(42, 'Auditor de Embarques', NULL),
(43, 'Inspector de control de Calidad', NULL),
(44, 'Montacarguista', NULL),
(45, 'Laboratorio', NULL),
(46, 'Coordinador de Sistemas de gestion', NULL),
(47, 'Gerencia de Mantenimiento', NULL),
(48, 'Jefe de Mantenimiento', NULL),
(49, 'Ayudante de Mecanico y Electrico', NULL),
(50, 'Gerencia de Logistica', NULL),
(51, 'Jefe de Almacen de Producto Terminado', NULL),
(52, 'Chofer', NULL),
(53, 'Montacarguista', NULL),
(54, 'Ayudante general', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `numTarjeta` int(4) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `sexo` char(2) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nota` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `accesoPanel` tinyint(1) NOT NULL DEFAULT 0,
  `sistemaPerfil` varchar(50) DEFAULT NULL,
  `idPuesto` int(11) NOT NULL,
  `idEstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `numTarjeta`, `nombre`, `apellido`, `sexo`, `foto`, `nota`, `password`, `accesoPanel`, `sistemaPerfil`, `idPuesto`, `idEstatus`) VALUES
(1, 124, 'SUSANA DIANA', 'CASASOLA SANDOVAL', 'M', NULL, '', '', 0, '', 54, 1),
(2, 266, 'CECILIA', 'RODRIGUEZ MONTOYA', 'M', NULL, '', '', 0, '', 54, 1),
(3, 348, 'MARIA INES', 'ESTRADA CASASOLA', 'M', NULL, '', '', 0, '', 54, 1),
(4, 351, 'ADELA ATILA', 'ESTRADA CASASOLA', 'M', NULL, '', '', 0, '', 54, 1),
(5, 552, 'JUDITH MARIBEL', 'SALDAÑA CORONA', 'M', NULL, '', '', 0, '', 54, 1),
(6, 445, 'ADRIANA', 'ESPINOZA CERON', 'M', NULL, '', '', 0, '', 54, 1),
(7, 476, 'GLORIA', 'MARTINEZ ORTEGA', 'M', NULL, '', '', 0, '', 54, 1),
(8, 563, 'CLAUDIA DOLORES', 'SANTOS MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(9, 3, 'JAIME', 'SALINAS GONZALEZ', 'H', NULL, '', '', 0, '', 54, 1),
(10, 644, 'JONATHAN JESUS', 'GARCIA FLORES', 'H', NULL, '', '', 0, '', 54, 1),
(11, 655, 'ELVIRA PAZ', 'RODRIGUEZ TENORIO', 'M', NULL, '', '', 0, '', 54, 1),
(12, 714, 'MARIA MARIBEL', 'GUTIERREZ ORTIZ', 'M', NULL, '', '', 0, '', 54, 1),
(13, 740, 'ALFONSO', 'REYES MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(14, 834, 'ANTONIO', 'BASILIO FRANCISCO', 'H', NULL, '', '', 0, '', 54, 1),
(15, 844, 'BRENDA PAOLA', 'HERNANDEZ HINOJOSA', 'M', NULL, '', '', 0, '', 54, 1),
(16, 867, 'VERONICA', 'MARTINEZ HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(17, 898, 'ESTHEL', 'GARCIA GARCIA', 'M', NULL, '', '', 0, '', 54, 1),
(18, 929, 'GALILEA', 'MIRANDA HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(19, 944, 'FABIOLA', 'VALDES SIERRA', 'M', NULL, '', '', 0, '', 54, 1),
(20, 653, 'MARTHA ALICIA', 'MARQUEZ RAMIREZ', 'M', NULL, '', '', 0, '', 54, 1),
(21, 1002, 'EDGAR OSVALDO', 'DIAZ MORALES', 'H', NULL, '', '', 0, '', 54, 1),
(22, 1079, 'DIANA PAOLA', 'HERNANDEZ MARTINEZ', 'M', NULL, 'dos asteriscos', '', 0, '', 54, 1),
(23, 1091, 'VIANEY', 'GAMA EUSTAQUIO', 'M', NULL, '', '', 0, '', 54, 1),
(24, 580, 'ALEJANDRA', 'RESENDIZ LOPEZ', 'M', NULL, '', '', 0, '', 54, 1),
(25, 1110, 'MARISOL', 'MENDOZA VILLANUEVA', 'M', NULL, '', '', 0, '', 54, 1),
(26, 1157, 'CARMEN KARINA', 'SANCHEZ ONTIVEROS', 'M', NULL, '', '', 0, '', 54, 1),
(27, 1172, 'VICTOR MANUEL', 'MARTINEZ ORTEGA', 'H', NULL, '', '', 0, '', 54, 1),
(28, 1179, 'KEVIN GERSON', 'SANCHEZ QUINTO', 'H', NULL, '', '', 0, '', 54, 1),
(29, 1188, 'ALAN JEOVANNY', 'MONTIEL VELAZQUEZ', 'H', NULL, '', '', 0, '', 54, 1),
(30, 1200, 'YAHIR ALEJANDRO', 'GARCIA PEREZ', 'H', NULL, '', '', 0, '', 54, 1),
(31, 474, 'BRENDA HOREB', 'ALEMAN ARIAS', 'M', NULL, '', '', 0, '', 54, 1),
(32, 1216, 'ANGELICA', 'HERNANDEZ MIGUEL', 'M', NULL, '', '', 0, '', 54, 1),
(33, 1225, 'JOSE GERARDO', 'HERN?NDEZ SANCHEZ', 'H', NULL, '', '', 0, '', 54, 1),
(34, 1232, 'LETICIA', 'LORENZO LORENZO', 'M', NULL, '', '', 0, '', 54, 1),
(35, 1247, 'BEATRIZ ADRIANA', 'BECERRA FLORES', 'M', NULL, '', '', 0, '', 54, 1),
(36, 1259, 'MIGUEL', 'DIAZ CASTRO', 'H', NULL, '', '', 0, '', 54, 1),
(37, 893, 'BLANCA VIANEY', 'HERNANDEZ MARTINEZ', 'M', NULL, 'dos asteriscos', '', 0, '', 54, 1),
(38, 1117, 'ANGELICA', 'RAMIREZ VIGUERAS', 'M', NULL, 'un asterisco', '', 0, '', 54, 1),
(39, 1264, 'GABRIEL', 'GARCIA GARCIA', 'H', NULL, '', '', 0, '', 54, 1),
(40, 1155, 'OSCAR', 'OLVERA COLIN', 'H', NULL, '', '', 0, '', 54, 1),
(41, 1293, 'ERNESTO', 'RESENDIZ LOPEZ', 'H', NULL, '', '', 0, '', 54, 1),
(42, 1298, 'LUIS ENRIQUE', 'BUSTOS ANTONIO', 'H', NULL, '', '', 0, '', 54, 1),
(43, 1301, 'GABRIELA', 'PRADO TORRES', 'M', NULL, '', '', 0, '', 54, 1),
(44, 1308, 'ROSA', 'GARCIA ALCANTAR', 'M', NULL, '', '', 0, '', 54, 1),
(45, 1309, 'SUSANA', 'TOLEDO LOPEZ', 'M', NULL, '', '', 0, '', 54, 1),
(46, 1319, 'NANCY BETZABEL', 'MONTIEL VELAZQUEZ', 'M', NULL, '', '', 0, '', 54, 1),
(47, 1320, 'MAURICIO', 'GONZALEZ RANGEL', 'H', NULL, '', '', 0, '', 54, 1),
(48, 1322, 'PAOLA MARGARITA', 'BARTOLO LEON', 'M', NULL, '', '', 0, '', 54, 1),
(49, 1325, 'VANESSA', 'ANGELES RESENDIZ', 'M', NULL, '', '', 0, '', 54, 1),
(50, 1326, 'ITZEL', 'ROJAS ENZASTIGA', 'M', NULL, '', '', 0, '', 54, 1),
(51, 1329, 'YOLANDA', 'PINEDA JIMENEZ', 'M', NULL, '', '', 0, '', 54, 1),
(52, 1330, 'ADRIANA', 'SANCHEZ RAMIREZ', 'M', NULL, '', '', 0, '', 54, 1),
(53, 1331, 'FATIMA LORENA', 'HERNANDEZ ORTEGA', 'M', NULL, '', '', 0, '', 54, 1),
(54, 1333, 'ERNESTO', 'QUEZADA MONROY', 'H', NULL, '', '', 0, '', 54, 1),
(55, 1336, 'ANDREA ARACELI', 'SILVERIO CASTILLO', 'M', NULL, '', '', 0, '', 54, 1),
(56, 1338, 'YESICCA', 'GALINDO GUTIERREZ', 'M', NULL, '', '', 0, '', 54, 1),
(57, 1350, 'CRISTIAN', 'SALINAS MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(58, 1351, 'BENJAMIN LEANDRO', 'HERNANDEZ RAMIREZ', 'H', NULL, '', '', 0, '', 54, 1),
(59, 1355, 'ABIGAIL JACQUELINE', 'CASASOLA JANDETE', 'M', NULL, '', '', 0, '', 54, 1),
(60, 1357, 'JOSELINE', 'GALINDO CASASOLA', 'M', NULL, '', '', 0, '', 54, 1),
(61, 1358, 'ALICIA', 'GALINDO CASASOLA', 'M', NULL, '', '', 0, '', 54, 1),
(62, 1364, 'ALDO ALEJANDRO', 'ALDANA NAVARRETE', 'H', NULL, '', '', 0, '', 54, 1),
(63, 1370, 'ANA KAREN', 'PINEDA RAMIREZ', 'M', NULL, '', '', 0, '', 54, 1),
(64, 1372, 'OSCAR EDUARDO', 'VARGAS ESTRADA', 'H', NULL, '', '', 0, '', 54, 1),
(65, 1374, 'MAGDALENA', 'SILVA VELAZQUEZ', 'M', NULL, '', '', 0, '', 54, 1),
(66, 1376, 'CESAR IVAN', 'QUEZADA HERNANDEZ', 'H', NULL, '', '', 0, '', 54, 1),
(67, 1377, 'JOSE DAVID', 'ALARCON BERNAL', 'H', NULL, '', '', 0, '', 54, 1),
(68, 1378, 'JONATHAN FRANCISCO', 'ALARCON BERNAL', 'H', NULL, '', '', 0, '', 54, 1),
(69, 1381, 'ALEXIS', 'OROZCO GONZALEZ', 'H', NULL, '', '', 0, '', 54, 1),
(70, 184, 'MARTHA MARIA', 'BUSTOS HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(71, 1382, 'ENRIQUE JHOAN', 'SALINAS MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(72, 456, 'NANCY ARELI', 'GARCIA MARTINEZ', 'M', NULL, 'dos asteriscos', '', 0, '', 54, 1),
(73, 461, 'ALBERTO', 'GARCIA MORALES', 'H', NULL, '', '', 0, '', 54, 1),
(74, 484, 'DIONICIA', 'SALINAS HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(75, 1068, 'PERLA SUHEY', 'RODRIGUEZ CRUZ', 'M', NULL, '', '', 0, '', 54, 1),
(76, 991, 'LUCIANA', 'MONTALVO PEREZ', 'M', NULL, '', '', 0, '', 54, 1),
(77, 1104, 'MICAELA', 'GUERRA ANGELES', 'M', NULL, '', '', 0, '', 54, 1),
(78, 833, 'NOEMI', 'PLIEGO GOMEZ', 'M', NULL, '', '', 0, '', 54, 1),
(79, 1141, 'ANGELICA', 'LOPEZ VERA', 'M', NULL, '', '', 0, '', 54, 1),
(80, 1088, 'XOCHITL', 'FRANCISCO HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(81, 1171, 'ESTEBAN', 'RAMIREZ SINTO', 'H', NULL, 'un asterisco', '', 0, '', 54, 1),
(82, 1316, 'CECILIA ARELY', 'ROJAS ENZASTIGA', 'M', NULL, '', '', 0, '', 54, 1),
(83, 1317, 'RUBI', 'GUTIERREZ MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(84, 1339, 'ANGEL GABRIEL', 'SANTOYO LOPEZ', 'H', NULL, '', '', 0, '', 54, 1),
(85, 1347, 'AXEL EDUARDO', 'SALINAS GONZALEZ', 'H', NULL, '', '', 0, '', 54, 1),
(86, 1348, 'EDGAR', 'SALINAS GONZALEZ', 'H', NULL, '', '', 0, '', 54, 1),
(87, 1354, 'DAMARIS', 'CHAVEZ MARQUEZ', 'M', NULL, '', '', 0, '', 54, 1),
(88, 1360, 'JADIRA', 'GALINDO GUTIERREZ', 'M', NULL, '', '', 0, '', 54, 1),
(89, 1361, 'LEODEGARIA ', 'HERNANDEZ MORENO', 'M', NULL, '', '', 0, '', 54, 1),
(90, 1365, 'ALAN GUSTAVO', 'CHAVARRIA BRAVO', 'H', NULL, '', '', 0, '', 54, 1),
(91, 1366, 'SALOME', 'DIAZ ORIZONTE', 'M', NULL, '', '', 0, '', 54, 1),
(92, 1368, 'NOE ISRAEL', 'MONTES DE OCA BUSTOS', 'H', NULL, '', '', 0, '', 54, 1),
(93, 1369, 'CLAUDIA LILIANA', 'RODRIGUEZ CASTRO', 'M', NULL, '', '', 0, '', 54, 1),
(94, 1379, 'BRENDA AHTZIRI', 'ALONSO TREJO', 'M', NULL, '', '', 0, '', 54, 1),
(95, 335, 'FANNY ROSALIA', 'SALAS ANGUIANO', 'M', NULL, '', '', 0, '', 54, 1),
(96, 423, 'ANA LIDIA', 'MENDOZA LEMUS', 'M', NULL, '', '', 0, '', 54, 1),
(97, 587, 'ALONDRA OLGA', 'RIVERO AGUILAR', 'M', NULL, '', '', 0, '', 54, 1),
(98, 607, 'MARIA DE LA LUZ ', 'GARCIA FLORES', 'M', NULL, '', '', 0, '', 54, 1),
(99, 879, 'SANDRA', 'MANZANO MONROY', 'M', NULL, '', '', 0, '', 54, 1),
(100, 1083, 'GERARDO', 'BACILIO FRANCISCO', 'H', NULL, '', '', 0, '', 54, 1),
(101, 1164, 'LESLIE', 'JIMENEZ AVILA', 'M', NULL, '', '', 0, '', 54, 1),
(102, 1205, 'ZAIRA MARIA', 'ALEMAN ARIAS', 'M', NULL, '', '', 0, '', 54, 1),
(103, 1236, 'MARIA GUADALUPE', 'SANTIAGO CRUZ', 'M', NULL, '', '', 0, '', 54, 1),
(104, 1241, 'MONICA', 'HERNANDEZ MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(105, 1246, 'LEYDI', 'GOMEZ JIMENEZ', 'M', NULL, '', '', 0, '', 54, 1),
(106, 1344, 'MA. DE LOURDES BERNALDA', 'GARCIA GARCIA', 'M', NULL, '', '', 0, '', 54, 1),
(107, 141, 'ANA LILIA', 'GARAY CABALLERO', 'M', NULL, 'dos asteriscos', '', 0, '', 54, 1),
(108, 1356, 'INGRID JETSIBE', 'GARCIA CABELLO', 'M', NULL, '', '', 0, '', 54, 1),
(109, 1346, 'JOHANN HASSAM', 'GONZALEZ ESCAMILLA', 'H', NULL, '', '', 0, '', 54, 1),
(110, 524, 'IGNACIO', 'PEREZ VILLANUEVA', 'H', NULL, '', '', 0, '', 54, 1),
(111, 584, 'ADRIAN', 'REYES RAMIREZ', 'H', NULL, '', '', 0, '', 54, 1),
(112, 597, 'RUTILO', 'REYES RAMIREZ', 'H', NULL, '', '', 0, '', 54, 1),
(113, 709, 'ANA IVON', 'GARCIA FLORES', 'M', NULL, '', '', 0, '', 54, 1),
(114, 741, 'WILLIAM', 'JIMENEZ HERNANDEZ', 'H', NULL, '', '', 0, '', 54, 1),
(115, 1073, 'LETICIA', 'MENDIOLA DELGADO', 'M', NULL, '', '', 0, '', 54, 1),
(116, 647, 'NAYELI VANESSA', 'SALAZAR DURAN', 'M', NULL, '', '', 0, '', 54, 1),
(117, 570, 'OCTAVIO GABRIEL', 'AOKI CORONA', 'H', NULL, '', '', 0, '', 54, 1),
(118, 1090, 'VERONICA EMIGDIA', 'SANCHEZ GARCIA', 'M', NULL, '', '', 0, '', 54, 1),
(119, 726, 'VICENTE', 'CRUZ GONZALEZ', 'H', NULL, '', '', 0, '', 54, 1),
(120, 581, 'MARIA NATALIA', 'GARCIA GARCIA', 'M', NULL, '', '', 0, '', 54, 1),
(121, 1034, 'YERENA MIRIAM', 'ESTRADA HERNANDEZ', 'M', NULL, '', '', 0, '', 54, 1),
(122, 1048, 'DIANA', 'HERNANDEZ GARCIA', 'M', NULL, '', '', 0, '', 54, 1),
(123, 1244, 'JESUS', 'ALAVEZ GARCIA', 'H', NULL, '', '', 0, '', 54, 1),
(124, 350, 'ROSICELA', 'ESTRADA PEREZ', 'M', NULL, '', '', 0, '', 54, 1),
(125, 899, 'ISIDRA', 'LOPEZ LOPEZ', 'M', NULL, '', '', 0, '', 54, 1),
(126, 1180, 'ISMAEL', 'CHAVEZ MEDINA', 'H', NULL, '', '', 0, '', 54, 1),
(127, 1276, 'VALERIA', 'FLORES MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(128, 1275, 'BRANDON ISMAEL', 'HERNANDEZ BECERRA', 'H', NULL, '', '', 0, '', 54, 1),
(129, 2, 'RODOLFO', 'REAL MORALES', 'H', NULL, '', '', 0, '', 54, 1),
(130, 56, 'JORGE', 'RODRIGUEZ MOTA', 'H', NULL, '', '', 0, '', 54, 1),
(131, 434, 'ENRIQUE', 'GUTIERREZ ORTIZ', 'H', NULL, '', '', 0, '', 54, 1),
(132, 465, 'VERONICA', 'MEZA MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(133, 543, 'EDUARDO', 'MARTINEZ NAVARRO', 'H', NULL, '', '', 0, '', 54, 1),
(134, 567, 'JOSE LUIS', 'LOPEZ PASCUAL', 'H', NULL, '', '', 0, '', 54, 1),
(135, 585, 'FERNANDO', 'CORONA GOMEZ', 'H', NULL, '', '', 0, '', 54, 1),
(136, 620, 'NILDA HILARY', 'GARCIA MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(137, 643, 'LIZBETH MAGDALENA', 'GARCIA MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(138, 837, 'MARCO ANTONIO', 'ENCISO GARCIA', 'H', NULL, '', 'Mar123', 1, 'Administrador', 7, 1),
(139, 993, 'VICTORIA ITZEL', 'PEREZ PAREDES', 'M', NULL, '', '', 0, '', 54, 1),
(140, 641, 'YESSICA PAMELA', 'CORONA MONTIEL', 'M', NULL, '', '', 0, '', 54, 1),
(141, 699, 'ITZEL AMAYRANI', 'REAL LOPEZ', 'M', NULL, '', '', 0, '', 54, 1),
(142, 1066, 'SANDRA YADIRA', 'MIJANGOS NAJERA', 'M', NULL, '', '', 0, '', 54, 1),
(143, 1130, 'ZURI SADAI', 'HERNANDEZ MAYA', 'M', NULL, '', '', 0, '', 54, 1),
(144, 554, 'JOSE ARTURO', 'SANCHEZ MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(145, 921, 'NATHALY', 'LOPEZ CHAVEZ', 'M', NULL, '', '', 0, '', 54, 1),
(146, 1340, 'SUSANA ANAID', 'SIERRA CARRERA', 'M', NULL, '', '', 0, '', 54, 1),
(147, 43, 'COLUMBA', 'DE LOS SANTOS MONTAÑO', 'M', NULL, '', '', 0, '', 54, 1),
(148, 1199, 'CONCEPCION', 'JIMENEZ GARCIA', 'H', NULL, '', '', 0, '', 54, 1),
(149, 803, 'JORGE ARMANDO', 'CEDEÑO MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(150, 866, 'JUANA', 'CERON LAZARO', 'M', NULL, '', '', 0, '', 54, 1),
(151, 852, 'MARCELA', 'VALENTIN CAYETANO', 'M', NULL, '', '', 0, '', 54, 1),
(152, 1145, 'ESPERANZA ELIZABETH', 'ROSAS SALINAS', 'M', NULL, '', '', 0, '', 54, 1),
(153, 586, 'JUAN CARLOS', 'LICONA GABRIEL', 'H', NULL, '', '', 0, '', 54, 1),
(154, 612, 'RODRIGO', 'MORALES BALDERAS', 'H', NULL, '', '', 0, '', 54, 1),
(155, 541, 'HERMELINDA', 'MIGUEL SANTIAGO', 'M', NULL, '', '', 0, '', 54, 1),
(156, 542, 'ESMERALDA', 'MEZA MARTINEZ', 'M', NULL, '', '', 0, '', 54, 1),
(157, 588, 'RUBEN DARIO', 'MINOR CRUZ', 'H', NULL, '', '', 0, '', 54, 1),
(158, 590, 'JACINTA', 'SOCORRO CRUZ', 'M', NULL, '', '', 0, '', 54, 1),
(159, 414, 'SANDRA', 'BALDERAS OLVERA', 'M', NULL, '', '', 0, '', 54, 1),
(160, 727, 'DANIELA', 'ALEJANDRO MIGUEL', 'M', NULL, '', '', 0, '', 54, 1),
(161, 856, 'CARLOS', 'GONZALEZ CRUZ', 'H', NULL, '', '', 0, '', 54, 1),
(162, 922, 'MARCOS', 'RIVERA SALAS', 'H', NULL, '', '', 0, '', 54, 1),
(163, 1219, 'JUAN CARLOS', 'LOPEZ GOMEZ', 'H', NULL, '', '', 0, '', 54, 1),
(164, 245, 'MARIA MARGARITA', 'MARTINEZ FLORES', 'M', NULL, '', '', 0, '', 54, 1),
(165, 1062, 'WENDY LESLIE', 'MENDEZ RIOS', 'M', NULL, '', '', 0, '', 54, 1),
(166, 1243, 'LUIS', 'MEZA MARTINEZ', 'H', NULL, '', '', 0, '', 54, 1),
(167, 1313, 'ARLETTE IRAN', 'BALDERAS MEZA', 'M', NULL, '', '', 0, '', 54, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPuesto` (`idPuesto`),
  ADD KEY `idEstatus` (`idEstatus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1390;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `trabajadores_ibfk_1` FOREIGN KEY (`idPuesto`) REFERENCES `puestos` (`id`),
  ADD CONSTRAINT `trabajadores_ibfk_2` FOREIGN KEY (`idEstatus`) REFERENCES `estatus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
