-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for system_produk_agent
CREATE DATABASE IF NOT EXISTS `system_produk_agent` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `system_produk_agent`;

-- Dumping structure for table system_produk_agent.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `date` datetime DEFAULT NULL,
  `details` text,
  `user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table system_produk_agent.produk: ~1 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id`, `name`, `quantity`, `price`, `photo`, `date`, `details`, `user`) VALUES
	(1, 'kerusi', 100, 80, 'uploads/kerusi.png', '2004-07-22 04:38:39', 'selesa', 'adin@gmail.com');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table system_produk_agent.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `gender` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table system_produk_agent.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `pass`, `email`, `role`, `phone`, `gender`) VALUES
	(1, 'admin', 'admin', 'admin', 'admin', NULL, NULL),
	(2, 'adin', '1234', 'adin@gmail.com', 'user', NULL, NULL),
	(3, 'ali bin hasan', '1234', 'ali@gmail.com', 'user', '012-22223444', 'male');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
