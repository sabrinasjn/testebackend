CREATE DATABASE  IF NOT EXISTS `locadora` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `locadora`;
-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: locadora
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `funcionario_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(45) NOT NULL,
  `ultimo_nome` varchar(45) NOT NULL,
  `endereco_id` smallint(5) unsigned NOT NULL,
  `foto` blob DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `loja_id` tinyint(3) unsigned NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `usuario` varchar(16) NOT NULL,
  `senha` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ultima_atualizacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`funcionario_id`),
  KEY `idx_fk_loja_id` (`loja_id`),
  KEY `idx_fk_endereco_id` (`endereco_id`),
  CONSTRAINT `fk_funcionario_endereco` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`endereco_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_funcionario_loja` FOREIGN KEY (`loja_id`) REFERENCES `loja` (`loja_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'Mike','Hillyer',3,NULL,'Mike.Hillyer@sakilastaff.com',1,1,'Mike','8cb2237d0679ca88db6464eac60da96345513964','2006-02-15 04:57:16'),(2,'Jon','Stephens',4,NULL,'Jon.Stephens@sakilastaff.com',2,1,'Jon','8cb2237d0679ca88db6464eac60da96345513964','2006-02-15 04:57:16');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-09 15:15:17
