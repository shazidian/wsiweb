-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 11:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydts`
--

-- --------------------------------------------------------

--
-- Table structure for table `diri`
--

CREATE TABLE `diri` (
  `id` tinyint(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `lahir` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `kelamin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diri`
--

INSERT INTO `diri` (`id`, `nama`, `lahir`, `email`, `telpon`, `alamat`, `kelamin`) VALUES
(2, 'Yonika Dian Nur Fitri', '2004-05-22', 'yonika2254@gmail.com', '08980098155', 'Jalan Lawu III, Kramat, Kec. Nganjuk', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diri`
--
ALTER TABLE `diri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diri`
--
ALTER TABLE `diri`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
