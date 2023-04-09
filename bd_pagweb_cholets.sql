-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2023 a las 22:07:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pagweb_cholets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_administrador_sistema`
--

CREATE TABLE `tb_administrador_sistema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `ci` varchar(45) NOT NULL,
  `celular` varchar(8) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `  id_pk_rol` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_avisos_web`
--

CREATE TABLE `tb_avisos_web` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `contenido` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `id_pk_administrador` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cobertura_comunicacion`
--

CREATE TABLE `tb_cobertura_comunicacion` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `poblacion_cercana` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contenido_pagina_web`
--

CREATE TABLE `tb_contenido_pagina_web` (
  `id` int(11) NOT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `id_pk_administrador_sistema` int(11) NOT NULL,
  `id_pk_tipo_contenido` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_climatologicos`
--

CREATE TABLE `tb_datos_climatologicos` (
  `id` int(11) NOT NULL,
  `intervalo_aproximado_temperatura` varchar(45) DEFAULT NULL,
  `humedad_relativa` int(11) DEFAULT NULL,
  `precipitacion_fluvial` varchar(45) DEFAULT NULL,
  `vientos_predeterminados` varchar(45) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_poblacionales`
--

CREATE TABLE `tb_datos_poblacionales` (
  `id` int(11) NOT NULL,
  `nro_habitantes` int(11) DEFAULT NULL,
  `grupo_etnico` varchar(45) DEFAULT NULL,
  `id_pk_idioma_poblacional` int(11) NOT NULL,
  `id_pk_ocupacion` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_dueño_edificio`
--

CREATE TABLE `tb_dueño_edificio` (
  `id` int(11) NOT NULL,
  `nombre_dueño` varchar(50) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `celular` varchar(8) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` char(1) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_edificios_cholets`
--

CREATE TABLE `tb_edificios_cholets` (
  `id` int(11) NOT NULL,
  `nombre_edificio_cholet` varchar(100) NOT NULL,
  `jerarquia_edificio` varchar(50) DEFAULT NULL,
  `categoria_edificio` varchar(150) DEFAULT NULL,
  `tipo_edificio` varchar(150) DEFAULT NULL,
  `sub_tipo_edificio` varchar(50) DEFAULT NULL,
  `descripcion_edificio` varchar(600) DEFAULT NULL,
  `estado_actual` tinyint(4) DEFAULT NULL,
  `tipo_de_uso` varchar(100) DEFAULT NULL,
  `descripcion_grado_actual_de_uso` varchar(600) DEFAULT NULL,
  `descripcion_diseño_turistico` varchar(600) DEFAULT NULL,
  `descripcion_intervenciones_en_turismo` varchar(600) DEFAULT NULL,
  `descripcion_aprovechamiento` varchar(300) DEFAULT NULL,
  `descripcion_nivel_de_invercion` varchar(200) DEFAULT NULL,
  `descripcion_de_equipamiento` varchar(500) DEFAULT NULL,
  `descripcion_con_relacion_otros_recursos` varchar(500) DEFAULT NULL,
  `id_pk_dueño` int(11) NOT NULL,
  `id_pk_ubicacion` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_fotografias_360_edificio_publicacion_web`
--

CREATE TABLE `tb_fotografias_360_edificio_publicacion_web` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `imagen_360` varchar(500) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado_publicacion_web` int(11) NOT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_fotografias_edificio_para_publicacion_web`
--

CREATE TABLE `tb_fotografias_edificio_para_publicacion_web` (
  `id` int(11) NOT NULL,
  `nombre_imagen` varchar(45) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `estado_publicacion_web` int(11) NOT NULL,
  `descripcion_imagen` varchar(500) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_idioma_poblacional`
--

CREATE TABLE `tb_idioma_poblacional` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias`
--

CREATE TABLE `tb_noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `id_pk_contenido_pagina_web` int(11) NOT NULL,
  `id_tipo_noticia` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ocupaciones`
--

CREATE TABLE `tb_ocupaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE `tb_rol` (
  `id` int(11) NOT NULL,
  `tipo_rol` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios_adicionales`
--

CREATE TABLE `tb_servicios_adicionales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios_basicos`
--

CREATE TABLE `tb_servicios_basicos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `tipo_provision` varchar(80) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicio_alimentacion`
--

CREATE TABLE `tb_servicio_alimentacion` (
  `id` int(11) NOT NULL,
  `tipo_servicio` varchar(45) NOT NULL,
  `existencia_poblacional_cercana` varchar(45) DEFAULT NULL,
  `cantidad_segun_servicio` int(11) DEFAULT NULL,
  `calidad` varchar(20) DEFAULT NULL,
  `cantidad_sillas` int(11) DEFAULT NULL,
  `cantidad_mesas` int(11) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicio_hospedaje`
--

CREATE TABLE `tb_servicio_hospedaje` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `existencia_de_poblacion_cercana` varchar(45) DEFAULT NULL,
  `cantidad_tipo_servicio` int(11) DEFAULT NULL,
  `calidad` varchar(20) DEFAULT NULL,
  `cantidad_camas` int(11) DEFAULT NULL,
  `cantidad_habitantes` int(11) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_de_contenido`
--

CREATE TABLE `tb_tipo_de_contenido` (
  `id` int(11) NOT NULL,
  `nivel_contenido` varchar(45) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_noticia`
--

CREATE TABLE `tb_tipo_noticia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_transporte`
--

CREATE TABLE `tb_transporte` (
  `id` int(11) NOT NULL,
  `medio_de_transporte` varchar(45) DEFAULT NULL,
  `calidad` varchar(45) DEFAULT NULL,
  `tipo_de_transporte` varchar(45) DEFAULT NULL,
  `cotidianidad` varchar(45) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ubicacion_edificio`
--

CREATE TABLE `tb_ubicacion_edificio` (
  `id` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `coordenadas_utm` varchar(100) DEFAULT NULL,
  `sitios_referencia` varchar(200) DEFAULT NULL,
  `altitud` varchar(45) DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vias_accesibilidad`
--

CREATE TABLE `tb_vias_accesibilidad` (
  `id` int(11) NOT NULL,
  `punto_partida` varchar(100) NOT NULL,
  `punto_llegada` varchar(100) NOT NULL,
  `tipo_via` varchar(50) NOT NULL,
  `calidad` varchar(20) DEFAULT NULL,
  `distancia` int(11) DEFAULT NULL,
  `tiempo` varchar(45) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `id_pk_transporte` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_videos_360_edificio_para_publicacion_web`
--

CREATE TABLE `tb_videos_360_edificio_para_publicacion_web` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `video_360` varchar(500) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado_publicacion_web` int(11) NOT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_videos_de_edificio_para_publicacion_web`
--

CREATE TABLE `tb_videos_de_edificio_para_publicacion_web` (
  `id` int(11) NOT NULL,
  `nombre_video` varchar(45) NOT NULL,
  `video` varchar(500) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado_publicacion_web` int(11) NOT NULL,
  `id_pk_edificio_cholet` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_update` int(11) NOT NULL,
  `estado_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_administrador_sistema`
--
ALTER TABLE `tb_administrador_sistema`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contraseña_UNIQUE` (`contraseña`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `ci_UNIQUE` (`ci`),
  ADD KEY `id_pk_rol` (`  id_pk_rol`);

--
-- Indices de la tabla `tb_avisos_web`
--
ALTER TABLE `tb_avisos_web`
  ADD PRIMARY KEY (`id`,`id_pk_administrador`),
  ADD KEY `id_pk_administrador` (`id_pk_administrador`);

--
-- Indices de la tabla `tb_cobertura_comunicacion`
--
ALTER TABLE `tb_cobertura_comunicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_contenido_pagina_web`
--
ALTER TABLE `tb_contenido_pagina_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`),
  ADD KEY `id_pk_administrador` (`id_pk_administrador_sistema`),
  ADD KEY `id_tipo_contenido` (`id_pk_tipo_contenido`);

--
-- Indices de la tabla `tb_datos_climatologicos`
--
ALTER TABLE `tb_datos_climatologicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_datos_poblacionales`
--
ALTER TABLE `tb_datos_poblacionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_ocupacion` (`id_pk_ocupacion`),
  ADD KEY `id_pk_idioma_poblacional` (`id_pk_idioma_poblacional`);

--
-- Indices de la tabla `tb_dueño_edificio`
--
ALTER TABLE `tb_dueño_edificio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_edificios_cholets`
--
ALTER TABLE `tb_edificios_cholets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_dueño_idx` (`id_pk_dueño`),
  ADD KEY `id_pk_ubicacion` (`id_pk_ubicacion`);

--
-- Indices de la tabla `tb_fotografias_360_edificio_publicacion_web`
--
ALTER TABLE `tb_fotografias_360_edificio_publicacion_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_fotografias_edificio_para_publicacion_web`
--
ALTER TABLE `tb_fotografias_edificio_para_publicacion_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_idioma_poblacional`
--
ALTER TABLE `tb_idioma_poblacional`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_noticias`
--
ALTER TABLE `tb_noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_contenido_pagina_web` (`id_pk_contenido_pagina_web`),
  ADD KEY `id_pk_tipo_noticia` (`id_tipo_noticia`);

--
-- Indices de la tabla `tb_ocupaciones`
--
ALTER TABLE `tb_ocupaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_servicios_adicionales`
--
ALTER TABLE `tb_servicios_adicionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_servicios_basicos`
--
ALTER TABLE `tb_servicios_basicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_servicio_alimentacion`
--
ALTER TABLE `tb_servicio_alimentacion`
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_servicio_hospedaje`
--
ALTER TABLE `tb_servicio_hospedaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_tipo_de_contenido`
--
ALTER TABLE `tb_tipo_de_contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tipo_noticia`
--
ALTER TABLE `tb_tipo_noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_transporte`
--
ALTER TABLE `tb_transporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_ubicacion_edificio`
--
ALTER TABLE `tb_ubicacion_edificio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_vias_accesibilidad`
--
ALTER TABLE `tb_vias_accesibilidad`
  ADD KEY `id_pk_edificio_cholet` (`id_pk_edificio_cholet`),
  ADD KEY `id_pk_transporte` (`id_pk_transporte`);

--
-- Indices de la tabla `tb_videos_360_edificio_para_publicacion_web`
--
ALTER TABLE `tb_videos_360_edificio_para_publicacion_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_edificio_cholet` (`id_pk_edificio_cholet`);

--
-- Indices de la tabla `tb_videos_de_edificio_para_publicacion_web`
--
ALTER TABLE `tb_videos_de_edificio_para_publicacion_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk_editicio_cholet` (`id_pk_edificio_cholet`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_administrador_sistema`
--
ALTER TABLE `tb_administrador_sistema`
  ADD CONSTRAINT `id_pk_rol` FOREIGN KEY (`  id_pk_rol`) REFERENCES `tb_rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_avisos_web`
--
ALTER TABLE `tb_avisos_web`
  ADD CONSTRAINT `id_pk_administrador` FOREIGN KEY (`id_pk_administrador`) REFERENCES `tb_administrador_sistema` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_cobertura_comunicacion`
--
ALTER TABLE `tb_cobertura_comunicacion`
  ADD CONSTRAINT `tb_cobertura_comunicacion_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_contenido_pagina_web`
--
ALTER TABLE `tb_contenido_pagina_web`
  ADD CONSTRAINT `id_administrador` FOREIGN KEY (`id_pk_administrador_sistema`) REFERENCES `tb_administrador_sistema` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pk_tipo_contenido` FOREIGN KEY (`id_pk_tipo_contenido`) REFERENCES `tb_tipo_de_contenido` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_contenido_pagina_web_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_datos_climatologicos`
--
ALTER TABLE `tb_datos_climatologicos`
  ADD CONSTRAINT `tb_datos_climatologicos_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_datos_poblacionales`
--
ALTER TABLE `tb_datos_poblacionales`
  ADD CONSTRAINT `id_pk_ocupacion` FOREIGN KEY (`id_pk_ocupacion`) REFERENCES `tb_ocupaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_datos_poblacionales_ibfk_1` FOREIGN KEY (`id_pk_idioma_poblacional`) REFERENCES `tb_idioma_poblacional` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_edificios_cholets`
--
ALTER TABLE `tb_edificios_cholets`
  ADD CONSTRAINT `id_pk_ubicacion` FOREIGN KEY (`id_pk_ubicacion`) REFERENCES `tb_ubicacion_edificio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_edificios_cholets_ibfk_1` FOREIGN KEY (`id_pk_dueño`) REFERENCES `tb_dueño_edificio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_fotografias_360_edificio_publicacion_web`
--
ALTER TABLE `tb_fotografias_360_edificio_publicacion_web`
  ADD CONSTRAINT `tb_fotografias_360_edificio_publicacion_web_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_fotografias_edificio_para_publicacion_web`
--
ALTER TABLE `tb_fotografias_edificio_para_publicacion_web`
  ADD CONSTRAINT `tb_fotografias_edificio_para_publicacion_web_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_noticias`
--
ALTER TABLE `tb_noticias`
  ADD CONSTRAINT `id_pk_contenido_pagina_web` FOREIGN KEY (`id_pk_contenido_pagina_web`) REFERENCES `tb_contenido_pagina_web` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pk_tipo_noticia` FOREIGN KEY (`id_tipo_noticia`) REFERENCES `tb_tipo_noticia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_servicios_adicionales`
--
ALTER TABLE `tb_servicios_adicionales`
  ADD CONSTRAINT `tb_servicios_adicionales_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_servicios_basicos`
--
ALTER TABLE `tb_servicios_basicos`
  ADD CONSTRAINT `tb_servicios_basicos_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_servicio_alimentacion`
--
ALTER TABLE `tb_servicio_alimentacion`
  ADD CONSTRAINT `tb_servicio_alimentacion_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_servicio_hospedaje`
--
ALTER TABLE `tb_servicio_hospedaje`
  ADD CONSTRAINT `id_pk_edificio_cholet` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_vias_accesibilidad`
--
ALTER TABLE `tb_vias_accesibilidad`
  ADD CONSTRAINT `tb_vias_accesibilidad_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_vias_accesibilidad_ibfk_2` FOREIGN KEY (`id_pk_transporte`) REFERENCES `tb_transporte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_videos_360_edificio_para_publicacion_web`
--
ALTER TABLE `tb_videos_360_edificio_para_publicacion_web`
  ADD CONSTRAINT `tb_videos_360_edificio_para_publicacion_web_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_videos_de_edificio_para_publicacion_web`
--
ALTER TABLE `tb_videos_de_edificio_para_publicacion_web`
  ADD CONSTRAINT `tb_videos_de_edificio_para_publicacion_web_ibfk_1` FOREIGN KEY (`id_pk_edificio_cholet`) REFERENCES `tb_edificios_cholets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
