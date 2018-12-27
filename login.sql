-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 11:10 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonenum`
--

CREATE TABLE `phonenum` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `users` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonenum`
--

INSERT INTO `phonenum` (`id`, `fname`, `lname`, `email`, `phone`, `users`) VALUES
(11, 'Saad', 'Malik', 'maliksaad3333@gmail.com', 923224787632, 'saad3333'),
(12, 'Xaad', 'Asghar', 'xaad@gmail.com', 3224787632, 'saad3333'),
(15, 'Umar', 'Asghar', 'umar@gmail.com', 123456789, 'demo3333'),
(16, 'Jackob', 'Edward', 'jackob@gmail.com', 123456789, 'saad3333'),
(17, 'Demo', 'Demo', 'try@gmail.com', 9513574895, 'demo3333'),
(18, 'Silvester', 'Shaun', 'silver@gmail.com', 111222333444, 'saad3333');

-- --------------------------------------------------------

--
-- Table structure for table `tablez`
--

CREATE TABLE `tablez` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablez`
--

INSERT INTO `tablez` (`id`, `first`, `last`, `email`, `pass`) VALUES
(19, 'saad3333', 'malik', 'maliksaad3333@gmail.com', '$2y$10$c6J0rHsKgbJgFUgJBvjXBuMgx6dPaKVaelUvZz/f/zS7vXS5MzPle'),
(20, 'demo3333', 'test', 'demo@gmail.com', '$2y$10$tn2NbeuUlQ9r9pcTuIh1D.SqoLuKbJYITnH0E052DJSXtwqo130Eq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonenum`
--
ALTER TABLE `phonenum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablez`
--
ALTER TABLE `tablez`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phonenum`
--
ALTER TABLE `phonenum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tablez`
--
ALTER TABLE `tablez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
