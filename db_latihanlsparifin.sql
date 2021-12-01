-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 08.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihanlsparifin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_tbl`
--

CREATE TABLE `siswa_tbl` (
  `ID` int(11) NOT NULL,
  `Nis` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Kelas` varchar(4) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_tbl`
--

INSERT INTO `siswa_tbl` (`ID`, `Nis`, `Nama`, `Kelas`, `Jurusan`, `Alamat`) VALUES
(1, '0051773847', 'Rahmandio ilham', 'XII', 'Teknik Komputer Jaringan', 'Bandung'),
(3, '192010049', 'M arifin ilham', 'XII', 'Teknik Komputer Jaringan', 'Salabenda'),
(6, '192002124', 'azriel', 'XII', 'Multimedia', 'jakarta'),
(8, '19200212', 'azriel', 'XII', 'Rekayasa Perangkat Lunak', 'ciapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'tes', '$2y$10$B9qTbBU7UXR1Q7UUAgZqL.s7bkOsst6AgtGwpV.CHSlyecxGKulTi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_tbl`
--
ALTER TABLE `siswa_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa_tbl`
--
ALTER TABLE `siswa_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
