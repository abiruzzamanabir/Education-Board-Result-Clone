-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 02:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(10) NOT NULL,
  `reg` int(20) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `board` varchar(20) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `bn` int(3) NOT NULL,
  `en` int(3) NOT NULL,
  `math` int(3) NOT NULL,
  `ict` int(3) NOT NULL,
  `reli` int(3) NOT NULL,
  `year` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `name`, `roll`, `reg`, `dept`, `board`, `inst`, `photo`, `bn`, `en`, `math`, `ict`, `reli`, `year`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Abir', 1, 111, 'hsc', 'jessore', 'Bheramara College', 'Developer Abir.jpg', 75, 80, 85, 100, 78, 2016, 1, 0, '0000-00-00 00:00:00.000000', NULL),
(2, 'zaman', 2, 112, 'ssc', 'dhaka', 'Dhaka College', 'Abiruzzaman Abir.jpg', 53, 95, 71, 86, 39, 2014, 1, 0, '0000-00-00 00:00:00.000000', NULL),
(3, 'Abiruzzaman Abir', 3, 113, 'jsc', 'rajshahi', 'Rajshahi College', 'evan-shoemaker.jpg', 45, 25, 69, 45, 92, 2021, 1, 0, '0000-00-00 00:00:00.000000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`,`reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
