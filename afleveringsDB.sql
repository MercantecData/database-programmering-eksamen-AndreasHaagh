-- --------------------------------------------------------
-- Vært:                         127.0.0.1
-- Server-version:               10.1.30-MariaDB - mariadb.org binary distribution
-- ServerOS:                     Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table databaseexam.adminusers: ~1 rows (approximately)
/*!40000 ALTER TABLE `adminusers` DISABLE KEYS */;
INSERT INTO `adminusers` (`id`, `username`, `password`) VALUES
	(1, 'admin', '$2y$10$bxAhZaWzhVpIgzoYnHzC9.yf8.U0IQr2xNns8QcWlw08iMaF27qIK');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;

-- Dumping data for table databaseexam.images: ~7 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `imageURL`, `owner`) VALUES
	(1, 'https://imgix.ranker.com/user_node_img/50047/1000931305/original/x-wing-photo-u1?w=650&q=50&fm=jpg&fit=crop&crop=faces', 1),
	(2, 'https://imgix.ranker.com/user_node_img/50047/1000931279/original/millennium-falcon-photo-u1?w=650&q=50&fm=jpg&fit=crop&crop=faces', 1),
	(3, 'https://imgix.ranker.com/user_node_img/50047/1000931306/original/vader-and-39-s-tie-fighter-photo-u1?w=650&q=50&fm=jpg&fit=crop&crop=faces', 1),
	(4, 'https://imgix.ranker.com/user_node_img/50047/1000931297/original/star-destroyer-photo-u1?w=650&q=50&fm=jpg&fit=crop&crop=faces', 1),
	(5, 'https://imgix.ranker.com/user_node_img/50047/1000931296/original/slave-i-photo-u1?w=650&q=60&fm=jpg&fit=crop&crop=faces', 1),
	(6, 'http://static.tvtropes.org/pmwiki/pub/images/friendship_is_magic_newpageimage_1684.png', 2),
	(7, 'https://vignette.wikia.nocookie.net/mugen/images/1/13/Fluttershy_artwork.png/revision/latest?cb=20130311003323', 2);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping data for table databaseexam.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
	(1, 'kyloren', '$2y$10$A3tuL30MpSD7ZyWw4oEWY.hrjphvZHGt3xSKDYWTwVdG97ZZjO31.', 'Ben Solo'),
	(2, 'fShy34', '$2y$10$glXOCHgyIBtD6YTwWAuw2eRgLjOBO81U/ZgM2gjChQScKqDEbs6we', 'Fluttershy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
