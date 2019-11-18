-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2019 at 08:25 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `actives`
--

DROP TABLE IF EXISTS `actives`;
CREATE TABLE IF NOT EXISTS `actives` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomActivite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionActivite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `dateActivite` date DEFAULT NULL,
  `localisation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actives`
--

INSERT INTO `actives` (`id`, `nomActivite`, `descriptionActivite`, `dateActivite`, `localisation`, `image`) VALUES
(1, ' Acrobranche', 'Aux portes de Pau : 10 kilomètres à peine…. de PAU centre . En famille ou entre amis, découvrez un parc intense en sensations : 110 jeux dans les arbres dès 3 ans sur 14 parcours 100% sécurisés. Tyroliennes à gogo, vélo volant, snow dans les airs, parcours filet et saut de tarzan pour les petits, aire de jeux gonflable Big Jump banana avec saut de 13 mètres, formules anniversaire enfants…… Chalet d’accueil, bar et aire de pique-nique avec vue sur les parcours', '2020-01-05', '64290 Bosdarros – Pyrénées-Atlantiques', 'https://www.aventure-parc.fr/wp-content/uploads/2019/05/aventure-parc-vert-voltige-tyrolienne-geante-bosdarros-bearn-64.jpg'),
(2, ' escalade', 'Ce mur aux normes internationales est un fantastique espace de pratique de l\'escalade ouvert à tous, débutant, confirmé et expert.\n                En effet, le mur UPPA c\'est:\n                1200 m2 de surface de grimpe (dont 130 m2 de bloc)\n                Des pans verticaux et déversants (mention spéciale à notre arche imposante) offrant des voies jusqu\'à 18m de longueur', '2020-01-15', 'Avenue Jean Génèze, 64000 PAU', 'http://idata.over-blog.com/3/71/53/95/Sortie-20100321-SAE-Pau/b.jpg'),
(3, ' Laser game', 'Le complexe LASER LAND propose un cadre nouvelle génération et unique dans la région.\nUn labyrinthe de 400m2 sur plusieurs niveaux où tu te trouves plongé dans un décor digne des meilleurs films de science-fiction ', '2020-08-15', 'Rue d\'Arsonval, 64230 Lescar', 'https://www.lescar-soleil.com/thumbs/1920x600r/adherents/laser-quest/lescar-soleil-laser-quest-interieur.jpg'),
(4, ' Escape game', 'Vous êtes enfermés et vous devez maintenant trouver le moyen de sortir. Observez tout ce qui vous entoure pour percer les mystères de ces lieux car les indices sont dissimulés.\nSoyez créatifs, faites preuve d’esprit d’équipe et de logique. Mais n’oubliez pas d’être rapide car vous ne disposez que de 60 minutes pour fuir. Ce temps de jeu et son espace vous sont exclusivement dédiés lors de votre partie.', '2020-10-15', '28 rue TRAN 64000 Pau', 'https://www.wescape.fr/wp-content/uploads/2017/08/funroom-pau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `idLike` int(11) NOT NULL AUTO_INCREMENT,
  `idActivite` int(11) NOT NULL,
  `Like` int(11) NOT NULL,
  PRIMARY KEY (`idLike`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`idLike`, `idActivite`, `Like`) VALUES
(1, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_products_table', 1),
(2, '2019_11_12_101302_create_activities_table', 1),
(3, '2019_11_12_101302_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photocomm`
--

DROP TABLE IF EXISTS `photocomm`;
CREATE TABLE IF NOT EXISTS `photocomm` (
  `idPhotoComm` int(11) NOT NULL AUTO_INCREMENT,
  `rangUser` int(11) NOT NULL,
  `idActivite` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenuCommentaire` varchar(100) COLLATE utf8_bin NOT NULL,
  `user` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idPhotoComm`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `photocomm`
--

INSERT INTO `photocomm` (`idPhotoComm`, `rangUser`, `idActivite`, `url`, `contenuCommentaire`, `user`) VALUES
(11, 1, 1, 'ET', ' déposer votre Commentaire', ''),
(12, 1, 1, 'ET', ' déposer votre Commentaire', ''),
(13, 1, 1, 'zetzet', 'test', 'admin'),
(14, 1, 1, 'zetzet', 'test', 'admin'),
(15, 1, 1, 'zetzet', 'test', 'admin'),
(16, 1, 1, 'zetzet', 'test', 'admin'),
(17, 1, 1, 'zetzet', 'test', 'admin'),
(18, 1, 1, 'zetzet', 'test', 'admin'),
(19, 1, 1, 'zetzet', 'test', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `nbrCommandes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `nbrCommandes`, `created_at`, `updated_at`) VALUES
(1, 'Goodies1', 'Description1', 'https://images.fr.shopping.rakuten.com/photo/stylo-pen-ecole-d-ingenieurs-cesi-nancy-972321447_L.jpg', '2.59', 0, NULL, NULL),
(2, 'Goodies2', 'Description2', 'https://objet-pub-high-tech.com/18225-thickbox_default/support-de-telephone.jpg', '12.99', 0, NULL, NULL),
(3, 'Goodies3', 'Description3', 'https://uploads.europeansourcing.com/products/371/199782/iCircle-DarkBlue03.jpg', '25.99', 0, NULL, NULL),
(4, 'Goodies4', 'Description4', 'https://ae01.alicdn.com/kf/HTB1rNEhcILJ8KJjy0Fnq6AFDpXat/Support-pour-t-l-phone-universel-prise-de-charge-support-pour-t-l-phone-sopport-pour.jpg', '16.89', 0, NULL, NULL),
(5, 'Goodies5', 'Description5', 'https://ae01.alicdn.com/kf/HTB11ORQXsfrK1RkSnb4q6xHRFXaz/Prise-murale-support-pour-t-l-phone-Mobile-Smartphone-support-de-charge-supports-de-support-prise.jpg', '10.00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idArticle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
