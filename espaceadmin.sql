-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 fév. 2024 à 12:54
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espaceadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `password`) VALUES
(11, 'admin@gmail.com', '$2y$10$83y4I2GY13VeQ5be/mmIbO53pv4L779JTDuz/enZii/Uig9mECY46'),
(13, 'n@gmail.com', '$2y$10$IiGSFrfxYJXFN7xrWpCXhuU6JHA6IRhqOd60NAERvyiJ66JRZ5/Eq');

-- --------------------------------------------------------

--
-- Structure de la table `servicetable`
--

DROP TABLE IF EXISTS `servicetable`;
CREATE TABLE IF NOT EXISTS `servicetable` (
  `ID` int NOT NULL,
  `ServiceName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `servicetable`
--

INSERT INTO `servicetable` (`ID`, `ServiceName`) VALUES
(0, 'Réparation véhicule'),
(0, 'Vidange'),
(0, 'Carroserie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
