-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2021 a las 11:04:05
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `happypots`
--
CREATE DATABASE IF NOT EXISTS `happypots` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `happypots`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

DROP TABLE IF EXISTS `detalle`;
CREATE TABLE `detalle` (
  `id` int(11) NOT NULL,
  `reserva` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `material` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

DROP TABLE IF EXISTS `detalle_temp`;
CREATE TABLE `detalle_temp` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `material` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_producto`
--

DROP TABLE IF EXISTS `img_producto`;
CREATE TABLE `img_producto` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `img` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

DROP TABLE IF EXISTS `lugar`;
CREATE TABLE `lugar` (
  `id` int(11) NOT NULL,
  `lugar` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

DROP TABLE IF EXISTS `lugares`;
CREATE TABLE `lugares` (
  `id` int(10) UNSIGNED NOT NULL,
  `lugar` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `material` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `productocol` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img_producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `lugar` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `pass` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `cell` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `pass`, `cell`, `tipo`) VALUES
(1, 'Admin Prueba', 'admin@admin.com', 'MTIzNA==', '73203957', 1),
(2, 'Usuario Prueba', 'prueba@prueba.com', 'MTIzNA==', '76541234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_material_producto`
--

DROP TABLE IF EXISTS `u_material_producto`;
CREATE TABLE `u_material_producto` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalle_reserva1_idx` (`reserva`),
  ADD KEY `fk_detalle_producto1_idx` (`producto`),
  ADD KEY `fk_detalle_material1_idx` (`material`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalle_temp_usuario1_idx` (`usuario`),
  ADD KEY `fk_detalle_temp_producto1_idx` (`producto`),
  ADD KEY `fk_detalle_temp_material1_idx` (`material`);

--
-- Indices de la tabla `img_producto`
--
ALTER TABLE `img_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_img_producto_producto1_idx` (`id_producto`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reserva_lugares1_idx` (`lugar`),
  ADD KEY `fk_reserva_usuario1_idx` (`usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `u_material_producto`
--
ALTER TABLE `u_material_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_u_material_producto_producto1_idx` (`id_producto`),
  ADD KEY `fk_u_material_producto_material1_idx` (`id_material`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_producto`
--
ALTER TABLE `img_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `u_material_producto`
--
ALTER TABLE `u_material_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_detalle_material1` FOREIGN KEY (`material`) REFERENCES `material` (`id`),
  ADD CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `fk_detalle_reserva1` FOREIGN KEY (`reserva`) REFERENCES `reserva` (`id`);

--
-- Filtros para la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `fk_detalle_temp_material1` FOREIGN KEY (`material`) REFERENCES `material` (`id`),
  ADD CONSTRAINT `fk_detalle_temp_producto1` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `fk_detalle_temp_usuario1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `img_producto`
--
ALTER TABLE `img_producto`
  ADD CONSTRAINT `fk_img_producto_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_lugares1` FOREIGN KEY (`lugar`) REFERENCES `lugar` (`id`),
  ADD CONSTRAINT `fk_reserva_usuario1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `u_material_producto`
--
ALTER TABLE `u_material_producto`
  ADD CONSTRAINT `fk_u_material_producto_material1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`),
  ADD CONSTRAINT `fk_u_material_producto_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
