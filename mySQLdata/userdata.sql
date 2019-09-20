-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 12:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `lastname`, `gender`, `birthday`, `email`, `address`, `telephone`) VALUES
(1, 'FRANK', 'OOKBEE', 'M', '2019-09-09', 'frank@ookbee.com', 'BKK', '022222222'),
(2, 'จอย', 'ลดา', 'F', '2019-09-10', '่joy@ookbee.com', 'joylada', '000000000'),
(4, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(5, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(6, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(7, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(8, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(9, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(10, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(11, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(12, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(13, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(14, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(15, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(16, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(17, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(18, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(19, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(20, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(21, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(22, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(23, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(24, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(25, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(26, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(27, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(28, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel'),
(29, 'Ook', 'bee', 'M', '0000-00-00', 'mail', 'address', 'tel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
