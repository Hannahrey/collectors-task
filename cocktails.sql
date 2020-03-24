# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: Cocktails
# Generation Time: 2020-03-24 16:44:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cocktails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cocktails`;

CREATE TABLE `cocktails` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alcohol_base` varchar(100) NOT NULL DEFAULT '',
  `taste_profile` varchar(100) DEFAULT NULL,
  `ingredients` varchar(250) NOT NULL DEFAULT '',
  `method` varchar(400) DEFAULT NULL,
  `strength` varchar(50) DEFAULT NULL,
  `served` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cocktails` WRITE;
/*!40000 ALTER TABLE `cocktails` DISABLE KEYS */;

INSERT INTO `cocktails` (`id`, `name`, `alcohol_base`, `taste_profile`, `ingredients`, `method`, `strength`, `served`)
VALUES
	(1,'Mojito','rum','refreshing','4 cl white rum, 3 cl fresh lime juice, 6 sprigs of mint, 2 teaspoons sugar (or 2 cl of sugar syrup), soda water.','Muddle mint leaves with sugar and lime juice. Add a splash of soda water and fill the glass with cracked ice. Pour the rum and top with soda water. Garnish with sprig of mint leaves and lemon slice. Serve with straw. ','medium','over crushed ice'),
	(2,'Tequila Sunrise','tequila','fruity','4.5 cl tequila, 9 cl orange juice, 1.5cl grenadine syrup.','Pour the tequila and orange juice into glass over ice. Add the grenadine, which will sink to the bottom. Stir gently to create the sunrise effect. Garnish and serve.','medium','poured over ice');

/*!40000 ALTER TABLE `cocktails` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ingredients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ingredients`;

CREATE TABLE `ingredients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `alcoholic?` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;

INSERT INTO `ingredients` (`id`, `name`, `alcoholic?`)
VALUES
	(1,'White rum',1),
	(2,'Dark rum',1),
	(3,'Spiced rum',1),
	(4,'Vodka',1),
	(5,'Gin',1),
	(6,'Whisky',1),
	(7,'Vermouth',1),
	(8,'Tequila',1),
	(9,'Brandy',1),
	(10,'Orange juice',0),
	(11,'Mint',0),
	(12,'Soda',0),
	(13,'Apple juice',0),
	(14,'Grenadine',NULL),
	(15,'Lime',0);

/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table link_table
# ------------------------------------------------------------

DROP TABLE IF EXISTS `link_table`;

CREATE TABLE `link_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cocktail_id` int(11) NOT NULL,
  `ingredients_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
