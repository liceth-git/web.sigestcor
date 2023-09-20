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
-- Table structure for table `correspondencia`
--

DROP TABLE IF EXISTS `correspondencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `correspondencia` (
  `IdCorrespondencia` int(15) NOT NULL AUTO_INCREMENT,
  `EstadoActual` varchar(30) NOT NULL,
  `ultimaActualizacion` datetime NOT NULL,
  `ObservacionesInternas` text DEFAULT NULL,
  `NumCorrespondencia` int(11) NOT NULL,
  `IdRadicado` int(11) NOT NULL,
  `estado` enum('Pendiente','Radicada','Recibida','Enviada') NOT NULL,
  PRIMARY KEY (`IdCorrespondencia`),
  KEY `idx_NumCorrespondencia` (`NumCorrespondencia`),
  KEY `idx_IdRadicado` (`IdRadicado`),
  CONSTRAINT `correspondencia_ibfk_1` FOREIGN KEY (`NumCorrespondencia`) REFERENCES `ficha_entrada` (`NumCorrespondencia`),
  CONSTRAINT `correspondencia_ibfk_2` FOREIGN KEY (`IdRadicado`) REFERENCES `radicador` (`id_radicador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correspondencia`
--

LOCK TABLES `correspondencia` WRITE;
/*!40000 ALTER TABLE `correspondencia` DISABLE KEYS */;
INSERT INTO `correspondencia` VALUES (1,'En proceso','2023-08-20 12:00:00','Observación interna 1',1,3,'Pendiente'),(2,'En espera','2023-08-21 13:00:00','Observación interna 2',2,3,'Pendiente'),(3,'Finalizado','2023-08-22 14:00:00','Observación interna 3',3,3,'Pendiente');
/*!40000 ALTER TABLE `correspondencia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-20  2:21:47
