
/**
 * Author:  Manuel Mora
 * Created: 11-may-2016
 */
-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2016 a las 22:01:30
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcamisetas`
--

--
-- Volcado de datos para la tabla `camiseta`
--

INSERT INTO `producto` (`idProducto`, `idCategoria`, `cod_producto`, `nombre_pro`, `precio`, `descuento`, `imagen`, `iva`, `descripcion`, `seleccionada`, `mostrar`, `fecha_inicio`, `fecha_fin`, `stock`) VALUES
(1, 1, 'CD_IRON', 'Iron Maiden', '23.00', '0.00', 'banner/ironmaiden.jpg', '21.00', 'Cantante de Rok', 1, 1, '2016-01-01', '2016-12-31', 5),
(2, 1, 'CD_BRU', 'Bruce Springsteen', '23.00', '0.00', 'banner/bruce.jpg', '21.00', 'Cantante de Rok', 1, 1, '2016-01-01', '2016-12-31', 20),
(3, 1, 'CD_SAR', 'Saratoga', '23.00', '10.00', 'banner/saratoga.jpg', '21.00', 'Cantante de Rok', 1, 1, '2016-01-01', '2016-12-31', 30);
(4, 1, 'CD_HUM', 'Human League - Reproduction', '23.00', '10.00', 'alternativo/1.jpg', '21.00', 'HUMAN LEAGUE - REPRODUCTION', 1, 1, '2016-01-01', '2016-12-31', 30),
(5, 1, 'CD_RED', 'Red Hot Chili Peppers - Red Hot Chilli Peppers', '23.00', '10.00', 'alternativo/2.jpg', '21.00', 'RED HOT CHILI PEPPERS - RED HOT CHILLI PEPPERS', 1, 1, '2016-01-01', '2016-12-31', 30),
(6, 1, 'CD_DIS', 'Disclosure - Settle', '23.00', '10.00', 'alternativo/3.jpg', '21.00', 'Guy y Howard Lawrence son oriundos de Reigate (Surrey) al Sudeste de Inglaterra y juntos forman el dúo #Disclosure# ', 1, 1, '2016-01-01', '2016-12-31', 30);
--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `cod_categoria`, `nombre_cat`, `descripcion`, `mostrar`) VALUES
(1, 'CAT_LIGABBVA', 'Liga BBVA', 'Liga de primera división de España', 1),
(2, 'CAT_LIGAPORTUGAL', 'Liga Portuguesa', 'Liga de primera división de Portugal', 0),
(3, 'CAT_LIGUE1', 'Ligue 1', 'Liga de primera división de Francia', 1),
(4, 'CAT_BUNDELISGA', 'Bundesliga', 'Liga de primera división de Alemania', 1),
(5, 'CAT_PREMIER', 'Premier League', 'Liga de primera división de Inglaterra', 1),
(6, 'CAT_SERIEA', 'Seria A', 'Liga de primera división de Italia', 1),
(7, 'CAT_SELECCIONES', 'Selecciones Nacionales', 'Selecciones Nacionales de Fútbol', 1);

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`cod`, `nombre`, `comunidad_id`) VALUES
('01', 'Alava', 16),
('02', 'Albacete', 7),
('03', 'Alicante', 10),
('04', 'Almería', 1),
('05', 'Avila', 8),
('06', 'Badajoz', 11),
('07', 'Balears (Illes)', 4),
('08', 'Barcelona', 9),
('09', 'Burgos', 8),
('10', 'Cáceres', 11),
('11', 'Cádiz', 1),
('12', 'Castellón', 10),
('13', 'Ciudad Real', 7),
('14', 'Córdoba', 1),
('15', 'Coruña (A)', 12),
('16', 'Cuenca', 7),
('17', 'Girona', 9),
('18', 'Granada', 1),
('19', 'Guadalajara', 7),
('20', 'Guipzcoa', 16),
('21', 'Huelva', 1),
('22', 'Huesca', 2),
('23', 'Jaén', 1),
('24', 'León', 8),
('25', 'Lleida', 9),
('26', 'Rioja (La)', 17),
('27', 'Lugo', 12),
('28', 'Madrid', 13),
('29', 'Málaga', 1),
('30', 'Murcia', 14),
('31', 'Navarra', 15),
('32', 'Ourense', 12),
('33', 'Asturias', 3),
('34', 'Palencia', 8),
('35', 'Palmas (Las)', 5),
('36', 'Pontevedra', 12),
('37', 'Salamanca', 8),
('38', 'Santa Cruz de Tenerife', 5),
('39', 'Cantabria', 6),
('40', 'Segovia', 8),
('41', 'Sevilla', 1),
('42', 'Soria', 8),
('43', 'Tarragona', 9),
('44', 'Teruel', 2),
('45', 'Toledo', 7),
('46', 'Valencia', 10),
('47', 'Valladolid', 8),
('48', 'Vizcaya', 16),
('49', 'Zamora', 8),
('50', 'Zaragoza', 2),
('51', 'Ceuta', 18),
('52', 'Melilla', 19);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `cod_provincia`, `nombre_usu`, `clave`, `dni`, `correo`, `nombre_persona`, `apellidos_persona`, `direccion`, `cp`, `estado`) VALUES
(0, '51', 'admin', '$2y$10$7lH0K8cSg8IEbPiTsabOaODC9oVJHaQ5KJd9WmTTb5fQ6JgIxuKby', '44248212f', 'isacm94@gmail.com', 'Admin', 'Admin Admin', 'Calle Huelva, 36', 21453, 'A'),
(1, '21', 'isacm94', '$2y$10$9isiSYMKQrfYA.p7jZqbaej9Hs/VqQuLH/FdwNyPHGKYg2821PTEm', '44248212f', 'isacm94@gmail.com', 'Isabel María', 'Calvo Mateos', 'Calle Cabreros, 36', 21720, 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

