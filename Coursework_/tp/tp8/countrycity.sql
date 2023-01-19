-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2022 pada 12.29
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
-- Database: `datacountry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `country_city`
--

CREATE TABLE `country_city` (
  `id` int(11) NOT NULL,
  `countryName` varchar(100) NOT NULL,
  `countryCode` varchar(100) NOT NULL,
  `cityName` varchar(100) NOT NULL,
  `cityPopulation` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `country_city`
--

INSERT INTO `country_city` (`id`, `countryName`, `countryCode`, `cityName`, `cityPopulation`, `province`) VALUES
(1, 'indonesia', '1', 'bandung', '100000', 'jawa barat'),
(2, 'korea selatan', '2', 'seoul', '200000', 'seoul'),
(3, 'singapura', '3', 'singapore', '20000', 'singapura');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `country_city`
--
ALTER TABLE `country_city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `country_city`
--
ALTER TABLE `country_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
