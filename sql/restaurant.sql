-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 20 août 2025 à 11:58
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste_attente`
--

CREATE TABLE `liste_attente` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_reserv` date NOT NULL,
  `heure_reserv` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_r` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `jour` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `nb_personne` int(11) DEFAULT NULL,
  `num_table` int(11) NOT NULL,
  `nb_heures` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `nom`, `prenom`, `jour`, `heure`, `nb_personne`, `num_table`, `nb_heures`) VALUES
(78, 'BACHA', 'Hiba', '2024-01-25', '10:00:00', 5, 115, 1),
(77, 'BACHA', 'Omar', '2024-01-27', '10:00:00', 6, 118, 3),
(74, 'POPA', 'Olesea', '2024-01-31', '10:00:00', 4, 115, 2),
(88, 'PETRACHI', 'Victor', '2024-02-10', '13:00:00', 4, 116, 1),
(76, 'SAHRAOUI', 'Antissar', '2024-01-26', '10:00:00', 4, 115, 1),
(86, 'BACHA', 'Meriem', '2024-01-26', '10:00:00', 5, 118, 1),
(80, 'BACHA', 'Nazim', '2024-01-25', '10:00:00', 4, 116, 1),
(87, 'POPA', 'Olesea', '2024-01-28', '12:00:00', 5, 117, 1),
(83, 'BACHA', 'Sisi', '2024-01-27', '10:00:00', 5, 116, 1),
(89, 'THUREAU', 'Enzo', '2024-02-29', '20:05:00', 2, 115, 2),
(90, 'BEN SLAMA ', 'Rafia', '2024-04-22', '10:00:00', 2, 116, 3),
(91, 'GUIE', 'Adrien', '2024-04-05', '12:00:00', 2, 116, 1),
(92, 'BALAN', 'Marcela', '2025-08-18', '12:00:00', 2, 115, 2),
(93, 'BALAN', 'Victoria', '2025-08-18', '12:30:00', 2, 115, 2),
(94, 'BALAN', 'Alexandra', '2025-08-19', '14:30:00', 3, 115, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mdp` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `nom`, `prenom`, `mdp`) VALUES
('hiba@gmail.com', 'POPA', 'Olesea', '$2y$10$6ayEfr1ETX85yNic2w6gs.q'),
('sabrina@gmail.com', 'BACHA', 'Hiba', '$2y$10$kVLX9wNvjbTNAtg/r5MtVOS'),
('nazim@gmail.com', 'BACHA', 'Nazim', '$2y$10$3WBU3lgfPinNviJvKWjcY.W'),
('ben@gmailc.com', 'BEN SLAMA', 'Rafia', '$2y$10$2ghEzRIJu3SlimXjX55oDOH'),
('hibabacha@gmail.com', 'BACHA', 'Nazim', '$2y$10$aI1hacvJDkrsvxseASMw5em'),
('omar@gmail.com', 'BACHA', 'Omar', '$2y$10$Oj94gDKZ7QXVAEz0Wvg24uQ'),
('sabi@gmail.com', 'BACHA', 'Sisi', '$2y$10$/Y8Va/65qUHZrqa04Tedv.E98rzI/ax2FnKrGZodynd'),
('rere@gmail.com', 'RERE', 'Rere', '$2y$10$mwGeWzafeQw4YCkLpI3KCOFfjpqrkiwzBzSeMIBuHYerEESPHcA6W'),
('anti@gmail.com', 'SAH', 'Antissar', '123'),
('ol@gmail.com', 'PR', 'Ol', '000'),
('po@gmail.com', 'PO', 'Ol', '$2y$10$H3S2LAy03S4NnwbobRtXZe6APFipFOX21AuY145CCrVrXksYwNdPu'),
('adrien@gmail.com', 'GUE', 'Adrien', '$2y$10$3XCwMHMB4Wz0yELFU5EkdONyFZpucDUokd.oT.Dk24MEYuWGAVIWu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `liste_attente`
--
ALTER TABLE `liste_attente`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_r`),
  ADD UNIQUE KEY `id_r` (`id_r`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liste_attente`
--
ALTER TABLE `liste_attente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
