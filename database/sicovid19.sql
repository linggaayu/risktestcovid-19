-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 02.41
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugascorona_lingga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `manusia`
--

CREATE TABLE `manusia` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `usia` int(11) NOT NULL,
  `jumlah_ya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manusia`
--

INSERT INTO `manusia` (`id`, `nama`, `jk`, `usia`, `jumlah_ya`) VALUES
(4, 'Muhammad Ramdhani', 'L', 16, 6),
(5, 'Lingga  Ayu', 'P', 16, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `manusia`
--
ALTER TABLE `manusia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `manusia`
--
ALTER TABLE `manusia`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
