-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 14:58
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
  `enonce` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `reponses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `enonce`, `type`, `points`, `reponses`) VALUES
(1, 'Quelle technologie utilisée pour créer une application mobile ?', 'text', 3, 'Pour créer une application mobile, il faut alors utiliser le langage de programmation compatible avec le système d\'exploitation (OS) souhaité'),
(2, 'Le langage JavaScript est un langage ?', 'qcm', 4, 'compilé par le serveur,\r\ncompilé par le navigateur,         interprété par le navigateur'),
(3, 'est-ce que json est un langage de programmation ?', 'qcs', 4, 'oui,                                           non'),
(4, 'D\'où vient le coronavirus ?', 'qcs', 5, 'FRANCE,\r\nCHINE,\r\nUSA'),
(5, 'LES LANGAGES DU WEB ?', 'qcm', 3, 'AJAX,\r\nHTML,\r\nJAVA'),
(6, 'Le langage HTML est un langage :', 'qcs', 2, 'de programmation classique (Pascal,C...),\r\nqui permet de structurer une page Web'),
(7, 'L\'écriture <!-- à conserver --> identifie :', 'qcs', 3, 'la fin du code,\r\nune remarque, un commentaire,\r\nun fichier'),
(8, 'L\'écriture #<strong>Introduction <\\/strong> signifie :', 'qcs', 3, 'mettre en évidence le mot Introduction,\r\nsouligner le mot Introduction,\r\nsurligner le mot Introduction '),
(9, 'Qu\'est-ce qu\'un pourriel ?', 'qcm', 5, 'Un spam,\r\nphoto,\r\ncorbeille'),
(10, 'Pourquoi les filles aiment trop la vie ?', 'text', 3, 'car elle croient que c\'est le seule moyens pour se montrer belle.'),
(11, 'Qui a remporté le ballon d\'or africain en 2019 ?\"', 'qcs', 5, 'mouhamed salah,\r\nsadio mané'),
(12, 'qui a rempoorté plus de league des champions ?', 'qcs', 3, 'CR7,\r\nMESSI'),
(13, 'usain bolt ça te fait penser \\u00e0 quoi ?', 'text', 5, 'le recordman du 100m'),
(14, 'Une Propriété désigne :', 'qcs', 4, 'une fonction,\r\nun élément qui influence une caractéristique d\'un objet,\r\nune méthode'),
(15, ' BILGATES vous faites penser à quoi ?', 'text', 4, 'MICROSOFT');

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

--
-- Déchargement des données de la table `réponse`
--

INSERT INTO `réponse` (`id_réponse`, `réponse_vraie`, `réponse_fausse`, `id_question`) VALUES
(1, 'Pour créer une application mobile, il faut alors utiliser le langage de programmation compatible avec le système d\'exploitation (OS) souhaité', '', 1),
(2, 'interprété par le navigateur', 'compilé par le serveur,\r\ncompilé par le navigateur, ', 2),
(3, 'NON', 'OUI', 3),
(4, 'CHINE', 'FRANCE,\r\nUSA', 4),
(5, 'HTML,\r\nJAVA', 'AJAX', 5),
(6, 'qui permet de structurer une page Web', 'de programmation classique (Pascal,C...)', 6),
(7, 'une remarque, un commentaire', 'la fin du code,\r\nun fichier', 7),
(8, 'mettre en évidence le mot Introduction', 'souligner le mot Introduction,\r\nsurligner le mot Introduction', 8),
(9, 'Un spam', 'photo,\r\ncorbeille', 9),
(10, 'car elle croient que c\'est le seule moyens pour se montrer belle.', '', 10),
(11, 'sadio mané', 'mouhamed salah', 11),
(12, 'CR7', 'MESSI', 12),
(13, 'le recordman du 100m', '', 13),
(14, 'un élément qui influence une caractéristique d\'un objet,\r\nune méthode', 'une fonction', 14),
(15, 'MICROSOFT', '', 15);

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
(1, 'OUSSEYNOU', 'DIOP', 'admin', 'weuzy', 'weuzy', 'WEUZY.jpg', 0),
(2, 'diop', 'lepetit', 'admin', 'admin', 'admin', 'fall', 0),
(3, 'well', 'done', 'joueur', 'joueur', 'joueur', 'poid', 329),
(4, 'CHEIKH', 'TIDIANE', 'joueur', 'tijana', 'tijana', 'khalif.jpg', 150),
(5, 'WEUZY', 'Diop', 'joueur', 'weuz', 'weuz', 'OUZIN.jpg', 456),
(6, 'PAPE THIERNO', 'NDIAYE', 'joueur', 'birahim', 'birahim', 'birahim.jpg', 247),
(7, 'GALASS', 'Niang', 'joueur', 'galass', 'galass', 'galass.jpg', 789),
(8, 'abacar', 'diouf', 'joueur', 'kou', 'kou', 'mbaye.jpg', 345),
(9, 'babacar', 'tine', 'joueur', 'babs', 'babs', 'best.jpg', 122),
(10, 'khady', 'wade', 'joueur', 'dykha', 'dykha', 'ndeye.jpg', 500),
(11, 'ibrahima', 'diop', 'joueur', 'vieux', 'vieux', 'diop.jpg', 45),
(12, 'Adama', 'Diouf', 'joueur', 'alo', 'alo', 'alo.jpg', 1000),
(14, 'maodo', 'diop', 'joueur', 'maodo', 'maodo', 'malick.jpg', 456),
(15, 'Ibra', 'Ndiaye', 'joueur', 'ibra', 'ibra', 'ibra.jpg', 450),
(16, 'WEUZ', 'DIOP', 'joueur', 'WEUZ', 'WEUZ', 'weuz', 545),
(17, 'weuthie', 'Diop', 'admin', 'weuthie', 'weuthie', 'weuthie', 0);

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
  ADD PRIMARY KEY (`id_question`);

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
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `réponse`
--
ALTER TABLE `réponse`
  MODIFY `id_réponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
