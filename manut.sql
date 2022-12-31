/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `mapavtr` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mapavtr`;

CREATE TABLE IF NOT EXISTS `manut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `idvtr` varchar(5) NOT NULL,
  `tipoid` varchar(5) NOT NULL,
  `odom` varchar(15) DEFAULT NULL,
  `vencim` date DEFAULT NULL COMMENT 'tempo para próxiima manutenção',
  `proxodom` varchar(10) DEFAULT NULL,
  `respons` varchar(200) DEFAULT NULL,
  `observ` text,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DELETE FROM `manut`;
/*!40000 ALTER TABLE `manut` DISABLE KEYS */;
INSERT INTO `manut` (`id`, `data`, `idvtr`, `tipoid`, `odom`, `vencim`, `proxodom`, `respons`, `observ`, `status`) VALUES
	(89, '2022-07-23', '41', '5', '6666', '2022-07-13', '6666', 'eu', 'teste teste', 'p'),
	(83, '2022-07-01', '29', '2', '55555', '2022-07-15', '55555', 'Eu', 'testset', 'fechada'),
	(84, '2022-07-01', '29', '3', '55555', '2022-07-15', '55555', 'Eu', 'etsetsete', 'aberta'),
	(85, '2022-07-01', '29', '2', '55555', '2022-07-15', '55555', 'Eu', 'sasasdfad', 'ativa'),
	(86, '2022-07-01', '29', '2', '55555', '2022-07-15', '55555', 'Eu', 'sddddd', 'ativa'),
	(87, '2022-07-01', '29', '2', '55555', '2022-07-15', '55555', 'Eu', 'seeeee', 'ativa'),
	(88, '2022-07-01', '29', '2', '55555', '2022-07-15', '55555', 'Eu', 'eeee', 'ativa'),
	(90, '2022-07-01', '38', '2', '44444', '2022-07-14', '444444', 'eu', 'tetse', 'aberta'),
	(91, '2022-07-01', '38', '5', '5555', '2022-07-20', '5555', 'asdfasdfa', 'asdfasdf asdf', 'ativa'),
	(92, '2022-07-01', '38', '2', '8888', '2022-07-08', '8888', 'dfghdfg', 'dfghdfgh', 'ativa'),
	(93, '2022-07-01', '29', '2', '888', '2022-07-23', '8888', 'asdfasdf', 'asdfasdf', 'fechada'),
	(94, '2022-07-01', '38', '2', '54564', '2022-07-23', '345345', 'edadsfg', 'sdfgsdfg', 'ativa'),
	(95, '2022-07-01', '38', '2', '54564', '2022-07-23', '345345', 'edadsfg', 'sdfgsdfg', 'ativa'),
	(96, '2022-07-04', '38', '2', '342342', '2022-07-13', '234234', 'asdfasd', 'asdfasdf', 'p'),
	(97, '2022-07-01', '29', '2', '342342', '2022-07-13', '234234', 'asdfasd', 'asdfasdf', 'fechada'),
	(98, '2022-07-01', '29', '3', '345345', '2022-07-01', '345345', 'asdfasd', 'asdfasdf', 'fechada'),
	(99, '2022-07-01', '38', '2', '345345', '2022-07-01', '345345', 'asdfasd', 'asdfasdf', 'ativa'),
	(100, '2022-07-23', '3', '2', '3234', '2022-07-01', '234234', 'asdfasdf', 'asdasd', 'c'),
	(108, '2022-07-23', '41', '5', '22745', NULL, NULL, '', '', 'c'),
	(109, '2022-07-23', '3', '3', '104954', NULL, NULL, '', '', 'p'),
	(107, '2022-07-03', '3', '2', '104954', '2022-07-13', '22222', 'eu', 'asdfasd', 'a'),
	(104, '2022-07-07', '3', '3', '345345', '2022-07-01', '345345', 'adsasdf', 'asdfasdf', 'c'),
	(105, '2022-07-23', '41', '3', '345345', '2022-07-01', '345345', 'asdasdf', 'asdfasdf', 'a'),
	(106, '2022-07-01', '29', '2', '345345', '2022-07-01', '34535', 'ASDFASDF', 'ASDFASDF', 'fechada');
/*!40000 ALTER TABLE `manut` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
