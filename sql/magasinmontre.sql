-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 nov. 2017 à 15:23
-- Version du serveur :  5.7.10-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `magasinmontre`
--

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

DROP TABLE IF EXISTS `identification`;
CREATE TABLE IF NOT EXISTS `identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`id`, `pseudo`, `password`) VALUES
(1, 'florian', 'matte');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `Produit` varchar(255) NOT NULL,
  `ProduitID` int(100) NOT NULL AUTO_INCREMENT,
  `Marque` varchar(255) NOT NULL,
  `Prix` int(255) NOT NULL,
  `Image` text NOT NULL,
  `ProduitNom` varchar(100) NOT NULL,
  PRIMARY KEY (`ProduitID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`Produit`, `ProduitID`, `Marque`, `Prix`, `Image`, `ProduitNom`) VALUES
('Montre', 1, 'Rolex', 1500, 'montre1.jpg', 'Montre_RO_UD44'),
('Montre', 2, 'Rolex', 800, 'montre2.jpg', 'Montre_RO-UF12'),
('Montre', 3, 'Omega', 399, 'montre3.jpg', 'Montre_OM_85'),
('Montre', 4, 'IWC', 149, 'montre4.jpg', 'Montre_IW_FG58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
