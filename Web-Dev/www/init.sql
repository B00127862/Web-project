-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.29 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shop
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shop`;

-- Dumping structure for table shop.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int NOT NULL,
  `price` varchar(45) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop.category: ~25 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `name`, `stock`, `price`) VALUES
	(100, 'whiteShirt', 20, '15.00'),
	(101, 'blackShirt', 20, '15.00'),
	(102, 'greyShirt', 20, '15.00'),
	(103, 'blackJeans', 15, '30.00'),
	(104, 'Jeans', 15, '30.00'),
	(105, 'greyJeans', 15, '30.00'),
	(106, 'ripJeans', 10, '35.00'),
	(107, 'creamCargo', 5, '40.00'),
	(108, 'greyCargo', 5, '40.00'),
	(109, 'whiteCargo', 5, '40.00'),
	(110, 'winterJack', 10, '50.00'),
	(111, 'redJack', 10, '55.00'),
	(112, 'whiteJack', 10, '55.00'),
	(113, 'whitTshirt', 30, '10.00'),
	(114, 'blackTshirt', 30, '10.00'),
	(115, 'greyTshirt', 30, '10.00'),
	(116, 'redTshirt', 30, '10.00'),
	(117, 'runShoe', 30, '10.00'),
	(118, 'kidrunShoe', 13, '20.00'),
	(119, 'formShoe', 15, '40.00'),
	(120, 'kidShirtBlack', 15, '7.00'),
	(121, 'kidShirtGrey', 15, '7.00'),
	(122, 'kidShortsWhite', 15, '12.00'),
	(123, 'kidShortsBlack', 15, '12.00'),
	(124, 'kidShortsRed', 15, '12.00');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table shop.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `email`, `password`, `create_time`) VALUES
	('Admin', 'admin.sh@p', 'Admin123', '2022-05-01 20:21:21');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
