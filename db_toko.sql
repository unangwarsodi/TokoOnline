-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 06:01 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama`, `jenis`, `harga`, `foto`, `jumlah`, `nama_toko`, `satuan`) VALUES
(28, 'Gula', 'Sembako', 12000, 'Desert.jpg', 20, 'Cahaya Abadi', 'KG'),
(29, 'Beras', 'Sembako', 10000, 'Koala.jpg', 100, 'Cahaya Abadi', 'KG'),
(30, 'Gula Pasir', 'Sembako', 12000, 'Penguins.jpg', 12, 'Eka Jaya', 'KG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_belanja`
--

CREATE TABLE `tbl_belanja` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_belanjaan` int(11) NOT NULL,
  `id_pembeli` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `kota_toko` varchar(100) NOT NULL,
  `daerah_toko` varchar(50) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `nama`, `ttl`, `jk`, `alamat`, `email`, `username`, `password`, `nama_toko`, `kota_toko`, `daerah_toko`, `alamat_toko`) VALUES
(20, 'Unang Warsodi', 'Majalengka, 10 Juli 1999', 'Laki-laki', 'Desa Pagandon, Blok Cimoyan RT 01/RW 03', '', 'unangWarsodi', 'uhn', 'Cahaya Abadi', 'Majalengka', 'Kadipaten', 'Desa Pagandon, Jalan Cimoyan No.23'),
(21, 'Maikel Eka Putra', 'Majalengka, 19 Agustus 2000', 'Laki-laki', 'Desa Babak Jawa, Blok Minggu RT 04/RW 08', '', 'unang9hwarsodi@gmail.com', 'maikel', 'Eka Jaya', 'Majalengka', 'Majalengka', 'Jalan Andul Halim No.165'),
(22, 'Abudi Aziz', 'Majalengka, 12 November 2000', 'Laki-laki', 'Desa Weragati, Blok Dalem RT 04/RW 08', 'abudi@gmail.com', 'abudi', 'abudi', '', '', '', ''),
(23, 'Unang Warsodi', '10 Juli 1999', 'Laki-laki', 'Kadipaten', 'unang9hwarsodi@gmail.com', 'unang', 'unang', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
