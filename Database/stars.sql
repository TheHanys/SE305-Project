-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 06:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stars`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `role` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `sQuestion` varchar(255) NOT NULL,
  `sAnswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `phonenumber`, `role`, `address`, `city`, `sQuestion`, `sAnswer`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', 'Ahmed@123', '01141014432', 1, '10 Masr el g', 'Cairo', '', ''),
(2, 'ahmedahmed', 'ahmed@ahmed.com', 'Ahmed@123', '01141014437', 0, '6 El tagamo3', 'Cairo', '', ''),
(14, 'amer', 'amer@gmail.com', 'Amer@1234', '1', 1, '5 Makram Ebeid', 'Cairo', 'Where did you go to college?', 'MIU'),
(18, 'hazem', 'hazem@gmail.com', '$2y$10$7Yl2HyGFyH4UPOUO//5yfut6Aqy0N/c7tBE855SmIHw91KwqeIp2O', '01096977717', 1, 'swersy', 'cairo', 'Ezyk', 'el7');

-- --------------------------------------------------------

--
-- Table structure for table `orderedproducts`
--

CREATE TABLE `orderedproducts` (
  `OID` int(11) NOT NULL,
  `Product` varchar(256) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderedproducts`
--

INSERT INTO `orderedproducts` (`OID`, `Product`, `Price`, `Quantity`) VALUES
(5, 'Calvin Klein One', 500, 1),
(6, 'Calvin Klein One', 500, 1),
(6, 'Calvin Klein One', 500, 1),
(8, 'Prada Milano', 1800, 1),
(9, 'Prada Milano', 1800, 1),
(10, 'Carmeny Karine', 400, 1),
(10, 'Prada Milano', 1800, 1),
(10, 'Calvin Klein One', 500, 1),
(11, 'Carmeny Karine', 400, 1),
(13, 'Ray-ban Clubmaster', 350, 1),
(13, 'Ray-ban Clubmaster', 350, 2),
(14, 'Ray-ban Clubmaster', 350, 1),
(14, 'Ray-ban Clubmaster', 350, 2),
(0, 'Carmeny Karine', 400, 1),
(15, 'Carmeny Karine', 400, 1),
(16, 'Carmeny Karine', 400, 1),
(17, 'Prada Milano', 1800, 1),
(18, 'Prada Milano', 1800, 1),
(18, 'Calvin Klein One', 500, 1),
(19, 'Carmeny Karine', 400, 1),
(20, 'Valentino DCA', 1200, 1),
(20, 'Carmeny Karine', 400, 1),
(21, 'Prada Milano', 1800, 1),
(22, 'Carmeny Karine', 400, 1),
(23, 'Carmeny Karine', 400, 1),
(24, 'Carmeny Karine', 400, 1),
(25, 'Carmeny Karine', 400, 1),
(26, 'Carmeny Karine', 400, 1),
(27, 'Prada Milano', 1800, 1),
(28, 'Valentino DCA', 1200, 1),
(28, 'Gucci guilty', 800, 1),
(29, 'Carmeny Karine', 400, 1),
(29, 'Ray-ban Clubmaster', 350, 1),
(30, 'Prada Milano', 1800, 1),
(30, 'Gucci guilty', 800, 1),
(31, 'Gucci guilty', 800, 1),
(31, 'Calvin Klein One', 500, 1),
(32, 'Carmeny Karine', 400, 1),
(32, 'Prada Milano', 1800, 1),
(34, 'Carmeny Karine', 400, 1),
(34, 'Valentino DCA', 1200, 1),
(34, 'Prada Milano', 1800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Number` varchar(255) DEFAULT NULL,
  `Status` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `CID`, `Total`, `Number`, `Status`, `date`) VALUES
(34, 14, 3400, '1', 'Delivered', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Valentino DCA', 1200, 'images/dca.png', 'bags'),
(2, 'Carmeny Karine', 400, 'carmeny.png', 'wallets'),
(3, 'Prada Milano', 1800, 'images/milano.png', 'bags'),
(4, 'Gucci guilty', 800, 'images/guilty.png', 'bags'),
(5, 'Ray-ban Clubmaster', 350, 'images/clubmaster.png', 'glasses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderedproducts`
--
ALTER TABLE `orderedproducts`
  ADD KEY `OID` (`OID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
