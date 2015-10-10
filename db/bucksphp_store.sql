-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 03:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucksphp_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `link`, `image`, `created_at`, `category_id`) VALUES
(1, 'Butterfly Kittens', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '15.00', 'http://etsy.com/butterfly-kittens-shirt123213', 'images/butterfly_kittens.jpg', '2015-10-03 17:56:04', NULL),
(2, 'Cat Tacos', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '15.50', 'http://etsy.com/cat-tacos', 'images/cat_tacos.jpg', '2015-10-03 17:57:43', NULL),
(3, 'Cool Cat Sweatshiry', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '28.00', 'http://etsy.com/dasdasdsa', 'images/cool_cat_sweatshirt.jpg', '2015-10-03 17:57:43', NULL),
(4, 'Butterfly Kittens', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '15.00', 'http://etsy.com/butterfly-kittens-shirt123213', 'images/butterfly_kittens.jpg', '2015-10-03 18:37:15', NULL),
(5, 'Cat Tacos', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '15.50', 'http://etsy.com/cat-tacos', 'images/cat_tacos.jpg', '2015-10-03 18:37:15', NULL),
(6, 'Cool Cat Sweatshirt', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.00', 'http://etsy.com/dasdasdsa', 'images/cool_cat_sweatshirt.jpg', '2015-10-03 18:37:15', NULL),
(7, 'Freaky Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '18.00', 'http://etsy.com/dasdasdsa', 'images/freaky_cat.jpg', '2015-10-03 18:37:15', NULL),
(8, 'Galaxy Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '18.00', 'http://etsy.com/dasdasdsa', 'images/galaxy_cat.jpg', '2015-10-03 18:37:15', NULL),
(9, 'Hero Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '18.00', 'http://etsy.com/dasdasdsa', 'images/hero_cat.jpg', '2015-10-03 18:37:15', NULL),
(10, 'Karate Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '18.50', 'http://etsy.com/dasdasdsa', 'images/karate_cat.jpg', '2015-10-03 18:37:15', NULL),
(11, 'Keyboard Cats', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '15.50', 'http://etsy.com/dasdasdsa', 'images/keyboard_cats.jpg', '2015-10-03 18:37:15', NULL),
(12, 'Laser Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '15.00', 'http://etsy.com/dasdasdsa', 'images/laser_cat.jpg', '2015-10-03 18:37:15', NULL),
(13, 'Nirvana Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '17.00', 'http://etsy.com/dasdasdsa', 'images/nirvana_cat.jpg', '2015-10-03 18:37:15', NULL),
(14, 'PAWS', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '17.00', 'http://etsy.com/dasdasdsa', 'images/paws.jpg', '2015-10-03 18:37:15', NULL),
(15, 'Pilot Cat', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '16.00', 'http://etsy.com/dasdasdsa', 'images/pilot_cat.jpg', '2015-10-03 18:37:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_sizes`
--

CREATE TABLE IF NOT EXISTS `products_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_sizes`
--

INSERT INTO `products_sizes` (`product_id`, `size_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`) VALUES
(1, 'Small', '2015-10-10 13:08:44'),
(2, 'Medium', '2015-10-10 13:08:44'),
(3, 'Large', '2015-10-10 13:08:44'),
(4, 'XL', '2015-10-10 13:08:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_sizes`
--
ALTER TABLE `products_sizes`
  ADD PRIMARY KEY (`product_id`,`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
