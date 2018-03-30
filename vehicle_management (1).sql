-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:32 PM
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
-- Database: `vehicle_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Billing_Id` int(11) NOT NULL,
  `PaymentMethod` text COLLATE latin1_general_cs NOT NULL,
  `DateOfSale` date NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `VehicleId` int(11) NOT NULL,
  `ItemsPurchased` text COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Billing_Id`, `PaymentMethod`, `DateOfSale`, `CustomerId`, `VehicleId`, `ItemsPurchased`) VALUES
(1213, 'Cash', '2017-11-22', 987, 111, 'Car Cover'),
(9075, 'Credit Card', '2017-11-10', 7465, 123, 'Service'),
(894357, 'Card', '2017-11-21', 1234, 222, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `FirstName` text COLLATE latin1_general_cs NOT NULL,
  `LastName` text COLLATE latin1_general_cs NOT NULL,
  `Address` text COLLATE latin1_general_cs NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Email` text COLLATE latin1_general_cs NOT NULL,
  `ReasonForVisit` enum('Purchase','Visit','Service') COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `FirstName`, `LastName`, `Address`, `PhoneNum`, `Email`, `ReasonForVisit`) VALUES
(0, 'Tj', 'Max', '12 Haley St', 1243254235, 'tj.max@gmail.com', ''),
(987, 'Bob', 'Builder', '1555 Chestnut St, Apt 37, Bowling Green, KY 42101', 2147483647, 'bob.builder@gmail.com', 'Service'),
(1234, 'Ashwini', '', '1555 Chestnut Street, 37', 0, 'ashwini.lokesh856@topper.wku.edu', ''),
(6543, 'Tom', 'Adams', '1555 Chestnut St, Apt 30, Bowling Green, KY 42101', 9997777, 'tom.adams@gmail.com', 'Purchase'),
(7465, 'Llyod', 'Coy', '1555 Chestnut St, Apt 34, Bowling Green, KY 42101', 2147483647, 'llyod.coy@gmail.com', 'Service'),
(7586, 'Olivia', '', '123 Diagon Alley, Bowling Green, KY 42102', 0, 'olivia.tim@gmail.com', ''),
(324234, 'Tj', 'Max', '12 Haley St', 123435435, 'tj.max@gmail.com', 'Purchase'),
(1234567, 'MRfrog', '', '1234 kenton st', 2147483647, 'frog.mrs@gmail.com', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeId` int(11) NOT NULL,
  `FirstName` text COLLATE latin1_general_cs NOT NULL,
  `LastName` text COLLATE latin1_general_cs NOT NULL,
  `Address` text COLLATE latin1_general_cs NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Email` text COLLATE latin1_general_cs NOT NULL,
  `Job` text COLLATE latin1_general_cs
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeId`, `FirstName`, `LastName`, `Address`, `PhoneNum`, `Email`, `Job`) VALUES
(1212, 'George', 'Washington', '801 Park St, Apt 67, Bowling Green, KY 42101', 1113337777, 'george.washington@gmail.com', 'Mechanic'),
(3456, 'Thomas', 'Adison', '767, Mimosa St, Bowling Green, KY - 42101', 1342345555, 'thomas.adison@gmail.com', 'Salesperson'),
(7565, 'Harry', 'Potter', '14 Crescent St, Bowling Green, KY 42101', 1231231234, 'harry.potter@gmail.com', 'Billing Personnel');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `SiteId` int(11) NOT NULL,
  `VehicleId` int(11) NOT NULL,
  `DateArrived` date DEFAULT NULL,
  `DateSold` date DEFAULT NULL,
  `DateArrivedForService` date DEFAULT NULL,
  `DateReturnedFromService` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`SiteId`, `VehicleId`, `DateArrived`, `DateSold`, `DateArrivedForService`, `DateReturnedFromService`) VALUES
(456, 222, '2017-11-08', '2017-11-29', NULL, NULL),
(567, 111, NULL, NULL, '2017-11-07', '2017-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` text COLLATE latin1_general_cs NOT NULL,
  `Password` text COLLATE latin1_general_cs NOT NULL,
  `Job` text COLLATE latin1_general_cs
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Job`) VALUES
('george.washington@gmail.com', 'password123', 'Mechanic'),
('thomas.adison@gmail.com', 'password123', 'Salesperson'),
('harry.potter@gmail.com', 'password123', 'Billing Personnel'),
('ashwini.lokesh856@topper.wku.edu', 'password123', 'Customer'),
('joy.lens@gmail.com', '1234', NULL),
('joy.lens@gmail.com', '12345', NULL),
('joy.lens@gmail.com', '87868', NULL),
('rebecca.joseph@gmail.com', 'password123', 'Admin'),
('sophia.bush@gmail.com', 'password123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SalesId` int(11) NOT NULL,
  `VehicleIdNum` int(11) NOT NULL,
  `DateSold` date NOT NULL,
  `TemporaryTag` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `CustomizationWork` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `BillingId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SalesId`, `VehicleIdNum`, `DateSold`, `TemporaryTag`, `CustomizationWork`, `CustomerId`, `BillingId`) VALUES
(567657, 111, '2017-11-10', 'FR456', 'None', 7465, 9075);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ServiceId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `MileageBefore` int(11) NOT NULL,
  `MileageAfter` int(11) NOT NULL,
  `BillingId` int(11) NOT NULL,
  `DateOfIntake` date NOT NULL,
  `DateOfDeparture` date NOT NULL,
  `EstimatedCompletionDate` date NOT NULL,
  `DateOfCustomerPickUp` date NOT NULL,
  `Vehicle_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceId`, `CustomerId`, `MileageBefore`, `MileageAfter`, `BillingId`, `DateOfIntake`, `DateOfDeparture`, `EstimatedCompletionDate`, `DateOfCustomerPickUp`, `Vehicle_Id`) VALUES
(7969, 7465, 20, 24, 9075, '2017-11-07', '2017-11-10', '2017-11-10', '2017-11-10', 111);

-- --------------------------------------------------------

--
-- Table structure for table `service_staff`
--

CREATE TABLE `service_staff` (
  `ServiceStaffId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `ServiceProvided` text COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `ShipmentId` int(11) NOT NULL,
  `SiteId` int(11) NOT NULL,
  `PurchasedFrom` text COLLATE latin1_general_cs NOT NULL,
  `DateOfPurchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleId` int(11) NOT NULL,
  `OwnerId` int(11) DEFAULT NULL,
  `Make` text COLLATE latin1_general_cs NOT NULL,
  `Model` text COLLATE latin1_general_cs NOT NULL,
  `Year` int(4) NOT NULL,
  `Price` double NOT NULL DEFAULT '0',
  `Status` text COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleId`, `OwnerId`, `Make`, `Model`, `Year`, `Price`, `Status`) VALUES
(111, 987, 'Honda', 'CX3', 2014, 20000, ''),
(123, 7465, 'Honda', 'City', 2017, 20348, ''),
(222, 7465, 'BMW', 'M3', 2016, 40000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Billing_Id`),
  ADD KEY `billingID` (`Billing_Id`),
  ADD KEY `vehicleID` (`VehicleId`),
  ADD KEY `customerID` (`CustomerId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD KEY `customerID` (`CustomerId`),
  ADD KEY `reasonForVisit` (`ReasonForVisit`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeId`),
  ADD KEY `employeeID` (`EmployeeId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`SiteId`),
  ADD KEY `SiteID` (`SiteId`),
  ADD KEY `vehicleID` (`VehicleId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SalesId`),
  ADD KEY `salesID` (`SalesId`),
  ADD KEY `billingID` (`BillingId`),
  ADD KEY `CustomerId` (`CustomerId`),
  ADD KEY `sales_ibfk_2` (`VehicleIdNum`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ServiceId`),
  ADD KEY `serviceID` (`ServiceId`),
  ADD KEY `customerID` (`CustomerId`),
  ADD KEY `billingID` (`BillingId`),
  ADD KEY `VehicleId` (`Vehicle_Id`);

--
-- Indexes for table `service_staff`
--
ALTER TABLE `service_staff`
  ADD KEY `service_staff_ibfk_1` (`EmployeeId`),
  ADD KEY `service_staff_ibfk_2` (`ServiceId`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`ShipmentId`),
  ADD KEY `shipmentID` (`ShipmentId`),
  ADD KEY `siteID` (`SiteId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleId`),
  ADD KEY `vehicleID` (`VehicleId`),
  ADD KEY `ownerID` (`OwnerId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `billing_ibfk_2` FOREIGN KEY (`VehicleId`) REFERENCES `vehicle` (`VehicleId`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`VehicleId`) REFERENCES `vehicle` (`VehicleId`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`BillingId`) REFERENCES `billing` (`Billing_Id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`VehicleIdNum`) REFERENCES `vehicle` (`VehicleId`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`BillingId`) REFERENCES `billing` (`Billing_Id`),
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `service_ibfk_3` FOREIGN KEY (`Vehicle_Id`) REFERENCES `vehicle` (`VehicleId`);

--
-- Constraints for table `service_staff`
--
ALTER TABLE `service_staff`
  ADD CONSTRAINT `service_staff_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employee` (`EmployeeId`),
  ADD CONSTRAINT `service_staff_ibfk_2` FOREIGN KEY (`ServiceId`) REFERENCES `service` (`ServiceId`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`SiteId`) REFERENCES `inventory` (`SiteId`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`OwnerId`) REFERENCES `customer` (`CustomerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
