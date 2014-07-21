-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jul 2014 um 09:27
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
  `u_id` int(11) NOT NULL,
  `antwort` text NOT NULL,
  `auswertungsbereich` text,
  `f_type` int(11) NOT NULL,
  `datum` date NOT NULL,
  `feld1` varchar(255) DEFAULT NULL,
  `feld2` varchar(255) DEFAULT NULL,
  `feld3` varchar(255) DEFAULT NULL,
  `feld4` varchar(255) DEFAULT NULL,
  `feld5` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL DEFAULT 'asd',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Daten für Tabelle `resantwort`
--

INSERT INTO `resantwort` (`id`, `f_id`, `u_id`, `antwort`, `auswertungsbereich`, `f_type`, `datum`, `feld1`, `feld2`, `feld3`, `feld4`, `feld5`, `token`) VALUES
(25, 1, 1, 'Test1', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(26, 2, 1, 'Test1', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(27, 3, 1, '1', 'AB 1', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(28, 4, 1, '1', 'Test', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(29, 1, 1, 'Test1', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(30, 2, 1, 'Test1', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(31, 3, 1, '1', 'AB 1', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(32, 4, 1, '1', 'Test', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'cefd39597771d25cf64347cac5a72dc4'),
(33, 1, 1, 'Test', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, '7aae4e9141afbe902f60a68d96c766b2'),
(34, 2, 1, 'Test', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, '7aae4e9141afbe902f60a68d96c766b2'),
(35, 3, 1, '3', 'AB 1', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, '7aae4e9141afbe902f60a68d96c766b2'),
(36, 4, 1, '3', 'Test', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, '7aae4e9141afbe902f60a68d96c766b2'),
(37, 1, 1, 'Test', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'ca8cfed8324a33606e5f6b6252e50aee'),
(38, 2, 1, 'Test', NULL, 1, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'ca8cfed8324a33606e5f6b6252e50aee'),
(39, 3, 1, '4', 'AB 1', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'ca8cfed8324a33606e5f6b6252e50aee'),
(40, 4, 1, '4', 'Test', 0, '2014-07-17', NULL, NULL, NULL, NULL, NULL, 'ca8cfed8324a33606e5f6b6252e50aee'),
(41, 1, 1, 'Test', NULL, 1, '2014-07-18', NULL, NULL, NULL, NULL, NULL, '8fe5ab1afc2c507db3ed85d960edb51b'),
(42, 2, 1, 'Test', NULL, 1, '2014-07-18', NULL, NULL, NULL, NULL, NULL, '8fe5ab1afc2c507db3ed85d960edb51b'),
(43, 3, 1, '1', 'AB 1', 0, '2014-07-18', NULL, NULL, NULL, NULL, NULL, '8fe5ab1afc2c507db3ed85d960edb51b'),
(44, 4, 1, '1', 'Test', 0, '2014-07-18', NULL, NULL, NULL, NULL, NULL, '8fe5ab1afc2c507db3ed85d960edb51b');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `resfrage`
--

INSERT INTO `resfrage` (`id`, `u_id`, `frage`, `prio`, `auswertungsbereich`, `type`) VALUES
(1, 1, 'Hier könnte Ihre Frage stehen.', 17, NULL, 1),
(2, 1, 'Mögen Sie diese Frage?', 12, NULL, 1),
(3, 1, 'Ich bin eine Frage!', 9, 'AB 1', 0),
(4, 1, 'Das ist eine Aussage', 9, 'Test', 0),
(7, 11, 'Mögen sie diese umfrage??', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `resumfrage`
--

DROP TABLE IF EXISTS `resumfrage`;
CREATE TABLE IF NOT EXISTS `resumfrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `danketext` text,
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
  `kontakt_id` int(11) NOT NULL,
  `farbe1` varchar(7) DEFAULT NULL,
  `farbe2` varchar(7) DEFAULT NULL,
  `farbe4` varchar(7) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Daten für Tabelle `resumfrage`
--

INSERT INTO `resumfrage` (`id`, `danketext`, `name`, `feld1`, `feld2`, `feld3`, `feld4`, `feld5`, `auswertungsbereich1`, `auswertungsbereich2`, `auswertungsbereich3`, `auswertungsbereich4`, `auswertungsbereich5`, `einleitungstext`, `teilnehmerzahl`, `kontakt_id`, `farbe1`, `farbe2`, `farbe4`, `bild`) VALUES
(1, 'Vielen Dank, dass SIe an dieser Testumfrage teilgenommen haben!\r\n\r\nIhre Teilnahme wird uns dabei helfen die Umfrage-Software weiter zu verbessern.', 'Testumfrage1', 'Bearbeitender', 'Mitarbeiter', 'Moderator', 'ServiceID', NULL, 'Test', NULL, 'AB 1', 'AB 2', NULL, 'Dies ist ein Eileitungstext. Viel Spaß mit der Umfrage! :)', 1, 10000, NULL, NULL, NULL, NULL),
(11, NULL, 'Testumfrage2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Testumfrage2', 0, 10000, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
