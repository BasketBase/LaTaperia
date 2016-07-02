-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2016 a las 15:42:22
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `la-taperia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE `bodega` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `prec1` double DEFAULT NULL,
  `prec2` double DEFAULT NULL,
  `prec3` double DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id`, `nombre`, `descripcion`, `imagen`, `prec1`, `prec2`, `prec3`, `tipo`) VALUES
(1, 'Morcilla de Burgos con cebolla caramelizada', '', '', 2, 2.75, 5.75, 1),
(2, 'Crujientes queso de cabra', '', '', 3, 4, 7, 1),
(3, 'Raxo de cerdo', '', '', 3, 4, 7, 1),
(4, 'Raxo de cerdo con salsa roquefort', '', '', 3.5, 4.5, 8, 1),
(5, 'Raxo de pollo con salsa portobello', '', '', 3, 4.5, 8, 1),
(6, 'Tabla de quesos', '', '', 0, 5.5, 10, 1),
(7, 'Tabla de quesos e ibéricos', '', '', 0, 9.5, 18, 1),
(8, 'Croquetas de la casa', '', '', 3, 4, 7, 1),
(9, 'Tortilla de patatas', '', '', 0, 7, 12, 1),
(10, 'Patatas bravas', '', '', 2, 2.75, 5, 1),
(11, 'Zorza con patatas', '', '', 3, 4, 7, 1),
(12, 'Pimientos de Padrón', '', '', 2.5, 3.5, 6, 1),
(13, 'Mejillones en escabeche', '', '', 3.5, 4.5, 8, 1),
(14, 'Salpicón de marisco', '', '', 3.5, 4.5, 8, 1),
(15, 'Ensaladilla rusa', '', '', 2.5, 3.5, 6, 1),
(16, 'Empanada de la casa', '', '', 2.5, 3.5, 6, 1),
(17, 'Patatas ali-oli', '', '', 2, 2.75, 5, 1),
(18, 'Ensaladilla de pasta tricolor', '', '', 2, 2.75, 5, 1),
(19, 'Choricillos al vino', '', '', 2.5, 3.5, 6, 1),
(20, 'Pulpo a feira', '', '', 0, 7, 12, 1),
(21, 'Calamares a la romana', '', '', 3, 4, 7, 1),
(22, 'Callos caseros', '', '', 3, 5, 9, 1),
(23, 'Rabas de pollo', '', '', 3, 4, 7, 1),
(24, 'Almejas a la marinera', '', '', 0, 7, 12, 1),
(25, 'Queso del país', '', '', 2, 3, 5, 1),
(26, 'Jamón ibérico', '', '', 0, 8, 16, 1),
(27, 'Langostinos a la plancha', '', '', 0, 6, 10, 1),
(28, 'Fingers de pollo', '', '', 3, 4, 7, 1),
(29, 'Puntillas de calamar', '', '', 3, 4, 7, 1),
(30, 'Tumaca', 'Ajo, tomate, jamón y aceite de oliva', '', 2.5, 4.75, NULL, 2),
(31, 'Vegetal', 'Tomate natural, lechuga, atún y huevo', '', 2.75, 4, NULL, 2),
(32, 'Tosta tapería', 'Pulpo, queso del país, aceita de oliva, pimentón dulce y picante y sal gruesa', '', 4.5, 8, NULL, 2),
(33, 'Tosta de chicharrones', 'Chicharrones caseros y queso San Simón', '', 3.5, 6, NULL, 2),
(34, 'Tosta rural', 'Lomo de cerdo, queso San Simón y cebolla caramelizada', '', 4, 7, NULL, 2),
(35, 'Tosta de pollo', 'Filete de polo, mayonesa, mostaza de Dijon, miel y cebolla caramelizada', '', 4, 7, NULL, 2),
(36, 'Tosta de pimientos', 'Pimientos de piquillo, anchoas y queso roquefort', '', 3.75, 5.5, NULL, 2),
(37, 'Sartén Marinera', 'Gulas, gambas, calamares, pulpo, setas, ajo, guindilla, pimentón dulce y cachelos', '', 8, NULL, NULL, 3),
(38, 'Sartén tapería', 'Lomo de cerdo con piña salteada, pimientos del piquillo y patatas', '', 6.75, NULL, NULL, 3),
(39, 'Sartén a lo pobre', 'Huevos de corral, zorza y patatas', '', 6, NULL, NULL, 3),
(40, 'Sartén Lucio', 'Huevos de corral, patatas y jamón ibérico', '', 8, NULL, NULL, 3),
(41, 'Sartén Mediterránea', 'Pollo salteado, pimiento rojo, pimiento verde, champiñones y arroz caldoso', '', 9, NULL, NULL, 3),
(42, 'Sartén de gambas', 'Gambas salteadas con ajo, guindilla y aceite de oliva', '', 7.5, NULL, NULL, 3),
(43, 'Carrot cake', '', '', 4.5, NULL, NULL, 4),
(44, 'Flan de queso', '', '', 4, NULL, NULL, 4),
(45, 'Flan de huevo', '', '', 4, NULL, NULL, 4),
(46, 'Flan de café', '', '', 4, NULL, NULL, 4),
(47, 'Mousse de chocolate', '', '', 4.5, NULL, NULL, 4),
(48, 'Tiramisú', '', '', 4.5, NULL, NULL, 4),
(49, 'Tarta de la abuela', '', '', 4, NULL, NULL, 4),
(50, 'Tarta de orujo', '', '', 4.5, NULL, NULL, 4),
(51, 'Fresas con nata', '', '', 3, NULL, NULL, 4),
(52, 'Bacalao a la Gallega', 'Lomo de bacalao con aceite, ajo y pimentón dulce', '', 16, NULL, NULL, 5),
(53, 'Bacalao a la Plancha', 'Lomo de bacalao a la plancha, con vegetales del huerto y puré rústico de patatas', '', 16.5, NULL, NULL, 5),
(54, 'El Marinero', 'Gulas, gambas, rape, mejillones y setas acompañado con cachelos', '', 14, NULL, NULL, 5),
(55, 'Merluza en Salsa Verde', 'Merluza con salsa verde, vino blanco, perejil, almejas, espárragos y huevo cocido', '', 10, NULL, NULL, 5),
(56, 'Pulpo a la Parrilla', 'Pulpo a la parrilla con patatas y ali-oli de pimientos asados', '', 14, NULL, NULL, 5),
(57, 'Rape a la Gallega', 'Rape con aceite, ajo y pimentón dulce acompañado de cachelos', '', 15, NULL, NULL, 5),
(58, 'Arrox de Marisco(2 personas)', 'Gambas, mejillones, pulpo, langostinos y arroz caldoso', '', 20, NULL, NULL, 5),
(59, 'Ensalada Mixta', 'Lechuga, tomate, cebolla y maiz', '', 5, NULL, NULL, 6),
(60, 'Ensalada de la casa', 'Lechuga, tomate, zanahoria, fresas, pasas, nueces y queso de cabra', '', 6, NULL, NULL, 6),
(61, 'Ensalada Templada', 'Lechuga, rúcula, cebolla, tomate, aceitunas negras y pollo salteado', '', 6.5, NULL, NULL, 6),
(62, 'Ensalada de Ventresca', 'Rúcula, mezclum, canónigos, pimientos del piquillo y ventresca de atún', '', 7, NULL, NULL, 6),
(63, 'Entrecot de ternera', 'Entrecot de ternera gallega a la plancha con patatas y pimientos del piquillo', '', 16.5, NULL, NULL, 7),
(64, 'Croca', 'Filetón de croca de ternera gallega con patatas encebolladas', '', 12.5, NULL, NULL, 7),
(65, 'Solomillo roquefort', 'Medallones de solomillo de ternera gallega con salsa roquefort y patatas', '', 18, NULL, NULL, 7),
(66, 'Milanesa de pollo', 'Filete de pollo empanado con patatas', '', 7, NULL, NULL, 7),
(67, 'Hamburguesa tapería', 'Hamburguesa de 200 grs. 100% buey, con tomate natural, cebolla caramelizada, crujiente de canónigo y salsa especial de la casa, acompañada de patatas fritas caseras', '', 12.5, NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomida`
--

CREATE TABLE `tipocomida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocomida`
--

INSERT INTO `tipocomida` (`id`, `nombre`) VALUES
(1, 'RACIONES'),
(2, 'TOSTAS'),
(3, 'SARTENES'),
(4, 'POSTRES'),
(5, 'PESCADOS'),
(6, 'ENSALADAS'),
(7, 'CARNES');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
