-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2024 a las 21:34:40
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
-- Base de datos: `jerogrifico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `login` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `puntos` int(11) NOT NULL DEFAULT 0,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`nombre`, `login`, `clave`, `puntos`, `extra`) VALUES
('Benjamin', 'Benja', '123', 57, 0),
('Juan Diego', 'diego', '123', 152, 0),
('Dioni', 'Dioni', '123', 131, 0),
('Guille', 'guillermo', '123', 23, 0),
('Irene Adler', 'IreneAdler', '123', 119, 0),
('Luis Lestón', 'leston', '123', 148, 0),
('Lourdes', 'Lourdes', '123', 139, 0),
('Luison', 'Luison', '123', 124, 0),
('Miguel', 'miguel', '123', 143, 0),
('Luisa', 'mluisaoa', '123', 0, 0),
('Olga', 'olga', '123', 130, 0),
('Victor Rubio', 'victorun', '123', 54, 0),
('Yolanda Iglesias', 'yolandais', '123', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `fecha` date NOT NULL,
  `login` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `hora` time NOT NULL,
  `respuesta` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`fecha`, `login`, `hora`, `respuesta`) VALUES
('2022-05-03', 'Diego', '10:10:45', 'A Béjar'),
('2022-05-03', 'Dioni', '16:52:22', 'A Béjar'),
('2022-05-03', 'guillermo', '10:17:48', 'a bejar'),
('2022-05-03', 'IreneAdler', '10:12:31', 'a Bejar'),
('2022-05-03', 'leston', '10:45:05', 'A Béjar'),
('2022-05-03', 'Lourdes', '14:16:00', 'A Bejar'),
('2022-05-03', 'Luison', '12:31:20', 'A Bejar'),
('2022-05-03', 'miguel', '17:25:41', 'a bejar'),
('2022-05-03', 'olga', '10:12:19', 'A bejar'),
('2022-05-03', 'victorun', '09:56:51', 'a Bejar'),
('2022-05-04', '', '23:09:36', '...áteme, Rosa'),
('2022-05-04', 'diego', '10:17:21', 'áteme'),
('2022-05-04', 'Dioni', '11:47:32', 'Áteme'),
('2022-05-04', 'IreneAdler', '23:29:45', '¡áteme!'),
('2022-05-04', 'leston', '23:11:55', '...áteme'),
('2022-05-04', 'miguel', '15:05:02', 'áteme Rosa'),
('2022-05-04', 'olga', '12:54:22', 'áteme'),
('2022-05-05', 'Diego', '09:59:58', 'Cené migas.'),
('2022-05-05', 'Dioni', '17:50:38', '...cené migas'),
('2022-05-05', 'IreneAdler', '23:07:19', 'cene migas'),
('2022-05-05', 'leston', '15:13:26', '...cené migas'),
('2022-05-05', 'Lourdes', '21:08:10', '...cené migas'),
('2022-05-05', 'Luison', '23:06:03', 'Cene migas'),
('2022-05-05', 'miguel', '15:04:19', 'cené migas'),
('2022-05-05', 'victorun', '10:44:56', '...cené migas.'),
('2022-05-06', 'diego', '09:58:02', 'A sus tareas'),
('2022-05-06', 'Dioni', '14:11:47', 'A sus tareas'),
('2022-05-06', 'IreneAdler', '18:39:00', 'a sus tareas'),
('2022-05-06', 'leston', '13:52:52', 'A sus tareas'),
('2022-05-06', 'miguel', '14:38:35', 'a sus tareas'),
('2022-05-09', 'Diego', '10:36:23', 'No, Joaquín cenó'),
('2022-05-09', 'Dioni', '12:00:26', 'No, Joaquín cenó'),
('2022-05-09', 'IreneAdler', '19:35:13', 'no, Joaquin ceno'),
('2022-05-09', 'leston', '16:41:08', 'No, Joaquín cenó'),
('2022-05-09', 'Lourdes', '18:16:23', 'No, Joaquín cenó'),
('2022-05-09', 'Luison', '10:20:23', 'No, Joaquin ceno'),
('2022-05-09', 'miguel', '13:05:10', 'no, joaquin cenó'),
('2022-05-09', 'olga', '22:51:41', 'No, Joaquin ceno'),
('2022-05-09', 'victorun', '13:54:29', 'No, Joaquín cenó.'),
('2022-05-10', 'Diego', '12:15:57', 'Meteoro'),
('2022-05-10', 'Dioni', '22:49:25', 'Meteoro'),
('2022-05-10', 'IreneAdler', '12:16:29', 'meteoro'),
('2022-05-10', 'leston', '14:07:18', 'Meteoro'),
('2022-05-10', 'Lourdes', '18:31:20', 'Meteoro'),
('2022-05-10', 'Luison', '22:56:03', 'Meteoro'),
('2022-05-10', 'miguel', '11:12:40', 'meteoro'),
('2022-05-10', 'olga', '14:06:09', 'meteoro'),
('2022-05-10', 'victorun', '16:56:27', 'Aurora'),
('2022-05-11', 'Diego', '08:44:16', 'Se sentó, nene.'),
('2022-05-11', 'Dioni', '10:50:23', 'Se sentó nene'),
('2022-05-11', 'IreneAdler', '22:53:20', 'se sentó, nene'),
('2022-05-11', 'leston', '22:47:51', 'Se sentó, nene'),
('2022-05-11', 'Lourdes', '11:13:49', 'Se sentó, nene'),
('2022-05-11', 'Luison', '23:30:10', 'Se sento nene'),
('2022-05-11', 'miguel', '10:36:39', 'se sentó, nene'),
('2022-05-11', 'olga', '23:43:39', 'Se sentó, nene'),
('2022-05-12', 'diego', '11:10:50', 'Ténsala'),
('2022-05-12', 'Dioni', '11:11:17', 'Ténsala'),
('2022-05-12', 'IreneAdler', '11:28:31', 'tensala'),
('2022-05-12', 'leston', '11:56:16', 'Ténsala'),
('2022-05-12', 'Lourdes', '13:51:02', 'Ténsala'),
('2022-05-12', 'Luison', '12:55:50', 'Tensala'),
('2022-05-12', 'miguel', '11:38:01', 'ténsala'),
('2022-05-12', 'olga', '12:48:56', 'Ténsala'),
('2022-05-12', 'victorun', '10:33:55', 'Ténsala.'),
('2022-05-13', 'Diego', '09:39:17', 'Al armiño'),
('2022-05-13', 'Dioni', '11:04:25', 'Al armiño'),
('2022-05-13', 'IreneAdler', '09:39:32', 'al armiño'),
('2022-05-13', 'leston', '14:43:57', 'Al armiño'),
('2022-05-13', 'Lourdes', '10:54:05', 'Al armiño'),
('2022-05-13', 'Luison', '11:57:21', 'Al armiño'),
('2022-05-13', 'miguel', '12:49:08', 'al armiño'),
('2022-05-13', 'olga', '12:29:54', 'al armiño'),
('2022-05-13', 'victorun', '09:34:31', 'Al armiño.'),
('2022-05-16', 'diego', '09:56:27', 'Me lo notaba'),
('2022-05-16', 'Dioni', '17:38:07', '...me lo notaba'),
('2022-05-16', 'IreneAdler', '10:16:58', 'me lo notaba'),
('2022-05-16', 'leston', '14:34:11', 'Me lo notaba'),
('2022-05-16', 'Lourdes', '11:02:37', '...me lo notaba'),
('2022-05-16', 'Luison', '21:06:47', 'Me lo notaba'),
('2022-05-16', 'miguel', '17:56:07', 'me lo notaba'),
('2022-05-16', 'olga', '23:18:48', 'me lo notaba'),
('2022-05-16', 'victorun', '10:11:43', 'me lo notaba'),
('2022-05-17', 'Diego', '08:32:59', '...ya ni llamas'),
('2022-05-17', 'Dioni', '23:05:07', '...ya ni llamas'),
('2022-05-17', 'IreneAdler', '09:06:28', 'ya ni llamas'),
('2022-05-17', 'leston', '15:54:42', '...ya ni llamas'),
('2022-05-17', 'Lourdes', '09:00:25', '...ya ni llamas'),
('2022-05-17', 'miguel', '12:32:49', 'ya ni llamas'),
('2022-05-17', 'olga', '22:27:19', 'ya ni llamas'),
('2022-05-17', 'victorun', '15:26:29', 'ya ni llamas.'),
('2022-05-18', 'diego', '12:31:35', 'Acá, sí'),
('2022-05-18', 'Dioni', '12:25:48', 'Acá si'),
('2022-05-18', 'IreneAdler', '19:08:00', 'acá si'),
('2022-05-18', 'leston', '19:31:09', 'Acá, sí'),
('2022-05-18', 'Lourdes', '11:28:44', 'Acá si'),
('2022-05-18', 'Luison', '21:12:46', 'Aca sí'),
('2022-05-18', 'miguel', '23:41:45', 'aquí hebra'),
('2022-05-18', 'olga', '23:02:47', 'acá sí'),
('2022-05-18', 'victorun', '13:08:03', 'Está aparte.'),
('2022-05-19', 'Diego', '10:36:44', 'Al de Amalia'),
('2022-05-19', 'Dioni', '12:09:49', 'Al de Amalia'),
('2022-05-19', 'IreneAdler', '11:04:42', 'al de Amalia'),
('2022-05-19', 'leston', '14:13:27', 'Al de Amalia'),
('2022-05-19', 'Lourdes', '14:20:43', 'Al de Amalia'),
('2022-05-19', 'Luison', '22:58:09', 'Al de Amalia'),
('2022-05-19', 'miguel', '13:12:04', 'al de amalia'),
('2022-05-19', 'olga', '12:33:49', 'Al de Amalia'),
('2022-05-20', 'Diego', '13:22:10', 'Cena nada más.'),
('2022-05-20', 'Dioni', '13:32:33', 'La cena nada más'),
('2022-05-20', 'IreneAdler', '23:05:09', 'cena nada mas'),
('2022-05-20', 'leston', '23:38:52', 'La cena nada mas'),
('2022-05-20', 'Lourdes', '22:12:16', 'Cena nada mas'),
('2022-05-20', 'Luison', '18:56:09', 'Cena nada más'),
('2022-05-20', 'miguel', '15:05:56', 'cena, nadamas'),
('2022-05-20', 'olga', '23:55:21', 'conceda mas'),
('2022-05-23', 'diego', '21:26:58', 'Cesó Gabriel'),
('2022-05-23', 'IreneAdler', '13:29:30', 'ceso Gabriel'),
('2022-05-23', 'leston', '22:08:25', 'Cesó Gabriel'),
('2022-05-23', 'Lourdes', '19:30:41', 'Cesó Gabriel'),
('2022-05-23', 'Luison', '14:53:30', 'Ceso Gabriel'),
('2022-05-23', 'miguel', '22:32:36', 'ceso Gabriel'),
('2022-05-24', 'Diego', '08:38:20', 'En la planta novena'),
('2022-05-24', 'Dioni', '12:01:49', 'En la planta novena'),
('2022-05-24', 'IreneAdler', '08:49:12', 'en la planta novena'),
('2022-05-24', 'leston', '15:34:12', 'En la planta novena'),
('2022-05-24', 'Lourdes', '12:23:41', 'En la planta novena'),
('2022-05-24', 'Luison', '09:31:42', 'En la planta novena'),
('2022-05-24', 'miguel', '10:18:01', 'en la planta novena'),
('2022-05-24', 'olga', '19:43:36', 'En la planta novena'),
('2022-05-24', 'victorun', '17:14:23', 'en mi planta novena'),
('2022-05-25', 'Diego', '08:47:31', 'Enfoca más'),
('2022-05-25', 'Dioni', '11:26:07', 'Enfoca más'),
('2022-05-25', 'IreneAdler', '08:49:10', 'enfoca mas'),
('2022-05-25', 'leston', '16:26:31', '...enfoca más'),
('2022-05-25', 'Lourdes', '10:09:21', '...enfoca más'),
('2022-05-25', 'Luison', '11:56:55', 'Enfoca más'),
('2022-05-25', 'miguel', '13:21:59', 'enfoca mas'),
('2022-05-25', 'olga', '09:13:11', 'enfoca más'),
('2022-05-25', 'victorun', '09:00:07', 'en foca más'),
('2022-05-26', 'Diego', '12:03:45', 'Es emigrante'),
('2022-05-26', 'Dioni', '12:07:41', 'es emigrante'),
('2022-05-26', 'IreneAdler', '18:45:13', 'es emigrante'),
('2022-05-26', 'leston', '15:05:17', 'Es emigrante'),
('2022-05-26', 'Lourdes', '12:52:38', 'Es emigrante'),
('2022-05-26', 'miguel', '12:12:04', 'es emigrante'),
('2022-05-26', 'olga', '12:15:20', 'es emigrante'),
('2022-05-26', 'victorun', '13:21:58', 'es emigrante'),
('2022-05-27', 'diego', '10:07:04', '...ven, te la da'),
('2022-05-27', 'leston', '22:58:50', '...ven, te la da'),
('2022-05-27', 'Lourdes', '18:17:36', '...vi tela de cuadros'),
('2022-05-27', 'Luison', '21:34:26', 'Ve la tela'),
('2022-05-27', 'olga', '22:52:28', 'ven te la da'),
('2022-05-30', 'diego', '08:18:10', '...me soné'),
('2022-05-30', 'Dioni', '11:01:31', '...me soné'),
('2022-05-30', 'leston', '15:09:33', '...me soné'),
('2022-05-30', 'Lourdes', '13:27:35', '...me soné'),
('2022-05-30', 'Luison', '22:23:32', 'Me soné'),
('2022-05-30', 'miguel', '13:05:26', 'mesoné'),
('2022-05-30', 'olga', '20:22:22', 'me soné'),
('2022-05-30', 'victorun', '09:37:14', 'me soné.'),
('2022-05-31', 'Diego', '14:19:48', 'Sí, enseñala, Darío'),
('2022-05-31', 'Dioni', '14:01:46', 'Si, enséñala rápido'),
('2022-05-31', 'leston', '22:06:31', 'Sí, envía'),
('2022-05-31', 'Lourdes', '20:07:30', 'Si enséñala Darío'),
('2022-05-31', 'Luison', '11:45:38', 'Si enséñala, Dario'),
('2022-05-31', 'miguel', '18:09:54', 'sí, enseñala Darío'),
('2022-05-31', 'victorun', '20:58:03', 'enseñala sí, enagua.'),
('2022-06-01', 'diego', '09:17:51', 'Respira, Lola'),
('2022-06-01', 'Dioni', '10:42:14', 'Respira, Lola'),
('2022-06-01', 'IreneAdler', '09:18:17', 'respira, Lola'),
('2022-06-01', 'leston', '22:16:59', 'Respira Lola'),
('2022-06-01', 'Lourdes', '12:27:50', 'Respira Lola'),
('2022-06-01', 'Luison', '23:07:56', 'Respira lola'),
('2022-06-01', 'miguel', '12:55:22', 'respira Lola'),
('2022-06-01', 'olga', '12:44:50', 'Respira Lola'),
('2022-06-01', 'victorun', '20:09:33', '¡Respira Lola!.'),
('2022-06-02', 'Diego', '12:46:22', 'En ese la citó'),
('2022-06-02', 'Dioni', '22:48:01', 'La citó en ese'),
('2022-06-02', 'IreneAdler', '14:13:06', 'la citó en ese'),
('2022-06-02', 'leston', '16:40:41', 'En ese la citó'),
('2022-06-02', 'Lourdes', '20:08:44', 'La citó en ese'),
('2022-06-02', 'Luison', '22:33:43', 'En ese, la citó'),
('2022-06-02', 'miguel', '19:55:29', 'la citó en ese'),
('2022-06-02', 'olga', '19:39:40', 'En ese la citó'),
('2022-06-03', 'diego', '10:06:35', 'En un sobreático'),
('2022-06-03', 'Dioni', '22:04:51', 'En el sobreático'),
('2022-06-03', 'IreneAdler', '13:48:02', 'en un sobreatico'),
('2022-06-03', 'leston', '15:11:44', 'En el sobreático'),
('2022-06-03', 'Lourdes', '13:43:15', 'En el sobreático'),
('2022-06-03', 'miguel', '16:23:54', 'en el sobreatico'),
('2022-06-03', 'olga', '23:57:10', 'en el sobreatico'),
('2022-06-06', 'diego', '13:58:00', 'Están desencajados'),
('2022-06-06', 'Dioni', '15:10:24', 'Están desencajados'),
('2022-06-06', 'IreneAdler', '14:54:50', 'estan desencajados'),
('2022-06-06', 'leston', '13:58:34', 'Están desencajados'),
('2022-06-06', 'Lourdes', '16:03:19', 'Desencajados'),
('2022-06-06', 'Luison', '14:45:17', 'Están desencajados'),
('2022-06-06', 'miguel', '14:50:52', 'están desencajados'),
('2022-06-06', 'olga', '23:59:52', 'estan desencajados'),
('2022-06-06', 'victorun', '09:53:59', 'están desencajados'),
('2024-12-12', 'Diego', '11:34:24', 'Sonada'),
('2024-12-12', 'leston', '12:11:03', 'Que sonada'),
('2024-12-12', 'miguel', '12:13:31', 'Que sonada'),
('2024-12-12', 'olga', '23:57:38', 'Que sonada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucion`
--

CREATE TABLE `solucion` (
  `fecha` date NOT NULL,
  `solucion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `solucion`
--

INSERT INTO `solucion` (`fecha`, `solucion`) VALUES
('2022-05-03', 'A Béjar'),
('2022-05-04', '...áteme'),
('2022-05-05', '...cené migas'),
('2022-05-06', 'A sus tareas'),
('2022-05-09', 'No, Joaquín cenó'),
('2022-05-10', 'Meteoro'),
('2022-05-11', 'Se sentó, nene'),
('2022-05-12', 'Ténsala'),
('2022-05-13', 'Al armiño'),
('2022-05-16', '...me lo notaba'),
('2022-05-17', '...ya ni llamas'),
('2022-05-18', 'Acá, sí'),
('2022-05-19', 'Al de Amalia'),
('2022-05-20', 'Cena, nada mas'),
('2022-05-23', 'Cesó Gabriel'),
('2022-05-24', 'En la planta novena'),
('2022-05-25', '...enfoca más'),
('2022-05-26', 'Es emigrante'),
('2022-05-27', '...ven, te la da'),
('2022-05-30', '...me soné'),
('2022-05-31', 'Sí enséñala, Darío'),
('2022-06-01', '¡Respira, Lola!'),
('2024-12-12', 'Que sonada'),
('2024-12-17', 'El una'),
('2024-12-18', 'Llave inglesa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`login`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`fecha`,`login`);

--
-- Indices de la tabla `solucion`
--
ALTER TABLE `solucion`
  ADD PRIMARY KEY (`fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
