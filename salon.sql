-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2020 at 04:24 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ct_id` int(11) NOT NULL,
  `ct_p_id` int(11) NOT NULL,
  `ct_qty` int(11) NOT NULL,
  `ct_c_id` int(11) NOT NULL,
  `ct_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ct_id`, `ct_p_id`, `ct_qty`, `ct_c_id`, `ct_time`) VALUES
(1, 5, 1, 1, '2020-02-10 11:23:33'),
(2, 5, 1, 1, '10-03-2020 10:30:10'),
(3, 6, 1, 1, '10-03-2020 12:30:10'),
(4, 5, 3, 1, '10-03-2020 10:30:10'),
(5, 5, 1, 1, '10-03-2020 11:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` text NOT NULL,
  `c_password` text NOT NULL,
  `c_image` text NOT NULL,
  `c_gender` text NOT NULL,
  `c_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_email`, `c_password`, `c_image`, `c_gender`, `c_location`) VALUES
(6, 'Githendu', 'agithendu@gmail.com', '$2y$05$45kYu1eiIIdWMqu9w4nBv.x0UEUCdtqZOE7FQNJUT3iEZU958W5Jq', 'avatar5.png', 'male', '105, Main Street'),
(7, 'Kanangoya', 'gkanangoya@gmail.com', '$2y$05$qeK6AlcPtOCIrMAngvxiVufk2kooktImxN/82SBj8z1mPjFWCyzjO', 'avatar04.png', 'male', 'Cabral Street'),
(8, 'gathege', 'gathege@gmail.com', '$2y$05$4avNsd6gqsEhHt2pD2ysbenNzudQ4BKRqw8q/NX5Udd4Mmud.ngxK', 'admin.png', 'male', 'karatina'),
(9, 'wilis nyaga', 'git@git.com', '$2y$05$Vie7wjtl/KbrzGaoNryuze49drIs2OiI4CR3qF3LB4dCzNagmSjJO', 'user1-128x128.jpg', 'male', 'kagochi-1957');

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
(2, 'conditioning ', 'conditioning.jpg', 700, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'product'),
(3, 'hair cut', 'hair_cut.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'product'),
(4, 'manicures', 'manicures.jpg', 1000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(5, 'massage', 'massage.jpg', 1500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(6, 'shampoos', 'shampoos.jpg', 2000, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(7, 'men cut', 'hair_cutmen.jpg', 500, 'Get the best services ever in our premises, if in need of our product contact us and we deliver product', 'service'),
(8, 'Spray ', 'hair_cutmen.jpg', 500, 'Get the best product ever in our premises, if in need of our product contact us and we deliver product', 'product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
