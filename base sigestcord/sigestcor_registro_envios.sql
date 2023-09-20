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
-- Table structure for table `registro_envios`
--

DROP TABLE IF EXISTS `registro_envios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registro_envios` (
  `IdEnvio` int(15) NOT NULL AUTO_INCREMENT,
  `fechaRegistroEnvio` datetime NOT NULL,
  `AliadoEnvio` varchar(30) NOT NULL,
  `NumCorrespondencia` int(11) NOT NULL,
  `IdRadicador` int(11) NOT NULL,
  PRIMARY KEY (`IdEnvio`),
  KEY `NumCorrespondencia` (`NumCorrespondencia`),
  KEY `IdRadicador` (`IdRadicador`),
  CONSTRAINT `registro_envios_ibfk_1` FOREIGN KEY (`NumCorrespondencia`) REFERENCES `ficha_entrada` (`NumCorrespondencia`),
  CONSTRAINT `registro_envios_ibfk_2` FOREIGN KEY (`IdRadicador`) REFERENCES `radicador` (`id_radicador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro_envios`
--

LOCK TABLES `registro_envios` WRITE;
/*!40000 ALTER TABLE `registro_envios` DISABLE KEYS */;
INSERT INTO `registro_envios` VALUES (1,'2023-08-20 12:30:00','Aliado 1',1,3),(2,'2023-08-21 13:30:00','Aliado 2',2,3),(3,'2023-08-22 14:30:00','Aliado 3',3,3);
/*!40000 ALTER TABLE `registro_envios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-20  2:21:49
