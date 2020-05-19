# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: Cocktails
# Generation Time: 2020-05-19 12:30:26 +0000
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
	(1,'Mojito','Rum','refreshing','4 cl white rum, 3 cl fresh lime juice, 6 sprigs of mint, 2 teaspoons sugar (or 2 cl of sugar syrup), soda water.','Muddle mint leaves with sugar and lime juice. Add a splash of soda water and fill the glass with cracked ice. Pour the rum and top with soda water. Garnish with sprig of mint leaves and lemon slice. Serve with straw. ','weak','over crushed ice'),
	(2,'Tequila Sunrise','Tequila','fruity','4.5 cl tequila, 9 cl orange juice, 1.5cl grenadine syrup.','Pour the tequila and orange juice into glass over ice. Add the grenadine, which will sink to the bottom. Stir gently to create the sunrise effect. Garnish and serve.','medium','poured over ice'),
	(3,'Negroni','Gin, Vermouth, Campari','refreshing','3 cl gin, 3 l sweet red vermouth, 3 cl campari','Stir into glass over ice, garnish and serve.','strong','poured over ice'),
	(5,'Cosmopolitan','Vodka','fruity','4 cl Vodka, 1.5 cl Cointreau, 1.5 cl Fresh lime juice, 3 cl Cranberry juice.','Shake all ingredients in cocktail shaker filled with ice. Strain into a large cocktail glass. Garnish with lime slice.','medium','straight up'),
	(17,'Manhattan','Whiskey','bitter','5 cl Rye whiskey, 2 cl Sweet red vermouth, Dash Angostura bitters','Stirred over ice, strained into a chilled glass, garnished with maraschino cherry.','strong','straight up'),
	(18,'Brandy Alexander','Brandy','sweet','1 oz (1 part) Fresh cream, 1 oz (1 part) Cognac, 1 oz (1 part) CrÃ¨me de cacao','Shake and strain into a chilled cocktail glass. Sprinkle with fresh ground nutmeg.','weak','straight up'),
	(19,'Margarita','Tequila','sour','2 oz Tequila, 1 oz Lime juice, 1 oz Cointreau, salt for rim of glass','Rub the rim of the glass with the lime slice to make the salt stick to it. Shake the other ingredients with ice, then carefully pour into the glass (taking care not to dislodge any salt). Garnish and serve.','medium','on rocks'),
	(20,'Strawberry Daiquiri','Rum','sweet','1 oz Light rum, Â½ oz Strawberry schnapps, 1 oz Lime juice, 2 tsp Powdered sugar, 2 oz Fresh or frozen strawberries','Pour all ingredients into shaker with ice cubes. Shake well. Double Strain in chilled cocktail glass.','medium','straight up'),
	(22,'Pina Colada','Rum','fruity','3 cl white rum,\r\n9 cl pineapple juice,\r\n3 cl cream of coconut','Blend all the ingredients with ice in an electric blender, pour into a large goblet or Hurricane glass and serve with straws.','weak','frozen');

/*!40000 ALTER TABLE `cocktails` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
