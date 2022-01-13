/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.26 : Database - vreme
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vreme` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `vreme`;

/*Table structure for table `grad` */

DROP TABLE IF EXISTS `grad`;

CREATE TABLE `grad` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `naziv` varchar(60) DEFAULT NULL,
  `postanski_broj` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `grad` */

insert  into `grad`(`id`,`naziv`,`postanski_broj`) values 
(1,'Beograd','11000'),
(2,'Novi Sad','12000'),
(3,'Pancevo','11300'),
(5,'Pozarevac','25330'),
(6,'','');

/*Table structure for table `prognoza` */

DROP TABLE IF EXISTS `prognoza`;

CREATE TABLE `prognoza` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `datum` date DEFAULT NULL,
  `minimum` int DEFAULT NULL,
  `maksimum` int DEFAULT NULL,
  `grad` bigint DEFAULT NULL,
  `vreme` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grad` (`grad`),
  KEY `vreme` (`vreme`),
  CONSTRAINT `prognoza_ibfk_1` FOREIGN KEY (`grad`) REFERENCES `grad` (`id`),
  CONSTRAINT `prognoza_ibfk_2` FOREIGN KEY (`vreme`) REFERENCES `vreme` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `prognoza` */

insert  into `prognoza`(`id`,`datum`,`minimum`,`maksimum`,`grad`,`vreme`) values 
(2,'2022-01-14',-15,-2,2,4),
(3,'2022-01-11',-5,8,2,1),
(4,'1970-01-01',-5,8,2,1),
(5,'2022-01-05',-3,8,3,1),
(6,'2022-01-04',-5,8,2,1);

/*Table structure for table `vreme` */

DROP TABLE IF EXISTS `vreme`;

CREATE TABLE `vreme` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `vreme` */

insert  into `vreme`(`id`,`naziv`) values 
(1,'vedro'),
(2,'oblacno'),
(3,'moguci pljuskovi'),
(4,'obilni pljuskovi'),
(5,'moguc sneg'),
(6,'sneg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
