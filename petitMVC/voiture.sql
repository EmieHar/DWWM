-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 jan. 2023 à 17:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `concession`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `id_marque_s_appelle` int(11) NOT NULL,
  `id_boite_vitesse_possede` int(11) NOT NULL,
  `id_energie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `id_marque_s_appelle`, `id_boite_vitesse_possede`, `id_energie`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 2, 1),
(4, 1, 1, 2),
(5, 1, 1, 5),
(6, 2, 2, 1),
(7, 2, 2, 2),
(8, 2, 2, 1),
(9, 3, 2, 1),
(10, 3, 2, 1),
(11, 3, 2, 2),
(12, 3, 2, 4),
(13, 3, 2, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voiture_marque_FK` (`id_marque_s_appelle`),
  ADD KEY `voiture_boite_vitesse0_FK` (`id_boite_vitesse_possede`),
  ADD KEY `voiture_energie1_FK` (`id_energie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_boite_vitesse0_FK` FOREIGN KEY (`id_boite_vitesse_possede`) REFERENCES `boite_vitesse` (`id`),
  ADD CONSTRAINT `voiture_energie1_FK` FOREIGN KEY (`id_energie`) REFERENCES `energie` (`id`),
  ADD CONSTRAINT `voiture_marque_FK` FOREIGN KEY (`id_marque_s_appelle`) REFERENCES `marque` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
