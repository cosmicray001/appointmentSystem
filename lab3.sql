-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2020 at 10:59 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `date` date NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `b1` varchar(300) NOT NULL,
  `b2` varchar(300) NOT NULL,
  `b3` varchar(300) NOT NULL,
  `b4` varchar(300) NOT NULL,
  `c1` varchar(300) NOT NULL,
  `c2` varchar(300) NOT NULL,
  `c3` varchar(300) NOT NULL,
  `c4` varchar(300) NOT NULL,
  `d1` varchar(300) NOT NULL,
  `d2` varchar(300) NOT NULL,
  `d3` varchar(300) NOT NULL,
  `d4` varchar(300) NOT NULL,
  `e1` varchar(300) NOT NULL,
  `e2` varchar(300) NOT NULL,
  `e3` varchar(300) NOT NULL,
  `e4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`date`, `a1`, `a2`, `a3`, `a4`, `b1`, `b2`, `b3`, `b4`, `c1`, `c2`, `c3`, `c4`, `d1`, `d2`, `d3`, `d4`, `e1`, `e2`, `e3`, `e4`) VALUES
('2020-03-25', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot'),
('2020-03-26', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot'),
('2020-03-29', 'user1@gmail.com', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl` int(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `lin` varchar(300) NOT NULL,
  `eng` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl`, `name`, `mail`, `address`, `mobile`, `lin`, `eng`, `password`, `type`) VALUES
(4, 'admin', 'admin@gmail.com', 'pas', 'pas', 'pass', 'pass', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 1),
(5, 'user1', 'user1@gmail.com', 'bdhbd djdjk', '456789', 'djndjk ', 'sins', 'a9993e364706816aba3e25717850c26c9cd0d89d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sl` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
