-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2018 at 09:44 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerbasket`
--

CREATE TABLE `customerbasket` (
  `id` int(11) NOT NULL,
  `user_id` int(60) NOT NULL,
  `username` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerbasket`
--

INSERT INTO `customerbasket` (`id`, `user_id`, `username`, `product_name`, `quantity`, `price`) VALUES
(1, 4, '1', 'Baguette', 1, 5),
(2, 4, '1', 'Baguette', 1, 5),
(3, 4, '1', 'Baguette', 12, 5),
(4, 4, '1', 'Baguette', 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `quantity`, `product_image`) VALUES
(1, 'Baguette', 5, 0, '1.jpg'),
(2, 'Croissant', 5, 0, '2.jpg'),
(3, 'Fromage', 10, 0, '3.jpg'),
(4, 'Macaron', 15, 0, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone_number`, `email`) VALUES
(1, 'Morgan', '$2y$10$r9ZXHgVOXxr65IPBnijdiOh0RO53NcWsQLoYxay/Gpse7Gd8y3i0O', 123, 'keso@keso.se'),
(2, 'ny', '$2y$10$5V7uag7Waj52eVwRKaqbQ.n7zR85UL58hdbDFfNjFWY/atizGP04y', 123, 'mu@bu.se'),
(3, 'kebab', '$2y$10$RnR91AO2lhVExLfI8WoPnuE2MgPwfG/Ad9zadVqyBTAAO.toMvl0O', 2147483647, 'moggelicious@hotmail.com'),
(4, '1', '$2y$10$InfsHR7.unPvmUix9Rr0seSF4e3zKbZHW/C55fYzZxHqtQqP4DYQS', 2147483647, 'moggelicious@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerbasket`
--
ALTER TABLE `customerbasket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `customerbasket`
--
ALTER TABLE `customerbasket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
