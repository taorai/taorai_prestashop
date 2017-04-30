-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_taorai_dev.taorai_product_comments
CREATE TABLE IF NOT EXISTS `taorai_product_comments` (
  `id_comment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(10) unsigned NOT NULL,
  `id_order` int(10) unsigned NOT NULL,
  `id_customer` int(10) unsigned NOT NULL,
  `date_add` datetime NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `FK_product_id` (`id_product`),
  KEY `id_order` (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_taorai_dev.taorai_product_comments: ~2 rows (approximately)
/*!40000 ALTER TABLE `taorai_product_comments` DISABLE KEYS */;
INSERT INTO `taorai_product_comments` (`id_comment`, `id_product`, `id_order`, `id_customer`, `date_add`, `content`) VALUES
	(1, 4, 10, 2, '2017-04-29 16:08:11', 'Good quality!'),
	(2, 4, 11, 1, '2017-04-29 19:08:11', ' i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string i\'m testing string');
/*!40000 ALTER TABLE `taorai_product_comments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
