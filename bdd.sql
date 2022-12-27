-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour dahoumane
CREATE DATABASE IF NOT EXISTS `dahoumane` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dahoumane`;

-- Listage de la structure de la table dahoumane. comptes
CREATE TABLE IF NOT EXISTS `comptes` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `id_numen` bigint(20) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table dahoumane.comptes : ~0 rows (environ)
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` (`id_compte`, `id_numen`, `mail`, `mdp`, `date_naissance`) VALUES
	(1, 1234567891234, 'dahoumane@gmail.com', 'test', '2022-06-12');
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
