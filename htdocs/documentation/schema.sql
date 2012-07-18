-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-07-2012 a las 23:27:44
-- Versión del servidor: 5.5.22
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `db_codebit_training`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_carryOutDateCourse_instructors`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_carryOutDateCourse_instructors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  `member_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`,`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_carryOutDateCourse_prices`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_carryOutDateCourse_prices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  `price` decimal(10,0) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_carryOutDateCourse_students`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_carryOutDateCourse_students` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  `member_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`,`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_carryOutDate_course`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_carryOutDate_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  `course_id` int(11) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`,`course_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_categories`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_courses`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `name` int(11) NOT NULL,
  `description` text NOT NULL,
  `target` text,
  `enabled` tinyint(1) unsigned DEFAULT '0',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_members`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `extraInfo` text,
  `enabled` tinyint(1) unsigned DEFAULT '0',
  `updated_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_payForms`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_payForms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `helpText` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `enabled` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_payForms_course`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_payForms_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payForm_id` int(11) unsigned NOT NULL,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `payForm_id` (`payForm_id`,`carryOutDateCourse_id`),
  KEY `payForm_id_2` (`payForm_id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_places`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_places` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL COMMENT 'Se recomienda una descripción',
  `coordinates` varchar(50) DEFAULT NULL COMMENT 'arreglo con valor coordenada 1, 2',
  `total` int(5) unsigned DEFAULT '0' COMMENT 'Número de eventos que se han llevado a cabo aquí',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_tags`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `total` int(10) DEFAULT '0' COMMENT 'Número de ocasiones que se ha utilizado esta etiqueta en diversos cursos',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fdpjwzk92y_tags_course`
--

CREATE TABLE IF NOT EXISTS `fdpjwzk92y_tags_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) unsigned NOT NULL,
  `carryOutDateCourse_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_id` (`tag_id`,`carryOutDateCourse_id`),
  KEY `tag_id_2` (`tag_id`),
  KEY `carryOutDateCourse_id` (`carryOutDateCourse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fdpjwzk92y_carryOutDateCourse_instructors`
--
ALTER TABLE `fdpjwzk92y_carryOutDateCourse_instructors`
  ADD CONSTRAINT `fdpjwzk92y_carryoutdatecourse_instructors_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `fdpjwzk92y_members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fdpjwzk92y_carryoutdatecourse_instructors_ibfk_1` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_carryOutDateCourse_prices`
--
ALTER TABLE `fdpjwzk92y_carryOutDateCourse_prices`
  ADD CONSTRAINT `fdpjwzk92y_carryoutdatecourse_prices_ibfk_1` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_carryOutDateCourse_students`
--
ALTER TABLE `fdpjwzk92y_carryOutDateCourse_students`
  ADD CONSTRAINT `fdpjwzk92y_carryoutdatecourse_students_ibfk_3` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fdpjwzk92y_carryoutdatecourse_students_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `fdpjwzk92y_members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_carryOutDate_course`
--
ALTER TABLE `fdpjwzk92y_carryOutDate_course`
  ADD CONSTRAINT `fdpjwzk92y_carryoutdate_course_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `fdpjwzk92y_courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fdpjwzk92y_carryoutdate_course_ibfk_2` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_courses`
--
ALTER TABLE `fdpjwzk92y_courses`
  ADD CONSTRAINT `fdpjwzk92y_courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `fdpjwzk92y_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_payForms_course`
--
ALTER TABLE `fdpjwzk92y_payForms_course`
  ADD CONSTRAINT `fdpjwzk92y_payforms_course_ibfk_3` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fdpjwzk92y_payforms_course_ibfk_1` FOREIGN KEY (`payForm_id`) REFERENCES `fdpjwzk92y_payForms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fdpjwzk92y_tags_course`
--
ALTER TABLE `fdpjwzk92y_tags_course`
  ADD CONSTRAINT `fdpjwzk92y_tags_course_ibfk_2` FOREIGN KEY (`carryOutDateCourse_id`) REFERENCES `fdpjwzk92y_carryOutDate_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fdpjwzk92y_tags_course_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `fdpjwzk92y_tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
