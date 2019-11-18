-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2019 at 08:36 AM
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
-- Database: `national`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `DeleteData`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteData` (IN `usernameInput` VARCHAR(50), IN `passwordInput` VARCHAR(50))  NO SQL
BEGIN 
DECLARE useridcalc INT;

DECLARE passwordcalc, usernamecalc VARCHAR(50);


-- return admin if the password is correct
SET passwordcalc = (SELECT username FROM utilisateur WHERE username = 'admin' AND password=passwordInput);

-- set the new location if the password was correct
SET usernamecalc = (SELECT IF(passwordcalc='admin',usernameInput, ''));


-- id user
SET useridcalc = (SELECT idUser FROM utilisateur WHERE email= usernamecalc);



-- no error send if password is wrong
DELETE FROM situer WHERE idUser = useridcalc;
DELETE FROM grade WHERE idUser = useridcalc;
DELETE FROM utilisateur WHERE email = usernamecalc;




END$$

DROP PROCEDURE IF EXISTS `PostData`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PostData` (IN `usernameInput` VARCHAR(200), IN `passwordInput` VARCHAR(200), IN `emailInput` VARCHAR(200), IN `locationInput` VARCHAR(30), IN `NomInput` VARCHAR(50), IN `PrenomInput` VARCHAR(50))  BEGIN 
DECLARE localisationcalc, gradecalc, useridcalc INT;
INSERT INTO utilisateur (username, password, email, Nom, Prenom) VALUES (usernameInput, passwordInput, emailInput, NomInput, PrenomInput);
SET localisationcalc = (SELECT idLocalisation FROM localisation WHERE localisation = locationInput);
SET gradecalc = 1;
SET useridcalc = (SELECT idUser FROM utilisateur WHERE username= usernameInput);

INSERT INTO situer (idLocalisation, idUser) VALUES (localisationcalc, useridcalc);
INSERT INTO grade (idrang, idUser) VALUES (gradecalc, useridcalc);

END$$

DROP PROCEDURE IF EXISTS `PutDataLocalisation`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PutDataLocalisation` (IN `usernameInput` VARCHAR(50), IN `localisationInput` VARCHAR(50))  NO SQL
BEGIN 
DECLARE localisationcalc, localisationcalc2, useridcalc, useridcalcFinal, localisationcalcFinal INT;
DECLARE passwordcalc VARCHAR(50);
-- id user
SET useridcalc = (SELECT idUser FROM utilisateur WHERE email= usernameInput);
-- location asked
SET localisationcalc = (SELECT idLocalisation FROM localisation WHERE localisation = localisationInput);




-- no error send if password is wrong
UPDATE situer SET idLocalisation = localisationcalc WHERE idUser=useridcalc;


END$$

DROP PROCEDURE IF EXISTS `UserGetData`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `UserGetData` (IN `usernameInput` VARCHAR(30))  NO SQL
BEGIN 
DECLARE localisationcalc, gradecalc, useridcalc INT;
DECLARE localisationName VARCHAR(30);
SET useridcalc = (SELECT idUser FROM utilisateur WHERE email= usernameInput);
SET localisationcalc = (SELECT idLocalisation FROM situer WHERE idUser = useridcalc);

SELECT localisation FROM localisation WHERE idLocalisation = localisationcalc;
SELECT idrang FROM grade WHERE idUser = useridcalc;
SELECT username, Nom, Prenom, idUser FROM utilisateur WHERE email=usernameInput;



END$$

DROP PROCEDURE IF EXISTS `UserLogin`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `UserLogin` (IN `emailInput` VARCHAR(200), IN `passwordInput` VARCHAR(200))  NO SQL
BEGIN 

SELECT email FROM utilisateur WHERE password=passwordInput AND email = emailInput;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `idUser` int(11) NOT NULL,
  `idrang` int(11) NOT NULL,
  PRIMARY KEY (`idUser`,`idrang`),
  KEY `grade_rang0_FK` (`idrang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`idUser`, `idrang`) VALUES
(37, 3),
(36, 4);

-- --------------------------------------------------------

--
-- Table structure for table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `idLocalisation` int(11) NOT NULL AUTO_INCREMENT,
  `localisation` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idLocalisation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `localisation`
--

INSERT INTO `localisation` (`idLocalisation`, `localisation`) VALUES
(1, 'Pau'),
(2, 'Toulouse'),
(3, 'Bordeaux'),
(4, 'Paris'),
(5, 'Rouen'),
(6, 'Lyon'),
(7, 'Arras'),
(8, 'La Rochelle');

-- --------------------------------------------------------

--
-- Table structure for table `rang`
--

DROP TABLE IF EXISTS `rang`;
CREATE TABLE IF NOT EXISTS `rang` (
  `idrang` int(11) NOT NULL AUTO_INCREMENT,
  `nomDuRang` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idrang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rang`
--

INSERT INTO `rang` (`idrang`, `nomDuRang`) VALUES
(1, 'étudiant'),
(2, 'bde'),
(3, 'personnel'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `situer`
--

DROP TABLE IF EXISTS `situer`;
CREATE TABLE IF NOT EXISTS `situer` (
  `idLocalisation` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idLocalisation`,`idUser`),
  KEY `situer_utilisateur0_FK` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `situer`
--

INSERT INTO `situer` (`idLocalisation`, `idUser`) VALUES
(1, 36),
(2, 37);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `username`, `password`, `email`, `Nom`, `Prenom`) VALUES
(36, 'admin', 'Ets869+--', 'admin@Mail', '', ''),
(37, 'res', 'test', 'jesuis@untest.fr', 'byu', 'tre');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_rang0_FK` FOREIGN KEY (`idrang`) REFERENCES `rang` (`idrang`),
  ADD CONSTRAINT `grade_utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`);

--
-- Constraints for table `situer`
--
ALTER TABLE `situer`
  ADD CONSTRAINT `situer_localisation_FK` FOREIGN KEY (`idLocalisation`) REFERENCES `localisation` (`idLocalisation`),
  ADD CONSTRAINT `situer_utilisateur0_FK` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
