-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 10:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `sno` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Balance` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`sno`, `name`, `email`, `phone`, `Balance`, `date`) VALUES
(1, 'Chetan Gamne', 'xyz@gmail.com', '8888888888', 22000, '2021-10-04 06:13:30'),
(2, 'Prem', 'xyz12@gmail.com', '9999999999', 23000, '2021-10-04 06:52:52'),
(3, 'gaurav12', 'gaurav12@xyz.com', '2312341212', 18000, '2021-10-05 10:02:17'),
(4, 'akash', 'akash25@gmail.com', '4534321290', 51000, '2021-10-05 10:03:33'),
(5, 'shreyas', 'shreyas24@xyz.com', '8888888888', 20000, '2021-10-16 09:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `amount` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `receiver`, `amount`, `date`) VALUES
(9, 'gaurav12', 'Chetan Gamne', 1000, '2021-10-14 18:45:36'),
(10, 'shreyas', 'gaurav12', 5000, '2021-10-16 09:56:39'),
(11, 'gaurav12', 'shreyas', 5000, '2021-10-16 09:56:55'),
(12, 'Prem', 'Chetan Gamne', 2000, '2021-10-16 09:57:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
