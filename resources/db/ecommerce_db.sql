-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2021 at 11:41 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Smart TV'),
(2, 'Tablets'),
(3, 'Computers'),
(4, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float NOT NULL,
  `item_price_currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(255) NOT NULL,
  `paid_amount` float NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `checkout_session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `item_name`, `item_price`, `item_price_currency`, `quantity`, `paid_amount`, `paid_amount_currency`, `txn_id`, `checkout_session_id`, `payment_status`, `created`, `modified`) VALUES
(1, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 3, 96000, 'pkr', 'pi_1JIHJFFGanmcY1khYWTwEXOt', 'cs_test_a1CSnzXFKid3B5x26zd1IT9Gf0Fj3B1B36hFXUkGFciLdNIac5yoE3CZoH', 'succeeded', '2021-07-28 23:42:20', '2021-07-28 23:42:20'),
(2, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 1, 32000, 'pkr', 'pi_1JIHvcFGanmcY1khKury2FlS', 'cs_test_a1FtDYssEZDS9fnOVLOvGuv8QrwnBOklpw5fiuV8ojfQKtxFVuH8qSYOW1', 'succeeded', '2021-07-28 23:56:51', '2021-07-28 23:56:51'),
(3, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 1, 32000, 'pkr', 'pi_1JIHyJFGanmcY1kh0O8zeFV3', 'cs_test_a15F9bcfJgnq2kLPHcgkppPyBDBIygwvcWgrPexFqkYXdFUlV086n59c5n', 'succeeded', '2021-07-28 23:59:38', '2021-07-28 23:59:38'),
(4, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 1, 32000, 'pkr', 'pi_1JII2LFGanmcY1khYM7mHZIW', 'cs_test_a1S9dTSeJ77ISBW0VTlYkIQV4mrzjnJ07l0eMCFDMIYypAgYy7DZuc9r4a', 'succeeded', '2021-07-29 00:03:45', '2021-07-29 00:03:45'),
(5, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 1, 32000, 'pkr', 'pi_1JII6VFGanmcY1khlQWnLvUR', 'cs_test_a184h2S5h7ycqGeXASf41exyQsrBS4l624Ld16N3CsQsjzaR4QKULA0yN4', 'succeeded', '2021-07-29 00:08:05', '2021-07-29 00:08:05'),
(6, 'Mariam Naz', 'mariamnaz212@gmail.com', 'Infinix Note 10 pro', 3200000, 'pkr', 1, 32000, 'pkr', 'pi_1JII9qFGanmcY1khnsBtt3Xo', 'cs_test_a1XNGS6TV9P2WVqMXMPuT9Rob6V1SDvKrMEenRholkUfrotwRjoXKD7yGw', 'succeeded', '2021-07-29 00:11:39', '2021-07-29 00:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) DEFAULT NULL,
  `product_long_description` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_image`, `product_price`, `product_quantity`, `product_long_description`, `product_description`) VALUES
(2, 'Infinix Note 10 pro', 4, 'infinix_note10_pro.webp', '32000', '20', 'This is the description', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_no` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_no`, `username`, `password`, `email`, `phone`, `address`) VALUES
(1, 'Mariam Naz', '76d80224611fc919a5d54f0ff9fba446', 'mariamnaz212@gmail.com', '03482353933', 'Gulshan e Iqbal');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_title`) VALUES
(1, 'maaz_cv_pic.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'maaz', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
