-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 08:37 PM
-- Server version: 5.7.16
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_usuarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(255) NOT NULL,
  `hash_session` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`, `rol`, `hash_session`) VALUES
(1, 'admin', '$2y$10$4oOfFvzA0dsZpSe9qX/Qie718NeqDr3ZsehUJ2FPyBwlqP02tiZzu', 'super-admin', '51ee419599d28931eac393ab764a3caeca121125');

-- --------------------------------------------------------

--
-- Table structure for table `altas`
--

CREATE TABLE `altas` (
  `id` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bajas`
--

CREATE TABLE `bajas` (
  `id` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socios`
--

CREATE TABLE `socios` (
  `id` int(11) NOT NULL,
  `codigo_socio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_cuenta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `solicitud` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consentimiento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_img_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_madre` text COLLATE utf8_unicode_ci,
  `localidad_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_postal_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_madre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nacimiento_madre` date DEFAULT NULL,
  `nombre_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_img_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_padre` text COLLATE utf8_unicode_ci,
  `localidad_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_postal_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_padre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nacimiento_padre` date DEFAULT NULL,
  `foto_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni_img_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_usuario` text COLLATE utf8_unicode_ci,
  `localidad_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_postal_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nacimiento_usuario` date DEFAULT NULL,
  `diagnostico_usuario` text COLLATE utf8_unicode_ci,
  `diagnostico_img_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grado_dependencia_usuario` int(11) DEFAULT NULL,
  `grado_dependencia_img_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grado_discapacidad_usuario` int(11) DEFAULT NULL,
  `grado_discapacidad_img_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_escolarizacion_usuario` text COLLATE utf8_unicode_ci,
  `colegio_usuario` text COLLATE utf8_unicode_ci,
  `movilidad_usuario` int(11) DEFAULT NULL,
  `nivel_educativo_usuario` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socios`
--

INSERT INTO `socios` (`id`, `codigo_socio`, `numero_cuenta`, `solicitud`, `consentimiento`, `nombre_madre`, `apellidos_madre`, `dni_madre`, `dni_img_madre`, `direccion_madre`, `localidad_madre`, `provincia_madre`, `codigo_postal_madre`, `movil_madre`, `telefono_madre`, `email_madre`, `fecha_nacimiento_madre`, `nombre_padre`, `apellidos_padre`, `dni_padre`, `dni_img_padre`, `direccion_padre`, `localidad_padre`, `provincia_padre`, `codigo_postal_padre`, `movil_padre`, `telefono_padre`, `email_padre`, `fecha_nacimiento_padre`, `foto_usuario`, `nombre_usuario`, `apellidos_usuario`, `dni_usuario`, `dni_img_usuario`, `direccion_usuario`, `localidad_usuario`, `provincia_usuario`, `codigo_postal_usuario`, `movil_usuario`, `telefono_usuario`, `email_usuario`, `fecha_nacimiento_usuario`, `diagnostico_usuario`, `diagnostico_img_usuario`, `grado_dependencia_usuario`, `grado_dependencia_img_usuario`, `grado_discapacidad_usuario`, `grado_discapacidad_img_usuario`, `tipo_escolarizacion_usuario`, `colegio_usuario`, `movilidad_usuario`, `nivel_educativo_usuario`) VALUES
(1, NULL, 'aaa', NULL, NULL, '', '', '', NULL, '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '', '', '', NULL, '', '', '', '', '', '', '', NULL, '', NULL, 0, NULL, 0, NULL, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_socio` (`id_socio`);

--
-- Indexes for table `bajas`
--
ALTER TABLE `bajas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_socio` (`id_socio`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `altas`
--
ALTER TABLE `altas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bajas`
--
ALTER TABLE `bajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `altas`
--
ALTER TABLE `altas`
  ADD CONSTRAINT `fk_altas_socios` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bajas`
--
ALTER TABLE `bajas`
  ADD CONSTRAINT `fk_bajas_socios` FOREIGN KEY (`id_socio`) REFERENCES `socios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
