-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: matrimony
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.13-MariaDB

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
-- Table structure for table `fl_annual_income`
--

DROP TABLE IF EXISTS `fl_annual_income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_annual_income` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_annual_income`
--

LOCK TABLES `fl_annual_income` WRITE;
/*!40000 ALTER TABLE `fl_annual_income` DISABLE KEYS */;
INSERT INTO `fl_annual_income` VALUES (1,'None','2020-07-02 01:38:30','2020-07-05 20:49:37'),(3,'Rs. 2 – 3 Lacs','2020-07-03 02:12:59','2020-07-03 02:12:59'),(4,'Rs. 3 – 5 Lacs','2020-07-03 02:13:39','2020-07-03 02:13:39'),(5,'Rs. 5 – 10 Lacs','2020-07-03 02:14:32','2020-07-03 02:14:32'),(6,'Rs. 10 – 15 Lacs','2020-07-03 02:15:12','2020-07-03 02:15:12'),(7,'Above 15 Lacs','2020-07-03 02:15:19','2020-07-03 02:15:19'),(16,'Rs. 1 – 2 Lacs','2020-07-03 22:17:41','2020-07-03 22:18:42');
/*!40000 ALTER TABLE `fl_annual_income` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_blood_group`
--

DROP TABLE IF EXISTS `fl_blood_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_blood_group` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_blood_group`
--

LOCK TABLES `fl_blood_group` WRITE;
/*!40000 ALTER TABLE `fl_blood_group` DISABLE KEYS */;
INSERT INTO `fl_blood_group` VALUES (1,'A+','2020-07-03 03:01:09','2020-07-03 03:01:09'),(2,'A-','2020-07-10 02:11:18','2020-07-10 02:11:18'),(3,'AB+','2020-07-10 02:11:23','2020-07-10 02:11:23'),(4,'AB-','2020-07-10 02:11:28','2020-07-10 02:11:28'),(5,'B+','2020-07-10 02:11:32','2020-07-10 02:11:32'),(6,'B-','2020-07-10 02:11:35','2020-07-10 02:11:35'),(7,'O+','2020-07-10 02:11:40','2020-07-10 02:11:40'),(8,'O-','2020-07-10 02:11:44','2020-07-10 02:11:44'),(9,'Other','2020-07-10 02:11:47','2020-07-10 02:11:47');
/*!40000 ALTER TABLE `fl_blood_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_body_type`
--

DROP TABLE IF EXISTS `fl_body_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_body_type` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_body_type`
--

LOCK TABLES `fl_body_type` WRITE;
/*!40000 ALTER TABLE `fl_body_type` DISABLE KEYS */;
INSERT INTO `fl_body_type` VALUES (1,'Slim','2020-07-03 22:22:11','2020-07-03 22:22:11'),(2,'Athletic','2020-07-10 02:11:56','2020-07-10 02:12:02'),(3,'Average','2020-07-10 02:12:06','2020-07-10 02:12:06'),(4,'Heavy','2020-07-10 02:12:09','2020-07-10 02:12:09');
/*!40000 ALTER TABLE `fl_body_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_city`
--

DROP TABLE IF EXISTS `fl_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_city` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `state` int(3) NOT NULL,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_city`
--

LOCK TABLES `fl_city` WRITE;
/*!40000 ALTER TABLE `fl_city` DISABLE KEYS */;
INSERT INTO `fl_city` VALUES (3,3,'new city','2020-07-12 20:54:39','2020-07-12 20:54:39'),(4,4,'Englandd is my city','2020-07-12 20:57:42','2020-07-12 20:57:42');
/*!40000 ALTER TABLE `fl_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_complexion`
--

DROP TABLE IF EXISTS `fl_complexion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_complexion` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_complexion`
--

LOCK TABLES `fl_complexion` WRITE;
/*!40000 ALTER TABLE `fl_complexion` DISABLE KEYS */;
INSERT INTO `fl_complexion` VALUES (1,'Fair','2020-07-10 02:12:18','2020-07-12 15:01:25'),(2,'Very Fair','2020-07-10 02:12:21','2020-07-10 02:12:21'),(3,'Wheatish','2020-07-10 02:12:24','2020-07-10 02:12:24'),(4,'Dark','2020-07-10 02:12:28','2020-07-10 02:12:28');
/*!40000 ALTER TABLE `fl_complexion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_country`
--

DROP TABLE IF EXISTS `fl_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_country` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_country`
--

LOCK TABLES `fl_country` WRITE;
/*!40000 ALTER TABLE `fl_country` DISABLE KEYS */;
INSERT INTO `fl_country` VALUES (1,'India','2020-07-12 15:56:46','2020-07-12 16:16:02'),(3,'England','2020-07-12 15:59:37','2020-07-12 15:59:37');
/*!40000 ALTER TABLE `fl_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_denomination`
--

DROP TABLE IF EXISTS `fl_denomination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_denomination` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_denomination`
--

LOCK TABLES `fl_denomination` WRITE;
/*!40000 ALTER TABLE `fl_denomination` DISABLE KEYS */;
INSERT INTO `fl_denomination` VALUES (10,'Prophet','2020-07-14 23:18:23','2020-07-14 23:18:23'),(11,'Apostle','2020-07-14 23:18:27','2020-07-14 23:18:27'),(12,'Evangelist','2020-07-14 23:18:31','2020-07-14 23:18:31'),(13,'Pastor','2020-07-14 23:18:34','2020-07-14 23:18:34'),(14,'Bible Teacher','2020-07-14 23:18:38','2020-07-14 23:18:38'),(15,'Preacher','2020-07-14 23:18:42','2020-07-14 23:18:42'),(16,'Worshipper','2020-07-14 23:18:45','2020-07-14 23:18:45'),(17,'Translator','2020-07-14 23:18:49','2020-07-14 23:18:49'),(18,'Sunday School','2020-07-14 23:18:53','2020-07-14 23:18:53'),(19,'Leader','2020-07-14 23:18:58','2020-07-14 23:18:58'),(20,'Other','2020-07-14 23:19:01','2020-07-14 23:19:01'),(21,'No Any','2020-07-14 23:19:05','2020-07-14 23:19:05');
/*!40000 ALTER TABLE `fl_denomination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_diet`
--

DROP TABLE IF EXISTS `fl_diet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_diet` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_diet`
--

LOCK TABLES `fl_diet` WRITE;
/*!40000 ALTER TABLE `fl_diet` DISABLE KEYS */;
INSERT INTO `fl_diet` VALUES (1,'Vegetarian','2020-07-10 02:13:29','2020-07-10 02:13:29'),(2,'Non-Vegetarian','2020-07-10 02:13:32','2020-07-10 02:13:32'),(3,'Eggetarian','2020-07-10 02:13:35','2020-07-10 02:13:35');
/*!40000 ALTER TABLE `fl_diet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_height`
--

DROP TABLE IF EXISTS `fl_height`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_height` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_height`
--

LOCK TABLES `fl_height` WRITE;
/*!40000 ALTER TABLE `fl_height` DISABLE KEYS */;
INSERT INTO `fl_height` VALUES (1,'4\' 6\"','2020-07-10 02:14:01','2020-07-10 02:14:01'),(2,'4\' 7\"','2020-07-10 02:14:04','2020-07-10 02:14:04'),(3,'4\' 8\"','2020-07-10 02:14:08','2020-07-10 02:14:08'),(4,'4\' 9\"','2020-07-10 02:14:11','2020-07-10 02:14:11'),(5,'4\' 10\"','2020-07-10 02:14:14','2020-07-10 02:14:14'),(6,'4\' 11\"','2020-07-10 02:14:18','2020-07-10 02:14:18'),(7,'5\' 0\"','2020-07-10 02:14:26','2020-07-10 02:14:26'),(8,'5\' 1\"','2020-07-10 02:14:31','2020-07-10 02:14:31'),(9,'5\' 2\"','2020-07-10 02:14:35','2020-07-10 02:14:35'),(11,'5\' 4\"','2020-07-10 02:14:41','2020-07-10 02:14:41'),(12,'5\' 5\"','2020-07-10 02:14:44','2020-07-10 02:14:44'),(13,'5\' 6\"','2020-07-10 02:14:47','2020-07-10 02:14:47'),(14,'5\' 7\"','2020-07-10 02:14:51','2020-07-10 02:14:51'),(15,'5\' 8\"','2020-07-10 02:14:53','2020-07-10 02:14:53'),(16,'5\' 9\"','2020-07-10 02:14:56','2020-07-10 02:14:56'),(17,'5\' 10\"','2020-07-10 02:14:58','2020-07-10 02:14:58'),(18,'5\' 11\"','2020-07-10 02:15:02','2020-07-10 02:15:02'),(19,'6\' 0\"','2020-07-10 02:15:14','2020-07-10 02:15:14'),(20,'6\' 1\"','2020-07-10 02:15:23','2020-07-10 02:15:23'),(21,'6\' 2\"','2020-07-10 02:15:27','2020-07-10 02:15:27'),(22,'6\' 3\"','2020-07-10 02:15:32','2020-07-10 02:15:32'),(23,'6\' 4\"','2020-07-10 02:15:35','2020-07-10 02:15:35'),(24,'6\' 5\"','2020-07-10 02:15:39','2020-07-10 02:15:39'),(25,'6\' 6\"','2020-07-10 02:15:46','2020-07-10 02:15:46'),(26,'6\' 7\"','2020-07-10 02:15:49','2020-07-10 02:15:49'),(27,'6\' 8\"','2020-07-10 02:15:51','2020-07-10 02:15:51'),(28,'6\' 9\"','2020-07-10 02:15:54','2020-07-10 02:15:54'),(29,'6\' 10\"','2020-07-10 02:15:57','2020-07-10 02:15:57'),(31,'5\' 3\"','2020-07-10 02:16:47','2020-07-10 02:16:47'),(32,'6\' 11\"','2020-07-10 02:16:57','2020-07-10 02:16:57'),(33,'7\' 0\"','2020-07-10 02:17:04','2020-07-10 02:17:04'),(34,'7\' 1\"','2020-07-10 02:17:11','2020-07-10 02:17:11'),(35,'7\' 2\"','2020-07-10 02:17:14','2020-07-10 02:17:14'),(36,'7\' 3\"','2020-07-10 02:17:18','2020-07-10 02:17:18'),(37,'7\' 4\"','2020-07-10 02:17:22','2020-07-10 02:17:22'),(38,'7\' 5\"','2020-07-10 02:17:26','2020-07-10 02:17:26'),(39,'7\' 6\"','2020-07-10 02:17:30','2020-07-10 02:17:30'),(40,'7\' 7\"','2020-07-10 02:17:34','2020-07-10 02:17:34'),(41,'7\' 8\"','2020-07-10 02:17:39','2020-07-10 02:17:39'),(42,'7\' 9\"','2020-07-10 02:17:43','2020-07-10 02:17:43'),(43,'7\' 10\"','2020-07-10 02:17:47','2020-07-10 02:17:47'),(44,'7\' 11\"','2020-07-10 02:17:50','2020-07-10 02:17:50');
/*!40000 ALTER TABLE `fl_height` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_highest_education`
--

DROP TABLE IF EXISTS `fl_highest_education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_highest_education` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_highest_education`
--

LOCK TABLES `fl_highest_education` WRITE;
/*!40000 ALTER TABLE `fl_highest_education` DISABLE KEYS */;
INSERT INTO `fl_highest_education` VALUES (1,'Uneducated','2020-07-10 02:10:28','2020-07-12 15:01:33'),(2,'Middle School','2020-07-10 02:10:36','2020-07-10 02:10:36'),(3,'High School','2020-07-10 02:10:43','2020-07-10 02:10:43'),(4,'Higher Secondary','2020-07-10 02:10:47','2020-07-10 02:10:47'),(5,'Graduate','2020-07-10 02:10:50','2020-07-10 02:10:50'),(6,'Post Graduate','2020-07-10 02:10:53','2020-07-10 02:10:53'),(7,'Doctorate','2020-07-10 02:10:56','2020-07-10 02:10:56'),(8,'PhD','2020-07-10 02:11:00','2020-07-10 02:11:00'),(9,'Other','2020-07-10 02:11:03','2020-07-10 02:11:03');
/*!40000 ALTER TABLE `fl_highest_education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_language`
--

DROP TABLE IF EXISTS `fl_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_language` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_language`
--

LOCK TABLES `fl_language` WRITE;
/*!40000 ALTER TABLE `fl_language` DISABLE KEYS */;
INSERT INTO `fl_language` VALUES (1,'English','2020-07-10 02:23:57','2020-07-10 02:23:57');
/*!40000 ALTER TABLE `fl_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_martial_status`
--

DROP TABLE IF EXISTS `fl_martial_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_martial_status` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_martial_status`
--

LOCK TABLES `fl_martial_status` WRITE;
/*!40000 ALTER TABLE `fl_martial_status` DISABLE KEYS */;
INSERT INTO `fl_martial_status` VALUES (1,'Never Married','2020-07-07 00:10:40','2020-07-07 00:10:40'),(2,'Divorced','2020-07-07 00:10:47','2020-07-07 00:10:47'),(3,'Married','2020-07-07 00:10:56','2020-07-07 00:10:56'),(4,'Widowed','2020-07-07 00:11:04','2020-07-07 00:11:04'),(5,'Seperated','2020-07-07 00:11:08','2020-07-07 00:11:08');
/*!40000 ALTER TABLE `fl_martial_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_ministry`
--

DROP TABLE IF EXISTS `fl_ministry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_ministry` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_ministry`
--

LOCK TABLES `fl_ministry` WRITE;
/*!40000 ALTER TABLE `fl_ministry` DISABLE KEYS */;
INSERT INTO `fl_ministry` VALUES (9,'Believer','2020-07-14 23:19:59','2020-07-14 23:19:59'),(10,'Born Again','2020-07-14 23:20:03','2020-07-14 23:20:03'),(11,'Pentecostal','2020-07-14 23:20:07','2020-07-14 23:20:07'),(12,'Brethren','2020-07-14 23:20:11','2020-07-14 23:20:11'),(13,'Evangelical','2020-07-14 23:20:14','2020-07-14 23:20:14'),(14,'CNI / Protestant','2020-07-14 23:20:18','2020-07-14 23:20:18'),(15,'Methodist','2020-07-14 23:20:22','2020-07-14 23:20:22'),(16,'Roman Catholic','2020-07-14 23:20:26','2020-07-14 23:20:26'),(17,'Others','2020-07-14 23:20:29','2020-07-14 23:20:29');
/*!40000 ALTER TABLE `fl_ministry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_occupation`
--

DROP TABLE IF EXISTS `fl_occupation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_occupation` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_occupation`
--

LOCK TABLES `fl_occupation` WRITE;
/*!40000 ALTER TABLE `fl_occupation` DISABLE KEYS */;
INSERT INTO `fl_occupation` VALUES (1,'Unemployed','2020-07-10 02:24:19','2020-07-10 02:24:19'),(2,'Student','2020-07-10 02:24:22','2020-07-10 02:24:22');
/*!40000 ALTER TABLE `fl_occupation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_partner_expectation`
--

DROP TABLE IF EXISTS `fl_partner_expectation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_partner_expectation` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_partner_expectation`
--

LOCK TABLES `fl_partner_expectation` WRITE;
/*!40000 ALTER TABLE `fl_partner_expectation` DISABLE KEYS */;
INSERT INTO `fl_partner_expectation` VALUES (1,'Age','2020-07-10 02:24:31','2020-07-10 02:24:31'),(2,'Education','2020-07-10 02:24:36','2020-07-10 02:24:36');
/*!40000 ALTER TABLE `fl_partner_expectation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fl_state`
--

DROP TABLE IF EXISTS `fl_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fl_state` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `country` int(3) NOT NULL,
  `field_value` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_state`
--

LOCK TABLES `fl_state` WRITE;
/*!40000 ALTER TABLE `fl_state` DISABLE KEYS */;
INSERT INTO `fl_state` VALUES (1,1,'State1','2020-07-12 16:31:23','2020-07-12 16:34:23'),(4,3,'eng state','2020-07-12 20:57:26','2020-07-12 20:57:26');
/*!40000 ALTER TABLE `fl_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_users`
--

DROP TABLE IF EXISTS `system_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_users`
--

LOCK TABLES `system_users` WRITE;
/*!40000 ALTER TABLE `system_users` DISABLE KEYS */;
INSERT INTO `system_users` VALUES (3,'admin','$2y$10$Kf/ier3EQzVUbN7BcGoMAuiKMCt/ZuKyktEFNJmFYHwLMQ1Sr.a3y','2020-07-03 02:04:17','2020-07-03 02:04:17');
/*!40000 ALTER TABLE `system_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_basic_details`
--

DROP TABLE IF EXISTS `user_basic_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_basic_details` (
  `user_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `martial_status` int(2) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_basic_details`
--

LOCK TABLES `user_basic_details` WRITE;
/*!40000 ALTER TABLE `user_basic_details` DISABLE KEYS */;
INSERT INTO `user_basic_details` VALUES (17,'','','','',0,'181818','','','','','2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,'My Username','surnam','2020-07-15','female',3,'711833115','3','4','4','1213','2020-07-14 23:53:06','2020-07-16 19:26:30'),(19,'user 2 ','surname 2','2020-07-16','female',2,'711833114','3','4','4','785','2020-07-16 04:09:30','2020-07-16 04:32:46'),(20,'test user ','test user surname ','1998-07-16','male',4,'711833113','3','4','4','4512','2020-07-16 19:21:06','2020-07-16 19:21:55');
/*!40000 ALTER TABLE `user_basic_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_church_details`
--

DROP TABLE IF EXISTS `user_church_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_church_details` (
  `user_id` int(5) unsigned NOT NULL,
  `name_church_priest` varchar(100) NOT NULL,
  `church_contact_no` varchar(100) NOT NULL,
  `denomination` varchar(100) NOT NULL,
  `name_church` varchar(100) NOT NULL,
  `church_add` varchar(100) NOT NULL,
  `year_baptism` varchar(100) NOT NULL,
  `ministry` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_church_details`
--

LOCK TABLES `user_church_details` WRITE;
/*!40000 ALTER TABLE `user_church_details` DISABLE KEYS */;
INSERT INTO `user_church_details` VALUES (16,'','','','','','','','2020-07-13 23:00:50','2020-07-13 23:00:50'),(17,'','','','','','','','2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,'church priest ','784546513','14','hshshs','hshz','7875','13','2020-07-14 23:53:06','2020-07-15 21:07:44'),(19,'church name ','784542139','12','dhdhsj','hdhdbdd','45231','13','2020-07-16 04:09:30','2020-07-16 04:18:32'),(20,'chrch prist name ','74851239','13','name of chructjh','church addresd','70845','12','2020-07-16 19:21:06','2020-07-16 19:23:19');
/*!40000 ALTER TABLE `user_church_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_family_details`
--

DROP TABLE IF EXISTS `user_family_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_family_details` (
  `user_id` int(5) unsigned NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `no_brothers` int(5) NOT NULL,
  `no_sisters` int(5) NOT NULL,
  `parent_contact` int(5) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_family_details`
--

LOCK TABLES `user_family_details` WRITE;
/*!40000 ALTER TABLE `user_family_details` DISABLE KEYS */;
INSERT INTO `user_family_details` VALUES (17,'','',0,0,0,'2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,'father nMe','mok name ',0,0,0,'2020-07-14 23:53:06','2020-07-16 18:31:05'),(19,'father name','mom name',1,1,2147483647,'2020-07-16 04:09:30','2020-07-16 04:18:11'),(20,'dad name','mom.name ',4,54,711833145,'2020-07-16 19:21:06','2020-07-16 19:22:52');
/*!40000 ALTER TABLE `user_family_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_personal_details`
--

DROP TABLE IF EXISTS `user_personal_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_personal_details` (
  `user_id` int(5) unsigned NOT NULL,
  `highest_edu` int(5) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `occupation` int(5) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `annual_income` int(5) NOT NULL,
  `mother_tongue` int(5) NOT NULL,
  `language` int(5) NOT NULL,
  `drink` int(2) NOT NULL,
  `smoke` int(2) NOT NULL,
  `diet` int(2) NOT NULL,
  `partner_expectation` int(2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_personal_details`
--

LOCK TABLES `user_personal_details` WRITE;
/*!40000 ALTER TABLE `user_personal_details` DISABLE KEYS */;
INSERT INTO `user_personal_details` VALUES (17,0,'',0,'',0,0,0,0,0,0,0,'2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,2,'nzjsjssj',1,'jhshs',3,1,1,0,0,2,1,'2020-07-14 23:53:06','2020-07-15 03:33:31'),(19,1,'sjsghzhs',2,'ushs',6,1,1,1,1,2,1,'2020-07-16 04:09:30','2020-07-16 04:17:37'),(20,1,'bshsjs',2,'jdjss',5,1,1,0,0,2,1,'2020-07-16 19:21:06','2020-07-16 19:22:16');
/*!40000 ALTER TABLE `user_personal_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_photos`
--

DROP TABLE IF EXISTS `user_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_photos` (
  `user_id` int(5) unsigned NOT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_photos`
--

LOCK TABLES `user_photos` WRITE;
/*!40000 ALTER TABLE `user_photos` DISABLE KEYS */;
INSERT INTO `user_photos` VALUES (17,'1594761473_2456083aa1acc6614411.jpg','1594761473_1be37c7c924827f7300b.jpg','1594761473_5a7f9aa944c8db8789ce.jpg','1594761473_f03b620ecd5dda289f1d.jpg','2020-07-14 23:42:05','2020-07-15 02:47:53'),(18,'1594904737_5da4e11b93dc16ecc375.jpg','1594904737_16bd5d3f3b7a0cd2f1c1.jpg','1594904737_f4a3cdd3434a77e61bce.jpg','1594761591_bae03deb0a949279aa30.jpg','2020-07-14 23:53:06','2020-07-16 18:35:37'),(19,'1594854649_01ad831bf33fe61dab67.jpg','1594905417_e3ba25c28173d6fbb9c8.jpg',NULL,'1594905417_dda53081acaca81dd7c4.jpg','2020-07-16 04:09:30','2020-07-16 18:46:57'),(20,'1594907631_8368d5cfd7384637a897.jpg','1594907631_38fe95da02c69dda7c8e.jpg',NULL,NULL,'2020-07-16 19:21:06','2020-07-16 19:23:51');
/*!40000 ALTER TABLE `user_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_physical_details`
--

DROP TABLE IF EXISTS `user_physical_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_physical_details` (
  `user_id` int(5) unsigned NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `complexion` int(5) NOT NULL,
  `blood_group` int(5) NOT NULL,
  `body_type` int(5) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_physical_details`
--

LOCK TABLES `user_physical_details` WRITE;
/*!40000 ALTER TABLE `user_physical_details` DISABLE KEYS */;
INSERT INTO `user_physical_details` VALUES (17,0,0,0,0,0,'','2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,3,13,3,4,4,'no diavality ','2020-07-14 23:53:06','2020-07-15 03:33:52'),(19,1,12,3,4,4,'ysusus','2020-07-16 04:09:30','2020-07-16 04:17:55'),(20,5,0,4,3,3,'no disability','2020-07-16 19:21:06','2020-07-16 19:22:32');
/*!40000 ALTER TABLE `user_physical_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `registrationComplete` int(2) NOT NULL DEFAULT 0,
  `verified` int(2) NOT NULL DEFAULT 0,
  `banned` int(2) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (17,'181818','',0,0,0,'2020-07-14 23:42:05','2020-07-14 23:42:05'),(18,'711833115','123',1,1,0,'2020-07-14 23:53:06','2020-07-16 04:04:36'),(19,'711833114','123',1,1,0,'2020-07-16 04:09:30','2020-07-16 04:31:55'),(20,'711833113','123',1,1,0,'2020-07-16 19:21:06','2020-07-16 19:25:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'matrimony'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-16 19:32:29
