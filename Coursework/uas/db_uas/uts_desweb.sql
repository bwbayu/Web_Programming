-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 17.20
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
-- Struktur dari tabel `booking_user`
--

CREATE TABLE `booking_user` (
  `id` int(11) NOT NULL,
  `place` varchar(500) NOT NULL,
  `people` int(11) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking_user`
--

INSERT INTO `booking_user` (`id`, `place`, `people`, `arrivals`, `leaving`) VALUES
(1, 'Seoul', 2, '2022-06-11', '2022-06-12'),
(2, 'bandung', 2, '2022-06-11', '2022-06-12'),
(5, 'jakarta', 12, '2022-06-22', '2022-06-29'),
(6, 'roma', 123, '2022-06-01', '2022-06-14');

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
(11, 'test', 'test@mail.com', 'test', 'test', '2022-05-15 09:20:14', '2022-05-15 09:20:14'),
(16, 'aaaa', 'aaaaaaaa@mail.com', 'aaa', 'aa', '2022-05-19 01:53:26', '2022-05-19 01:53:26'),
(18, '1', '1@mail.com', '123', '123', '2022-06-11 10:05:29', '2022-06-11 10:05:29'),
(19, '1', '1@mail.com', '123', '123', '2022-06-11 10:06:36', '2022-06-11 10:06:36'),
(20, '123', '123@mail.com', '123', '123', '2022-06-11 10:09:24', '2022-06-11 10:09:24'),
(21, '123', '123@mail.com', '123', '123', '2022-06-11 10:10:29', '2022-06-11 10:10:29'),
(22, 'aaa', '123@mail.com', 'a132', '123', '2022-06-11 10:16:45', '2022-06-11 10:16:45'),
(23, 'test1', 'test@mail.com', 'tes123', 'test123', '2022-06-11 10:17:18', '2022-06-11 10:17:18'),
(24, 'aafasdf', 'asdfas@mail.com', '123afds', 'adsfa', '2022-06-11 10:19:22', '2022-06-11 10:19:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-11-074906', 'App\\Database\\Migrations\\Users', 'default', 'App', 1654934515, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'bayu', 'bayu@mail.com', '$2y$10$8FfVU/e/s6M.VZC5Hs2uteJkMLZuTc2dzmTJX7kJvQOorHRfRGgoK'),
(2, 'bayu1', 'bayu1@mail.com', '$2y$10$OnNb46VJGkMskoXb8RMgEe.4HAgCrQaPRCAut0mIJK0koVn1m.mLu'),
(3, 'test', 'test@mail.com', '$2y$10$9Bck572FsWLyfJY8SpUHZ.8Nvm6GyfL/Hr2rlphXyChJ4Cf3knEne');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking_user`
--
ALTER TABLE `booking_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_contact`
--
ALTER TABLE `data_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT untuk tabel `booking_user`
--
ALTER TABLE `booking_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_contact`
--
ALTER TABLE `data_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
