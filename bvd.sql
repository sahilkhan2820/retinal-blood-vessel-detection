-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2019 at 01:43 AM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.2.15-0ubuntu0.18.10.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagetest`
--

CREATE TABLE `imagetest` (
  `id` int(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagetest`
--

INSERT INTO `imagetest` (`id`, `image`, `text`) VALUES
(1, 'eyelogo.jpg', 'aaaaa'),
(2, 'test.png', 'bbbbbb'),
(4, 'eyelogo.jpg', 'xxxxxxxxx'),
(5, 'eyelogo.jpg', 'jhbhvbjhuvbkhv'),
(6, 'eyelogo.jpg', 'jhbhvbjhuvbkhv'),
(7, 'test.png', 'zdhxzzdfgx'),
(8, 'eyelogo.jpg', 'nnnnnnnnnnnnnn'),
(10, 'scan.jpeg', 'mmmmmmmmmmmmmmmmm'),
(11, 'scan.jpeg', 'mmmmmmmmmmmmmmmmm'),
(13, 'testimg/scan.jpeg', 'iiiii');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `hid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uname`, `password`, `dname`, `hid`) VALUES
('akram', '12345', 'docak', 30),
('sahil', '12345', 'docs', 20),
('yusuf', '12345', 'docy', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagetest`
--
ALTER TABLE `imagetest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagetest`
--
ALTER TABLE `imagetest`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
