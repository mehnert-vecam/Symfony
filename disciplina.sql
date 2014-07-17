-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jul 2014 um 11:29
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

DROP TABLE IF EXISTS `resantwort`;
CREATE TABLE IF NOT EXISTS `resantwort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `antwort` text NOT NULL,
  `auswertungsbereich` text,
  `f_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Daten für Tabelle `resantwort`
--

INSERT INTO `resantwort` (`id`, `f_id`, `antwort`, `auswertungsbereich`, `f_type`) VALUES
(1, 3, 'Dies ist eine Test-Anwort', 'Test', 1),
(2, 1, 'Hier könnte ihre Antwort stehen', 'Derp', 1),
(3, 1, '1', 'Test', 0),
(4, 2, '12', 'Test', 1),
(5, 3, '123', 'Test', 1),
(6, 4, '1234', 'Test', 1),
(7, 1, 'Test', 'Derp', 1),
(8, 2, 'Test2', 'AB 2', 1),
(9, 3, '5', 'AB 1', 0),
(10, 4, 'asd', 'Test', 1),
(11, 5, '4', NULL, 0),
(12, 6, 'Derp', NULL, 1),
(13, 3, '3', 'AB 1', 0),
(14, 3, '5', 'AB 1', 0),
(15, 1, 'Test', 'Derp', 1),
(16, 2, 'Test2', 'AB 2', 1),
(17, 1, 'Test', 'Derp', 1),
(18, 2, 'Test2', 'AB 2', 1),
(19, 3, '4', 'AB 1', 0),
(20, 4, '2', 'Test', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resfrage`
--

DROP TABLE IF EXISTS `resfrage`;
CREATE TABLE IF NOT EXISTS `resfrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `frage` text NOT NULL,
  `prio` int(11) NOT NULL,
  `auswertungsbereich` varchar(100) DEFAULT '-',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `resfrage`
--

INSERT INTO `resfrage` (`id`, `u_id`, `frage`, `prio`, `auswertungsbereich`, `type`) VALUES
(1, 1, 'Hier könnte Ihre Frage stehen.', 17, 'Derp', 1),
(2, 1, 'Mögen Sie diese Frage?', 12, 'AB 2', 1),
(3, 1, 'Ich bin eine Frage!', 9, 'AB 1', 0),
(4, 1, 'Das ist eine Aussage', 9, 'Test', 0),
(5, 2, 'Frage zu Umfrage 2', 1, NULL, 0),
(6, 2, 'Frage zu Umfrage 2 nochmal', 12, NULL, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resumfrage`
--

DROP TABLE IF EXISTS `resumfrage`;
CREATE TABLE IF NOT EXISTS `resumfrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `feld1` varchar(100) DEFAULT NULL,
  `feld2` varchar(100) DEFAULT NULL,
  `feld3` varchar(100) DEFAULT NULL,
  `feld4` varchar(100) DEFAULT NULL,
  `feld5` varchar(100) DEFAULT NULL,
  `auswertungsbereich1` varchar(100) DEFAULT NULL,
  `auswertungsbereich2` varchar(100) DEFAULT NULL,
  `auswertungsbereich3` varchar(100) DEFAULT NULL,
  `auswertungsbereich4` varchar(100) DEFAULT NULL,
  `auswertungsbereich5` varchar(100) DEFAULT NULL,
  `einleitungstext` text NOT NULL,
  `teilnehmerzahl` int(11) NOT NULL DEFAULT '0',
  `ersteller` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `resumfrage`
--

INSERT INTO `resumfrage` (`id`, `name`, `feld1`, `feld2`, `feld3`, `feld4`, `feld5`, `auswertungsbereich1`, `auswertungsbereich2`, `auswertungsbereich3`, `auswertungsbereich4`, `auswertungsbereich5`, `einleitungstext`, `teilnehmerzahl`, `ersteller`) VALUES
(1, 'Testumfrage1', 'Bearbeitender', 'Mitarbeiter', 'Moderator', 'ServiceID', '', 'Test', '', 'AB 1', 'AB 2', '', 'Dies ist ein Eileitungstext. Viel Spaß mit der Umfrage! :)', 0, 10000),
(2, 'Testumfrage2', '', 'Testfeld 1', 'Geändertes Feld', '', 'Testfeld XYZ', '', '', '', '', '', '', 0, 10000),
(3, 'Form_Test', '12a', '', '', '', '', '', '', '', '', '', '', 0, 10000),
(5, 'Form_Test2', 'a', 'b', 'c', '', '', 'Hund', 'Hase', 'Maus', 'Esel', 'Tiger', '', 0, 10000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
