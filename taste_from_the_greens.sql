-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:42 PM
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
-- Database: `taste_from_the_greens`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Recipient` text NOT NULL,
  `Product` text NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Total` int(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Recipient`, `Product`, `Quantity`, `Total`, `Date`) VALUES
(1, 'Zcera', 'Iced Matcha Green Tea Latte', 1, 150, '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Price`) VALUES
(1, 'Hazel Cocoa', 175),
(2, 'Iced Matcha Green Tea Latte', 150),
(3, 'Chocomalt Cream Puff', 150),
(7, 'Cookies and Cream Puff', 150),
(8, 'Strawberry Deluxe', 150),
(9, 'Wintermelon', 150),
(10, 'Supreme Taro', 150),
(11, 'Butter Cookies', 150),
(12, 'Coffee Milk Tea', 150),
(13, 'Cold Brew Coffee Milk Tea', 150),
(14, 'White Iced Coffee', 150),
(15, 'Golden Iced Coffee', 150),
(16, 'Coffee Cream Puff', 150),
(17, 'South Black', 150),
(18, 'South Gold', 150),
(19, 'South White', 150),
(25, 'sample', 175);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Zcera', 'Zcera@gmail.com', '$2y$12$UrE9JjZU33z80wdvuRoVZuVDy4J3csMm9uqhPrwPVFRnlia3CRghK'),
(2, 'admin', 'admin@gmail.com', '$2y$12$ChAa35zrgl.jpUChjvh7f.0UxHKdYJyPYNhRqHy8INWnSrKD3nuRO'),
(19, 'example', 'example@gmail.com', '$2y$12$.m2nWSnMcBQGRHm8pLZunu2JIEcnmHOaWF3cUgMv10x8m6mO2NHB6'),
(22, 'sample21', 'sample21@gmail.com', '$2y$12$h/qmE3lGhyLG7W5VqqCDv.RtKnFJH.1I80NbX8JyzC848uDBgF4ku'),
(23, 'sample', 'sample@gmail.com', '$2y$12$ebo1enXTX4VilGKzfoZQze.PLChA1xo57yNjwzsJqPn0mBPl9JWee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
