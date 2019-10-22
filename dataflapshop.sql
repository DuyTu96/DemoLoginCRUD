-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 11:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataflapshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`cat_id`, `cat_name`) VALUES
(1, 'Dress'),
(2, 'Dress Blue'),
(3, 'Dress New');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `prd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_status` int(11) NOT NULL,
  `prd_featured` int(11) NOT NULL,
  `prd_detials` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`prd_id`, `cat_id`, `prd_name`, `prd_price`, `prd_size`, `prd_image`, `prd_status`, `prd_featured`, `prd_detials`) VALUES
(1, 3, 'Dress 1', '149000', 'size X/XL/XXL', 'prd1.png', 1, 1, ''),
(2, 2, 'Dress 2', '249000', 'size X/XL/XXL', 'prd2.png', 0, 1, ' '),
(3, 3, 'Dress 3', '239000', 'size X/XL/XXL', 'prd3.png', 1, 0, ''),
(4, 2, 'Dress 4', '339000', 'size X/XL/XXL', 'prd4.png', 1, 1, ''),
(5, 3, 'Dress 5', '459000', 'size X/XL/XXL', 'prd5.png', 1, 1, ''),
(6, 1, 'Dress 6', '119000', 'size X/XL/XXL', 'prd6.png', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `user_name`, `user_mail`, `user_pass`, `user_level`) VALUES
(1, 'admin', 'admin@mail.com', '123456', 2),
(2, 'Duy Tu', 'duytu@mail.com', '123456', 2),
(3, 'Duy Tu', 'DuyTuHubt@gmail.com', 'duytu1996', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
