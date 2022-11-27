-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2022 pada 10.07
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_nama_table`
--

CREATE TABLE `showroom_nama_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `showroom_nama_table` (`id_mobil`,`nama_mobil`,`pemilik_mobil`,`merk_mobil`,`tanggal_beli`,`deskripsi`,`foto_mobil`,`status_pembayaran`) VALUES
(11,'kijang','citra_1202200227','hrv',11/10/2022,'kijang mengapung','HRV.png','belum lunas');
(3,'kijang','rr_1202200224','kijang',11/10/2022,'a mengapung','logo-ead.png','belum lunas');
(4,'kijang','aa_1202200225','suzuki',11/10/2022,'k mengapung','starlight.jpg','belum lunas');
--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_nama_table`
--
ALTER TABLE `showroom_nama_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_nama_table`
--
ALTER TABLE `showroom_nama_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
