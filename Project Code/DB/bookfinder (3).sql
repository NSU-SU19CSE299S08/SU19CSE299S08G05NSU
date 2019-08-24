-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 09:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins`
(
  `a_id` int
(100) NOT NULL,
  `adminName` varchar
(255) NOT NULL,
  `adminUserName` varchar
(255) NOT NULL,
  `adminEmail` varchar
(255) NOT NULL,
  `adminPhone` varchar
(255) NOT NULL,
  `adminPassword` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`
a_id`,
`adminName
`, `adminUserName`, `adminEmail`, `adminPhone`, `adminPassword`) VALUES
(1, 'Md. Abu Nasib', 'Nasib', 'nasib@gmail.com', '01712121212', '$2y$10$LiarEyMorP5ysm6NG1MHPO3bnq39wkMro/mfCjOEaRAJECoDjuL8G'),
(2, 'Nayeem M. Muzahid', 'Nayeem', 'nayeem@gmail.com', '01721212121', '$2y$10$xA824zacFEGVRwelmh2nPOa8mzrn2pqkIs64ENH.0zbZZE7Jd.qMm');

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo`
(
  `id` int
(11) NOT NULL,
  `BookName` varchar
(30) NOT NULL,
  `AuthorName` varchar
(30) NOT NULL,
  `PublisherName` varchar
(30) NOT NULL,
  `ISBN` int
(20) NOT NULL,
  `BookPrice` int
(20) NOT NULL,
  `BookLanguage` varchar
(30) NOT NULL,
  `BookImage` varchar
(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
  `user_id` int
(11) NOT NULL,
  `full_name` varchar
(30) NOT NULL,
  `user_uid` varchar
(30) NOT NULL,
  `user_email` varchar
(30) NOT NULL,
  `user_phone` varchar
(15) NOT NULL,
  `user_pass` varchar
(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
user_id`,
`full_name
`, `user_uid`, `user_email`, `user_phone`, `user_pass`) VALUES
(100000, 'Nasib', 'Nasib48', 'abunasib48@gmail.com', '01784537848', 'sdbfihddh'),
(100001, 'Nayeem M. Muzahid', 'nayeem', 'nayeem@gmail.com', '01712121212', '12345'),
(100002, 'asd', 'asd', 'ab@g.com', '01712345678', '45632');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
ADD PRIMARY KEY
(`a_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int
(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
