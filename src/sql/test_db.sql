-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2022 at 01:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `slides_id` int(11) DEFAULT NULL,
  `list item` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `slides_id`, `list item`) VALUES
(1, 1, 'Гормональный скрининг'),
(2, 1, 'Тестостерон'),
(3, 1, 'Свободный тестостерон'),
(4, 1, 'Глобулин, связывающий половые гормоны'),
(5, 2, 'Гормональный скрининг'),
(6, 2, 'Гормональный скрининг'),
(7, 2, 'Гормональный скрининг'),
(8, 3, 'Тестостерон'),
(9, 3, 'Тестостерон'),
(10, 3, 'Тестостерон'),
(11, 3, 'Тестостерон'),
(12, 4, 'Свободный тестостерон'),
(13, 4, 'Свободный тестостерон'),
(14, 4, 'Свободный тестостерон');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` text,
  `subtitle` text,
  `price` text,
  `oldPrice` text,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `subtitle`, `price`, `oldPrice`, `img`) VALUES
(1, 'Check-UP', 'для мужчин', '2800₽', '3500₽', 'img/carousel/Frame1.png'),
(2, 'Check-UP1', 'для мужчин', '2800₽', '3500₽', 'img/carousel/Frame1.png'),
(3, 'Check-UP2', 'для мужчин', '2800₽', '3500₽', 'img/carousel/Frame1.png'),
(4, 'Check-UP3', 'для мужчин', '2800₽', '3500₽', 'img/carousel/Frame1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_id` (`slides_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`slides_id`) REFERENCES `slides` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
