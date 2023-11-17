-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse454`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse4541`
--

CREATE TABLE `cse4541` (
  `id` bigint(20) NOT NULL,
  `productCode` varchar(50) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `importingDate` datetime NOT NULL,
  `imageUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cse4541`
--

INSERT INTO `cse4541` (`id`, `productCode`, `productName`, `brand`, `quantity`, `importingDate`, `imageUrl`) VALUES
(1, 'IP15P', 'Iphone 15 pro max', 'apple', 32, '2023-11-11 10:21:00', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRO5SouPZlnmIMbxX3YQ63RC1TfAJqX1H3fVRDcLyCKTQPq9oJML_KtZga514s8xsb2A0mx61PvrsZLKnIXG_GRWmk9TLjijslEki7tcqlArmLXYTVZtMuAP7CFqxjcMB-GbUtLp8c&usqp=CAc'),
(3, 'IP14', 'Iphone 14', 'apple', 234, '2023-11-11 10:44:00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8SvuI4CT38cRS1rsL6Bg2pyKemKbA8HOvig&usqp=CAU'),
(4, 'IP14', 'Iphone 14', 'apple', 345, '2023-11-11 10:48:00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8SvuI4CT38cRS1rsL6Bg2pyKemKbA8HOvig&usqp=CAU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse4541`
--
ALTER TABLE `cse4541`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse4541`
--
ALTER TABLE `cse4541`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
