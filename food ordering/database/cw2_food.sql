-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2021 at 05:21 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw2_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

DROP TABLE IF EXISTS `logindetails`;
CREATE TABLE IF NOT EXISTS `logindetails` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `address` text NOT NULL,
  `tp` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`name`, `password`, `email`, `address`, `tp`) VALUES
('admin', 'admin', 'admin@ff', '             admin                  	\r\n                               ', 0),
('user1', 'user1', 'user1@gm', '                               	\r\n                        qwqw       ', 0),
('thushal', 'thushal', 'thushal@rew', '                               	rewerwe\r\n                               ', 0),
('user2', 'user2', 'batman@gmail.com', '               wraerq                	\r\n                               ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `name` varchar(200) NOT NULL,
  `quntity` int NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`name`, `quntity`, `email`, `address`) VALUES
('user1', 9, 'user1@gm', '                  edsaee             	\r\n                               '),
('naveen', 9, 'batman@gmail.com', '                               	\r\n             rwqeaw                  ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(300) NOT NULL,
  `code` varchar(300) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `code`, `price`, `image`) VALUES
('chinese food', 'C001', 250, 'resources/css/img/1.jpg'),
('soup', 'C004', 300, 'resources/css/img/4.jpg'),
('Beef Grill', 'C005', 500, 'resources/css/img/5.jpg'),
('Veg snack', 'C006', 250, 'resources/css/img/6.jpg'),
('Omlet Burger', 'C007', 300, 'resources/css/img/7.jpg'),
('Sweet penuts', 'C008', 150, 'resources/css/img/8.jpg'),
('Chkien burger', 'C009', 300, 'resources/css/img/9.jpg'),
('Meat and Chees Burger', 'C0010', 345, 'resources/css/img/10.jpg'),
('chips', 'C0011', 250, 'resources/css/img/11.jpg'),
('Pork Burger', 'C0012', 400, 'resources/css/img/12.jpg'),
('Chees Balls', 'C0013', 250, 'resources/css/img/13.jpg'),
('Beef Burger', 'C0016', 700, 'resources/css/img/16.jpg'),
('Chees Burger', 'C0017', 345, 'resources/css/img/17.jpg'),
('Veg Naan', 'C0019', 150, 'resources/css/img/19.jpg'),
('Chiken legs', 'C0020', 300, 'resources/css/img/20.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
