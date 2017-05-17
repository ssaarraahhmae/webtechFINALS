-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 04:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtek`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(4) NOT NULL,
  `customer_name` varchar(45) NOT NULL,
  `customer_email` varchar(45) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_contactno` varchar(11) NOT NULL,
  `customer_gender` enum('M','F') NOT NULL,
  `customer_homeaddress` varchar(45) NOT NULL,
  `isAccepted` enum('T','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_contactno`, `customer_gender`, `customer_homeaddress`, `isAccepted`) VALUES
(4000, 'Juan Dela Cruz', 'jdc@gmail.com', '12345', '09173462534', 'M', 'Bonifacio Street, Baguio City', 'T'),
(4001, 'Maria Clara', 'clara@gmail.com', 'secret123', '09069736231', 'F', 'Loakan, Baguio City', 'T'),
(4002, 'Zac Efron', 'zacefron@gmail.com', '12341234', '09057382234', 'M', 'Aurora Hill, Baguio City', 'T'),
(4003, 'Brad Pitt', 'brad123@gmail.com', '12345678', '09213846247', 'M', 'City Camp, Baguio City', 'T'),
(4004, 'Angelina Jolie', 'aj@gmail.com', '98765432', '09156726333', 'F', 'Palma, Baguio City', 'T'),
(4005, 'Leonardo DiCaprio', 'leonardo@gmail.com', 'password123', '09278751237', 'M', 'New Lucban, Baguio City', 'T'),
(4006, 'Will Smith', 'smithwill@gmail.com', 'mypassword', '09158071875', 'M', 'Irisan, Baguio CIty', 'T'),
(4007, 'Beyonce', 'knowles@gmail.com', 'star12345', '09276125321', 'F', 'Brookside, Baguio City', 'T'),
(4008, 'Vanessa Hudgens', 'vh12@gmail.com', 'password12345', '09156823123', 'F', 'Bakakeng, Baguio City', 'T'),
(4009, 'Coco Martin', 'cocomartin@gmail.com', 'coco123', '09278231237', 'M', 'Engineers Hill, Baguio City', 'T'),
(4010, 'Piolo Pascual', 'pascual@gmai.com', 'pascual12', '09218374323', 'M', 'Cabinet Hill, Baguio City', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `provider_specialization`
--

CREATE TABLE `provider_specialization` (
  `specialization_id` int(4) NOT NULL,
  `id_sp` int(4) NOT NULL,
  `id_service` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider_specialization`
--

INSERT INTO `provider_specialization` (`specialization_id`, `id_sp`, `id_service`) VALUES
(5001, 3003, 2004),
(5011, 3014, 2003),
(5012, 3014, 2004),
(5013, 3014, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(4) NOT NULL,
  `service_id` int(4) DEFAULT NULL,
  `sp_id` int(4) DEFAULT NULL,
  `customer_id` int(4) NOT NULL,
  `scheduled_time` varchar(45) NOT NULL,
  `scheduled_day` varchar(45) NOT NULL,
  `status` enum('Ongoing','Done','Pending','Accepted') NOT NULL DEFAULT 'Pending',
  `isPaid` enum('T','F') NOT NULL DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `service_id`, `sp_id`, `customer_id`, `scheduled_time`, `scheduled_day`, `status`, `isPaid`) VALUES
(6001, 2003, NULL, 4001, '8:00 - 10:00', 'TTHS', 'Ongoing', 'F'),
(6002, 2004, NULL, 4002, '3:00 - 5:00', 'MWF', 'Done', 'T'),
(6003, 2005, NULL, 4003, '2:00 - 5:00', 'TTHS', 'Ongoing', 'F'),
(6007, 2003, NULL, 4007, '1:00 - 3:00', 'MWF', 'Ongoing', 'F'),
(6009, 2004, NULL, 4008, '3:00 - 5:00', 'TTHS', 'Ongoing', 'F'),
(6010, 2005, NULL, 4009, '8:00 - 10:00', 'TTHS', 'Done', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(4) NOT NULL,
  `service_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`) VALUES
(2003, 'Voice Lessons'),
(2004, 'Guitar Lessons'),
(2005, 'Violin Lessons'),
(2008, 'Drum Lessons');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `sp_id` int(4) NOT NULL,
  `sp_name` varchar(45) NOT NULL,
  `sp_email` varchar(45) NOT NULL,
  `sp_password` varchar(45) NOT NULL,
  `sp_desc` varchar(200) NOT NULL,
  `sp_contactno` varchar(11) NOT NULL,
  `sp_gender` enum('M','F') NOT NULL,
  `sp_homeaddress` varchar(100) NOT NULL,
  `isAcceptedSP` enum('T','F') NOT NULL DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`sp_id`, `sp_name`, `sp_email`, `sp_password`, `sp_desc`, `sp_contactno`, `sp_gender`, `sp_homeaddress`, `isAcceptedSP`) VALUES
(3001, 'Administrator', 'admin', 'admin', 'Administrator', '0', 'M', 'Local', 'T'),
(3003, 'Rusell Bayote', 'rusellbayote@gmail.com', 'mypassword', 'Provides guitar lessons', '09164146533', 'M', 'Brookside, Baguio City', 'T'),
(3004, 'Benedict Suarez', 'benedictsuarez@gmail.com', 'secret1234', 'Provides voice lessons', '09064763492', 'M', 'Aurora Hill, Baguio City', 'T'),
(3006, 'Sarah Centino', 'sarahcentino@gmail.com', 'password12', 'Provides piano lessons', '09056010255', 'F', 'Irisan, Baguio City', 'T'),
(3007, 'Aerhielle Leonen', 'aerhielleleonen@gmail.com', 'chocopie123', 'Provides voice lessons', '09158071873', 'F', 'Palma, Baguio City', 'F'),
(3008, 'Mark Andawi', 'markandawi@gmail.com', 'mypass12', 'Provides drum lessons', '09178037821', 'M', 'Loakan, Baguio City', 'T'),
(3009, 'Clyde Benitez', 'clydebenitez@gmail.com', 'secreet', 'Provides saxophone lessons', '09358067123', 'M', 'Caguioa, Baguio City', 'F'),
(3010, 'Abigail Macanlalay', 'abimacanlalay@gmail.com', 'abi1234', 'Provides piano lessons', '09167091234', 'F', 'Engineers Hill, Baguio City', 'T'),
(3011, 'Jay Bryan', 'jaybryan@gmail.com', 'jay12345', 'Provides drum lessons', '09056021866', 'M', 'Cabinet Hill, Baguio City', 'F'),
(3012, 'Raoul Kristian', 'raoulkristian@gmail.com', 'rkpassword', 'Provides guitar lessons', '09278967129', 'M', 'City Camp, Baguio City', 'T'),
(3013, 'Denver Culbengan', 'denverculbengan@gmail.com', 'pogiako', 'Provides saxophone lessons', '09356719823', 'M', 'Bakakeng, Baguio City', 'F'),
(3014, 'asdasd', 'asdas', 'asdas', 'asdasdf', 'sdfsdfsdf', 'M', 'asdasdas', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `provider_specialization`
--
ALTER TABLE `provider_specialization`
  ADD PRIMARY KEY (`specialization_id`),
  ADD KEY `id_sp_idx` (`id_sp`),
  ADD KEY `fkService_idx` (`id_service`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `fk_spID_idx` (`sp_id`),
  ADD KEY `fk_custID_idx` (`customer_id`),
  ADD KEY `fk_serviceID_idx` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`sp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4011;
--
-- AUTO_INCREMENT for table `provider_specialization`
--
ALTER TABLE `provider_specialization`
  MODIFY `specialization_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5014;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6012;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `sp_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3015;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `provider_specialization`
--
ALTER TABLE `provider_specialization`
  ADD CONSTRAINT `fkSPID` FOREIGN KEY (`id_sp`) REFERENCES `service_provider` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkService` FOREIGN KEY (`id_service`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `fk_custID` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serviceID` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_spID` FOREIGN KEY (`sp_id`) REFERENCES `service_provider` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
