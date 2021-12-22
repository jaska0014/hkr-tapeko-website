-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2021 at 04:17 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diy_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `diy_events`
--

CREATE TABLE `diy_events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'no category',
  `description` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diy_events`
--

INSERT INTO `diy_events` (`id`, `title`, `category`, `description`, `date`, `image`) VALUES
(6, 'Soup for charity', 'food', '      soup for the soup kitchen      ', '2021-06-11 00:00:00', 'images/6060d96b7d8f4-original.jpg'),
(7, 'Pasta Pesto', 'Food', 'my secret recipe', '2021-05-21 00:00:00', 'images/6060da1173c14-original.jpg'),
(8, 'Knitting', 'Knitting', 'Knitting!', '2020-12-10 00:00:00', 'images/60614074f02c2-original.jpg'),
(9, 'Patchwork Blanket', 'Craft', 'Learn how to do patchwork', '2020-12-11 00:00:00', 'images/606150931f766-original.jpg'),
(10, 'Scrapbooking class', 'Art', 'Learn how to scrapbook', '2021-05-07 00:00:00', 'images/606150bbef508-original.jpg'),
(11, 'DIY facemask', 'Beauty', 'Learn how to make your own facemask', '2021-04-08 00:00:00', 'images/606150e9b0735-original.jpg'),
(12, 'Herb garden 101', 'Craft', 'Learn how to grow your own herb garden', '2021-03-31 00:00:00', 'images/60615110889aa-original.jpg'),
(13, 'Make your own swiss army tool', 'Craft', 'Learn how to make a swiss army tool', '2021-01-13 00:00:00', 'images/60615139a3bc2-original.jpg'),
(14, 'How to organise your clothes', 'Craft', 'Build your own clothing rack', '2021-03-30 00:00:00', 'images/6061516a6f49c-original.jpg'),
(15, 'Sketching for newbies', 'Art', 'Learn how to sketch', '2021-08-13 00:00:00', 'images/6061518e14e82-original.jpg'),
(16, 'Mend your belt', 'Craft', 'Learn how to fix your leather belt', '2021-05-26 00:00:00', 'images/606151bcb630a-original.jpg'),
(17, 'DIY dinner setting', 'Food', 'Learn how to set your party table', '2021-01-13 00:00:00', 'images/606152777500a-original.png'),
(18, 'Easy vegan salad bowls', 'Food', 'Learn how to make vegan salad bowls', '2021-06-12 00:00:00', 'images/606152cf0d863-original.jpg'),
(19, 'How to cook a steak', 'Food', 'Learn how to cook a perfect steak', '2021-08-06 00:00:00', 'images/606152fe6b105-original.jpg'),
(20, 'Using chillies in food', 'Food', 'Learn how to cook with heat', '2021-05-14 00:00:00', 'images/606153262c50c-original.jpg'),
(21, 'Salmon for 4', 'Food', 'Learn how to cook a dinner with salmon', '2021-11-19 00:00:00', 'images/6061538d3cf65-original.jpg'),
(22, 'Veggie springrolls', 'Food', 'Cooking class!', '2021-06-23 00:00:00', 'images/6061541b8070c-original.jpg'),
(23, 'Pumpkin soup', 'Food', 'Cooking class!', '2021-04-09 00:00:00', 'images/6061542f519c0-original.jpg'),
(24, 'Dipping sauces', 'Food', 'Cooking class!', '2021-03-04 00:00:00', 'images/60615458680ff-original.jpg'),
(25, 'Vegan ice cream', 'Food', 'Cooking class!', '2021-03-28 00:00:00', 'images/6061546ea54ff-original.jpg'),
(26, 'Easy meal prepping', 'Food', 'Cooking class!', '2021-05-02 00:00:00', 'images/6061548328c46-original.jpg'),
(27, 'Simple breakfast ideas', 'Food', 'Cooking class!', '2021-02-09 00:00:00', 'images/606154d8ee750-original.jpg'),
(28, 'Chickpea salad bowl', 'Food', 'Cooking class!', '2021-06-19 00:00:00', 'images/606155094cb6c-original.jpg'),
(29, 'Lockdown brunch ideas', 'Food', 'Cooking class!', '2021-07-30 00:00:00', 'images/60615591bdcf2-original.jpg'),
(30, 'Vegetarian meatballs', 'Food', 'Cooking class!', '2021-03-28 00:00:00', 'images/606155c1f2a5e-original.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diy_events`
--
ALTER TABLE `diy_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diy_events`
--
ALTER TABLE `diy_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
