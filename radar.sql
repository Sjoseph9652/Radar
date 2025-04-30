-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 09:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radar`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo-name` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo-name`, `id`) VALUES
('headphones.png', 17),
('Iphone.png', 18),
('laptop.png', 19),
('mouse.png', 20),
('tv.png', 21),
('battery_bank.png', 22),
('speaker.png', 23),
('camera.png', 24),
('vaccum_cleaner.png', 25),
('table.png', 26),
('air_fryer.png', 27),
('cooker.png', 28),
('fan.png', 29),
('pan.png', 30),
('pillow.png', 31),
('blender.png', 32),
('slim_jeans.png', 33),
('running-shoes.png', 34),
('hoodie.png', 35),
('sunglasses-two.png', 36),
('watch.png', 37),
('jacket.png', 38),
('purse.png', 39),
('boots.png', 40),
('beach-ball.png', 41),
('flip-flops.png', 42);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(20) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `category` enum('','Electronics','Home','Fashion') NOT NULL DEFAULT '',
  `is_summer` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_path`, `category`, `is_summer`) VALUES
(17, 'Wireless Headphones', 299, 'images/headphones.png', 'Electronics', 0),
(18, 'Smartphone', 799, 'images/Iphone.png', 'Electronics', 0),
(19, 'Laptop', 1099, 'images/laptop.png', 'Electronics', 0),
(20, 'Wireless Mouse', 30, 'images/mouse.png', 'Electronics', 0),
(21, '4K Smart TV', 549, 'images/tv.png', 'Electronics', 0),
(22, 'Portable Power Bank', 49, 'images/battery_bank.png', 'Electronics', 0),
(23, 'Smart Speaker', 59, 'images/speaker.png', 'Electronics', 1),
(24, 'Digital Camera', 649, 'images/camera.png', 'Electronics', 0),
(25, 'Vacuum Cleaner', 100, 'images/vaccum_cleaner.png', 'Home', 0),
(26, 'Coffee Table', 49, 'images/table.png', 'Home', 0),
(27, 'Air Fryer', 129, 'images/air_fryer.png', 'Home', 0),
(28, 'Pressure Cooker', 89, 'images/cooker.png', 'Home', 0),
(29, 'Fan', 39, 'images/fan.png', 'Home', 0),
(30, 'Cast Iron Pan', 35, 'images/pan.png', 'Home', 0),
(31, 'Pillows', 29, 'images/pillow.png', 'Home', 0),
(32, 'Blender', 59, 'images/blender.png', 'Home', 0),
(33, 'Slim Fit Jeans', 69, 'images/slim_jeans.png', 'Fashion', 0),
(34, 'Running Shoes', 150, 'images/running-shoes.png', 'Fashion', 0),
(35, 'Hoodie', 65, 'images/hoodie.png', 'Fashion', 0),
(36, 'Sunglasses', 20, 'images/sunglasses-two.png', 'Fashion', 1),
(37, 'Watch', 99, 'images/watch.png', 'Fashion', 0),
(38, 'Jacket', 199, 'images/jacket.png', 'Fashion', 0),
(39, 'Purse', 79, 'images/purse.png', 'Fashion', 0),
(40, 'Boots', 160, 'images/boots.png', 'Fashion', 0),
(41, 'Beach Ball', 15, 'images/beach-ball.png', '', 1),
(42, 'Flip Flops', 25, 'images/flip-flops.png', 'Fashion', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `category` enum('uncategorized','tech','fashion','home') DEFAULT 'uncategorized',
  `responded` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `customer_email`, `question`, `category`, `responded`) VALUES
(48, 'user@gmail.com', 'What kind of TV sound system would work best in an apartment?', 'uncategorized', 0),
(49, 'user@gmail.com', 'Are the clothing products on here made in the US', 'uncategorized', 0),
(50, 'user@gmail.com', 'Will you price match on the smart phone? I\'ve seen it for cheaper somewhere else', 'uncategorized', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `response_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `expert_email` varchar(255) NOT NULL,
  `response` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`response_id`, `question_id`, `customer_email`, `expert_email`, `response`, `created_at`) VALUES
(57, 50, 'user@gmail.com', 'expert@gmail.com', 'Yes, we can price match. Please send the link to the other site so we can confirm.', '2025-04-29 19:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_email`, `review`, `stars`, `created_at`) VALUES
(11, 18, 'user@gmail.com', 'I\'ve had this phone for years and it never slows down!', 0, '2025-04-29 19:39:45'),
(12, 25, 'user@gmail.com', 'Works alright. Not the best at grabbing dog hair. ', 0, '2025-04-29 19:40:11'),
(13, 37, 'user@gmail.com', 'Good mid range kind of watch. It\'s lasted me a year so far ', 0, '2025-04-29 19:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_email`, `review`, `stars`, `created_at`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `is_expert` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_time`, `password`, `is_expert`) VALUES
(65, 'sharew5m123@gmail.com', 'reys', 'rudt', 0, '2019-03-18 13:46:33', 'e4f194cba29960e12d8b8f1bfedc972b', 0),
(66, 'sgah234@gmail.com', 'werty', 'erty', 0, '2019-03-18 13:55:46', 'e10adc3949ba59abbe56e057f20f883e', 0),
(67, 'sham1234@gmail.com', 'Sham', 'das', 0, '2019-03-19 07:37:46', 'e10adc3949ba59abbe56e057f20f883e', 0),
(68, 'blocksatjoe@gmail.com', 'Joesph', 'Salmon', 0, '2025-04-28 06:30:25', '563c94534a89ef46c15a2c460ffbe716', 1),
(69, 'admin@admin.com', 'Admin', 'User', 0, '2025-04-28 21:28:57', 'admin', 1),
(70, 'expert@gmail.com', 'expert', 'expert', 0, '2025-04-29 19:33:28', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(71, 'user@gmail.com', 'user', 'account', 0, '2025-04-29 19:32:32', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(36, 68, 21, 'Confirmed'),
(37, 68, 33, 'Confirmed'),
(38, 68, 42, 'Confirmed'),
(39, 68, 33, 'Confirmed'),
(40, 68, 26, 'Confirmed'),
(42, 68, 33, 'Confirmed'),
(44, 68, 23, 'Confirmed'),
(45, 68, 37, 'Confirmed'),
(48, 71, 26, 'Added To Cart'),
(49, 71, 19, 'Added To Cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `requests` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
