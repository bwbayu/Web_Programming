-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2022 pada 15.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_desweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_contact`
--

CREATE TABLE `data_contact` (
  `id` int(11) NOT NULL,
  `Name_user` varchar(50) NOT NULL,
  `Email_user` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_contact`
--

INSERT INTO `data_contact` (`id`, `Name_user`, `Email_user`, `Subject`, `Message`) VALUES
(14, 'bayu wicaksono', 'byebayuuu@gmail.com', 'test', 'test'),
(15, 'bayu', 'bwbayuuu@gmail.com', 'test', 'testfinal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_contact`
--
ALTER TABLE `data_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_contact`
--
ALTER TABLE `data_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
