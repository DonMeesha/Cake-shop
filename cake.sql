-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2020 at 09:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcake`
--

DROP TABLE IF EXISTS `addcake`;
CREATE TABLE IF NOT EXISTS `addcake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `weight` int(10) NOT NULL,
  `price` int(3) NOT NULL,
  `description` varchar(120) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcake`
--

INSERT INTO `addcake` (`id`, `name`, `weight`, `price`, `description`, `image`) VALUES
(47, 'chocolate cake', 2, 100, 'chocolate drip cake', '94527794_959551734464828_4611866802190811136_o.jpg'),
(48, 'Chocolate Drip Cake', 2, 100, 'ingridients here', 'card 1.jpg'),
(49, 'butter cake', 1, 120, 'bla bla bla', 'card 4.jpg'),
(50, 'example3', 1, 40, 'bla bla bla', 'card 10.jpg'),
(51, 'drip cake', 3, 50, 'butter cake with strewberry', 'card 9.jpg'),
(52, 'aaa', 1, 30, 'bbbbbbbbb', 'card 8.jpg'),
(53, 'drip cake', 2, 40, 'butter cake with strewberry', 'card 6.jpg'),
(54, 'aaa', 1, 100, 'chocolate drip cake', 'card 7.jpg'),
(55, 'example3', 4, 30, 'bbbbbbbbb', 'card 5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addcupcake`
--

DROP TABLE IF EXISTS `addcupcake`;
CREATE TABLE IF NOT EXISTS `addcupcake` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` varchar(5) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcupcake`
--

INSERT INTO `addcupcake` (`id`, `name`, `price`, `description`, `image`) VALUES
(2, 'rapunzel cup cake', '3', 'rapunzal theme cake for a birthday girl', '72423993_807127843040552_4982683214691696640_o.jpg'),
(3, 'cup cake', '6', 'cup cakes', 'WhatsApp Image 2020-06-02 at 18.48.33 (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cakedesign`
--

DROP TABLE IF EXISTS `cakedesign`;
CREATE TABLE IF NOT EXISTS `cakedesign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cnumber` varchar(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `weight` int(20) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `filling` varchar(20) NOT NULL,
  `icing` varchar(20) NOT NULL,
  `eggless` varchar(10) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `subject` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `item_total` int(120) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(3, 'jay', 'jaybaking@gmail.com', '12345'),
(4, 'kush', 'kush123@gmail.com', 'kush'),
(5, 'kaushi rameesha', '1stexample@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

DROP TABLE IF EXISTS `signin`;
CREATE TABLE IF NOT EXISTS `signin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'kaushi rameesha', 'kaushirameesha@gmail.com', '123', '123'),
(2, 'aaa', 'kaushirameesha@gmail.com', '222', '222'),
(6, 'ccc', 'krnk@gmail.com', '12345', '12345'),
(9, 'ddd', 'kr@gmail.com', '555', '555'),
(11, 'madavie mudalige', 'madavimudalige@gmail.com', '12345', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
