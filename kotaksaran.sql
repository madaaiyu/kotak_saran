-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 09.10
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kotaksaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotak_saran`
--

CREATE TABLE `kotak_saran` (
  `id_p` int(255) NOT NULL,
  `pelapor` varchar(255) NOT NULL,
  `isi_saran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kotak_saran`
--

INSERT INTO `kotak_saran` (`id_p`, `pelapor`, `isi_saran`) VALUES
(1, 'ahaaay', 'aku sayang kamuuuu'),
(2, 'Muhammad khalis', 'Sekolahnya sudah menyenangkan hanya kurang ac saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_didik`
--

INSERT INTO `peserta_didik` (`id`, `nama`, `alamat`, `sekolah`, `kelas`) VALUES
(1, 'Muhammad khalis', 'jalan raya bogor', 'SMKN 64 jakarta', 'XII rpl'),
(4, 'galuuh hiji', 'gg angasaaADAwfd', 'SMKN 64 jakarta', 'XI RPL'),
(5, 'ahhhay', 'gg bogor', 'SMKN 64 jakarta', 'XI RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'adithya', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  ADD PRIMARY KEY (`id_p`);

--
-- Indeks untuk tabel `peserta_didik`
--
ALTER TABLE `peserta_didik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  MODIFY `id_p` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peserta_didik`
--
ALTER TABLE `peserta_didik`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
