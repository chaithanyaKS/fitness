-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 08:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(3) NOT NULL AUTO_INCREMENT, 
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `trainer_id` int(3) NOT NULL,
  `package_id` int(3) NOT NULL,
   CONSTRAINT pk_cid PRIMARY KEY(customer_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `customer_details` AUTO_INCREMENT=100;

--
-- Dumping data for table `customer_details`
--

-- INSERT INTO `customer_details` (`customer_id`,`fname`, `lname`, `email`, `contact`, `trainer_id`, `package_id`) VALUES
-- ('11','Raj', 'kumar', 'kumar@gmail.com', '201', '101','1'),
-- ('12','saurabh', 'kumar', 'kumar121@gmail.com', '202', '102', '2'),
-- ('13','surya', 'raj', 'raj1242gmail.com', '203', '101', '3'),
-- ('14','Raman', 'kumar', 'raman@gmail.com', '204', '103','1'),
-- ('15','Aadarsh', 'thakur', 'thakur@gmail.com', '205', '103','1'),
-- ('16','Rahul', 'kumar', 'rahul@gmail.com', '206', '102', '1'),
-- ('17','Sanjeev', 'Verma', 'verma12@gmail.com', '207', '103','3');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `Package`
--

CREATE TABLE `Package` (
  `Package_id` int(3) NOT NULL,
  `Package_name` varchar(20) NOT NULL,
  `Amount` int(7) NOT NULL,
   CONSTRAINT pk_package_id PRIMARY KEY(`Package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Package`
--

INSERT INTO `Package` (`Package_id`, `Package_name`, `Amount`) VALUES
('1', 'preliminary', 800),
('2', 'Wt. gain', 1500),
('3', 'Wt.loss', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Payment_id` int(3) NOT NULL AUTO_INCREMENT,
  `package_id` int(3) NOT NULL,
  `Amount` int(7) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
   CONSTRAINT pk_payment PRIMARY KEY(`Payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Payment` AUTO_INCREMENT=200;

--
-- Dumping data for table `Payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Trainer`
--

CREATE TABLE `Trainer` (
  `Trainer_id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
   CONSTRAINT pk_trainer_id PRIMARY KEY(Trainer_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `Trainer` AUTO_INCREMENT=300;

--
-- Dumping data for table `Trainer`
--

-- INSERT INTO `Trainer` (`Trainer_id`, `Name`, `phone`) VALUES
-- (101, 'Rakesh', 12365489),
-- (102, 'Ravi', 21365789),
-- (103, 'wasim', 123564789),
-- (104, 'Sameer', 12536987);



ALTER TABLE `customer_details` ADD CONSTRAINT `fk_trainer_id_cd` FOREIGN KEY (`trainer_id`) REFERENCES `trainer`(`Trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `customer_details` ADD CONSTRAINT `fk_package_id_cd` FOREIGN KEY (`package_id`) REFERENCES `package`(`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `payment` ADD CONSTRAINT `fk_package_id_pa` FOREIGN KEY (`package_id`) REFERENCES `package`(`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `payment` ADD CONSTRAINT `fk_customer_id_pa` FOREIGN KEY (`customer_id`) REFERENCES `customer_details`(`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
-- ALTER TABLE `customer_details`
--   ADD PRIMARY KEY (`customer_id`);


--
-- Indexes for table `Package`
--
-- ALTER TABLE `Package`
  -- ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `Payment`
--
-- ALTER TABLE `Payment`
  -- ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `Trainer`
--
-- ALTER TABLE `Trainer`
  -- ADD PRIMARY KEY (`Trainer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
