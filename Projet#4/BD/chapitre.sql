-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 mai 2018 à 00:02
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_chapitre`
--

INSERT INTO `t_chapitre` (`CHA_ID`, `CHA_DATE`, `CHA_TITRE`, `CHA_CONTENU`) VALUES
(1, '2018-04-18 00:56:48', 'Ma premiére fois en Alaska !(1er Chapitre)', 'Voici mon premier chapitre....\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna '),
(2, '2018-04-18 00:56:48', 'Un bon voyage !(2iem Chapitre)', 'Voila Mon deuxiéme chapitre...'),
(9, '2018-05-03 00:54:15', 'chapitre 9 ', '<p>Bonjour ici voila le chapitre 9 ........&nbsp;</p>'),
(10, '2018-05-03 04:23:13', 'Chapitre 7', '<p>Il etait une fois ...&nbsp;</p>');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `CHA_ID`, `COM_SIGNALER`) VALUES
(1, '2018-04-18 00:56:48', 'Yohann ', 'Bravo pour ce début', 1, 0),
(2, '2018-04-18 00:56:48', 'Durand', 'Merci ! Je vais continuer sur ma lancée', 1, 1),
(3, '2018-04-17 22:59:02', 'sf', 'sfe', 2, 1),
(4, '2018-04-17 22:59:12', 'sefsefsefsf', 'sefsefsef', 2, 0),
(5, '2018-04-17 23:00:24', 'sefsefsefsf', 'sefsefsef', 2, 0),
(6, '2018-04-19 01:58:27', 'YoYo', 'Bonjour, votre chapitre est trés bien..', 2, 0),
(12, '2018-04-23 15:02:36', 'qdzdqdz', 'qzdqzd', 2, 0),
(13, '2018-05-02 03:02:03', 'aaaaaaa', 'aaaaaaaa', 1, 1),
(14, '2018-05-02 03:04:13', 'Michel ! ', 'bien ! ', 1, 1),
(15, '2018-05-02 03:04:23', 'Michel ! ', 'bien ! ', 1, 1),
(16, '2018-05-02 23:21:14', 'hey', '<p>hey</p>', 2, 0);

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
