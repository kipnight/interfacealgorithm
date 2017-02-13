-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 11:50 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `cart_unique` varchar(32) NOT NULL,
  `product_id` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cart_unique`, `product_id`, `selling_price`) VALUES
(4, 'kk9i4o53gmbbhbgvilw4o9u2bw379v', 8, 63000),
(7, 'kk9i4o53gmbbhbgvilw4o9u2bw379v', 9, 1300),
(8, 'kk9i4o53gmbbhbgvilw4o9u2bw379v', 7, 1200),
(9, 'io8sgydicteamadif1r1x4qti9j5sf', 9, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `category` int(30) NOT NULL,
  `product_serial` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `buying_price` double NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `product_serial`, `product_name`, `buying_price`, `description`, `status`) VALUES
(5, 3, 'xyz', 'xyz', 2122, 'hahahah', 'available'),
(6, 3, 'ds', 'wcfswe', 3400, 'H', 'available'),
(7, 4, '1234567', 'akdjhkjhdkjhd', 1200, 'hehehehehehehehehhu', 'available'),
(8, 3, '123435645789', 'laptop', 54000, 'HP 630PM', 'available'),
(9, 1, '12093487', 'DELL 1545 Charger', 1200, '19W charger', 'available'),
(10, 3, 'lkjhl', 'microki', 12123, 'jkk', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(30) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cart_unique` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `customer_name`, `email`, `cart_unique`, `date`) VALUES
(67, 'Henry maina', 'henrydkm@gmail.com', 'kk9i4o53gmbbhbgvilw4o9u2bw379v', '2013-12-08 12:48:32'),
(68, 'George', 'geaorge@dewcis.com', 'io8sgydicteamadif1r1x4qti9j5sf', '2013-12-08 12:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `receipt_no` varchar(100) NOT NULL,
  `selling_price` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `receipt_no`, `selling_price`, `date`) VALUES
(14, 8, '67', 63000, '2013-12-08 12:48:32'),
(15, 9, '67', 1300, '2013-12-08 12:48:32'),
(16, 7, '67', 1200, '2013-12-08 12:48:32'),
(17, 9, '68', 1300, '2013-12-08 12:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_pass` varchar(80) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `forgotpass_token` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `user_status` varchar(15) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `name`, `user_pass`, `salt`, `email`, `forgotpass_token`, `last_login`, `user_status`) VALUES
('wb26tkceatvh', 'kipnight', 'George Michael', 'zhBWe6AZaT2v+9xXNritEVtIwI5jNzA5NjU3YzRk', 'c709657c4d', 'kipnight@gmail.com', 'notset', '2017-01-10 14:23:15', 'active'),
('ywjmag815663', 'isoc', 'Henry Maina', '8gOLTdjV9A30Eju+ft8kH4sci+NmOGIwYmE5ZGFj', 'f8b0ba9dac', 'henry.maina@isocsolutions.com', 'notset', '2013-12-08 17:40:15', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`id`, `name`, `description`) VALUES
(1, 'Accessories', ''),
(3, 'Computers', ''),
(4, 'Electronic', ''),
(5, 'Mobile', ''),
(6, 'Stationery', ''),
(7, 'Network', 'Network Equipments and components'),
(8, 'Triqal', 'test'),
(9, 'Ungrouped', 'No specific category'),
(10, 'Computer Care', 'computer care'),
(11, 'Test', 'statistics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_unique` (`cart_unique`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY ` category` (`category`),
  ADD KEY ` category_2` (`category`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
