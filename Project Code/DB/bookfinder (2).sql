-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 10:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `id` int(11) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `AuthorName` varchar(30) NOT NULL,
  `PublisherName` varchar(30) NOT NULL,
  `ISBN` int(20) NOT NULL,
  `BookPrice` int(20) NOT NULL,
  `BookLanguage` varchar(30) NOT NULL,
  `BookImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`id`, `BookName`, `AuthorName`, `PublisherName`, `ISBN`, `BookPrice`, `BookLanguage`, `BookImage`) VALUES
(4, 'à¦“à¦®à§‡à¦—à¦¾ à¦ªà§Ÿà§‡à¦¨à§', 'à¦¹à§à¦®à¦¾à§Ÿà§‚à¦¨ à¦†à¦¹à¦', 'Sheba Publisher', 2147483647, 128, 'English', 'uploads/vorerrongkalo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
