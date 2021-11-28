-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movflicks_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `movflicks_table`
--

CREATE TABLE `movflicks_table` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` text NOT NULL,
  `director` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movflicks_table`
--

INSERT INTO `movflicks_table` (`id`, `title`, `genre`, `director`) VALUES
(1, 'Dune (2021)', 'Action/Fantasy/Science fiction', 'Denis Villeneuve'),
(2, 'Stargate: The Ark Of Truth', 'Science fiction', 'Robert C. Cooper'),
(3, 'Stargate: Continuum', 'Science fiction', 'Martin Wood'),
(4, 'Star Trek Into Darkness', 'Action/Science fiction', 'J.J. Abrams'),
(5, 'Star Trek Beyond', 'Action/Science fiction', ' Justin Lin'),
(6, 'Star Trek (2009)', 'Action/Science fiction', 'J.J. Abrams'),
(10, 'Star Wars', 'Action/Science fiction', 'George Lucas'),
(11, 'The Lives of Others', 'Drama/Mystery', 'Florian Henckel von Donnersmarck');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movflicks_table`
--
ALTER TABLE `movflicks_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movflicks_table`
--
ALTER TABLE `movflicks_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
