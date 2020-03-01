-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2020 pada 20.48
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_dokter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `pasien` varchar(128) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `id_dokter`, `pasien`, `tanggal_booking`, `jam_masuk`, `jam_keluar`, `keluhan`) VALUES
(1, 1, 'Pasien Satu', '2020-03-01', '14:00:00', '15:00:00', ''),
(2, 1, 'ADasdasd', '2020-03-01', '15:00:00', '16:00:00', ''),
(3, 1, 'Pasien Satu', '2020-03-02', '08:00:00', '09:00:00', 'asdasdasdAWERSF'),
(4, 2, 'Pasien Satu', '2020-03-03', '08:00:00', '09:00:00', 'Sakit aku berparu paru'),
(5, 3, 'Pasien Satu', '2020-03-02', '08:00:00', '09:00:00', 'Kantong kering dok :)'),
(6, 1, 'Dean Abner Julian', '2020-03-02', '10:00:00', '11:00:00', 'Sakitnya dalem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `spesialisasi` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialisasi`) VALUES
(1, 'Dr. Jefri Nichole', 'Spesial penyakit dalam'),
(2, 'Dr. Neymar', 'Spesialisasi Paru'),
(3, 'Dr. Shinta', 'Spesialisasi Kanker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `role` enum('admin','pasien') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `no_telp`, `nama_lengkap`, `role`) VALUES
(1, 'pasien1@mydokter.com', '$2y$10$oqcqGnFzYw/TMo3vU7HSfuWwfU9av0TNa.EtXl0KzbrGFZd2POHpG', '0808081234', 'Pasien Satu', 'pasien'),
(3, 'dabnerjulian@yahoo.com', '$2y$10$Nm1bmNvW5Ac40cTUGS.22e/tTcOeYgpjXlDLoagiZx2TNq5v.ChC2', '08121856261', 'Dean Abner Julian', 'pasien'),
(4, 'admin@gmail.com', '$2y$10$Nm1bmNvW5Ac40cTUGS.22e/tTcOeYgpjXlDLoagiZx2TNq5v.ChC2', '081251423123', 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
