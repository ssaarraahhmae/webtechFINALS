-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 04:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(8) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `scheduled_time` varchar(45) DEFAULT NULL,
  `scheduled_day` varchar(45) DEFAULT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `account_id` int(11) NOT NULL,
  `account_role` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `home_address` varchar(45) NOT NULL,
  `service` varchar(45) DEFAULT NULL,
  `specialization` varchar(80) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`account_id`, `account_role`, `name`, `email`, `password`, `age`, `contact_number`, `gender`, `home_address`, `service`, `specialization`, `status`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin', 0, 0, 'A', 'admin', NULL, NULL, 'admin'),
(2, 'Service Provider', 'sdf', 'hbh', 'jasdasfsaf', 90, 67454534, 'M', 'knjlb', ', , , ', '', 'registered'),
(3, 'Service Provider', 'dfgf', 'dgdfg', 'dfgfdfg', 34, 4545454, 'M', 'gdf', ', , , ', '', 'registered'),
(4, 'Service Provider', 'fgdf', 'jbbhb', 'jhbjhbhjb', 90, 678678, 'M', 'jhgjhgjhg', 'Tutorial Services, , , ', '', 'registered'),
(5, 'Customer', 'John Doe', 'john@mail.com', '123456', 12, 2123, 'M', 'Bangdad, USA', NULL, NULL, 'registered'),
(6, 'Customer', 'heloo', 'john@mail.com', '124123123', 87, 2123786876, 'M', 'Bangdad, USA', NULL, NULL, 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(10) NOT NULL,
  `requested_service` varchar(45) NOT NULL,
  `home_address` varchar(80) NOT NULL,
  `requested_time` varchar(45) NOT NULL,
  `request_day` varchar(45) NOT NULL,
  `request_status` varchar(15) NOT NULL,
  `customer_id` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `service_address` varchar(80) NOT NULL,
  `service_schedule` varchar(45) NOT NULL,
  `service_status` varchar(45) NOT NULL,
  `service_price` varchar(20) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `request_id` varchar(10) NOT NULL,
  `sp_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_offered`
--

CREATE TABLE `services_offered` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_offered`
--

INSERT INTO `services_offered` (`service_id`, `service_name`, `category_id`) VALUES
(4, 'Preschool', 5);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`category_id`, `category_name`) VALUES
(5, 'Tutorial Services'),
(2, 'Special Workshop'),
(3, 'Educational Services'),
(4, 'Training Services');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD UNIQUE KEY `requested_service_UNIQUE` (`requested_service`),
  ADD UNIQUE KEY `home_address_UNIQUE` (`home_address`),
  ADD UNIQUE KEY `requested_time_UNIQUE` (`requested_time`),
  ADD UNIQUE KEY `request_day_UNIQUE` (`request_day`),
  ADD UNIQUE KEY `request_status_UNIQUE` (`request_status`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`customer_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `services_offered`
--
ALTER TABLE `services_offered`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services_offered`
--
ALTER TABLE `services_offered`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
