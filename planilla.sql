/*
SQLyog Ultimate v9.63 
MySQL - 5.5.24-log : Database - planilla
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`planilla` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `planilla`;

/*Table structure for table `planilla` */

DROP TABLE IF EXISTS `planilla`;

CREATE TABLE `planilla` (
  `idPlanilla` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `horasTra` int(11) DEFAULT NULL,
  `pagoHoras` int(11) DEFAULT NULL,
  `faltas` int(11) DEFAULT NULL,
  `pensiones` decimal(10,0) DEFAULT NULL,
  `cargaFamiliar` int(11) DEFAULT NULL,
  `sueldoNeto` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`idPlanilla`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `planilla` */

insert  into `planilla`(`idPlanilla`,`nombre`,`apellido`,`cargo`,`horasTra`,`pagoHoras`,`faltas`,`pensiones`,`cargaFamiliar`,`sueldoNeto`) values (1,'salomon','valez','administrador',23,2,234,'434',34,'44'),(2,'SALOMON','VALDEZ','ADMINISTRADOR',234,23,538,'269',225,'5230'),(3,'MARIELLA','SANCHEZ','ADMINISTRADOR',234,23,807,'161',3300,'8144'),(4,'SALOMON','VALDEZ','ADMINISTRADOR',32,33,158,'53',150,'1079'),(5,'SALOMON','VALDEZ','ADMINISTRADOR',43,44,473,'95',0,'1476'),(6,'SALOMON','VALDEZ','ADMINISTRADOR',43,44,473,'95',0,'1476'),(7,'SALOMON','VALDEZ','ADMINISTRADOR',43,44,473,'95',0,'1476'),(8,'SALOMON','VALDEZ','ADMINISTRADOR',43,44,473,'95',0,'1476'),(9,'SALOMON','VALDEZ','ADMINISTRADOR',43,44,473,'95',0,'1476'),(10,'SALOMON','VALDEZ','ADMINISTRADOR',32,33,158,'53',150,'1079'),(11,'SALOMON','VALDEZ','ADMINISTRADOR',32,33,158,'53',150,'1079'),(12,'SALOMON','VALDEZ','ADMINISTRADOR',32,33,158,'53',150,'1079'),(13,'SALOMON','VALDEZ','ADMINISTRADOR',32,33,158,'53',150,'1079'),(14,'DDDD','DDDDDDDDDD','ADMINISTRADOR',32,44,282,'42',225,'1422'),(15,'DDDD','DDDDDDDDDD','ADMINISTRADOR',32,44,282,'42',225,'1422'),(16,'DDDD','DDDDDDDDDD','ADMINISTRADOR',32,44,282,'42',225,'1422'),(17,'DDDD','DDDDDDDDDD','ADMINISTRADOR',32,44,282,'42',225,'1422');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
