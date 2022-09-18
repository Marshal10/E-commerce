-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cust_insert` (IN `addr` VARCHAR(50), IN `name` CHAR(20), IN `mail` VARCHAR(50), IN `phone` VARCHAR(10), IN `password` VARCHAR(50))   INSERT INTO customer(caddr,cname,cmail,cphone,cpassword)
values(addr,name,mail,phone,password)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` char(50) NOT NULL,
  `aaddr` varchar(50) NOT NULL,
  `amail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aaddr`, `amail`, `apass`) VALUES
(1, 'James', 'Mankhurd', 'james@yahoo.in', '123456'),
(2, 'Joy', 'Sanpada', 'joy@gmail.com', 'joy@2022');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catgid` int(11) NOT NULL,
  `catgname` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catgid`, `catgname`) VALUES
(1, 'Computers'),
(2, 'Laptops'),
(3, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `caddr` varchar(50) NOT NULL,
  `cname` char(50) NOT NULL,
  `cmail` varchar(50) NOT NULL,
  `cphone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `caddr`, `cname`, `cmail`, `cphone`, `password`) VALUES
(1, 'Panvel', 'Marshal Malean', 'marshalmaleane123@gmail.com', '7509645687', 'messi'),
(2, 'Shiganshina', 'Eren', 'eren@freedom.com', '8139212910', 'freedom'),
(3, 'acdsv', 'Marshal2002', 'maleane@gmail.com', '9653258145', 'helloworldhello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `payment` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `username`, `addr`, `email`, `phone`, `product`, `payment`) VALUES
(1, 'Marshal', 'Chembur', 'marshalmaleane123@gmail.com', '2147483647', 'Iphone_13', 'Credit'),
(2, 'Marshal', '3434q34', 'maleane@gmail.com', '9676778677', 'Moto_G52', 'Debit'),
(3, 'Marshal', 'Mumbai', 'marshalmaleane123@gmail.com', '7506409656', 'Apple_Mackbook_Pro', 'Debit'),
(4, 'Marshal', 'Mumbai', 'marshalmaleane123@gmail.com', '965325814', 'Dell_Inspiron_3880', 'COD'),
(5, 'Marshal Malean', 'Panvel', 'marshalmaleane123@gmail.com', '7509645687', 'Apple_Mackbook_Pro', 'Debit'),
(6, 'Marshal Malean', 'Panvel', 'marshalmaleane123@gmail.com', '7509645687', 'Iphone_13', 'Credit'),
(7, 'Marshal Malean', 'Panvel', 'marshalmaleane123@gmail.com', '7509645687', 'Lenovo_AIO_Desktop', 'Credit'),
(8, 'Eren', 'Shiganshina', 'eren@freedom.com', '8139212910', 'Iphone_13', 'COD'),
(9, 'Marshal Malean', 'Panvel', 'marshalmaleane123@gmail.com', '7509645687', 'Dell_Inspiron_3880', 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `catgid` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `catgid`, `price`) VALUES
(1, 'Dell_Inspiron_3880', 1, 42300),
(2, 'Apple_Macbook_Pro', 2, 199900),
(3, 'One_Plus_9', 3, 54999),
(4, 'Iphone_13', 3, 68999),
(5, 'ASUS_Vivobook_14', 2, 48999),
(6, 'HP_Laptop', 2, 45999),
(7, 'Moto_G52', 3, 16999),
(8, 'Realme_9', 3, 17999),
(9, 'Lenovo_AIO_Desktop', 1, 32999),
(10, 'XPS_15_Laptop', 2, 237990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catgid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
