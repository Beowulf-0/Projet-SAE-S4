-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 28 Janvier 2023 à 09:55
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sondes`
--

-- --------------------------------------------------------

--
-- Structure de la table `sondes`
--

CREATE TABLE `sondes` (
  `IdSonde` int(11) NOT NULL,
  `NomSonde` varchar(60) NOT NULL,
  `PrenomSonde` varchar(60) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Adresse` varchar(200) DEFAULT NULL,
  `CodePostal` int(11) DEFAULT NULL,
  `Ville` varchar(60) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Aliment1` int(11) NOT NULL,
  `Aliment2` int(11) NOT NULL,
  `Aliment3` int(11) NOT NULL,
  `Aliment4` int(11) DEFAULT NULL,
  `Aliment5` int(11) DEFAULT NULL,
  `Aliment6` int(11) DEFAULT NULL,
  `Aliment7` int(11) DEFAULT NULL,
  `Aliment8` int(11) DEFAULT NULL,
  `Aliment9` int(11) DEFAULT NULL,
  `Aliment10` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sondes`
--
ALTER TABLE `sondes`
  ADD PRIMARY KEY (`IdSonde`),
  ADD UNIQUE KEY `Tel` (`Tel`),
  ADD UNIQUE KEY `UC_Sonde` (`NomSonde`,`PrenomSonde`,`DateNaissance`),
  ADD KEY `FK_ID_ALIM1` (`Aliment1`),
  ADD KEY `FK_ID_ALIM2` (`Aliment2`),
  ADD KEY `FK_ID_ALIM3` (`Aliment3`),
  ADD KEY `FK_ID_ALIM4` (`Aliment4`),
  ADD KEY `FK_ID_ALIM5` (`Aliment5`),
  ADD KEY `FK_ID_ALIM6` (`Aliment6`),
  ADD KEY `FK_ID_ALIM7` (`Aliment7`),
  ADD KEY `FK_ID_ALIM8` (`Aliment8`),
  ADD KEY `FK_ID_ALIM9` (`Aliment9`),
  ADD KEY `FK_ID_ALIM10` (`Aliment10`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `sondes`
--
ALTER TABLE `sondes`
  ADD CONSTRAINT `FK_ID_ALIM1` FOREIGN KEY (`Aliment1`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM10` FOREIGN KEY (`Aliment10`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM2` FOREIGN KEY (`Aliment2`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM3` FOREIGN KEY (`Aliment3`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM4` FOREIGN KEY (`Aliment4`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM5` FOREIGN KEY (`Aliment5`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM6` FOREIGN KEY (`Aliment6`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM7` FOREIGN KEY (`Aliment7`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM8` FOREIGN KEY (`Aliment8`) REFERENCES `aliments` (`IdAliment`),
  ADD CONSTRAINT `FK_ID_ALIM9` FOREIGN KEY (`Aliment9`) REFERENCES `aliments` (`IdAliment`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
