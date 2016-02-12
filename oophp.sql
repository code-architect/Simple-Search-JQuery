-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 03:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oophp`
--
CREATE DATABASE IF NOT EXISTS `oophp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oophp`;

-- --------------------------------------------------------

--
-- Table structure for table `jqname`
--

DROP TABLE IF EXISTS `jqname`;
CREATE TABLE IF NOT EXISTS `jqname` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jqname`
--

INSERT INTO `jqname` (`id`, `name`) VALUES
(4, 'Excalibur'),
(5, 'Kusangi-no-Tsurugi'),
(6, 'The Sword of Damocles'),
(7, 'Vorpal Sword'),
(8, 'Shamshir-e-Zomorrodnegar'),
(9, 'Glory of Ten Powers'),
(10, 'Gram Sword'),
(11, 'Sword of Owmen'),
(14, 'Tensa Zangetsu'),
(15, 'Senbonzakure'),
(16, 'Wabiske'),
(17, 'Reugin Jakkha'),
(18, 'Hourinmaru'),
(19, 'Minazuki'),
(22, ' kazeshini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jqname`
--
ALTER TABLE `jqname`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jqname`
--
ALTER TABLE `jqname`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
