-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 fév. 2023 à 15:29
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(18, 'f eza feza'),
(15, 'F E EER RE '),
(21, 'France'),
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
(7, 17),
(3, 16),
(3, 12),
(3, 11),
(7, 12),
(7, 14);

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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `price`, `name`, `id_category`, `id_user`) VALUES
(17, 1, 'zafzafzaf', 18, NULL),
(16, 456, 'afzafzaz', 14, NULL),
(15, 123, 'zafazf', 15, NULL),
(14, 156, 'za za', 18, NULL),
(13, 123, 'zefea', 15, NULL),
(12, 456, 'gigot', 14, NULL),
(10, 1, 'flag', 18, NULL),
(11, 56, 'ctu', 20, NULL),
(18, 56, 'fzafzafa', 20, NULL),
(19, 1, 'eza ezae', 18, NULL),
(20, 456, 'e zae az eza', 14, NULL),
(21, 123, 'eeeeeeeeeee', 15, NULL),
(22, 156, 'zzzzzzzzzz', 18, NULL),
(23, 123, 'aaaaaaaa', 15, NULL),
(24, 456, ' ze ez tez', 14, NULL),
(25, 1, 'jjjjjj', 18, NULL),
(26, 56, ' tezt ze tze', 20, NULL),
(27, 56, ' tez tez tezt z', 20, NULL),
(28, 1, 'zafzafzaf', 18, NULL),
(29, 456, 'afzafzaz', 14, NULL),
(30, 123, 'zafazf', 15, NULL),
(31, 156, 'za za', 18, NULL),
(32, 123, 'zefea', 15, NULL),
(33, 456, 'gigot', 14, NULL),
(34, 1, 'flag', 18, NULL),
(35, 56, 'ctu', 20, NULL),
(36, 56, 'fzafzafa', 20, NULL),
(37, 1, 'eza ezae', 18, NULL),
(38, 456, 'e zae az eza', 14, NULL),
(39, 123, 'eeeeeeeeeee', 15, NULL),
(40, 156, 'zzzzzzzzzz', 18, NULL),
(41, 123, 'aaaaaaaa', 15, NULL),
(42, 456, ' ze ez tez', 14, NULL),
(43, 1, 'jjjjjj', 18, NULL),
(44, 56, ' tezt ze tze', 20, NULL),
(45, 56, ' tez tez tezt z', 20, NULL),
(46, 154646, 'gigot', 15, NULL),
(47, NULL, 'zaeza', NULL, 3),
(48, NULL, 'ezaeaz', NULL, 3),
(49, NULL, 'France', NULL, 3),
(50, NULL, 'aaaa', NULL, 3),
(51, NULL, 'aaaaa', NULL, 3),
(52, NULL, 'ezaeaz', NULL, 7),
(53, NULL, 'zeaze', NULL, 7);

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sell`
--

INSERT INTO `sell` (`id`, `img`, `user`, `date`, `price`, `state`) VALUES
(1, 10, 3, '2023-01-26 17:35:13', 1, 0),
(2, 10, 3, '2023-01-26 17:36:03', 1, 0),
(3, 11, 3, '2023-01-26 17:36:03', 56, 0),
(4, 10, 3, '2023-01-26 17:36:04', 1, 0),
(5, 11, 3, '2023-01-26 17:36:04', 56, 0),
(6, 10, 3, '2023-01-26 17:38:50', 1, 0),
(7, 11, 3, '2023-01-26 17:38:50', 56, 0),
(8, 10, 3, '2023-01-26 17:39:57', 1, 0),
(9, 15, 3, '2023-02-01 19:50:53', 123, 0),
(10, 12, 3, '2023-02-01 19:50:53', 456, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`, `password`, `num`, `adresse`, `admin`, `first_name`) VALUES
(3, 'Labourdette ', 'r@gmail.com', 18, '1be988d47836ca1473e676b6eabcc7415b50a77f', '20', '40', 1, ''),
(6, 'a', 'a@gmail.com', 12, 'e47f078255b849745f0a6ed6ed82bcb281476931', '5050505050', 'a', 0, 'a'),
(7, 'b', 'b@gmail.com', 12, '722d5162d037c1fee91fda99de4e4394dd816fd2', '5050505050', 'b', 1, 'b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
