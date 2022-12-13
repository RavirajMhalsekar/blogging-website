-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 11:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `Sno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`Sno`, `title`, `description`, `type`, `image_url`) VALUES
(17, 'Gateway Of India Mum', 'The Gateway of India is an arch-monument built in the early 20th century in the city of Mumbai (Bombay), India. It was erected to commemorate the landing of King-Emperor George V, the first British monarch to visit India, in December 1911 at Strand Road near Wellington Fountain.\r\n\r\nThe foundation stone was laid in March 1913 for a monument built in the Indo-Islamic style, inspired by elements of 16th-century Gujarati architecture. ', 'travel', 'IMG-6398f390c2aca8.96807470.jpg'),
(20, 'Is burger unhealthy ', 'Burgers contain excessive amounts of cholesterol and saturated fat. Meat consists of fat naturally, which increases the cholesterol level. When you have burgers, the cholesterol level rises in the blood, thereby increasing the chances of heart disorders.', 'food', 'IMG-6398f9501fb664.12861135.jpg'),
(21, 'Sunburn Goa 2022', 'Every year, Sunburn witnesses a world-class line-up of DJs from across the globe, spinning some of their best works and engaging the crowd to some out-of-the-world music. Few of the famous artists who perform at this festival are Afrojack, DJ Snake Andrew Rayel, Tiesto, Mark Knight, Quintino, Pete Tong, James Zabiela Josh Wink, Shermanology, Chuckie and Goldfish. Among Indians, Nucleya, Anish Sood, Janux, Sartek, and Arsh have performed in this Festival in the past.', 'entertainment', 'IMG-6398f9fca67d75.20540910.jpg'),
(22, 'What is cryptocurrency?', 'A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms. The use of encryption technologies means that cryptocurrencies function both as a currency and as a virtual accounting system. To use cryptocurrencies, you need a cryptocurrency wallet.', 'tech', 'IMG-6398fb2f7f6737.83064149.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Sno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Sno`, `name`, `email`, `subject`, `message`) VALUES
(1, 'raviraj mhalsekar', 'ravirajmhalsekar@gmail.com ', 'brilliant website', 'amazing-looking website with great UI. Great work man keep it going!!'),
(11, 'rohit naik', '29rohit2001@gmail.com', 'amazing work', 'full marks sure ter!!!!'),
(13, 'rahul parab', 'rahulParab@gmail.com', 'creative and amazing', 'lots of hard work manh..keep it going!!'),
(14, 'pratik kamat', 'pratikKamat@gmail.com', 'creative and amazing', 'amazing work man');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Sno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Sno`, `name`, `email`, `password`) VALUES
(1, 'raviraj mhalsekar', 'ravirajmhalsekar@gmail.com ', 'qwerty1234'),
(11, 'Rohit Naik', 'rohitnaik@gmail', 'beachboal'),
(12, 'rahul parab', 'rahulParab@gmail', 'zinga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
