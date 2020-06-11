-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 juin 2020 à 10:25
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini_projet_quizz_sa`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `id_question` int(11) NOT NULL,
  `id_réponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `nombre_de_question`
--

CREATE TABLE `nombre_de_question` (
  `id_nbr_question` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `énoncé` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `réponses` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `répondre`
--

CREATE TABLE `répondre` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `réponse`
--

CREATE TABLE `réponse` (
  `id_réponse` int(11) NOT NULL,
  `réponse_vraie` varchar(255) NOT NULL,
  `réponse_fausse` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `profil`, `login`, `password`, `photo`, `score`) VALUES
(1, 'OUSSEYNOU', 'DIOP', 'admin', 'weuzy', 'weuzy', 'weuzy', 0),
(2, 'diop', 'lepetit', 'admin', 'admin', 'admin', 'fall', 0),
(3, 'well', 'done', 'joueur', 'joueur', 'joueur', 'poid', 329),
(4, 'CHEIKH', 'TIDIANE', 'joueur', 'tijana', 'tijana', '', 150),
(5, 'WEUZY', 'Diop', 'joueur', 'weuz', 'weuz', '', 456),
(6, 'weuthie', 'jr', 'joueur', 'weuthie', 'weuthie', '', 247),
(7, 'serigne fallou ', 'mbacké niang', 'joueur', 'galass', 'galass', '', 789),
(8, 'fallou', 'mbaye', 'joueur', 'kou', 'kou', '', 345),
(9, 'babacar', 'tine', 'joueur', 'babs', 'babs', '', 122),
(10, 'khady', 'wade', 'joueur', 'dykha', 'dykha', '', 500),
(11, 'ibrahima', 'diop', 'joueur', 'vieux', 'vieux', '', 45),
(12, 'aminata', 'sall', 'joueur', 'maman', 'maman', '', 1000),
(13, 'penda', 'diallo', 'joueur', 'peindita', 'peindita', '', 0),
(14, 'maodo', 'diop', 'joueur', 'maodo', 'maodo', '', 0),
(15, 'oumar', 'camara', 'joueur', 'master', 'master', '', 450);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD KEY `id_réponse` (`id_réponse`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `nombre_de_question`
--
ALTER TABLE `nombre_de_question`
  ADD PRIMARY KEY (`id_nbr_question`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `répondre`
--
ALTER TABLE `répondre`
  ADD KEY `id_question` (`id`),
  ADD KEY `id_réponse` (`id_question`);

--
-- Index pour la table `réponse`
--
ALTER TABLE `réponse`
  ADD PRIMARY KEY (`id_réponse`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nombre_de_question`
--
ALTER TABLE `nombre_de_question`
  MODIFY `id_nbr_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `réponse`
--
ALTER TABLE `réponse`
  MODIFY `id_réponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
