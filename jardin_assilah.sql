-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 09 déc. 2021 à 23:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jardin_assilah`
--

-- --------------------------------------------------------

--
-- Structure de la table `anne`
--

CREATE TABLE `anne` (
  `id_anne` int(11) NOT NULL,
  `anne_debu` date NOT NULL,
  `anne_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `anne`
--

INSERT INTO `anne` (`id_anne`, `anne_debu`, `anne_fin`) VALUES
(2, '2020-08-01', '2021-07-31');

-- --------------------------------------------------------

--
-- Structure de la table `appartament`
--

CREATE TABLE `appartament` (
  `id_appartament` int(11) NOT NULL,
  `nom_appartament` float NOT NULL,
  `cout_par_mois` float NOT NULL,
  `id_batiment` int(11) NOT NULL,
  `id_clinet` int(11) NOT NULL,
  `rest` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appartament`
--

INSERT INTO `appartament` (`id_appartament`, `nom_appartament`, `cout_par_mois`, `id_batiment`, `id_clinet`, `rest`) VALUES
(1, 0.1, 605.55, 1, 1, 0),
(2, 0.2, 452.03, 1, 2, 0),
(3, 0.3, 631.13, 1, 0, 0),
(4, 1.4, 452.03, 1, 0, 0),
(5, 1.5, 631.13, 1, 0, 0),
(8, 1.6, 452.03, 1, 0, 0),
(9, 2.7, 631.13, 1, 0, 0),
(10, 0.1, 631.13, 2, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id_batiment` int(11) NOT NULL,
  `nom_batiment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`id_batiment`, `nom_batiment`) VALUES
(1, 'B11'),
(2, 'B12'),
(3, 'V'),
(4, 'Vj');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mot_de_passe` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `date_enter` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `mot_de_passe`, `telephone`, `date_enter`) VALUES
(1, 'zahmidi', 'abderahman', 'abderahmanzahmidi@gmail.com', '$2y$10$WQ7pNV.Sl4iBvdHhxtiWmOTmGFd01gDro0X6GWBrzkfB3HP4VNP3m', '0618181155', '2020-12-09'),
(2, 'zahmidi1', 'abderahman1', 'abderahman@gmail.com', '$2y$10$WQ7pNV.Sl4iBvdHhxtiWmOTmGFd01gDro0X6GWBrzkfB3HP4VNP3m', '0618181155', '2020-03-09');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` int(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `telefone`, `message`, `date`) VALUES
(3, 'zahmidi', 'abderahmanzahmidi@gmail.com', 618181155, 'helo.  ana. abderahman zahmidi', '2021-09-27'),
(4, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'heloooo', '2021-11-13'),
(5, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'heloOOOgggh', '2021-11-13'),
(6, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'hghghg', '2021-11-13'),
(7, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'hghghg', '2021-11-13'),
(8, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'ghghdfdf', '2021-11-13'),
(9, 'zahmidi', 'zahmidi@gmail.com', 618181155, 'helooooo', '2021-11-13'),
(18, 'zahmidi', 'abderahmanzahmidi@gmail.com', 618181155, 'jnvdviudfvndfv', '2021-12-08');

-- --------------------------------------------------------

--
-- Structure de la table `paiment`
--

CREATE TABLE `paiment` (
  `id_paiment` int(11) NOT NULL,
  `paiment` float NOT NULL,
  `date_paiment` date NOT NULL,
  `status` varchar(250) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_modif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paiment`
--

INSERT INTO `paiment` (`id_paiment`, `paiment`, `date_paiment`, `status`, `id_client`, `date_modif`) VALUES
(1, 5000, '2021-11-23', 'Quache', 43, '2021-11-22'),
(2, 5000, '2021-11-17', 'Quache', 43, '2021-11-22'),
(3, 5000, '2021-11-23', 'Quache', 43, '2021-11-22'),
(4, 600, '2021-12-10', 'verment', 43, '2021-11-24'),
(5, 5000, '2021-12-18', 'Quache', 42, '2021-11-24'),
(6, 9000, '2021-12-03', 'verment', 43, '2021-11-25'),
(7, 7677, '2021-12-17', 'cheque 34563654', 42, '2021-11-25'),
(8, 8888, '2021-12-17', 'cheque N: 889896897', 42, '2021-11-25'),
(9, 3333, '2021-12-10', 'cheque N: 34433442', 28, '2021-11-25'),
(10, 5000, '2021-12-26', 'verment', 43, '2021-11-25'),
(11, 8000, '2021-12-15', 'Quache', 43, '2021-11-25'),
(12, 7000, '2021-12-02', 'cheque N: 888989898', 1, '2021-12-06'),
(13, 55000, '2021-12-17', 'verment', 2, '2021-12-06'),
(14, 6000, '2021-12-23', 'verment', 1, '2021-12-06'),
(15, 5654, '2021-12-08', 'verment', 1, '2021-12-09'),
(16, 45345, '2021-12-08', 'cheque N: 435355454', 1, '2021-12-09'),
(17, 45355, '2021-12-09', 'cheque N: 444444', 1, '2021-12-09'),
(18, 5000, '2021-12-07', 'verment', 2, '2021-12-09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `paswored` varchar(200) NOT NULL,
  `rool` varchar(15) NOT NULL,
  `naissance` varchar(11) NOT NULL,
  `pays` varchar(10) NOT NULL,
  `ville` varchar(10) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `status`, `email`, `telephone`, `paswored`, `rool`, `naissance`, `pays`, `ville`, `Adresse`, `is_admin`) VALUES
(1, 'ZAHMIDI', 'RADIYA', 1, 'zahmidi@gmail.com', '0618181155', '$2y$10$m50lBmJuedwDaL7e9vNDGeQvY/lr6nuKJOEXpWnAqjy5tWa4LqdKS', 'Administratrice', '24-03-1986', 'maroc', 'assilah', 'jardin de assilah C2 1.3', 0),
(6, 'LEHYEN', 'MALIKA', 1, 'MALIKA@gmail.com', '0618181155', '$2y$10$WQ7pNV.Sl4iBvdHhxtiWmOTmGFd01gDro0X6GWBrzkfB3HP4VNP3m', 'Manager', '', '', '', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anne`
--
ALTER TABLE `anne`
  ADD PRIMARY KEY (`id_anne`);

--
-- Index pour la table `appartament`
--
ALTER TABLE `appartament`
  ADD PRIMARY KEY (`id_appartament`);

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id_batiment`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD PRIMARY KEY (`id_paiment`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anne`
--
ALTER TABLE `anne`
  MODIFY `id_anne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `appartament`
--
ALTER TABLE `appartament`
  MODIFY `id_appartament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id_batiment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `paiment`
--
ALTER TABLE `paiment`
  MODIFY `id_paiment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
