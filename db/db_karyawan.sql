-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 01:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `kode_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`kode_karyawan`, `nama_karyawan`, `alamat`, `kota`, `provinsi`, `kode_pos`, `no_telpon`, `email`, `jabatan`, `gaji_pokok`, `tanggal_masuk`) VALUES
(1237, 'Abu Hasan Al Anshori', 'Desa Siwuluh', 'Kabupaten Brebes', 'Jawa Tengah', 52253, '081542133975', 'abuhasanalanshori@gmail.com', 'Staff IT', 1000000, '2023-03-01'),
(1238, 'Yanto Subagja', 'Tanjung Sari', 'Kabupaten Brebes', 'Jawa Tengah', 52250, '08123456789', 'Yanto@gmail.com', 'Humas', 2500000, '2023-03-01'),
(1239, 'Iqbaal Harits Maulana', 'Desa Banjaratma', 'Brebes', 'Jawa Tengah', 52253, '08123456789', 'Iqbaalharitsmaulana09@gmail.com', 'CEO', 4000000, '2023-02-01'),
(1240, 'Raden Supono', 'Sindang Jaya', 'Semarang', 'Jawa Tengah', 45777, '085124799856', 'radensupono123@gmail.com', 'Designer', 2500000, '2023-03-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `kode_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
