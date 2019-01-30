-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 30 jan. 2019 à 14:13
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zalandafpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID_article` int(3) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `taille` varchar(10) DEFAULT NULL,
  `prix` float(4,2) DEFAULT NULL,
  `lien_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID_article`, `nom`, `genre`, `type`, `couleur`, `taille`, `prix`, `lien_image`) VALUES
(1, 'LA REDOUTE COLLECTIONS Pantalon taille haute', 'Femme', 'pantalon', 'Beige', NULL, 14.00, 'articles_img/Femme/Bas/laredoutepantalonbeige.jpg'),
(2, 'THEO col V', 'Homme', 'Tee shirt', 'Blanc', NULL, 5.00, 'articles_img/Homme/Haut/theocolvblanc.jpg'),
(3, 'PEPE JEANS col V', 'Femme', 'Blouse', 'Imprimé', NULL, 42.50, 'articles_img/Femme/Haut/pepejeanscovvimprimé.jpg'),
(4, 'TOMMY JEANS', 'Homme', 'Chemise', 'Bleu', NULL, 43.95, 'articles_img/Homme/Haut/tommyjeansbleu.jpg'),
(5, 'LA REDOUTE COLLECTIONS Escarpin', 'Femme', 'Escarpin', 'Gris', NULL, 34.99, 'articles_img/Femme/Accessoires/laredoutecollectionsescarpingris.jpg'),
(6, 'CLJ CHARLES LEJEUNE la rochelle, Microfibre Uni', 'Homme', 'Cravate', 'Blue', NULL, 11.39, 'articles_img/Homme/Accessoires/cljcharleslejeunecravatebleu.jpg'),
(7, 'ESPRIT bandoulière IZZY', 'Femme', 'Sac', 'Noir', NULL, 41.99, 'articles_img/Femme/Accessoires/espritbandoulliereizzysacnoir.jpg'),
(8, 'LEVIS Boots cuir Logan Ca', 'Homme', 'Chaussure', 'Marron Clair', NULL, 91.00, 'articles_img/Homme/Accessoires/levisbootscuirmarronclair.jpg'),
(9, 'MADEMOISELLE R manches évasées', 'Femme', 'Robe', 'Orange', NULL, 12.00, 'articles_img/Femme/Haut/mademoisellerorange.jpg'),
(10, 'DOCKERS chino skinny tapered SMART 360 FLEX', 'Homme', 'Pantalon', 'Rouge', NULL, 49.50, 'articles_img/Homme/Bas/dockerschinorouge.jpg'),
(11, 'SUNCOO droit rayé JAROD', 'Femme', 'Pantalon', 'Noir', NULL, 42.50, 'articles_img/Femme/Bas/suncoodroitrayénoir.jpg'),
(12, 'LA REDOUTE COLLECTIONS ACHILLE cintrée', 'Homme', 'Veste', 'Bleu Marine', NULL, 69.99, 'articles_img/Homme/Haut/laredoutecollectionsachillebleumarine.jpg'),
(13, 'LOVEDROBE mi-longue', 'Femme', 'Robe', 'Noir', NULL, 34.00, 'articles_img/Femme/Haut/robemidinoir.jpg'),
(14, 'CALVIN KLEIN', 'Homme', 'Pantalon', 'Noir', NULL, 40.00, 'articles_img/Homme/Bas/calvinkleinpantalonnoir.jpg'),
(15, 'LA REDOUDE COLLECTIONS Combinaison extra chaude', 'Femme', 'Pyjama', 'Beige Foncé', NULL, 16.00, 'articles_img/Femme/Haut/laredoutecollectionspyjamabeigefoncé.jpg'),
(16, 'CASIO Cuir MTP-130PL-1AVEF', 'Homme', 'Montre', 'Noir', NULL, 44.90, 'articles_img/Homme/Accessoires/CasiocuirMTP130PL-1AVEFnoir.jpg'),
(17, 'MORGAN analogique bracelet cuir', 'Femme', 'Montre', 'Blanc', NULL, 47.40, 'articles_img/Femme/Accessoires/morgananalogique braceletmontreblanc.jpg'),
(18, 'SCHOTT Tornado ', 'Homme', 'Gilet', 'Bleu Marine', NULL, 54.25, 'articles_img/Homme/Haut/schotttornadobleumarine.jpg'),
(19, 'SCOTTAGE en lyocell', 'Femme', 'Short', 'Bleu Marine', NULL, 12.87, 'articles_img/Femme/Bas/scottageenlyocellbleu.jpg'),
(20, 'BIZZBEE rétro', 'Homme', 'Lunette', 'gris Fantaisie', NULL, 3.99, 'articles_img/Homme/Accessoires/bizzbeerétrogrisfantaisie.jpg'),
(21, 'BIZZBEE Rondes Métal Doré verres colorés', 'Femme', 'Lunette', 'Violet Fantaisie', NULL, 3.99, 'articles_img/Femme/Accessoires/bizzbeerondeslunettevioletfantaisie.jpg'),
(22, 'NIKE Nsw pro futura', 'Homme', 'Casquette', 'Noir', NULL, 16.90, 'articles_img/Homme/Accessoires/nikenswpronoir.jpg'),
(23, 'MANGO  pendentifs combinés ', 'Femme', 'Boucles Oreilles', 'Rouge', NULL, 9.99, 'articles_img/Femme/Accessoires/mangopendentifscombinésrouge.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `ID_client` int(3) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `numRue` int(4) DEFAULT NULL,
  `nomRue` varchar(60) DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `ville` varchar(60) DEFAULT NULL,
  `pays` varchar(60) DEFAULT NULL,
  `mail` varchar(60) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`ID_client`, `nom`, `prenom`, `numRue`, `nomRue`, `CP`, `ville`, `pays`, `mail`, `genre`, `dateNaissance`, `pass`) VALUES
(1, 'monnet', 'Kevin', 14, 'rue des Pavés', 49100, 'Angers', 'france', 'kevin.monnet@gmail.com', 'homme', '2019-01-02', 'coucou'),
(2, 'Plard', 'Madeline', 14, 'rue du Ronceray', 59200, 'roubaix', 'france', 'madeline.plard@gmail.com', 'femme', '1990-10-29', '$2y$10$ydLGeWk.xYn1g0ZRgmrkqOcj4olNKdclHKUSLGrVcYVOluoWnM7Q.'),
(3, 'Camara', 'Saliou', 130, 'rue delpeche', 80000, 'amiens', 'France', 'moozb49@gmail.com', 'HOMME', '1984-09-15', '$2y$10$9Us5oyYBTBEQXDVGJ9cB9uBa4IQM5WiIuJ6swWVp8eCqRDmvUJnTq'),
(4, 'Lelias', 'dryhsrtgerf', 69, 'rue Prépigeon', 49000, 'marseille', 'algérie', 'rtgh@zzefz.fr', 'HOMME', '1990-04-21', '$2y$10$fW4nD0TV6VgfIGgtm9ExYuf3jgXKojwYg6KLhbSahNSNMBCfrqI.a'),
(14, 'Bolo', 'Jeremy', 12, 'afpa', 49000, 'angers', 'france', 'jeremybolo@gmail.com', 'HOMME', '1990-02-21', '$2y$10$KIspEWrElQ3dH/pwV3Yzy.S/f/h/S/xdMjEx99CLdXTHnGBhYPgNC'),
(15, 'bidule', 'toto', 7, 'fzefd', 49100, 'zedzd', 'zsdzed', 'toto@gmail.com', 'gzefzef', '2019-01-10', '123456'),
(16, 'Duss', 'Jean-Claude', 14, 'rue des Pré Vallées', 72500, 'Sainte Jamme sur Sarthe', 'France', 'jean-claude@duss.fr', 'HOMME', '1961-05-12', '$2y$10$AXr0C.z0tfAJKLGA87RHpuqV/R5liivVKSWg/pUHLpZkblVAJHZA6'),
(17, 'pote de Carlos', 'justin', 7, 'LA MER NOIRE', 49100, 'ANGERS', 'new yorkais', 'sofoot@caramail.fr', '??', '2019-01-08', '123'),
(18, 'CARREAU', 'Quentin', 5, 'bvl', 49000, 'Angers', 'France', 'quentin@live.fr', 'HOMME', '1993-03-15', '$2y$10$yDdHLzyS6uKh.pjHfXoanez7zaZFDgIh9X3eZDb8uYG8KUO0vUbcm'),
(19, 'MGF', 'Aegidios', 0, 'rue Guillaume LEKEU', 49100, 'Angers', 'France', 'Aegidios.mgf@gmail.com', 'HOMME', '1988-10-03', '$2y$10$d2wljlWQwrpXxm74.Xq8kOu6MdTQhOp3QjDN0j7uF9bjw.yR0yr9W'),
(21, 'monnet', 'kevin', 42, 'rue anatole France', 86530, 'NAINTRE', 'France', 'michel.ezrb@gmail.com', 'HOMME', '1994-05-18', '$2y$10$oFDrnRziQwDwG2RR3f5jtebfkB0iD0AW7UM0ebFOEfDuOXSQ1xelG'),
(22, 'monnet', 'kevin', 42, 'anatole france', 86530, 'naintre', 'france', 'monnet.kevin@hotmail.fr', 'HOMME', '1994-05-18', '$2y$10$kjoUsO32CX3Vgi62dKGaVuPtymg1bn4gyQIEmWc.VWTvP1ZRZdc5i'),
(23, 'lovephp', 'Jonathan', 2, 'zeuifjzeufj i', 75000, 'azeir', 'soe', 'jdsd@jdsd.fr', 'HOMME', '1991-09-18', '$2y$10$SQ4IsbmBN4k5zh3qwtciB.TCPEEPvjV0aQy.kjpmews7qtI7I9BlC');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `ID_commande` int(3) NOT NULL,
  `ID_client` int(3) DEFAULT NULL,
  `ID_article` int(3) DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `prix_commande` float(5,2) DEFAULT NULL,
  `numCarte` int(16) DEFAULT NULL,
  `dateExpi` date DEFAULT NULL,
  `crypto` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`ID_commande`, `ID_client`, `ID_article`, `date_commande`, `prix_commande`, `numCarte`, `dateExpi`, `crypto`) VALUES
(1, 1, 1, '2019-01-23', 29.00, 2147483647, '2019-12-01', 333);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_article`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_client`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`ID_commande`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_article` (`ID_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID_client` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `ID_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `clients` (`ID_client`),
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`ID_article`) REFERENCES `articles` (`ID_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
