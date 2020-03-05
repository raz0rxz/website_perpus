-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 05:43 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `lsp_buku`
--

CREATE TABLE `lsp_buku` (
  `no` varchar(225) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `klasifikasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lsp_buku`
--

INSERT INTO `lsp_buku` (`no`, `tanggal`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `asal`, `klasifikasi`) VALUES
('1', '05/03/2020', 'Orang Orang Biasa', 'Andrea Hirata', 'Bentang Pustaka', 2019, 'Belitong', 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `lsp_buku_tamu`
--

CREATE TABLE `lsp_buku_tamu` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tanggal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lsp_buku_tamu`
--

INSERT INTO `lsp_buku_tamu` (`id`, `nama`, `kelas`, `keperluan`, `tanggal`) VALUES
(1, 'Rendi Buana Perdana', 'XII RPL A', 'Meminjam', '05/03/2020');

-- --------------------------------------------------------

--
-- Table structure for table `lsp_peminjaman`
--

CREATE TABLE `lsp_peminjaman` (
  `id` int(225) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `no_buku` varchar(20) NOT NULL,
  `tanggal_pinjam` varchar(50) NOT NULL,
  `tanggal_kembali` varchar(50) NOT NULL,
  `kembali` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `l` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lsp_buku`
--
ALTER TABLE `lsp_buku`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `lsp_buku_tamu`
--
ALTER TABLE `lsp_buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lsp_peminjaman`
--
ALTER TABLE `lsp_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lsp_buku_tamu`
--
ALTER TABLE `lsp_buku_tamu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lsp_peminjaman`
--
ALTER TABLE `lsp_peminjaman`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
