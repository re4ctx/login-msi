-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-msi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('admin','user','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('manager', '1d0258c2440a8d19e716292b231e3190', 'manager'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `akun_toko`
--

CREATE TABLE `akun_toko` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `toko` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_toko`
--

INSERT INTO `akun_toko` (`username`, `password`, `toko`) VALUES
('toko1', 'toko1', 1),
('toko2', 'toko2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `terjual` int(12) NOT NULL,
  `toko` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk`, `harga_beli`, `harga_jual`, `jumlah`, `terjual`, `toko`) VALUES
(8, 'Hoodie', 75000, 100000, 100, 9, 1),
(9, 'T-Shirt Oversized', 25000, 50000, 100, 5, 2),
(10, 'Celana Jeans', 75000, 150000, 100, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `akun_toko`
--
ALTER TABLE `akun_toko`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
