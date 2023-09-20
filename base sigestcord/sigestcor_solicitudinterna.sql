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
-- Table structure for table `solicitudinterna`
--

DROP TABLE IF EXISTS `solicitudinterna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitudinterna` (
  `IdSolicitud_interna` int(11) NOT NULL AUTO_INCREMENT,
  `FechaSolicitud` date NOT NULL,
  `DepartamentoOrigen` varchar(40) NOT NULL,
  `DepartamentoDestino` varchar(40) NOT NULL,
  `EstadoSolicitud` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  `IdFuncionario` int(11) DEFAULT NULL,
  `IdRadicador` int(11) DEFAULT NULL,
  `estado` enum('Pendiente','Radicada','Recibida','Enviada') NOT NULL,
  PRIMARY KEY (`IdSolicitud_interna`),
  KEY `IdFuncionario` (`IdFuncionario`),
  KEY `IdRadicador` (`IdRadicador`),
  CONSTRAINT `solicitudinterna_ibfk_1` FOREIGN KEY (`IdFuncionario`) REFERENCES `funcionario` (`id_funcionario`),
  CONSTRAINT `solicitudinterna_ibfk_2` FOREIGN KEY (`IdRadicador`) REFERENCES `radicador` (`id_radicador`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudinterna`
--

LOCK TABLES `solicitudinterna` WRITE;
/*!40000 ALTER TABLE `solicitudinterna` DISABLE KEYS */;
INSERT INTO `solicitudinterna` VALUES (4,'2023-08-15','Departamento A','Departamento B','Pendiente','Solicitud de prueba 1',2,3,'Pendiente'),(5,'2023-08-20','Departamento C','Departamento D','Aprobada','Solicitud de prueba 2',2,3,'Pendiente'),(6,'2023-08-25','Departamento E','Departamento F','Rechazada','Solicitud de prueba 3',2,3,'Pendiente');
/*!40000 ALTER TABLE `solicitudinterna` ENABLE KEYS */;
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
