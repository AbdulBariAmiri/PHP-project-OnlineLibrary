-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 01:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Details` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `File` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Name`, `Details`, `Photo`, `File`) VALUES
(1, 'world war', 'this book is about first and second world war', 'history.JPG', 'world war.PDF'),
(2, '1920 Evil', 'This a horror story about a village in 1920', 'horror.JPG', 'horror.PDF'),
(3, 'mystery', 'recommended for those who are intrested in mysteri', 'mystery.JPG', 'mystery.PDF'),
(4, 'science', 'scientific subjects ', 'science.JPG', 'science.PDF'),
(5, 'philosophy', 'A good book for those who are intrested in philoso', 'philosophy.JPG', 'philosophy.PDF'),
(6, 'memoir', 'memoir content', 'memoir.JPG', 'memoir.PDF'),
(7, 'litrature', 'litrature topics', 'litrature.JPG', 'litrature.PDF'),
(8, 'math 11', 'class 11 math questions solutions', 'math 11.JPG', 'math 11.PDF'),
(9, 'math 12', 'class 12 math questions solutions', 'math 12.JPG', 'math 12.PDF');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'bari', 'bari@gmail.com', 'bari'),
(2, 'Ibrahim', 'Ibrahim@gmail.com', 'ibrahim'),
(3, 'ahmad', 'ahmad@gmail.com', 'ahmad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
