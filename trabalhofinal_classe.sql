CREATE DATABASE  IF NOT EXISTS `trabalhofinal` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `trabalhofinal`;
-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: trabalhofinal
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
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classe` (
  `id_classe` int(5) NOT NULL AUTO_INCREMENT,
  `classe` varchar(45) NOT NULL,
  PRIMARY KEY (`id_classe`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classe`
--

LOCK TABLES `classe` WRITE;
/*!40000 ALTER TABLE `classe` DISABLE KEYS */;
INSERT INTO `classe` VALUES (59,'\";print(chr(122).chr(97).chr(112).chr(95).chr'),(60,'${@print(chr(122).chr(97).chr(112).chr(95).ch'),(61,';print(chr(122).chr(97).chr(112).chr(95).chr('),(62,'\"+response.write([620.288*460.447)+\"'),(63,'+response.write({0}*{1})+'),(64,'response.write(620.288*460.447)'),(65,'ZAP'),(66,'cat /etc/passwd'),(67,'ZAP&cat /etc/passwd&'),(68,'ZAP;cat /etc/passwd;'),(69,'ZAP\"&cat /etc/passwd&\"'),(70,'ZAP\";cat /etc/passwd;\"'),(71,'ZAP&sleep 15&'),(72,'ZAP;sleep 15;'),(73,'ZAP\"&sleep 15&\"'),(74,'ZAP\";sleep 15;\"'),(75,'type %SYSTEMROOT%win.ini'),(76,'ZAP&type %SYSTEMROOT%win.ini'),(77,'ZAP|type %SYSTEMROOT%win.ini'),(78,'ZAP\"&type %SYSTEMROOT%win.ini&\"'),(79,'ZAP\"|type %SYSTEMROOT%win.ini'),(80,'ZAP&timeout /T 15'),(81,'ZAP|timeout /T 15'),(82,'ZAP\"&timeout /T 15&\"'),(83,'ZAP\"|timeout /T 15'),(84,'get-help'),(85,'ZAP;get-help'),(86,'ZAP\";get-help'),(87,'ZAP;get-help #'),(88,'ZAP;start-sleep -s 15'),(89,'ZAP\";start-sleep -s 15'),(90,'ZAP;start-sleep -s 15 #'),(91,'TJhmTisumSIIvrlgBFSrtkyHfGaBfFuGJbrdkBVfZhwOe'),(92,'ZAP%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n'),(93,'ZAP %1!s%2!s%3!s%4!s%5!s%6!s%7!s%8!s%9!s%10!s'),(94,'Set-cookie: Tamper=42e26a30-6151-4370-9482-1c'),(95,'any\r\nSet-cookie: Tamper=42e26a30-6151-4370-94'),(96,'any?\r\nSet-cookie: Tamper=42e26a30-6151-4370-9'),(97,'any\nSet-cookie: Tamper=42e26a30-6151-4370-948'),(98,'any?\nSet-cookie: Tamper=42e26a30-6151-4370-94'),(99,'any\r\nSet-cookie: Tamper=42e26a30-6151-4370-94'),(100,'any?\r\nSet-cookie: Tamper=42e26a30-6151-4370-9'),(101,''),(102,'@'),(103,'+'),(104,'\0'),(105,'|'),(106,'#javascript:alert(5397)'),(107,'?name=abc#<img src=\"random.gif\" onerror=alert'),(108,'?name=abc#<img src=\"random.gif\" onerror=alert');
/*!40000 ALTER TABLE `classe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-09 15:15:18
