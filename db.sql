-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 26 jan. 2023 à 13:58
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(18, 'f eza feza'),
(15, 'F E EER RE '),
(14, 'ZD Adz A '),
(20, 'f eza');

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
(3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_category` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `price`, `name`, `id_category`) VALUES
(10, 1, 'flag', 0),
(11, 56, 'ctu', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` int UNSIGNED NOT NULL,
  `user` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`, `password`, `num`, `adresse`, `admin`) VALUES
(3, 'Labourdette ', 'r@gmail.com', 18, '1be988d47836ca1473e676b6eabcc7415b50a77f', '20', '40', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
