CREATE DATABASE  IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `database`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	5.7.14

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
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `scheduled_time` datetime NOT NULL,
  `scheduled_day` varchar(100) NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `account_id_idx` (`account_id`),
  CONSTRAINT `account_id` FOREIGN KEY (`account_id`) REFERENCES `customer_register` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_register`
--

DROP TABLE IF EXISTS `customer_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_register` (
  `account_id` int(11) NOT NULL,
  `account_role` varchar(45) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_register`
--

LOCK TABLES `customer_register` WRITE;
/*!40000 ALTER TABLE `customer_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `educational_services`
--

DROP TABLE IF EXISTS `educational_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educational_services` (
  `service_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `educational_services`
--

LOCK TABLES `educational_services` WRITE;
/*!40000 ALTER TABLE `educational_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `educational_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `sp_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_started` varchar(100) NOT NULL,
  `date_ended` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `request_id` int(11) NOT NULL,
  PRIMARY KEY (`sp_id`,`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_name` varchar(100) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `requested_time` datetime NOT NULL,
  `requested_day` varchar(100) NOT NULL,
  `request_status` varchar(45) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `customer_id_idx` (`customer_id`),
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_address` varchar(100) NOT NULL,
  `service_schedule` varchar(100) NOT NULL,
  `service_started` varchar(100) NOT NULL,
  `service_ended` varchar(100) NOT NULL,
  `service_status` varchar(45) NOT NULL,
  `service_price` int(11) NOT NULL,
  `payment_status` varchar(45) NOT NULL,
  `request_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `request_id_idx` (`request_id`),
  KEY `sp_id_idx` (`sp_id`),
  CONSTRAINT `request_id` FOREIGN KEY (`request_id`) REFERENCES `request` (`request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sp_id` FOREIGN KEY (`sp_id`) REFERENCES `service_provider` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `account_id` int(11) NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_register`
--

DROP TABLE IF EXISTS `sp_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_register` (
  `account_id` int(11) NOT NULL,
  `account_role` varchar(45) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_register`
--

LOCK TABLES `sp_register` WRITE;
/*!40000 ALTER TABLE `sp_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `sp_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_workshop`
--

DROP TABLE IF EXISTS `special_workshop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `special_workshop` (
  `service_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
  `service_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
  `service_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sp_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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

-- Dump completed on 2017-05-10 20:11:09
