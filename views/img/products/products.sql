-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2020 at 04:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_title` text NOT NULL,
  `p_image` text NOT NULL,
  `p_price` int(50) NOT NULL,
  `p_desc` text NOT NULL,
  `p_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_title`, `p_image`, `p_price`, `p_desc`, `p_type`) VALUES
(1, 'body waxing', 'body_waxing.jpeg', 1000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service '),
(2, 'conditioning ', 'conditioning.jpg', 700, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(3, 'hair cut', 'hair_cut.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(4, 'manicures', 'manicures.jpg', 1000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(5, 'massage', 'massage.jpg', 1500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(6, 'shampoos', 'shampoos.jpg', 2000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(7, 'men cut', 'hair_cutmen.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
