-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: net1255
-- Generation Time: Apr 21, 2023 at 02:45 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ni387624`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `first_name` char(255) NOT NULL,
  `last_name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `profile_pic` char(255) DEFAULT NULL,
  `saved_itin` varchar(1000) DEFAULT NULL,
  `prev_purch` varchar(1000) DEFAULT NULL,
  `timeCreated` datetime NOT NULL,
  `userIsActive` char(11) DEFAULT NULL,
  `emailIsVerified` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_pic`, `saved_itin`, `prev_purch`, `timeCreated`, `userIsActive`, `emailIsVerified`) VALUES
(1, 'my', 'name is', 'helloworld@code.dev', '$2y$10$R/qBkMp9XVcJ5WH6lebzr.0INZduqVFu6bBbgzIyZ3/YBW.Aom996', NULL, NULL, NULL, '2023-02-24 20:37:12', NULL, NULL),
(4, 'my name', 'is', 'nothelloworld@code.dev', '$2y$10$BdkfbbwcpRwCRDXvk2u/2u4gpyl60uNRKeK2l1iqrhK1lrZIOCj1m', NULL, NULL, NULL, '2023-02-24 21:26:48', NULL, NULL),
(5, 'Mykeria', 'Cooks', 'myemail@dev.co', '$2y$10$6iYoFDHIfa4WemKXMAfmsOy0ERwOHp3Gt3T.4TVg7GAr/nbkBUqH6', NULL, NULL, NULL, '2023-02-25 01:30:32', NULL, NULL),
(6, 'Nicki', 'Minaj', 'nicki@gmail.com', '$2y$10$ewLb10P/G8Ky/zNbmcojlObbKsqEKwNvhmxpQJOpCfA23TbBeQ2OC', NULL, NULL, NULL, '2023-02-25 01:33:51', NULL, NULL),
(7, 'Mya', 'Davis', 'myadavis@gmail.com', '$2y$10$ufkuTl49cdKJpaJAlmB0fuSo0gL4ZMcNwxyHzu2Cr7NsBsCw4pvRe', NULL, NULL, NULL, '2023-02-25 01:39:48', NULL, NULL),
(8, 'Mykeria', 'Cooks', 'mykeria@gmail.com', '$2y$10$GwVQd5kskMFFTCaiyfr92OHWklNgHXM.jUt5LvyFsd1L164jOBdv6', NULL, NULL, NULL, '2023-02-25 04:19:11', NULL, NULL),
(9, 'Sean', 'Bost', 'seanbost@gmail.com', '$2y$10$m/KIim4l4WCl..OTLLaRMudmU4BPLypXXYyKX6okFft1LdmD3P/IO', NULL, NULL, NULL, '2023-03-09 05:14:30', NULL, NULL),
(10, 'Nick', 'Jordan', 'nickjordan3014@gmail.com', '$2y$10$2ppaRS3Oj3RnuemlxBjXeut2c7l2DFW/X7rIISjz4dXu/Pz8XXBnK', NULL, NULL, NULL, '2023-03-10 19:37:39', NULL, NULL),
(11, 'Nicholas', 'Jordan', 'nickj@gmail.com', '$2y$10$2b0m5dA4WPrWSFI8cRoO/ut.VG7NAkn..Hw56xDzuv1geZSun26wC', 'orange_icon.png', NULL, NULL, '2023-04-14 06:06:03', NULL, NULL),
(12, 'Lianeli', 'Sanchez', 'lia@test.com', '$2y$10$6IcDOE70ilXlSHZCS3ejB.MoJiQ15uErRxq1ZXxv79Z9poreSzVLq', 'orange_icon.png', NULL, NULL, '2023-04-14 15:40:39', NULL, NULL),
(13, 'Ad', 'King', 'adnanerihani20@gmail.com', '$2y$10$qiLsEFxqeYtprF/FxG5aauEyXvWRdMW0uuHI1xA91UfeFgVglIpTu', 'orange_icon.png', NULL, NULL, '2023-04-14 17:44:44', NULL, NULL),
(14, 'Test', 'Test', 'test@test.com', '$2y$10$iBxOwTNsToN0qIMAWlEycu17v6unqZxm0EIVN9r.MO38teSRkftG6', 'orange_icon.png', NULL, NULL, '2023-04-20 01:45:36', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
