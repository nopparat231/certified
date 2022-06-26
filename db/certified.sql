-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: us-cdbr-east-05.cleardb.net    Database: heroku_4553c8b8795a2be
-- ------------------------------------------------------
-- Server version	5.6.50-log

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
-- Table structure for table `cer`
--

DROP TABLE IF EXISTS `cer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cer` (
  `id_cer` int(11) NOT NULL AUTO_INCREMENT,
  `id_card` varchar(250) NOT NULL,
  `cer_start` varchar(250) NOT NULL,
  `cer_m_type` varchar(250) NOT NULL,
  `cer_m_name` varchar(250) NOT NULL,
  `cer_temple` varchar(250) NOT NULL,
  `cer_province` varchar(250) NOT NULL,
  `cer_name` varchar(250) NOT NULL,
  `cer_other` varchar(250) NOT NULL,
  `cer_img` varchar(250) NOT NULL,
  `cer_img_1` varchar(250) NOT NULL,
  `cer_img_2` varchar(250) NOT NULL,
  `cer_img_3` varchar(250) NOT NULL,
  `cer_img_4` varchar(250) NOT NULL COMMENT '\n',
  `cer_creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cer`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cer`
--

LOCK TABLES `cer` WRITE;
/*!40000 ALTER TABLE `cer` DISABLE KEYS */;
INSERT INTO `cer` VALUES (74,'Test123','25/06/2565','ประเภทพระ','ชื่อพระ','วัด / กรุ','นนทบุรี','เจ้าของพระ','','272151_card.jpg','987730_002.jpg','176005_001.jpg','987730_002.jpg','8772_000.jpg','2022-06-25 09:12:18'),(84,'Test1234','25/06/2565','ประเภทพระ','ชื่อพระ','วัด / กรุ','นนทบุรี','เจ้าของพระ','','272151_card.jpg','940058_000.jpg','945178_002.jpg','712218_001.jpg','594978_000.jpg','2022-06-25 09:14:30'),(94,'Test9999','25/06/2565','ประเภทพระ','ชื่อพระ','วัด / กรุ','นนทบุรี','เจ้าของพระ','อื่นๆ ทดสอบ','272151_card.jpg','987730_002.jpg','176005_001.jpg','987730_002.jpg','8772_000.jpg','2022-06-26 17:13:39');
/*!40000 ALTER TABLE `cer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'admin','admin@admin.com','123456');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-27  0:16:49
