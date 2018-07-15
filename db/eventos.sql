-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2014 at 08:07 AM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fires_eventos`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `evento_id` int(11) NOT NULL AUTO_INCREMENT,
  `evento_nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `evento_lugar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `evento_latitud` float(10,6) NOT NULL,
  `evento_longitud` float(10,6) NOT NULL,
  `evento_fecha_inicio` datetime DEFAULT NULL,
  `evento_fecha_fin` datetime DEFAULT NULL,
  `evento_link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `evento_estado` enum('borrador','publicado','borrado','rechazado') NOT NULL,
  PRIMARY KEY (`evento_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
