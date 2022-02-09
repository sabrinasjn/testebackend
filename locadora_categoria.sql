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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `categoria_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `ultima_atualizacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Action','2006-02-15 04:46:27'),(2,'Animation','2006-02-15 04:46:27'),(3,'Children','2006-02-15 04:46:27'),(4,'Classics','2006-02-15 04:46:27'),(5,'Comedy','2006-02-15 04:46:27'),(6,'Documentary','2006-02-15 04:46:27'),(7,'Drama','2006-02-15 04:46:27'),(8,'Family','2006-02-15 04:46:27'),(9,'Foreign','2006-02-15 04:46:27'),(10,'Games','2006-02-15 04:46:27'),(11,'Horror','2006-02-15 04:46:27'),(12,'Music','2006-02-15 04:46:27'),(13,'New','2006-02-15 04:46:27'),(14,'Sci-Fi','2006-02-15 04:46:27'),(15,'Sports','2006-02-15 04:46:27'),(16,'Travel','2006-02-15 04:46:27'),(17,'teste','2021-11-22 13:37:00'),(18,'NOVA','2022-01-27 17:56:57'),(19,'NOVA','2022-01-27 18:17:55'),(20,'NOVA','2022-01-27 18:17:55'),(21,'NOVA','2022-01-27 18:17:55'),(22,'NOVA','2022-01-27 18:17:55'),(23,'NOVA','2022-01-27 18:17:55'),(24,'NOVA','2022-01-27 18:17:55'),(25,'NOVA','2022-01-27 18:17:55'),(26,'NOVA','2022-01-27 18:17:55'),(27,'NOVA','2022-01-27 18:17:55'),(28,'NOVA','2022-01-27 18:17:55'),(29,'NOVA','2022-01-27 18:17:55'),(30,'NOVA','2022-01-27 18:17:55'),(31,'NOVA','2022-01-27 18:17:55'),(32,'NOVA','2022-01-27 18:17:55'),(33,'NOVA','2022-01-27 18:17:55'),(34,'NOVA','2022-01-27 18:17:55'),(35,'NOVA','2022-01-27 18:17:55'),(36,'NOVA','2022-01-27 18:17:55'),(37,'NOVA','2022-01-27 18:17:55'),(38,'NOVA','2022-01-27 18:17:55'),(39,'NOVA','2022-01-27 18:17:55'),(40,'NOVA','2022-01-27 18:17:55'),(41,'NOVA','2022-01-27 18:17:55'),(42,'NOVA','2022-01-27 18:17:55'),(43,'NOVA','2022-01-27 18:17:55'),(44,'NOVA','2022-01-27 18:17:55'),(45,'NOVA','2022-01-27 18:17:55'),(46,'NOVA','2022-01-27 18:17:55'),(47,'NOVA','2022-01-27 18:17:55'),(48,'NOVA','2022-01-27 18:17:55'),(49,'NOVA','2022-01-27 18:17:55'),(50,'NOVA','2022-01-27 18:17:55'),(51,'NOVA','2022-01-27 18:17:55'),(52,'NOVA','2022-01-27 18:17:55'),(53,'NOVA','2022-01-27 18:17:55'),(54,'NOVA','2022-01-27 18:17:55'),(55,'NOVA','2022-01-27 18:17:55'),(56,'NOVA','2022-01-27 18:17:55'),(57,'NOVA','2022-01-27 18:17:55'),(58,'NOVA','2022-01-27 18:17:55'),(59,'NOVA','2022-01-27 18:17:55'),(60,'NOVA','2022-01-27 18:17:55'),(61,'NOVA','2022-01-27 18:17:55'),(62,'NOVA','2022-01-27 18:17:55'),(63,'NOVA','2022-01-27 18:17:55'),(64,'NOVA','2022-01-27 18:17:55'),(65,'NOVA','2022-01-27 18:17:55'),(66,'NOVA','2022-01-27 18:17:55'),(67,'NOVA','2022-01-27 18:17:55'),(68,'NOVA','2022-01-27 18:17:55'),(69,'NOVA','2022-01-27 18:17:55'),(70,'NOVA','2022-01-27 18:17:55'),(71,'NOVA','2022-01-27 18:17:55'),(72,'NOVA','2022-01-27 18:17:55'),(73,'NOVA','2022-01-27 18:17:55'),(74,'NOVA','2022-01-27 18:17:55'),(75,'NOVA','2022-01-27 18:17:55'),(76,'NOVA','2022-01-27 18:17:55'),(77,'NOVA','2022-01-27 18:17:55'),(78,'NOVA','2022-01-27 18:17:55'),(79,'NOVA','2022-01-27 18:17:55'),(80,'NOVA','2022-01-27 18:17:55'),(81,'NOVA','2022-01-27 18:17:55'),(82,'NOVA','2022-01-27 18:17:55'),(83,'NOVA','2022-01-27 18:17:55'),(84,'NOVA','2022-01-27 18:17:55'),(85,'NOVA','2022-01-27 18:17:55'),(86,'NOVA','2022-01-27 18:17:55'),(87,'NOVA','2022-01-27 18:17:55'),(88,'NOVA','2022-01-27 18:17:55'),(89,'NOVA','2022-01-27 18:17:55'),(90,'NOVA','2022-01-27 18:17:55'),(91,'NOVA','2022-01-27 18:17:55'),(92,'NOVA','2022-01-27 18:17:55'),(93,'NOVA','2022-01-27 18:17:55'),(94,'NOVA','2022-01-27 18:17:55'),(95,'NOVA','2022-01-27 18:17:55'),(96,'NOVA','2022-01-27 18:17:55'),(97,'NOVA','2022-01-27 18:17:55'),(98,'NOVA','2022-01-27 18:17:55'),(99,'NOVA','2022-01-27 18:17:55'),(100,'NOVA','2022-01-27 18:17:55'),(101,'NOVA','2022-01-27 18:17:55'),(102,'NOVA','2022-01-27 18:17:55'),(103,'NOVA','2022-01-27 18:17:55'),(104,'NOVA','2022-01-27 18:17:55'),(105,'NOVA','2022-01-27 18:17:55'),(106,'NOVA','2022-01-27 18:17:55'),(107,'NOVA','2022-01-27 18:17:55'),(108,'NOVA','2022-01-27 18:17:55'),(109,'NOVA','2022-01-27 18:17:55'),(110,'NOVA','2022-01-27 18:17:55'),(111,'NOVA','2022-01-27 18:17:55'),(112,'NOVA','2022-01-27 18:17:55'),(113,'NOVA','2022-01-27 18:17:55'),(114,'NOVA','2022-01-27 18:17:55'),(115,'NOVA','2022-01-27 18:17:55'),(116,'NOVA','2022-01-27 18:17:55'),(117,'NOVA','2022-01-27 18:17:55'),(118,'NOVA','2022-01-27 18:17:55'),(119,'NOVA','2022-01-27 19:48:47'),(120,'NOVA','2022-01-27 19:48:47'),(121,'NOVA','2022-01-27 19:48:47'),(122,'NOVA','2022-01-27 19:48:47'),(123,'NOVA','2022-01-27 19:48:47'),(124,'NOVA','2022-01-27 19:48:47'),(125,'NOVA','2022-01-27 19:48:47'),(126,'NOVA','2022-01-27 19:48:47'),(127,'NOVA','2022-01-27 19:48:47'),(128,'NOVA','2022-01-27 19:48:47'),(129,'NOVA','2022-01-27 19:48:47'),(130,'NOVA','2022-01-27 19:48:47'),(131,'NOVA','2022-01-27 19:48:47'),(132,'NOVA','2022-01-27 19:48:47'),(133,'NOVA','2022-01-27 19:48:47'),(134,'NOVA','2022-01-27 19:48:47'),(135,'NOVA','2022-01-27 19:48:47'),(136,'NOVA','2022-01-27 19:48:47'),(137,'NOVA','2022-01-27 19:48:47'),(138,'NOVA','2022-01-27 19:48:47'),(139,'NOVA','2022-01-27 19:48:47'),(140,'NOVA','2022-01-27 19:48:47'),(141,'NOVA','2022-01-27 19:48:47'),(142,'NOVA','2022-01-27 19:48:47'),(143,'NOVA','2022-01-27 19:48:47'),(144,'NOVA','2022-01-27 19:48:47'),(145,'NOVA','2022-01-27 19:48:47'),(146,'NOVA','2022-01-27 19:48:47'),(147,'NOVA','2022-01-27 19:48:47'),(148,'NOVA','2022-01-27 19:48:47'),(149,'NOVA','2022-01-27 19:48:47'),(150,'NOVA','2022-01-27 19:48:47'),(151,'NOVA','2022-01-27 19:48:47'),(152,'NOVA','2022-01-27 19:48:47'),(153,'NOVA','2022-01-27 19:48:47'),(154,'NOVA','2022-01-27 19:48:47'),(155,'NOVA','2022-01-27 19:48:47'),(156,'NOVA','2022-01-27 19:48:47'),(157,'NOVA','2022-01-27 19:48:47'),(158,'NOVA','2022-01-27 19:48:47'),(159,'NOVA','2022-01-27 19:48:47'),(160,'NOVA','2022-01-27 19:48:47'),(161,'NOVA','2022-01-27 19:48:47'),(162,'NOVA','2022-01-27 19:48:47'),(163,'NOVA','2022-01-27 19:48:47'),(164,'NOVA','2022-01-27 19:48:47'),(165,'NOVA','2022-01-27 19:48:47'),(166,'NOVA','2022-01-27 19:48:47'),(167,'NOVA','2022-01-27 19:48:47'),(168,'NOVA','2022-01-27 19:48:47'),(169,'NOVA','2022-01-27 19:48:47'),(170,'NOVA','2022-01-27 19:48:47'),(171,'NOVA','2022-01-27 19:48:47'),(172,'NOVA','2022-01-27 19:48:47'),(173,'NOVA','2022-01-27 19:48:47'),(174,'NOVA','2022-01-27 19:48:47'),(175,'NOVA','2022-01-27 19:48:47'),(176,'NOVA','2022-01-27 19:48:47'),(177,'NOVA','2022-01-27 19:48:47'),(178,'NOVA','2022-01-27 19:48:47'),(179,'NOVA','2022-01-27 19:48:47'),(180,'NOVA','2022-01-27 19:48:47'),(181,'NOVA','2022-01-27 19:48:47'),(182,'NOVA','2022-01-27 19:48:47'),(183,'NOVA','2022-01-27 19:48:47'),(184,'NOVA','2022-01-27 19:48:47'),(185,'NOVA','2022-01-27 19:48:47'),(186,'NOVA','2022-01-27 19:48:47'),(187,'NOVA','2022-01-27 19:48:47'),(188,'NOVA','2022-01-27 19:48:47'),(189,'NOVA','2022-01-27 19:48:47'),(190,'NOVA','2022-01-27 19:48:47'),(191,'NOVA','2022-01-27 19:48:47'),(192,'NOVA','2022-01-27 19:48:48'),(193,'NOVA','2022-01-27 19:48:48'),(194,'NOVA','2022-01-27 19:48:48'),(195,'NOVA','2022-01-27 19:48:48'),(196,'NOVA','2022-01-27 19:48:48'),(197,'NOVA','2022-01-27 19:48:48'),(198,'NOVA','2022-01-27 19:48:48'),(199,'NOVA','2022-01-27 19:48:48'),(200,'NOVA','2022-01-27 19:48:48'),(201,'NOVA','2022-01-27 19:48:48'),(202,'NOVA','2022-01-27 19:48:48'),(203,'NOVA','2022-01-27 19:48:48'),(204,'NOVA','2022-01-27 19:48:48'),(205,'NOVA','2022-01-27 19:48:48'),(206,'NOVA','2022-01-27 19:48:48'),(207,'NOVA','2022-01-27 19:48:48'),(208,'NOVA','2022-01-27 19:48:48'),(209,'NOVA','2022-01-27 19:48:48'),(210,'NOVA','2022-01-27 19:48:48'),(211,'NOVA','2022-01-27 19:48:48'),(212,'NOVA','2022-01-27 19:48:48'),(213,'NOVA','2022-01-27 19:48:48'),(214,'NOVA','2022-01-27 19:48:48'),(215,'NOVA','2022-01-27 19:48:48'),(216,'NOVA','2022-01-27 19:48:48'),(217,'NOVA','2022-01-27 19:48:48'),(218,'NOVA','2022-01-27 19:48:48'),(219,'NOVA','2022-01-27 19:48:48'),(220,'NOVA','2022-01-27 19:48:48'),(221,'NOVA','2022-01-27 19:48:48'),(222,'NOVA','2022-01-27 19:48:48'),(223,'NOVA','2022-01-27 19:48:48'),(224,'NOVA','2022-01-27 19:48:48'),(225,'NOVA','2022-01-27 19:48:48'),(226,'NOVA','2022-01-27 19:48:48'),(227,'NOVA','2022-01-27 19:48:48'),(228,'NOVA','2022-01-27 19:48:48'),(229,'NOVA','2022-01-27 19:48:48'),(230,'NOVA','2022-01-27 19:48:48'),(231,'NOVA','2022-01-27 19:48:48'),(232,'NOVA','2022-01-27 19:48:48'),(233,'NOVA','2022-01-27 19:48:48'),(234,'NOVA','2022-01-27 19:48:48'),(235,'NOVA','2022-01-27 19:48:48'),(236,'NOVA','2022-01-27 19:48:48'),(237,'NOVA','2022-01-27 19:48:48'),(238,'NOVA','2022-01-27 19:48:48'),(239,'NOVA','2022-01-27 19:48:48'),(240,'NOVA','2022-01-27 19:48:48'),(241,'NOVA','2022-01-27 19:48:48'),(242,'NOVA','2022-01-27 19:48:48'),(243,'NOVA','2022-01-27 19:48:48'),(244,'NOVA','2022-01-27 19:48:48'),(245,'NOVA','2022-01-27 19:48:48'),(246,'NOVA','2022-01-27 19:48:48'),(247,'NOVA','2022-01-27 19:48:48'),(248,'NOVA','2022-01-27 19:48:48'),(249,'NOVA','2022-01-27 19:48:48'),(250,'NOVA','2022-01-27 19:48:48'),(251,'NOVA','2022-01-27 19:48:48'),(252,'NOVA','2022-01-27 19:48:48'),(253,'NOVA','2022-01-27 19:48:48'),(254,'NOVA','2022-01-27 19:48:48'),(255,'NOVA','2022-01-27 19:48:48');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-09 15:15:16