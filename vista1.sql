-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2025 a las 16:13:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `labtaller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vista1`
--

CREATE TABLE `vista1` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Comentario` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vista1`
--

INSERT INTO `vista1` (`ID`, `Nombre`, `Comentario`, `Fecha`, `Estado`) VALUES
(1, 'Allan Vallejos', 'Voy mañana profe a hablar de la tesis que me está quedando muy mal.', '2025-03-31 11:20:00', NULL),
(2, 'Héctor Vásquez', 'Se me perdió el cargador y no alcancé a mandar el lab.', '2025-04-04 18:00:00', NULL),
(3, 'Joaquín Ascencio', 'Profe, ¿podemos hablar mañana? Tengo unas dudas sobre el curso y me gustaría su consejo.', '2025-03-03 14:45:00', NULL),
(4, 'Pedro Retamal', 'Hola profesor, ¿tendría un momento esta semana para hablar? Quisiera consultarle sobre las prácticas porfa', '2025-04-12 16:50:00', NULL),
(5, 'Felipe Calderón', 'Buenas, profe. ¿Le parece si nos coordinamos para conversar? Necesito orientación sobre mi avance en la carrera.', '2025-05-01 10:15:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vista1`
--
ALTER TABLE `vista1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vista1`
--
ALTER TABLE `vista1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
