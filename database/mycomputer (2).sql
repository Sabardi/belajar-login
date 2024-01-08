-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 12:08 AM
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
(8, 'service laptop');

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
(6, '$wwjkwj', 'jjw', '3i2i2'),
(7, '$7282hu8', 'uh839h', '93uue9'),
(9, 'sabardia2', 'sssss', 'bagyua'),
(10, 'agung ', 's', 'nagu'),
(11, 'asu', 'asu', 'asu'),
(14, 'ad', 'ad', 'ad');

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
(6, 'laptop', 'hshsh', '2024-01-06', 'k'),
(7, 'pembagian', 'iwiwi', '2024-01-06', 'sds'),
(9, 'komputer', 'hersa', '0030-08-24', 'rusak di injek raksasa'),
(10, 'komputer', 'hshsh', '2024-01-06', 'sdsds'),
(11, 'pembagian', 'JSJSJ', '2024-01-06', 'saass'),
(12, 'laptop', 'JSJ22SJ', '2024-01-09', '222');

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

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `nama`, `alamat`, `spesialis`, `no_hp`) VALUES
(3, 'eko', 'bagu', 'instalasi', '62722292');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transakaksi_service`
--

CREATE TABLE `tb_transakaksi_service` (
  `id_transaksi` int(11) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status_pembaya` varchar(100) NOT NULL,
  `total_biaya` varchar(100) NOT NULL,
  `di_proses_oleh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_trasaksi`
--

CREATE TABLE `tb_trasaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(0, 'agung', '', 'agung@gmail.com', 'agung'),
(0, 'admin', 'admin', 'agung@gmail.com', 'admin'),
(0, 'sabardi', 'member', 'sabardibahari@gmail.com', 'member'),
(0, 'burhan', 'burhan', 'sabardibahari@gmail.com', 'member');

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
-- Indexes for table `tb_transakaksi_service`
--
ALTER TABLE `tb_transakaksi_service`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `Id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_transakaksi_service`
--
ALTER TABLE `tb_transakaksi_service`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
