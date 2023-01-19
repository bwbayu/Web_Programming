-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2022 pada 16.55
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
  `Message` varchar(999) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_contact`
--

INSERT INTO `data_contact` (`id`, `Name_user`, `Email_user`, `Subject`, `Message`, `created_at`, `updated_at`) VALUES
(8, 'test', 'test@mail.com', 'test', 'test', '2022-05-15 09:18:33', '2022-05-15 09:18:33'),
(9, 'test', 'test@mail.com', 'test', 'test', '2022-05-15 09:18:56', '2022-05-15 09:18:56'),
(10, 'test', 'test@mail.com', 'test', 'test', '2022-05-15 09:19:08', '2022-05-15 09:19:08'),
(11, 'test', 'test@mail.com', 'test', 'test', '2022-05-15 09:20:14', '2022-05-15 09:20:14');

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
