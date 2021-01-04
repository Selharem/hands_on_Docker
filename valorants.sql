-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 jan. 2021 à 21:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `soufiane_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `valorants`
--

DROP TABLE IF EXISTS `valorants`;
CREATE TABLE IF NOT EXISTS `valorants` (
  `name` varchar(100) NOT NULL,
  `photo` varchar(104) NOT NULL,
  `characteristics` varchar(1500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `valorants`
--

INSERT INTO `valorants` (`name`, `photo`, `characteristics`) VALUES
('Breach', 'Breach.png', 'go through terrain'),
('Brimstone', 'Brimstone.png', 'call down smoke grenades'),
('Cypher', 'Cypher.png', 'uses spy gadgets');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
