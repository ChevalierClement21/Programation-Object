-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 13:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actualité`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id_actualite` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corps_texte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date DEFAULT NULL,
  `auteur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_actualite`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id_actualite`, `titre`, `corps_texte`, `image`, `date_publication`, `date_revision`, `auteur`, `tags`, `source`) VALUES
(1, 'OMG IL SAUTE DE LA TOUR EIFFEIL ', 'En vrai il a pas sauter tu t\'es juste fais avoir merci pour ton click', 'images/tourEiffel.jpg', '2024-02-28', NULL, 'Clément', 'OMG FYP pourtoi fyp ', 'Les cheveux de Zidane'),
(2, 'Attention Gab le bg avec un corps de garen ', 'Gab l\'homme le plus sexy du monde après Singed et Skarner et Kog Maw\r\n', 'images/gab.jpg', '2024-02-28', NULL, 'Gab', 'M8 loose Miss Monde', 'M8 Lucas'),
(3, 'KC LOOSE CONTRE FNATIC EN FINAL DES WORLDS', 'FAUX KC on gagné', 'images/kc.jpg', '2024-02-28', NULL, 'Gotaga', '#KCWIN #M8NUL', 'le sims de kamel'),
(4, 'SDIS 44 en feux', 'Le SDIS 44 est en feux a l\'heure actuel', 'images/sdis44.jpg', '2024-02-28', NULL, 'Chef de colonne', 'SDIS44 POMPIER', 'TQT '),
(5, 'LEO  L\'AVENIR DE L\'IIA', 'ce jeune entrepreneur est toujours étudiant alors qu\'il est millionnaire a 19 ans ce crackito', 'images/millionaire.jpg', '2024-02-28', NULL, 'LEO', '', 'La semelle de Leo');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
