-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 avr. 2022 à 07:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp1_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `chanson`
--

DROP TABLE IF EXISTS `chanson`;
CREATE TABLE IF NOT EXISTS `chanson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `auteur` text NOT NULL,
  `closed` decimal(10,0) DEFAULT NULL,
  `content` text,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chanson`
--

INSERT INTO `chanson` (`id`, `title`, `auteur`, `closed`, `content`, `image`) VALUES
(1, 'Ani Kuni', 'Polo & Pan', '1', '\"Ani Kuni est une piste de danse ludique pour les petits et les grands', 'pochette-ani-kuni-polo-pan.jpg'),
(2, 'Arcade', 'Duncan Laurence / Fletcher', '0', 'Une nouvelle version de son tube', 'pochette-arcade-duncan-laurence-fletcher.jpg'),
(3, 'Bad Habits', 'Ed Sheeran', '0', 'Le premier single de son cinquième album', 'pochette-bad-habits-ed-sheeran.jpg'),
(4, 'Cold Heart', 'Elton John / Dua Lipa', NULL, 'Produite par le trio australien Pnau, et sortie le 13 août 2021', 'pochette-cold-heart-elton-john-dua-lipa.jpg'),
(5, 'Combien D\'airs', 'Lilian Renaud', NULL, 'Quelle bonne idée ! Lilian Renaud revient avec un remix ', 'pochette-combien-dairs-lilian-renaud.jpg'),
(6, 'Easy On Me', 'Adele', NULL, 'Adele fait son grand retour avec humour', 'pochette-easy-on-me-adele.jpg'),
(7, 'Stay', 'The Kid Laroi / Justin Bieber', NULL, 'Stay est une chanson du chanteur et rappeur australien The Kid Laroi et du chanteur canadien Justin Bieber', 'pochette-stay-the-kid-laroi-justin-bieber.jpg'),
(8, 'Nos Plus Belles Annees', 'Grand Corps Malade / Kimberose', NULL, 'A l\'occasion de la réédition de son album \"Mesdames\"', 'pochette-nos-plus-belles-annees-grand-corps-malade-kimberose.jpg'),
(9, 'XY', 'Vitaa / Slimane', NULL, 'C\'est quoi un homme ? Quand il se terre quand il se cache pour pleurer', 'pochette-xy-vitaa-slimane.jpg'),
(10, 'Sante', 'Stromae', NULL, 'Surprise du chef, après 6 ans d\'absence, Stromae est revenu un beau matin avec un double chignon', 'pochette-sante-stromae.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_chanson` decimal(10,0) DEFAULT NULL,
  `title` text,
  `id_musicien` decimal(10,0) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_chanson`, `title`, `id_musicien`, `content`) VALUES
(1, '2', 'ouepe\'g', '4', 'ouf'),
(2, '3', 'Super', '4', 'Belle émotion'),
(3, '2', 'quel kiff', '2', 'je kiffe'),
(5, '2', 'Session', '4', ''),
(6, '3', 'Pas ma préférée', '4', 'Je trouve la version originale bien mieux...'),
(7, '10', 'Génial', '7', 'Gros big up aux gens qui travaillent dans l\'ombre et qui font, souvent sans qu\'on le remarque, un travail monstrueux.'),
(8, '9', 'Un chef-d\'œuvre', '7', 'Ce genre de paroles qui vous percent le coeur, une chanson qui parle à l\'âme, ce doux moment où tout s\'efface, quand le temps semble s\'arrêter, une chanson qui t\'emmène loin, un chef-d\'œuvre'),
(9, '8', 'Magnifique', '7', 'Magnifique chanson qui m a bcp émue en pensant justement aux belles années passées....et tellement bien chantée...merci a vous deux !'),
(10, '7', '400m views in 5 months', '7', 'That’s insane! This song is popular across everywhere. This song is legendary I must say.'),
(11, '6', ' Hayk Gasparyan', '7', '\r\nI hear Adele when I was child. So thank you Adele for changing my life for a better'),
(12, '5', '  BRAVO ....', '7', 'j\'ai découvert Lilian à THE   VOICE  qu\'il a d\'ailleurs gagné, une voix qui vous  transporte , depuis pas assez souvent sur les ondes ce que je déplore'),
(13, '4', 'This is amazing', '7', 'Not every song can be remixed, but wow. '),
(14, '3', 'Love this song', '7', 'I can’t believe I only heard this song for the first time yesterday, but I can’t stop listening to it!'),
(15, '3', 'I love it', '6', 'You are a unique singer !!! Let your creativity be on top !!!'),
(17, '6', 'rere', '4', '</dd></dl></div><span style=\'display: none;\'>'),
(18, '5', 'Un peu déçu', '4', 'J\'ai l\'impression que ça tourne en boucle !!');

-- --------------------------------------------------------

--
-- Structure de la table `musicien`
--

DROP TABLE IF EXISTS `musicien`;
CREATE TABLE IF NOT EXISTS `musicien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text,
  `name` text,
  `password` text,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `musicien`
--

INSERT INTO `musicien` (`id`, `login`, `name`, `password`, `url`) VALUES
(1, 'Mickael', 'mj', 'kingofpop', 'http://mj.com'),
(2, 'Madonna', 'louise', 'cicconne', 'http://madonna.com'),
(3, 'vivie', 'Virginie', 'pass', 'www.virginie.fr'),
(4, 'admin', 'Alban', 'admin', 'https://www.youtube.com/watch?v=TReVaAxoEYg'),
(6, 'MrShadow945', 'MrShadow945', 'MrShadow945', 'https://www.youtube.com/channel/UCNfK_2nr35LMbQUMeUXvDdw'),
(7, 'Oryx_500', 'Oryx_500', 'Oryx_500', 'https://www.youtube.com/channel/UC-QlRbU2srK0uIsb3wnBfQQ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
