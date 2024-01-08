-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 02:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'tamu', 'tamu', 'tamu@gmail.com', 'tamu'),
(2, 'resepsionis', 'resepsionis', 'resepsionis@gmail.com', 'resepsionis'),
(3, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(4, 'tamu1', 'tamu1', 'tamu1@gmail.com', 'tamu'),
(5, 'Andi', '$2y$10$HWsrTV6gKqeLnnXk.j', 'andi1@gmail.com', 'admin'),
(6, 'saya', 'saya', 'miftahjnh0@gmail.com', 'tamu'),
(7, 'aku', 'aku', 'andi1@gmail.com', 'tamu'),
(8, 'admin1', 'admin1', 'lii@gmail.com', 'admin'),
(9, 'tamu2', 'tamu2', 'tamu2@gmail.com', 'tamu'),
(10, 'tamu3', 'tamu3', 'miftahjnh0@gmail.com', 'tamu'),
(11, 'resepsionis', 'reepsionis', '', ''),
(12, 'admin', 'admin', '', ''),
(13, 'admin5', 'admin5', 'miftahjnh0@gmail.com', 'admin'),
(14, 'admin4', 'admin', '', ''),
(15, 'Budi', 'budi', 'budi@gmail.com', 'admin'),
(16, 'renita', 'renita', 'ren@gmail.com', 'superadmin');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
