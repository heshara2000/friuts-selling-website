-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruits_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `menu_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`menu_id`, `user_id`, `Name`, `Quantity`, `Price`, `image`) VALUES
(1, 6, 'apple', 1, 300, 'https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg'),
(2, 6, 'banana', 1, 300, 'https://m.media-amazon.com/images/I/51ebZJ+DR4L._AC_UF1000,1000_QL80_.jpg'),
(3, 6, 'orange', 1, 300, 'https://thumbs.dreamstime.com/b/orange-fruit-22884921.jpg'),
(4, 1, 'apple', 1, 300, 'https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `menu_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `Price` varchar(30) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`menu_id`, `Name`, `description`, `Price`, `img_url`) VALUES
(1, 'banana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '300', 'https://m.media-amazon.com/images/I/51ebZJ+DR4L._AC_UF1000,1000_QL80_.jpg'),
(3, 'apple', 'vvvvvvvvvvvvvvvvvvvvvvvv', '300', 'https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg'),
(4, 'grapes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '500', 'https://img.freepik.com/premium-vector/isolated-dark-grape-with-green-leaf_317810-1956.jpg?w=2000'),
(5, 'orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '300', 'https://thumbs.dreamstime.com/b/orange-fruit-22884921.jpg'),
(6, 'woodapple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '200', 'https://st3.depositphotos.com/12122328/14702/i/1600/depositphotos_147020287-stock-photo-wood-apple-isolated-on-white.jpg'),
(7, 'Dragon Fruits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '800', 'https://media.post.rvohealth.io/wp-content/uploads/2020/09/AN445-Dragonfruit-732x549-thumb-732x549.jpg'),
(8, 'Stawberry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '1500', 'https://hips.hearstapps.com/countryliving/assets/15/22/1432664914-strawberry-facts1.jpg'),
(9, 'Guava', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '200', 'https://www.foodrepublic.com/img/gallery/how-to-eat-guava-and-why-you-should/l-intro-1684540416.jpg'),
(10, 'Mango', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio,', '300', 'https://sahajaaharam.com/files/Mango%20-%20Alphonzo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `email`, `message`) VALUES
(1, 'ww', 'chamani@gmail.com', 'eeeeeeeeeeeeeeeeeeeeeeeee'),
(2, 'ww', 'chamani@gmail.com', 'eeeeeeeeeeeeeeeeeeeeeeeee'),
(3, 'ww', 'chamani@gmail.com', 'eeeeeeeeeeeeeeeeeeeeeeeee'),
(4, 'www', 'chamani@gmail.com', 'eeeeeeeeeeeeeeeeeeeeeeeee'),
(5, 'abc', 'abc@gmail.com', 'test 1 is success'),
(8, 'heshara', 'he@gmail.com', 'testinggggggggggggggggg'),
(9, 'ww', 'hesha@gmail.com', 'ccccccccccccc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `number`, `address`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '0112971952', 'kkk', '12345678'),
(2, 'dananji', 'dananji@gmail.com', '0112971952', 'ja ela', '12345678'),
(3, 'kumari', '1234@gmail.com', '0112971952', 'mahara', '12345'),
(5, 'ww', 'ww@gmail.com', '1111', 'ww', 'wwwww'),
(6, '21ug0178', 'kushangayantha001@gmail.com', '1234565787', '201/10 Colombo Road Kurunegala', '@kushan12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `menu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `menu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
