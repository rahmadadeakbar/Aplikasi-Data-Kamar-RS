-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2019 pada 18.12
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meuraxa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
`id_kamar` int(12) NOT NULL,
  `nama_kamar` varchar(12) NOT NULL,
  `id_ruang` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `id_ruang`) VALUES
(1, 'Al-Huda1', 1),
(2, 'Al-Huda2', 1),
(3, 'Al-Huda3', 1),
(4, 'Al-Huda4', 1),
(5, 'Al-Huda5', 1),
(6, 'Al-Huda6', 1),
(7, 'Al-Huda7', 1),
(8, 'Al-Huda8', 1),
(9, 'Al-Huda9', 1),
(10, 'Al-Huda10', 2),
(11, 'Ar-Rahman1', 2),
(12, 'Ar-Rahman2', 2),
(13, 'Ar-Rahman3', 2),
(14, 'Ar-Rahman4', 2),
(15, 'Ar-Rahman5', 2),
(16, 'Ar-Rahman6', 2),
(17, 'Ar-Rahman7', 2),
(18, 'Ar-Rahman8', 2),
(19, 'Ar-Rahman9', 2),
(20, 'Ar-Rahman10', 2),
(21, 'Asy-Syifa1', 3),
(22, 'Asy-Syifa2', 3),
(23, 'Asy-Syifa3', 3),
(24, 'Asy-Syifa4', 3),
(25, 'Asy-Syifa5', 3),
(26, 'Asy-Syifa6', 3),
(27, 'Asy-Syifa7', 3),
(28, 'Asy-Syifa8', 3),
(29, 'Asy-Syifa9', 3),
(30, 'Asy-Syifa10', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
`id_ruang` int(10) NOT NULL,
  `nama_ruang` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(1, 'al - huda'),
(2, 'ar-rahman'),
(3, 'asy-syifa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_kamar`
--

CREATE TABLE IF NOT EXISTS `stok_kamar` (
`id_stok` int(12) NOT NULL,
  `id_kamar` int(12) NOT NULL,
  `total` varchar(2) NOT NULL,
  `tersedia` varchar(2) NOT NULL,
  `terisi` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_kamar`
--

INSERT INTO `stok_kamar` (`id_stok`, `id_kamar`, `total`, `tersedia`, `terisi`) VALUES
(2, 1, '10', '5', '5'),
(3, 11, '10', '4', '6'),
(4, 22, '10', '7', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_file`, `nama_depan`, `nama_belakang`, `email`, `no_hp`, `password`, `level`) VALUES
(4, '07.png', 'dono', 'Akbar', 'fauzi@gmail.com', '082361001252', '900150983cd24fb0d6963f7d28e17f72', 'admin'),
(5, 'ade_akbar19___BpY5qUNhwBm___.jpg', 'ade', 'Akbar', 'rahmadakbar850@yahoo.com', '082361001252', '900150983cd24fb0d6963f7d28e17f72', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`id_kamar`), ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `stok_kamar`
--
ALTER TABLE `stok_kamar`
 ADD PRIMARY KEY (`id_stok`), ADD KEY `id_ruang` (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
MODIFY `id_kamar` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `stok_kamar`
--
ALTER TABLE `stok_kamar`
MODIFY `id_stok` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`);

--
-- Ketidakleluasaan untuk tabel `stok_kamar`
--
ALTER TABLE `stok_kamar`
ADD CONSTRAINT `stok_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
