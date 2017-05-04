-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 10:33 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `img_url` varchar(512) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `title`, `img_url`, `price`, `category`, `sub_category`) VALUES
(1, 'tropcherpourtoi', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf1.png', '85.95', 'men', 'scarf'),
(2, 'pourlesradasses', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf2.png', '145.95', 'women', 'scarf'),
(3, 'pourlespauvres', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf3.png', '1.95', 'men', 'scarf'),
(4, 'made_by_grandma', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf4.png', '25.95', 'men', 'scarf'),
(5, 'old_fashion', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf5.png', '15.95', 'women', 'scarf'),
(6, 'he_will_be_back', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull1.png', '115.95', 'women', 'pull'),
(7, 'nice_one', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull2.png', '135.95', 'women', 'pull'),
(8, 'high_education', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull3.png', '115.95', 'women', 'pull'),
(9, 'bad_boy', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull4.png', '95.95', 'men', 'pull'),
(10, 'Vanilla', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses1.png', '15.95', 'women', 'glasses'),
(11, 'Special_Keke', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses2.png', '45.95', 'women', 'glasses'),
(12, 'Plus_didee', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses3.png', '23.95', 'women', 'glasses'),
(13, 'Marvelous', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses4.png', '69.95', 'men', 'glasses'),
(14, 'Macho', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses5.png', '12.95', 'men', 'glasses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;