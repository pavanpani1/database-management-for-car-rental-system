-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 07:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcontact` (IN `Id` INT, IN `Name` VARCHAR(50), IN `Email` VARCHAR(50), IN `Message` VARCHAR(100))  BEGIN INSERT INTO contact VALUES(Id,Name,Email,Message);END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `admin_id` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `admin_id`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`) VALUES
(7, 'Rajesh', 'raju@gmail.com', 'Good service !!!'),
(8, 'RAVI', 'ravi@yahoo.com', 'excellent'),
(9, 'Sudeep', 'kiccha@gmail.com', 'Good job. Keep it Up !!!!'),
(10, 'hrithik', 'hrithik@gmail.com', 'nice :)');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `user_id`, `veh_id`, `order_date`) VALUES
(1, 15, NULL, NULL),
(2, 15, 6, '2021-01-18'),
(3, 16, NULL, NULL),
(4, 16, 3, '2021-01-18'),
(5, 17, NULL, NULL),
(6, 17, 9, '2021-01-18'),
(7, 18, NULL, NULL);

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `t_sales_backup` BEFORE DELETE ON `sales` FOR EACH ROW BEGIN
INSERT INTO sales_backup(sales_id,user_id, veh_id, order_date) VALUES(OLD.sales_id,OLD.user_id,OLD.veh_id,OLD.order_date);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_backup`
--

CREATE TABLE `sales_backup` (
  `sb_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_backup`
--

INSERT INTO `sales_backup` (`sb_id`, `sales_id`, `user_id`, `veh_id`, `order_date`) VALUES
(0, 8, 18, 9, '2021-01-19'),
(0, 9, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serv_id` int(11) NOT NULL,
  `svr_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `desp` varchar(100) NOT NULL,
  `User_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `vehicleno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serv_id`, `svr_date`, `amount`, `desp`, `User_id`, `msg`, `vehicleno`) VALUES
(5, '2021-01-18', 40000, 'Ultimate Service', 15, 'Please take care of my car.', 'KA 12 Z 1212'),
(6, '2021-01-18', 40000, 'Ultimate Service', 17, 'I hope this job is done efficiently.', 'KA 41 MY 8055'),
(7, '2021-01-19', 40000, 'Ultimate Service', 18, 'modify my car', 'KA 05 MY 6006'),
(8, '2021-01-22', 8000, 'Safety Service', 19, 'modify my car', 'KA 05 MY 6006');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `User_address` varchar(100) NOT NULL,
  `User_phone_no` varchar(50) NOT NULL,
  `User_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password`) VALUES
(15, 'Rajesh', 'raju@gmail.com', 'Vasanth Industries, near FMKMC college,Madikeri', '9778631287', '202cb962ac59075b964b07152d234b70'),
(16, 'Ravi', 'ravi@yahoo.com', 'Hosamani House,Guddada Devalapur,Kushtagi, Koppala', '7899640041', '202cb962ac59075b964b07152d234b70'),
(17, 'Sudeep', 'kiccha@gmail.com', '21/22 8th Main JP Nagar Bangalore ', '7425487458', '661b5d5d0042603173d71158cb415849'),
(18, 'hrithik', 'hrithik@gmail.com', 'alien colony , jupiter', '7539518522', '9cf0fad66f27ca22b7ee721d5413ea62'),
(19, 'darshan', 'dboss@gmail.com', 'india', '7418529631', '903ce9225fca3e988c2af215d4e544d3');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `t_sales_add` AFTER INSERT ON `user` FOR EACH ROW BEGIN
INSERT INTO `sales`( `user_id`, `veh_id`, `order_date`) VALUES (new.Id,null,null);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_type` varchar(100) NOT NULL,
  `veh_manufacture` varchar(100) NOT NULL,
  `veh_model_no` varchar(25) NOT NULL,
  `veh_spec` varchar(100) NOT NULL,
  `chassis_number` varchar(50) NOT NULL,
  `fuel_capacity` varchar(50) NOT NULL,
  `mileage` varchar(50) NOT NULL,
  `horsepower` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_type`, `veh_manufacture`, `veh_model_no`, `veh_spec`, `chassis_number`, `fuel_capacity`, `mileage`, `horsepower`, `Image`, `Price`) VALUES
(1, 'Sedan', 'Maruthi Suzuki', 'Ciaz', 'Click Here', '9865', '43L', '20 KMPL', '77 kW', 'car_ciaz.jpeg', '2500 / Day'),
(2, 'Sedan', 'Honda', 'City', 'Click Here', '65htg', '40L', '18 KMPL', '75 kW', 'car_city1.jpg', '2600 / Day'),
(3, 'Sedan', 'Hyundai', 'Verna', 'Click Here', '9632df', '45L', '19 KMPL', '75 kW', 'car_verna1.jpg', '2400 / Day'),
(4, 'SUV', 'Maruthi Suzuki', 'Vitara Brezza', 'Click Here', '5858', '45L', '20 KMPH', '77 kW', 'car_brezza1.jpg', '2200 / Day'),
(5, 'HATCHBACK', 'Hyundai', 'I20', 'Click Here', '3745', '37L', '20 KMPL', '80kW', 'car_i201.jpg', '2300 /Day'),
(6, 'SUV', 'TATA', 'Nexon', 'Click Here', '7895', '44L', '21 KMPL', '82 kW', 'nexon_car1.jpeg', '2250 / Day'),
(7, 'SUV', 'Hyundai', 'Creta', 'Click Here', '2569', '45L', '18 KMPL', '85 kW', 'car_creta1.jpg', '2400 / Day'),
(8, 'HATCHBACK', 'Maruthi Suzuki', 'Swift', 'Click Here', '7841', '42L', '21 KMPL', '83 kW', 'car_swift1.jpg', '2000 / Day'),
(9, 'HATCHBACK', 'Ford', 'Focus', 'Click Here', '46328', '51L', '18 KMPL', '93 kW', 'car_focus1.jpg', '2450 / Day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `veh2` (`veh_id`),
  ADD KEY `user2` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serv_id`),
  ADD KEY `userdet` (`User_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `user2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `veh2` FOREIGN KEY (`veh_id`) REFERENCES `vehicle` (`veh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `userdet` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
