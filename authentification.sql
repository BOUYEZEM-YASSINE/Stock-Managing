-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 03:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentification`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`username`, `password`) VALUES
('BOUYEZEM', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_minimal` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `stock_quantity`, `stock_minimal`, `prix`, `categorie`) VALUES
(6, 'Hollandaise', 'Hollandaise.jpg', 200, 17, 20, 'dairy'),
(7, 'Kiri', 'Kiri.jpg', 1200, 20, 24, 'dairy'),
(8, 'La vache qui rit', 'Lavachequirit.jpg', 1500, 25, 14, 'dairy'),
(9, 'Jebli', 'Jebly.jpg', 60, 10, 15, 'dairy'),
(10, 'Bomber jacket', 'Jacket.jpg', 60, 7, 450, 'clothes'),
(11, 'Bleu jeans', 'Jeans.jpg', 90, 20, 300, 'clothes'),
(12, 'T-shirt', 'Tshirt.jpg', 80, 15, 150, 'clothes'),
(13, 'Joggers', 'Joggers.jpg', 40, 9, 270, 'clothes'),
(14, 'Valencia orange', 'V_Orange.jpg', 360, 20, 14, 'drinks'),
(15, 'Valencia raisin', 'V_Raisin.jpg', 360, 20, 17, 'drinks'),
(16, 'Lipton ice tea', 'Lipton.jpg', 60, 15, 10, 'drinks'),
(17, 'Redbull', 'Redbull.jpg', 80, 30, 16, 'drinks'),
(18, 'Kaki', 'Kaki.jpg', 2, 1, 25, 'fruits'),
(19, 'Ananas', 'Ananas.jpg', 4, 1, 20, 'fruits'),
(20, 'Coconut', 'Coconut.jpg', 4, 1, 30, 'fruits'),
(21, 'Avocado', 'Avocado.jpg', 6, 1, 18, 'fruits');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
