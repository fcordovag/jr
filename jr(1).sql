-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2019 a las 20:18:55
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jr`
--
CREATE DATABASE IF NOT EXISTS `jr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jr`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `id_status` tinyint(1) NOT NULL DEFAULT '1',
  `persona_id` int(11) NOT NULL,
  `tipo_mascota_id` int(11) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `name`, `description`, `image`, `image_dir`, `created`, `id_status`, `persona_id`, `tipo_mascota_id`, `modified`) VALUES
(23, 'Cachupin', 'Es un perrito kiltro muy regalon y juguton', 'mascota.jpg', '23', '2019-09-14 19:11:39', 1, 5, 8, '2019-09-14 19:11:39'),
(24, 'tito', 'es un pes muy divertido y de muchos colores', 'peces2.jpg', '24', '2019-09-14 19:57:23', 1, 6, 10, '2019-09-14 19:57:23'),
(25, 'Carlos', 'Es un loro muy griton, todos los dias me saluda', 'las-mejores-mascotas-aladas.jpg', '25', '2019-09-14 19:58:11', 1, 6, 11, '2019-09-14 19:58:11'),
(26, 'Max', 'Es un gatito muy regalo, que come mucho', 'gatito1.jpg', '26', '2019-09-14 20:15:40', 1, 8, 9, '2019-09-14 20:15:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_status` tinyint(1) NOT NULL DEFAULT '1',
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `name`, `last_name`, `email`, `sex`, `created`, `id_status`, `modified`) VALUES
(5, 'Fermin Andres', 'Cordova Gonzalez', 'cordova2312@gmail.com', 'M', '2019-09-14 19:10:55', 1, '2019-09-14 19:10:55'),
(6, 'Isidora Trinidad', 'Cordova Robles', 'isid@gmail.com', 'F', '2019-09-14 19:55:58', 1, '2019-09-14 19:55:58'),
(7, 'Giannella', 'Robles Isasmendi', 'giany@gmail.com', 'F', '2019-09-14 20:10:06', 1, '2019-09-14 20:10:06'),
(8, 'Cristobal Nicolas', 'Valdovinos Robles', 'cval@gmail.com', 'M', '2019-09-14 20:14:36', 1, '2019-09-14 20:14:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mascotas`
--

CREATE TABLE `tipo_mascotas` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_mascotas`
--

INSERT INTO `tipo_mascotas` (`id`, `name`, `description`, `image`, `image_dir`, `created`, `modified`) VALUES
(8, 'Caninos', 'Todos los animales del mundo que son caninos', 'logoDog.jpg', '8', '2019-09-14 18:42:18', '2019-09-14 18:42:18'),
(9, 'Felinos', 'Todos los animales que son felinos', 'logFelinos.jpg', '9', '2019-09-14 18:42:54', '2019-09-14 18:42:54'),
(10, 'Acuaticos', 'Los animales del mar que pueden ser mascotas', 'logoPeces.jpg', '10', '2019-09-14 18:43:28', '2019-09-14 18:43:28'),
(11, 'aves', 'Todas las mascotas y animales que pueden volar', 'laves.jpg', '11', '2019-09-14 19:10:23', '2019-09-14 19:10:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pets_persons_idx` (`persona_id`),
  ADD KEY `fk_pets_pets_type1_idx` (`tipo_mascota_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `fk_pets_persons` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pets_pets_type1` FOREIGN KEY (`tipo_mascota_id`) REFERENCES `tipo_mascotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para mascotas
--

--
-- Metadatos para personas
--

--
-- Metadatos para tipo_mascotas
--

--
-- Metadatos para jr
--

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('jr', 'mascotas', 'type', 'jr', 'status_pets', 'id');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
