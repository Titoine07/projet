-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 16 Mars 2016 à 15:59
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quai_machines`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `ID_EVENEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_EVENEMENT` varchar(255) NOT NULL,
  `DESCRIPTION_EVENEMENT` longtext NOT NULL,
  `DATE_EVENEMENT` date NOT NULL,
  PRIMARY KEY (`ID_EVENEMENT`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`ID_EVENEMENT`, `NOM_EVENEMENT`, `DESCRIPTION_EVENEMENT`, `DATE_EVENEMENT`) VALUES
(1, 'Mexicaine', 'Semaine Merxicaine, peperonni, plats chorizo....', '2016-03-10'),
(40, 'WTF', 'Soirée poing d''honneur V2', '2016-03-31'),
(41, 'Soirée poing d''honneur', 'Mousse au chocolat', '2016-03-17');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID_NEWSLETTER` int(11) NOT NULL AUTO_INCREMENT,
  `MAIL` varchar(255) DEFAULT NULL,
  `TOKEN` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`ID_NEWSLETTER`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`ID_NEWSLETTER`, `MAIL`, `TOKEN`) VALUES
(20, 'david@fakemail.com', 'od3HcujHI6Zs9OEXcogvvpEbApvZN0XZA50Byzr4toNkclPVlpG6FNYRHr7D'),
(21, 'toto@mail.com', 'gDYQ8xMe4H1IP16rY1wJrXZREhE15LFgBiwmZmkHJM3GgCPro3CxliDv7sBw');

-- --------------------------------------------------------

--
-- Structure de la table `semaine`
--

DROP TABLE IF EXISTS `semaine`;
CREATE TABLE IF NOT EXISTS `semaine` (
  `ID_SEMAINE` int(11) NOT NULL AUTO_INCREMENT,
  `LUNDI` varchar(255) DEFAULT NULL,
  `MARDI` varchar(255) DEFAULT NULL,
  `MERCREDI` varchar(255) DEFAULT NULL,
  `JEUDI` varchar(255) DEFAULT NULL,
  `VENDREDI` varchar(255) DEFAULT NULL,
  `SAMEDI` varchar(255) DEFAULT NULL,
  `DIMANCHE` varchar(255) DEFAULT NULL,
  `NUM_SEMAINE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_SEMAINE`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `semaine`
--

INSERT INTO `semaine` (`ID_SEMAINE`, `LUNDI`, `MARDI`, `MERCREDI`, `JEUDI`, `VENDREDI`, `SAMEDI`, `DIMANCHE`, `NUM_SEMAINE`) VALUES
(1, 'hfvjaezvFJ', 'HDVJVCFHJV', 'BDBDdgezd', 'gdugdg', 'gudfazgfig', 'dugigg', 'gdfugzfeizg', 9),
(3, 'adsazBBBBBBBBB', 'dfaqezf', 'hjv', 'juv', 'hjv', 'v', 'dfezuvf', 10),
(4, 'doner', 'kebab', 'frites', 'choucroute', 'couscous', 'weight watchers', 'buffet a volonté ', 1),
(6, 'A', 'B', 'C', 'D', 'E', '', 'G', 0),
(8, 'a', 'b', 'n', 'h', 'b', 'j', '', 2),
(9, 'Aiguillettes de volaille à la moutarde douce', 'Canard au chou rouge et pommes de terre', 'Dos de cabillaud au pain d’épices', 'Côte de veau et ses carottes confites', 'Curry de lotte au lait de coco', 'Blanc de poulet farci au chèvre et aux herbes fraîches', 'Pavé de rumsteak au poivre ', 11),
(10, 'Aiguillettes de volaille à la moutarde douce', 'Canard au chou rouge et pommes de terre', 'Dos de cabillaud au pain d’épices', 'Côte de veau et ses carottes confites', 'Curry de lotte au lait de coco', 'Blanc de poulet farci au chèvre et aux herbes fraîches', 'Pavé de rumsteak au poivre ', 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`ID_USER`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
