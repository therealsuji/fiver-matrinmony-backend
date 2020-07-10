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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_blood_group`
--

LOCK TABLES `fl_blood_group` WRITE;
/*!40000 ALTER TABLE `fl_blood_group` DISABLE KEYS */;
INSERT INTO `fl_blood_group` VALUES (1,'A+','2020-07-03 03:01:09','2020-07-03 03:01:09');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_body_type`
--

LOCK TABLES `fl_body_type` WRITE;
/*!40000 ALTER TABLE `fl_body_type` DISABLE KEYS */;
INSERT INTO `fl_body_type` VALUES (1,'Slim','2020-07-03 22:22:11','2020-07-03 22:22:11');
/*!40000 ALTER TABLE `fl_body_type` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_complexion`
--

LOCK TABLES `fl_complexion` WRITE;
/*!40000 ALTER TABLE `fl_complexion` DISABLE KEYS */;
/*!40000 ALTER TABLE `fl_complexion` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_denomination`
--

LOCK TABLES `fl_denomination` WRITE;
/*!40000 ALTER TABLE `fl_denomination` DISABLE KEYS */;
INSERT INTO `fl_denomination` VALUES (1,'Believer','2020-07-03 22:23:04','2020-07-03 22:23:04');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_diet`
--

LOCK TABLES `fl_diet` WRITE;
/*!40000 ALTER TABLE `fl_diet` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_height`
--

LOCK TABLES `fl_height` WRITE;
/*!40000 ALTER TABLE `fl_height` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_highest_education`
--

LOCK TABLES `fl_highest_education` WRITE;
/*!40000 ALTER TABLE `fl_highest_education` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_language`
--

LOCK TABLES `fl_language` WRITE;
/*!40000 ALTER TABLE `fl_language` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_occupation`
--

LOCK TABLES `fl_occupation` WRITE;
/*!40000 ALTER TABLE `fl_occupation` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fl_partner_expectation`
--

LOCK TABLES `fl_partner_expectation` WRITE;
/*!40000 ALTER TABLE `fl_partner_expectation` DISABLE KEYS */;
/*!40000 ALTER TABLE `fl_partner_expectation` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_basic_details`
--

LOCK TABLES `user_basic_details` WRITE;
/*!40000 ALTER TABLE `user_basic_details` DISABLE KEYS */;
INSERT INTO `user_basic_details` VALUES (7,'','','','',0,'','','','','','2020-07-08 01:45:10','2020-07-08 01:45:10'),(8,'','','','',0,'','','','','','2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,'','','','',0,'','','','','','2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,'name','surname','2020-07-08T02:05:33.960+0','female',3,'adasd','ada','dad','dad','1231','2020-07-08 02:05:32','2020-07-08 02:06:30');
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
INSERT INTO `user_church_details` VALUES (5,'','','','','','','','2020-07-07 00:49:21','2020-07-07 00:49:21'),(6,'','','','','','','','2020-07-07 00:50:08','2020-07-07 00:50:08'),(7,'','','','','','','','2020-07-08 01:45:10','2020-07-08 01:45:10'),(8,'','','','','','','','2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,'','','','','','','','2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,'','','','','','','','2020-07-08 02:05:32','2020-07-08 02:05:32');
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
INSERT INTO `user_family_details` VALUES (5,'','',0,0,0,'2020-07-07 00:49:21','2020-07-07 00:49:21'),(6,'','',0,0,0,'2020-07-07 00:50:08','2020-07-07 00:50:08'),(7,'','',0,0,0,'2020-07-08 01:45:10','2020-07-08 01:45:10'),(8,'','',0,0,0,'2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,'','',0,0,0,'2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,'','',0,0,0,'2020-07-08 02:05:32','2020-07-08 02:05:32');
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
INSERT INTO `user_personal_details` VALUES (5,0,'',0,'',0,0,0,0,0,0,'2020-07-07 00:49:21','2020-07-07 00:49:21'),(6,0,'',0,'',0,0,0,0,0,0,'2020-07-07 00:50:08','2020-07-07 00:50:08'),(7,0,'',0,'',0,0,0,0,0,0,'2020-07-08 01:45:10','2020-07-08 01:45:10'),(8,0,'',0,'',0,0,0,0,0,0,'2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,0,'',0,'',0,0,0,0,0,0,'2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,0,'',0,'',0,0,0,0,0,0,'2020-07-08 02:05:32','2020-07-08 02:05:32');
/*!40000 ALTER TABLE `user_personal_details` ENABLE KEYS */;
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
INSERT INTO `user_physical_details` VALUES (5,0,0,0,0,'','2020-07-07 00:49:21','2020-07-07 00:49:21'),(6,0,0,0,0,'','2020-07-07 00:50:08','2020-07-07 00:50:08'),(7,0,0,0,0,'','2020-07-08 01:45:10','2020-07-08 01:45:10'),(8,0,0,0,0,'','2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,0,0,0,0,'','2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,0,0,0,0,'','2020-07-08 02:05:32','2020-07-08 02:05:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (8,'newuser@user.com','',0,0,0,'2020-07-08 01:46:25','2020-07-08 01:46:25'),(9,'user123@user.com','',0,0,0,'2020-07-08 02:05:00','2020-07-08 02:05:00'),(10,'useruser@user.com','123',1,1,0,'2020-07-08 02:05:32','2020-07-08 02:19:31');
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

-- Dump completed on 2020-07-09 17:41:51
