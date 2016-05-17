-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2015 a las 20:58:59
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mathschool`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `Codigo` varchar(10) NOT NULL,
  `Nivel` varchar(10) DEFAULT NULL,
  `Tipo` varchar(1) DEFAULT NULL,
  `Numero_Ejercicios` varchar(5) DEFAULT NULL,
  `Calificacion` varchar(5) DEFAULT NULL,
  `temas_codigo` varchar(5) NOT NULL,
  `temas_unidad_codigo` varchar(5) NOT NULL,
  `temas_unidad_estudiante_codigo` varchar(5) NOT NULL,
  `temas_unidad_docente_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE IF NOT EXISTS `acudiente` (
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `estudiante_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`cedula`, `nombre`, `usuario`, `clave`, `estudiante_codigo`) VALUES
('1070549302', 'Dora Gonzales', 'dgonzales', '12345', '3ae01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `codigo` varchar(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo`, `nombre`, `usuario`, `clave`) VALUES
('adm01', 'Luis Stivel Matta Sanchez', 'stivelm', 'admin'),
('adm02', 'Edga Yair Lozano Ricardo', 'edgar', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE IF NOT EXISTS `directivos` (
  `codigo` varchar(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`codigo`, `nombre`, `usuario`, `clave`) VALUES
('dir01', 'Nancy Jara', 'nancyj', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `codigo` varchar(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `grado` varchar(2) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`codigo`, `nombre`, `grado`, `usuario`, `clave`) VALUES
('do3a', 'Rosa Isabel Sanchez Diaz', '3A', 'rosais', '12345'),
('do3b', 'Sonya Barbosa', '3B', 'sbarbosa', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `codigo` varchar(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `grado` varchar(2) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo`, `nombre`, `grado`, `usuario`, `clave`) VALUES
('3ae01', 'Kalleth Diaz', '3A', 'kdiaz', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `codigo` varchar(5) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(6) DEFAULT NULL,
  `directivos_codigo` varchar(5) NOT NULL DEFAULT '',
  `acudiente_cedula` varchar(10) NOT NULL,
  `estudiante_codigo` varchar(5) NOT NULL,
  `docente_codigo` varchar(5) NOT NULL,
  `administrador_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `Codigo` varchar(5) NOT NULL,
  `Desempeño` varchar(60) DEFAULT NULL,
  `Competencia` varchar(45) DEFAULT NULL,
  `Fortaleza` varchar(45) DEFAULT NULL,
  `Debilidad` varchar(45) DEFAULT NULL,
  `actividad_Codigo` varchar(10) NOT NULL,
  `actividad_temas_codigo` varchar(5) NOT NULL,
  `actividad_temas_unidad_codigo` varchar(5) NOT NULL,
  `actividad_temas_unidad_estudiante_codigo` varchar(5) NOT NULL,
  `actividad_temas_unidad_docente_codigo` varchar(5) NOT NULL,
  `directivos_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `codigo` varchar(5) NOT NULL,
  `Descripcion` varchar(110) DEFAULT NULL,
  `Marco_teorico` varchar(110) DEFAULT NULL,
  `unidad_codigo` varchar(5) NOT NULL,
  `unidad_estudiante_codigo` varchar(5) NOT NULL,
  `unidad_docente_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
  `codigo` varchar(5) NOT NULL,
  `nombre unidad` varchar(10) DEFAULT NULL,
  `estudiante_codigo` varchar(5) NOT NULL,
  `docente_codigo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Codigo`,`temas_codigo`,`temas_unidad_codigo`,`temas_unidad_estudiante_codigo`,`temas_unidad_docente_codigo`),
  ADD KEY `fk_actividad_temas1_idx` (`temas_codigo`,`temas_unidad_codigo`,`temas_unidad_estudiante_codigo`,`temas_unidad_docente_codigo`);

--
-- Indices de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`cedula`,`estudiante_codigo`),
  ADD KEY `fk_acudiente_estudiante1_idx` (`estudiante_codigo`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`codigo`,`directivos_codigo`,`acudiente_cedula`,`estudiante_codigo`,`docente_codigo`,`administrador_codigo`),
  ADD KEY `fk_registro_directivos1_idx` (`directivos_codigo`),
  ADD KEY `fk_registro_acudiente1_idx` (`acudiente_cedula`),
  ADD KEY `fk_registro_estudiante1_idx` (`estudiante_codigo`),
  ADD KEY `fk_registro_docente1_idx` (`docente_codigo`),
  ADD KEY `fk_registro_administrador1_idx` (`administrador_codigo`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`Codigo`,`actividad_Codigo`,`actividad_temas_codigo`,`actividad_temas_unidad_codigo`,`actividad_temas_unidad_estudiante_codigo`,`actividad_temas_unidad_docente_codigo`,`directivos_codigo`),
  ADD KEY `fk_resultados_actividad1_idx` (`actividad_Codigo`,`actividad_temas_codigo`,`actividad_temas_unidad_codigo`,`actividad_temas_unidad_estudiante_codigo`,`actividad_temas_unidad_docente_codigo`),
  ADD KEY `fk_resultados_directivos1_idx` (`directivos_codigo`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`codigo`,`unidad_codigo`,`unidad_estudiante_codigo`,`unidad_docente_codigo`),
  ADD KEY `fk_temas_unidad1_idx` (`unidad_codigo`,`unidad_estudiante_codigo`,`unidad_docente_codigo`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`codigo`,`estudiante_codigo`,`docente_codigo`),
  ADD KEY `fk_unidad_estudiante1_idx` (`estudiante_codigo`),
  ADD KEY `fk_unidad_docente1_idx` (`docente_codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `fk_actividad_temas1` FOREIGN KEY (`temas_codigo`, `temas_unidad_codigo`, `temas_unidad_estudiante_codigo`, `temas_unidad_docente_codigo`) REFERENCES `temas` (`codigo`, `unidad_codigo`, `unidad_estudiante_codigo`, `unidad_docente_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD CONSTRAINT `fk_acudiente_estudiante1` FOREIGN KEY (`estudiante_codigo`) REFERENCES `estudiante` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_registro_acudiente1` FOREIGN KEY (`acudiente_cedula`) REFERENCES `acudiente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_administrador1` FOREIGN KEY (`administrador_codigo`) REFERENCES `administrador` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_directivos1` FOREIGN KEY (`directivos_codigo`) REFERENCES `directivos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_docente1` FOREIGN KEY (`docente_codigo`) REFERENCES `docente` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_estudiante1` FOREIGN KEY (`estudiante_codigo`) REFERENCES `estudiante` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `fk_resultados_actividad1` FOREIGN KEY (`actividad_Codigo`, `actividad_temas_codigo`, `actividad_temas_unidad_codigo`, `actividad_temas_unidad_estudiante_codigo`, `actividad_temas_unidad_docente_codigo`) REFERENCES `actividad` (`Codigo`, `temas_codigo`, `temas_unidad_codigo`, `temas_unidad_estudiante_codigo`, `temas_unidad_docente_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resultados_directivos1` FOREIGN KEY (`directivos_codigo`) REFERENCES `directivos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `fk_temas_unidad1` FOREIGN KEY (`unidad_codigo`, `unidad_estudiante_codigo`, `unidad_docente_codigo`) REFERENCES `unidad` (`codigo`, `estudiante_codigo`, `docente_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD CONSTRAINT `fk_unidad_docente1` FOREIGN KEY (`docente_codigo`) REFERENCES `docente` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unidad_estudiante1` FOREIGN KEY (`estudiante_codigo`) REFERENCES `estudiante` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
