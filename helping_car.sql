-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 05:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helping_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `modal` varchar(200) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `proff` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `address`, `vehicle`, `modal`, `colour`, `proff`, `gender`, `age`) VALUES
(1, 'saf', '7845125464', 'fasf@gma', 'dad', '', 'arf', 'ra', '', 'house_wife', 32),
(2, 'vvv', '7412589632', 'sakshi@gmail.com', 'fe', 'sv', ' e', 'g', '', 'govt_employ', 25),
(3, 'fctf', '8003099741', 'duke.abhi01@gmail.com', 'fe ', 'qd', 'fe', 'fdd', '', 'govt_employ', 34),
(4, 'qr', '8003077415', 'duke.abhi01@gmail.com', 'qqdq', 't r', 'f', 'rfew', '', 'business', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
