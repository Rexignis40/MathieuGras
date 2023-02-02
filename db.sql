-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 fév. 2023 à 23:49
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mathieugras`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(26, 'Nature'),
(25, 'Prestations'),
(24, 'Lightroom'),
(23, 'Tirages');

-- --------------------------------------------------------

--
-- Structure de la table `favorie`
--

DROP TABLE IF EXISTS `favorie`;
CREATE TABLE IF NOT EXISTS `favorie` (
  `id_user` int UNSIGNED NOT NULL,
  `id_image` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `favorie`
--

INSERT INTO `favorie` (`id_user`, `id_image`) VALUES
(8, 62),
(8, 59),
(8, 63),
(8, 69),
(8, 64),
(8, 66);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` int UNSIGNED DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `id_category` int UNSIGNED DEFAULT NULL,
  `id_user` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `price`, `name`, `id_category`, `id_user`) VALUES
(70, NULL, 'Rue', NULL, 8),
(69, 170, 'Aurores boréales', 26, NULL),
(68, 80, 'Plage', 26, NULL),
(67, 200, 'Bulle', 25, NULL),
(66, 180, 'Montagne en hiver', 26, NULL),
(65, 110, 'Pont', 23, NULL),
(64, 85, 'Forêt noir', 26, NULL),
(63, 25, 'Aurore', 25, NULL),
(62, 60, 'Forêt en hiver', 26, NULL),
(61, 120, 'Ville', 26, NULL),
(60, 80, 'Route', 23, NULL),
(58, 15, 'Nuage', 23, NULL),
(59, 190, 'Au milieu des montagnes', 26, NULL),
(56, 25, 'Coin de rue', 25, NULL),
(55, 100, 'Rails', 23, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` int UNSIGNED NOT NULL,
  `user` int UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int UNSIGNED NOT NULL,
  `state` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sell`
--

INSERT INTO `sell` (`id`, `img`, `user`, `date`, `price`, `state`) VALUES
(12, 67, 8, '2023-02-03 00:42:45', 200, 0),
(11, 69, 8, '2023-02-03 00:42:45', 170, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `age` tinyint UNSIGNED NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `num` varchar(10) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`, `password`, `num`, `adresse`, `admin`, `first_name`) VALUES
(9, 'Dupont', 'm.dupont@gmail.com', 31, '0632737aef1575c9bfee482daf2461b30d203091', '0612121212', 'Sous le pont', 0, 'Michel'),
(8, 'admin', 'admin@gmail.com', 18, 'd049f657693a6c393e7407a901a0976ce9f2331c', '0634567891', 'Rue admin', 1, 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
