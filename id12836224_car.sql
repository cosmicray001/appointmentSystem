-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2021 at 06:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12836224_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm1`
--

CREATE TABLE `sm1` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm1`
--

INSERT INTO `sm1` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('2020-01-06', '0', '0', '0', '0'),
('2020-03-03', '0', 'tazzytazz1234@gmail.com', '0', '0'),
('2020-03-06', 'samiulislambracu@gmail.com', 'samiulislambracu@gmail.com', '', 'samiulislambracu@gmail.com'),
('2020-03-07', '0', '0', '0', '0'),
('2020-03-08', '0', '0', '0', '0'),
('2020-03-09', 'samiulislambracu@gmail.com', 'mhbhbh', 'asd@gmail.com', ''),
('2020-03-10', '0', 'asd@gmail.com', '0', '0'),
('2020-03-13', 'fahdzakwan5468@gmail.com', '0', '0', '0'),
('2020-06-13', '0', '0', '0', '0'),
('2020-08-02', '0', '0', '0', '0'),
('2020-09-28', 'sam@gmail.com', '0', '0', '0'),
('2020-10-17', 'e1@gmail.com', '0', '0', '0'),
('2020-12-12', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sm2`
--

CREATE TABLE `sm2` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm2`
--

INSERT INTO `sm2` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('2020-01-06', '0', '0', '0', '0'),
('2020-03-03', '0', 'tazzytazz1234@gmail.com', '0', '0'),
('2020-03-06', '', '', '', ''),
('2020-03-07', '0', '0', '0', '0'),
('2020-03-08', '0', '0', '0', '0'),
('2020-03-09', '', 'samiulislambracu@gmail.com', '', ''),
('2020-03-10', 'asd@gmail.com', '0', '0', '0'),
('2020-03-13', '0', '0', '0', '0'),
('2020-06-13', '0', '0', '0', '0'),
('2020-08-02', '0', '0', '0', '0'),
('2020-09-28', '0', 'sam@gmail.com', '0', '0'),
('2020-10-17', '0', '0', '0', '0'),
('2020-12-12', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sm3`
--

CREATE TABLE `sm3` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm3`
--

INSERT INTO `sm3` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('2020-01-06', '0', '0', '0', '0'),
('2020-03-03', '0', '0', '0', '0'),
('2020-03-06', '', '', '', 'samiulislambracu@gmail.com'),
('2020-03-07', '0', '0', '0', '0'),
('2020-03-08', '0', '0', '0', '0'),
('2020-03-09', '', '', '', ''),
('2020-03-10', '0', '0', '0', '0'),
('2020-03-13', '0', '0', '0', '0'),
('2020-06-13', '0', '0', '0', '0'),
('2020-08-02', '0', '0', '0', '0'),
('2020-09-28', '0', '0', '0', '0'),
('2020-10-17', '0', 'use2@gmail.com', '0', '0'),
('2020-12-12', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sm4`
--

CREATE TABLE `sm4` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm4`
--

INSERT INTO `sm4` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('2020-01-06', '0', '0', '0', '0'),
('2020-03-03', '0', '0', '0', '0'),
('2020-03-06', '', '', '', ''),
('2020-03-07', '0', '0', '0', '0'),
('2020-03-08', '0', '0', '0', '0'),
('2020-03-09', '', '', '', ''),
('2020-03-10', '0', '0', '0', '0'),
('2020-03-13', '0', '0', '0', '0'),
('2020-06-13', '0', '0', '0', '0'),
('2020-08-02', '0', '0', '0', '0'),
('2020-09-28', '0', 'sam@gmail.com', '0', '0'),
('2020-10-17', '0', '0', '0', '0'),
('2020-12-12', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sm5`
--

CREATE TABLE `sm5` (
  `date` date NOT NULL,
  `u1` varchar(255) DEFAULT NULL,
  `u2` varchar(255) DEFAULT NULL,
  `u3` varchar(255) DEFAULT NULL,
  `u4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm5`
--

INSERT INTO `sm5` (`date`, `u1`, `u2`, `u3`, `u4`) VALUES
('2020-01-06', '0', '0', '0', '0'),
('2020-03-03', '0', '0', '0', '0'),
('2020-03-06', 'samiulislambracu@gmail.com', '', '', ''),
('2020-03-07', '0', '0', '0', '0'),
('2020-03-08', '0', '0', '0', '0'),
('2020-03-09', '', '', '', ''),
('2020-03-10', '0', '0', '0', '0'),
('2020-03-13', '0', '0', '0', '0'),
('2020-06-13', '0', '0', '0', '0'),
('2020-08-02', '0', '0', '0', '0'),
('2020-09-28', '0', '0', '0', '0'),
('2020-10-17', '0', '0', '0', 'e1@gmail.com'),
('2020-12-12', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `linum` varchar(200) NOT NULL,
  `engnum` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `phone`, `linum`, `engnum`, `pass`, `type`) VALUES
(16, 'Md Samiul Islam', 'samiulislambracu@gmail.com', 'Dhaka', '0177XXXXXX7', 'dfguhingyyguy', 'tcfvygbuhbbu', '8b24792c6dc0a7fb151d017e0ace20faa95f0515', 0),
(17, 'Tazzy Tazz', 'tazzytazz1234@gmail.com', 'Earth, Milky way Galaxy', 'eta ki 2441139 ...', 'aj gorib bole ', ' yo nigga!', '4649791af8c2bd888dc373be156f4b84e3af33aa', 0),
(18, 'Kazi Fahd Zakwan', 'fahdzakwan5468@gmail.com', 'hjcac', 'hjabca', 'hcb', 'hjacbas', '2c4cbefc361cd7d1a0ed2d74aa74b14594ac3ca4', 0),
(19, 'ddd', 'asd@gmail.com', 'dddddd', '0152145', 'sdafjh4', 'e3ee', 'ffa3b4910c810b994b85bfbdb999213c36d8bfdc', 0),
(20, 'admin', 'admin@gmail.com', 'dhaka', '3456789', '23456789', '3456789', '4d17855166e7ab99962a123d5d0dd44714dbec40', 1),
(21, 'sam', 'sam@gmail.com', 'zurich', '3456789', '456789', '45678', '4d17855166e7ab99962a123d5d0dd44714dbec40', 0),
(22, 'user01', 'e1@gmail.com', 'dhaka', '3456789', '345678', '34567', '4d17855166e7ab99962a123d5d0dd44714dbec40', 0),
(23, 'john', 'use2@gmail.com', 'dftyg', 'dtfgyuh', 'dfgh', 'fgh', '4d17855166e7ab99962a123d5d0dd44714dbec40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sm1`
--
ALTER TABLE `sm1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm2`
--
ALTER TABLE `sm2`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm3`
--
ALTER TABLE `sm3`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm4`
--
ALTER TABLE `sm4`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `sm5`
--
ALTER TABLE `sm5`
  ADD PRIMARY KEY (`date`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
