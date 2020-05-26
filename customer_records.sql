-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 03:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_records`
--

CREATE TABLE `customer_records` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_records`
--

INSERT INTO `customer_records` (`id`, `first_name`, `last_name`, `department`, `email`, `position`) VALUES
(1, 'Rose', 'Akoth', 'Sales', 'roseakoth2015@gmail.com', 'Top'),
(2, 'Mercy', 'Njoki', 'Sales', 'mercynjoki2015@gmail.com', 'Top'),
(3, 'David', 'Kalama', 'Human Resource', 'david55@gmail.com', 'Top'),
(4, 'Aladdin', 'Hamadi', 'Human Resource', 'aladdin55@gmail.com', 'Top'),
(5, 'Purity', 'Hamisa', 'Human Resource', 'purity55@gmail.com', 'Top'),
(6, 'John', 'Sinzore', 'Human Resource', 'john@gmail.com', 'Top'),
(7, 'Susan', 'Wakonyo', 'Sales', 'susan@gmail.com', 'Top'),
(8, 'Peter', 'Kimani', 'Sales', 'peter@gmail.com', 'Top'),
(9, 'Daisy', 'Muliro', 'Sales', 'daisy@gmail.com', 'Top');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_records`
--
ALTER TABLE `customer_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_records`
--
ALTER TABLE `customer_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
