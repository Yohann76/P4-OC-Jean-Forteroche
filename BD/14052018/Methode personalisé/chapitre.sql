-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 14 mai 2018 à 01:10
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chapitre`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_chapitre`
--

DROP TABLE IF EXISTS `t_chapitre`;
CREATE TABLE IF NOT EXISTS `t_chapitre` (
  `CHA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CHA_DATE` datetime NOT NULL,
  `CHA_TITRE` varchar(100) NOT NULL,
  `CHA_CONTENU` varchar(400) NOT NULL,
  PRIMARY KEY (`CHA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_chapitre`
--

INSERT INTO `t_chapitre` (`CHA_ID`, `CHA_DATE`, `CHA_TITRE`, `CHA_CONTENU`) VALUES
(1, '2018-04-18 00:56:48', 'Ma premiére fois en Alaska !(1er Chapitre)', 'Voici mon premier chapitre....\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna '),
(2, '2018-04-18 00:56:48', ' Un bon voyage ! ', '<p>Voila Mon deuxi&eacute;me chapitre...</p>'),
(25, '2018-05-14 01:03:24', 'zzzzzzzzzz', '<p>chapitre avec commentaire&nbsp;</p>');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `CHA_ID` int(11) NOT NULL,
  `COM_SIGNALER` int(11) DEFAULT '0',
  PRIMARY KEY (`COM_ID`),
  KEY `fk_com_cha` (`CHA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `CHA_ID`, `COM_SIGNALER`) VALUES
(6, '2018-04-19 01:58:27', 'YoYo', 'Bonjour, votre chapitre est trés bien..', 2, 0),
(14, '2018-05-02 03:04:13', 'Michel ! ', 'bien ! ', 1, 1),
(17, '2018-05-14 01:03:37', 'Yohann test ', '<p>aaaaaaaaaaaaaaaaaaaa</p>', 25, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_cha` FOREIGN KEY (`CHA_ID`) REFERENCES `t_chapitre` (`CHA_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
