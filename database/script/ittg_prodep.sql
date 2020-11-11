-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-07-2020 a las 20:34:49
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.1.31-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ittg_prodep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rfc` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entidad` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ins` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inscrpcion` date NOT NULL,
  `perfil` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disciplina` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombramiento` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_nombramiento` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dedicacion` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_contrato` date NOT NULL,
  `nivel` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siglas` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estudios` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institucion_otorgante` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_titulo` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `beneficiarios`
--

INSERT INTO `beneficiarios` (`id`, `user_id`, `rfc`, `genero`, `civil`, `nacionalidad`, `entidad`, `fecha_nacimiento`, `telefono`, `celular`, `email_ins`, `fecha_inscrpcion`, `perfil`, `area`, `disciplina`, `nombramiento`, `tipo_nombramiento`, `dedicacion`, `unidad`, `fecha_contrato`, `nivel`, `siglas`, `estudios`, `pais`, `institucion_otorgante`, `fecha_titulo`, `created_at`, `updated_at`) VALUES
(5, 5, 'midc012697mi034', 'Femenino', 'Soltero', 'Mexicana', 'Chiapas', '1997-01-26', '1453236', '9611509471', 'gr26dcabrera97@gmail.com', '2017-09-05', 'PTC', 'Ingeniería y Tecnología', 'Básicas', 'ptc', 'pt', 'estudiante', 'ittg', '2018-06-04', 'licenciatura', 'isc', 'sistemas', 'mexico', 'ittg', '2019-12-23', '2019-12-23 13:15:26', '2019-12-23 13:15:26'),
(6, 6, 'EHLAngel311097k97', 'Masculino', 'Casado', 'mexicano', 'chiapas', '1997-10-31', '1467389', '9613569021', 'entzin13@gmail.com', '2017-09-13', 'CA', 'Ingeniería y Tecnología', 'BasesDatos', 'ca', 'ca', 'ingeniero', 'ittg', '2012-01-10', 'licenciatura', 'isc', 'sistemas', 'mexico', 'ittg', '2019-12-23', '2019-12-23 13:24:56', '2020-01-30 04:17:48'),
(7, 7, 'juanpp367dc45', 'Masculino', 'Casado', 'mexicano', 'tamaulipas', '1984-09-08', '7845623', '9614562390', 'ppjuan@hotmail.com', '2018-01-23', 'CA', 'Ciencias Sociales y Administrativas', 'AdministraciónEmpresas', 'ca', 'ca', 'maestro', 'tec', '2012-04-21', 'maestia', 'mcb', 'administracion', 'españa', 'salamanca', '2015-12-17', '2019-12-23 13:30:12', '2019-12-23 13:30:12'),
(8, 8, 'alexfvd924', 'Masculino', 'Uniónlibre', 'mexicano', 'Monterrey', '1989-11-23', '2452190', '9612705623', 'alex@hotmail.com', '2017-01-26', 'PTC', 'Educación, Humanidades y Arte', 'Artes', 'artes', 'ptc', 'maestro de artes', 'ittg', '2010-04-01', 'doctorado', 'DAR(doctor en artes visuales)', 'artes visuales', 'Mexico', 'unam', '2010-05-18', '2019-12-23 13:35:35', '2019-12-23 13:35:35'),
(9, 9, 'marisolherrom92563190fc', 'Femenino', 'Soltero', 'Mexicana', 'Mapastepec', '1997-03-21', '345678', '372263', 'mary@gmail.com', '2019-12-23', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'ptc', 'ptc', 'isc', 'ittg', '2019-12-23', 'licenciatura', 'isc', 'sistemas computacional', 'mexico', 'tecnm', '2019-12-23', '2019-12-23 13:39:10', '2019-12-23 13:39:10'),
(10, 10, 'AUAM690410', 'Masculino', 'Casado', 'Mexicano', 'Chiapas', '1969-04-10', '6150380', '', 'mabud@ittg.edu.mx', '2000-01-22', 'PTC', 'Ingeniería y Tecnología', 'Ingeniería de Alimentos', 'Profesor', '40', '40', 'ittg', '2020-01-22', '', '', '', '', '', '0000-00-00', NULL, NULL),
(11, 11, 'GUSJ780315HCSZNR06', 'Masculino', 'Casado', 'Mexicana', 'Chiapas', '1978-03-15', '1234567', '1234567', 'jgazman@gmail.com', '2018-01-02', 'PTC', 'Ingeniería y Tecnología', 'BasesDatos', 'E3837', 'Vacio', 'Maestro', 'Vacio', '2014-05-14', '1', 'sin datos', 'sin datos', 'Mexico', 'ittg', '2020-01-22', '2020-01-23 03:20:53', '2020-01-23 03:20:53'),
(13, 13, 'AOML510223HCSCZS01', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1951-02-23', '12345', '12345', 'ACOSTA@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 03:41:21', '2020-01-23 03:41:21'),
(14, 14, 'HESA680717HCSRLL03', 'Masculino', 'Casado', 'Mexicano', 'Chiapas', '1968-07-17', '123456', '123456', 'alvaro@gmail.com', '2017-07-19', 'PTC', 'Ingeniería y Tecnología', 'Arquitectura', 'sin dato', 'sin dato', 'maestro', 'sin dato', '2015-01-01', 'lecenciatura', 'sin dato', 'sin dato', 'mexico', 'Instituto Tecnologico de Tuxtla Gutierrez', '2015-01-01', '2020-01-23 03:32:04', '2020-01-23 03:32:04'),
(15, 15, 'HEBD550614MVZRRL07', 'Femenino', 'Casado', 'Mexicana', 'Chiapas', '1955-06-14', '123467', '1234567', 'dulcemaria@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'Sin dato', 'Sin dato', 'Sin dato', 'Sin dato', '2020-01-22', 'Licenciatura', 'Sin dato', 'Sin dato', 'Mexio', 'Universidad Autonoma Metropolitana Xochimilco', '2020-01-22', '2020-01-23 03:38:43', '2020-01-23 03:38:43'),
(16, 16, 'HECA530416HTCRHT01', 'Masculino', 'Casado', 'Mexicana', 'sin dato', '1953-04-16', '12345678', '12345678', 'atanacio@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'Arquitectura(Otros)', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'Mexico', 'ittg', '2020-01-22', '2020-01-23 03:48:25', '2020-01-23 03:48:25'),
(17, 17, 'AUBA550824HCSGRL09', 'Masculino', 'Casado', 'MEXICANA', 'CHAPAS', '1955-08-24', '12345', '12345', 'ALEXIS@GMAIL.COM', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'Acordeón', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'LICENCIATURA', 'LIC.', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 03:52:10', '2020-01-23 03:52:10'),
(18, 18, 'HECG681215HCSRRL08', 'Masculino', 'Casado', 'Mexicana', 'Chiapas', '1968-12-15', '1234567', '1234567', 'gilberto@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'IngenieríadeMateriales(Otros)', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2019-09-15', 'Maestria', 'sin dato', 'sin dato', 'Mexico', 'Unach', '2020-01-22', '2020-01-23 03:55:23', '2020-01-23 03:55:23'),
(19, 19, 'AUCA860506HCSGSL09', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1986-05-06', '12345', '12345', 'CASTILLEJOS@GMAIL.COM', '2019-08-19', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2012-06-12', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:01:06', '2020-01-23 04:01:06'),
(20, 20, 'HELH590403HCSRNC05', 'Masculino', 'Soltero', 'Mexicano', 'sin dato', '1959-09-03', '12345678', '1234567', 'hector@gmial.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'Mexico', 'Instituts Nationaux Des Sciences Appliquees', '2020-01-22', '2020-01-23 04:05:37', '2020-01-23 04:05:37'),
(21, 21, 'AUSM570103HCSGRR00', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1970-10-03', '12345', '12345', 'SUAREZ@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:13:36', '2020-01-23 04:13:36'),
(22, 22, 'HEME510829HDFRLN02', 'Masculino', 'Casado', 'Mexicano', 'sin dato', '1951-08-29', '12345678', '123455678', 'enrique@gmail.com', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'Dibujo', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'maestria', 'sin dato', 'sin dato', 'Mexico', 'sin dato', '2020-01-22', '2020-01-23 04:15:02', '2020-01-23 04:15:02'),
(23, 23, 'HETG551212HVZRLD00', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1955-12-12', '1234567', '123456', 'jguadalupe@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'FinancierayFinanzas', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'mexico', 'sin dato', '2020-01-22', '2020-01-23 04:31:01', '2020-01-23 04:31:01'),
(24, 24, 'AAMJ470403HCSLNV08', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1947-04-03', '12345', '12345', 'ALFARO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'AdministraciónEmpresas', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'LICENCIATURA', 'LIC.', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:27:04', '2020-01-23 04:27:04'),
(25, 25, 'AOSC730508HCSLNR02', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1073-05-08', '12345', '12345', 'RAMON@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2003-03-01', 'LICENCIATURA', 'LIC.', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:35:38', '2020-01-23 04:35:38'),
(26, 26, 'AOCR580815HCHRSN09', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1958-08-15', '12345', '12345', 'ARJON@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:42:09', '2020-01-23 04:42:09'),
(27, 27, 'HEBR460225HMSRSD00', 'Masculino', 'Casado', 'Mexicano', 'sin dato', '1946-02-25', '12345678', '1234567', 'rodolfo@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'mexico', 'sin dato', '2020-01-22', '2020-01-23 04:51:41', '2020-01-23 04:51:41'),
(28, 28, 'AICI701225HCSRRG01', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1970-12-25', '12345', '12345', 'IGNACIO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:51:58', '2020-01-23 04:51:58'),
(29, 29, 'HEGR600401HDFRLB09', 'Masculino', 'Casado', 'Mexicana', 'sin dato', '1960-01-04', '2345678', '23467', 'ruben@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AutomatizaciónControl', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'Doctorado', 'sin dato', 'sin dato', 'Mexico', 'Politechnika Warszawska', '2020-01-22', '2020-01-23 04:57:37', '2020-01-23 04:57:37'),
(30, 30, 'AOTT630416MDFYLR04', 'Femenino', 'Casado', 'MEXICANA', 'CHIAPAS', '1963-04-16', '12345', '12345', 'TERESA@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'BiotecnologíaVegetal', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'DOCTORADO', 'DR.', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 04:57:53', '2020-01-23 04:57:53'),
(31, 31, 'BADE571026HCSLZV16', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1971-10-26', '12345', '12345', 'EVARISTO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:03:11', '2020-01-23 05:03:11'),
(32, 32, 'IACR660830HCSBRB00', 'Masculino', 'Casado', 'sin dato', 'sin dato', '1996-08-30', '3478', '345678', 'roberto@gmail.com.mx', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'Arquitectura(Otros)', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'Maestria', 'sin dato', 'sin dato', 'Mexico', 'Instituto Tecnologico de Toluca', '2020-01-22', '2020-01-23 05:04:51', '2020-01-23 05:04:51'),
(33, 33, 'BATR800224MGRSRS02', 'Femenino', 'Casado', 'MEXICANA', 'CHIAPAS', '1980-02-24', '12345', '12345', 'ROSY@GMAIL.COM', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2009-09-16', 'MAESTRIA', 'MTRIA', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 05:10:05', '2020-01-23 05:10:05'),
(34, 34, 'JIOJ480730HCSMCR04', 'Masculino', 'Casado', 'Mexicana', 'sin dato', '1948-07-30', '6789', '34567', 'jciro@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología(Otros)', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'Maestria', 'sin dato', 'sin dato', 'Mexico', 'sin dato', '2020-01-22', '2020-01-23 05:14:54', '2020-01-23 05:14:54'),
(35, 35, 'BACW480212HYNLRL06', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1948-02-12', '12345', '12345', 'MORGAN@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:15:13', '2020-01-23 05:15:13'),
(36, 36, 'JIRE611226MCSMML04', 'Femenino', 'Casado', 'sin dato', 'sin dato', '1961-12-26', '45678', '45678', 'melisa@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'Doctorado', 'sin dato', 'sin dato', 'Mexico', 'sin dato', '2020-01-22', '2020-01-23 05:20:06', '2020-01-23 05:20:06'),
(37, 37, 'BIVO830614HCSRLS01', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1983-06-14', '12345', '12345', 'OSVALDO@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2012-02-16', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:19:46', '2020-01-23 05:19:46'),
(38, 38, 'CXGA581007HCSBMR00', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1958-10-07', '12345', '12345', 'ARNULFO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:23:06', '2020-01-23 05:23:06'),
(39, 39, 'JURN670827HPLRDC00', 'Masculino', 'Casado', 'Mexcana', 'sin dato', '1967-08-27', '123456', '23456', 'nicolas@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'IngenieríadeMateriales(Otros)', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'Mexico', 'sin dato', '2020-01-22', '2020-01-23 05:26:08', '2020-01-23 05:26:08'),
(40, 40, 'CAMR590602MPLMNQ04', 'Femenino', 'Casado', 'MEXICANA', 'CHIAPAS', '1959-06-02', '12345', '12345', 'RAQUEL@GMAIL.COM', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'CienciasEducación', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:27:20', '2020-01-23 05:27:20'),
(41, 41, 'LAMO590920HCSRRC07', 'Masculino', 'Casado', 'sin dato', 'sin dato', '1959-09-20', '45678', '4567', 'octavior@gmail.com', '2018-08-15', 'PTC', 'Ciencias Sociales y Administrativas', 'FinancierayFinanzas', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'sin datos', 'Instituto De Estudios Universitarios', '2020-01-22', '2020-01-23 05:31:08', '2020-01-23 05:31:08'),
(42, 42, 'CAAJ730703HCSMNR08', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1973-07-03', '12345', '12345', 'JORGE@GMAIL.COM', '2018-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2015-02-01', 'DOCTORADO', 'DOC.', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:33:05', '2020-01-23 05:33:05'),
(43, 43, 'LEBA561030HCSNLD06', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1956-10-30', '56789', '5678', 'adolfo@gmail.com.mx', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 05:35:41', '2020-01-23 05:35:41'),
(44, 44, 'CATJ560329HCSRVN06', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1956-03-29', '12345', '12345', 'HUMBERTO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:36:41', '2020-01-23 05:36:41'),
(45, 45, 'LECJ600112HCSNMR03', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1960-01-12', '45678', '5678', 'jorgeal@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 05:41:20', '2020-01-23 05:41:20'),
(46, 46, 'CAOG530220HCSSRL09', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1953-02-20', '12345', '12345', 'GILBERTO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 05:42:09', '2020-01-23 05:42:09'),
(47, 47, 'LEOV620813HCSNRC02', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1962-08-13', '45678', '5678', 'vicentel@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'Aerodinámica', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1999-09-01', 'licenciatura', 'sin datos', 'sin datos', 'sin datos', 'Instituto Tecnol?o de Ciudad Madero', '2020-01-22', '2020-01-23 05:45:37', '2020-01-23 05:45:37'),
(48, 48, 'CAGH730319HCSSNM05', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1973-03-19', '12345', '12345', 'JHUMBERTO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2002-10-01', 'MAESTRIA', 'MTRIA', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 05:46:59', '2020-01-23 05:46:59'),
(49, 49, 'LEHJ530401MDFYRQ00', 'Femenino', 'Casado', 'sin datos', 'sin datos', '1953-04-01', '45678', '5678', 'jaqueline@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'Instituto Politecnico Nacional', '2020-01-22', '2020-01-23 05:51:46', '2020-01-23 05:51:46'),
(50, 50, 'LAGJ710306HCSLRL09', 'Femenino', 'Casado', 'sin datos', 'sin datos', '1971-03-06', '567', '7824', 'juliocesar@ittg.edu.mx', '2019-08-14', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2008-11-02', 'Maestria', 'sin datos', 'sin datos', 'mexico', 'Instituto De Estudios Universitarios', '2020-01-22', '2020-01-23 05:57:06', '2020-01-23 05:57:06'),
(51, 51, 'CAGR590828HCSSLG00', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1059-08-28', '12345', '12345', 'ROGER@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 05:56:27', '2020-01-23 05:56:27'),
(52, 52, 'LOEF820919HCSPSR06', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1982-09-19', 'sin datos', 'sin datos', 'franciscor@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AutomatizaciónControl', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2018-08-16', 'Doctorado', 'sin datos', 'sin datos', 'sin datos', 'Centro Nacional de Investigacion Desarrollo Tecnologico', '2020-01-22', '2020-01-23 06:02:33', '2020-01-23 06:02:33'),
(53, 53, 'CAMJ540104HCSSRR03', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1954-01-04', '12345', '12345', 'ELI@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'LICENCIATURA', 'LIC.', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE OAXACA', '2020-01-22', '2020-01-23 06:02:26', '2020-01-23 06:02:26'),
(54, 54, 'LUVJ551002MOCNLC05', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1955-02-02', 'sin datos', 'sin datos', 'jacintal@gmail.com', '2018-08-15', 'PTC', 'Ciencias Sociales y Administrativas', 'AdministraciónEmpresas', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestria', 'sin datos', 'sin datos', 'sin datos', 'Instituto De Estudios Universitarios', '2020-01-22', '2020-01-23 06:09:22', '2020-01-23 06:09:22'),
(55, 55, 'CAMR560108HCSSRC04', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1956-01-08', '12345', '12345', 'ALFONSO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 06:09:00', '2020-01-23 06:09:00'),
(56, 56, 'CAME670205MCSSRL06', 'Femenino', 'Casado', 'MEXICANA', 'CHIAPAS', '1967-02-05', '12345', '12345', 'ELIDIA@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'AdministraciónEducación', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1985-09-01', 'LICENCIATURA', 'LIC.', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 06:13:03', '2020-01-23 06:13:03'),
(57, 57, 'MACA550921HCSNBR02', 'Masculino', 'Casado', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'ariostom@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'Instituto Tecnologico de Puebla', '2020-01-22', '2020-01-23 06:18:26', '2020-01-23 06:18:26'),
(58, 58, 'CABA530823HCSSRM07', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1953-08-23', '12345', '12345', 'AMADO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 06:17:39', '2020-01-23 06:17:39'),
(59, 59, 'MAMM560728MDFRDR02', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1956-07-28', 'sin datos', 'sin datos', 'marcelinm@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'BiotecnologíaAlimentos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'Instituto Politecnico Nacional', '2020-01-22', '2020-01-23 06:22:56', '2020-01-23 06:22:56'),
(60, 60, 'CAGC580812MCSSLL02', 'Femenino', 'Casado', 'MEXICANA', 'CHIAPAS', '1958-08-12', '12345', '12345', 'LUZ@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 06:21:45', '2020-01-23 06:21:45'),
(61, 61, 'CEMC540602HCSRRR08', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1954-06-02', '12345', '12345', 'CARLOS_C@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin datos', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 06:26:17', '2020-01-23 06:26:17'),
(62, 62, 'MAVL510114HVZRZR03', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1951-01-14', 'sin datos', 'sin datos', 'lorenzom@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'Universidad Veracruzana', '2020-01-22', '2020-01-23 06:27:13', '2020-01-23 06:27:13'),
(63, 63, 'CIMM671127HCSDRG06', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1967-11-27', '12345', '12345', 'PRADO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'LICENCIATURA', 'LIC.', 'sin datos', 'MEXICO', 'sin datos', '2020-01-22', '2020-01-23 06:31:01', '2020-01-23 06:31:01'),
(64, 64, 'MAAF700525HCSYRR14', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1970-05-25', 'sin datos', 'sin datos', 'fernandoa@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 06:33:31', '2020-01-23 06:33:31'),
(65, 65, 'COAR520708HCSLLD02', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1952-07-08', '12345', '12345', 'ALBORES@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE CHIAPAS', '2020-01-22', '2020-01-23 06:35:22', '2020-01-23 06:35:22'),
(66, 66, 'MELG820327HDFNMS09', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1982-03-27', 'sin datos', 'sin datos', 'gustavom@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2012-08-01', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'ITTG', '2020-01-22', '2020-01-23 08:34:20', '2020-01-23 08:34:20'),
(67, 67, 'MENL571010HCSNVS06', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1957-10-10', 'sin datos', 'sin datos', 'joseluism@iitg.edu.mx', '2020-01-22', 'PTC(PD)', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 08:38:01', '2020-01-23 08:38:01'),
(68, 68, 'MEGR710207MCSZRC02', 'Femenino', 'Casado', 'sin datos', 'sin datos', '1971-02-07', 'sin datos', 'sin datos', 'rociom@gmail.com', '2018-08-15', 'PTC(PD)', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2000-01-17', 'Doctorado', 'sin datos', 'sin datos', 'sin datos', 'CENTRO DE INVESTIGACION Y DE ESTUDIOS AVANZADOS', '2020-01-22', '2020-01-23 08:42:02', '2020-01-23 08:42:02'),
(69, 69, 'MEGR520401HCSZLB00', 'Femenino', 'Casado', 'sin datos', 'sin datos', '1952-04-01', 'sin datos', 'sin datos', 'robertoantonio@gmail.com', '2020-01-22', 'PTC(PD)', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestría', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 08:45:23', '2020-01-23 08:45:23'),
(70, 70, 'MILJ590912HCSJPR06', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1959-09-12', 'sin datos', 'sin datos', 'jorgeantonio@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestría', 'sin datos', 'sin datos', 'sin datos', 'Instituto Tecnologico de Orizaba', '2020-01-22', '2020-01-23 08:48:59', '2020-01-23 08:48:59'),
(71, 71, 'MODJ580204HCSNZV05', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1958-02-04', 'sin datos', 'sin datos', 'javieralonso@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 08:52:03', '2020-01-23 08:52:03'),
(72, 72, 'MOMJ520921HCSNLQ04', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1952-09-21', 'sin datos', 'sin datos', 'joaquinalonso@gmail.com', '2018-09-15', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:01:21', '2020-01-23 09:01:21'),
(73, 73, 'MOMM480117HCSNGN01', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1948-11-17', 'sin datos', 'sin datos', 'josemanuel@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:04:15', '2020-01-23 09:04:15'),
(74, 74, 'MOAR560804HCSRLT09', 'Masculino', 'Casado', 'sin datos', 'sin datos', '1956-08-04', 'sin datos', 'sin datos', 'rutilom@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'Instituto Tecnologico de Veracruz', '2020-01-22', '2020-01-23 09:08:04', '2020-01-23 09:08:04'),
(75, 75, 'MOCE690729MCSRTD05', 'Femenino', 'Casado', 'sin datos', 'sin datos', '1969-07-29', 'sin datos', 'sin datos', 'ednam@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración(Otros)', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'doctorado', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:11:36', '2020-01-23 09:11:36'),
(76, 76, 'MOFA561106MCSRNR04', 'Femenino', 'Casado', 'sin datos', 'MOFA561106MCSRNR04', '1956-11-06', 'sin datos', 'sin datos', 'aracelim@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:15:47', '2020-01-23 09:15:47'),
(77, 77, 'MOMA581212HCSRNL02', 'Masculino', 'Casado', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'josealberto@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestría', 'sin datos', 'sin datos', 'sin datos', 'Centro Nacional de Investigación Desarrollo Tecnológico', '2020-01-22', '2020-01-23 09:20:35', '2020-01-23 09:20:35'),
(78, 78, 'MONN870316HCSRVS07', 'Masculino', 'Soltero', 'mexicana', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'nestor@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2012-02-16', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'ITTG', '2020-01-22', '2020-01-23 09:24:39', '2020-01-23 09:24:39'),
(79, 79, 'MOGJ600214HCSRRL07', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1960-02-14', 'sin datos', 'sin datos', 'julioantonio@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:27:30', '2020-01-23 09:27:30'),
(80, 80, 'MORR630528HCSRNL02', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1963-05-28', 'sin datos', 'sin datos', 'raulm@ittg.edu.mx', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestria', 'sin datos', 'sin datos', 'sin datos', 'Unach', '2020-01-22', '2020-01-23 09:31:49', '2020-01-23 09:31:49'),
(81, 81, 'MOGR710413HCSTRF00', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1971-04-13', 'sin datos', 'sin datos', 'rafaelm@gmail.com', '2019-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1998-09-01', 'Maestría', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:36:46', '2020-01-23 09:36:46'),
(82, 82, 'NAGR460504HCSFMB05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1946-05-04', 'sin datos', 'sin datos', 'roberton@gmail.com', '2020-01-22', 'PTC(PD)', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 09:39:44', '2020-01-23 09:39:44'),
(83, 83, 'NASG740418HCSNLL00', 'Masculino', 'Casado', 'Mexicana', 'sin dato', '1974-04-18', 'sin dato', 'sin dato', 'galdinobelizario@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2018-11-01', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'Instituto Politecnico Nacional', '2020-01-22', '2020-01-23 09:43:28', '2020-01-23 09:43:28'),
(84, 84, 'NITJ840620HCSXRN00', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1984-06-20', 'sin datos', 'sin datos', 'juancarlos@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2009-09-16', 'Maestria', 'sin datos', 'sin datos', 'sin datos', 'Instituto Tecnológico de Celaya', '2020-01-22', '2020-01-23 09:47:06', '2020-01-23 09:47:06'),
(85, 85, 'MAJF540604HCSXRR09', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1954-06-04', 'sin datos', 'sin datos', 'josefrancisco@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', '2020-01-23 10:04:54', '2020-01-23 10:04:54'),
(86, 86, 'OASA581229HCSCLB06', 'Masculino', 'Casado', 'Mexicana', 'sin dato', '1958-12-29', 'sin dato', 'sin dato', 'abrahamo@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1984-11-01', 'Licenciatura', 'sin dato', 'sin dato', 'Mexico', 'Instituto tecnologico de puebla', '2020-01-22', '2020-01-23 10:08:13', '2020-02-20 00:46:19'),
(87, 87, 'OOCJ501220HCSCTL07', 'Masculino', 'Casado', 'Mexicano', 'sin datos', '1950-12-20', 'sin datos', 'sin datos', 'juliocesaro@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 10:11:13', '2020-01-23 10:11:13'),
(88, 88, 'OORA541021HCSCZR02', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1954-10-21', 'sin datos', 'sin datos', 'arturoo@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 10:14:30', '2020-01-23 10:14:30'),
(89, 89, 'OOMO540713HCSRGD05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1954-07-13', 'sin datos', 'sin datos', 'odilioo@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'Mexico', 'INSTITUTO POLITECNICO NACIONAL', '2020-01-22', '2020-01-23 10:17:45', '2020-01-23 10:17:45'),
(90, 90, 'OIOP580831HYNRJD09', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1958-08-31', 'sin datos', 'sin datos', 'pedrotomas@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Universidad Autonoma del Estado de Morelos', '2020-01-22', '2020-01-23 10:25:58', '2020-01-23 10:25:58'),
(91, 91, 'OACS730128MCSVHN02', 'Femenino', 'Casado', 'Mexicana', 'sin datos', '1973-01-28', 'sin datos', 'sin datos', 'sandyluz@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2015-08-15', 'doctorado', 'sin datos', 'sin datos', 'Mexico', 'Instituto Tecnológico De Veracruz', '2020-01-22', '2020-01-23 10:30:28', '2020-01-23 10:30:28'),
(92, 92, 'PELA551215HGRRPR00', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1955-12-21', 'sin datos', 'sin datos', 'arturop@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 10:33:26', '2020-01-23 10:33:26'),
(93, 93, 'PEPM710624HCSRTD02', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1971-06-24', 'sin datos', 'sin datos', 'madap@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2015-08-01', 'Dctorado', 'sin datos', 'sin datos', 'Mexico', 'Universidad de Ciencias y Tecnologias de Lille', '2020-01-22', '2020-01-23 10:37:15', '2020-01-23 10:37:15'),
(94, 94, 'PERA560505HCSRDN03', 'Masculino', 'Casado', 'mexicana', 'sin datos', '1956-05-05', 'sin datos', 'sin datos', 'angelsein@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestría', 'sin datos', 'sin datos', 'Mexico', 'Universidad De Montemorelos', '2020-01-22', '2020-01-23 10:42:14', '2020-01-23 10:42:14'),
(95, 95, 'PORL790404MCSRZR07', 'Femenino', 'Casado', 'Mexicana', 'sin datos', '1979-04-04', 'sin datos', 'sin datos', 'marialaura@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2014-01-01', 'Maestría', 'sin datos', 'sin datos', 'México', 'ITTG', '2014-01-01', '2020-01-23 10:45:54', '2020-01-23 10:45:54'),
(96, 96, 'RADJ551124HCSMZV05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1955-11-24', 'sin datos', 'sin datos', 'javierr@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 10:50:01', '2020-01-23 10:50:01'),
(97, 97, 'RABM720313HOCSZN05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1972-03-13', 'sin datos', 'sin datos', 'josemanuelr@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2019-01-08', 'Licenciatura', 'sin datos', 'sin datos', 'sin datos', 'ittg', '2020-01-22', '2020-01-23 10:55:09', '2020-01-23 10:55:09'),
(98, 98, 'REAA560914HCSYLN03', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1956-09-14', 'sin datos', 'sin datos', 'angelreyes@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'Instituto Politecnico Nacional', '2020-01-22', '2020-01-23 11:03:38', '2020-01-23 11:03:38'),
(99, 99, 'RIRR611129HCSNSN07', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1961-11-29', 'sin datos', 'sin datos', 'reinerr@gmail.com', '2017-07-19', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 11:07:13', '2020-01-23 11:07:13'),
(100, 100, 'RIZO661215HCSNPS06', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1966-12-15', 'sin datos', 'sin datos', 'oscarjavier@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'Mexico', 'ITTG', '2020-01-22', '2020-01-23 11:12:33', '2020-01-23 11:12:33'),
(101, 101, 'RICL570105HCSSTS00', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1957-01-05', 'sin datos', 'sin datos', 'joseluis@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 11:19:04', '2020-01-23 11:19:04'),
(102, 102, 'RICR530826HCSSTN09', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1953-08-26', 'sin datos', 'sin datos', 'renerios@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 11:23:24', '2020-01-23 11:23:24'),
(103, 103, 'RIGD691221HCSSRN05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1969-12-21', 'sin datos', 'sin datos', 'danielrios@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'Mexico', 'ITTG', '2020-01-22', '2020-01-23 11:30:32', '2020-01-23 11:30:32'),
(104, 104, 'COCV580828HCSLNC06', 'Masculino', 'Casado', 'MEXICANA', 'CHIAPAS', '1958-08-28', '12345', '12345', 'VICENTE@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-22', '2020-01-23 11:37:30', '2020-01-23 11:37:30'),
(105, 105, 'RIRC650220HCSSJR02', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1965-02-20', 'sin datos', 'sin datos', 'carlosrios@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'doctorado', 'sin datos', 'sin datos', 'mexico', 'Institut National Des Sciences Applique De Lyon', '2020-01-22', '2020-01-23 11:39:19', '2020-01-23 11:39:19'),
(106, 106, 'COMI600122HCSLGS04', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1960-01-22', '12345', '12345', 'MENGCHUN@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'MEXICO', 'sin dato', '2020-01-22', '2020-01-23 11:41:15', '2020-01-23 11:41:15'),
(107, 107, 'COMA680625MCSSRD08', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1968-06-25', '12345', '12345', 'AIDA@GMAIL.COM', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-22', '2020-01-23 11:46:12', '2020-01-23 11:47:20'),
(108, 108, 'RITO610630HCSSRC05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1961-06-30', 'sin datos', 'sin datos', 'octavioariosto@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Maestría', 'sin datos', 'sin datos', 'Mexico', 'Centro Nacional de Investigación Desarrollo Tecnológico', '2020-01-22', '2020-01-23 11:48:25', '2020-01-23 11:48:25'),
(109, 109, 'SAGJ660628HDFNZS04', 'Masculino', 'Casado', 'mexicana', 'sin datos', '1966-06-28', 'sin datos', 'sin datos', 'jesuscarlos@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'doctorado', 'sin datos', 'sin datos', 'mexico', 'Instituto Tecnol?o Y De Estudios Superiores De Monterrey', '2020-01-22', '2020-01-23 11:57:12', '2020-01-23 11:57:12'),
(110, 110, 'CUHJ430128HCSRRS09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1943-01-28', '12345', '12345', 'HERRERA@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 11:51:30', '2020-01-23 11:51:30'),
(111, 111, 'RITG721014HOCSLR02', 'Masculino', 'Casado', 'Meicana', 'sin datos', '1972-10-14', 'sin datos', 'sin datos', 'germin@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2010-11-16', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Universidad del Sur', '2020-01-22', '2020-01-23 11:52:15', '2020-01-23 11:52:15'),
(112, 112, 'CURR810817MCSRDS00', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1981-08-17', '12345', '12345', 'ISELA@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'BiotecnologíaAlimentos', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2009-10-01', 'DOCTORADO', 'DOC', 'sin dato', 'sin dato', 'INSTITUTO TECNOLOGICO DE TLAJOMULCO', '2020-01-22', '2020-01-23 11:55:57', '2020-01-23 11:55:57'),
(113, 113, 'RIZG830620MCSSXB09', 'Femenino', 'Casado', 'Meicana', 'sin datos', '1983-06-20', 'sin datos', 'sin datos', 'gabrielalejandra@gmail.com', '2018-08-15', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2006-08-06', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Inacipe - Pgr', '2020-01-22', '2020-01-23 11:56:59', '2020-01-23 11:56:59'),
(114, 114, 'CUDR741112HCSSZN06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1974-11-12', '12345', '2345', 'DRENE@GMIAL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:00:57', '2020-01-23 12:00:57'),
(115, 115, 'RORI670710HOCDJN08', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1967-07-10', 'sin datos', 'sin datos', 'indaleciodaniel@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1995-02-01', 'Licenciatura', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:01:59', '2020-01-23 12:01:59'),
(116, 116, 'SAIP600328MCSNTT02', 'Femenino', 'Casado', 'mexicana', 'mexico', '1960-03-28', 'sin datos', 'sin datos', 'patricia.gpe@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'doctorado', 'sin datos', 'sin datos', 'mexico', 'Centro De Investigaci?ient�ca De Yucatᮠ', '2020-01-22', '2020-01-23 12:13:52', '2020-01-23 12:13:52'),
(117, 117, 'CUEN390810HCSLSV00', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1939-08-10', '12345', '12345', 'ESPINOSA@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:05:06', '2020-01-23 12:05:06'),
(118, 118, 'ROMS481225MDFQRL08', 'Femenino', 'Casado', 'Mexicana', 'sin datos', '1948-12-25', 'sin datos', 'sin datos', 'silvia@gmail.com', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'Acordeón', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'Mexicana', 'Universidad De Valladolid', '2020-01-22', '2020-01-23 12:09:42', '2020-01-23 12:09:42'),
(119, 119, 'CUFD710117MCSLRL03', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1971-01-17', '12345', '12345', 'DELINA@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1998-02-16', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONAMA DE NUEVO LEON', '2020-01-22', '2020-01-23 12:09:09', '2020-01-23 12:09:09'),
(120, 120, 'DAME561015MCSVNN04', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1956-01-15', '12345', '12345', 'ENEIDA@GMAIL.COM', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'Acordeón', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1982-09-01', 'DOCTORADO', 'DOC', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:13:27', '2020-01-23 12:13:27'),
(121, 121, 'ROQA751030HPLSNR09', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1975-10-30', 'sin datos', 'sin datos', 'arnulfo@gmail.com', '2017-07-19', 'PTC(PD)', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2009-09-28', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Instituto Mexicano Del Petroleo', '2020-01-22', '2020-01-23 12:13:52', '2020-01-23 12:13:52'),
(122, 122, 'COPC800214HCSSRR08', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1980-02-14', '23451', '12345', 'VENTURINO@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2008-02-15', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE QUERETARO', '2020-01-22', '2020-01-23 12:17:15', '2020-01-23 12:17:15'),
(123, 123, 'ROSV531129HOCBNL01', 'Masculino', 'Casado', 'mexicana', 'sin datos', '1953-11-29', 'sin datos', 'sin datos', 'valentinrovledo@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:18:01', '2020-01-23 12:18:01'),
(124, 124, 'JECG580405MDFSRL08', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1958-04-05', '1234', '12345', 'GLORIA@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:20:24', '2020-01-23 12:20:24'),
(125, 125, 'RUCS520417HCSZRL00', 'Masculino', 'Casado', 'mexicana', 'sin datos', '1941-04-17', 'sin datos', 'sin datos', 'saulrigoberto@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Licenciatura', 'sin datos', 'sin datos', 'Mexico', 'Instituto Politecnico Nacional', '2020-01-22', '2020-01-23 12:23:41', '2020-01-23 12:23:41'),
(126, 126, 'SAMR530326HVZNLF18', 'Masculino', 'Casado', 'mexicana', 'mexico', '1953-03-26', 'sin datos', 'sin datos', 'jose.rafael@gmail.com', '2020-01-22', 'PTC', 'Educación, Humanidades y Arte', 'Acordeón', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1986-09-01', 'maestria', 'sin datos', 'sin datos', 'mexico', 'Instituto De Estudios Universitarios', '2020-01-22', '2020-01-23 12:35:55', '2020-01-23 12:35:55'),
(127, 127, 'CUPM820407HCSRDR06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1982-04-07', '1234', '12345', 'PADILLA@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2009-09-12', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'CENTRO DE INSVESTIGACION DESARROLLO TECNOLOGICO', '2020-01-22', '2020-01-23 12:25:48', '2020-01-23 12:25:48'),
(128, 128, 'RUPA510607HCSZRN06', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1951-06-07', 'sin datos', 'sin datos', 'joseantonio@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:27:49', '2020-01-23 12:27:49');
INSERT INTO `beneficiarios` (`id`, `user_id`, `rfc`, `genero`, `civil`, `nacionalidad`, `entidad`, `fecha_nacimiento`, `telefono`, `celular`, `email_ins`, `fecha_inscrpcion`, `perfil`, `area`, `disciplina`, `nombramiento`, `tipo_nombramiento`, `dedicacion`, `unidad`, `fecha_contrato`, `nivel`, `siglas`, `estudios`, `pais`, `institucion_otorgante`, `fecha_titulo`, `created_at`, `updated_at`) VALUES
(129, 129, 'SARI730312HCSNZL06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1973-03-12', '12345', '12345', 'ILDEBERTO@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'MAESTRIA', 'MTRI', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:32:25', '2020-01-23 12:32:25'),
(130, 130, 'RUVV820916HOCZLC03', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1982-09-16', 'RUVV820916HOCZLC03', 'RUVV820916HOCZLC03', 'victormanuel@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Centro de Investigación Estudios Avanzados del Instituto Politécnico Nacional', '2020-01-22', '2020-01-23 12:34:58', '2020-01-23 12:34:58'),
(131, 131, 'DIHJ550116HCSZRR03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1955-01-16', '12345', '12345', 'DJORGE@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:35:52', '2020-01-23 12:35:52'),
(132, 132, 'RUZR480421HCSZRN05', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1980-04-21', 'sin datos', 'sin datos', 'roney@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:38:33', '2020-01-23 12:38:33'),
(133, 133, 'DIVE520614HCSZCD09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1952-06-14', '1234', '23456', 'GUANERGES@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:39:39', '2020-01-23 12:39:39'),
(134, 134, 'SANC501104HCSNRR06', 'Masculino', 'Casado', 'mexicana', 'mexico', '1950-11-04', 'sin datos', 'sin datos', 'carlos.sanchez@gmail.com', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'mexico', 'sin datos', '2020-01-22', '2020-01-23 12:46:42', '2020-01-23 12:46:42'),
(135, 135, 'SAGC831008MCSLTT08', 'Femenino', 'Casado', 'Mexicana', 'sin datos', '1983-10-08', 'sin datos', 'sin datos', 'mariacatalina@gmail.com', '2018-08-15', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2009-09-01', 'Maestría', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:42:13', '2020-01-23 12:42:13'),
(136, 136, 'DOHM660210HCSMLL04', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1966-02-10', '123456', '12345', 'HOLAN@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2015-01-01', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE CHIAPAS', '2020-01-22', '2020-01-23 12:44:15', '2020-01-23 12:44:15'),
(137, 137, 'SAPD611205HCSMNN06', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1961-12-05', 'sin datos', 'sin datos', 'danielsamauoa@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1998-10-17', 'Doctorado', 'sin datos', 'sin datos', 'Mexico', 'Instituto De Estudios Superiores De Chiapas', '2020-01-22', '2020-01-23 12:45:27', '2020-01-23 12:45:27'),
(138, 138, 'EOGE710910HCSSML07', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1971-09-10', '12345', '123456', 'ELIAS@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'INSDUSTRIAL', '2020-01-22', '2020-01-23 12:48:36', '2020-01-23 12:48:36'),
(139, 139, 'EOVL530329HCSSLS03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1953-03-29', '123456', '1234567', 'VILLAGRAN@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:54:25', '2020-01-23 12:54:25'),
(140, 140, 'SOZJ521227HCSLVN03', 'Masculino', 'Casado', 'Mexicano', 'sin datos', '1952-12-27', 'sin datos', 'sin datos', 'juanjose@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:52:43', '2020-01-23 12:52:43'),
(141, 141, 'SATJ561123HCSRRR05', 'Masculino', 'Casado', 'mexicana', 'mexico', '1956-11-23', 'sin datos', 'sin datos', 'jorge.arturo@gmail.com', '2018-08-15', 'PTC', 'Ingeniería y Tecnología', 'IngenieríadeMateriales', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'maestria', 'sin datos', 'sin datos', 'mexico', 'Instituto Tecnol?o de Tuxtla Guti鲲ez', '2020-01-23', '2020-01-23 12:59:14', '2020-01-23 12:59:14'),
(142, 142, 'SUCR460510HCSRSC04', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1946-05-10', 'sin datos', 'sin datos', 'ricardosuarez@gmail.com', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-22', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-22', '2020-01-23 12:55:45', '2020-01-23 12:55:45'),
(143, 143, 'EICJ510607HCSSLS03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1951-06-07', '123456', '1234567', 'CALVO@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-22', '2020-01-23 12:58:29', '2020-01-23 12:58:29'),
(144, 144, 'SURF750301HCSRZR01', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1975-03-01', 'SURF750301HCSRZR01', 'SURF750301HCSRZR01', 'franciscodejesus@gmail.com', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'BasesDatos', 'SURF750301HCSRZR01', 'SURF750301HCSRZR01', 'SURF750301HCSRZR01', 'SURF750301HCSRZR01', '2000-11-01', 'Maestría', 'SURF750301HCSRZR01', 'SURF750301HCSRZR01', 'Mexico', 'SURF750301HCSRZR01', '2020-01-23', '2020-01-23 13:00:56', '2020-01-23 13:00:56'),
(145, 145, 'SOMP530604MDFLRT06', 'Femenino', 'Casado', 'mexicana', 'mexico', '1953-06-04', 'sin datos', 'sin datos', 'patricia.elena@gmail.com', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-23', 'sin datos', 'sin datos', 'sin datos', 'mexico', 'sin datos', '2020-01-23', '2020-01-23 13:06:50', '2020-01-23 13:06:50'),
(146, 146, 'EALC530824HCSSPR02', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1953-08-24', '12345', '23453', 'CRISANTO@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'CENTRO INTERDISCIPLINARIO DE INVESTIGACION DOCENCIA EN EDUCACION', '2020-01-23', '2020-01-23 13:05:04', '2020-01-23 13:05:04'),
(147, 147, 'SURG481103HCSRZL02', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1948-11-01', 'sin datos', 'sin datos', 'gilbertoalejandro@gmail.com', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-23', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-23', '2020-01-23 13:03:57', '2020-01-23 13:03:57'),
(148, 148, 'SURO440907HCSRZS03', 'Masculino', 'Casado', 'Mexicana', 'sin datos', '1944-09-07', 'sin datos', 'sin datos', 'oscarsuarez@gmail.com', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-23', 'sin datos', 'sin datos', 'sin datos', 'Mexico', 'sin datos', '2020-01-23', '2020-01-23 13:06:44', '2020-01-23 13:06:44'),
(149, 149, 'FEQG590430MDFRVD05', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1959-04-30', '12345', '23451', 'QUEVEDO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:11:00', '2020-01-23 13:11:00'),
(150, 150, 'FEGR600510HCSRND02', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1960-05-10', '12345', '12345', 'RODRIGO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:21:58', '2020-01-23 13:21:58'),
(151, 151, 'FICJ730131HCSGRR00', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1973-01-31', '12345', '123456', 'WCORZO@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1998-04-16', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-23 13:26:39', '2020-01-23 13:26:39'),
(152, 152, 'FIPB560904MCSGLL09', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1956-09-04', '12345', '12345', 'PULIDO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:31:00', '2020-01-23 13:31:00'),
(153, 153, 'FIPR490220HCSGLM09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1949-02-20', '12345', '2345', 'CARALAMPIO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:35:28', '2020-01-23 13:35:28'),
(154, 154, 'FOPA511120MDFLRR05', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1951-11-20', '12345', '12345', 'AURA@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'INSTITUTO POLITECNICO NACIONAL', '2020-01-23', '2020-01-23 13:40:46', '2020-01-23 13:40:46'),
(155, 155, 'GACJ670903MCSRND09', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1967-09-03', '12345', '12345', 'CANCINO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1994-02-16', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:44:55', '2020-01-23 13:44:55'),
(156, 156, 'GAGR721020HSPRMB12', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1972-10-20', '12345', '12345', 'RGARCIA@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'CENTRO DE INGENIERIA Y DESARROLLO AMBIENTAL', '2020-01-23', '2020-01-23 13:50:13', '2020-01-23 13:50:13'),
(157, 157, 'GALA521211HCSRPN00', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1952-12-11', '1234', '1234', 'ANDRESL@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 13:57:00', '2020-01-23 13:57:00'),
(158, 158, 'GAMH500111HVZRNG09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1950-01-11', '12345', '12345', 'MENDOZA@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'UNIVERSIDAD VERACRUZANA', '2020-01-23', '2020-01-23 14:02:19', '2020-01-23 14:02:19'),
(159, 159, 'GARO770926HCSRMS16', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1977-09-26', '12345', '12344', 'RAMOS@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2014-01-01', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-23 14:07:09', '2020-01-23 14:07:09'),
(160, 160, 'GARG520915HCSRDL05', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1952-09-15', '12345', '12345', 'GUALBERTO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 14:11:20', '2020-01-23 14:11:20'),
(161, 161, 'GOGA501215HVZLRR05', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1950-12-15', '12345', '123454', 'GORGONIO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 14:25:58', '2020-01-23 14:25:58'),
(162, 162, 'GOGL660917HCSMTN09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1966-09-17', '123456', '123456', 'GLEONARDO@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'Básicas', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2000-11-16', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-23 14:32:19', '2020-01-23 14:32:19'),
(163, 163, 'GOPS820921HCSMXM04', 'Masculino', 'Casado', 'MWXICANA', 'sin dato', '1982-09-21', '123456', '123456', 'GSAMUEL@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2009-09-15', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE CHIAPAS', '2020-01-23', '2020-01-23 14:42:13', '2020-01-23 14:42:13'),
(164, 164, 'GOPJ811014HCSMRL04', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1981-10-14', '112345', '12345', 'GJOEL@GMAIL.COM', '2017-07-19', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2010-03-16', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-23 14:47:06', '2020-01-23 14:47:06'),
(165, 165, 'GORA510613HCSMBN06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1951-06-13', '12345', '234565', 'ROBLERO@GMAIL.COM', '2020-01-23', 'PTC', 'Educación, Humanidades y Arte', 'CienciasEducación', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE CHIAPAS', '2020-01-23', '2020-01-23 14:51:16', '2020-01-23 14:51:16'),
(166, 166, 'GOSJ780911HCSMLR06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1978-09-11', '123456', '2345', 'SALINAS_JA@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2005-03-01', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-23 14:56:06', '2020-01-23 14:56:06'),
(167, 167, 'GOEA570624MVZNSD04', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1957-06-24', '2345654', '234354', 'ESCOBAR@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1999-03-01', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'BENEMERITA UNIVERSIDAD AUTONOMA DE PUEBLA', '2020-01-23', '2020-01-23 15:01:49', '2020-01-23 15:01:49'),
(168, 168, 'GOLA700505MCSNGL07', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1970-05-05', '23454', '23451', 'LAGUNA@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2015-01-01', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO LATINOAMERICANO DE COMUNICACION EDUCATIVA', '2020-01-23', '2020-01-23 15:09:50', '2020-01-23 15:09:50'),
(169, 169, 'GOMH610306MOCNNR02', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1961-03-06', '341231', '23234324', 'HERLINDA@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'LICENCIATURA', 'LIC', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 15:14:55', '2020-01-23 15:14:55'),
(170, 170, 'GAPL510407HCSRSZ03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1951-10-07', '4234234', '23425', 'PASCACIO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-23 15:22:14', '2020-01-23 15:22:14'),
(171, 171, 'GUCH720627HCSRRC03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1972-06-27', '124234', '12345', 'CRESPO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'UNIVERSIDAD DEL SUR', '2020-01-23', '2020-01-23 15:26:41', '2020-01-23 15:26:41'),
(172, 172, 'VALI680424MJCLPM04', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1968-04-24', '12345', '123456', 'IMEVALLES@YAHOO.COM.MX', '2017-07-19', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'DIRECCION GENERAL DE EDUCACION SUPERIOR TECNOLOGICA', '2020-01-23', '2020-01-24 01:45:05', '2020-01-24 01:45:05'),
(173, 173, 'GUMF570116HCSTCD01', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1957-01-16', '123456', '123456', 'GFEDERICO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTOROADO', 'DOC', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 02:16:09', '2020-01-24 02:16:09'),
(174, 174, 'EISS590427HCSNNM02', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1959-04-27', '123456', '123456', 'SAENZ@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'BiotecnologíaAmbiental', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE CHIAPAS', '2020-01-23', '2020-01-24 04:13:58', '2020-01-24 04:13:58'),
(175, 175, 'VECL661214MOCNNC01', 'Femenino', 'Casado', 'MEXICANA', 'sin dato', '1966-12-14', '125342', '321323445', 'VCANSECO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE VERACRUZ', '2020-01-23', '2020-01-24 06:36:41', '2020-01-24 06:36:41'),
(176, 176, 'GUCF500908HVZTNL06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1950-09-08', '123456', '234532', 'CONTRERAS@GMAIL.COM', '2020-01-22', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 08:41:53', '2020-01-24 08:41:53'),
(177, 177, 'GUDM561007HCSTMR08', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1956-10-07', '23456', '23456', 'DOMINGUEZ@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE OAXACA', '2020-01-23', '2020-01-24 08:46:46', '2020-01-24 08:46:46'),
(178, 178, 'GUGC640314MCSTMN03', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1964-03-14', '123456', '12345', 'GCANDELRIA@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1998-09-16', 'DOCTORADO', 'DOC', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 08:54:51', '2020-01-24 08:54:51'),
(179, 179, 'GUMD461001HCSZLV09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1946-10-01', '12345', '12345', 'GDAVID@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 09:02:09', '2020-01-24 09:02:09'),
(180, 180, 'VASH701220HCSLNR08', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1970-12-20', '12345', '1234', 'VHERNAN@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2007-06-01', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-24 09:08:43', '2020-01-24 09:08:43'),
(181, 181, 'VAHC590714HCSZRR02', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1959-07-14', '123456', '123456', 'JOSE_HDEZ@GMAIL.COM', '2020-01-22', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'INSTITUTO DE ESTUDIOS UNIVERSITARIOS', '2020-01-23', '2020-01-24 09:25:31', '2020-01-24 09:25:31'),
(182, 182, 'VARV650315HCSZMC01', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1965-03-15', '123456', '23456', 'VRAMIREZ_VM@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '1995-02-01', 'LICENCIATURA', 'LIC', 'sin datos', 'MEXICO', 'INSTITUTO TECNOLOGICO DE VERACRUZ', '2020-01-23', '2020-01-24 09:32:41', '2020-01-24 09:32:41'),
(183, 183, 'VASR600116HCSZLB00', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1960-01-16', '12345', '123456', 'SOL_RD@GMAIL.COM', '2019-01-23', 'PTC', 'Ingeniería y Tecnología', 'Biotecnología', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2003-10-01', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE MEXICO', '2020-01-23', '2020-01-24 09:37:42', '2020-01-24 09:37:42'),
(184, 184, 'VAVM661008HCSZLG00', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1966-10-08', '1234', '12345', 'MIGUEL_VV@GMAIL.COM', '2019-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'LICENCIATURA', 'LIC', 'sin dato', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE NUEVO LEON', '2020-01-23', '2020-01-24 09:42:32', '2020-01-24 09:42:32'),
(185, 185, 'VEML520623HCSLTS04', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1953-06-23', '123425', '34241', 'VMMODESTO@GMAIL.COM', '2020-01-23', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO DE ESTUDIOS UNIVERSITARIOS', '2020-01-23', '2020-01-24 09:47:50', '2020-01-24 09:47:50'),
(186, 186, 'VETS530219HCSLRB05', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1953-02-19', '12345', '12345', 'VSABINO@GMAIL.COM', '2017-07-19', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'DOCTORADO', 'DOC', 'sin dato', 'MEXICO', 'CENTRO DE INGENIERIA  Y DESARROLLO INDUSTRIAL', '2020-01-23', '2020-01-24 09:54:28', '2020-01-24 09:54:28'),
(187, 187, 'VERG570409HCSNBR05', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1957-04-09', '123456', '234567', 'ROBLES@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 09:59:41', '2020-01-24 09:59:41'),
(188, 188, 'VIMJ600308HNTLLN07', 'Masculino', 'Casado', 'MEXICANA', 'sin datos', '1960-03-08', '123456', '1234567', 'VMALDONADO@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin datos', 'sin datos', 'sin datos', 'sin datos', '2020-01-23', 'DOCTORADO', 'DOC', 'sin datos', 'MEXICO', 'UNIVERSIDAD AUTONOMA DE NUEVO LEON', '2020-01-23', '2020-01-24 10:05:25', '2020-01-24 10:05:25'),
(189, 189, 'VIGH570813HCSLNP02', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1957-08-13', '12345', '12345', 'VHIPOLITO@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 10:09:45', '2020-01-24 10:09:45'),
(190, 190, 'ZEHA621102HCSPRN06', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1962-11-02', '123456', '234567', 'JHERNANDEZ@GMAIL.COM', '2019-08-14', 'PTC', 'Ingeniería y Tecnología', 'AcabadosTextiles', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '1999-03-01', 'MAESTRIA', 'MTRIA', 'sin dato', 'MEXICO', 'INSTITUTO TECNOLOGICO DE TUXTLA GUTIERREZ', '2020-01-23', '2020-01-24 10:15:03', '2020-01-24 10:15:03'),
(191, 191, 'ZEHL490511HCSPRS07', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1949-05-11', '123456', '23456', 'JHERNANDEZ@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', 'sin dato', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 10:17:57', '2020-01-24 10:17:57'),
(192, 192, 'ZURM721026HCSXYR09', 'Masculino', 'Casado', 'MEXICANA', 'sin dato', '1072-10-26', '21345', '123456', 'MREYES@GMAIL.COM', '2020-01-23', 'PTC', 'Ciencias Sociales y Administrativas', 'Administración', 'sin dato', 'sin dato', 'sin dato', 'sin dato', '2001-01-10', 'MAESTRIA', 'MTRIA', 'sin dato', 'sin dato', 'sin dato', '2020-01-23', '2020-01-24 10:22:15', '2020-01-24 10:22:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cas`
--

CREATE TABLE `cas` (
  `id` int(11) NOT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cas`
--

INSERT INTO `cas` (`id`, `clave`, `nombre`) VALUES
(2, 'ITTUXG-CA-2', 'BIOTECNOLOGIAS PARA EL DESARROLLO SUSTENTABLE DEL ESTADO DE CHIAPAS'),
(7, 'ITTUXG-CA-14', 'TI 4.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesiones`
--

CREATE TABLE `concesiones` (
  `id` int(11) NOT NULL,
  `concesionado_id` int(10) DEFAULT NULL,
  `concesionado_type` varchar(45) DEFAULT NULL,
  `concesionario_id` int(10) DEFAULT NULL,
  `concesionario_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `concesiones`
--

INSERT INTO `concesiones` (`id`, `concesionado_id`, `concesionado_type`, `concesionario_id`, `concesionario_type`) VALUES
(33, 21, 'App\\Models\\Tramite', 179, 'App\\Models\\Beneficiario'),
(34, 21, 'App\\Models\\Tramite', 11, 'App\\Models\\Beneficiario'),
(36, 191, 'App\\Models\\Evidencia', 151, 'App\\Models\\Beneficiario'),
(37, 191, 'App\\Models\\Evidencia', 11, 'App\\Models\\Beneficiario'),
(60, 229, 'App\\Models\\Tramite', 10, 'App\\Models\\Beneficiario'),
(61, 229, 'App\\Models\\Tramite', 28, 'App\\Models\\Beneficiario'),
(62, 229, 'App\\Models\\Tramite', 179, 'App\\Models\\Beneficiario'),
(63, 229, 'App\\Models\\Tramite', 11, 'App\\Models\\Beneficiario'),
(64, 229, 'App\\Models\\Tramite', 172, 'App\\Models\\Beneficiario'),
(65, 231, 'App\\Models\\Tramite', -1, 'App\\Models\\Beneficiario'),
(73, 232, 'App\\Models\\Tramite', 107, 'App\\Models\\Beneficiario'),
(76, 232, 'App\\Models\\Tramite', 83, 'App\\Models\\Beneficiario'),
(77, 251, 'App\\Models\\Evidencia', 107, 'App\\Models\\Beneficiario'),
(78, 232, 'App\\Models\\Tramite', 7, 'App\\Models\\Ca'),
(79, 251, 'App\\Models\\Evidencia', 7, 'App\\Models\\Ca'),
(80, 226, 'App\\Models\\Tramite', -1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int(10) NOT NULL,
  `tramite_id` int(10) NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `evidencias`
--

INSERT INTO `evidencias` (`id`, `tramite_id`, `documento`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 0, 'ConstanciaVigencia2 (1).pdf', 'evidencia de un documento', '2020-02-14 02:36:39', '2020-02-14 02:36:39'),
(2, 0, 'doc (1).pdf', 'apoyo a ptc', '2020-02-14 02:37:46', '2020-02-14 02:37:46'),
(3, 0, '2015_02_20 aprobacion1.pdf', 'prueba de error', '2020-02-15 12:36:42', '2020-02-15 12:36:42'),
(6, 22, '2015_06_12 redistribucion jguzman 6432 OFICIO ITTGTZ.REDIS.MONT.PERFIL.pdf', 'redistribucion 2015', '2020-02-15 14:53:12', '2020-02-15 14:53:12'),
(7, 0, '2015_06_22 TUXTLA GUTIÉRREZ AE 2015 30000.pdf', 'AE 2015 30000', '2020-02-15 14:56:56', '2020-02-15 14:56:56'),
(8, 0, '2015_04_09  registro CAEC tecnologia computacional para el desarrollo regional.pdf', 'registro CAEF tecnologia 2015', '2020-02-15 15:00:05', '2020-02-15 15:00:05'),
(9, 0, 'LARA.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:03:48', '2020-02-15 15:03:48'),
(10, 0, 'LUNA.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:05:07', '2020-02-15 15:05:07'),
(11, 0, 'MOTA.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:09:01', '2020-02-15 15:09:01'),
(12, 0, 'RUIZ.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:10:48', '2020-02-15 15:10:48'),
(13, 0, 'ORTIZ.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:12:01', '2020-02-15 15:12:01'),
(14, 0, '2015_07_21 perfil Gutierrez Miceli Federico Antonio.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:13:36', '2020-02-15 15:13:36'),
(15, 0, 'COSSIO.pdf', 'reconocimiento y apoyo 2015', '2020-02-15 15:15:07', '2020-02-15 15:15:07'),
(16, 0, '2016_01_13 redistribucion lara.pdf', 'redistribucion 2015', '2020-02-15 15:17:06', '2020-02-15 15:17:06'),
(17, 0, '2015_07_21 DICTAMEN_PRODEP 2015__1 .pdf', 'dictamen prodep 2015', '2020-02-15 15:19:19', '2020-02-15 15:19:19'),
(18, 0, '2015_07_21 DICTAMEN_PRODEP 2015__1 .pdf', 'dictamen prodep 2015', '2020-02-15 15:20:03', '2020-02-15 15:20:03'),
(19, 0, '2015_08_06 solicita Transferencia PRODEP LARA 001.pdf', 'Transferencia prodep', '2020-02-15 15:22:36', '2020-02-15 15:22:36'),
(20, 0, '2015_08_06 solicita Transferencia PRODEP LARA 001.pdf', 'Transferencia prodep', '2020-02-15 15:24:26', '2020-02-15 15:24:26'),
(21, 0, '2015_07_21 DICTAMEN_PRODEP 2015__2.pdf', 'dictamen prodep 2015', '2020-02-15 15:26:19', '2020-02-15 15:26:19'),
(22, 0, '2016_01_11 oficio solicita jacinta luna redistribucion.pdf', 'oficio solicita jacinta', '2020-02-15 15:27:59', '2020-02-15 15:27:59'),
(23, 0, '2015_09_03 OFICIO SOCILITUD GESTIONAR 160,000.pdf', 'OFICIO SOCILITUD GESTIONAR 160,000', '2020-02-15 15:31:21', '2020-02-15 15:31:21'),
(24, 0, '2015_09_21 10319 OFICIO ITTGTZ.CARTA.LIBER.RÉPL.PERFIL.2015.pdf', '10319 oficio ittgtz', '2020-02-15 15:33:49', '2020-02-15 15:33:49'),
(25, 0, '2015_09_03 OFICIO SOCILITUD GESTIONAR 160,000.pdf', 'OFICIO SOCILITUD GESTIONAR 160,000', '2020-02-15 15:36:07', '2020-02-15 15:36:07'),
(26, 0, '2016_02_29 AE TUXTLA GUTIERREZ 2015 - 3 160 mil.pdf', 'AE 3', '2020-02-15 15:40:35', '2020-02-15 15:40:35'),
(27, 0, '2016_02_29 AE TUXTLA GUTIERREZ 2015 - 3 160 mil.pdf', 'AE 3', '2020-02-15 15:44:46', '2020-02-15 15:44:46'),
(28, 0, '2015_09_21 10319 OFICIO ITTGTZ.CARTA.LIBER.RÉPL.PERFIL.2015.pdf', 'carta de liberacion', '2020-02-16 05:51:49', '2020-02-16 05:51:49'),
(29, 0, '2015_09_21 ITTUXG_2015_1__Acuse_No_Aprobados1_3.pdf', 'Acuse no aprobado', '2020-02-16 05:54:09', '2020-02-16 05:54:09'),
(30, 0, '2015_09_21 ITTUXG_Montes Molina Joaquin Adolfo.pdf', 'ITTUXTG', '2020-02-16 05:56:12', '2020-02-16 05:56:12'),
(31, 0, '2015_09_21 ITTUXG_Ortiz Y Ojeda Pedro Tomas.pdf', 'ITTUXTG', '2020-02-16 05:58:07', '2020-02-16 05:58:07'),
(32, 0, '2016_03_03 sol redistribucion mota.pdf', 'redistribucion', '2020-02-16 05:59:43', '2020-02-16 05:59:43'),
(33, 0, '2015_09_21 ITTUXG_2015_1__Acuse_No_Aprobados1_1.pdf', 'Acuse no aprobado', '2020-02-16 06:01:08', '2020-02-16 06:01:08'),
(34, 0, '2015_12_3 ittuxg12901no se presento comprobacion enciso.pdf', 'No se presento comprobación', '2020-02-16 06:02:56', '2020-02-16 06:02:56'),
(35, 0, '2015_09_21 10321 OFICIO ITTGTZ.FORM.RÉPL.PERFIL.2015.pdf', 'oficio form', '2020-02-16 06:05:48', '2020-02-16 06:05:48'),
(36, 0, '2015_09_21 10319 OFICIO ITTGTZ.CARTA.LIBER.RÉPL.PERFIL.2015.pdf', 'oficio carta liberacion', '2020-02-16 06:06:41', '2020-02-16 06:06:41'),
(37, 0, '2015_12_09 comprobacion financiera SAMUEL.pdf', 'comprobacion financiera', '2020-02-16 06:08:07', '2020-02-16 06:08:07'),
(38, 0, '2015_REGISTRO_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_.pdf', 'registro ca', '2020-02-16 06:12:37', '2020-02-16 06:12:37'),
(39, 0, '2016_02_02 lib sam .pdf', 'liberacion', '2020-02-16 06:13:37', '2020-02-16 06:13:37'),
(40, 0, '2015_REGISTRO_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_.pdf', 'registro ca', '2020-02-16 06:17:11', '2020-02-16 06:17:11'),
(41, 0, '2008_ACUSE_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_1.pdf', 'acuse', '2020-02-16 06:20:00', '2020-02-16 06:20:00'),
(42, 0, '2008_ACUSE_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_2.pdf', 'acuse', '2020-02-16 06:21:06', '2020-02-16 06:21:06'),
(43, 0, '13403 OFICIO ITTG.FORM.RESUL.REGCA.CONV.2015.pdf', 'resultados de regca', '2020-02-16 06:24:43', '2020-02-16 06:24:43'),
(44, 0, 'Liberacion CONACyT.pdf', 'Liberacion conacyt', '2020-02-16 09:16:03', '2020-02-16 09:16:03'),
(45, 0, 'aval candelaria.pdf', 'Aval candelaria', '2020-02-16 09:17:03', '2020-02-16 09:17:03'),
(46, 0, 'aval niños.pdf', 'aval niños', '2020-02-16 09:17:50', '2020-02-16 09:17:50'),
(47, 0, 'aval Hernan Valencia.pdf', 'Aval hernan valencia', '2020-02-16 09:25:39', '2020-02-16 09:25:39'),
(48, 0, 'aval Padilla.pdf', 'Aval padilla', '2020-02-16 09:26:38', '2020-02-16 09:26:38'),
(49, 0, 'ficha000.pdf', 'ficha 000', '2020-02-16 09:27:44', '2020-02-16 09:27:44'),
(50, 0, 'ficha robertocarlos.pdf', 'ficha roberto carlos', '2020-02-16 09:29:19', '2020-02-16 09:29:19'),
(51, 0, 'ficha padilla.pdf', 'ficha padilla', '2020-02-16 09:30:22', '2020-02-16 09:30:22'),
(52, 0, 'ficha anzueto.pdf', 'ficha anzueto', '2020-02-16 09:31:08', '2020-02-16 09:31:08'),
(53, 0, 'ficha valencia hernan.pdf', 'ficha hernan', '2020-02-16 09:32:03', '2020-02-16 09:32:03'),
(54, 0, 'ficha ovando.pdf', 'ficha ovando', '2020-02-16 09:33:07', '2020-02-16 09:33:07'),
(55, 0, 'ficha HernandezRicardo.pdf', 'ficha hernandez ricardo', '2020-02-16 09:34:29', '2020-02-16 09:34:29'),
(56, 0, 'ficha rioscarlos.pdf', 'ficha rios carlos', '2020-02-16 09:35:49', '2020-02-16 09:35:49'),
(57, 0, 'ficha rioscarlos.pdf', 'ficha rios carlos', '2020-02-16 09:35:49', '2020-02-16 09:35:49'),
(58, 0, 'ficha villalobos.pdf', 'ficha', '2020-02-16 09:36:32', '2020-02-16 09:36:32'),
(59, 0, 'ficha luciamariac.pdf', 'ficha lucia maria', '2020-02-16 09:38:03', '2020-02-16 09:38:03'),
(60, 0, 'ficha may.pdf', 'ficha', '2020-02-16 09:38:41', '2020-02-16 09:38:41'),
(61, 0, 'ficha zepeda.pdf', 'ficha', '2020-02-16 09:39:34', '2020-02-16 09:39:34'),
(62, 0, 'ficha guerracrespo.pdf', 'ficha', '2020-02-16 09:40:39', '2020-02-16 09:40:39'),
(63, 0, 'ficha raulmoreno.pdf', 'ficha', '2020-02-16 09:41:41', '2020-02-16 09:41:41'),
(64, 0, 'ficha ruben herrera.pdf', 'ficha', '2020-02-16 09:42:28', '2020-02-16 09:42:28'),
(65, 0, 'Producto2366212.pdf', 'producto 2366212', '2020-02-16 09:44:18', '2020-02-16 09:44:18'),
(66, 0, 'comprobante_pago.pdf', 'comprobante pago', '2020-02-16 09:45:13', '2020-02-16 09:45:13'),
(67, 0, '2016_03_10 FROMEM33 1.pdf', 'FROMEM33', '2020-02-16 09:52:39', '2020-02-16 09:52:39'),
(68, 0, '2016_04_12 proyecto CA ptomas.pdf', 'proyecto ca', '2020-02-16 09:55:25', '2020-02-16 09:55:25'),
(69, 0, '2016_04_12 solicitud.pdf', 'solicitud', '2020-02-16 10:02:17', '2020-02-16 10:02:17'),
(70, 0, '2016_01_13 redistribucion lara.pdf', 'redistribucion', '2020-02-16 10:03:12', '2020-02-16 10:03:12'),
(71, 0, '2016_02_02 lib sam .pdf', 'liberacion', '2020-02-16 10:04:08', '2020-02-16 10:04:08'),
(72, 0, '2016_03_15 2879 OFICIO ITTUXTLA.GTZ.REDIS.MONT.PERFIL PEDRO.pdf', 'redistribucion', '2020-02-16 10:05:49', '2020-02-16 10:05:49'),
(73, 0, '2016_04_04 redistribucion jacinta.pdf', 'redistribucion', '2020-02-16 10:06:35', '2020-02-16 10:06:35'),
(74, 0, '2016_07_11 Aprobados.pdf', 'aprobados', '2020-02-16 10:10:52', '2020-02-16 10:10:52'),
(75, 0, '8749 OFICIO IT.TUXTLA.GTZ.FORM.PERFIL.2016.pdf', 'form.perfil 2016', '2020-02-16 10:20:23', '2020-02-16 10:20:23'),
(76, 0, 'ITTUXG_Camas Anzueto Jorge Luis.pdf', 'camas anzueto', '2020-02-16 10:24:22', '2020-02-16 10:24:22'),
(77, 0, 'ITTUXG_Castañon Gonzalez Jose Humberto.pdf', 'ITTUXG castañon', '2020-02-16 10:29:21', '2020-02-16 10:29:21'),
(78, 0, 'ITTUXG_De la Cruz Padilla Mario Alberto.pdf', 'ITTUXTG', '2020-02-16 10:30:32', '2020-02-16 10:30:32'),
(79, 0, 'ITTUXG_Garcia Gomez Roberto Carlos.pdf', 'ITTUXTG', '2020-02-16 10:32:28', '2020-02-16 10:32:28'),
(80, 0, 'ITTUXG_Guerra Crespo Hector.pdf', 'ITTUXTG', '2020-02-16 10:34:08', '2020-02-16 10:34:08'),
(81, 0, 'ITTUXG_Herrera Galicia Ruben.pdf', 'ITTUXTG', '2020-02-16 10:35:27', '2020-02-16 10:35:27'),
(82, 0, 'ITTUXG_Moreno Rincon Raul.pdf', 'ITTUXTG', '2020-02-16 10:36:24', '2020-02-16 10:36:24'),
(83, 0, 'ITTUXG_Ovando Chacón Sandy Luz.pdf', 'ITTUXTG', '2020-02-16 10:37:16', '2020-02-16 10:37:16'),
(84, 0, 'ITTUXG_Rios Rojas Carlos.pdf', 'ITTUXTG', '2020-02-16 10:38:21', '2020-02-16 10:38:21'),
(85, 0, 'ITTUXG_Sanchez Iturbe Patricia Guadalupe.pdf', 'ITTUXTG', '2020-02-16 10:39:31', '2020-02-16 10:39:31'),
(86, 0, 'ITTUXG_Valencia Sanchez Hernan.pdf', 'ITTUXTG', '2020-02-16 10:40:56', '2020-02-16 10:40:56'),
(87, 0, 'ITTUXG_Ventura Canseco Lucia Maria Cristina.pdf', 'ITTUXTG', '2020-02-16 10:42:11', '2020-02-16 10:42:11'),
(88, 0, 'ITTUXG_Villalobos Maldonado Juan Jose.pdf', 'ITTUXTG', '2020-02-16 10:43:14', '2020-02-16 10:43:14'),
(89, 0, 'ITTUXG_Zepeda Hernandez Jose Angel.pdf', 'ITTUXTG', '2020-02-16 10:43:58', '2020-02-16 10:43:58'),
(90, 0, 'na_cande.pdf', 'na', '2020-02-16 10:45:09', '2020-02-16 10:45:09'),
(91, 0, 'na_imelda.pdf', 'na', '2020-02-16 10:45:49', '2020-02-16 10:45:49'),
(92, 0, 'na_may.pdf', 'na', '2020-02-16 10:46:25', '2020-02-16 10:46:25'),
(93, 0, 'na_niños.pdf', 'na', '2020-02-16 10:47:14', '2020-02-16 10:47:14'),
(94, 0, 'na_samuel.pdf', 'na', '2020-02-16 10:48:42', '2020-02-16 10:48:42'),
(95, 0, 'na_robertodavid.pdf', 'na', '2020-02-16 10:49:31', '2020-02-16 10:49:31'),
(96, 0, '2016_07_11  8747 OFICIO ITTUXTLA.GTZ.CARTA.LIBER.PERFIL.2016.pdf', 'carta liberacion', '2020-02-16 10:55:32', '2020-02-16 10:55:32'),
(97, 0, '2016_09_05 DictamenAprobadoFortalecimiento_Institutotecnologicotuxtlagutierre.pdf', 'Dictamen aprobado fortalecimiento', '2020-02-16 10:58:01', '2020-02-16 10:58:01'),
(98, 0, '2016_09_09  11638 OFICIO ITTGTZ.FORM.PERFIL.RÉPL.2016.pdf', 'oficio ittgtz', '2020-02-16 11:00:39', '2020-02-16 11:00:39'),
(99, 0, '2016_09_09  ITTUXG_2016_1__Acuse_No_Aprobados1.pdf', 'Acuse no aprobado', '2020-02-16 11:02:12', '2020-02-16 11:02:12'),
(100, 0, '2016_09_09  ITTUXG_2016_1__AcuseAprobados.pdf', 'Acuse aprobado', '2020-02-16 11:04:47', '2020-02-16 11:04:47'),
(101, 0, '2016_09_09  ITTUXG_Vázquez Solís Roberto David.pdf', 'ITTUXTG', '2020-02-16 11:06:32', '2020-02-16 11:06:32'),
(102, 0, '2016_11_07 2016_REGISTRO_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_.pdf', 'Rehistro', '2020-02-16 11:09:07', '2020-02-16 11:09:07'),
(103, 0, '2016_11_07 2016_ACUSE_NO_RECONOCIDOS_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_.pdf', 'Acuse no reconcidos', '2020-02-16 11:10:06', '2020-02-16 11:10:06'),
(104, 0, '2016_11_18 notifica DSA que no procede apoyo a may y niños.pdf', 'dsa no procede', '2020-02-16 11:13:29', '2020-02-16 11:13:29'),
(105, 0, 'pidio Sanchez Iturbe.pdf', 'pidio sanchez iturbe', '2020-02-16 11:14:29', '2020-02-16 11:14:29'),
(106, 0, 'joel.pdf', 'joel', '2020-02-16 11:15:16', '2020-02-16 11:15:16'),
(107, 0, 'may.pdf', 'may', '2020-02-16 11:15:59', '2020-02-16 11:15:59'),
(108, 0, 'niños.pdf', 'niños', '2020-02-16 11:16:36', '2020-02-16 11:16:36'),
(109, 0, 'sabino.pdf', 'sabino', '2020-02-16 11:17:52', '2020-02-16 11:17:52'),
(110, 0, 'evidencia006.pdf', 'evidencia 006', '2020-02-16 11:18:47', '2020-02-16 11:18:47'),
(111, 0, '2017_______ aval nestor.pdf', '2017 aval', '2020-02-16 11:29:22', '2020-02-16 11:29:22'),
(112, 0, '2017_06_02 constacia jogs en ca.pdf', 'constancia jogs en ca', '2020-02-16 11:31:27', '2020-02-16 11:31:27'),
(113, 0, '2017_07_19 10095 OFICIO ITTGUTIÉRREZ.CARTA.LIBER.PERFIL.17.pdf', 'carta liberacion', '2020-02-16 11:36:25', '2020-02-16 11:36:25'),
(114, 0, '2017_07_19 10097 OFICIO ITTGUTIÉRREZ.FORM.PERFIL.17.pdf', 'form.perfil 2017', '2020-02-16 11:38:58', '2020-02-16 11:38:58'),
(115, 0, '2017_07_19 ITTUXG_2017_1__Acuse_No_Aprobados1.pdf', 'Acuse no aprobado', '2020-02-16 11:40:14', '2020-02-16 11:40:14'),
(116, 0, '2017_07_19 ITTUXG_Gomez Perez Joel.pdf', 'ITTUXTG', '2020-02-16 11:41:28', '2020-02-16 11:41:28'),
(117, 0, '2017_07_19 ITTUXG_Guzman Sanchez Jorge Octavio.pdf', 'ITTUXTG', '2020-02-16 11:42:32', '2020-02-16 11:42:32'),
(118, 0, '2017_07_19 ITTUXG_Hernandez  Sol Alvaro.pdf', 'ITTUXTG', '2020-02-16 11:43:47', '2020-02-16 11:43:47'),
(119, 0, '2017_07_19 ITTUXG_Rincon Rosales Reiner.pdf', 'ITTUXTG', '2020-02-16 11:44:28', '2020-02-16 11:44:28'),
(120, 0, '2017_07_19 ITTUXG_Rosales Quintero Arnulfo.pdf', 'ITTUXTG', '2020-02-16 11:46:40', '2020-02-16 11:46:40'),
(121, 0, '2017_07_19 ITTUXG_Valles Lopez Imelda.pdf', 'ITTUXTG', '2020-02-16 11:47:33', '2020-02-16 11:47:33'),
(122, 0, '2017_07_19 ITTUXG_Velazquez Trujillo Sabino.pdf', 'ITTUXTG', '2020-02-16 11:48:26', '2020-02-16 11:48:26'),
(123, 0, '2007_11_01 ITTUXG_Escobar Gomez Elias Neftali.pdf', 'ITTUXTG', '2020-02-16 11:49:47', '2020-02-16 11:49:47'),
(124, 0, '2007_11_01 12951 OFICIO ITTUX.GTEZ.FORM.RÉPL.PERFIL.2017.pdf', 'form.perfil', '2020-02-16 11:51:22', '2020-02-16 11:51:22'),
(125, 0, '2007_11_01 ITTUXG_2017_1__AcuseAprobados.pdf', 'Acuse aprobado', '2020-02-16 11:52:16', '2020-02-16 11:52:16'),
(126, 0, '2017_11_08 ITTUXG_2017_1__AcuseAprobados.pdf', 'Acuse aprobado', '2020-02-16 11:53:40', '2020-02-16 11:53:40'),
(127, 0, '2017_11_08 ITTUXG_Abud Archila Miguel.pdf', 'ITTUXTG', '2020-02-16 11:54:38', '2020-02-16 11:54:38'),
(128, 0, '2017_11_01 reconocimiento elias nefatli replica.pdf', 'reconocimiento', '2020-02-16 11:55:49', '2020-02-16 11:55:49'),
(129, 0, '2017_11_08 reconocmiento aubd por 6 años.pdf', 'reconocimiento', '2020-02-16 11:56:45', '2020-02-16 11:56:45'),
(130, 0, '2011_REGISTRO_INSTITUTOTECNOLoGICOTUXTLAGUTIeRRE_-4.pdf', 'registro', '2020-02-16 12:02:52', '2020-02-16 12:02:52'),
(131, 0, 'ABUD.pdf', 'abud', '2020-02-16 12:03:55', '2020-02-16 12:03:55'),
(132, 0, 'BASAVE.pdf', 'basave', '2020-02-16 12:04:33', '2020-02-16 12:04:33'),
(133, 0, 'CATALINA.pdf', 'catalina', '2020-02-16 12:05:20', '2020-02-16 12:05:20'),
(134, 0, 'COSSIO.pdf', 'cossio', '2020-02-16 12:06:00', '2020-02-16 12:06:00'),
(135, 0, 'GABRIELA_RIOS.pdf', 'gabriela rios', '2020-02-16 12:07:11', '2020-02-16 12:07:11'),
(136, 0, 'JACINTA.pdf', 'jacinta', '2020-02-16 12:07:49', '2020-02-16 12:07:49'),
(137, 0, 'JOAQUIN_MONTES__.pdf', 'joaquin montes', '2020-02-16 12:08:36', '2020-02-16 12:08:36'),
(138, 0, 'LARA.pdf', 'lara', '2020-02-16 12:09:14', '2020-02-16 12:09:14'),
(139, 0, 'LLAVEN.pdf', 'llaven', '2020-02-16 12:09:57', '2020-02-16 12:09:57'),
(140, 0, 'MADAÍN.pdf', 'madain', '2020-02-16 12:11:03', '2020-02-16 12:11:03'),
(141, 0, 'MOTA.pdf', 'mota', '2020-02-16 12:11:38', '2020-02-16 12:11:38'),
(142, 0, 'MELK.pdf', 'melk', '2020-02-16 12:12:19', '2020-02-16 12:12:19'),
(143, 0, 'NESTOR__.pdf', 'nestor', '2020-02-16 12:12:58', '2020-02-16 12:12:58'),
(144, 0, 'PTOMAS___.pdf', 'ptomas', '2020-02-16 12:13:40', '2020-02-16 12:13:40'),
(145, 0, 'ROCIO_MEZA.pdf', 'rocio', '2020-02-16 12:14:14', '2020-02-16 12:14:14'),
(146, 0, 'RONAY.pdf', 'ronay', '2020-02-16 12:14:51', '2020-02-16 12:14:51'),
(147, 0, 'SARMIENTO.pdf', 'sarmiento', '2020-02-16 12:15:29', '2020-02-16 12:15:29'),
(148, 0, 'VALDIVIEZO.pdf', 'valdiviezo', '2020-02-16 12:16:05', '2020-02-16 12:16:05'),
(149, 0, '201804.pdf', '201804', '2020-02-16 12:17:29', '2020-02-16 12:17:29'),
(150, 0, '2018_04_12 acuse de recepcion _1.pdf', 'acuse de recepcion', '2020-02-16 12:22:35', '2020-02-16 12:22:35'),
(151, 0, '2018_04_12 no abrio.pdf', 'no abrio', '2020-02-16 12:25:19', '2020-02-16 12:25:19'),
(152, 0, '2018_04_12 oficio presentando solicitudes.pdf', 'oficio presentando solicitudes', '2020-02-16 12:30:04', '2020-02-16 12:30:04'),
(153, 0, 'ABUD ARCHILA MIGUEL.PDF', 'abud 2018', '2020-02-16 12:32:59', '2020-02-16 12:32:59'),
(154, 0, 'BASAVE TORRES ROSY ILDA.PDF', 'basave 2018', '2020-02-16 12:36:04', '2020-02-16 12:36:04'),
(155, 0, 'LARA MARTINEZ OCTAVIO ROLANDO.PDF', 'lara 2018', '2020-02-16 12:37:29', '2020-02-16 12:37:29'),
(156, 0, 'LLAVEN GORDILLO JULIO CESAR.PDF', 'llaven2018', '2020-02-16 12:39:24', '2020-02-16 12:39:24'),
(157, 0, 'LOPEZ ESTRADA FRANCISCO RONAY.PDF', 'ronay', '2020-02-16 12:40:28', '2020-02-16 12:40:28'),
(158, 0, 'LUNA VILLALOBOS JACINTA.PDF', 'luna', '2020-02-16 12:44:29', '2020-02-16 12:44:29'),
(159, 0, 'MEZA GORDILLO ROCIO.PDF', 'meza', '2020-02-16 12:45:43', '2020-02-16 12:45:43'),
(160, 0, 'MONTES MOLINA JOAQUIN ADOLFO.PDF', 'montes', '2020-02-16 12:46:33', '2020-02-16 12:46:33'),
(161, 0, 'MOTA GRAJALES RAFAEL.PDF', 'mota', '2020-02-16 12:47:18', '2020-02-16 12:47:18'),
(162, 0, 'ORTIZ Y OJEDA PEDRO TOMAS.PDF', 'ortiz', '2020-02-16 12:48:22', '2020-02-16 12:48:22'),
(163, 0, 'PEREZ PATRICIO MADAIN.PDF', 'madain', '2020-02-16 12:49:15', '2020-02-16 12:49:15'),
(164, 0, 'RIOS TERCERO OCTAVIO ARIOSTO.PDF', 'ariosto', '2020-02-16 12:51:21', '2020-02-16 12:51:21'),
(165, 0, 'RIOS ZUÑIGA GABRIELA ALEJANDRA.PDF', 'zuñiga', '2020-02-16 12:52:41', '2020-02-16 12:52:41'),
(166, 0, 'RUIZ VALDIVIEZO VICTOR MANUEL.PDF', 'ruiz', '2020-02-16 12:53:38', '2020-02-16 12:53:38'),
(167, 0, 'SALGADO GUTIERREZ MARIA CATALINA.PDF', 'salgado', '2020-02-16 12:54:18', '2020-02-16 12:54:18'),
(168, 0, 'SARMIENTO TORRES JORGE ARTURO.PDF', 'sarmiento', '2020-02-16 12:55:14', '2020-02-16 12:55:14'),
(169, 0, 'AcuseNoAprobadoFortalecimiento_Institutotecnologicotuxtlagutierre.pdf', 'Acuse no aprobado fortalecimiento', '2020-02-16 12:56:47', '2020-02-16 12:56:47'),
(170, 0, '9996 OFICIO ITTUX.GTZ.CARTA.LIBER.PERFIL.2018.pdf', '9996 oficio liberacion', '2020-02-16 13:03:00', '2020-02-16 13:03:00'),
(171, 0, 'ITTUX.GTZ.DICTAMEN.CA.RÉPL.REGCA.2017.pdf', 'Dictamen replica', '2020-02-16 13:05:12', '2020-02-16 13:05:12'),
(172, 0, '2018_11_27 constancia basave.pdf', 'constancia 2018', '2020-02-16 13:06:47', '2020-02-16 13:06:47'),
(173, 0, '2018_10_08 acuse arnulfo.pdf', 'acuse 2018', '2020-02-16 13:07:37', '2020-02-16 13:07:37'),
(174, 0, '15525 OFICIO ITTUXTLA.GTZ.CARTA.CA.REGCA.2018_1-1.pdf', 'carta ca', '2020-02-16 13:12:27', '2020-02-16 13:12:27'),
(175, 0, '15525 OFICIO ITTUXTLA.GTZ.CARTA.CA.REGCA.2018_2-end.pdf', 'carta ca regca', '2020-02-16 13:14:02', '2020-02-16 13:14:02'),
(176, 0, 'ACUSE MICELI.pdf', 'acuse 2019', '2020-02-16 13:14:59', '2020-02-16 13:14:59'),
(177, 0, 'ACUSE PEDRO.pdf', 'acuse 2019', '2020-02-16 13:15:40', '2020-02-16 13:15:40'),
(178, 0, 'CA MICELI.pdf', 'ca miceli', '2020-02-16 13:18:22', '2020-02-16 13:18:22'),
(179, 0, 'CA PEDRO.pdf', 'ca pedro', '2020-02-16 13:19:02', '2020-02-16 13:19:02'),
(180, 0, 'ITTUXTLA.GTZ.DICTAMEN.REGCA.2018 copia.pdf', 'ITTUXTG2018', '2020-02-16 13:20:08', '2020-02-16 13:20:08'),
(181, 0, 'rep catalina.pdf', 'rep catalina', '2020-02-16 13:20:58', '2020-02-16 13:20:58'),
(182, 213, '2015_06_22 TUXTLA GUTIÉRREZ AE 2015 30000.pdf', 'Anexo de Ejecucion', '2020-07-03 00:19:02', '2020-07-03 00:37:45'),
(183, 213, '2015_09_02 circular dispersion CIRCULAR 0292_2015 DISPERSION PRODEP 2015.pdf', 'Oficio Dispersion', '2020-07-03 00:28:28', '2020-07-03 00:37:32'),
(188, 218, '2013_07_23 perfil Castañon Gonzalez Jose Humberto.pdf', 'Prueba', '2020-07-06 13:44:57', '2020-07-06 13:44:57'),
(191, 21, '2015_02_20 aprobacion1.jpg', 'Aprobación 1', '2020-07-07 04:07:53', '2020-07-07 04:07:53'),
(192, 21, '2015_02_20 aprobacion2.jpg', 'Aprobación 2', '2020-07-07 04:08:11', '2020-07-07 04:08:11'),
(193, 226, '2016_06_14 Convocatoria REGCA 2016.pdf', 'Convocatoria.', '2020-07-08 04:59:48', '2020-07-10 21:37:16'),
(214, 226, 'Reconocimiento de ..._00.pdf', 'Reconocimiento de ..._00.pdf', '2020-07-10 22:12:05', '2020-07-10 22:12:05'),
(215, 226, 'Reconocimiento de ..._01.pdf', 'Reconocimiento de ..._01.pdf', '2020-07-10 22:12:05', '2020-07-10 22:12:05'),
(245, 232, 'S_00.pdf', 'S_00.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(246, 232, 'S_01.pdf', 'S_01.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(247, 232, 'S_02.pdf', 'S_02.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(248, 232, 'S_03.pdf', 'S_03.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(249, 232, 'S_04.pdf', 'S_04.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(250, 232, 'S_05.pdf', 'S_05.pdf', '2020-07-11 04:54:38', '2020-07-11 04:54:38'),
(251, 232, 'constancia ca_00.pdf', 'constancia ca_00 cossio no nango.pdf', '2020-07-22 23:47:53', '2020-07-23 00:41:54'),
(252, 232, 'constancia ca_01.pdf', 'constancia ca_01.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(253, 232, 'constancia ca_02.pdf', 'constancia ca_02.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(254, 232, 'constancia ca_03.pdf', 'constancia ca_03.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(255, 232, 'constancia ca_04.pdf', 'constancia ca_04.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(256, 232, 'constancia ca_05.pdf', 'constancia ca_05.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(257, 232, 'constancia ca_06.pdf', 'constancia ca_06.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(258, 232, 'constancia ca_07.pdf', 'constancia ca_07.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(259, 232, 'constancia ca_08.pdf', 'constancia ca_08.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(260, 232, 'constancia ca_09.pdf', 'constancia ca_09.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(261, 232, 'constancia ca_10.pdf', 'constancia ca_10.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53'),
(262, 232, 'constancia ca_11.pdf', 'constancia ca_11.pdf', '2020-07-22 23:47:53', '2020-07-22 23:47:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias_tramites`
--

CREATE TABLE `evidencias_tramites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evidencia_id` int(10) UNSIGNED NOT NULL,
  `tramite_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `evidencias_tramites`
--

INSERT INTO `evidencias_tramites` (`id`, `evidencia_id`, `tramite_id`, `created_at`, `updated_at`) VALUES
(3, 3, 19, NULL, NULL),
(4, 4, 21, NULL, NULL),
(5, 5, 21, NULL, NULL),
(6, 6, 22, NULL, NULL),
(7, 7, 24, NULL, NULL),
(8, 8, 25, NULL, NULL),
(9, 9, 26, NULL, NULL),
(10, 10, 27, NULL, NULL),
(11, 11, 28, NULL, NULL),
(12, 12, 29, NULL, NULL),
(13, 13, 30, NULL, NULL),
(14, 14, 31, NULL, NULL),
(15, 15, 32, NULL, NULL),
(16, 16, 33, NULL, NULL),
(17, 17, 34, NULL, NULL),
(18, 18, 35, NULL, NULL),
(19, 19, 36, NULL, NULL),
(20, 20, 37, NULL, NULL),
(21, 21, 38, NULL, NULL),
(22, 22, 39, NULL, NULL),
(23, 23, 40, NULL, NULL),
(24, 24, 41, NULL, NULL),
(25, 25, 42, NULL, NULL),
(26, 26, 43, NULL, NULL),
(27, 27, 44, NULL, NULL),
(28, 28, 45, NULL, NULL),
(29, 29, 46, NULL, NULL),
(30, 30, 47, NULL, NULL),
(31, 31, 48, NULL, NULL),
(32, 32, 49, NULL, NULL),
(33, 33, 50, NULL, NULL),
(34, 34, 51, NULL, NULL),
(35, 35, 52, NULL, NULL),
(36, 36, 53, NULL, NULL),
(37, 37, 54, NULL, NULL),
(38, 38, 55, NULL, NULL),
(39, 39, 56, NULL, NULL),
(40, 40, 57, NULL, NULL),
(41, 41, 58, NULL, NULL),
(42, 42, 59, NULL, NULL),
(43, 43, 60, NULL, NULL),
(44, 44, 61, NULL, NULL),
(45, 45, 62, NULL, NULL),
(46, 46, 63, NULL, NULL),
(47, 47, 64, NULL, NULL),
(48, 48, 65, NULL, NULL),
(49, 49, 66, NULL, NULL),
(50, 50, 67, NULL, NULL),
(51, 51, 68, NULL, NULL),
(52, 52, 69, NULL, NULL),
(53, 53, 70, NULL, NULL),
(54, 54, 71, NULL, NULL),
(55, 55, 72, NULL, NULL),
(56, 56, 73, NULL, NULL),
(57, 57, 73, NULL, NULL),
(58, 58, 74, NULL, NULL),
(59, 59, 75, NULL, NULL),
(60, 60, 76, NULL, NULL),
(61, 61, 77, NULL, NULL),
(62, 62, 78, NULL, NULL),
(63, 63, 79, NULL, NULL),
(64, 64, 80, NULL, NULL),
(65, 65, 81, NULL, NULL),
(66, 66, 82, NULL, NULL),
(67, 67, 83, NULL, NULL),
(68, 68, 84, NULL, NULL),
(69, 69, 85, NULL, NULL),
(70, 70, 86, NULL, NULL),
(71, 71, 87, NULL, NULL),
(72, 72, 88, NULL, NULL),
(73, 73, 89, NULL, NULL),
(74, 74, 90, NULL, NULL),
(75, 75, 91, NULL, NULL),
(76, 76, 92, NULL, NULL),
(77, 77, 93, NULL, NULL),
(78, 78, 94, NULL, NULL),
(79, 79, 95, NULL, NULL),
(80, 80, 96, NULL, NULL),
(81, 81, 97, NULL, NULL),
(82, 82, 98, NULL, NULL),
(83, 83, 99, NULL, NULL),
(84, 84, 100, NULL, NULL),
(85, 85, 101, NULL, NULL),
(86, 86, 102, NULL, NULL),
(87, 87, 103, NULL, NULL),
(88, 88, 104, NULL, NULL),
(89, 89, 105, NULL, NULL),
(90, 90, 106, NULL, NULL),
(91, 91, 107, NULL, NULL),
(92, 92, 108, NULL, NULL),
(93, 93, 109, NULL, NULL),
(94, 94, 110, NULL, NULL),
(95, 95, 111, NULL, NULL),
(96, 96, 112, NULL, NULL),
(97, 97, 113, NULL, NULL),
(98, 98, 114, NULL, NULL),
(99, 99, 115, NULL, NULL),
(100, 100, 116, NULL, NULL),
(101, 101, 117, NULL, NULL),
(102, 102, 118, NULL, NULL),
(103, 103, 119, NULL, NULL),
(104, 104, 120, NULL, NULL),
(105, 105, 121, NULL, NULL),
(106, 106, 122, NULL, NULL),
(107, 107, 123, NULL, NULL),
(108, 108, 124, NULL, NULL),
(109, 109, 125, NULL, NULL),
(110, 110, 126, NULL, NULL),
(111, 111, 127, NULL, NULL),
(112, 112, 128, NULL, NULL),
(113, 113, 129, NULL, NULL),
(114, 114, 130, NULL, NULL),
(115, 115, 131, NULL, NULL),
(116, 116, 132, NULL, NULL),
(117, 117, 133, NULL, NULL),
(118, 118, 134, NULL, NULL),
(119, 119, 135, NULL, NULL),
(120, 120, 136, NULL, NULL),
(121, 121, 137, NULL, NULL),
(122, 122, 138, NULL, NULL),
(123, 123, 139, NULL, NULL),
(124, 124, 140, NULL, NULL),
(125, 125, 141, NULL, NULL),
(126, 126, 142, NULL, NULL),
(127, 127, 143, NULL, NULL),
(128, 128, 144, NULL, NULL),
(129, 129, 145, NULL, NULL),
(130, 130, 146, NULL, NULL),
(131, 131, 147, NULL, NULL),
(132, 132, 148, NULL, NULL),
(133, 133, 149, NULL, NULL),
(134, 134, 150, NULL, NULL),
(135, 135, 151, NULL, NULL),
(136, 136, 152, NULL, NULL),
(137, 137, 153, NULL, NULL),
(138, 138, 154, NULL, NULL),
(139, 139, 155, NULL, NULL),
(140, 140, 156, NULL, NULL),
(141, 141, 157, NULL, NULL),
(142, 142, 158, NULL, NULL),
(143, 143, 159, NULL, NULL),
(144, 144, 160, NULL, NULL),
(145, 145, 161, NULL, NULL),
(146, 146, 162, NULL, NULL),
(147, 147, 163, NULL, NULL),
(148, 148, 164, NULL, NULL),
(149, 149, 165, NULL, NULL),
(150, 150, 166, NULL, NULL),
(151, 151, 167, NULL, NULL),
(152, 152, 168, NULL, NULL),
(153, 153, 169, NULL, NULL),
(154, 154, 170, NULL, NULL),
(155, 155, 171, NULL, NULL),
(156, 156, 172, NULL, NULL),
(157, 157, 173, NULL, NULL),
(158, 158, 174, NULL, NULL),
(159, 159, 175, NULL, NULL),
(160, 160, 176, NULL, NULL),
(161, 161, 177, NULL, NULL),
(162, 162, 178, NULL, NULL),
(163, 163, 179, NULL, NULL),
(164, 164, 180, NULL, NULL),
(165, 165, 181, NULL, NULL),
(166, 166, 182, NULL, NULL),
(167, 167, 183, NULL, NULL),
(168, 168, 184, NULL, NULL),
(169, 169, 185, NULL, NULL),
(170, 170, 186, NULL, NULL),
(171, 171, 187, NULL, NULL),
(172, 172, 188, NULL, NULL),
(173, 173, 189, NULL, NULL),
(174, 174, 190, NULL, NULL),
(175, 175, 191, NULL, NULL),
(176, 176, 192, NULL, NULL),
(177, 177, 193, NULL, NULL),
(178, 178, 194, NULL, NULL),
(179, 179, 195, NULL, NULL),
(180, 180, 196, NULL, NULL),
(181, 181, 197, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `ca_id` int(11) NOT NULL,
  `beneficiario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `ca_id`, `beneficiario_id`) VALUES
(2, 2, 10),
(3, 2, 173),
(4, 7, 11),
(5, 7, 178);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_22_170124_create_roles_table', 1),
(4, '2019_11_22_170713_create_role_user_table', 1),
(5, '2019_11_22_211104_create_beneficiarios_table', 1),
(6, '2019_12_10_020821_create_tipo_tramites_table', 1),
(7, '2019_12_10_060326_create_tramites_table', 1),
(8, '2019_12_11_173821_notificaciones', 1),
(9, '2019_12_11_174004_create_notificaciones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emisor` int(11) NOT NULL,
  `receptor` int(10) UNSIGNED NOT NULL,
  `mensaje` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `emisor`, `receptor`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Hola', '2019-12-23 13:46:46', '2019-12-23 13:46:46'),
(6, 1, 5, 'Hola, buenas tardes', '2020-01-22 02:35:39', '2020-01-22 02:35:39'),
(7, 1, 6, 'buen día', '2020-01-22 02:36:38', '2020-01-22 02:36:38'),
(8, 1, 5, 'prueba notificación', '2020-01-22 02:40:44', '2020-01-22 02:40:44'),
(9, 1, 6, 'prueba notificación', '2020-01-22 02:40:44', '2020-01-22 02:40:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `origen` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`id`, `fecha`, `descripcion`, `created_at`, `updated_at`, `origen`) VALUES
(21, '2015-02-20', 'Resultados replicas PD 2014', '2020-02-15 14:46:14', '2020-07-05 04:49:20', 199),
(22, '2015-06-12', 'Redistribución jguzman', '2020-02-15 14:47:49', '2020-07-02 12:39:20', 199),
(182, '2018-04-12', 'Anexo de Ejecucion', '2020-02-16 12:53:25', '2020-07-03 00:23:21', 3),
(198, '2015-04-21', 'PD 2015', NULL, NULL, NULL),
(199, '2014-04-01', 'PD 2014', NULL, '2020-07-02 12:41:09', NULL),
(200, '2016-04-01', 'PD 2016', NULL, NULL, NULL),
(201, '2017-04-01', 'PD 2017', NULL, NULL, NULL),
(202, '2018-04-01', 'PD 2018', NULL, NULL, NULL),
(204, '2020-04-01', 'PD 2020', NULL, NULL, NULL),
(208, '2015-06-01', 'REGCA2015', '2020-07-01 21:19:21', '2020-07-01 21:19:21', NULL),
(210, '2014-06-02', 'REGCA 2014', '2020-07-01 22:25:10', '2020-07-02 12:18:21', NULL),
(211, '2020-07-01', 'Evaluación en línea de pd', '2020-07-01 22:26:32', '2020-07-11 05:35:35', NULL),
(212, '2015-04-09', 'Resultados REGCA 2014', '2020-07-02 12:33:17', '2020-07-02 12:33:42', 210),
(213, '2015-06-22', 'Ejecución replicas PD 2014', '2020-07-02 12:35:36', '2020-07-06 13:43:21', 199),
(217, '2018-06-01', 'Evaluación en línea.', '2020-07-05 04:44:46', '2020-07-05 04:46:13', NULL),
(218, '2014-09-13', 'Ejecucion PD 2014', '2020-07-06 13:43:56', '2020-07-06 13:49:17', 199),
(219, '2014-07-01', 'Resultados PD 2014', '2020-07-06 13:47:29', '2020-07-06 13:47:29', 199),
(220, '2016-06-14', 'REGCA 2016.', '2020-07-08 04:26:39', '2020-07-08 04:56:43', NULL),
(226, '2016-06-14', 'Convocatoria.', '2020-07-08 04:58:56', '2020-07-08 13:12:08', 220),
(232, '2020-07-11', 'PRUEBA', '2020-07-11 04:53:36', '2020-07-11 04:53:36', 220),
(233, '2020-07-11', 'REGCA 2020', '2020-07-11 05:34:56', '2020-07-11 05:34:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites_users`
--

CREATE TABLE `tramites_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tramite_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tramites_users`
--

INSERT INTO `tramites_users` (`id`, `tramite_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 21, 11, NULL, NULL),
(10, 22, 11, NULL, NULL),
(360, 182, 130, NULL, NULL),
(414, 199, 11, NULL, NULL),
(415, 199, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('RIP','FINANCIEROS','SUBACAD','BENEFICIARIO') COLLATE utf8mb4_unicode_ci DEFAULT 'BENEFICIARIO',
  `email` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido_paterno`, `apellido_materno`, `rol`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rip', 'Paterno', 'Materno', 'RIP', 'rip@ittg.mx', '$2y$10$cybKyWy0qojxcWqGeQLDbuIBeFBnU2m0gvnKBa2qZpvCtQdDPYyim', NULL, '2019-12-23 11:33:47', '2019-12-23 11:33:47'),
(2, 'Recursos', 'Paterno', 'Materno', 'FINANCIEROS', 'recursos@ittg.mx', '$2y$10$6FL6.K6tJgqPU6w/4ruZ8.RTxKkLRRZ3z4WivvvKzwfXWBd6rHzZG', NULL, '2019-12-23 11:33:47', '2019-12-23 11:33:47'),
(3, 'Supervisor', 'Paterno', 'Materno', 'SUBACAD', 'supervisor@ittg.mx', '$2y$10$X7G9J91kyrfWrXLuSJpo4OJ2PGv3RJHMHYsSK.iojlFWkTjUtYJSa', NULL, '2019-12-23 11:33:48', '2019-12-23 11:33:48'),
(4, 'beneficiario', 'Paterno', 'Materno', 'BENEFICIARIO', 'beneficiario@ittg.mx', '$2y$10$NT4qNnfK9HIkS24qQ6yX4e1r/Ibwnue/1tjGcMa6dbLfMo6h/jqc.', NULL, '2019-12-23 11:33:48', '2019-12-23 11:33:48'),
(5, 'Miriam', 'Diaz', 'Cabrera', 'BENEFICIARIO', 'gr26dcabrera97@gmail.com', '$2y$10$POydxaaAlHk7Q8uHc.1gle008QMlA3bqkYSYFg50WlI9WIzHFwYey', NULL, '2019-12-23 13:11:57', '2019-12-23 13:11:57'),
(6, 'Angel', 'Entzin', 'Hernandez', 'BENEFICIARIO', 'entzin6@gmail.com', '$2y$10$lQdn.X8KqUwRm1oDwoLu.ujZhXu0B26oqAIPM6bgn5cbycGs8qO5i', NULL, '2019-12-23 13:18:58', '2019-12-23 13:18:58'),
(7, 'Juan', 'Perez', 'Perez', 'BENEFICIARIO', 'juanpp@ittg.edu.mx', '$2y$10$2EZM1a2kSWpBuD7wlH2UV.XqKNZIgotBGmZdH2KSZGZD03lZaUeQe', NULL, '2019-12-23 13:25:58', '2019-12-23 13:25:58'),
(8, 'Alexander', 'Borraz', 'Gonzalez', 'BENEFICIARIO', 'alexbg@ittg.edu.mx', '$2y$10$Vo79A38ZaTyAyGLFtJVqIuvp9mWgH2Y/NROu4NkA6u2IlUQ5R3l8S', NULL, '2019-12-23 13:31:41', '2019-12-23 13:31:41'),
(9, 'Marisol', 'Hernandez', 'Romero', 'BENEFICIARIO', 'maryhr@ittg.edu.mx', '$2y$10$jXFY.07cz8oD1zC6D/roaeKQUYuOg9f/vSP2E127o9hdwaiPweqDe', NULL, '2019-12-23 13:36:49', '2019-12-23 13:36:49'),
(10, 'MIGUEL', 'ABUD', 'ARCHILA', 'BENEFICIARIO', 'mabud@ittg.edu.mx', '$2y$10$cybKyWy0qojxcWqGeQLDbuIBeFBnU2m0gvnKBa2qZpvCtQdDPYyim', NULL, NULL, NULL),
(11, 'JORGE OCTAVIO', 'GUZMAN', 'SANCHEZ', 'BENEFICIARIO', 'jguzman@ittg.edu.mx', '$2y$10$cybKyWy0qojxcWqGeQLDbuIBeFBnU2m0gvnKBa2qZpvCtQdDPYyim', NULL, '2020-01-23 02:43:37', '2020-01-23 02:43:37'),
(13, 'ACOSTA', 'MAZA', 'LESTER', 'BENEFICIARIO', 'acostal_e@ittg.edu.mx', '$2y$10$lVWIYdag17OfSu6DJvjwFunMfEI2S6a5sCMcOqoQBzaRXQh3Nw11G', NULL, '2020-01-23 03:22:31', '2020-01-23 03:22:31'),
(14, 'ALVARO', 'HERNANDEZ', 'SOl', 'BENEFICIARIO', 'alvar@ittg.edu.mx', '$2y$10$n3aUsnGeMAPnhsqtoMp0w..4VJi0.db1l/VNqcyKdMTe3nrtN/U1m', NULL, '2020-01-23 03:22:47', '2020-01-23 03:22:47'),
(15, 'DULCE MARIA', 'HERNANDEZ', 'BERISTAIN', 'BENEFICIARIO', 'dulcemaria@ittg.edu.mx', '$2y$10$edfZg4kAICd8/TeqKaMLWO/4648Lk2U061VYFUusROc8TjUDkyU7.', NULL, '2020-01-23 03:33:26', '2020-01-23 03:33:26'),
(16, 'ATANACIO', 'HERNANDEZ', 'HERNANDEZ CHAN', 'BENEFICIARIO', 'atanacio@ittg.edu.mx', '$2y$10$f35/pEfRkwRpD56VW/YW9eSG00kSsHaxX6i7dgWQckAt7CP8ur/36', NULL, '2020-01-23 03:40:38', '2020-01-23 03:40:38'),
(17, 'AGUILAR', 'BRINDIS', 'ALEXIS', 'BENEFICIARIO', 'aguilar_alea@ittg.edu.mx', '$2y$10$yGv3Te41SZgqjWZDtkXmG.4G56n8iTLhuvhWht2yoC0eriL1B.f.6', NULL, '2020-01-23 03:43:28', '2020-01-23 03:43:28'),
(18, 'GILBERTO', 'HERNNDEZ', 'CRUZ', 'BENEFICIARIO', 'gilberto@ittg.edu.mx', '$2y$10$k/m5bStNBmFPHbwZJ7XVM.JPtZp69x5LhiKS0F62B9SSr5.6J8BZO', NULL, '2020-01-23 03:49:27', '2020-01-23 03:49:27'),
(19, 'AGUILAR', 'CASTILLEJOS', 'ALDO ESTEBAN', 'BENEFICIARIO', 'aguilar_aldo@ittg.edu.mx', '$2y$10$i/3/C/OHgSb85jMKQs0tLOoW0NBDLwFGdB.sjsUL73orcw0/oSdDW', NULL, '2020-01-23 03:53:20', '2020-01-23 03:53:20'),
(20, 'HECTOR RICARDO', 'HERNANDEZ', 'DE LEON', 'BENEFICIARIO', 'hector@ittg.edu.mx', '$2y$10$qvb64TqoKFWzXZImokvTBuE/oAl0XyNS7k5rYUevovM5WsDn/6OkC', NULL, '2020-01-23 03:57:00', '2020-01-23 03:57:00'),
(21, 'AGUILAR', 'SUAREZ', 'MARCO ANTONIO', 'BENEFICIARIO', 'aguilar_marc@ittg.edu.mx', '$2y$10$nFJf5KCP4g6rkQ09hM42Q.U5RnzCcOIdJZ51saFJgG9dLQvYxny3G', NULL, '2020-01-23 04:02:12', '2020-01-23 04:02:12'),
(22, 'ENRIQUE', 'HERNANDEZ', 'MALDONADO', 'BENEFICIARIO', 'enrique@ittg.edu.mx', '$2y$10$L27ypSwIKCInOGXEJI4g3OFgqzXT7Ap.AXBSW1aXeUhcEKY6EaorC', NULL, '2020-01-23 04:08:26', '2020-01-23 04:08:26'),
(23, 'J. GUADALUPE', 'HERNANDEZ', 'TELESFOR', 'BENEFICIARIO', 'jguadalupe@ittg.edu.mx', '$2y$10$GKrDoSXAPTTmxp63yT.t0uEsj8gsRqhugHtPZYNojwC/yjYazgP9K', NULL, '2020-01-23 04:17:48', '2020-01-23 04:17:48'),
(24, 'ALFARO', 'MENDOZA', 'JAVIER', 'BENEFICIARIO', 'alfaro_ja@ittg.edu.mx', '$2y$10$qaz415bc0Z7qMWzoiqOYc.spmaRvhb3.m1Ld3.9RW1TX9pL/NIhzi', NULL, '2020-01-23 04:19:54', '2020-01-23 04:19:54'),
(25, 'ALFONZO', 'SANTIAGO', 'CARLOS RAMON', 'BENEFICIARIO', 'alfonzo_cr@ittg.edu.mx', '$2y$10$TmGd1tlcWsrYwrjv6h2GQODlVHZR1kLdKvLuu9j796B2oRDLCrkea', NULL, '2020-01-23 04:30:37', '2020-01-23 04:30:37'),
(26, 'ARJON', 'CASTRO', 'RENE', 'BENEFICIARIO', 'arjon_rene@ittg.edu.mx', '$2y$10$5R3wLt3th3XGLTApna067OYk17wpUmTPAne6Mw5YCf4NpRLCPqC9e', NULL, '2020-01-23 04:36:59', '2020-01-23 04:36:59'),
(27, 'RODOLFO', 'HERRERA', 'BUSTAMANTE', 'BENEFICIARIO', 'rodolfoh@ittg.edu.mx', '$2y$10$UJXgNNVmqAsAg32V3/oTW.1uiiNr4lbTq6uPOCbuYq3Xv9ItKmMBm', NULL, '2020-01-23 04:44:30', '2020-01-23 04:44:30'),
(28, 'IGNACIO', 'ARRIOJA', 'CARDENAS', 'BENEFICIARIO', 'arrioja_ig@ittg.edu.mx', '$2y$10$EfWnR49ROd2EviQXMShMA.3qzmciisDtMMF487BvVIxqAT9LbS0Bm', NULL, '2020-01-23 04:46:12', '2020-01-23 04:46:12'),
(29, 'RUBEN', 'HERRERA', 'GALICIA', 'BENEFICIARIO', 'rubeng@ittg.edu.mx', '$2y$10$sQJR23pllc44XYzXywLkRugqwZrIuAY0JdeeFKbHtHQhQCjzmtbi6', NULL, '2020-01-23 04:52:37', '2020-01-23 04:52:37'),
(30, 'TERESA DEL ROSARIO', 'AYORA', 'TALAVERA', 'BENEFICIARIO', 'ayora_tr@ittg.edu.mx', '$2y$10$amUPc73ZKSUa2Qxh.HXUUexKFYaWt4NQEhNOPg5MPbERC822ZxCfa', NULL, '2020-01-23 04:53:36', '2020-01-23 04:53:36'),
(31, 'EVARISTO JULIO', 'BALLINAS', 'DIAZ', 'BENEFICIARIO', 'ballinas_ej@ittg.edu.mx', '$2y$10$YitCPDwv/8YGmX4.2cYV7OJo3GpYelOWmYayjaWsga8Xx8dToz746', NULL, '2020-01-23 04:59:55', '2020-01-23 04:59:55'),
(32, 'ROBERTO', 'IBAхZ', 'CORDOVA', 'BENEFICIARIO', 'rober@ittg.edu.mx', '$2y$10$474t7fhtlrgM/oohD.Tlh.XFxWt1pDYfFXLYJwEjEd6dUcdFtdu3m', NULL, '2020-01-23 05:00:19', '2020-01-23 05:00:19'),
(33, 'ROSY ILDA', 'BASAVE', 'TORRES', 'BENEFICIARIO', 'basabe_ri@ittg.edu.mx', '$2y$10$VJ8diqT0gyDA86E7VKe.S.nZfWeoKvihtI5eGGwLNlq3hvkYVtllm', NULL, '2020-01-23 05:05:28', '2020-01-23 05:05:28'),
(34, 'JORGE CIRO', 'JIMENEZ', 'OCAс', 'BENEFICIARIO', 'jorgeciro@ittg.edu.mx', '$2y$10$Bmg4V2co.ovm/EOieCQ47exql8fZZcBZxch2fZTX6iRxqi/HI/ZuG', NULL, '2020-01-23 05:10:15', '2020-01-23 05:10:15'),
(35, 'WILBERT MORGAN', 'BLANCO', 'CARRILLO', 'BENEFICIARIO', 'blanco_wm@ittg.edu.mx', '$2y$10$Yq/Mq6vgT9VlqIlZV/v66.6k.Viax1x7ZrggjogW/nIUiPFQCuTtK', NULL, '2020-01-23 05:12:20', '2020-01-23 05:12:20'),
(36, 'MARIA ELISA', 'JIMENEZ', 'RAMIREZ', 'BENEFICIARIO', 'mariae@ittg.edu.mx', '$2y$10$iqXd8n4A6qeE7bdAatLKIuX9ps/MPYBPekFkdlMjAtMb7cBkYjMJi', NULL, '2020-01-23 05:16:30', '2020-01-23 05:16:30'),
(37, 'OSVLADO', 'BRINDIS', 'VELAZQUEZ', 'BENEFICIARIO', 'brindis_d@ittg.edu.mx', '$2y$10$7uQ3blZ/NRHHiarUHJRb7uUNgpM/HvXkYy7mf52o6VIFnfUGTZ9Ly', NULL, '2020-01-23 05:16:43', '2020-01-23 05:16:43'),
(38, 'ARNULFO', 'CABRERA', 'GOMEZ', 'BENEFICIARIO', 'cabrera_a@ittg.edu.mx', '$2y$10$DK8HYNluAbaROOTYtqj1kOpD0afmHKjsbGM5rGSrfVgFreSC3Gq.q', NULL, '2020-01-23 05:20:49', '2020-01-23 05:20:49'),
(39, 'NICOLAS', 'JUAREZ', 'RODRIGUEZ', 'BENEFICIARIO', 'nicolas@ittg.edu.mx', '$2y$10$tB5f5OHYMB5Is5/NQl.iw.R/GnddQLy124U79ToSpniRIfPz0gs3W', NULL, '2020-01-23 05:22:10', '2020-01-23 05:22:10'),
(40, 'RAQUEL', 'CAMCHO', 'MENDEZ', 'BENEFICIARIO', 'camacho_r@ittg.edu.mx', '$2y$10$IOVfoDOyXdrgVIV0iD6qnekSjb7lnh10y45jNgyC9tc.m9IezOyFa', NULL, '2020-01-23 05:24:33', '2020-01-23 05:24:33'),
(41, 'OCTAVIO ROLANDO', 'LARA', 'MARTINEZ', 'BENEFICIARIO', 'octavior@ittg.edu.mx', '$2y$10$ZVwb1uuIiBuQCaGgdHXevu1yMpZWxr/wFEFznbrNlEyLFG8VQtVyq', NULL, '2020-01-23 05:27:27', '2020-01-23 05:27:27'),
(42, 'JORGE LUIS', 'CAMAS', 'ANZUETO', 'BENEFICIARIO', 'camas_jl@ittg.edu.mx', '$2y$10$v.SMApDk/nTksLpkYC0UCOs.KL308fiXrCah.LduEcsSHHwFXk.6O', NULL, '2020-01-23 05:28:12', '2020-01-23 05:28:12'),
(43, 'ADOLFO ALFREDO', 'LEON', 'BALLINAS', 'BENEFICIARIO', 'adolfo@ittg.edu.mx', '$2y$10$SMon9Reql.z9NFApLeyYme9iAjK4SRcJVjTia2pepKGBC8ehzruPW', NULL, '2020-01-23 05:32:39', '2020-01-23 05:32:39'),
(44, 'JUAN HUMBERTO', 'CARPIO', 'TOVILLA', 'BENEFICIARIO', 'carpio_jh@ittg.edu.mx', '$2y$10$feSggfyRfOws5CBSH82/9OGz5C/ygJ4kjIhMFuvGl4/seddekvTEC', NULL, '2020-01-23 05:34:12', '2020-01-23 05:34:12'),
(45, 'JORGE ALFREDO', 'LEON', 'CAMACHO', 'BENEFICIARIO', 'jorgeal@ittg.edu.mx', '$2y$10$y8dc2OiGzVOs9Rq/kqmut.vokPg4jhDCaBeJNWTZ7St53oW.qVYRi', NULL, '2020-01-23 05:36:44', '2020-01-23 05:36:44'),
(46, 'GILBERTO DE JESUS', 'CASTAÑEDA', 'ORDOÑEZ', 'BENEFICIARIO', 'castaneda_gj@ittg.edu.mx', '$2y$10$uqXc5jFKvW.eG3zfvdMwE.Kd37mUU.wC/yhyeV1SNTnLPlUUC3dIS', NULL, '2020-01-23 05:39:01', '2020-01-23 05:39:01'),
(47, 'VICENTE', 'LEON', 'OROZCO', 'BENEFICIARIO', 'vicentel@ittg.edu.mx', '$2y$10$wmLIi2oyJd.Dh8qGdavItubhJGHlrLi/295nVzKEEOT.3qNEhnngq', NULL, '2020-01-23 05:42:26', '2020-01-23 05:42:26'),
(48, 'JOSE HUMBERTO', 'CASTAÑON', 'GONZALEZ', 'BENEFICIARIO', 'castanon_jh@ittg.edu.mx', '$2y$10$cybKyWy0qojxcWqGeQLDbuIBeFBnU2m0gvnKBa2qZpvCtQdDPYyim', NULL, '2020-01-23 05:43:23', '2020-01-23 05:43:23'),
(49, 'JAQUELINE', 'LEYRA', 'HERNANDEZ', 'BENEFICIARIO', 'jaqueline@ittg.edu.mx', '$2y$10$5UHPTcrv1Drm/A6w.Cs.uu5zsW0dw0OpIERcej113u2d5LwtM6O/y', NULL, '2020-01-23 05:47:22', '2020-01-23 05:47:22'),
(50, 'JULIO CESAR', 'LLAVEN', 'GORDILLO', 'BENEFICIARIO', 'juliocesar@ittg.edu.mx', '$2y$10$yebAFDKQxDBVue.5luDsNeQQ8FN1WMzOKpFkCFCHnQmCGKaw63ysi', NULL, '2020-01-23 05:52:56', '2020-01-23 05:52:56'),
(51, 'ROGER EDUARDO', 'CASTELLANOS', 'GALDAMEZ', 'BENEFICIARIO', 'castellanos_re@ittg.edu.mx', '$2y$10$onQXLyF7G3riVisuZWpXHOtdh0g02a//sIf329GvtoxhlAa4jvb4K', NULL, '2020-01-23 05:53:29', '2020-01-23 05:53:29'),
(52, 'FRANCISCO RONAY', 'ESTRADA', 'LOPEZ', 'BENEFICIARIO', 'franciscor@ittg.edu.mx', '$2y$10$ogSnN9DPCpzLgtrDnRxf1eU9cjRGdOa/gmNgeSOV9.Y3FniKzpMrq', NULL, '2020-01-23 05:59:00', '2020-01-23 05:59:00'),
(53, 'JORGE ELI', 'CASTELLANOS', 'MARTINEZ', 'BENEFICIARIO', 'castellanos_je@ittg.edu.mx', '$2y$10$a2OFD7Yj3yASYAm5kB7oZu/TWSsr5DFvepdYywZ2cB9QIHByaBY46', NULL, '2020-01-23 05:59:04', '2020-01-23 05:59:04'),
(54, 'JACINTA', 'LUNA', 'VILLALOBOS', 'BENEFICIARIO', 'jacintal@ittg.edu.mx', '$2y$10$NlP9WVljsgGuuVqmvcRtw.W4BdCAUKnGKZ81NIZO4J3wd8igFMqpa', NULL, '2020-01-23 06:05:53', '2020-01-23 06:05:53'),
(55, 'RICARDO ALFONSO', 'CASTELLANOS', 'MARTINEZ', 'BENEFICIARIO', 'castellanos_ra@ittg.edu.mx', '$2y$10$qs14SLt3Y/ti8clgY9LOo.5oglg3/mMMG5YzzDiONV9.y0T73XX3m', NULL, '2020-01-23 06:05:58', '2020-01-23 06:05:58'),
(56, 'MA. ELIDIA', 'CASTELLANOS', 'MORALES', 'BENEFICIARIO', 'castellanos_me@ittg.edu.mx', '$2y$10$fW8jmAEWJxOR2xRf0/rajOIKVaunrzxEH4oYYQ2XTpTW1rj0uiH.y', NULL, '2020-01-23 06:10:13', '2020-01-23 06:10:13'),
(57, 'ARIOSTO', 'MANDUJANO', 'CABRERA', 'BENEFICIARIO', 'ariostom@ittg.edu.mx', '$2y$10$L5V7IZ/KICyVNjwtzLxLkuDA.CJoo4ilQYyV0ThXZ1uR.IYIt2922', NULL, '2020-01-23 06:11:16', '2020-01-23 06:11:16'),
(58, 'AMADO', 'CASTILLEJOS', 'BRINDIS', 'BENEFICIARIO', 'castillejos_a@ittg.edu.mx', '$2y$10$IJTFJXmS4V4RQy8mrTnQCubMmtWTWkHil2fhtNL4GgKoFDEnASbf.', NULL, '2020-01-23 06:15:20', '2020-01-23 06:15:20'),
(59, 'MARCELIN', 'MADRIGAL', 'MARGARITA', 'BENEFICIARIO', 'marcelinm@ittg.edu.mx', '$2y$10$BnvXVYI1YsQZF7fu.w2V9OGLCn3DD8.f6aWtCxTlTuotinmFgLk/G', NULL, '2020-01-23 06:19:36', '2020-01-23 06:19:36'),
(60, 'CLARA LUZ', 'CASTILLEJOS', 'GALLEGOS', 'BENEFICIARIO', 'castillejos_cl@ittg.edu.mx', '$2y$10$zgrzkInXE6FOk4phWKa8W.3sHXyp5wIHaC6GawVWsbbTXzt2DQZK6', NULL, '2020-01-23 06:19:38', '2020-01-23 06:19:38'),
(61, 'CARLOS', 'CERDA', 'MARTINEZ', 'BENEFICIARIO', 'cerda_c@ittg.edu.mx', '$2y$10$BiwfBNJrNZ1fKDLG4BZl0Oim663r0xK3mn8ZCC/wnhHZnnDjqWBnu', NULL, '2020-01-23 06:23:07', '2020-01-23 06:23:07'),
(62, 'LORENZO', 'MARCIANO', 'VAZQUEZ', 'BENEFICIARIO', 'lorenzom@ittg.edu.mx', '$2y$10$nBBTng5ytekONwC5aglbEeOl6zK58SOs1Q1wzrePfFuyKaPzPr4T6', NULL, '2020-01-23 06:24:38', '2020-01-23 06:24:38'),
(63, 'MIGUEL', 'CID', 'DEL PRADO', 'BENEFICIARIO', 'cid@ittg.edu.mx', '$2y$10$xsBf0aTyoGWeTkLoZPB6xuTdAsmRlB3roERp0KfK6rHet1EUx60pm', NULL, '2020-01-23 06:27:59', '2020-01-23 06:27:59'),
(64, 'FERNANDO ALFONSO', 'MAY', 'ARRIOJA', 'BENEFICIARIO', 'fernandoa@ittg.edu.mx', '$2y$10$ytpqeBJMJ2dqscV6G9JWEuqzD2wKO/iSFl7x6Y.uNcahbjT4uYgyC', NULL, '2020-01-23 06:29:42', '2020-01-23 06:29:42'),
(65, 'RODOLFO ISABEL', 'COELLO', 'ALBORES', 'BENEFICIARIO', 'coello_ri@ittg.edu.mx', '$2y$10$ZuCwCPyjZt1KyFrd/OkeLeiITEOe4Tovtj9rx2bqmBQsTbS35XSpe', NULL, '2020-01-23 06:32:32', '2020-01-23 06:32:32'),
(66, 'GUSTAVO', 'MENDEZ', 'LAMBAREN', 'BENEFICIARIO', 'gustavom@ittg.edu.mx', '$2y$10$m0EVgSVaKVGTsBjgHnB70.VQkmvBByPBRhg07EPiRKB9Nk16elng6', NULL, '2020-01-23 08:30:58', '2020-01-23 08:30:58'),
(67, 'JOSE LUIS', 'MENDEZ', 'NAVARRO', 'BENEFICIARIO', 'joseluism@ittg.edu.mx', '$2y$10$Kj7BGZfbFGeXN9MpA3K2bOIeEvgYy6VWkfJAeGs/Kb6ds4PxmHZO6', NULL, '2020-01-23 08:35:37', '2020-01-23 08:35:37'),
(68, 'ROCIO', 'MEZA', 'GORDILLO', 'BENEFICIARIO', 'rociom@ittg.edu.mx', '$2y$10$eq2zQqeTYMQ4am2QjjWLKucpCCfhiHJ.vELXVvJxPAjreZGHijoP6', NULL, '2020-01-23 08:39:03', '2020-01-23 08:39:03'),
(69, 'ROBERTO ANTONIO', 'MEZA', 'GUILLEN', 'BENEFICIARIO', 'robertoantonio@ittg.edu.mx', '$2y$10$hy0o9BtYjE0g975rX0CekeFlRT72iQgsg2uHBtLAnRJm3373XuS5.', NULL, '2020-01-23 08:43:04', '2020-01-23 08:43:04'),
(70, 'JORGE ANTONIO', 'MIJANGOS', 'LOPEZ', 'BENEFICIARIO', 'jorgeantonio@ittg.edu.mx', '$2y$10$yDhoDi/icoKRfdJz3g5/4OpA7eKonRWfz2N/x4bAZIpSm1PS1NGsi', NULL, '2020-01-23 08:46:24', '2020-01-23 08:46:24'),
(71, 'JAVIER ALONSO', 'MONTERO', 'DIAZ', 'BENEFICIARIO', 'javieralonso@ittg.edu.mx', '$2y$10$iL3Nh1GVGGL/BRdbezZhNOqkTk3d7fTPeeYeKG1iP23Avkb0NaIFu', NULL, '2020-01-23 08:50:13', '2020-01-23 08:50:13'),
(72, 'JOAQUIN ADOLFO', 'MONTES', 'MOLINA', 'BENEFICIARIO', 'joaquinadolfo@ittg.edu.mx', '$2y$10$FGSt1UWBaqj2eeym7g6M.elQRjLyekt1ZvtgBZCTn3ssz0/5QFel.', NULL, '2020-01-23 08:58:57', '2020-01-23 08:58:57'),
(73, 'JOSE MANUEL', 'MONTOYA', 'MAGAс', 'BENEFICIARIO', 'josemanuel@ittg.edu.mx', '$2y$10$bfS5skRzvxH0jEH.4B9a6eqmtSBdlKUUFifzN2cyAL1GsZYFLb1f.', NULL, '2020-01-23 09:02:16', '2020-01-23 09:02:16'),
(74, 'RUTILO', 'MORALES', 'ALVAREZ', 'BENEFICIARIO', 'rutilo@ittg.edu.mx', '$2y$10$JPnX0wlAE5JQe9JN..xf4OkSViG27/vpoGKuVuYTAHSli6S6URS8W', NULL, '2020-01-23 09:05:21', '2020-01-23 09:05:21'),
(75, 'EDNA', 'MORALES', 'COUTIÑO', 'BENEFICIARIO', 'ednam@ittg.edu.mx', '$2y$10$y8iqDd1PEThpY9Fn.RfJGup/MDAzM5kpcdj8O5XcXGCrYndpoo29C', NULL, '2020-01-23 09:09:20', '2020-01-23 09:09:20'),
(76, 'ARACELI', 'MORALES', 'FONSECA', 'BENEFICIARIO', 'aracelim@ittg.edu.mx', '$2y$10$dHPw9q578UmVRDyY0TD5BOek6Hj8kKODzQ7mfbJTmyEJBcsfjv9Ka', NULL, '2020-01-23 09:13:53', '2020-01-23 09:13:53'),
(77, 'JOSE ALBERTO', 'MORALES', 'MANCILLA', 'BENEFICIARIO', 'josealberto@ittg.edu.mx', '$2y$10$Jgm5SvEC4FErCR7N3vxHFe.K1cj2obN0Z8c6LXo3q100HmTntFOCW', NULL, '2020-01-23 09:16:55', '2020-01-23 09:16:55'),
(78, 'NESTOR', 'MORALES', 'NAVARRO', 'BENEFICIARIO', 'nestor@ittg.edu.mx', '$2y$10$SV1r6hGvsiVuuGO96nNyIO5xxQu2goEXYrcZQwa4e.lwFX0uXBH0y', NULL, '2020-01-23 09:21:44', '2020-01-23 09:21:44'),
(79, 'JULIO ANTONIO', 'MORENO', 'GORDILLO', 'BENEFICIARIO', 'julioantonio@ittg.edu.mx', '$2y$10$CiGYjsea/qi9kpelsgAH4eeLjotah19//PN/Mk8El8wErcfKuGk/C', NULL, '2020-01-23 09:25:34', '2020-01-23 09:25:34'),
(80, 'RAUL', 'MORENO', 'RINCON', 'BENEFICIARIO', 'raulm@ittg.edu.mx', '$2y$10$Nm5ZX.wzYM.L2t0Z/KyU.ewMsEeFcwC135XlsvdCrJiPPv9RvgW2y', NULL, '2020-01-23 09:29:30', '2020-01-23 09:29:30'),
(81, 'RAFAEL', 'MOTA', 'GRAJALES', 'BENEFICIARIO', 'rafaelm@ittg.edu.mx', '$2y$10$.A87rn2IVABJ0.T21IKVhOSqfp8KOyywZONN/pAXmtBx.3dtdW/Qq', NULL, '2020-01-23 09:33:35', '2020-01-23 09:33:35'),
(82, 'ROBERTO', 'NAFATE', 'GOMEZ', 'BENEFICIARIO', 'roberton@ittg.edu.mx', '$2y$10$wjb1GV8aCmMsjNxpUM3xceoGGY1PrglqhdNbcwacus09GP06uEATG', NULL, '2020-01-23 09:38:02', '2020-01-23 09:38:02'),
(83, 'GALDINO BELIZARIO', 'NANGO', 'SOLIS', 'BENEFICIARIO', 'galdinobelizario@ittg.edu.mx', '$2y$10$AyZsZdnBWvCT1CUZyDWF9etULTPv6r6GL4GP8IFXocoGtbQ35teaK', NULL, '2020-01-23 09:41:18', '2020-01-23 09:41:18'),
(84, 'JUAN CARLOS', 'NIÑOS', 'TORRES', 'BENEFICIARIO', 'juancarlos@ittg.edu.mx', '$2y$10$wkVnVTlgg2kRDbjbfKudceBG6LmuBYkLVMVUQt.8F9s1c3h394U6W', NULL, '2020-01-23 09:44:35', '2020-01-23 09:44:35'),
(85, 'JOSE FRANCISCO', 'NO TIENE', 'MARTINEZ', 'BENEFICIARIO', 'josefrancisco@ittg.edu.mx', '$2y$10$VzscI0Ohx8iyH86QziTzwu5DaKQ.VqHdG0PWkvM9QEkNuGqmXdlU2', NULL, '2020-01-23 10:01:30', '2020-01-23 10:01:30'),
(86, 'ABRAHAM', 'OCAMPO', 'SOLORZANO', 'BENEFICIARIO', 'abrahamo@ittg.edu.mx', '$2y$10$vBMArxhFpkwJcfjJd6imYOINBNY3AhP/rgB5qT207szKtyrahQUNm', NULL, '2020-01-23 10:05:55', '2020-01-23 10:05:55'),
(87, 'JULIO CESAR', 'OCHOA', 'COUTIÑO', 'BENEFICIARIO', 'juliocesaro@ittg.edu.mx', '$2y$10$s7ADOWPQU.Yod5UMhOWyBebPJtSBOzXhBoaen20MfhSY2788PCFRy', NULL, '2020-01-23 10:09:34', '2020-01-23 10:09:34'),
(88, 'ARTURO', 'OCHOA', 'RUIZ', 'BENEFICIARIO', 'arturoo@ittg.edu.mx', '$2y$10$cagSCKgKlYURztq.zYN3V.Itn8A9sVt/668w3MHhxOqYengq/4Clm', NULL, '2020-01-23 10:12:43', '2020-01-23 10:12:43'),
(89, 'ODILIO', 'OROZCO', 'MAGDALENO', 'BENEFICIARIO', 'odilioo@ittg.edu.mx', '$2y$10$jui8tmzYtGGWTEha7rmpfOAI58z8sOId6H5XNBSJXMpgtReZIycii', NULL, '2020-01-23 10:15:32', '2020-01-23 10:15:32'),
(90, 'PEDRO TOMAS', 'ORTIZ', 'Y OJEDA', 'BENEFICIARIO', 'pedrotomas@ittg.edu.mx', '$2y$10$eBU9HRAYukLBu.CyFGK2WuRVImHDqG4OZ2KCemN/BUbHx3L0qWRzO', NULL, '2020-01-23 10:18:52', '2020-01-23 10:18:52'),
(91, 'SANDY LUZ', 'OVANDO', 'CHACON', 'BENEFICIARIO', 'sandyluz@ittg.edu.mx', '$2y$10$tsI.hDaEdac4ffTN7A7z.eESaO1P95Ump5LFGUzh7NFYV//ihp.yq', NULL, '2020-01-23 10:27:47', '2020-01-23 10:27:47'),
(92, 'ARTURO', 'PERALTA', 'LOPEZ', 'BENEFICIARIO', 'arturop@ittg.edu.mx', '$2y$10$/jnHDWtLgsJNVN7rrVnbdOrAU12uLUOAOek.w5ZUIdZCNJkkx/cHC', NULL, '2020-01-23 10:31:35', '2020-01-23 10:31:35'),
(93, 'MADA͎', 'PEREZ', 'PATRICIO', 'BENEFICIARIO', 'madap@ittg.edu.mx', '$2y$10$6qWpKNiNTgpWEYWFbElBMe1umeWvSxfvk6JQ6nz4g8U/UQRyuF3Y6', NULL, '2020-01-23 10:34:34', '2020-01-23 10:34:34'),
(94, 'ANGEL SEIN', 'PEREZ', 'RODRIGUEZ', 'BENEFICIARIO', 'angelsein@ittg.edu.mx', '$2y$10$mvfQkZitZQkSBwK4xjGN1OgMuDfCLY6.9OmIIsWydkgjxHz2.C0q2', NULL, '2020-01-23 10:38:57', '2020-01-23 10:38:57'),
(95, 'MARIA LAURA', 'PORRAZ', 'RUIZ', 'BENEFICIARIO', 'marialaura@ittg.edu.mx', '$2y$10$AlKWgRGtkJFw7VTi6YcDHux0gHIqCUbOw31/pyN2PBKBGmw0x.iFi', NULL, '2020-01-23 10:43:18', '2020-01-23 10:43:18'),
(96, 'JAVIER', 'RAMIREZ', 'DIAZ', 'BENEFICIARIO', 'javierr@ittg.edu.mx', '$2y$10$oJnzIFHaxTN92BBp4G7Xq.X4nm7qOHR406B/NMOCtSsvaAyCYcx92', NULL, '2020-01-23 10:47:31', '2020-01-23 10:47:31'),
(97, 'JOSE MANUEL', 'RASGADO', 'BEZARES', 'BENEFICIARIO', 'josemanuelr@ittg.edu.mx', '$2y$10$3K9OUdFkDRU5Xa1.FOnAlu8uD08K50t1qdX4oITB7tb1nx4g3zTdq', NULL, '2020-01-23 10:51:47', '2020-01-23 10:51:47'),
(98, 'ANGEL', 'REYES', 'ALBORES', 'BENEFICIARIO', 'angelreyes@ittg.edu.mx', '$2y$10$X0wyPnVo8dw84s5ME6SSvejExpS/N8SxrH2jnZpcQY0OJLjLdJhC2', NULL, '2020-01-23 11:01:21', '2020-01-23 11:01:21'),
(99, 'REINER', 'RINCON', 'ROSALES', 'BENEFICIARIO', 'reinerr@ittg.edu.mx', '$2y$10$W8CcvUbb4o0BZogNSgFM3exjfQYoz6C6mjgw2TjAuCHf71/HtJToe', NULL, '2020-01-23 11:04:41', '2020-01-23 11:04:41'),
(100, 'OSCAR JAVIER', 'RINCON', 'ZAPATA', 'BENEFICIARIO', 'oscarjavier@ittg.edu.mx', '$2y$10$.1uXH.QtkxjZbgbnGrHAUu0m2.ComM2N.Ohg9nbgjftGNTy5sXyp6', NULL, '2020-01-23 11:10:13', '2020-01-23 11:10:13'),
(101, 'JOSE LUIS', 'RIOS', 'COUTIÑO', 'BENEFICIARIO', 'joseluis@ittg.edu.mx', '$2y$10$iRjjhlMXnC9.WetIm2YE5eMUly37hZyAI9v8VaOIAL1fSGbRDj.Fq', NULL, '2020-01-23 11:16:03', '2020-01-23 11:16:03'),
(102, 'RENE', 'RIOS', 'COUTIÑO', 'BENEFICIARIO', 'reneeios@ittg.edu.mx', '$2y$10$fgBnbsQblyCX0ebfoqoKp.n/FNhZIwxildMoeCF7X2g6RJQegvzX.', NULL, '2020-01-23 11:20:44', '2020-01-23 11:20:44'),
(103, 'DANIEL', 'RIOS', 'GARCIA', 'BENEFICIARIO', 'danielrios@ittg.edu.mx', '$2y$10$dfwIRI5q2AFHhlML5t8q8.VS90EBubDqmcFOdyLFyzDCtwKvSmama', NULL, '2020-01-23 11:27:58', '2020-01-23 11:27:58'),
(104, 'VICENTE AGUSTIN', 'COELLO', 'CONSTANTINO', 'BENEFICIARIO', 'coello_va@ittg.edu.mx', '$2y$10$CoJoJbP09a1Fe0C84150LeP4OYZVkqiqdJNtCNvsv78xFU.1Zhftu', NULL, '2020-01-23 11:34:01', '2020-01-23 11:34:01'),
(105, 'CARLOS', 'RIOS', 'ROJAS', 'BENEFICIARIO', 'carlosrios@ittg.edu.mx', '$2y$10$O8yXvsEZtzmW0t0mDwX.w.Nj8Q1dFVhwszXq6XFdK9Dx2x5cFCDD6', NULL, '2020-01-23 11:35:06', '2020-01-23 11:35:06'),
(106, 'JOSE ISABEL', 'COLMENARES', 'MEGCHUN', 'BENEFICIARIO', 'colmenares_ji@ittg.edu.mx', '$2y$10$GwAip5uB92ew4rnxPHvlq.FxFTWufI6sBh0DcVwIrjnj4XggH1OmS', NULL, '2020-01-23 11:38:52', '2020-01-23 11:38:52'),
(107, 'AIDA GUILLERMINA', 'COSSIO', 'MARTINEZ', 'BENEFICIARIO', 'cossio_ag@ittg.edu.mx', '$2y$10$nqdf/oj0MS2nOYJ0D9IoiOAQrz0wTPOV2IzaREc6Y2P1xeWsTN/cm', NULL, '2020-01-23 11:43:04', '2020-01-23 11:43:04'),
(108, 'OCTAVIO ARIOSTO', 'RIOS', 'TERCERO', 'BENEFICIARIO', 'octavioariosto@ittg.edu.mx', '$2y$10$8FK1/XEBsxbcMTfX/TI8c.BzOlyW63h.aGA3M31j//z4Ohl7ZOVXi', NULL, '2020-01-23 11:45:13', '2020-01-23 11:45:13'),
(109, 'jesus carlos', 'sanchez', 'guzman', 'BENEFICIARIO', 'jesuscarlos@ittg.edu.mx', '$2y$10$uQjuOaNeHEZ2RZFok9V4WuNnIaIUUCwjq1iyYFkSbOV0xgHkgTemi', NULL, '2020-01-23 11:45:14', '2020-01-23 11:45:14'),
(110, 'JESUS CARLOS', 'CRUZ', 'HERRERA', 'BENEFICIARIO', 'cruz_jc@ittg.edu.mx', '$2y$10$refttGe81OZPsr/sCMN5mOcHeyXcN8hHHXxCtpcjAxrSTLrm58Wpq', NULL, '2020-01-23 11:48:32', '2020-01-23 11:48:32'),
(111, 'GERMN', 'R͏IOS', 'TOLEDO', 'BENEFICIARIO', 'germin@ittg.edu.mx', '$2y$10$TIestKg9nGZ708uSo41fp.5SF/kN7fPViX7oitag9yjfCjaXi66qe', NULL, '2020-01-23 11:49:25', '2020-01-23 11:49:25'),
(112, 'ROSA ISELA', 'CRUZ', 'RODRIGUEZ', 'BENEFICIARIO', 'cruz_ri@ittg.edu.mx', '$2y$10$0I4QZheooBceUoMMJZIwzuXOxnDQ6k2fmHB1SXI/O.jBJuFTJ8Co2', NULL, '2020-01-23 11:52:59', '2020-01-23 11:52:59'),
(113, 'GABRIELA ALEJANDRA', 'RIOS', 'ZUÑIGA', 'BENEFICIARIO', 'gabrielalejandra@ittg.edu.mx', '$2y$10$LuGhIW9EFZV2F7c3OZ5ydep43OSmWx/I.V/5FCvN2xWH8jLcbg1Le', NULL, '2020-01-23 11:53:55', '2020-01-23 11:53:55'),
(114, 'RENE', 'CUESTA', 'DIAZ', 'BENEFICIARIO', 'rcuesta@ittg.edu.mx', '$2y$10$UCrCMfq1pYPKK.wxlUJwyOyHScVWswHPOzibtP1V49VTaQbBubkBm', NULL, '2020-01-23 11:58:39', '2020-01-23 11:58:39'),
(115, 'INDALECIO DANIEL', 'RODRIGUEZ', 'ROJAS', 'BENEFICIARIO', 'indaleciodaniel@ittg.edu.mx', '$2y$10$b8A9ktfbzFPa.sEJI5UeQOxJEwvfkzA2HUigaPbe39/aRxxvhX6tW', NULL, '2020-01-23 11:59:35', '2020-01-23 11:59:35'),
(116, 'patricia guadalupe', 'sanchez', 'iturbe', 'BENEFICIARIO', 'patricia.gpe@ittg.edu.mx', '$2y$10$12SQH5sCQNeJ/yjSXEOcI.g07Jx0A61GeDTnSpnlmvnP.O9SpI9EC', NULL, '2020-01-23 12:00:27', '2020-01-23 12:00:27'),
(117, 'NEVILLE RODOLFO', 'CULEBRO', 'ESPINOSA', 'BENEFICIARIO', 'culebro_nr@ittg.edu.mx', '$2y$10$Ma0ByEXQZ3N3NzbVh/aijOcnXDTTO018pAmg.tMeTuqGuHuk2HSxO', NULL, '2020-01-23 12:02:25', '2020-01-23 12:02:25'),
(118, 'SILVIA', 'ROQUE', 'MORANCHEL', 'BENEFICIARIO', 'silvia@ittg.edu.mx', '$2y$10$Qc/DUUKjwLI/S5tdDmeGPOHUcA29diuhQCm1fsvNmtT.S061Xjiyu', NULL, '2020-01-23 12:06:19', '2020-01-23 12:06:19'),
(119, 'MARIA DELINA', 'CULEBRO', 'FARRERA', 'BENEFICIARIO', 'culebro_md@ittg.edu.mx', '$2y$10$vKKdvpWsd3pg87Wq2J5treagXMFDv4F.DoiutVdXSef6PXgH3HHVS', NULL, '2020-01-23 12:06:19', '2020-01-23 12:06:19'),
(120, 'ENEIDA LOURDES', 'DAVILA', 'MANDUJANO', 'BENEFICIARIO', 'davila_el@ittg.edu.mx', '$2y$10$bRZrI3miBrFWmHeRm3QZW.ZhpnqhIDKA8PGDHy1zJtbc8nZxKvEnu', NULL, '2020-01-23 12:10:29', '2020-01-23 12:10:29'),
(121, 'ARNULFO', 'ROSALES', 'QUINTERO', 'BENEFICIARIO', 'arnulfo@ittg.edu.mx', '$2y$10$KEirLS8wh.yAqPyz8N9MQu2M7ArWDzwZ3JYaXuPxbVo4GyprENNp2', NULL, '2020-01-23 12:10:52', '2020-01-23 12:10:52'),
(122, 'CARLOS VENTURINO', 'DE COSS', 'PEREZ', 'BENEFICIARIO', 'decoss@ittg.edu.mx', '$2y$10$93FjQUOWPwx1rX8gaKhwJu1nSndbN6VgICALH5Laae0RmU7420wL6', NULL, '2020-01-23 12:14:50', '2020-01-23 12:14:50'),
(123, 'VALENTIN', 'ROVLEDO', 'SANCHEZ', 'BENEFICIARIO', 'valentinrovledo@ittg.edu.mx', '$2y$10$YJ2FfPtPA2Wsl3/xbLHe5eKusrBV4iVgxZpCq4UeQzgnOKiYffB5m', NULL, '2020-01-23 12:15:04', '2020-01-23 12:15:04'),
(124, 'GLORIA', 'DE JESUS', 'CRIUZ', 'BENEFICIARIO', 'dejesus@ittg.edu.mx', '$2y$10$Ax/iEIg/EH7r0NQQB6KMYulYoAaWmd.1cM7YxJRtgUWphRd4layAm', NULL, '2020-01-23 12:18:15', '2020-01-23 12:18:15'),
(125, 'SAUL RIGOBERTO', 'RUIZ', 'CRUZ', 'BENEFICIARIO', 'saulrigoberto@ittg.edu.mx', '$2y$10$eAiJJvfd5Wb4xm41R6Z0EOxyk35hkzo6Pb3BP.qcyI1/dkriMLgnS', NULL, '2020-01-23 12:20:53', '2020-01-23 12:20:53'),
(126, 'JOSE RAFAEL', 'SANCHEZ', 'MALDONADO', 'BENEFICIARIO', 'jose.rafael@ittg.edu.mx', '$2y$10$LCqEF2FYxUDwuu77ZH3P6OWB47XxoiHKaNGQrQf/GAX5K5aTR0LCK', NULL, '2020-01-23 12:20:59', '2020-01-23 12:20:59'),
(127, 'MARIO ALBERTO', 'DE LA CRUZ', 'PADILLA', 'BENEFICIARIO', 'delacruz_ma@ittg.edu.mx', '$2y$10$lt5U.8eRL1Yeq4DHQQp1/.Kt40LGteSceFqerrUL5Lfe8yxDVB0PK', NULL, '2020-01-23 12:22:04', '2020-01-23 12:22:04'),
(128, 'JOSE ANTONIO', 'RUIZ', 'PAREDES', 'BENEFICIARIO', 'joseantonio@ittg.edu.mx', '$2y$10$d/LGeTQgtFn563c.tSF0BuKtb6K4ODBEZeuAjQgLEkR78l9FqV.Ty', NULL, '2020-01-23 12:25:25', '2020-01-23 12:25:25'),
(129, 'ILDEBERTO', 'DE LOS SANTOS', 'RUIZ', 'BENEFICIARIO', 'santo_ild@ittg.edu.mx', '$2y$10$.vI13xuMHvCjNcM8OEcD9.3Ln5.oOjwakJk8hgqnpIIGXRWBnSe5u', NULL, '2020-01-23 12:27:28', '2020-01-23 12:27:28'),
(130, 'VICTOR MANUEL', 'RUIZ', 'VALDIVIEZO', 'BENEFICIARIO', 'victormanuel@ittg.edu.mx', '$2y$10$SqEXJjoy.M7KCTsbVRi4TO0PfSe1hlZJzNaUtfESKJaSEIONbzA.O', NULL, '2020-01-23 12:32:08', '2020-01-23 12:32:08'),
(131, 'JORGE', 'DIAZ', 'HERNANDEZ', 'BENEFICIARIO', 'jdiaz@ittg.edu.mx', '$2y$10$TjYiVqjM5HffRuczYU307Or4l4bOYXbgG/IRCajfEFTHE8yg7oJnS', NULL, '2020-01-23 12:33:32', '2020-01-23 12:33:32'),
(132, 'RONEY', 'RUIZ', 'ZUART', 'BENEFICIARIO', 'roney@ittg.edu.mx', '$2y$10$JxmLUjg4oHfiAPMatikHAe4gtY.wpSIv2Bzl.OlbUynECyNfJ/58i', NULL, '2020-01-23 12:36:03', '2020-01-23 12:36:03'),
(133, 'EDIN GUANERGES', 'DIAZ', 'VICTORIA', 'BENEFICIARIO', 'diaz_eg@ittg.edu.mx', '$2y$10$c5xbCiyJYKGVWnTMMcMsDuVtXdvJq164Jxxxg4M7c04sFjR.G5iBa', NULL, '2020-01-23 12:37:31', '2020-01-23 12:37:31'),
(134, 'CARLOS', 'SANCHEZ', 'NURIULU', 'BENEFICIARIO', 'carlos.sanchez@ittg.edu.mx', '$2y$10$1m2v9ZuHk8i7OsJd5BAwWe6ieovOyLdLhnim5aAcxSngNHifZCCwi', NULL, '2020-01-23 12:38:39', '2020-01-23 12:38:39'),
(135, 'MAŔIA CATALINA', 'SALGADO', 'GUTIERREZ', 'BENEFICIARIO', 'mariacatalina@ittg.edu.mx', '$2y$10$/x6fO1WmSaec5yZ4A6usfuD4gvIZcOWys5c2pp2YoXRkow240YpZe', NULL, '2020-01-23 12:39:46', '2020-01-23 12:39:46'),
(136, 'MELQUICEDED', 'DOMINGUEZ', 'HOLAN', 'BENEFICIARIO', 'mdominguez@ittg.edu.mx', '$2y$10$t3s2qh.C5ad9JXdn/et9LurAKAtZ.YtEFEDLs8KTPptoOGAcGXC2u', NULL, '2020-01-23 12:41:01', '2020-01-23 12:41:01'),
(137, 'DANIEL', 'SAMAYOA', 'PENAGOS', 'BENEFICIARIO', 'danielsamayoa@ittg.edu.mx', '$2y$10$HPFWm4baB8lPzOH6nHH06eKsZEWxIz6us4IKsvoeLm4oInRJPDBpq', NULL, '2020-01-23 12:43:14', '2020-01-23 12:43:14'),
(138, 'ELIAS NEFTALI', 'ESCOBAR', 'GOMEZ', 'BENEFICIARIO', 'escobar_en@ittg.edu.mx', '$2y$10$.PEYEecpOYh6S5v9HZgDyedsytbZ1J/qNFk9I4WESEst9AfznnvGq', NULL, '2020-01-23 12:45:36', '2020-01-23 12:45:36'),
(139, 'JOSE LUIS', 'ESCOBAR', 'VILLAGRAN', 'BENEFICIARIO', 'escobar_jl@ittg.edu.mx', '$2y$10$9xwj78/mpohlRRJH4XVvCu2mrolIHtKbqc3DC5P/QVCoHUV/GnPc2', NULL, '2020-01-23 12:50:26', '2020-01-23 12:50:26'),
(140, 'JUAN JOSE', 'SOLIS', 'ZAVALA', 'BENEFICIARIO', 'juanjose@ittg.edu.mx', '$2y$10$OVxP24phS8LJt5aX2u6kfuuxV/UFH2mtb9EZ53yEjPQ1RdAbNCEwa', NULL, '2020-01-23 12:50:34', '2020-01-23 12:50:34'),
(141, 'JORGE ARTURO', 'SARMIENTO', 'TORRES', 'BENEFICIARIO', 'jorge.arturo@ittg.edu.mx', '$2y$10$P/5DZHk8PEWYMdQFmgWZ9uKtGt.lK0QJvuk614nLoW3mCBFh1pEmi', NULL, '2020-01-23 12:51:46', '2020-01-23 12:51:46'),
(142, 'RICARDO', 'SUAREZ', 'CASTILLEJOS', 'BENEFICIARIO', 'ricardosuarez@ittg.edu.mx', '$2y$10$7UTVDXlQ.H5owEVKiJy90u9G8mC5KlkO9afT7ZH8qNQXvuddtJp.y', NULL, '2020-01-23 12:54:13', '2020-01-23 12:54:13'),
(143, 'JESUS ALFREDO', 'ESPINOSA', 'CALVO', 'BENEFICIARIO', 'espinosa_ja@ittg.edu.mx', '$2y$10$/qC9QCZ/cALksAqQ0sAcAe1SMJnKfP2Ve88WVYyHP/RGkDw3Ejcs.', NULL, '2020-01-23 12:55:43', '2020-01-23 12:55:43'),
(144, 'FRANCISCO DE JESUS', 'SUAREZ', 'RUIZ', 'BENEFICIARIO', 'franciscodejesus@ittg.edu.mx', '$2y$10$uIRylDNPZZYXQjHItlgUHudxi1PKr7NgMLdyPLzjCijB81yp.Zi3u', NULL, '2020-01-23 12:58:16', '2020-01-23 12:58:16'),
(145, 'PATRICIA ELENA', 'SOLIS', 'MORAN', 'BENEFICIARIO', 'patricia.elena@ittg.edu.mx', '$2y$10$IlGQ.jTnT8gSJL03H3nh0e7Z1BguBHLl.uq.7BcoLGBhJoM.LOpa6', NULL, '2020-01-23 13:00:49', '2020-01-23 13:00:49'),
(146, 'CRISANTO', 'ESTRADA', 'LOPEZ', 'BENEFICIARIO', 'estrada_cris@ittg.edu.mx', '$2y$10$cXl7tYZYKwxWmcHr5RBBJe/v3px6pi2APEmWhcWkAQlfSVLUCg2u6', NULL, '2020-01-23 13:00:51', '2020-01-23 13:00:51'),
(147, 'GILBERTO ALEJANDRO', 'SUAREZ', 'RUIZ', 'BENEFICIARIO', 'gilbertoalejandro@ittg.edu.mx', '$2y$10$zLNSt67SuRbMcsAZNqrpwu/GiqrdEVGISrWOWymmJ2nKFMZoU2AaO', NULL, '2020-01-23 13:01:54', '2020-01-23 13:01:54'),
(148, 'OSCAR', 'SUAREZ', 'RUIZ', 'BENEFICIARIO', 'oscarsuarez@ittg.edu.mx', '$2y$10$s5SxvNl8qvnuglqo089ZiuJQcY.TeiRHmoQkaJ98mreB73PZ7omEO', NULL, '2020-01-23 13:04:59', '2020-01-23 13:04:59'),
(149, 'MARIA GUADALUPE', 'FERNANDEZ', 'QUEVEDO', 'BENEFICIARIO', 'fernandez_mg@ittg.edu.mx', '$2y$10$gXxRl2lAdy8KMEEt7iq5JuRXHzkCnJJxszVJAXBnbYyzEi2vzvLXq', NULL, '2020-01-23 13:07:06', '2020-01-23 13:07:06'),
(150, 'RODRIGO', 'FERRER', 'GONZALES', 'BENEFICIARIO', 'ferrer@ittg.edu.mx', '$2y$10$SrrHWQ6ke2hazEgdvxMvc.O95t7UZReY/XkfeI4tbVuxp3e1smp6.', NULL, '2020-01-23 13:12:20', '2020-01-23 13:12:20'),
(151, 'JORGE WILLIAM', 'FIGUEROA', 'CORZO', 'BENEFICIARIO', 'figueroa_jw@ittg.edu.mx', '$2y$10$rgnHOqVFbwO5V4Lvw6Su9.SSV2w4utvQxOYUJ0dagU1Fr8o0myPfq', NULL, '2020-01-23 13:23:01', '2020-01-23 13:23:01'),
(152, 'BLANCA LUZ', 'FIGUEROA', 'PULIDO', 'BENEFICIARIO', 'figueroa_bl@ittg.edu.mx', '$2y$10$zsULZ0BdI72o6PIPAt4xZec8Nnp.uzfNiTO46RDXtruHut2SsnJxa', NULL, '2020-01-23 13:28:12', '2020-01-23 13:28:12'),
(153, 'RAMON CARALAMPIO', 'FIGUEROA', 'PULIDO', 'BENEFICIARIO', 'figueroa_rc@ittg.edu.mx', '$2y$10$ce.QmI/102lwA9w8XTiFq.hIUdUAevGydgxlbfQHBVXECs9owCi52', NULL, '2020-01-23 13:33:32', '2020-01-23 13:33:32'),
(154, 'AURA', 'FLORES', 'PEREZ', 'BENEFICIARIO', 'flores@ittg.edu.mx', '$2y$10$KgbunQwBlXfH8VVmsKBQsuycG14DQNOuwEvgk4Ldxaip9YS5BDKdy', NULL, '2020-01-23 13:36:44', '2020-01-23 13:36:44'),
(155, 'JUDITH ARMINDA', 'GARCIA', 'CANCINO', 'BENEFICIARIO', 'garcia_ja@ittg.edu.mx', '$2y$10$wUbveCZfaas6dMNJx7ZJhe0KRwFsKuaN1UaXyVB1ElcRgCGox7hu2', NULL, '2020-01-23 13:42:28', '2020-01-23 13:42:28'),
(156, 'ROBERTO CARLOS', 'GARCIA', 'GOMEZ', 'BENEFICIARIO', 'garcia_rc@ittg.edu.mx', '$2y$10$Ict1snUemsJBdweovL3vmO9A0IKvreNW.M2qwRZe9ZMKb7rhwk/dG', NULL, '2020-01-23 13:46:30', '2020-01-23 13:46:30'),
(157, 'ANDRES', 'GARCIA', 'LOPEZ', 'BENEFICIARIO', 'agarcia@ittg.edu.mx', '$2y$10$Z3xZWF05DeWUW2okg1H70O/b07v9AkR5yT.InM4vEkwwaEOAcJ45C', NULL, '2020-01-23 13:54:35', '2020-01-23 13:54:35'),
(158, 'HIGINIO', 'GARCIA', 'MENDOZA', 'BENEFICIARIO', 'hgarcia@ittg.edu.mx', '$2y$10$qXgtel78XjGntiC/Za98kuq/dabY4hdyuAYE/1qsb2pu.LFLBTWu2', NULL, '2020-01-23 13:59:31', '2020-01-23 13:59:31'),
(159, 'OSBALDO YSAACC', 'GARCIA', 'RAMOS', 'BENEFICIARIO', 'garcia_oy@ittg.edu.mx', '$2y$10$RYBm3VOcftjV7Tp6PSf5VeA8DNfNTLFRqInwU1YM3o8ekteKy2KEm', NULL, '2020-01-23 14:03:33', '2020-01-23 14:03:33'),
(160, 'GUALBERTO JUAN', 'GARCIA', 'RODRIGUEZ', 'BENEFICIARIO', 'garcia_gj@ittg.edu.mx', '$2y$10$bOt8wrGMoInTBvutVxLwK.3dEjyjfdAm0GeWn5OMFoINfVp5HCy.u', NULL, '2020-01-23 14:08:25', '2020-01-23 14:08:25'),
(161, 'ARTURO', 'GOLPE', 'GORGONIO', 'BENEFICIARIO', 'golpe@ittg.edu.mx', '$2y$10$0tEBtVM2zMMpgow/I4ycAeB2fY8VxNEweFXSOkA92rq9mppHWEYrG', NULL, '2020-01-23 14:22:25', '2020-01-23 14:22:25'),
(162, 'LEONARDO', 'GOMEZ', 'GUTIERREZ', 'BENEFICIARIO', 'lgutierrez@ittg.edu.mx', '$2y$10$.QeTQy8yGIZqH5lTirzAD.Rg0ijMAuEmzr764/LHciWVG1i0I/3Ei', NULL, '2020-01-23 14:28:31', '2020-01-23 14:28:31'),
(163, 'SAMUEL', 'GOMEZ', 'PEcTE', 'BENEFICIARIO', 'sgomez@ittg.edu.mx', '$2y$10$5kW6ZwGUFuCDY7/PsFcEnuOp0/CB/pXkbE2zitsSxcqXObyXKzdJK', NULL, '2020-01-23 14:38:08', '2020-01-23 14:38:08'),
(164, 'JOEL', 'GOMEZ', 'PEREZ', 'BENEFICIARIO', 'jgomez@ittg.edu.mx', '$2y$10$lP5gPzVKcpNdH4SQ4HcweeuwP6G6CphA5qC9CtULkE7/DA1jbDWeS', NULL, '2020-01-23 14:43:14', '2020-01-23 14:43:14'),
(165, 'JOSE ANTONIO', 'GOMEZ', 'ROBLERO', 'BENEFICIARIO', 'gomez_ja@ittg.edu.mx', '$2y$10$zx6kgin/8URJcdWSQ2WFrOTmyIiM6RvHmaDMahFb.2gBS4fivKkfK', NULL, '2020-01-23 14:48:13', '2020-01-23 14:48:13'),
(166, 'JORGE ARMANDO', 'GOMEZ', 'SALINAS', 'BENEFICIARIO', 'jgomez_sa@ittg.edu.mx', '$2y$10$XDuqE2JiZhymZJzp/c/liur7ZK5rwsPJBygPucYzhpx7IU1A37KWi', NULL, '2020-01-23 14:53:30', '2020-01-23 14:53:30'),
(167, 'ADRIANA DEL CARMEN', 'GONZALEZ', 'ESCOBAR', 'BENEFICIARIO', 'gonzalez_ac@ittg.edu.mx', '$2y$10$NclzkwkWt7MnUtCy.m8UweVPnIcBoXPK5rvRJziPvX6sowQUhctTK', NULL, '2020-01-23 14:58:22', '2020-01-23 14:58:22'),
(168, 'ALICIA', 'GONZALEZ', 'LAGUNA', 'BENEFICIARIO', 'gonzalez_a@ittg.edu.mx', '$2y$10$C4JW.of3pkFi5V/NZ1lYyOgilvZzWAlx9sbxUk/rTILtw.YPWswTu', NULL, '2020-01-23 15:06:01', '2020-01-23 15:06:01'),
(169, 'HERLINDA', 'GONZALEZ', 'MENDOZA', 'BENEFICIARIO', 'hgonzalez@ittg.edu.mx', '$2y$10$TSVtrqWLX8BEJGZp5e2iU.rdIc5FC5Pb3QBeg1bm2pQcvqZqLyFDO', NULL, '2020-01-23 15:12:02', '2020-01-23 15:12:02'),
(170, 'LAZARO', 'GRAJALES', 'PASCACIO', 'BENEFICIARIO', 'lgrajales@ittg.edu.mx', '$2y$10$f0SdUbchESV2TDxi2SWfb.5wVGVLjAjG65nN129UrLxsaO4XAejZK', NULL, '2020-01-23 15:19:45', '2020-01-23 15:19:45'),
(171, 'HECTOR', 'GUERRA', 'CRESPO', 'BENEFICIARIO', 'hguerra@ittg.edu.mx', '$2y$10$Oqu7orIUmUnbPwGdiV88BuPgfixYdjGYHaQyyiMTHNP34.5cguLCa', NULL, '2020-01-23 15:24:00', '2020-01-23 15:24:00'),
(172, 'IMELDA', 'VALLES', 'LOPEZ', 'BENEFICIARIO', 'imevalles@ittg.edu.mx', '$2y$10$YEymIfyxeYKuKQxeSKGLUeMW1Sfddt8DSiINwWDM9UZ2.XTPcX4MS', NULL, '2020-01-24 01:40:11', '2020-01-24 01:40:11'),
(173, 'FEDERICO ANTONIO', 'GUTIERREZ', 'MICELI', 'BENEFICIARIO', 'fmiceli@ittg.edu.mx', '$2y$10$lcmzPExtvZZMjWRfUW1lIuCtjgtBuypOAosPZSuofd.xOETiGei3y', NULL, '2020-01-24 02:11:12', '2020-01-24 02:11:12'),
(174, 'SAMUEL', 'ENCISO', 'SAENZ', 'BENEFICIARIO', 'ENCISO@ITTG.EDU.MX', '$2y$10$7s0APuK9cFnhEXjuez1ZMeQ1xaZEOC72ovrTz6qPV3yYfOcZ0rkzO', NULL, '2020-01-24 04:11:25', '2020-01-24 04:11:25'),
(175, 'LUCIA MARIA CRISTINA', 'VENTURA', 'CENSECO', 'BENEFICIARIO', 'VENTURA_LMC@ITTG.EDU.MX', '$2y$10$KZtezIvxiezxSEbzyg5Qq.uOl0vfHrgjiRUVLvpyhhiHGVTJAdCpq', NULL, '2020-01-24 06:33:57', '2020-01-24 06:33:57'),
(176, 'FILIBERTO', 'GUTIERREZ', 'CONTRERAS', 'BENEFICIARIO', 'FGUTIERREZ@ITTG.EDU.MX', '$2y$10$aEar50aAen6W9tmzGeAVreST2o0N3d2GivWaFlolZG.JshOdXupWC', NULL, '2020-01-24 08:39:52', '2020-01-24 08:39:52'),
(177, 'MARCO ANTONIO', 'GUTIERREZ', 'DOMINGUEZ', 'BENEFICIARIO', 'MAGUTIERREZ@ITTG.EDU.MX', '$2y$10$OS.HVbga54CyPJw54JtASeYI4FnFhmTnwcDuBqQxxSJwCrRCXblvO', NULL, '2020-01-24 08:43:49', '2020-01-24 08:43:49'),
(178, 'MARIA CANDELARIA', 'GUTIERREZ', 'GOMEZ', 'BENEFICIARIO', 'MCGUTIERREZ@ITTG.EDU.MX', '$2y$10$4OHLZmEQtI75Oj2Kj29t0O4NWjmD6a3N08D4Y373zxFxAWKC5erwu', NULL, '2020-01-24 08:51:27', '2020-01-24 08:51:27'),
(179, 'DAVID', 'GUZMAN', 'MOLINA', 'BENEFICIARIO', 'DGUMAN@ITTG.EDU.MX', '$2y$10$F/ywWIcRikAhsnIIC1ZQUOkuN7J35wmAN59C.YDw4vclnNVbefp66', NULL, '2020-01-24 08:58:29', '2020-01-24 08:58:29'),
(180, 'HERNAN', 'VALENCIA', 'SANCHEZ', 'BENEFICIARIO', 'HVALENCIA@ITTG.EDU.MX', '$2y$10$FJ8CdbWCV6Ip0A6wZN4oY.ni1YOgrGkqGRLcDPsVLc/pJ9wrBL/ze', NULL, '2020-01-24 09:04:31', '2020-01-24 09:04:31'),
(181, 'JOSE DEL CARMEN', 'VAZQUEZ', 'HERNANDEZ', 'BENEFICIARIO', 'JCVAZQUEZ@ITTG.EDU.MX', '$2y$10$mKO6m/O41GXBl9uipxq8g.GN5AIULdUUt4ZZopSbwrOc4PB9ch9l.', NULL, '2020-01-24 09:21:42', '2020-01-24 09:21:42'),
(182, 'VICTOR MANUEL', 'VAZQUEZ', 'RAMIREZ', 'BENEFICIARIO', 'VMVAZQUEZ@ITTG.EDU.MX', '$2y$10$8n4cpna.tuewhpwp6/Coe.il9Ozf7Fu1Da3NIqTKUsa2PMHCtC/RK', NULL, '2020-01-24 09:27:01', '2020-01-24 09:27:01'),
(183, 'ROBERTO DAVID', 'VAZQUEZ', 'SOL', 'BENEFICIARIO', 'RDVAZQUEZ@ITTG.EDU.MX', '$2y$10$T51Lto1IvIShKbWe7ehjJen1oxaiEiy01aRCcAlChiTIM/HCaiyBK', NULL, '2020-01-24 09:34:25', '2020-01-24 09:34:25'),
(184, 'MIGUEL ARTURO', 'VAZQUEZ', 'VELAZQUEZ', 'BENEFICIARIO', 'VVAZQUEZ_MA@ITTG.EDU.MX', '$2y$10$4DX.4tZ8dUhBfBtqLOcrN.Y.M0sD97EaBmyUyHuXs5h7RNLB50bNy', NULL, '2020-01-24 09:40:03', '2020-01-24 09:40:03'),
(185, 'LUIS MODESTO', 'VELASCO', 'MOTA', 'BENEFICIARIO', 'LMVELASCO@ITTG.EDU.MX', '$2y$10$RTEMBUAWw6Jwgg9Z6uDg9OZ.NcUC2KD25RigFxPW6AMwLmoNeEOJ2', NULL, '2020-01-24 09:44:55', '2020-01-24 09:44:55'),
(186, 'SABINO', 'VELAZQUEZ', 'TRUJILLO', 'BENEFICIARIO', 'VTRUJILLO@ITTG.EDU.MX', '$2y$10$7TERK08y6VUKQXVBGLlwXOVwOYl7OBHxCfQQaa0Wob/Z0W/PD5qWC', NULL, '2020-01-24 09:51:23', '2020-01-24 09:51:23'),
(187, 'GERMAN ANTONIO', 'VENEGAS', 'ROBLES', 'BENEFICIARIO', 'GVENEGAS@ITTG.EDU.MX', '$2y$10$c1NmzcoruFvWN3eEbzBXNeBE/uXg9w7Yt1op4HHkEEgOCHI2h6yn2', NULL, '2020-01-24 09:57:23', '2020-01-24 09:57:23'),
(188, 'JUAN JOSE', 'VILLALOBOS', 'MALDONADO', 'BENEFICIARIO', 'JJVILLALOBOS@ITTG.EDU.MX', '$2y$10$oaMMKSjXcfPCGUOIcQVy2u1ILuE2Lei5U1rPhfvBAmPHvWxZYsmg.', NULL, '2020-01-24 10:02:11', '2020-01-24 10:02:11'),
(189, 'HIPOLITO', 'VILLANUEVA', 'GONZALEZ', 'BENEFICIARIO', 'HVILLANUEVA@ITTG.EDU.MX', '$2y$10$M4l8fZtKnpFOhxtuZjd1EOAkqOl8Om7DuMWn.qwwOgbMtg5sRP81e', NULL, '2020-01-24 10:07:54', '2020-01-24 10:07:54'),
(190, 'JOSE ANGEL', 'ZEPEDA', 'HERNANDEZ', 'BENEFICIARIO', 'jzepeda@ittg.edu.mx', '$2y$10$0lWCX1nesID6hWirJ8JI3.66Sq9lq08nLuKADaZu0sbc2GaBn0kA.', NULL, '2020-01-24 10:12:01', '2020-01-24 10:12:01'),
(191, 'LUIS FELIPE', 'ZEPEDA', 'HERNANDEZ', 'BENEFICIARIO', 'LFZEPEDA@ITTG.EDU.MX', '$2y$10$cdP/QR4WmKvSSMXq76v1euoCemRqlEFi48iB9UNX33wKKPECfKcFC', NULL, '2020-01-24 10:16:06', '2020-01-24 10:16:06'),
(192, 'MARCO ANTONIO', 'ZUÑIGA', 'REYES', 'BENEFICIARIO', 'MZUNIGA@ITTG.EDU.MX', '$2y$10$6eVWZsKV3jyFCrUrqbsbeO/tGVkYSU.yV86Y/ADJg9v1JlPei.Gvi', NULL, '2020-01-24 10:19:53', '2020-01-24 10:19:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `beneficiarios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cas`
--
ALTER TABLE `cas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `concesiones`
--
ALTER TABLE `concesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_concesiones_evidencias1_idx` (`concesionado_id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`id`,`tramite_id`),
  ADD KEY `fk_evidencias_tramites1_idx` (`tramite_id`);

--
-- Indices de la tabla `evidencias_tramites`
--
ALTER TABLE `evidencias_tramites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`,`ca_id`,`beneficiario_id`),
  ADD KEY `fk_miembros_cas1_idx` (`ca_id`),
  ADD KEY `fk_miembros_beneficiarios1_idx` (`beneficiario_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificaciones_receptor_foreign` (`receptor`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tramites_tramites1_idx` (`origen`);

--
-- Indices de la tabla `tramites_users`
--
ALTER TABLE `tramites_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cas`
--
ALTER TABLE `cas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `concesiones`
--
ALTER TABLE `concesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `evidencias_tramites`
--
ALTER TABLE `evidencias_tramites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT de la tabla `tramites_users`
--
ALTER TABLE `tramites_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD CONSTRAINT `fk_beneficiarios_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `fk_evidencias_tramites1` FOREIGN KEY (`tramite_id`) REFERENCES `tramites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD CONSTRAINT `fk_miembros_beneficiarios1` FOREIGN KEY (`beneficiario_id`) REFERENCES `beneficiarios` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_miembros_cas1` FOREIGN KEY (`ca_id`) REFERENCES `cas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `fk_tramites_tramites1` FOREIGN KEY (`origen`) REFERENCES `tramites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
