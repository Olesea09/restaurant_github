-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 avr. 2024 à 08:58
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

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
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_r` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `jour` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `nb_personne` int DEFAULT NULL,
  `num_table` int NOT NULL,
  `nb_heures` int NOT NULL,
  PRIMARY KEY (`id_r`),
  UNIQUE KEY `id_r` (`id_r`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `nom`, `prenom`, `jour`, `heure`, `nb_personne`, `num_table`, `nb_heures`) VALUES
(78, 'BACHA', 'Hiba', '2024-01-25', '10:00:00', 5, 115,1),
(77, 'BACHA', 'Omar', '2024-01-27', '10:00:00', 6, 118,3),
(74, 'POPA', 'Olesea', '2024-01-31', '10:00:00', 4, 115,2),
(88, 'PETRACHI', 'Victor', '2024-02-10', '13:00:00', 4, 116,1),
(76, 'SAHRAOUI', 'Antissar', '2024-01-26', '10:00:00', 4, 115,1),
(86, 'BACHA', 'Meriem', '2024-01-26', '10:00:00', 5, 118,1),
(80, 'BACHA', 'Nazim', '2024-01-25', '10:00:00', 4, 116,1),
(87, 'POPA', 'Olesea', '2024-01-28', '12:00:00', 5, 117,1),
(83, 'BACHA', 'Sisi', '2024-01-27', '10:00:00', 5, 116,1),
(89, 'THUREAU', 'Enzo', '2024-02-29', '20:05:00', 2, 115,2),
(90, 'BEN SLAMA ', 'Rafia', '2024-04-22', '10:00:00', 2, 116,3),
(91, 'GUIE', 'Adrien', '2024-04-05', '12:00:00', 2, 116,1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `email` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mdp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE IF EXISTS `liste_attente`;
CREATE TABLE IF NOT EXISTS `liste_attente` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_reserv DATE NOT NULL,
    heure_reserv TIME NOT NULL
);
