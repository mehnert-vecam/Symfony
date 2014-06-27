-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jun 2014 um 10:53
-- Server Version: 5.6.17
-- PHP-Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `disciplina`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resantwort`
--

CREATE TABLE IF NOT EXISTS `resantwort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `antwort` text NOT NULL,
  `auswertungsbereich` text,
  `f_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `resantwort`
--

INSERT INTO `resantwort` (`id`, `f_id`, `antwort`, `auswertungsbereich`, `f_type`) VALUES
(1, 3, 'Dies ist eine Test-Anwort', 'Test', 0),
(2, 1, 'Hier könnte ihre Antwort stehen', 'Derp', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resfrage`
--

CREATE TABLE IF NOT EXISTS `resfrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `frage` text NOT NULL,
  `prio` int(11) NOT NULL,
  `auswertungsbereich` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `resfrage`
--

INSERT INTO `resfrage` (`id`, `u_id`, `frage`, `prio`, `auswertungsbereich`, `type`) VALUES
(1, 1, 'Hier könnte Ihre Frage stehen.', 17, 'Derp', 1),
(2, 1, 'Mögen Sie diese Frage?', 12, 'AB 2', 1),
(3, 1, 'Ich bin eine Frage!', 9, 'AB 1', 0),
(4, 1, 'Das ist eine Aussage', 9, 'Test', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resumfrage`
--

CREATE TABLE IF NOT EXISTS `resumfrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `feld1` varchar(100) NOT NULL DEFAULT '-',
  `feld2` varchar(100) NOT NULL DEFAULT '-',
  `feld3` varchar(100) NOT NULL DEFAULT '-',
  `feld4` varchar(100) NOT NULL DEFAULT '-',
  `feld5` varchar(100) NOT NULL DEFAULT '-',
  `auswertungsbereich1` varchar(100) DEFAULT NULL,
  `auswertungsbereich2` varchar(100) DEFAULT NULL,
  `auswertungsbereich3` varchar(100) DEFAULT NULL,
  `auswertungsbereich4` varchar(100) DEFAULT NULL,
  `auswertungsbereich5` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `resumfrage`
--

INSERT INTO `resumfrage` (`id`, `name`, `feld1`, `feld2`, `feld3`, `feld4`, `feld5`, `auswertungsbereich1`, `auswertungsbereich2`, `auswertungsbereich3`, `auswertungsbereich4`, `auswertungsbereich5`) VALUES
(1, 'Testumfrage1', 'Bearbeitender', 'Mitarbeiter', 'Moderator', 'ServiceID', '-', 'Test', 'Derp', 'AB 1', 'AB 2', NULL),
(2, 'Testumfrage2', '-', 'Testfeld 1', 'Geändertes Feld', '-', 'Testfeld XYZ', NULL, NULL, NULL, NULL, NULL),
(3, 'Form_Test', '12a', '-', '-', '-', '-', NULL, NULL, NULL, NULL, NULL),
(5, 'Form_Test2', 'a', 'b', 'c', '-', '-', 'Hund', 'Hase', 'Maus', 'Esel', 'Tiger');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
