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
  `id_product_comments` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(10) unsigned NOT NULL,
  `id_order` int(10) unsigned NOT NULL,
  `id_customer` int(10) unsigned NOT NULL,
  `date_add` datetime NOT NULL,
  `content` text NOT NULL,
  `ip_address` varchar(16) DEFAULT NULL,
  `id_attribute` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_product_comments`),
  KEY `FK_product_id` (`id_product`),
  KEY `id_order` (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table db_taorai_dev.taorai_product_comments: ~5 rows (approximately)
/*!40000 ALTER TABLE `taorai_product_comments` DISABLE KEYS */;

/*!40000 ALTER TABLE `taorai_product_comments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

insert into taorai_tab (`id_parent`,`position`, `module`, `class_name`, `active`,`hide_host_mode`,`icon`) values (9,8,null,'AdminProductComments',1,0,'');

insert into taorai_tab_lang (`id_tab`,`id_lang`, `name`) values 
	(117,1,'Product Comments'),
	(117,2,'Product Comments');

insert into taorai_authorization_role (`slug`) values 
	('ROLE_MOD_TAB_ADMINPRODUCTCOMMENTS_CREATE'),
	('ROLE_MOD_TAB_ADMINPRODUCTCOMMENTS_DELETE'),
	('ROLE_MOD_TAB_ADMINPRODUCTCOMMENTS_READ'),
	('ROLE_MOD_TAB_ADMINPRODUCTCOMMENTS_UPDATE');
	
insert into taorai_access (`id_profile`, `id_authorization_role`) values 
	(1, 673),
	(1, 674),
	(1, 675),
	(1, 676);

