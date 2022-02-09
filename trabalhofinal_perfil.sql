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
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id_perfil` int(5) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`id_perfil`),
  UNIQUE KEY `perfil` (`perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (241,'\0'),(100,'\"'),(144,'\"+response.write([896.058*943.451)+\"'),(141,'\";print(chr(122).chr(97).chr(112).chr(95).chr'),(83,'\"><!--#EXEC cmd=\"dir \"--><'),(81,'\"><!--#EXEC cmd=\"ls /\"--><'),(250,'#javascript:alert(5397)'),(142,'${@print(chr(122).chr(97).chr(112).chr(95).ch'),(240,'+'),(145,'+response.write({0}*{1})+'),(16,'................................Windowssystem'),(14,'../../../../../../../../../../../../../../../'),(20,'/'),(67,'//3243660860254800031.owasp.org'),(17,'/etc/passwd'),(24,'/WEB-INF/web.xml'),(109,'0'),(88,'0W45pz4p'),(62,'3243660860254800031.owasp.org'),(102,';'),(143,';print(chr(122).chr(97).chr(112).chr(95).chr('),(82,'<!--#EXEC cmd=\"dir \"-->'),(80,'<!--#EXEC cmd=\"ls /\"-->'),(99,'</option><script>alert(1);</script><option>'),(251,'?name=abc#<img src=\"random.gif\" onerror=alert'),(239,'@'),(3,'ADEME'),(227,'any\nSet-cookie: Tamper=6667ffcf-b0ed-4d70-8f3'),(225,'any\r\nSet-cookie: Tamper=6667ffcf-b0ed-4d70-8f'),(228,'any?\nSet-cookie: Tamper=6667ffcf-b0ed-4d70-8f'),(226,'any?\r\nSet-cookie: Tamper=6667ffcf-b0ed-4d70-8'),(19,'c:/'),(13,'c:/Windows/system.ini'),(15,'c:Windowssystem.ini'),(155,'cat /etc/passwd'),(216,'DIgQNFONllvcIxCAtiZAVHLnimTnYDpFkshyamtJVaFwM'),(173,'get-help'),(63,'http://3243660860254800031.owasp.org'),(44,'http://www.google.com'),(42,'http://www.google.com/'),(45,'http://www.google.com/search?q=OWASP%20ZAP'),(43,'http://www.google.com:80/'),(46,'http://www.google.com:80/search?q=OWASP%20ZAP'),(65,'http:\\3243660860254800031.owasp.org'),(64,'https://3243660860254800031.owasp.org'),(66,'https:\\3243660860254800031.owasp.org'),(146,'response.write(896.058*943.451)'),(224,'Set-cookie: Tamper=6667ffcf-b0ed-4d70-8f35-f1'),(26,'thishouldnotexistandhopefullyitwillnot'),(164,'type %SYSTEMROOT%win.ini'),(22,'WEB-INF/web.xml'),(23,'WEB-INFweb.xml'),(49,'www.google.com'),(47,'www.google.com/'),(50,'www.google.com/search?q=OWASP%20ZAP'),(48,'www.google.com:80/'),(51,'www.google.com:80/search?q=OWASP%20ZAP'),(12,'ZAP'),(220,'ZAP %1!s%2!s%3!s%4!s%5!s%6!s%7!s%8!s%9!s%10!s'),(108,'ZAP AND 1=1'),(106,'ZAP AND 1=1 -- '),(111,'ZAP UNION ALL select NULL -- '),(101,'ZAP\"'),(110,'ZAP\" AND \"1\"=\"1'),(107,'ZAP\" AND \"1\"=\"1\" -- '),(112,'ZAP\" UNION ALL select NULL -- '),(158,'ZAP\"&cat /etc/passwd&\"'),(162,'ZAP\"&sleep 15&\"'),(171,'ZAP\"&timeout /T 15&\"'),(167,'ZAP\"&type %SYSTEMROOT%win.ini&\"'),(159,'ZAP\";cat /etc/passwd;\"'),(175,'ZAP\";get-help'),(163,'ZAP\";sleep 15;\"'),(178,'ZAP\";start-sleep -s 15'),(172,'ZAP\"|timeout /T 15'),(168,'ZAP\"|type %SYSTEMROOT%win.ini'),(219,'ZAP%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n%s%n'),(156,'ZAP&cat /etc/passwd&'),(160,'ZAP&sleep 15&'),(169,'ZAP&timeout /T 15'),(165,'ZAP&type %SYSTEMROOT%win.ini'),(113,'ZAP) UNION ALL select NULL -- '),(89,'ZAP0W45pz4p'),(103,'ZAP;'),(157,'ZAP;cat /etc/passwd;'),(174,'ZAP;get-help'),(176,'ZAP;get-help #'),(161,'ZAP;sleep 15;'),(177,'ZAP;start-sleep -s 15'),(179,'ZAP;start-sleep -s 15 #'),(95,'zApPX13sS'),(170,'ZAP|timeout /T 15'),(166,'ZAP|type %SYSTEMROOT%win.ini'),(68,'\\3243660860254800031.owasp.org'),(242,'|');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
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
