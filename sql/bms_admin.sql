-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 01:57 PM
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
-- Database: `bms_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `text_anno` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `text_anno`) VALUES
(11, '1ST ANNOUNCEMENT'),
(14, 'Welcome to Brgy!'),
(16, 'thea'),
(17, 'a'),
(19, 'green panda ituu!'),
(20, 'This is green panda. We are group of students that are pretty and lovely XOXO');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `dashID` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `senior` int(11) NOT NULL,
  `household` int(11) NOT NULL,
  `school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`dashID`, `population`, `female`, `male`, `senior`, `household`, `school`) VALUES
(1, 1, 2, 3, 4, 5, 6),
(2201, 2, 75, 39, 58, 25, 62),
(2212, 3, 76, 40, 59, 26, 63),
(2213, 2, 75, 40, 58, 25, 62),
(2214, 2, 75, 40, 58, 25, 62),
(2215, 2, 75, 40, 58, 25, 62),
(2216, 1, 2, 3, 4, 5, 6),
(2217, 1, 2, 3, 4, 5, 6),
(2218, 2, 3, 4, 5, 6, 7),
(2219, 2, 3, 4, 5, 6, 7),
(2220, 2, 3, 4, 5, 6, 7),
(2221, 2, 3, 4, 5, 6, 7),
(2222, 2, 3, 4, 5, 6, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`dashID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `dashID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
