-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 nov. 2017 à 14:00
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
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL,
  `id commande` int(11) NOT NULL,
  `statut_ready` tinyint(1) NOT NULL,
  `prixtotal` int(11) NOT NULL,
  PRIMARY KEY (`id commande`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Structure de la table `ligne`
--

DROP TABLE IF EXISTS `ligne`;
CREATE TABLE IF NOT EXISTS `ligne` (
  `id commande` int(11) NOT NULL,
  `ProduitID` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`ProduitID`),
  KEY `id commande` (`id commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Description` text NOT NULL,
  PRIMARY KEY (`ProduitID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`Produit`, `ProduitID`, `Marque`, `Prix`, `Image`, `ProduitNom`, `Description`) VALUES
('Montre', 1, 'Omega', 78300, 'montre1.jpg', 'Chronographe à gousset \nolympique Omega 1932 \nà rattrapante', 'Boîtier: Or jaune Diamètre du boîtier: 70 mm Couleur du cadran: Blanc Verre: Verre saphir résistant aux rayures et antireflet'),
('Montre', 2, 'Cartier',11100, 'montre2.jpg', 'Montre Tortue Cartier', "Montre Tortue petit modèle, mouvement mécanique Manufacture à remontage manuel, calibre 8970 MC. Boîte en or rose 18 carats, couronne octogonale ornée d'un saphir facetté, cadran guilloché argenté avec effet soleil, aiguilles en forme de glaive en acier bleui, bracelet en alligator marron, boucle ardillon en or rose 18 carats"),
('Montre', 3, 'Diesel', 279, 'montre3.jpg', 'Mega Chief Diesel',  'Boîtier et bracelet en acier inoxydable avec plaquage noir, cadran doré, chrono, 51 mm'),
('Montre', 4, 'Hugo Boss', 249, 'montre4.jpg', 'Horizon',  'Montre BOSS HORIZON Homme avec Boitier Rond 40 mm et Bracelet Cuir Noir'),
('Montre', 5, 'Rolex', 89000, 'montre5.jpg', 'Rolex Daytona',  "CADRAN : Rare cadran pavé de diamants avec index saphir bleu. BOÎTIER : Or blanc 18k avec boucle déployante en or blanc. Lunette avec diamants d'origine.  BRACELET : Cuir gris bleuté avec son fermoir d'origine flip lock en or blanc."),
('Montre', 6, 'Rolex', 62000, 'montre6.jpg', 'Rolex Pré Daytona',  "CADRAN : Blanc impeccable. Index en forme de flèche avec aiguilles dauphines. BOÎTIER : Acier en excellent état, peu poli avec lunette lisse. BRACELET : Oyster riveté.");
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id`) REFERENCES `identification` (`id`);

--
-- Contraintes pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD CONSTRAINT `ligne_ibfk_1` FOREIGN KEY (`id commande`) REFERENCES `commande` (`id commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
