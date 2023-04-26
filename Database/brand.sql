-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 06:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brand`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `departure` varchar(10) NOT NULL,
  `arrival` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `triptype` varchar(20) NOT NULL,
  `seats` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `D_Date` date NOT NULL,
  `R_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `departure`, `arrival`, `class`, `triptype`, `seats`, `amount`, `D_Date`, `R_Date`) VALUES
(42, 'India', 'Thailand', 'Bussiness', 'oneway', '2', 3000, '2023-02-19', '2023-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `dtime` varchar(10) NOT NULL,
  `atime` varchar(10) NOT NULL,
  `fclass` int(3) NOT NULL,
  `economy` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `departure`, `arrival`, `dtime`, `atime`, `fclass`, `economy`) VALUES
(16, 'akash', 'Bengaluru', 'Goa', '2023-02-11', '2023-01-13', 3, 1),
(17, '', 'Andhra Pradesh', 'Bihar', '2023-01-12', '2023-01-13', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(6) UNSIGNED NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `stationStart` varchar(50) NOT NULL,
  `stationEnd` varchar(50) NOT NULL,
  `checkInDate` date NOT NULL,
  `checkInTime` varchar(10) NOT NULL,
  `firstclass` int(3) NOT NULL,
  `economyclass` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `userName`, `email`, `phone`, `stationStart`, `stationEnd`, `checkInDate`, `checkInTime`, `firstclass`, `economyclass`) VALUES
(9, 'akash', 'akash@gmail.com', '7795031310', 'Yelhanka Junction', 'Gulbarga', '2023-01-11', '17:20 PM', 3, 0),
(10, 'akash', 'akash@gmail.com', '7795031310', 'Mumbai Cst ', 'Bangalore', '2023-01-12', '17:20 PM', 3, 2),
(11, 'akash', 'akash@gmail.com', '7795031310', 'Mumbai Cst ', 'Bangalore', '2023-01-12', '17:20 PM', 3, 2),
(12, 'akash', 'akash@gmail.com', '7795031310', 'Mumbai Cst ', 'Bangalore', '2023-01-12', '17:20 PM', 3, 2),
(13, 'akash', 'akash@gmail.com', '7795031310', 'Mumbai Cst ', 'Bangalore', '2023-01-12', '17:20 PM', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'akash', 'akash@gmail.com', 'akash@666'),
(2, 'abu', 'abu@gmail.com', 'abu@12345'),
(26, 'abb', 'abb@gmail.com', 'aabb'),
(28, 'admin', 'admin@gmail.com', 'admin@1234'),
(29, 'chandru', 'chandru@gmail.com', 'chandru@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
