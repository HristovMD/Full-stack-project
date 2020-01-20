-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  9 яну 2020 в 11:49
-- Версия на сървъра: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beertester`
--

-- --------------------------------------------------------

--
-- Структура на таблица `beers`
--

CREATE TABLE `beers` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8 NOT NULL,
  `brewer` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country` varchar(255) CHARACTER SET utf8 NOT NULL,
  `style` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `foam` varchar(255) CHARACTER SET utf8 NOT NULL,
  `transparency` varchar(255) CHARACTER SET utf8 NOT NULL,
  `srm` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ibu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `glass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `vessel` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notes` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `beers`
--

INSERT INTO `beers` (`id`, `brand`, `brewer`, `country`, `style`, `alc`, `price`, `foam`, `transparency`, `srm`, `ibu`, `glass`, `vessel`, `notes`, `name`) VALUES
(89, 'Pliny the Elder', 'Russian river', 'USA', 'Imperial IPA', '8%', '11 bgn', 'good', 'dreggy', '7', '100', 'Tulip', 'Bottle', 'With the students in \'Beerbox\'.\n04.07.19\n9/10', 'Kostadin '),
(90, 'London Porter', 'Fuller\'s', 'UK', 'porter', '5.4%', '8 bgn', 'weak', 'clear', '30', '25', 'Stange', 'Bottle', 'The best porter beer! \nWith friends at \'Praga 18\'.\n10/10', 'Tihomir '),
(91, 'Guinness', 'St. James\'s Gate brewery', 'Ireland', 'stout', '5%', '5 bgn', 'good', 'dark clear', '30', '20', 'Pint', 'Draught', 'Classic stout!\nWith friends in \'Halbite\'\n8/10', 'Martin '),
(92, 'Black Wych', 'Wynchwood brewery', 'UK', 'porter', '5%', '7 bgn', 'good', 'clear', '35', '30', 'Mug', 'Barrel', 'Sweet and bitter taste, will repeat;)\nWith coworkers in \'Thin red line\'bar.\n8/10', 'Martin '),
(93, 'Bernard Cherny Lezak', 'Rodinny pivovar', 'Czech republic', 'dark lager', '5%', '5 bgn', 'good', 'clear', '30', '15', 'Snifter', 'Draught', 'Nice winter lager.\r\nWith friends at \'The Raven & Cannonball\' bar.\r\n9/10', 'Martin '),
(94, 'Poculator', 'Kloster Scheyern', 'Germany', 'doppelbock-dunkel', '7.6%', '6 bgn', 'good', 'clear', '30', '22', 'Mug', 'Bottle', 'The best bock beer!\nAt \'Wrong\'bar with friends.\n10/10', 'Martin ');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'Kostadin', 'errazib'),
(2, 'Tihomir', 'cmmndrkn'),
(3, 'Martin', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beers`
--
ALTER TABLE `beers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
