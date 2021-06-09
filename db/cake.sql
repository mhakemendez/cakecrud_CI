-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 12:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--
CREATE DATABASE IF NOT EXISTS `cake` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cake`;

-- --------------------------------------------------------

--
-- Table structure for table `cake_product`
--

DROP TABLE IF EXISTS `cake_product`;
CREATE TABLE `cake_product` (
  `cake_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_product`
--

INSERT INTO `cake_product` (`cake_name`, `price`, `description`, `category`, `product_id`) VALUES
('sample birthday', 100, 'for birthday celebration', 2, 1),
('sample wedding', 150, 'for wedding celebration', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cake_user`
--

DROP TABLE IF EXISTS `cake_user`;
CREATE TABLE `cake_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_cake`
--

DROP TABLE IF EXISTS `category_cake`;
CREATE TABLE `category_cake` (
  `id` int(11) NOT NULL,
  `category_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_cake`
--

INSERT INTO `category_cake` (`id`, `category_name`) VALUES
(1, 'Wedding'),
(2, 'Birthday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_product`
--
ALTER TABLE `cake_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `cake_user`
--
ALTER TABLE `cake_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_cake`
--
ALTER TABLE `category_cake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_product`
--
ALTER TABLE `cake_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cake_user`
--
ALTER TABLE `cake_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_cake`
--
ALTER TABLE `category_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cake_product`
--
ALTER TABLE `cake_product`
  ADD CONSTRAINT `cake_product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category_cake` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
