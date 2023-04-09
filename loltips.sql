-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 09 avr. 2023 à 22:26
-- Version du serveur : 5.7.33
-- Version de PHP : 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loltips`
--

-- --------------------------------------------------------

--
-- Structure de la table `champions`
--

CREATE TABLE `champions` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tips` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `champions`
--

INSERT INTO `champions` (`id`, `nom`, `tips`, `type`, `created_at`) VALUES
(393, 'Aatrox', 'Aatrox est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Bruiser', '2023-04-09 20:48:44'),
(394, 'Ahri', 'Ahri est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(395, 'Akali', 'Akali est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(396, 'Alistar', 'Alistar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(397, 'Amumu', 'Amumu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(398, 'Anivia', 'Anivia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(399, 'Annie', 'Annie est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(400, 'Ashe', 'Ashe est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(401, 'Aurelion Sol', 'Aurelion Sol est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(402, 'Azir', 'Azir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(403, 'Bard', 'Bard est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(404, 'Blitzcrank', 'Blitzcrank est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(405, 'Brand', 'Brand est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(406, 'Braum', 'Braum est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(407, 'Caitlyn', 'Caitlyn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(408, 'Camille', 'Camille est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(409, 'Cassiopeia', 'Cassiopeia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(410, 'Cho\'Gath', 'Cho\'Gath est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(411, 'Corki', 'Corki est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(412, 'Darius', 'Darius est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(413, 'Diana', 'Diana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(414, 'Dr. Mundo', 'Dr. Mundo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(415, 'Draven', 'Draven est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(416, 'Ekko', 'Ekko est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(417, 'Elise', 'Elise est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(418, 'Evelynn', 'Evelynn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(419, 'Ezreal', 'Ezreal est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(420, 'Fiddlesticks', 'Fiddlesticks est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(421, 'Fiora', 'Fiora est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(422, 'Fizz', 'Fizz est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(423, 'Galio', 'Galio est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(424, 'Gangplank', 'Gangplank est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(425, 'Garen', 'Garen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(426, 'Gnar', 'Gnar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(427, 'Gragas', 'Gragas est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(428, 'Graves', 'Graves est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(429, 'Hecarim', 'Hecarim est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(430, 'Heimerdinger', 'Heimerdinger est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(431, 'Irelia', 'Irelia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(432, 'Janna', 'Janna est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(433, 'Jarvan IV', 'Jarvan IV est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(434, 'Jax', 'Jax est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(435, 'Jayce', 'Jayce est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(436, 'Jinx', 'Jinx est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(437, 'Kalista', 'Kalista est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(438, 'Karma', 'Karma est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(439, 'Karthus', 'Karthus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(440, 'Kassadin', 'Kassadin est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(441, 'Katarina', 'Katarina est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(442, 'Kayle', 'Kayle est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(443, 'Kennen', 'Kennen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(444, 'Kha\'Zix', 'Kha\'Zix est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(445, 'Kog\'Maw', 'Kog\'Maw est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(446, 'LeBlanc', 'LeBlanc est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(447, 'Lee Sin', 'Lee Sin est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(448, 'Leona', 'Leona est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(449, 'Lissandra', 'Lissandra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(450, 'Lucian', 'Lucian est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(451, 'Lulu', 'Lulu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(452, 'Lux', 'Lux est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(453, 'Malphite', 'Malphite est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(454, 'Malzahar', 'Malzahar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(455, 'Maokai', 'Maokai est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(456, 'Master Yi', 'Master Yi est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(457, 'Miss Fortune', 'Miss Fortune est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(458, 'Mordekaiser', 'Mordekaiser est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(459, 'Morgana', 'Morgana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(460, 'Nami', 'Nami est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(461, 'Nasus', 'Nasus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(462, 'Nautilus', 'Nautilus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(463, 'Nidalee', 'Nidalee est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(464, 'Nocturne', 'Nocturne est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(465, 'Nunu', 'Nunu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(466, 'Olaf', 'Olaf est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(467, 'Orianna', 'Orianna est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(468, 'Pantheon', 'Pantheon est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(469, 'Poppy', 'Poppy est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(470, 'Quinn', 'Quinn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(471, 'Rammus', 'Rammus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(472, 'Renekton', 'Renekton est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(473, 'Rengar', 'Rengar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(474, 'Riven', 'Riven est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(475, 'Rumble', 'Rumble est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(476, 'Ryze', 'Ryze est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(477, 'Sejuani', 'Sejuani est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(478, 'Shaco', 'Shaco est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(479, 'Shen', 'Shen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(480, 'Shyvana', 'Shyvana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(481, 'Singed', 'Singed est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(482, 'Sion', 'Sion est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(483, 'Sivir', 'Sivir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(484, 'Skarner', 'Skarner est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(485, 'Sona', 'Sona est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(486, 'Soraka', 'Soraka est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(487, 'Swain', 'Swain est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(488, 'Syndra', 'Syndra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(489, 'Talon', 'Talon est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(490, 'Taric', 'Taric est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(491, 'Teemo', 'Teemo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(492, 'Thresh', 'Thresh est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Support', '2023-04-09 20:48:44'),
(493, 'Tristana', 'Tristana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(494, 'Trundle', 'Trundle est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(495, 'Tryndamere', 'Tryndamere est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(496, 'Twisted Fate', 'Twisted Fate est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(497, 'Twitch', 'Twitch est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(498, 'Udyr', 'Udyr est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(499, 'Urgot', 'Urgot est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(500, 'Varus', 'Varus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(501, 'Vayne', 'Vayne est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Marksman', '2023-04-09 20:48:44'),
(502, 'Veigar', 'Veigar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(503, 'Vel\'Koz', 'Vel\'Koz est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(504, 'Vi', 'Vi est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(505, 'Viktor', 'Viktor est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(506, 'Vladimir', 'Vladimir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(507, 'Volibear', 'Volibear est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(508, 'Warwick', 'Warwick est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(509, 'Wukong', 'Wukong est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(510, 'Xerath', 'Xerath est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(511, 'Xin Zhao', 'Xin Zhao est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(512, 'Yasuo', 'Yasuo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Fighter', '2023-04-09 20:48:44'),
(513, 'Yorick', 'Yorick est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(514, 'Zac', 'Zac est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Tank', '2023-04-09 20:48:44'),
(515, 'Zed', 'Zed est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Assassin', '2023-04-09 20:48:44'),
(516, 'Ziggs', 'Ziggs est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(517, 'Zilean', 'Zilean est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44'),
(518, 'Zyra', 'Zyra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.', 'Mage', '2023-04-09 20:48:44');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230316092933', '2023-03-16 09:31:21', 82),
('DoctrineMigrations\\Version20230316094156', '2023-03-16 09:42:02', 33),
('DoctrineMigrations\\Version20230316095107', '2023-03-16 09:51:33', 30),
('DoctrineMigrations\\Version20230316095252', '2023-03-16 09:52:55', 68),
('DoctrineMigrations\\Version20230316100459', '2023-03-16 10:05:06', 65),
('DoctrineMigrations\\Version20230316103258', '2023-03-16 10:33:04', 67),
('DoctrineMigrations\\Version20230409184732', '2023-04-09 18:47:45', 48),
('DoctrineMigrations\\Version20230409185622', '2023-04-09 18:56:34', 26);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `pseudo`, `email`, `roles`, `password`, `created_at`) VALUES
(21, 'user1', 'Mehdi', 'user1@gmail.com', '[\"ROLE_USER\"]', '$2y$13$KJZ.0CiubYFB.08qFYbu9.n06GcKeVW/eftzoukHXrWOtj/gOqWVS', '2023-04-09 20:48:44'),
(22, 'user2', NULL, 'user2@gmail.com', '[\"ROLE_USER\"]', '$2y$13$5JZZBbpchDa5aEpZLHKereGI7ZgLYs0D/NCmVTYlL8XzZVaLAuf1e', '2023-04-09 20:48:45'),
(23, 'user3', NULL, 'user3@gmail.com', '[\"ROLE_USER\"]', '$2y$13$8xWeubvfcR.G9LPzjUgKYufjxFA/B4PMPWhMJ3F9E9PsW/lodzlAS', '2023-04-09 20:48:45'),
(24, 'user4', NULL, 'user4@gmail.com', '[\"ROLE_USER\"]', '$2y$13$f2LImw9QdJIAGise5oB7hu6O4fWLQtqNHKqidfyheUa2KAO25pCyC', '2023-04-09 20:48:46'),
(25, 'user5', NULL, 'user5@gmail.com', '[\"ROLE_USER\"]', '$2y$13$u.p4OrnbbUtFvy4iNEpGH.bNp0MzDn9kdeeHVG06rpeeAW66SPznO', '2023-04-09 20:48:46'),
(26, 'user6', NULL, 'user6@gmail.com', '[\"ROLE_USER\"]', '$2y$13$23Nwx5X1XOUIWu0C/99g0u6LjVFZVa3Nvay6rWK5.SF29uqYH81Hy', '2023-04-09 20:48:47'),
(27, 'user7', NULL, 'user7@gmail.com', '[\"ROLE_USER\"]', '$2y$13$g3KjnKSsixnR.P3WL3I4d.E6SVucS3//IQLE8a34UCnPsX1wu8dl6', '2023-04-09 20:48:47'),
(28, 'user8', NULL, 'user8@gmail.com', '[\"ROLE_USER\"]', '$2y$13$cJQQUdtMstvc7E6q3gvvjOGoeQtzSt/ST2MUBXLdQaAeT9B1IERNa', '2023-04-09 20:48:47'),
(29, 'user9', NULL, 'user9@gmail.com', '[\"ROLE_USER\"]', '$2y$13$zDGRkCp5qAxOw2eKA/CvGOG59OietgeP/Et1M3Q6Z.VDpChhg2O1i', '2023-04-09 20:48:48'),
(30, 'user10', NULL, 'user10@gmail.com', '[\"ROLE_USER\"]', '$2y$13$lEMSzKD5WWH59K6FcPPSw.64emP8oVMa7nGJvYRWjEhYBfv.iXDRm', '2023-04-09 20:48:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `champions`
--
ALTER TABLE `champions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
