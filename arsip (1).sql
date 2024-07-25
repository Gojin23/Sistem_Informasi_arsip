-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 07:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `indeks`
--

CREATE TABLE `indeks` (
  `id_indeks` int(5) NOT NULL,
  `kode_indeks` varchar(100) DEFAULT NULL,
  `judul_indeks` varchar(100) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indeks`
--

INSERT INTO `indeks` (`id_indeks`, `kode_indeks`, `judul_indeks`, `detail`) VALUES
(15, 'B50TS', 'Surat Dari Dinas Pendidikan', 'Surat Ini berasal dari dinas ');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(5) NOT NULL,
  `no_suratkeluar` varchar(100) DEFAULT NULL,
  `judul_suratkeluar` varchar(100) DEFAULT NULL,
  `id_indeks` int(5) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `no_suratkeluar`, `judul_suratkeluar`, `id_indeks`, `tujuan`, `tgl_keluar`, `keterangan`, `file`) VALUES
(12, 'H512', 'Surat Undangan Wali Murid', 15, 'Wali Murid ', '2024-07-18', 'Surat Undangan Wali Murid Dengan Kepentingan Rapat Pembahasan Anggaran 2024', '1482-Article_Text-2036-1-10-20190812_(1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(5) NOT NULL,
  `no_suratmasuk` varchar(100) DEFAULT NULL,
  `namasurat` varchar(100) DEFAULT NULL,
  `asalsurat` varchar(100) DEFAULT NULL,
  `tglditerima` date DEFAULT NULL,
  `id_indeks` int(5) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `namasurat`, `asalsurat`, `tglditerima`, `id_indeks`, `keterangan`, `file`) VALUES
(21, 'H231', 'Surat Undangan Dinas Dikpora', 'Dinas Pendidikan dan Olahraga', '2024-07-26', 15, 'Surat Undangan Perihal Pembahasan Rencana Pendidikan Tahun Ajaran 2054', 'KOP_TAKMIR_MASJID_AL_AMIN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `level` varchar(13) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `bio`, `email`, `level`, `image`) VALUES
(39, 'superadmin', 'superadmin', 'restu', 'restu ganteng', 'rgrestu18@gmail.com', 'superadmin', 'formal10.jpg'),
(41, 'admin', 'admin', 'Restu gunawan', 'restu gunawan', 'rgrestu18@gmail.com', 'admin', 'formal13.jpg'),
(47, 'restu', 'Restu12345', 'Restu Gunawan', 'Karyawan', 'rgrestu18@gmail.com', 'superadmin', 'formal6_(1)1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id_indeks`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD KEY `id_indeks` (`id_indeks`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD KEY `id_indeks` (`id_indeks`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id_indeks` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
