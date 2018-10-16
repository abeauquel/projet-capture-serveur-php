-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 15 oct. 2018 à 16:24
-- Version du serveur :  5.7.23
-- Version de PHP :  7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `station_meteo`
--

-- --------------------------------------------------------

--
-- Structure de la table `humidites`
--

CREATE TABLE `humidites` (
  `id` int(11) NOT NULL,
  `valeur` double NOT NULL,
  `date` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `humidites`
--

INSERT INTO `humidites` (`id`, `valeur`, `date`) VALUES
(4, 89, 1534375121),
(5, 55, 1155683921);

-- --------------------------------------------------------

--
-- Structure de la table `temperatures`
--

CREATE TABLE `temperatures` (
  `id` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `date` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temperatures`
--

INSERT INTO `temperatures` (`id`, `valeur`, `date`) VALUES
(4, 13, 1539645761),
(5, 16, 1523834561);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `humidites`
--
ALTER TABLE `humidites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temperatures`
--
ALTER TABLE `temperatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `humidites`
--
ALTER TABLE `humidites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `temperatures`
--
ALTER TABLE `temperatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
