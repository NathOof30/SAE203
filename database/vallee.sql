-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 01 avr. 2025 à 08:15
-- Version du serveur : 8.1.0
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `MY_DATABASE`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id`, `email`, `nom`, `mdp`) VALUES
(1, 'test@gmail.com', 'test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'admin', 'admin', '9cf95dacd226dcf43da376cdb6cbba7035218921');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `idRepas` int NOT NULL,
  `idPlat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `idRepas`, `idPlat`) VALUES
(1, 17, 13),
(2, 11, 14),
(3, 8, 7),
(4, 10, 5),
(5, 21, 26),
(6, 12, 12),
(7, 22, 24),
(8, 22, 25),
(10, 23, 5),
(11, 24, 14),
(12, 24, 11),
(13, 25, 29),
(14, 25, 16),
(15, 21, 4),
(16, 11, 18),
(17, 8, 27),
(18, 12, 32),
(19, 10, 9),
(20, 26, 5),
(21, 26, 7),
(22, 27, 5),
(23, 27, 17),
(24, 28, 3),
(25, 28, 26),
(26, 29, 29),
(27, 29, 9),
(29, 30, 15),
(32, 32, 5),
(33, 32, 7),
(34, 33, 23),
(35, 33, 27),
(37, 23, 12),
(40, 31, 9),
(42, 31, 13),
(44, 30, 19),
(45, 34, 6),
(46, 34, 10),
(47, 35, 35),
(48, 35, 3),
(49, 36, 2),
(50, 36, 14),
(51, 37, 11),
(52, 37, 13),
(53, 38, 18),
(54, 38, 30),
(55, 39, 4),
(56, 39, 8),
(57, 40, 20),
(58, 41, 21),
(59, 40, 25),
(60, 41, 28),
(61, 42, 31),
(62, 42, 34),
(63, 43, 32),
(64, 43, 7),
(65, 44, 20),
(66, 44, 27),
(67, 45, 5),
(68, 45, 26),
(69, 46, 18),
(70, 46, 23);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `description`, `image`) VALUES
(1, 'Artichauts farcis aux céréales, légumes et herbes', 'photos/Artichauts-farcis-aux-cereales-legumes-et-herbes.jpg'),
(2, 'Blanquette d\'agneau de lait au piment d\'Espelette', 'photos/Blanquette-d-agneau-de-lait-au-piment-d-Espelette.jpg'),
(3, 'Blanquette de légumes verts', 'photos/Blanquette-de-legumes-verts.jpg'),
(4, 'Blanquette de veau sauce émulsionnée à la verveine', 'photos/Blanquette-de-veau-sauce-emulsionnee-a-la-verveine.jpg'),
(5, 'Boeuf bourguignon', 'photos/Boeuf-bourguignon.jpg'),
(6, 'Carré d\'agneau à l\'ail et asperges rôties', 'photos/Carre-d-agneau-a-l-ail-et-asperges-roties.jpg'),
(7, 'Colombo de veau aux asperges vertes et épinards', 'photos/Colombo-de-veau-aux-asperges-vertes-et-epinards.jpg'),
(8, 'Côtelettes d\'agneau et pesto de pistaches', 'photos/Cotelettes-d-agneau-et-pesto-de-pistaches.jpg'),
(9, 'Dorades emmaillotées de poireau et herbes', 'photos/Dorade-emmaillotee-de-poireau-et-herbes.jpg'),
(10, 'Dorade farcie aux petits légumes, caramel de citron', 'photos/Dorade-farcie-aux-petits-legumes-caramel-de-citron.jpg'),
(11, 'Esprit bouillabaisse aux trois poissons', 'photos/Esprit-bouillabaisse-aux-trois-poissons.jpg'),
(12, 'Gigot d\'agneau de sept heures aux épices et légumes primeurs glacés', 'photos/Gigot-d-agneau-de-sept-heures-aux-epices-et-legumes-primeurs-glaces.jpg'),
(13, 'Lasagnes aux épinards et champignons', 'photos/Lasagnes-aux-epinards-et-champignons.jpg'),
(14, 'Osso buco et gremolata', 'photos/Osso-bucco-et-gremolata.jpg'),
(15, 'Penne alla genovese au boeuf', 'photos/Penne-alla-genovese-au-boeuf.jpg'),
(16, 'Pie printanière au poulet et légumes', 'photos/Pie-printaniere-au-poulet-et-legumes.jpg'),
(17, 'Pithiviers de carottes au cumin', 'photos/Pithiviers-de-carottes-au-cumin.jpg'),
(18, 'Poulet à la rhubarbe', 'photos/Poulet-a-la-rhubarbe.jpg'),
(19, 'Poulet au beurre d\'herbes et navets au gingembre', 'photos/Poulet-au-beurre-d-herbes-et-navets-au-gingembre.jpg'),
(20, 'Quiche à la mâche et à la menthe, salade au pamplemousse', 'photos/Quiche-a-la-mache-et-a-la-menthe-salade-au-pamplemousse.jpg'),
(21, 'Quiche à la ricotta et aux petits légumes de printemps, pâte brisée au thym', 'photos/Quiche-a-la-ricotta-et-aux-petits-legumes-de-printemps-pate-brisee-au-thym.jpg'),
(22, 'Quiche ricotta, petits pois, lardons', 'photos/Quiche-ricotta-petits-pois-lardons.jpg'),
(23, 'Ravioles de petits pois à la ricota', 'photos/Ravioles-de-petits-pois-a-la-ricotta.jpg'),
(24, 'Rigatoni culatello e piselli', 'photos/Rigatoni-culatello-e-piselli.jpg'),
(25, 'Risotto aux asperges vertes', 'photos/Risotto-aux-asperges-vertes.jpg'),
(26, 'Risotto de printemps', 'photos/Risotto-de-printemps.jpg'),
(27, 'Rôti de porc au thym et grenailles', 'photos/Roti-de-porc-au-thym-et-grenailles.jpg'),
(28, 'Sauté de porc aux carottes et aux oignons', 'photos/Saute-de-veau-aux-carottes-et-aux-oignons.jpg'),
(29, 'Spaghetti à la tomate, aux asperges et à l\'ail confit', 'photos/Spaghetti-a-la-tomate-aux-asperges-et-a-l-ail-confit.jpg'),
(30, 'Tajine de lotte safranée et fèves', 'photos/Tajine-de-lotte-safranee-et-feves.jpg'),
(31, 'Tarte à la ricotta et aux légumes nouveaux', 'photos/Tarte-a-la-ricotta-et-aux-legumes-nouveaux.jpg'),
(32, 'Tarte feta et herbes fraîches', 'photos/Tarte-feta-et-herbes-fraiches.jpg'),
(33, 'Tarte fine aux petits légumes de printemps', 'photos/Tarte-fine-aux-petits-legumes-de-printemps.jpg'),
(34, 'Trottole al ragu bianco, veau, citron et sauge', 'photos/Trottole-al-ragu-bianco-veau-citron-et-sauge.jpg'),
(35, 'Truite au four, méli-mélo de légumes', 'photos/Truite-au-four-meli-melo-de-legumes.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE `repas` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `repas`
--

INSERT INTO `repas` (`id`, `date`, `titre`) VALUES
(8, '2025-03-26', 'Mercredi 26'),
(10, '2025-03-28', 'Vendredi 28'),
(11, '2025-03-25', 'Mardi 25'),
(12, '2025-03-27', 'Jeudi 27'),
(17, '2025-03-04', 'Mardi 4'),
(21, '2025-03-24', 'Lundi 24'),
(22, '2025-03-31', 'Lundi 31'),
(23, '2025-04-01', 'Mardi 1'),
(24, '2025-04-02', 'Mercredi 2'),
(25, '2025-04-03', 'Jeudi 3'),
(26, '2025-04-04', 'Vendredi 4'),
(27, '2025-04-07', 'Lundi 7'),
(28, '2025-04-08', 'Mardi 8'),
(29, '2025-04-09', 'Mercredi 9'),
(30, '2025-04-10', 'Jeudi 10'),
(31, '2025-04-11', 'Vendredi 11'),
(32, '2025-04-14', 'Lundi 14'),
(33, '2025-04-15', 'Mardi 15'),
(34, '2025-04-16', 'Mercredi 16'),
(35, '2025-04-17', 'Jeudi 17'),
(36, '2025-04-18', 'Vendredi 18'),
(37, '2025-04-21', 'Lundi 21'),
(38, '2025-04-22', 'Mardi 22'),
(39, '2025-04-23', 'Mercredi 23'),
(40, '2025-04-24', 'Jeudi 24'),
(41, '2025-04-25', 'Vendredi 25'),
(42, '2025-04-28', 'Lundi 28'),
(43, '2025-04-29', 'Mardi 29'),
(44, '2025-04-30', 'Mercredi 30'),
(45, '2025-05-01', 'Jeudi 1'),
(46, '2025-05-02', 'Vendredi 2');

-- --------------------------------------------------------

--
-- Structure de la table `selection`
--

CREATE TABLE `selection` (
  `idAdherent` int NOT NULL,
  `idMenu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `selection`
--

INSERT INTO `selection` (`idAdherent`, `idMenu`) VALUES
(1, 7),
(1, 12),
(1, 14),
(1, 21),
(1, 22),
(1, 24),
(1, 29),
(1, 32),
(1, 34),
(1, 37),
(1, 42),
(1, 46),
(1, 50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPlat` (`idPlat`),
  ADD KEY `idRepas` (`idRepas`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Index pour la table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`idAdherent`,`idMenu`),
  ADD KEY `idAdherent` (`idAdherent`),
  ADD KEY `idMenu` (`idMenu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `repas`
--
ALTER TABLE `repas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`idPlat`) REFERENCES `plat` (`id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`idRepas`) REFERENCES `repas` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `selection_ibfk_1` FOREIGN KEY (`idAdherent`) REFERENCES `adherent` (`id`),
  ADD CONSTRAINT `selection_ibfk_4` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
