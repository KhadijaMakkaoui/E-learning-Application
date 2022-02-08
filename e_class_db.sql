-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 fév. 2022 à 09:15
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_class_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`) VALUES
(1, 'HTML/CSS', 'Front end courses for beguinners'),
(2, 'Bootstrap', 'Front end courses for beguinners'),
(3, 'PHP', 'Back end courses for beguinners'),
(4, 'Tailwind Freamwork', 'Front end courses for beguinners');

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

CREATE TABLE `payment_details` (
  `Name` varchar(50) NOT NULL,
  `schedual` varchar(100) NOT NULL,
  `Bill` int(20) NOT NULL,
  `Amount` float NOT NULL,
  `Balance` float NOT NULL,
  `Date_addmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `payment_details`
--

INSERT INTO `payment_details` (`Name`, `schedual`, `Bill`, `Amount`, `Balance`, `Date_addmission`) VALUES
('Khadija', 'First', 1, 5000, 10000, '2022-02-01'),
('Noura', 'First', 2, 5000, 15000, '2022-02-01'),
('Sami', 'First', 3, 5000, 15000, '2022-02-01'),
('Ahmed', 'First', 4, 5000, 15000, '2022-02-01'),
('Mohammed', 'First', 5, 5000, 15000, '2022-02-01');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `Name` varchar(200) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Enroll_Number` int(10) NOT NULL,
  `Date_addmission` date NOT NULL,
  `img_src` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`Name`, `Email`, `Phone`, `Enroll_Number`, `Date_addmission`, `img_src`) VALUES
('Khadija', 'khadija@email.com', '0623232323', 1, '2022-02-01', 0x7461626c652d7069632e737667),
('Lamya', 'Lamya@email.com', '0672828282', 2, '2022-01-14', 0x7461626c652d7069632e737667),
('Noura', 'Noura@email.com', '0623232323', 3, '2022-01-05', 0x7461626c652d7069632e737667),
('Ahmed', 'Ahmed@email.com', '0690909090', 4, '2022-01-30', 0x7461626c652d7069632e737667),
('Mohammed', 'Mohammed@email.com', '0620202020', 5, '2022-02-02', 0x7461626c652d7069632e737667),
('Samia', 'Samia@email.com', '0620202020', 6, '2022-02-01', 0x7461626c652d7069632e737667),
('Sara', 'Sara@email.com', '0620202020', 7, '2022-02-01', 0x7461626c652d7069632e737667),
('Amina', 'Amina@email.com', '067373737', 9, '2022-02-24', ''),
('Hello', 'hello@dfjdf.kkd', '093033', 10, '2022-02-10', ''),
('Test', 'teysghejs@dfjdf.kkd', '093033', 19, '2022-02-23', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Bill`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Enroll_Number`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
