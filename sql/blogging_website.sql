-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 08:23 PM
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
(6, 'this is raviraj', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit consectetur commodi accusantium ea ab debitis numquam fuga. Nobis quas nihil soluta facilis quo. Ex voluptas voluptate cumque aliquid iste?', 'food', 'IMG-638b267ee0cae7.94099010.jpg'),
(7, 'One call fixes it all', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit consectetur commodi accusantium ea ab debitis numquam fuga. Nobis quas nihil soluta facilis quo. Ex voluptas voluptate cumque aliquid iste?', 'travel', 'IMG-638b37ff3a43c9.39960791.jpg'),
(8, 'test 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit consectetur commodi accusantium ea ab debitis numquam fuga. Nobis quas nihil soluta facilis quo. Ex voluptas voluptate cumque aliquid iste?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore sit consectetur commodi accusantium ea ab debitis numquam fuga. Nobis quas nihil soluta facilis quo. Ex voluptas voluptate cumque aliquid iste?', 'tech', 'IMG-638b38b0290375.57250965.jpg'),
(9, 'final test blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus exercitationem in animi non facere odio ad aliquam voluptatem iste similique architecto, fugit eveniet error ipsum ex nemo vel id numquam eos sint? Ab officia iste consequatur earum repellendus inventore, saepe architecto eos enim magnam fugit fugiat beatae perferendis placeat, vero voluptatibus, cum veritatis? Dignissimos velit ratione rerum dolorem enim beatae?', 'entertainment', 'IMG-638b40ea45ab90.31135914.jpg'),
(11, 'demo run', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus exercitationem in animi non facere odio ad aliquam voluptatem iste similique architecto, fugit eveniet error ipsum ex nemo vel id numquam eos sint? Ab officia iste consequatur earum repellendus inventore, saepe architecto eos enim magnam fugit fugiat beatae perferendis placeat, vero voluptatibus, cum veritatis? Dignissimos velit ratione rerum dolorem enim beatae?', 'travel', 'IMG-638b45f8536415.03197005.jpg'),
(12, 'test 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus recusandae earum temporibus sapiente alias repudiandae corporis, ducimus expedita vero ullam perferendis aspernatur sint magni ut quos iure similique totam consequatur nostrum et, cumque accusamus. Modi laborum nesciunt maiores vero minima?', 'tech', 'IMG-638c556a5dec51.68372851.jpg'),
(14, 'Food. website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deleniti, quos harum delectus placeat in officiis numquam, possimus iusto animi eveniet adipisci impedit natus a beatae repudiandae! Fuga saepe nemo accusamus dolores aut! Corporis sapiente, fugiat eligendi laudantium recusandae eius! Numquam harum blanditiis porro delectus voluptatem architecto itaque possimus aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum magni deleniti dicta, accusamus, impedit minima sequi ipsam voluptate soluta voluptatibus molestiae ullam dolorem consequuntur quis tempore voluptatem laudantium praesentium sed molestias ratione tempora? Suscipit, dicta praesentium. Soluta, quo quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aut incidunt illo pariatur aliquam id quo velit. Expedita enim, molestiae magnam nihil corporis error nulla quisquam? Quae veniam accusantium amet, voluptas ut voluptates quod, soluta sunt iste beatae, nobis harum Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque odit, iusto aspernatur sint accusamus consequatur debitis id aut, ipsa ipsam voluptate voluptatibus quidem rerum libero quia assumenda! Eius delectus laboriosam, molestiae qui suscipit aliquid harum itaque labore cupiditate blanditiis cumque.', 'tech', 'IMG-639629e9c873c4.70831967.jpg'),
(15, 'test 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deleniti, quos harum delectus placeat in officiis numquam, possimus iusto animi eveniet adipisci impedit natus a beatae repudiandae! Fuga saepe nemo accusamus dolores aut! Corporis sapiente, fugiat eligendi laudantium recusandae eius! Numquam harum blanditiis porro delectus voluptatem architecto itaque possimus aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum magni deleniti dicta, accusamus, impedit minima sequi ipsam voluptate soluta voluptatibus molestiae ullam dolorem consequuntur quis tempore voluptatem laudantium praesentium sed molestias ratione tempora? Suscipit, dicta praesentium. Soluta, quo quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aut incidunt illo pariatur aliquam id quo velit. Expedita enim, molestiae magnam nihil corporis error nulla quisquam? Quae veniam accusantium amet, voluptas ut voluptates quod, soluta sunt iste beatae, nobis harum Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque odit, iusto aspernatur sint accusamus consequatur debitis id aut, ipsa ipsam voluptate voluptatibus quidem rerum libero quia assumenda! Eius delectus laboriosam, molestiae qui suscipit aliquid harum itaque labore cupiditate blanditiis cumque.', 'entertainment', 'IMG-63962a533b49e4.84608644.jpg'),
(16, 'One call fixes it al', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deleniti, quos harum delectus placeat in officiis numquam, possimus iusto animi eveniet adipisci impedit natus a beatae repudiandae! Fuga saepe nemo accusamus dolores aut! Corporis sapiente, fugiat eligendi laudantium recusandae eius! Numquam harum blanditiis porro delectus voluptatem architecto itaque possimus aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum magni deleniti dicta, accusamus, impedit minima sequi ipsam voluptate soluta voluptatibus molestiae ullam dolorem consequuntur quis tempore voluptatem laudantium praesentium sed molestias ratione tempora? Suscipit, dicta praesentium. Soluta, quo quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aut incidunt illo pariatur aliquam id quo velit. Expedita enim, molestiae magnam nihil corporis error nulla quisquam? Quae veniam accusantium amet, voluptas ut voluptates quod, soluta sunt iste beatae, nobis harum Lorem ipsum dol', 'travel', 'IMG-63962a7fcfc612.40497661.jpg');

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
(12, 'raviraj mhalsekar', 'demo@this.com', 'final testing', 'damn that was tough to build!!!');

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
(7, 'Raviraj', 'ravirajmhalsekar@gmail.com', 'qwerty');

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
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
