-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql305.epizy.com
-- Generation Time: Sep 07, 2021 at 03:57 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29106857_trial`
--

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `firstname`, `lastname`, `address`, `phoneno`, `photo`, `username`, `password`, `role`, `status`, `votes`) VALUES
(28, 'VINAYKUMAR', 'TM', 'hubli', 6363843361, 'bitcoin.jpg', '2KE18EC099@kleiit.ac.in', 'vinay12', 2, 0, 9),
(29, 'PAVANKUMAR', 'HS', 'hubli', 0, 'ETH.png', '2Ke18EC054@kleit.ac.in', 'pavan12', 2, 1, 10),
(30, 'RAJAT', 'MOGER', 'hubli', 9448037634, 'Screenshot_2021-04-22-21-28-50-11-01.jpeg', '2KE18EC059@kleit.ac.in', 'rajat12', 1, 1, 0),
(32, 'Tejaswini', '', 'Hubli', 8762973966, '', 'tejaswinipai469@gmail.com', 'teju@92', 1, 1, 0),
(33, 'TEJASWINI', 'PAI', 'hubli', 8762973966, 'thet.png', '2KE18EC092@kleit.ac.in', 'tejaswin', 2, 0, 10),
(34, 'Luffy', 'Moger', 'Jdj', 9995566883, '', '', '', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
