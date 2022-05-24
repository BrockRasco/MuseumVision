-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 24 mai 2022 à 12:01
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `musumvision`
--

-- --------------------------------------------------------

--
-- Structure de la table `exposition`
--

CREATE TABLE `exposition` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tarifAdulte` decimal(10,0) NOT NULL,
  `tarifEnfant` decimal(10,0) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `permanent` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Déchargement des données de la table `exposition`
--

INSERT INTO `exposition` (`id`, `nom`, `tarifAdulte`, `tarifEnfant`, `active`, `permanent`) VALUES
(1, 'Les mystere de tout en carton', '15', '5', 1, 1),
(2, 'le sens de la vie', '42', '42', 1, 0),
(3, 'Les Viking sont superieur au anglois', '25', '10', 1, 0),
(4, 'Comment Petez des nuque a coup de bouclier', '8', '4', 1, 0),
(5, 'jm', '0', '215', 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id` int(11) NOT NULL,
  `nbAdulte` int(11) NOT NULL,
  `nbEnfant` int(11) NOT NULL,
  `dateHeureEntree` date NOT NULL,
  `dateHeureSortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visiteexpo`
--

CREATE TABLE `visiteexpo` (
  `idVisite` int(11) NOT NULL,
  `idExpo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exposition`
--
ALTER TABLE `exposition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteexpo`
--
ALTER TABLE `visiteexpo`
  ADD PRIMARY KEY (`idVisite`,`idExpo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exposition`
--
ALTER TABLE `exposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
