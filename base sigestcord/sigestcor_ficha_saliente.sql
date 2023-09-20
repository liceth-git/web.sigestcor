-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: sigestcor
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ficha_saliente`
--

DROP TABLE IF EXISTS `ficha_saliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ficha_saliente` (
  `id_salidaDocumento` int(15) NOT NULL AUTO_INCREMENT,
  `fechaSalida` date NOT NULL,
  `RemitenteEmpresa` varchar(35) NOT NULL,
  `IndicacionesSaliente` text NOT NULL,
  `id_envio` int(15) NOT NULL,
  `NumCorrespondencia` int(11) NOT NULL,
  PRIMARY KEY (`id_salidaDocumento`),
  KEY `id_envio` (`id_envio`),
  KEY `NumCorrespondencia` (`NumCorrespondencia`),
  CONSTRAINT `ficha_saliente_ibfk_1` FOREIGN KEY (`id_envio`) REFERENCES `registro_envios` (`IdEnvio`),
  CONSTRAINT `ficha_saliente_ibfk_2` FOREIGN KEY (`NumCorrespondencia`) REFERENCES `ficha_entrada` (`NumCorrespondencia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha_saliente`
--

LOCK TABLES `ficha_saliente` WRITE;
/*!40000 ALTER TABLE `ficha_saliente` DISABLE KEYS */;
INSERT INTO `ficha_saliente` VALUES (1,'2023-08-20','Empresa A','Indicaciones 1',1,1),(2,'2023-08-21','Empresa B','Indicaciones 2',2,2),(3,'2023-08-22','Empresa C','Indicaciones 3',3,3);
/*!40000 ALTER TABLE `ficha_saliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-20  2:21:48
