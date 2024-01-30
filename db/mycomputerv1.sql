-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 02:47 AM
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
-- Database: `mycomputerv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(1, 'amin', 'Laki-laki', 'Apitaik, desa bagek kedok daya', '0878-6396-8484', 'skjdkj@dkdk'),
(2, 'ss', 'Perempuan', 'Apitaik, desa bagek kedok daya', '0878-6396-8484', 'bajangegar8@gmail.com'),
(3, 'lia', 'Perempuan', 'pringgabaya', '0878-6396-8484', 'bajangegar8@gmail.com'),
(4, 'Riski', 'Laki-laki', 'Apitaik, desa bagek kedok daya', '0878-6396-8478', 'agung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perangkat`
--

CREATE TABLE `tb_perangkat` (
  `id_perangkat` int(11) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_perangkat`
--

INSERT INTO `tb_perangkat` (`id_perangkat`, `nama_perangkat`) VALUES
(1, 'komputer'),
(2, 'laptop'),
(3, 'printer'),
(4, 'lcd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `status_proses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `id_pelanggan`, `id_service`, `id_teknisi`, `status_proses`) VALUES
(1, 1, 1, 2, 'Dalam anterian'),
(2, 2, 2, 1, 'Dalam anterian'),
(3, 3, 3, 2, 'Dalam anterian'),
(4, 4, 4, 1, 'Dalam anterian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id_service`, `id_pelanggan`, `nama_perangkat`, `model`, `tanggal_masuk`, `deskripsi`) VALUES
(1, 1, 'laptop', 'sdn', '2024-01-29', '123'),
(2, 2, 'komputer', 'sdn', '2024-01-29', 'asasa'),
(3, 3, 'printer', 'asus', '2024-01-30', 'nggk di sengaja jatuh '),
(4, 4, 'printer', 'JSJSJ', '2024-01-30', 'di injek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(50) NOT NULL,
  `nama_teknisi` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `nama_teknisi`, `Jenis_kelamin`, `alamat`, `spesialis`, `no_hp`) VALUES
(1, 'ahmadi', 'Laki-laki', 'Apitaik, desa bagek kedok daya', 'komputer', '087863968484'),
(2, 'almanda', 'Perempuan', 'Apitaik, desa bagek kedok daya', 'instalasi', '087863968484');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trasaksi`
--

CREATE TABLE `tb_trasaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `total_biaya` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trasaksi`
--

INSERT INTO `tb_trasaksi` (`id_transaksi`, `id_pelanggan`, `id_service`, `id_reservasi`, `total_biaya`, `tanggal_transaksi`) VALUES
(1, 1, 1, 1, '', '2024-01-24'),
(2, 2, 2, 2, '200000', '2024-01-29'),
(3, 3, 3, 3, '', '0000-00-00'),
(4, 4, 4, 4, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `level` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `nama`) VALUES
(0, 'admin', 'admin', 'sabardibahari@gmail.com', 'admin', ''),
(0, 'sabardi', 'sabardi', 'Sabardibahari@gmail.com', 'admin', ''),
(0, '', '', '', 'pilih', ''),
(0, 'sabardi', '12345', 'sabardibahari@gmail.com', 'member', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_perangkat`
--
ALTER TABLE `tb_perangkat`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

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
-- Indexes for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_perangkat`
--
ALTER TABLE `tb_perangkat`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
