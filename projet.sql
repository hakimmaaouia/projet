-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 16 avr. 2019 à 00:15
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `ftype` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `dispo` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `cache` varchar(50) NOT NULL,
  `pra` varchar(50) NOT NULL,
  `Filiere` varchar(50) NOT NULL,
  `annee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Semester` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Typed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demo`
--

INSERT INTO `demo` (`id`, `fid`, `fname`, `ftype`, `desc`, `dispo`, `exp`, `cache`, `pra`, `Filiere`, `annee`, `Semester`, `Typed`) VALUES
(1, 22, 'ACTIVITE D2-1.odt', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'LFT', '1', 'premier semester', 'Examen'),
(1, 21, 'steam_api1.txt', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'LFT', '1', 'premier semester', 'DS'),
(1, 20, 'steam_api1.txt', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'LFT', '1', 'premier semester', 'DS'),
(1, 19, 'CPY123.txt', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'LART', '1', 'choisir une semester', 'Examen'),
(1, 29, 'CPY2.txt', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'LFSI', '2', 'deuxiÃ¨me semester', 'DS');

-- --------------------------------------------------------

--
-- Structure de la table `identi`
--

CREATE TABLE `identi` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `identi`
--

INSERT INTO `identi` (`id`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin'),
(4, 'admin1', 'admin1', 'admin@admin.fr', 'admin1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `identi`
--
ALTER TABLE `identi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demo`
--
ALTER TABLE `demo`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `identi`
--
ALTER TABLE `identi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
