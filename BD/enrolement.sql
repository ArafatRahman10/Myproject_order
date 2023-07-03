-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 oct. 2022 à 06:21
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_card`
--

-- --------------------------------------------------------

--
-- Structure de la table `enrolement`
--

CREATE TABLE `enrolement` (
  `id` int(11) NOT NULL,
  `poste_identification` varchar(100) DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `nom_citoyen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prenom_citoyen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sexe` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `profession_citoyen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `lieu_naissance` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `departement` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `teint` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `taille` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `groupe_ethnique` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `nom_pere` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `profession_pere` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nom_mere` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `profession_mere` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image_citoyen` text DEFAULT NULL,
  `image_certificat_nationalite` text DEFAULT NULL,
  `image_acte_naissance` text DEFAULT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cle` int(11) NOT NULL,
  `confirme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enrolement`
--

INSERT INTO `enrolement` (`id`, `poste_identification`, `email`, `telephone`, `nom_citoyen`, `prenom_citoyen`, `sexe`, `profession_citoyen`, `date_naissance`, `lieu_naissance`, `departement`, `teint`, `taille`, `groupe_ethnique`, `nom_pere`, `profession_pere`, `nom_mere`, `profession_mere`, `image_citoyen`, `image_certificat_nationalite`, `image_acte_naissance`, `date_enregistrement`, `cle`, `confirme`) VALUES
(37, 'Commisariat 3eme (Nkoldongo)-CENTRE', 'michel@gmail.com', '677335454', 'ABESSOLO', 'YVANA', 'M', 'ELEVE', '2000-10-13', 'CENTRE', 'Mfoundi', 'NOIR', '1,55cm', 'BETI', 'ATAMAKOA ROBERT', 'COMPTABLE', 'CHRISTINE CAROLLE', 'COIFEUSSE', 'alex-holyoake-361916-unsplash.jpg', 'andre-francois-556751-unsplash.jpg', '2bf93d5bff9682cf859720033f39ddad.jpg', '2022-09-01 13:39:16', 0, 0),
(170, 'Commisariat 19eme (Ahala)-CENTRE', 'gauthierekani@gmail.com', '254334', 'EL HADJ', 'MOHAMED', 'M', 'ETUDIANT', '2000-08-30', 'DOUALA', 'Djérem', 'NOIR', '1,80cm', 'NORDISTE', 'DOUMBOUYA  WALICK', 'COMPTABLE', 'AWAOU KAMILA', 'INFIRMIERE', 'alex-holyoake-361916-unsplash.jpg', 'Destiny_logo__316x316_.ico', 'FB_IMG_16261170378320909.jpg', '2022-10-05 14:47:41', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enrolement`
--
ALTER TABLE `enrolement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enrolement`
--
ALTER TABLE `enrolement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
