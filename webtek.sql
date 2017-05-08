CREATE DATABASE  IF NOT EXISTS `webtek` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `webtek`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: webtek
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `customer_id` varchar(8) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `scheduled_time` varchar(45) DEFAULT NULL,
  `scheduled_day` varchar(45) DEFAULT NULL,
  `account_id` int(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `educational_services`
--

DROP TABLE IF EXISTS `educational_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educational_services` (
  `service_name` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`service_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `educational_services`
--

LOCK TABLES `educational_services` WRITE;
/*!40000 ALTER TABLE `educational_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `educational_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `account_id` int(11) NOT NULL,
  `account_role` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `registrationcol` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `home_address` varchar(45) NOT NULL,
  `service` varchar(45) NOT NULL,
  `specialization` varchar(80) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `account_role_UNIQUE` (`account_role`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `request_id` varchar(10) NOT NULL,
  `requested_service` varchar(45) NOT NULL,
  `home_address` varchar(80) NOT NULL,
  `requested_time` varchar(45) NOT NULL,
  `request_day` varchar(45) NOT NULL,
  `request_status` varchar(15) NOT NULL,
  `customer_id` varchar(8) NOT NULL,
  PRIMARY KEY (`request_id`),
  UNIQUE KEY `requested_service_UNIQUE` (`requested_service`),
  UNIQUE KEY `home_address_UNIQUE` (`home_address`),
  UNIQUE KEY `requested_time_UNIQUE` (`requested_time`),
  UNIQUE KEY `request_day_UNIQUE` (`request_day`),
  UNIQUE KEY `request_status_UNIQUE` (`request_status`),
  UNIQUE KEY `customer_id_UNIQUE` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `service_id` varchar(10) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `service_address` varchar(80) NOT NULL,
  `service_schedule` varchar(45) NOT NULL,
  `service_status` varchar(45) NOT NULL,
  `service_price` varchar(20) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `request_id` varchar(10) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `requested_service_idx` (`service_name`),
  KEY `requested_service` (`service_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_provider` (
  `sp_id` varchar(10) NOT NULL,
  `sp_name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `home_address` varchar(60) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `specialization` varchar(80) NOT NULL,
  `account_id` int(10) NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_workshop`
--

DROP TABLE IF EXISTS `special_workshop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special_workshop` (
  `service_name` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`service_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special_workshop`
--

LOCK TABLES `special_workshop` WRITE;
/*!40000 ALTER TABLE `special_workshop` DISABLE KEYS */;
/*!40000 ALTER TABLE `special_workshop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_services`
--

DROP TABLE IF EXISTS `training_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_services` (
  `service_name` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`service_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_services`
--

LOCK TABLES `training_services` WRITE;
/*!40000 ALTER TABLE `training_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutorial_services`
--

DROP TABLE IF EXISTS `tutorial_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutorial_services` (
  `service_name` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`service_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutorial_services`
--

LOCK TABLES `tutorial_services` WRITE;
/*!40000 ALTER TABLE `tutorial_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `tutorial_services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-08 21:40:55
