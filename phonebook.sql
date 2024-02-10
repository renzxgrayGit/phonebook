CREATE DATABASE  IF NOT EXISTS `phonebook` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `phonebook`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: phonebook
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `action` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (2,'twotwo','09222222333','Show Edit Remove','2024-02-10 01:50:am','2024-02-10 01:50:am'),(5,'payb','09955555555','Show Edit Remove','2024-02-10 01:59:am','2024-02-10 01:59:am'),(6,'tix','09666666666','Show Edit Remove','2024-02-10 01:59:am','2024-02-10 01:59:am'),(8,'renz','09933696153','Show Edit Remove','2024-02-10 02:00:am','2024-02-10 02:00:am'),(9,'runz','09933696154','Show Edit Remove','2024-02-10 02:07:am','2024-02-10 02:07:am'),(12,'d','09933696159','Show Edit Remove','2024-02-10 02:18:am','2024-02-10 02:18:am'),(13,'da','09933696151','Show Edit Remove','2024-02-10 02:19:am','2024-02-10 02:19:am'),(14,'hackerhero','31231231335','Show Edit Remove','2024-02-10 02:20:am','2024-02-10 02:20:am'),(15,'adwdaw','12312312541','Show Edit Remove','2024-02-10 02:20:am','2024-02-10 02:20:am'),(16,'qewet','332313132555','Show Edit Remove','2024-02-10 02:21:am','2024-02-10 02:21:am'),(18,'gagle','09933696156','Show Edit Remove','2024-02-10 02:28:am','2024-02-10 02:28:am'),(21,'twentyone','0945890490','Show','2024-02-10 11:01:am','2024-02-10 11:01:am'),(30,'twentytwooo','09933696123',' ','2024-02-10 09:49:pm','2024-02-10 09:49:pm'),(31,'ming','09121231234',' ','2024-02-10 10:37:pm','2024-02-10 10:37:pm'),(32,'renzo chris','09458904444',' ','2024-02-10 10:47:pm','2024-02-10 10:47:pm'),(33,'renzo cabajar','093123451313',' ','2024-02-10 10:48:pm','2024-02-10 10:48:pm');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-10 23:42:43
