-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 17 mai 2018 à 00:54
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
  `CHA_CONTENU` varchar(10000) NOT NULL,
  PRIMARY KEY (`CHA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_chapitre`
--

INSERT INTO `t_chapitre` (`CHA_ID`, `CHA_DATE`, `CHA_TITRE`, `CHA_CONTENU`) VALUES
(28, '2018-05-15 00:00:50', ' Préparation pour un long voyage(1)   ', '<p><strong>Croc-Blanc</strong> a 20 ans, vivant a Paris, originaire de l\'Alaska par ca m&eacute;re, il r&eacute;vait de partir un jour dans ce pays magnifique pour d&eacute;couvrire ses origines,mais il sais tr&eacute;s bien que ce pays est sp&eacute;cial par son climat,ca maman lui a deja racompter diff&eacute;rente annecdote et histoire sur ce pays,mais Croc-blanc &eacute;tait determiner a decouvrir ses origines avec des paysages hors norme! Croc-Blanc d&eacute;cide donc de reserver un billet d\'avion pour l\'alaska ...&nbsp;</p>'),
(31, '2018-05-16 03:53:51', ' Un voyage mouvementer ! ', '<p>Croc-Blanc pris l\'avion pour la premi&eacute;re fois, il est un peu stresser car il ne sait pas a quoi s\'attendre,cependant tout se passe bien,quand d\'un coup le commandant de bord pris la parole et annonca des turbulances, Croc-Blanc est paniquer, l\'avion se mis a bouger et a balloter de droite a gauche,mais le comandant de bors prend la parole une deuxi&eacute;me fois et annoncant que qu\'il allait monter de mille pied pour sortir de cette zone de turbulance..</p>'),
(32, '2018-05-17 00:50:50', 'Enfin arriver ! ', '<p>Croc-Blanc se remet doucement de ce voyage str&eacute;ssant, surtout quand il sens le froid glacial quand il dessans de l\'avion, il ne pensait pas qu\'il fesait aussi froid dans ce pays !&nbsp;</p>');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `CHA_ID`, `COM_SIGNALER`) VALUES
(22, '2018-05-17 00:26:13', 'Anonyme ', '<p>Waah, tr&eacute;s bon chapitre, continue ainsi !&nbsp;</p>', 28, 0);

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
