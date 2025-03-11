-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 mars 2025 à 03:12
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
-- Base de données : `bdannuaire`
--
CREATE DATABASE IF NOT EXISTS `bdannuaire` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bdannuaire`;

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

DROP TABLE IF EXISTS `annuaire`;
CREATE TABLE IF NOT EXISTS `annuaire` (
  `idannuaire` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `tel` varchar(150) NOT NULL,
  PRIMARY KEY (`idannuaire`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`idannuaire`, `nom`, `tel`) VALUES
(13, 'fjifjfk', '56989050'),
(14, 'Gohou Michel', '4452');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
