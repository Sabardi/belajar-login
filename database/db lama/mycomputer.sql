-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'install ulang'),
(2, 'sdsds'),
(3, 'service komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `Id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`Id_pelanggan`, `nama`, `alamat`, `no_hp`) VALUES
(1, 'ss', 'bagu', 'dw'),
(2, 'dhbqdqq', 'jsj', 'w9iei'),
(3, 'bagu', 'ahah', 'jaja'),
(4, 'jajaj', '', 'hssj'),
(5, 'uwuw', '', 'uuw'),
(6, '$wwjkwj', 'jjw', '3i2i2'),
(7, '$7282hu8', 'uh839h', '93uue9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(11) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id_service`, `nama_perangkat`, `model`, `tanggal_masuk`, `deskripsi`) VALUES
(1, 'saas', 'asas', '2024-01-02', 'saadsfghjjut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'ilham', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `Id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
