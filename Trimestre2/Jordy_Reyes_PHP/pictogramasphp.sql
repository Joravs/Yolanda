-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2025 a las 10:24:32
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pictogramasphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idpersona` bigint(20) UNSIGNED NOT NULL,
  `idimagen` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `fecha`, `hora`, `idpersona`, `idimagen`, `created_at`, `updated_at`) VALUES
(2, '2025-01-20', '09:00:00', 1, 3, NULL, NULL),
(3, '2025-01-20', '21:00:00', 1, 5, NULL, NULL),
(4, '2025-01-20', '13:00:00', 2, 7, NULL, NULL),
(5, '2025-01-20', '18:00:00', 1, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idimagen` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idimagen`, `categoria`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'aseo', 'imagenes/banarse.jpg', 'imagen que representa el baño', NULL, NULL),
(3, 'alimentacion', 'imagenes/desayunar.jpg', 'imagen que representa el desay', NULL, NULL),
(4, 'tareas escolares', 'imagenes/colegio_pic.jpg', 'imagen que representa el coleg', NULL, NULL),
(5, 'salud', 'imagenes/dentista_pic.png', 'imagen que representa ir a dor', NULL, NULL),
(6, 'ocio', 'imagenes/jugar.png', 'imagen que representa ir al co', NULL, NULL),
(7, 'ocio', 'imagenes/playa_pic.png', 'imagen que representa las hora', NULL, NULL),
(8, 'ocio', 'imagenes/piscina_pic.png', 'imagen que representa lavar lo', NULL, NULL),
(9, 'aseo', 'imagenes/vestirse.jpg\r\n', 'imagen que representa  vestirs', NULL, NULL),
(10, 'tareas escolares', 'imagenes/comer.jpg', 'imagen que representa lectura', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idpersona` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idpersona`, `nombre`, `apellidos`, `edad`, `created_at`, `updated_at`) VALUES
(1, 'Carlos', 'Perez', 5, NULL, NULL),
(2, 'Juan', 'Lopez', 7, NULL, NULL),
(3, 'Manuel', 'Fernandez', 10, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agenda_idpersona_foreign` (`idpersona`),
  ADD KEY `agenda_idimagen_foreign` (`idimagen`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idpersona` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_idimagen_foreign` FOREIGN KEY (`idimagen`) REFERENCES `imagenes` (`idimagen`) ON DELETE CASCADE,
  ADD CONSTRAINT `agenda_idpersona_foreign` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
