-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2018 pada 03.25
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jurnal10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal10`
--

CREATE TABLE `t_jurnal10` (
  `nim` int(11) NOT NULL,
  `nama` text NOT NULL,
  `angkatan` int(4) NOT NULL,
  `fakultas` text NOT NULL,
  `prodi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal10`
--

INSERT INTO `t_jurnal10` (`nim`, `nama`, `angkatan`, `fakultas`, `prodi`) VALUES
(12345, 'Aulia', 2012, 'informatika', 's1 informatika'),
(2147483647, 'Putri Aulianti Maulida Rumi', 2017, 'Fakultas Ilmu Terapan', 'D3 Manajemen Informatika');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_jurnal10`
--
ALTER TABLE `t_jurnal10`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
