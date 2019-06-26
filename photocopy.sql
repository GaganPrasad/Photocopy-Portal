-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 06:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photocopy`
--

-- --------------------------------------------------------

--
-- Table structure for table `printData`
--

CREATE TABLE `printData` (
  `slno` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `usn` varchar(16) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `mobile` int(13) NOT NULL,
  `n_color` int(3) NOT NULL,
  `n_bw` int(3) NOT NULL,
  `n_copies` int(3) NOT NULL,
  `binding` varchar(20) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `user_type` int(2) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printData`
--

INSERT INTO `printData` (`slno`, `name`, `usn`, `dept`, `mobile`, `n_color`, `n_bw`, `n_copies`, `binding`, `file_name`, `user_type`, `details`) VALUES
(1, 'John', '1nh14cs089', 'CSE', 2147483647, 2, 30, 30, 'yes', 'somefile', 1, ''),
(2, 'asda', 'das', 'yuio', 2147483647, 1, 1, 1, 'Tape Binding', './rotate.png', 1, ''),
(12, 'vb', 'qwe', 'scds', 12, 1, 1, 1, 'Tape Binding', 'Screenshot 2019-04-30 at 2.53.34 PM.png', 1, ''),
(13, 'Hatprab', '12345', 'CSE', 12345, 1, 1, 1, 'Soft Binding', '_CampaignImage_BetterDazeAhead_Hero_021119.R1c_RGB.jpg', 1, ''),
(14, 'Test', '', 'this is ', 56789, 1, 1, 1, 'Soft Binding', 'Screenshot 2019-04-30 at 2.53.34 PM.png', 2, ''),
(15, 'Test', '', 'this is ', 56789, 1, 1, 1, 'Soft Binding', 'Screenshot 2019-04-30 at 2.53.34 PM.png', 2, ''),
(17, 'This', '', 'af', 2345, 1, 1, 1, 'Tape Binding', '', 3, ''),
(18, 'Testasd', '', 'this is ', 56789, 1, 1, 1, 'Soft Binding', 'extended.png', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `storeData`
--

CREATE TABLE `storeData` (
  `slno` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storeData`
--

INSERT INTO `storeData` (`slno`, `name`, `subject`, `dept`, `sem`, `file`, `description`, `user_type`) VALUES
(1, '', '', 'Test', '', 'rotate.png', 'Gds', 5),
(2, '', '', 'Test', '', 'rotate.png', 'Gds', 5),
(3, 'Thsi', 'is', 'sap', '23', '_CampaignImage_BetterDazeAhead_Hero_021119.R1c_RGB.jpg', 'wew', 4),
(4, 'Thsi', 'is', 'sap', '23', '_CampaignImage_BetterDazeAhead_Hero_021119.R1c_RGB.jpg', 'wew', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printData`
--
ALTER TABLE `printData`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `storeData`
--
ALTER TABLE `storeData`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printData`
--
ALTER TABLE `printData`
  MODIFY `slno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `storeData`
--
ALTER TABLE `storeData`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
